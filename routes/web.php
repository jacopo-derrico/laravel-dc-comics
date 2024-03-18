<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\WelcomeController as WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    // HEADER
    $menus = config('menus');
    //FOOTER
    $comicsMenus = config('comicsMenus');
    $shopMenus = config('shopMenus');
    $dcMenu = config('dcmenu');
    $sitesMenu = config('sitesMenus');
    $socialIcons = config('socialIcons');
    //BANNER
    $bannerLink = config('bannerLink');


    $currentSeries = config('comics');
    return view('pages.comics', compact('menus', 'comicsMenus', 'shopMenus', 'dcMenu', 'sitesMenu', 'socialIcons', 'bannerLink', 'currentSeries'));
})->name('homePage');


