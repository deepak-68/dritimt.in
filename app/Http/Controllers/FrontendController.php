<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Event;
class FrontendController extends Controller
{
     public function events()
    {
        return view('frontend.events',[
            'events' => Event::orderBy('id', 'DESC')->get()
        ]);
    }

    public function blogs()
    {
        return view('frontend.blogs',[
            'blogs' => Blog::where('status', 'published')->orderBy('id', 'DESC')->paginate(9)
        ]);
    }

    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', 'published')->firstOrFail();
        return view('frontend.blog-detail', compact('blog'));
    }
}
