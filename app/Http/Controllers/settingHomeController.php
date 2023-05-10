<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class settingHomeController extends Controller
{
    public function index(){
        return view('dashboard.setting-home.index');
    }
    public function update(Request $request){
        if ($request->method() == 'POST') {
            $request->validate([
                '_subjudul2' => 'required',
                '_judul2' => 'required',
                '_desc' => 'required',
                '_subjudul3' => 'required',
                '_judul3' => 'required',
                '_desc3' => 'required',
                '_subjudul4' => 'required',
                '_judul4' => 'required',
                '_desc4' => 'required'      
                

            ], [
                '_subjudul2.required' => 'SubTitle Portfolio is required',
                '_judul2.required' => 'Title Portoflio is required',
                '_desc.required' => 'Description Portfolio is required',
                '_subjudul3.required' => 'SubTitle Client is required',
                '_judul3.required' => 'Title Client is required',
                '_desc3.required' => 'Description Client is required',
                '_subjudul4.required' => 'SubTitle Contact is required',
                '_judul4.required' => 'Title Contact is required',
                '_desc4.required' => 'Description Contact is required',
                
            ]);
            



            metadata::updateOrCreate(['meta_key' => '_subjudul2'], ['meta_velue' => $request->_subjudul2]);
            metadata::updateOrCreate(['meta_key' => '_judul2'], ['meta_velue' => $request->_judul2]);
            metadata::updateOrCreate(['meta_key' => '_desc'], ['meta_velue' => $request->_desc]);
            
            metadata::updateOrCreate(['meta_key' => '_subjudul3'], ['meta_velue' => $request->_subjudul3]);
            metadata::updateOrCreate(['meta_key' => '_judul3'], ['meta_velue' => $request->_judul3]);
            metadata::updateOrCreate(['meta_key' => '_desc3'], ['meta_velue' => $request->_desc3]);

            metadata::updateOrCreate(['meta_key' => '_subjudul4'], ['meta_velue' => $request->_subjudul4]);
            metadata::updateOrCreate(['meta_key' => '_judul4'], ['meta_velue' => $request->_judul4]);
            metadata::updateOrCreate(['meta_key' => '_desc4'], ['meta_velue' => $request->_desc4]);

            return redirect()->route('setting-home.index')->with('success', 'Successfully updated Home data.');
    
        }       
        
    }
}