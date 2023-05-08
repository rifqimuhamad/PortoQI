<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;

class pSubJudulController extends Controller
{
        public function index(){
            return view('dashboard.portfolioSubJudul.index');
        }
        public function update(Request $request){
            if ($request->method() == 'POST') {
                $request->validate([
                    '_subjudul2' => 'required',
                    '_judul2' => 'required',
                    '_desc' => 'required'                    
    
                ], [
                    '_subjudul2.required' => 'Subjudul is required',
                    '_judul2.required' => 'Title is required',
                    '_desc.required' => 'Description is required',
                    
                ]);
                
                metadata::updateOrCreate(['meta_key' => '_subjudul2'], ['meta_velue' => $request->_subjudul2]);
                metadata::updateOrCreate(['meta_key' => '_judul2'], ['meta_velue' => $request->_judul2]);
                metadata::updateOrCreate(['meta_key' => '_desc'], ['meta_velue' => $request->_desc]);
    
                return redirect()->route('portfolioSubJudul.index')->with('success', 'Successfully updated SubTitle data.');
            }
        }
}
