<?php

namespace App\Providers;

use App\Models\SettingModel;
use Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;


class MailConfigServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $settingModel = new SettingModel();
        $mail         = $settingModel->getItem(null, ['task' => 'get-item-setting-mail']);
        Config::set('mail.mailers.smtp.username', $mail['username']);
        Config::set('mail.mailers.smtp.password', $mail['password']);
        Config::set('mail.from.address',$mail['username']);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
  
    }
}
