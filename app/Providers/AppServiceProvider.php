<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider {

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events) {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
                $hak_akses=Auth::user();
                // $event->menu->add('Hak Akses: '.strtoupper($hak_akses->hak_akses));
                $event->menu->add('Jabatan: '.strtoupper($hak_akses->jabatan->jabatan));
                switch ($hak_akses->hak_akses) {
                    case 'administrator':
                        $event->menu->add(
                            ['header' => 'MENU SURAT'],
                            [
                            'text' => 'Surat',
                            'url' => 'surat',
                            'icon' => 'fas fa-fw fa-file'
                            ],
                            [
                            'text' => 'Expedisi',
                            'url' => 'expedisi',
                            'icon' => 'fas fa-fw fa-paper-plane'
                            ],
                            ['header' => 'MENU USER'],
                            [
                            'text' => 'Profile',
                            'url' => 'profile',
                            'icon' => 'fas fa-fw fa-user-tie'
                            ],
                            [
                            'text' => 'User',
                            'url' => 'user',
                            'icon' => 'fas fa-fw fa-users'
                            ],
                            [
                                'text' => 'Jabatan',
                                'url' => 'jabatan',
                                'icon' => 'fas fa-fw fa-briefcase'
                            ]
                        );
                        break;

                    case 'user':
                        $event->menu->add(
                            ['header' => 'MENU SURAT'],
                            [
                            'text' => 'Surat',
                            'url' => 'surat',
                            'icon' => 'fas fa-fw fa-file'
                            ],
                            [
                                'text' => 'Surat Masuk',
                                'url' => 'masuk',
                                'icon' => 'fas fa-fw fa-inbox'
                                ],
                            [
                            'text' => 'Expedisi',
                            'url' => 'expedisi',
                            'icon' => 'fas fa-fw fa-paper-plane'
                            ],
                            ['header' => 'MENU USER'],
                            [
                            'text' => 'Profile',
                            'url' => 'profile',
                            'icon' => 'fas fa-fw fa-user-tie'
                            ]
                            );
                        break;
                    default:
                    $event->menu->add(
                        [
                            'text' => 'Profile',
                            'url' => 'profile',
                            'icon' => 'fas fa-fw fa-user-tie'
                            ]
                        );
                        break;
                }
            }

        );


        //
    }
}
