<?php

namespace App\Http\Controllers;

use App\Http\Requests\LikeStoreRequest;
use App\Http\Requests\LikeUpdateRequest;
use App\Models\Image;
use App\Models\Like;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LikeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Image $image): RedirectResponse
    {
        $like = Like::firstOrCreate(
            ['image_id'=>$image->id],
           [ 'user_id'=>auth()->user()->id
        ]);
        request()->session()->flash('like.id', $like->id);
        return redirect()->back();
    }

}
