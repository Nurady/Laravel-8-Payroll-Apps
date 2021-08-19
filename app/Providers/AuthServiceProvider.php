<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Division;
use App\Policies\DivisionPolicy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Division::class => DivisionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('akses', function (User $user) {
            $role= Auth::user()->roles()->where('role_id', 1)->get(); // hasilnya collection
            foreach ($role as $item) {
                if($item) {
                    return true;
                }
            }
            return null;
        });

        Gate::define('tambah_data', function (User $user) {
            // $role = User::find($user->id)->roles;
            $role= Auth::user()->roles()->where('role_id', 1)->get(); // hasilnya collection
            foreach ($role as $item) {
                if($item) {
                    return true;
                }
            }
            return null;
        });

        Gate::define('hapus_edit_data', function (User $user) {
            // $role = User::find($user->id)->roles;
            $role= Auth::user()->roles()->where('role_id', 1)->get(); // hasilnya collection
            foreach ($role as $item) {
                if($item) {
                    return true;
                }
            }
            return null;
        });
    }
}
