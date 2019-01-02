<?php

namespace App\Providers;

use App\Libraries\EsEngine;
use Illuminate\Support\ServiceProvider;
use Laravel\Scout\EngineManager;
use Elasticsearch\ClientBuilder as ElasticBuilder;
use Illuminate\Support\Facades\Schema;
use Log;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		Schema::defaultStringLength(191);
        resolve(EngineManager::class)->extend('es', function($app) {
            return new EsEngine(ElasticBuilder::create()
                ->setHosts(config('scout.elasticsearch.hosts'))
                ->build(),
                config('scout.elasticsearch.index')
            );
        });
		DB::listen(function ($query) {
			$tmp = str_replace('?', '"'.'%s'.'"', $query->sql);
			$tmp = vsprintf($tmp, $query->bindings);
			$tmp = str_replace("\\","",$tmp);
			//Log::info($tmp."\n\n\t");
			$log = '[' . date('Y-m-d H:i:s') . '] ' . $tmp . "\r\n\n";
			$filepath = storage_path('logs\sql.log');
			file_put_contents($filepath, $log, FILE_APPEND);
		});
//        DB::listen(function($query){
//            dump($query->sql);
//        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
