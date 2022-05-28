<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index($id)
    // {
    //     $post = Post::with('patient','comments')->find($id);
    //     return view('html.comment2' , compact('post'));

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommentRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreCommentRequest $request, $id)
    {
        // $request->validate([
        //     'body' => 'required'
        // ]);
            
        $post = Post::find($id);
        $comment = new Comment();
        $comment->body = $request->input('comment');
        $idd = $post->id;
        $comment->post_id =$idd;
        if ((Auth::guard('patient')->check())){
            $user = (Auth::guard('patient')->user()->id);
            $comment->patient_id = $user; 
        }
        elseif (Auth::guard('doctor')->check()){
            $user = Auth::guard('doctor')->user()->id;
            $comment->doctor_id = $user; 
        }
        else{
            $user = Auth::guard('admin')->user()->ssn;
            $comment->secretary_ssn = $user;
        } 
        $comment->save();
        return redirect()->route('blog.page', $post->id);
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($post_id)
    {
        $post = Post::with('patient','comments', 'doctor','secretary')->find($post_id);
        $comments = Comment::with('post','patient','doctor','secretary')->where('post_id', $post->id)->get();
        // $comments = Post::with('patient','comments')->find($post_id);
        {
            $post->setAttribute('added_at',$post->created_at->diffForHumans());
            $post->setAttribute('comments_count',$post->comments->count());
            $post->setAttribute('life_coach', Post::where('speciality' , 'Life Coach')->count()); 
            $post->setAttribute('pid', Post::where('speciality' , 'Psychiatry of Intellectual Disability (PID)')->count());
            $post->setAttribute('marital', Post::where('speciality' , 'Marital and Family Relations')->count()); 
            $post->setAttribute('forensic', Post::where('speciality' , 'Forensic Psychiatry')->count()); 
            $post->setAttribute('addiction', Post::where('speciality' , 'Addiction')->count()); 
            $post->setAttribute('general', Post::where('speciality' , 'General Psychiatry')->count()); 
            $post->setAttribute('geriatric', Post::where('speciality' , 'Geriatric Psychiatry')->count()); 
            $post->setAttribute('child', Post::where('speciality' , 'Child and Adolescence Disorders')->count()); 
       
        }
        foreach ($comments as $comment) {
            
            $comment->setAttribute('comment_added_at',$comment->created_at->diffForHumans());
        }

        $dub = Comment::all();
        $collection = collect($dub);
        $m = $collection->duplicates('post_id');
        $mm = $m->duplicates()->max();
        $mmm= $m->countBy()->keys()->get(0);
        $mmmm = $m->countBy()->keys()->get(2);

        $p = Post::where('id', $mm)->get();
        $pp = Post::where('id', $mmm)->get();
        $ppp = Post::where('id', $mmmm)->get();

        // return view('html.blog', compact('posts','p', 'pp','ppp'));
         return view('html.comment', compact('post','p','comments', 'pp','ppp'));

    }

    public function max_post(){
        $dub = Comment::all();
        $collection = collect($dub);
        $m = $collection->duplicates('post_id');
        $mm = $collection->duplicates('post_id')->max();
        $p = Post::where('id', $mm)->get();
        return view('html.blog', compact('p'));

    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentRequest  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
