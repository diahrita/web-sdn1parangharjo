<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Photo;
use App\Models\Video;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'beritas' => Berita::orderBy('id', 'desc')->limit(3)->get(),
            'photos'  => Photo::orderBy('id', 'desc')->limit(5)->get(),
            'videos'  => Video::orderBy('id', 'desc')->limit(3)->get(),
        ]);
    }

    public function berita()
    {
        return view('berita.berita', [
            'beritas' => Berita::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('berita.detail', [
            'beritas' => $berita
        ]);
    }

    public function photo()
    {
        return view('foto.foto', [
            'photos' => Photo::orderBy('id', 'desc')->get()
        ]);
    }

    public function video()
    {
        return view('video.video', [
            'videos' => video::orderBy('id', 'desc')->get()
        ]);
    }
}
