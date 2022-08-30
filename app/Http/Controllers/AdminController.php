<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
class AdminController extends Controller
{
    function login(){
        return view('backend.login');
    }
    //submit login
    function submit_login(Request $request){
$request->validate([
    'username'=>'required',
    'password'=>'required'
]);
       $userCheck=Admin::where(['username'=>$request->username,'password'=>$request->password])->count();
       if($userCheck>0){
        $adminData=Admin::where(['username'=>$request->username,'password'=>$request->password])->first();
        session(['adminData'=>$adminData]);
        return redirect('admin/dashboard');
       }else{
        return redirect('admin/login')->with('error','Invalid username/password !!');
       }
    }
    function dashboard(){
        $cats=Category::All()->count();
        $posts=Post::All()->count();
        $comments=Comment::All()->count();
        $users=User::All()->count();
        $popularPosts=Post::orderBy('views','desc')->take(5)->get();
        $allComments=Comment::All();
        return view("backend.dashboard",['cats'=>$cats,'posts'=>$posts,'comments'=>$comments,'users'=>$users,'popularPosts'=>$popularPosts,'allComments'=>$allComments]);
    }
    function comments(){
        $comments=Comment::orderBy('id','desc')->get();
        return view("backend.comment.index",["comments"=>$comments]);
    }
    public function delete_comment($id)
    {
        $comment=Comment::where('id',$id)->delete();
        return redirect('admin/comments')->with('success','Suppression avec succes.');
    }
    function users(){
        $users=User::orderBy('id','desc')->get();
        return view("backend.users.index",["users"=>$users]);
    }
    public function delete_user($id)
    {
        $user=User::where('id',$id)->delete();
        return redirect('admin/users')->with('success','Suppression avec succes.');
    }
    function logout(){
        session()->forget(['adminData']);
        return redirect('admin/login');
    }
}
