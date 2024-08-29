<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PonpesController extends Controller
{
    public function index()
    {
        $title = 'PP Surabaya || Beranda';
        $profil = Cache::remember('profil', 3600, function () {
            return app('App\Helpers\BoardingSchool')->profile();
        });
        $album = Cache::remember('album', 3600, function () {
            return app('App\Helpers\BoardingSchool')->album();
        });
        $employee = Cache::remember('employee', 3600, function () {
            return app('App\Helpers\BoardingSchool')->employee();
        });
        // $profil = Cache::get('profil');
        // dd($profil);
        // dd($album);
        // dd($employee);
        return view('landing.index', [
            'title' => $title,
            "profil" => $profil,
            "album" => $album,
            "employee" => $employee

        ]);
    }

    public function tentang()
    {
        $title = 'PP Surabaya || Tentang Kami';
        $profil = Cache::remember('profil', 3600, function () {
            return app('App\Helpers\BoardingSchool')->profile();
        });
        $album = Cache::remember('album', 3600, function () {
            return app('App\Helpers\BoardingSchool')->album();
        });
        $employee = Cache::remember('employee1', 3600, function () {
            return app('App\Helpers\BoardingSchool')->employee();
        });
        // $profil = Cache::get('profil');
        // dd($album);
        // dd($employee);
        return view('landing.tentang', [
            'title' => $title,
            "profil" => $profil,
            "employee" => $employee

        ]);
        // return response()->json(['data' => $profil], 200);
    }

    public function album()
    {
        $title = 'PP Surabaya || Album';
        $album = Cache::remember('album', 3600, function () {
            return app('App\Helpers\BoardingSchool')->album();
        });
        $profil = Cache::remember('profil', 3600, function () {
            return app('App\Helpers\BoardingSchool')->profile();
        });
        // dd($album);
        return view('landing.album', [
            'title' => $title,
            "album" => $album,
            "profil" => $profil

        ]);
    }

    public function detail_album()
    {
        $title = 'PP Surabaya || Detail Album';
        $album = Cache::remember('album' . rand(1, 99999), 3600, function () {
            return app('App\Helpers\BoardingSchool')->album();
        });
        $profil = Cache::remember('profil', 3600, function () {
            return app('App\Helpers\BoardingSchool')->profile();
        });
        // dd($album);
        return view('landing.detailalb', [
            'title' => $title,
            "album" => $album,
            "profil" => $profil

        ]);
    }

    public function kontak()
    {
        $title = 'PP Surabaya || Kontak';
        $profil = Cache::remember('profil', 3600, function () {
            return app('App\Helpers\BoardingSchool')->profile();
        });
        // $profil = Cache::get('profil');
        // dd($profil);
        return view('landing.kontak', [
            'title' => $title,
            "profil" => $profil

        ]);
    }

    public function test()
    {
        return app('App\Helpers\BoardingSchool')->profile();
        // return app('App\Helpers\BoardingSchool')->inbox();
        // return app('App\Helpers\BoardingSchool')->album();
    }

    public function clear()
    {
        Cache::clear();
        return response()->json([
            'message' => 'Cache Berhasil Dihapus'
        ], 200);
        // return 'Cache sudah dihapus';
    }
}
