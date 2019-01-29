# SCWS

該項目封裝 [簡易中文分詞系統](https://github.com/hightman/scws) 為 Laravel 拓展包。

**注意: 本項目不包含SCWS PHP 擴展, 你需要先自行安裝才能使用SCWS的分詞功能。**

[官方安裝說明](http://www.xunsearch.com/scws/docs.php#instscws) | [轉載別人的安裝教學](https://www.jianshu.com/p/c1dbad3a3630)

## 安裝

```
composer require hallelujahbaby/scws
```

更新你的依賴包 ```composer update``` 或者全新安裝 ```composer install```。

## 使用

如你在使用 Laravel 5.5 以下版本，你必須自己註冊服務提供者到Laravel服務提供者列表中。

打開配置文件 `config/app.php`。

找到key為 `providers` 的數組，在數組中添加服務提供者。

```php
    'providers' => [
        // ...
        Latrell\Scws\ScwsServiceProvider::class,
    ]
```

找到key為 `aliases` 的數組，在數組中註冊Facades。

```php
    'aliases' => [
        // ...
        'Scws' => Latrell\Scws\Facades\Scws::class,
    ]
```

發怖配置文件到你的項目內。
```bash
php artisan vendor:publish --provider="Latrell\Scws\ScwsServiceProvider"
```
發怖成功後會在`Config`產生`latrell-scws.php`, 你可以在內更改配置。
```php
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
```
