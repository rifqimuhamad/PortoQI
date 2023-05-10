<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class settingController extends Controller
{
    public function index(){
        return view('dashboard.setting-website.index');
    }
    public function update(Request $request){
        if ($request->method() == 'POST') {
            $request->validate([
                '_nameWebsite' => 'required',
                '_slogan' => 'required',
                '_descWebsite' => 'required',
                '_keywords' => 'required',
                '_defaultImg' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                '_logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                '_icon' => 'required|image|mimes:jpeg,png,jpg|max:2048'

            ], [
                '_nameWebsite.required' => 'Nama Website is required',
                '_slogan.required' => 'Slogan is required',
                '_descWebsite.required' => 'Descripsi is required',
                '_keywords.required' => 'Keyword is required',
                '_defaultImg.required' => 'Default Img is required',
                '_logo.required' => 'Logo is required',
                '_icon.required' => 'Icon is required'
            ]);
            //Default IMG
            $defaultImg = '_default_Image.' . $request->_defaultImg->extension();
            $img = Image::make($request->_defaultImg->path());
            $img->save(public_path('img/' . $defaultImg), 60);
    
            if ($img->filesize() > 500000) {
                $img->save(public_path('img/' . $defaultImg), 40);
            }

            //Logo IMG
            $logos = '_logo_Image.' . $request->_logo->extension();
            $logo = Image::make($request->_logo->path());
            $logo->save(public_path('img/' . $logos), 60);
    
            if ($logo->filesize() > 500000) {
                $logo->save(public_path('img/' . $logos), 40);
            }
            //ICOn IMG
            $icons = '_icon_Image.' . $request->_icon->extension();
            $icon = Image::make($request->_icon->path());
            $icon->save(public_path('img/' . $icons), 60);
    
            if ($icon->filesize() > 500000) {
                $icon->save(public_path('img/' . $icons), 40);
            }



            metadata::updateOrCreate(['meta_key' => '_nameWebsite'], ['meta_velue' => $request->_nameWebsite]);
            metadata::updateOrCreate(['meta_key' => '_slogan'], ['meta_velue' => $request->_slogan]);
            metadata::updateOrCreate(['meta_key' => '_descWebsite'], ['meta_velue' => $request->_descWebsite]);
            metadata::updateOrCreate(['meta_key' => '_keywords'], ['meta_velue' => $request->_keywords]);
            metadata::updateOrCreate(['meta_key' => '_defaultImg'], ['meta_velue' => $request->_defaultImg]);
            metadata::updateOrCreate(['meta_key' => '_logo'], ['meta_velue' => $request->_logo]);
            metadata::updateOrCreate(['meta_key' => '_icon'], ['meta_velue' => $request->_icon]);
            
            return redirect()->route('setting-website.index')->with('success', 'Successfully updated Setting Website data.');
    
        }       
        
    }
}