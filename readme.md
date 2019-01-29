# SCWS

該項目封裝 [簡易中文分詞系統](https://github.com/hightman/scws) 為 Laravel 拓展包。

**注意: 本項目不包含SCWS PHP 擴展, 你需要先自行安裝才能使用SCWS的分詞功能。**

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
