<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //

        Gate::define('admin', function(User $user){
            return $user->role == 'admin';
        });

        Gate::define('catering', function(User $user){
            return $user->role == 'catering';
        });

        Blade::directive('money', function ($money) {
            return "<?php echo number_format($money, 2); ?>";
        });
    }
}
