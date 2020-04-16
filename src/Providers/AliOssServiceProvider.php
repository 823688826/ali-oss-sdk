<?php

namespace PRINCE\ALIOSS\Providers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use OSS\OssClient;
use PRINCE\ALIOSS\AliOss;

class AliOssServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Storage::extend('alioss', function ($app, $config) {
            $client = new OssClient(
                $config["key"],
                $config["secret"],
                $config["endpoint"],
                $config["isCName"],
                $config["securityToken"],
                $config["requestProxy"]
            );
            $filesystem = new Filesystem(new AliOss($client,$config["bucket"]));
            return $filesystem;
        });
    }
}
