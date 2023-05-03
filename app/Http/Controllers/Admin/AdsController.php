<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;

class AdsController extends Controller
{

    public function index()
    {
        $ad = Ad::first();
        return view('admin.ads.index', compact('ad'));
    }

    public function create()
    {
        return view('admin.ads.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title1'=>'required',
            'title2'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'url1'=>'required',
            'url2'=>'required'
        ]);

        $requestData = $request->all();

        if($request->hasFile('image1')){
            $file = $request->file('image1');
            $image_name = time().'.'.$file->getClientOriginalExtension();
            $file->move('site/images/ads/', $image_name);
            $requestData['image1'] = $image_name;
        };

        if($request->hasFile('image2')){
            $file = $request->file('image2');
            $image_name = time().'2.'.$file->getClientOriginalExtension();
            $file->move('site/images/ads/', $image_name);
            $requestData['image2'] = $image_name;
        };

        Ad::create($requestData);

        return redirect()->route('admin.ads.index')->with('success', 'Ads create successfully!');
    }

    public function show(Ad $ad)
    {
        return view('admin.ads.show', compact('ad'));
    }

    public function edit(Ad $ad)
    {
        return view('admin.ads.edit', compact('ad'));
    }

    public function update(Request $request, Ad $ad)
    {
        $this->validate($request, [
            'title1'=>'required',
            'title2'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'url1'=>'required',
            'url2'=>'required',
        ]);

        $requestData = $request->all();

        if($request->hasFile('image1')){
            $file = $request->file('image1');
            $image_name = time().'.'.$file->getClientOriginalExtension();
            $file->move('site/images/posts', $image_name);
            $requestData['image1'] = $image_name;
        };

        if($request->hasFile('image2')){
            $file = $request->file('image2');
            $image_name = time().'2.'.$file->getClientOriginalExtension();
            $file->move('site/images/posts', $image_name);
            $requestData['image2'] = $image_name;
        };

        $ad->update($requestData);

        return redirect()->route('admin.ads.index')->with('success', 'Ads create successfully!');
    }

    public function destroy($id)
    {
        Ad::destroy($id);
        return redirect()->route('admin.ads.index')->with('success', 'Ads deleted successfully!');
    }
}
