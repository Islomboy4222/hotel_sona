<?php

namespace App\Http\Controllers;
use App\Post;
use App\Feedback;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function rooms()
    {
        return view('rooms');
    }
    public function about()
    {
        return view('about');
    }
    public function news()
    {
        $posts = Post::OrderBy('id', 'DESC')->paginate(5);
        $links = $posts->links();
        return view('news', compact('posts', 'links'));
    }
    public function newsMore($id)
    {
        $post = Post::findOrFail($id);
        return view('news-more', [
            'post' => $post
        ]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function feedbackStore(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|max:2000'
        ]);
        Feedback::create([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'message' => $request->post('message')
        ]);
        return redirect()->route('contact')->with('success', 'Xabar uchun raxmat.');
    }
}
