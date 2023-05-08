<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index(){
    return view('dashboard.about.index');
}
public function update(Request $request){
    if ($request->method() == 'POST') {
        $request->validate([
            '_subjudul1' => 'required',
            '_judulkiri' => 'required',
            '_judulkanan' => 'required',
            '_dkiri' => 'required',
            '_dkanan' => 'required',
            '_instagram' => 'required',
            '_facebook' => 'required',
            '_linkedin' => 'required',
            '_github' => 'required'
            

        ], [
            '_subjudul1.required' => 'Subjudul is required',
            '_judulkiri.required' => 'Title is required',
            '_judulkanan.required' => 'Social Media is required',
            '_dkiri.required' => 'description Title is required',
            '_dkanan.required' => 'Social Media description is required',
            '_instagram.required' => 'instagram is required',
            '_facebook.required' => 'facebook is required',
            '_linkedin.required' => 'linkedin is required',
            '_github.required' => 'github is required'
        ]);
        
        metadata::updateOrCreate(['meta_key' => '_subjudul1'], ['meta_velue' => $request->_subjudul1]);
        metadata::updateOrCreate(['meta_key' => '_judulkiri'], ['meta_velue' => $request->_judulkiri]);
        metadata::updateOrCreate(['meta_key' => '_judulkanan'], ['meta_velue' => $request->_judulkanan]);
        metadata::updateOrCreate(['meta_key' => '_dkiri'], ['meta_velue' => $request->_dkiri]);
        metadata::updateOrCreate(['meta_key' => '_dkanan'], ['meta_velue' => $request->_dkanan]);
        metadata::updateOrCreate(['meta_key' => '_instagram'], ['meta_velue' => $request->_instagram]);
        metadata::updateOrCreate(['meta_key' => '_facebook'], ['meta_velue' => $request->_facebook]);
        metadata::updateOrCreate(['meta_key' => '_linkedin'], ['meta_velue' => $request->_linkedin]);
        metadata::updateOrCreate(['meta_key' => '_github'], ['meta_velue' => $request->_github]);

        return redirect()->route('about.index')->with('success', 'Successfully updated about data.');
    }
}

}
