<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;

class FeedbacksController extends Controller
{
     public function index()
     {
         $items = Feedback::latest()->paginate(3);
        $links = $items->links();
        return view('admin.feedbacks.index', compact('items', 'links'));
     }

     public function show($id) 
     {
          $posts = Feedback::findOrFail($id);
          $posts->update([
               'status' => Feedback::STATUS_READED
          ]);
          return view('admin.feedbacks.show', compact('posts'));
     }

     public function delete($id)
     {
          $post = Feedback::findOrFail($id);

          $post->delete();

          return redirect()->route('admin.feedbacks.index')->with('delete', 'Xabar o`chirildi');
     }
}
