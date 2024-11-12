<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Order;
use App\Models\Post;
use App\Models\QuestionAnswer;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function welcome()
    {
        $methods = Post::orderBy('sort')->where('type',1)->take(3)->get();
        $question_answers = QuestionAnswer::orderBy('sort')->take(6)->get();
        $reasons = Post::orderBy('sort')->where('type',2)->get();
        $doctors = User::orderBy('sort')->where('type',1)->get();
        $option = Option::orderBy('sort')->get();
        return view('welcome', compact('methods','reasons','question_answers','doctors','option'));
    }


    public function showProduct($slug)
    {
        $post = Post::where('url',$slug)->first();
        return view('post.show', compact('post'));
    }


    public function showCategory($slug)
    {
        $category = Service::where('url',$slug)->first();
        $posts = Post::where('type',$category->id)->get();
        return view('service.show', compact('posts'));
    }



    /****** OLD Methods
    ********/


    public function addOrder(Request $request)
    {

        $request->validate([
            'phone' => 'required',
            'name' => 'required',
        ]);

        Order::create([
            'phone' => $request->phone,
            'name' => $request->name,
            'text' => $request->text,
        ]);

        return view('thank_you_page');

    }



    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function sitemap()
    {
        $methods = Post::orderBy('sort')->where('type',1)->get();
        return  response()->view('sitemap',compact('methods'))->header('Content-Type', 'text/xml');
    }

}
