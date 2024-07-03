<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wines = Wine::paginate(9);
        return view('admin.wines.index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Wine $wine)
    {
        return view('admin.wines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('cover_image')) {
            $imagePath = Storage::put('postImg', $request->cover_image);
            $data['cover_image'] = $imagePath;
        }
        $wine = new Wine;
        $wine->fill($data);
        $wine->save();

        return redirect()->route("admin.wines.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Wine $wine)
    {
        return view('admin.wines.show', compact('wine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $wine = Wine::findOrFail($id);
        return view('admin.wines.edit', compact('wine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $wine = Wine::findOrFail($id);

        if ($request->hasFile('cover_image')) {
            if ($wine->cover_image) {
                Storage::delete($wine->cover_image);
            }

            $imagePath = Storage::put('postImg', $request->cover_image);
            $data['cover_image'] = $imagePath;
        }

        $wine->fill($data);
        $wine->save();
        return redirect()->route('admin.wines.index')->with('message', 'Il vino : ' . $wine->wine . ' è stato aggiornato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $wine = Wine::findOrFail($id);
        if ($request->hasFile('cover_image')) {
            if ($wine->cover_image) {
                Storage::delete($wine->cover_image);
            }
        }
        return redirect()->route('admin.wines.index')->with('message', 'Il vino : ' . $wine->title . ' è stato cancellato con successo.');
    }
}
