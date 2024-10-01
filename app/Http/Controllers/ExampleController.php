<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
<<<<<<< HEAD
=======
    public function index()
    {
        return view('example.index');
    }

>>>>>>> 055ca1d21c9b3c426b7d96b9d78d59b160f905bf
    public function profile()
    {
        $profile = app('App\Helpers\BoardingSchool')->profile();
        return $profile;
    }

    public function album()
    {
        $album = app('App\Helpers\BoardingSchool')->album();
        return $album;
    }

    public function albumShow($uuid)
    {
        $album = app('App\Helpers\BoardingSchool')->albumShow($uuid);
        return $album;
    }

    public function employee()
    {
        $employee = app('App\Helpers\BoardingSchool')->employee();
        return $employee;
    }
<<<<<<< HEAD
    
    public function alumni()
    {
        $alumni = app('App\Helpers\BoardingSchool')->alumni();
=======

    public function banner(Request $request)
    {
        $banner = app('App\Helpers\BoardingSchool')->banner($request);
        return $banner;
    }


    public function alumni(Request $request)
    {
        $alumni = app('App\Helpers\BoardingSchool')->alumni($request);
>>>>>>> 055ca1d21c9b3c426b7d96b9d78d59b160f905bf
        return $alumni;
    }
}
