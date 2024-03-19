<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
    
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


    // $currentSeries = config('comics');
    $currentSeries = Comic::all();
    return view('pages.comics', compact('menus', 'comicsMenus', 'shopMenus', 'dcMenu', 'sitesMenu', 'socialIcons', 'bannerLink', 'currentSeries'));
    }
}
