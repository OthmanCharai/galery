<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;


class PagesController extends Controller
{
    //
    /**
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function portfolio(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('portfolio.portfolio');
    }

    /**
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function wedding(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('wedding.wedding', [
            'categories'=>Category::where('name','wedding')->with('images.media')->first()
        ]);
    }

    /**
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function album(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return \view('albums.album',[
            'images'=>Image::with(['media','category'])->get()
        ]);
    }

    /**
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function home(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return \view('welcome',[
            'categories'=>Category::all()
        ]);
    }

    /**
     * @param Image $image
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function show(Image $image): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $image->load('media');
        return \view('albums.show',[
            'image'=>$image
        ]);
    }

}
