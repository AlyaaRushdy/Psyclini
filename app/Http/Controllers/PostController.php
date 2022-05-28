<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Test;
use App\Models\Doctor;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Patient;
use App\Models\Secretary;
use App\Models\postPatient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Cache\Events\KeyWritten;

class PostController extends  Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->with('patient','doctor', 'secretary')->Paginate(3);
        foreach($posts as $post){
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
        $dub = Comment::all();
        $collection = collect($dub);
        $m = $collection->duplicates('post_id');
        $mm = $m->duplicates()->max();
        $mmm= $m->countBy()->keys()->get(0);
        $mmmm = $m->countBy()->keys()->get(2);

        $p = Post::where('id', $mm)->get();
        $pp = Post::where('id', $mmm)->get();
        $ppp = Post::where('id', $mmmm)->get();

        return view('html.blog', compact('posts','p', 'pp','ppp'));
        // return response()->json($ppp);
        // return $m->countBy()->keys()->max();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
{
    $text = $request->input('posts');
    // $posts = Post::latest()->with('patient')->Paginate(3);
    $posts = Post::where(function ($q) use ($text){
        
        $q->where('body' , 'LIKE' , '%'.$text.'%');
    })->paginate(3);
    
    foreach($posts as $post){
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
        if ($posts->count() == 0)
        {
            // return response()->json($posts);
             $this->index();
            return redirect()->route('blog')->with('status2', "Your Search Does Not Match Any Post ");
        }
            // return response()->json($posts);

            $dub = Comment::all();
            $collection = collect($dub);
            $m = $collection->duplicates('post_id');
            $mm = $m->duplicates()->max();
            $mmm= $m->countBy()->keys()->get(0);
            $mmmm = $m->countBy()->keys()->get(2);
    
            $p = Post::where('id', $mm)->get();
            $pp = Post::where('id', $mmm)->get();
            $ppp = Post::where('id', $mmmm)->get();
    
            return view('html.blog', compact('posts','p', 'pp','ppp')); 
        
}


public function addiction_posts(Request $request)
{
    $posts = Post::with('patient')->where(function($q){
        $q->where('speciality', 'Addiction');
    })->paginate(3);
    foreach($posts as $post){
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
    if($posts != Null){
        $dub = Comment::all();
        $collection = collect($dub);
        $m = $collection->duplicates('post_id');
        $mm = $m->duplicates()->max();
        $mmm= $m->countBy()->keys()->get(2);
        $mmmm = $m->countBy()->keys()->get(0);

        $p = Post::where('id', $mm)->get();
        $pp = Post::where('id', $mmm)->get();
        $ppp = Post::where('id', $mmmm)->get();
 

        return view('html.blog', compact('posts','p', 'pp','ppp'));        }
      else{
           return redirect()->route('blog')->with('status2', 'There Is No Posts In This Speciality'); 
      }

}
public function life_posts(Request $request)
{
    $posts = Post::with('patient')->where(function($q){
        $q->where('speciality', 'Life Coach');
    })->paginate(3);
           foreach($posts as $post){
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
        
        if($posts != Null){
            $dub = Comment::all();
            $collection = collect($dub);
            $m = $collection->duplicates('post_id');
            $mm = $m->duplicates()->max();
            $mmm= $m->countBy()->keys()->get(2);
            $mmmm = $m->countBy()->keys()->get(0);
    
            $p = Post::where('id', $mm)->get();
            $pp = Post::where('id', $mmm)->get();
            $ppp = Post::where('id', $mmmm)->get();
     
    
            return view('html.blog', compact('posts','p', 'pp','ppp'));            }
          else{
            // return view('html.blog', compact('posts','p', 'pp','ppp'))>-with('status2', 'There Is No Posts In This Speciality'); 
               return redirect()->route('blog')->with('status2', 'There Is No Posts In This Speciality'); 
          }


}
public function child(Request $request)
{
    $posts = Post::with('patient')->where(function($q){
        $q->where('speciality', 'Child and Adolescence Disorders');
    })->paginate(3);
           foreach($posts as $post){
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
        if($post->child != 0){
            $dub = Comment::all();
            $collection = collect($dub);
            $m = $collection->duplicates('post_id');
            $mm = $m->duplicates()->max();
            $mmm= $m->countBy()->keys()->get(2);
            $mmmm = $m->countBy()->keys()->get(0);
    
            $p = Post::where('id', $mm)->get();
            $pp = Post::where('id', $mmm)->get();
            $ppp = Post::where('id', $mmmm)->get();
     
    
            return view('html.blog', compact('posts','p', 'pp','ppp'));            }
          else{
               return redirect()->route('blog')->with('status2', 'There Is No Posts In This Speciality');
          }
    }

public function disability(Request $request)
{
    $posts = Post::with('patient')->where(function($q){
        $q->where('speciality', 'Psychiatry of Intellectual Disability (PID)');
    })->paginate(3);
           foreach($posts as $post){
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
        if($post->pid != 0){
            $dub = Comment::all();
            $collection = collect($dub);
            $m = $collection->duplicates('post_id');
            $mm = $m->duplicates()->max();
            $mmm= $m->countBy()->keys()->get(2);
            $mmmm = $m->countBy()->keys()->get(0);
    
            $p = Post::where('id', $mm)->get();
            $pp = Post::where('id', $mmm)->get();
            $ppp = Post::where('id', $mmmm)->get();
     
    
            return view('html.blog', compact('posts','p', 'pp','ppp'));            }
          else{
               return redirect()->route('blog')->with('status2', 'There Is No Posts In This Speciality');
          }
}

public function family(Request $request)
{
    $posts = Post::with('patient')->where(function($q){
        $q->where('speciality', 'Marital and Family Relations');
    })->paginate(3);
           foreach($posts as $post){
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
        
    if($post->martial != 0){
        $dub = Comment::all();
        $collection = collect($dub);
        $m = $collection->duplicates('post_id');
        $mm = $m->duplicates()->max();
        $mmm= $m->countBy()->keys()->get(2);
        $mmmm = $m->countBy()->keys()->get(0);

        $p = Post::where('id', $mm)->get();
        $pp = Post::where('id', $mmm)->get();
        $ppp = Post::where('id', $mmmm)->get();
 

        return view('html.blog', compact('posts','p', 'pp','ppp'));          }
        else{
            return redirect()->route('blog')->with('status2', 'There Is No Posts In This Speciality'); 
        }
} 
public function forensic(Request $request)
{
    $posts = Post::with('patient')->where(function($q){
        $q->where('speciality', 'Forensic Psychiatry');
    })->paginate(3);
           foreach($posts as $post){
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
        if($post->forensic == 0){
            return view('html.blog')->with('status2', 'There Is No Posts In This Speciality'); 
        }
          else if ($post->forensic != 0){
            $dub = Comment::all();
            $collection = collect($dub);
            $m = $collection->duplicates('post_id');
            $mm = $m->duplicates()->max();
            $mmm= $m->countBy()->keys()->get(2);
            $mmmm = $m->countBy()->keys()->get(0);
    
            $p = Post::where('id', $mm)->get();
            $pp = Post::where('id', $mmm)->get();
            $ppp = Post::where('id', $mmmm)->get();
     
    
            return view('html.blog', compact('posts','p', 'pp','ppp'));         }
        
    // return response()->json($post->forensic);
        
         
}  
public function geriatric(Request $request)
{
    $posts = Post::with('patient')->where(function($q){
        $q->where('speciality', 'Geriatric Psychiatry');
    })->paginate(3);
           foreach($posts as $post){
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
        
        if($post->geriatric != 0){
            $dub = Comment::all();
            $collection = collect($dub);
            $m = $collection->duplicates('post_id');
            $mm = $m->duplicates()->max();
            $mmm= $m->countBy()->keys()->get(2);
            $mmmm = $m->countBy()->keys()->get(0);
    
            $p = Post::where('id', $mm)->get();
            $pp = Post::where('id', $mmm)->get();
            $ppp = Post::where('id', $mmmm)->get();
     
    
            return view('html.blog', compact('posts','p', 'pp','ppp'));   
          }
          else{
               return redirect()->route('blog')->with('status2', 'There Is No Posts In This Speciality'); 
          }
    } 
public function general(Request $request)
{
    $posts = Post::with('patient')->where(function($q){
        $q->where('speciality', 'General Psychiatry');
    })->paginate(3);
           foreach($posts as $post){
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
        if($post->general != 0){
            $dub = Comment::all();
            $collection = collect($dub);
            $m = $collection->duplicates('post_id');
            $mm = $m->duplicates()->max();
            $mmm= $m->countBy()->keys()->get(2);
            $mmmm = $m->countBy()->keys()->get(0);
    
            $p = Post::where('id', $mm)->get();
            $pp = Post::where('id', $mmm)->get();
            $ppp = Post::where('id', $mmmm)->get();
     
    
            return view('html.blog', compact('posts','p', 'pp','ppp'));  
        }
          else{
        return redirect()->route('blog')->with('status2', 'There Is No Posts In This Speciality'); 
               
          }
        // return view('html.blog', compact('posts'));  
    }

    public function store(StorePostRequest $request)
    {
        $post = new Post();

        if ($image = $request->file('post-pic')){
            $path = 'images/';
            $ext = $image->getClientOriginalExtension();
            $imageName = time(). '.' .$ext;
            $image->move($path , $imageName);
            $post->image = $imageName; 
        }

         $post->body = $request->input('comment');   
        $post->speciality = $request->input('cate');  
        if( Auth::guard('patient')->user()) 
        {
            $patientId = Auth::guard('patient')->user()->id ;
            $post->patient_id = $patientId;
        }
        elseif( Auth::guard('admin')->user()) 
        {
            $adminssn = Auth::guard('admin')->user()->ssn ;
            $post->secretary_ssn = $adminssn;
        }
    
        $post->save();
     return redirect()->route('blog')->with('status', 'Your Post Was Sent');
     

    }   

    public function destroy(Post $post)
    {
        if($post->image)
        {
            unlink('images/'. $post->image);
        }
        $post->delete();
    }
}
