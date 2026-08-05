<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Pembar;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View::composer('layouts.e_user', function ($view) {
        //     $count_order = m_order::where('id_user', Auth::user()->id)->where('status','ordered')->count();
        //     return $view->with('count_order', $count_order);
        // });
        View::composer('layouts.layout-admin', function ($view) {
            $count_peminjaman = Pembar::where('status_persetujuan', 'pending')->count();
            return $view->with('count_peminjaman', $count_peminjaman);
        });
        View::composer('layouts.admin-test', function ($view) {
            $count_peminjaman = Pembar::where('status_persetujuan', 'pending')->count();
            return $view->with('count_peminjaman', $count_peminjaman);
        });
    }
}
