<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = clients::orderBy('judul', 'asc')->get();
        return view('dashboard.clients.index')->with('data', $data);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'

        ], [
            'judul.required' => 'Title is required',
            'image.required' => 'image is required'
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $img = Image::make($request->image->path());
        $img->save(public_path('img/clients/' . $imageName), 60);

        if ($img->filesize() > 500000) {
            $img->save(public_path('img/clients/' . $imageName), 40);
        }

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
            'kategory' => $request->kategory,
            'image' => $imageName,
        ];
        clients::create($data);

        return redirect()->route('clients.index')->with('success', 'Clients created successfully.');    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = clients::findOrFail($id);
        return view('dashboard.clients.edit')->with('data', $data);    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $clients = clients::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'

        ], [
            'judul.required' => 'Title is required',
            'image.image' => 'image is invalid'
        ]);

        if ($request->has('image')) {
            if ($clients->image != 'default.jpg') {
                Storage::delete('public/img/clients/' . $clients->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $img = Image::make($request->image->path())->encode('webp', 60);
            $img->save(public_path('img/clients/' . $imageName));

            if ($img->filesize() > 500000) {
                $img->save(public_path('img/clients/' . $imageName), 40);
            }

            $clients->image = $imageName;
        }

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
            'kategory' => $request->kategory,
            'image' => $clients->image,
        ];
        $clients->update($data);

        return redirect()->route('clients.index')->with('success', 'Clients updated successfully.');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clients = clients::findOrFail($id);

        if ($clients->image != 'default.jpg') {
            Storage::delete('public/img/clients/' . $clients->image);
        }

        $clients->delete();

        return redirect()->route('clients.index')->with('success', 'Clients deleted successfully.');    }
}
