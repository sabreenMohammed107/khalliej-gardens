<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Client;
use App\Models\Company_contact;
use App\Models\Gallery;
use App\Models\Gallery_category;
use App\Models\Golf_number;
use App\Models\Message;
use App\Models\Message_type;
use App\Models\Service;
use App\Models\Why_us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang as Lang;
class IndexController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $whyUs = Why_us::all();
        $galleries = Gallery::take(6)->get();
        $blogs = Blog::take(3)->get();
        $clients = Client::where('active',1)->get();
        $numbers = Golf_number::all();
        return view('web.home', compact('categories', 'whyUs', 'galleries', 'blogs', 'clients', 'numbers'));
    }
    public function about()
    {
        $whyUs = Why_us::all();
        return view('web.about', compact('whyUs'));
    }
    public function client()
    {
        $clients = Client::where('active',1)->get();
        $clientsRand = Client::inRandomOrder()->where('active',1)->limit(8)->get();
        return view('web.client', compact('clients', 'clientsRand'));
    }
    public function contact()
    {
        $contact = Company_contact::where('id', 1)->first();
        $types = Message_type::all();
        return view('web.contact', compact('contact', 'types'));
    }
    public function sendMessage(Request $request){
        Message::create($request->except('_token'));
        session()->flash('success', Lang::get('links.controller_message'));
        return redirect()->route('contact')->with('flash_success', Lang::get('links.controller_message'));
    }

    public function service()
    {
        $categories = Category::all();
        $services = Service::all();
        $servicesRand= Service::inRandomOrder()->limit(4)->get();
        return view('web.services', compact('categories', 'services','servicesRand'));
    }
    public function gallery()
    {
        $categories = Gallery_category::all();
        $galleries = gallery::all();
        return view('web.gallery', compact('categories', 'galleries'));
    }

    public function blogs()
    {
        $categories = Category::all();
        $blogs = Blog::paginate(4);
        $blogsRand= Blog::inRandomOrder()->limit(4)->get();
        return view('web.blogs', compact('categories', 'blogs','blogsRand'));
    }
    public function singleBlog($id)
    {
        $categories = Category::all();
        $blog = Blog::where('id',$id)->first();
        $blogsRand= Blog::inRandomOrder()->limit(4)->get();
           // get previous user id

    $previous = Blog::where('id', '<', $id)->max('id');

    // get next user id
    $next = Blog::where('id', '>', $id)->min('id');
    $types = Message_type::all();
        return view('web.single-blogs', compact('categories', 'blog','blogsRand','previous','next','types'));
    }

    public function sendComment(Request $request){
        Message::create($request->except('_token'));
        session()->flash('success', Lang::get('links.controller_message'));
        return redirect()->back()->with('flash_success', Lang::get('links.controller_message'));
    }
    public function singleService($id)
    {
        $categories = Category::all();
        $service = Service::where('id',$id)->first();
        $servicesRand= Service::inRandomOrder()->limit(4)->get();
        // get previous user id

    $previous = Service::where('id', '<', $id)->max('id');

    // get next user id
    $next = Service::where('id', '>', $id)->min('id');

        return view('web.single-services', compact('categories', 'service','servicesRand','previous','next'));
    }
}
