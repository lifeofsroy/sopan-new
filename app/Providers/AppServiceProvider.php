<?php

namespace App\Providers;

use App\Models\ContactInfo;
use App\Support\Zoom;
use App\Models\WebSetting;
use App\Models\MailSetting;
use App\Models\PluginSetting;
use App\Models\SocialLink;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('zoom', function () {
            return new Zoom();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $web_setting = WebSetting::first();
        $mail_setting = MailSetting::first();
        $plugin_setting = PluginSetting::first();
        $social_links = SocialLink::all();
        $contact_info = ContactInfo::first();

        Config::set([
            'app.name' => $web_setting->app_name,

            'mail.mailers.smtp.host' => $mail_setting->mail_host,
            'mail.mailers.smtp.port' => $mail_setting->mail_port,
            'mail.mailers.smtp.encryption' => $mail_setting->mail_encryption,
            'mail.mailers.smtp.username' => $mail_setting->mail_username,
            'mail.mailers.smtp.password' => $mail_setting->mail_password,
            'mail.from.address' => $mail_setting->from_mail,
            'mail.from.name' => $mail_setting->from_name,
        ]);


        View::share('plugin', $plugin_setting);
        View::share('setting', $web_setting);
        View::share('socials', $social_links);
        View::share('contact', $contact_info);
    }
}
