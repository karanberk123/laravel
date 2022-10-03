<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
       return $this->showView('home');
    }
     /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return $this->showView('about');
    }
      /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function services()
    {
        return $this->showView('services');
    }
    
      /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function pricing()
    {
        return $this->showView('pricing');
    }
      /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return $this->showView('contact');
    }
}
