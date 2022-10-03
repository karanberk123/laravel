<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use DB;

class AdminController extends Controller
{
     /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return $this->showView('admin/dashboard');
    }
      /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function createBlog()
    {
        return $this->showView('admin/createblog');
    }
      /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function saveBlog(Request $request)
    {
        $image = $request->file('file');
	$fileInfo = $image->getClientOriginalName();
	$filename = pathinfo($fileInfo, PATHINFO_FILENAME);
	$extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
	$file_name= $filename.'-'.time().'.'.$extension;
	$image->move(public_path('uploads/gallery'),$file_name);
        return response()->json(array($file_name));
    }
      /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function createPostBlog(Request $request)
    {

        $flight = new blog;
 
        $flight->title = $request->title;
        $flight->content = $request->content;
        $flight->banner = $request->images[0];
        $flight->users_id = $request->session()->get('userID');
        $flight->save();
        return response()->json(array('title' => $request->title,'content' => $request->content,'images' => $request->images,'id'=>$request->session()->get('userID') ));
    }
}
