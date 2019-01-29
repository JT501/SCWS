<?php
return [

    // 分詞時所用編碼
    'charset' => 'utf-8',
    // 分詞所用詞典(此處使用utf8的詞典)
    'dict' => '/usr/local/scws/etc/dict.utf8.xdb',
    // 加入額外的詞典
    'add_dict' => '/usr/local/scws/etc/dict_cht.utf8.xdb',
    // 分詞所用規則
    'rule' => '/usr/local/etc/rules.utf8.ini',
    // 分詞前去掉標點符號
    'ignore' => true,
    // 是否複式分割，如“中國人”返回“中國＋人＋中國人”三個詞。
    'multi' => false,
    // 設定將文字自動以二字分詞法聚合
    'duality' => false

];
