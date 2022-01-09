<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function sitemap()
    {
        $services = Service::get();
        $blogs=Blog::get();
        return response()->view('web.pages.sitemap', compact('services','blogs'))->header('Content-Type', 'text/xml');
    }
}
