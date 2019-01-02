oInit.url = {
    //前端缓存
    qdRedis : "vis/visAjax",
    qdAlertRedisBig : "visAjaxBig",
    //弹框中的药品缓存
    alertRedis : "alertAjax",
    //获取性味归经药品
    xwgjDrug : "vis/xwgjDrug",
    //性味归经加药
    xwgjAddDrug : "vis/xwgjAddDrug",
    /**用户模块**/
    //获取就诊列表数据
    getJzlbInf : "vis/getJzlbInf",
    //未就诊点击
    wjzMaster : "vis/wjzAjax",
    //已就诊列表点击
    yjzMaster : "vis/yjzAjax",
    //就诊历史table点击
    jzHistory : "vis/jzHistory",
    //就诊历史详情
    historyInf : "vis/historyInf",
    //确认按钮点击
    confirmClick : "vis/confirm",
    //获取电子病历信息
    masterDzbl : "vis/masterDzbl",
    /**分词模块**/
    // //分词数据加载
    // setYsInfRedis : "vis/setYsInfRedis",
    //症状点击辩证
    zzClick : "vis/zhengZhuangClick",
    //病名（亚健康）/证型点击辩证
    bmOrZxClick : "vis/diseaseOrSyndromeClick",
    //体制获取对应信息
    tzClick : "vis/tiZhiClick",
    //常见症状检索
    searchCjzz : "vis/searchCjzz",
    /**中药处方模块**/
    //疑似疾病弹框对应的疾病内容
    ysAlertInf : "vis/ysAlertInf",
    //疑似疾病弹框左侧点击获取右侧药品等信息
    getYsPrescInfAndDrug : "getYsPrescInfAndDrug",
    //获取疑似疾病中中药处方药品等信息
    getYsPrescDrug : "vis/getYsPrescDrug",
    //中药处方保存
    saveZyPresc : "vis/savePresc",
    //弹框中中药处方选中
    saveAlertZyPresc : "saveYsPresc",
    //获取患者已保存中药处方信息
    getMasterPrescInf : "vis/getMasterPrescInfAndDrug",
    //中药处方删除
    delPresc : "vis/delPresc",
    //中药处方审核信息
    getShenHeInf: "vis/getShenHeInf",
    //执行中药处方审核
    doShenHe : "vis/doShenHe",
    //获取患者中药处方名下拉列表内容
    getMasterPresc : "vis/getMasterPresc",
    //中药处方切换药房
    changeZyStorage : "vis/changeZyStorage",
    /**西药处方模块**/
    //西药处方保存
    saveXyPresc : "vis/saveXyPresc",
    //获取患者已保存西药处方信息
    getMasterXyPrescInf : "vis/getMasterXyPrescInfAndDrug",
    //西药处方删除
    delXyPresc : "vis/delXyPresc",
    /**其它疗法模块**/
    //获取对应疾病的其它疗法内容
    otherAlertInf : "vis/getTreatmentAlertInf",
    //其它疗法弹框中的内容选中保存
    saveAlertTreatment : "vis/saveAlertTreatment",
    //页面中其它疗法保存
    savePageTreatment : "vis/savePageTreatment",
    //获取患者的其它疗法信息
    getMasterTreat : "vis/getMasterOtherTreatment",
    //西药处方切换药房
    changeXyStorage : "vis/changeXyStorage",
    /**体制模块**/
    //获取体制对应内容
    tzAlertInf : "vis/getTzAlert",
    //体制弹框内容保存
    saveTz : "vis/saveAlertTz",
    /**经验方**/
    //经验方保存
    saveExp : "vis/saveExp",
    //获取经验方左侧列表
    expList: "vis/jyList",
    //经验方左侧列表点击获取右侧内容
    expInf: "jyInf",
    //获取经验方主表信息，用于编辑
    expEditInf: "jyEditInf",
    //经验方主表信息更新
    upExpInf : "upExpInf",
    //经验方药品信息更新
    upExpDrug : "upExpDrug",
    //经验方删除
    delExp : "delExp",
    //经验方检索
    searchExp : "searchExp",
    /**诊疗指南模块**/
    //获取诊疗指南标题和病名
    ZhenLiaoInf : "vis/ZhenLiaoInf",
    //获取诊疗指南证型
    ZhenLiaoZx : "ZhenLiaoZx",
    //获取诊疗指南处方
    ZhenLiaoCf : "ZhenLiaoCf",
    //诊疗指南处方点击
    ZhenLiaoDrug : "getYsPrescDrug",
    //诊疗指南详情弹框
    getZlznAlertInf : "getZlznAlertInf",
    //诊疗指南处方选中保存
    saveZlznPresc : "saveZlznPresc",
    /**收费项目模块**/
    //收费项目保存
    saveSfxm : "vis/saveSfxm",
    /**体质辨识**/
    //体质辨识数据ajax
    tzbsAjax : "tzbs/tzbsAjax",
    //体质辨识数据保存
    saveTzbs : "tzbs/saveTzbs",
    //获取患者体制辨识答题信息和结果
    getUserTzbsInf : "tzbs/getUserTzbsInf",
    //未就诊患者点击
    tzbsWjzClick : "tzbs/wjzMaster",
    //已就诊患者点击
    tzbsYjzClick : "tzbs/yjzMaster",
    //体制辨识历史就诊记录
    tzbsHis : "tzbs/tzbsHistory",
    //体质辨识历史就诊点击
    tzbsHisClick : "tzbs/historyMaster"
};