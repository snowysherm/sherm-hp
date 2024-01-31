<?php

namespace App\Http\Controllers;

use App\Models\Lore;
use Illuminate\Http\Request;

class LoreController extends Controller
{
    public function index()
    {
        $lores = Lore::with('author')->get();

        return view('lore.index', compact('lores'));
    }

    public function edit()
    {
        return view('lore.edit');
    }

    public function store(Request $request)
    {
        $lore        = new Lore();
        $lore->content  = $request->contents;
        $lore->title = $request->title;
        $lore->user_id = auth()->user()->id;
        $lore->save();

        return redirect(route('lore.index'))->with('success', 'erfolgreich angelegt');
    }

    public function delete(Lore $lore)
    {
        $lore->delete();

        return redirect(route('lore.index'))->with('success', 'erfolgreich gelöscht');
    }
}
