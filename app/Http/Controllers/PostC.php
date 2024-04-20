<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostC extends Controller
{
   public function createPost(Request $request) {

     $icerikData = $request->validate([
        'title' => 'required',
        'body' => 'required'
     ]);

     $icerikData['title'] = strip_tags($icerikData['title']);
     $icerikData['title'] = strip_tags($icerikData['body']);
     $icerikData['user_id'] = auth()->id();
     Post::create($icerikData);
     return redirect('/');
   }
}
