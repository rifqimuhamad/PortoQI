<?php

namespace App\Http\Controllers;

use view;
use App\Models\portfolio;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = portfolio::orderBy('judul', 'asc')->get();
        return view('dashboard.portfolio.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategory' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'judul.required' => 'Title is required',
            'isi.required' => 'contents is required',
            'kategory.required' => 'kategory is required',
            'image.required' => 'image is required',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $img = Image::make($request->image->path());
        $img->save(public_path('img/portfolio/' . $imageName), 60);

        if ($img->filesize() > 500000) {
            $img->save(public_path('img/portfolio/' . $imageName), 40);
        }

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
            'kategory' => $request->kategory,
            'image' => $imageName,
        ];
        portfolio::create($data);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio created successfully.');
    }

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
        $data = portfolio::findOrFail($id);
        return view('dashboard.portfolio.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $portfolio = portfolio::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategory' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'judul.required' => 'Title is required',
            'isi.required' => 'contents is required',
            'kategory.required' => 'kategory is required',
            'image.image' => 'image is invalid',
        ]);

        if ($request->has('image')) {
            if ($portfolio->image != 'default.jpg') {
                Storage::delete('public/img/portfolio/' . $portfolio->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $img = Image::make($request->image->path())->encode('webp', 60);
            $img->save(public_path('img/portfolio/' . $imageName));

            if ($img->filesize() > 500000) {
                $img->save(public_path('img/portfolio/' . $imageName), 40);
            }

            $portfolio->image = $imageName;
        }

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
            'kategory' => $request->kategory,
            'image' => $portfolio->image,
        ];
        $portfolio->update($data);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = portfolio::findOrFail($id);

        if ($portfolio->image != 'default.jpg') {
            Storage::delete('public/img/portfolio/' . $portfolio->image);
        }

        $portfolio->delete();

        return redirect()->route('portfolio.index')->with('success', 'Portfolio deleted successfully.');
    }
}
