<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BlogPosts;

class CreateBlogPostsController extends Controller
{
    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->can('create post')) {
            
            $author_id = $request->author_id;
            $parent_id = $request->parent_id;
            $title = $request->title;
            $meta_title = $request->meta_title;
            $slug = $request->slug;
            $summary = $request->summary;
            $published = $request->published;
            $content = $request->content;
            $published_at = $request->published_at;

            $create_post['author_id'] = $author_id;
            $create_post['parent_id'] = $parent_id;
            $create_post['title'] = $title;
            $create_post['meta_title'] = $meta_title;
            $create_post['slug'] = $slug;
            $create_post['summary'] = $summary;
            $create_post['published'] = $published;
            $create_post['content'] = $content;
            $create_post['published_at'] = $published_at;

            $result = BlogPosts::create($create_post);

            if($result)
            {
                return "Done";
            }
            else
            {
                return "Something went wrong. Please try again";
            }
        }
        else
        {
            return "Sorry, you have no permission to do this operation";
        }
    }

    public function view(Request $request)
    {
        $user = Auth::user();

        if ($user->can('view post')) {

            $all_blogs = BlogPosts::all();

            return view('home', compact('all_blogs'));
        }
        else
        {
            return "Sorry, you have no permission to do this operation";
        }
    }

    public function remove(Request $request)
    {
        $user = Auth::user();

        if ($user->can('create post')) {

            $post_id = $request->post_id;

            BlogPosts::where('id', $post_id)->delete();

        }
        else
        {
            return "Sorry, you have no permission to do this operation";
        }
    }
}
