<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class agentController extends Controller
{
    public function index(){
            // $data = portfolio::orderBy('judul', 'asc')->get();
        return view('dashboard.agent.index');
    }
    public function update(Request $request){
        if ($request->method() == 'POST') {
            $request->validate([
                '_greeting' => 'required',
                '_name' => 'required',
                '_skill' => 'required',
                '_description' => 'required',
                '_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                '_cv' => 'nullable|mimes:pdf,doc,docx|max:2048'

            ], [
                '_greeting.required' => 'submenu1 is required',
                '_name.required' => 'nama is required',
                '_skill.required' => 'skill is required',
                '_description.required' => 'description is required',
            ]);
            //Photo IMG
            if ($request->hasFile('_photo')) {
                $photo = '_photo_Image.' . $request->_photo->extension();
                $img = Image::make($request->_photo->path());
                $img->save(public_path('img/agent/' . $photo), 60);
          
                if ($img->filesize() > 500000) {
                    $img->save(public_path('img/agent/' . $photo), 40);
                }
                $photo = 'img/agent/' . $photo;
                metadata::updateOrCreate(['meta_key' => '_photo'], ['meta_velue' => $photo]);
            }
             //CV
            if ($request->hasFile('_cv')) {
                $cv = 'CV MUHAMAD RIFQI.' . $request->_cv->extension();
                $request->_cv->move(public_path('uploads'), $cv);
        
                $cv = 'uploads/' . $cv;
                metadata::updateOrCreate(['meta_key' => '_cv'], ['meta_velue' => $cv]);
            }
            
            // $fileName = "CV MUHAMAD RIFQI".'.'.$request->_cv->extension();  
            // $request->_cv->move(public_path('uploads'), $fileName);

            metadata::updateOrCreate(['meta_key' => '_greeting'], ['meta_velue' => $request->_greeting]);
            metadata::updateOrCreate(['meta_key' => '_name'], ['meta_velue' => $request->_name]);
            metadata::updateOrCreate(['meta_key' => '_skill'], ['meta_velue' => $request->_skill]);
            metadata::updateOrCreate(['meta_key' => '_description'], ['meta_velue' => $request->_description]);
            // metadata::updateOrCreate(['meta_key' => '_cv'], ['meta_velue' => $request->_cv]);

            return redirect()->route('agent.index')->with('success', 'Successfully updated agent data.');
        }
    }
}
