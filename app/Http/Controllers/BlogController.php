<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use DB;

class BlogController extends Controller
{
      /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function blog()
    {
        $roles = blog::all();
        return $this->showView('blog',['blogs'=>$roles]);
    }
      /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function blogAjax(Request $request)
    {

        $blogs = DB::select( DB::raw("SELECT id, title, content, banner, users_id, created_at, updated_at
        FROM public.blogs ORDER BY id OFFSET '$request->start' ROWS FETCH NEXT '$request->quantity' ROWS ONLY;"));

        $blogsCount =DB::table('public.blogs')->count(); 
       
        return Response()->json(array("blogs" => $blogs, "blogsCount"=>$blogsCount));
    }
}
