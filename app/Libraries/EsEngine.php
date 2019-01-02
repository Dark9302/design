<?php namespace App\Libraries;

use Laravel\Scout\Builder;
use ScoutEngines\Elasticsearch\ElasticsearchEngine;

/**
 * Created by PhpStorm.
 * User: lijinma
 * Date: 05/03/2017
 * Time: 4:23 PM
 */

class EsEngine extends ElasticsearchEngine
{
    public function search(Builder $builder)
    {
        $result =  $this->performSearch($builder, array_filter([
            'numericFilters' => $this->filters($builder),
            'size' => $builder->limit,
        ]));
//print_r($this->filters($builder));
        return $result;
    }

    /**
     * Perform the given search on the engine.
     *
     * @param  Builder  $builder
     * @return mixed
     */
    protected function performSearch(Builder $builder, array $options = [])
    {
//        print_r($builder);
//        print_r($builder->query);
		print_r($builder->callback);
        if($builder->callback){
            if($builder->callback<20){
                //查询dict_participle
                //汉字
                $hanzi = preg_match('/['.chr(0xa1).'-'.chr(0xff).']/', $builder->query);
                //字母
                $zimu = preg_match('/[a-zA-Z]/', $builder->query);
                if($zimu){
                    //字母
                    if($builder->callback == '12'){
                        $params = [
                            'index' => $this->index,
                            'type' => $builder->model->searchableAs(),
                            'body' => [
                                'query' => [
                                    'bool' => [
                                        "must" => [
                                            ["match" => [
                                                "classify" => "1 2",
                                            ]],
                                            ["match" => [
                                                "input_code" => "{$builder->query}",
                                            ]]
                                        ],
                                        "should"=>[
                                            "match" =>[
                                                "symptom" => "{$builder->query}"
                                            ]
                                        ]
                                    ]
                                ],
                            ]
                        ];
                    }else{
                        $params = [
                            'index' => $this->index,
                            'type' => $builder->model->searchableAs(),
                            'body' => [
                                'query' => [
                                    'bool' => [
                                        "must" => [
                                            ["match" => [
                                                "classify" => "{$builder->callback}",
                                            ]],["match" => [
                                                "input_code" => "{$builder->query}",
                                            ]],
                                        ],
                                        "should"=>[
                                            "match" =>[
                                                "symptom" => "{$builder->query}"
                                            ]
                                        ]
                                    ]
                                ],
                            ]
                        ];
                    }
                }else{
                    //汉字
                    if($builder->callback == '12'){
                        $params = [
                            'index' => $this->index,
                            'type' => $builder->model->searchableAs(),
                            'body' => [
                                'query' => [
                                    'bool' => [
                                        "must" => [
                                            "match" => [
                                                "classify" => "1 2",
                                            ]
                                        ],
                                        "should"=>[
                                            "match" =>[
                                                "symptom" => "{$builder->query}"
                                            ]
                                        ]
                                    ]
                                ],
                            ]
                        ];
                    }else{
                        $params = [
                            'index' => $this->index,
                            'type' => $builder->model->searchableAs(),
                            'body' => [
                                'query' => [
                                    'bool' => [
                                        "must" => [
                                            "match" => [
                                                "classify" => "{$builder->callback}",
                                            ],
                                        ],
                                        "should"=>[
                                            "match" =>[
                                                "symptom" => "{$builder->query}"
                                            ]
                                        ]
                                    ]
                                ],
                            ]
                        ];
                    }
                }
            }else{
                //查询dict_for_syndrome
                if($builder->callback == 21){
                    //只匹配病名
                    $params = [
                        'index' => $this->index,
                        'type' => $builder->model->searchableAs(),
                        'body' => [
                            'query' => [
                                'bool' => [
                                    "should"=> [
                                        "match" => [
                                            "disease_name" => "{$builder->query}",
                                        ],
                                    ]
                                ]
                            ],
                        ]
                    ];
                }else if($builder->callback == 22){
                    //只匹配症型
                    $params = [
                        'index' => $this->index,
                        'type' => $builder->model->searchableAs(),
                        'body' => [
                            'query' => [
                                'bool' => [
                                    "should"=> [
                                        "match" => [
                                            "syndrome_name" => "{$builder->query}",
                                        ],
                                    ]
                                ]
                            ],
                        ]
                    ];
                }else if($builder->callback == 99){
                    //只匹配辩证表dict_dialectical

                    $params = [
                        'index' => $this->index,
                        'type' => $builder->model->searchableAs(),
                        'body' => [
                            'query' => [
                                'bool' => [
                                    "must" => [
                                        "match" => [
                                            "primary_name" => "{$builder->query}",
                                        ]
                                    ],
                                    "should"=> [
                                        ["match" => [
                                            "accompany_name" => "{$builder->query}",
                                        ]],
                                        ["match" => [
                                            "tongue_name" => "{$builder->query}",
                                        ]],
                                        ["match"=> [
                                            "pulse_name"=>  "{$builder->query}",
                                        ]],
                                    ]
                                ]
                            ],
//                            "size" => 0,
//                            "aggs" => [
//                                "distinct_code" => [
//                                    "cardinality" => [
//                                        "field" => "code"
//                                    ]
//                                ]
//                            ]
//                            "collapse"=>[
//                                "field"=>"code"
//                            ],
                        ]
                    ];
                }
            }
        }else{
            $params = [
                'index' => $this->index,
                'type' => $builder->model->searchableAs(),
                'body' => [
                    'query' => [
                        'bool' => [
//                            "must" => [
//                                "match" => [
//                                    "syndrome_code" => "1000.1000 1000.1001",
//                                ]
//                            ],
                            "should"=> [
                                ["match" => [
                                    "disease_name" => "{$builder->query}",
                                ]],
                                ["match" => [
                                    "syndrome_name" => "{$builder->query}",
                                ]],
                                ["match"=> [
                                    "symptom"=>  "{$builder->query}",
                                ]],
                            ]
                        ]
                    ],
                ]
            ];
        }

//        $params = [
//            'index' => $this->index,
//            'type' => $builder->model->searchableAs(),
//            'body' => [
//                'query' => [
//                    'bool' => [
//                        "must" => [
//                            "match" => [
//                                "classify" => "1 2",
//                            ]
//                        ],
//                        "should"=>[
//                            "match" =>[
//                                "symptom" => "{$builder->query}"
//                            ]
//                        ]
//                    ]
//                ],
//            ]
//        ];
        /**
         * 这里使用了 highlight 的配置
         */
        if ($builder->model->searchSettings
            && isset($builder->model->searchSettings['attributesToHighlight'])
        ) {
            $attributes = $builder->model->searchSettings['attributesToHighlight'];
            foreach ($attributes as $attribute) {
                $params['body']['highlight']['fields'][$attribute] = new \stdClass();
            }
        }

        if (isset($options['from'])) {
            $params['body']['from'] = $options['from'];
        }

        if (isset($options['size'])) {
            $params['body']['size'] = $options['size'];
        }
//print_r($options['numericFilters']);
        if (isset($options['numericFilters']) && count($options['numericFilters'])) {
            $params['body']['query']['bool']['should'] = array_merge($params['body']['query']['bool']['should'],
                $options['numericFilters']);
        }
//        print_r($params['body']);
        return $this->elastic->search($params);
    }

    /**
     * Map the given results to instances of the given model.
     *
     * @param  mixed  $results
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return Collection
     */
    public function map($results, $model)
    {
        if (count($results['hits']['total']) === 0) {
            return Collection::make();
        }

        $keys = collect($results['hits']['hits'])
            ->pluck('_id')->values()->all();

        $models = $model->whereIn(
            $model->getKeyName(), $keys
        )->get()->keyBy($model->getKeyName());

        return collect($results['hits']['hits'])->map(function ($hit) use ($model, $models) {
            $one = $models[$hit['_id']];
            /**
             * 这里返回的数据，如果有 highlight，就把对应的  highlight 设置到对象上面
             */
            if (isset($hit['highlight'])) {
                $one->highlight = $hit['highlight'];
            }
            return $one;
        });
    }

}