<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
       $blog_data = Blog::where('id',1)->first();
       return view('front.blog',compact('blog_data'));
    }
}

?>