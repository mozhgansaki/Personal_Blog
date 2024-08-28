<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Policies\CategoryPolicy;
use App\Policies\PostPolicy;
use App\Policies\TagPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
    public function boot(): void
    {
        Gate::define('create-post', [PostPolicy::class, 'create']);
        Gate::define('delete-post', [PostPolicy::class, 'delete']);
        Gate::define('update-post', [PostPolicy::class, 'update']);
        Gate::define('create-category', [CategoryPolicy::class, 'create']);
        Gate::define('update-category', [CategoryPolicy::class, 'update']);
        Gate::define('delete-category', [CategoryPolicy::class, 'delete']);
        Gate::define('create-tag', [TagPolicy::class, 'create']);
        Gate::define('delete-tag', [TagPolicy::class, 'delete']);
        Gate::define('update-tag', [TagPolicy::class, 'update']);
    }
}
