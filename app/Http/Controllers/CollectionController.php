<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollectionStoreRequest;
use App\Http\Requests\CollectionUpdateRequest;
use App\Models\Collection;
use App\Models\Image;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CollectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Image $image): RedirectResponse
    {
        $collection = Collection::firstOrCreate(
            ['image_id'=>$image->id],
            ['user_id'=>auth()->user()->id,'name'=>auth()->user()->name]
        );

        request()->session()->flash('collection.id', $collection->id);

        return redirect()->back();
    }


}
