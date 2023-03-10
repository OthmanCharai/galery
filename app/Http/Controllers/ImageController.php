<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageStoreRequest;
use App\Http\Requests\ImageUpdateRequest;
use App\Models\Image;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ImageController extends Controller
{
    public function index(Request $request): View
    {
        dd('ok');
        $images =(auth()->user()->hasRole('super_admin'))? Image::all():Image::where('user_id',auth()->user()->id)->get();

        return view('image.index', compact('images'));
    }

    public function create(Request $request): View
    {
        return view('image.create');
    }

    public function store(ImageStoreRequest $request): RedirectResponse
    {
        Auth::user()->images()->save(new Image($request->validated()));

        $request->session()->flash('image.id', $image->id);

        return redirect()->route('image.index');
    }

    public function show(Request $request, Image $image): View
    {
        return view('image.show', compact('image'));
    }

    public function edit(Request $request, Image $image): View
    {
        return view('image.edit', compact('image'));
    }

    public function update(ImageUpdateRequest $request, Image $image): RedirectResponse
    {
        $image->update($request->validated());

        $request->session()->flash('image.id', $image->id);

        return redirect()->route('image.index');
    }

    public function destroy(Request $request, Image $image): RedirectResponse
    {
        $image->delete();

        return redirect()->route('image.index');
    }

    public function approve(Image $image): RedirectResponse
    {
        $image->update([
            'approved_at'=>now()
        ]);
        request()->session()->flash('image.id', $image->id);

        return redirect()->route('filament.resources.images.index');
    }
}
