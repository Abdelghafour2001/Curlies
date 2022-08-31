<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Like;
use App\Models\Comment;
class HomeController extends Controller
{
    function index(Request $request){

if($request->has('q')){
    $q=$request->q;
    $posts=Post::where('title','like','%'.$q.'%')->orderBy('id','desc')->paginate(6);

}else{
      $posts=Post::orderBy('id','desc')->paginate(6);
}
     $cats=Category::all();
        return view('home',['posts'=>$posts,'cats'=>$cats]);
    }
    function curls101(Request $request){

        if($request->has('q')){
            $q=$request->q;
            $posts=Post::where('title','like','%'.$q.'%')->orderBy('id','desc')->paginate(6);
        
        }else{
              $posts=Post::where('cat_id','=','5')->orderBy('id','desc')->paginate(6);
        }
             $cats=Category::all();
                return view('home',['posts'=>$posts,'cats'=>$cats]);
            }
            function astuces(Request $request){

                if($request->has('q')){
                    $q=$request->q;
                    $posts=Post::where('title','like','%'.$q.'%')->orderBy('id','desc')->paginate(6);
                
                }else{
                      $posts=Post::where('cat_id','=','6')->orderBy('id','desc')->paginate(6);
                }
                     $cats=Category::all();
                        return view('home',['posts'=>$posts,'cats'=>$cats]);
                    }
                    function routine(Request $request){

                        if($request->has('q')){
                            $q=$request->q;
                            $posts=Post::where('title','like','%'.$q.'%')->orderBy('id','desc')->paginate(6);
                        
                        }else{
                              $posts=Post::where('cat_id','=','7')->orderBy('id','desc')->paginate(6);
                        }
                             $cats=Category::all();
                                return view('home',['posts'=>$posts,'cats'=>$cats]);
                            }
                            function popular(Request $request){

                                if($request->has('q')){
                                    $q=$request->q;
                                    $posts=Post::where('title','like','%'.$q.'%')->orderBy('id','desc')->paginate(6);
                                
                                }else{
                                      $posts=Post::orderBy('views','desc')->paginate(6);
                                }
                                     $cats=Category::all();
                                        return view('home',['posts'=>$posts,'cats'=>$cats]);
                                    }
                            function prods(Request $request){

                                if($request->has('q')){
                                    $q=$request->q;
                                    $posts=Post::where('title','like','%'.$q.'%')->orderBy('id','desc')->paginate(6);
                                
                                }else{
                                      $posts=Post::where('cat_id','=','8')->orderBy('id','desc')->paginate(6);
                                }
                                     $cats=Category::all();
                                        return view('home',['posts'=>$posts,'cats'=>$cats]);
                                    }
                                    function favoris(Request $request){

                                        if($request->has('q')){
                                            $q=$request->q;
                                            $posts=Post::where('title','like','%'.$q.'%')->orderBy('id','desc')->paginate(6);
                                        
                                        }else{
                                           /* $user_id=$request->user()->id;
                                            $likes=Like::where('user_id','=',$user_id)->get();
                                            foreach($likes as $like){
                                                $posts=Post::where('post_id','=',$like->post_id)->orderBy('id','desc')->paginate(6);
                                            }*/
                                            $posts=Post::where('cat_id','=','8')->orderBy('id','desc')->paginate(6);
                                        }
                                             $cats=Category::all();
                                                return view('home',['posts'=>$posts,'cats'=>$cats]);
                                            }
    function detail(Request $request,$postId){
        Post::find($postId)->increment('views');
        $cats=Category::all();
        $posts=Post::find($postId);
        return view('detail',['posts'=>$posts,'cats'=>$cats]);
    }
    function like(Request $request,$postId){
        $like= new Like;
        $like->post_id=$postId;
        $like->user_id=0;
        $like->save();
        $cats=Category::all();
        return redirect('/detail/'.$postId)->with('success','Vous aimez ce post');
    }
    function account(){  
        return view('account');
    }
    function contact(){  
        return view('contact');
    }
    function about(){  
        return view('about');
    }
    function save_comment(Request $request,$id){
        $request->validate([
'comment'=>'required'
        ]);
$data= new Comment;
$data->user_id=$request->user()->id;
$data->post_id=$id;
$data->comment=$request->comment;
$data->save();
return redirect('detail/'.$id)->with('success','Commentaire publié.');
    }
    function delete_comment($id,$cid){
        $comment=Comment::where('id',$cid)->delete();
        return redirect('/detail/'.$id)->with('success','Suppression du commentaire avec succes.');
    }
}
