<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Pages;
use App\Models\Product;
use App\Models\Service;
use App\Models\News;

class HomeController extends Controller
{
    public function show($key=NULL){
        $cur_page = DB::table('pages')->where('page_uri','./'.$key)->first();
        $pages = Pages::all();
        $products = Product::where('product_status', 1)->get();
        $services = Service::where('service_status', 1)->get();
        $news = News::where('news_status', 1)->get();
        return view($cur_page->page_key,compact('cur_page','pages','products','services','news'));
    }
}
