<?php

namespace App\Http\Controllers;

use App\Http\Requests\LikeStoreRequest;
use App\Http\Requests\LikeUpdateRequest;
use App\Models\Like;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LikeController extends Controller
{
    public function index(Request $request): View
    {
        $likes = Like::all();

        return view('like.index', compact('likes'));
    }

    public function create(Request $request): View
    {
        return view('like.create');
    }

    public function store(LikeStoreRequest $request): RedirectResponse
    {
        $like = Like::create($request->validated());

        $request->session()->flash('like.id', $like->id);

        return redirect()->route('like.index');
    }

    public function show(Request $request, Like $like): View
    {
        return view('like.show', compact('like'));
    }

    public function edit(Request $request, Like $like): View
    {
        return view('like.edit', compact('like'));
    }

    public function update(LikeUpdateRequest $request, Like $like): RedirectResponse
    {
        $like->update($request->validated());

        $request->session()->flash('like.id', $like->id);

        return redirect()->route('like.index');
    }

    public function destroy(Request $request, Like $like): RedirectResponse
    {
        $like->delete();

        return redirect()->route('like.index');
    }
}
