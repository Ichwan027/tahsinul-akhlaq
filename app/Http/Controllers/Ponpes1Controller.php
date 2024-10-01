<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Ponpes1Controller extends Controller
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
        $alumni = Cache::remember('alumni', 3600, function () {
            return app('App\Helpers\BoardingSchool')->alumni();
        });
        // $profil = Cache::get('profil');
        // dd($profil);
        // dd($album);
        // dd($employee);
        // dd($alumni);
        return view('landing.index', [
            'title' => $title,
            "profil" => $profil,
            "album" => $album,
            "employee" => $employee,
            "alumni" => $alumni

        ]);
    }

    public function tentang()
    {
        $title = 'PP Surabaya || Tentang Kami';
        $profil = Cache::remember('profil1', 3600, function () {
            return app('App\Helpers\BoardingSchool')->profile();
        });
        $album = Cache::remember('album1', 3600, function () {
            return app('App\Helpers\BoardingSchool')->album();
        });
        $employee = Cache::remember('employee2', 3600, function () {
            return app('App\Helpers\BoardingSchool')->employee();
        });
        // $profil = Cache::get('profil');
        // dd($profil);
        // dd($employee);
        return view('landing.tentang', [
            'title' => $title,
            "profil" => $profil,
            "album" => $album,
            "employee" => $employee

        ]);
        // return response()->json(['data' => $profil], 200);
    }

    public function album()
    {
        $title = 'PP Surabaya || Album';
        $album = Cache::remember('album1', 3600, function () {
            return app('App\Helpers\BoardingSchool')->album();
        });
        $profil = Cache::remember('profil1', 3600, function () {
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
        $album = Cache::remember('album1' . rand(1, 99999), 3600, function () {
            return app('App\Helpers\BoardingSchool')->album();
        });
        $profil = Cache::remember('profil1', 3600, function () {
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
        $profil = Cache::remember('profil8', 3600, function () {
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
        // return app('App\Helpers\BoardingSchool')->employee();
        // return app('App\Helpers\BoardingSchool')->alumni();
    }

    public function clear()
    {
        Cache::clear();
        return response()->json([
            'message' => 'Cache Berhasil Dihapus'
        ], 200);
        // return 'Cache sudah dihapus';
    }

    public function albumShow($uuid)
    {
        $album = Cache::remember('album1' . $uuid, 3600, function () use ($uuid) {
            return app('App\Helpers\BoardingSchool')->albumShow($uuid);
        });

        $profil = Cache::remember('profil1', 3600, function () {
            return app('App\Helpers\BoardingSchool')->profile();
        });
        // dd($album);
        return view('landing.album-show', [
            'title' => 'PP Surabaya || Detail Album',
            'album' => $album,
            'profil' => $profil
        ]);
    }
}
