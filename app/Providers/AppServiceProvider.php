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
                                'text' => 'Kode Surat',
                                'url' => 'suratcode',
                                'icon' => 'fas fa-fw fa-barcode'
                                ],
                            [
                            'text' => 'Surat',
                            'url' => 'surat',
                            'icon' => 'fas fa-fw fa-file'
                            ],
                            [
                                'text' => 'Kotak Masuk',
                                'url' => 'inbox',
                                'icon' => 'fas fa-fw fa-inbox'
                            ],
                            [
                                'text' => 'Disposisi',
                                'url' => 'disposisi',
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
                            ],
                            [
                                'text' => 'Tujuan',
                                'url' => 'tujuan',
                                'icon' => 'fas fa-fw fa-briefcase'
                            ]
                        );
                        break;

                    case 'admin':
                        $event->menu->add(
                            ['header' => 'MENU SURAT'],
                            [
                            'text' => 'Surat',
                            'url' => 'surat',
                            'icon' => 'fas fa-fw fa-file'
                            ],
                            [
                                'text' => 'Kotak Masuk',
                                'url' => 'inbox',
                                'icon' => 'fas fa-fw fa-inbox'
                            ],
                            [
                            'text' => 'Disposisi',
                            'url' => 'disposisi',
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
                    case 'user':
                        $event->menu->add(
                            ['header' => 'MENU SURAT'],
                            [
                                'text' => 'Kotak Masuk',
                                'url' => 'inbox',
                                'icon' => 'fas fa-fw fa-inbox'
                            ],
                            ['header' => 'MENU USER'],
                            [
                            'text' => 'Profile',
                            'url' => 'profile',
                            'icon' => 'fas fa-fw fa-user-tie'
                            ]
                            );
                        break;
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
