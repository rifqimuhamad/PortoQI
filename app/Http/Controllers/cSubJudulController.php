<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;

class cSubJudulController extends Controller
{
    public function index(){
        return view('dashboard.clientSubJudul.index');
    }
    public function update(Request $request){
        if ($request->method() == 'POST') {
            $request->validate([
                '_subjudul3' => 'required',
                '_judul3' => 'required',
                '_desc3' => 'required'                    

            ], [
                '_subjudul3.required' => 'Subjudul is required',
                '_judul3.required' => 'Title is required',
                '_desc3.required' => 'Description is required',
                
            ]);
            
            metadata::updateOrCreate(['meta_key' => '_subjudul3'], ['meta_velue' => $request->_subjudul3]);
            metadata::updateOrCreate(['meta_key' => '_judul3'], ['meta_velue' => $request->_judul3]);
            metadata::updateOrCreate(['meta_key' => '_desc3'], ['meta_velue' => $request->_desc3]);

            return redirect()->route('clientSubJudul.index')->with('success', 'Successfully updated SubTitle data.');
        }
    }
}
