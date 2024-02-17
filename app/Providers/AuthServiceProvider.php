<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        // $this->registerPolicies();

        // // Implicitly grant "Super Admin" role all permission checks using can()
        // Gate::before(function ($user, $ability) {
        //     if ($user->hasRole('super-admin')) {
        //         return true;
        //     }
        // });

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->from('admin@guneman.com', 'admin')
                ->subject('Verifikasi Email Guneman')
                ->greeting('Halo!')
                ->line('Terimakasih sudah mendaftar di guneman, Klik tombol dibawah untuk melanjutkan verifikasi email.')
                ->action('Verifikasi Email', $url);
        });
    }
}
