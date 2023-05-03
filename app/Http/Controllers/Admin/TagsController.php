<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Str;

class TagsController extends Controller
{

    public function index()
    {
        $tags = Tag::paginate(10);
        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_uz'=>'required',
            'name_ru'=>'required',
        ]);

        $requestData = $request->all();
        $requestData['slug'] = Str::slug($requestData['name_uz']);

        Tag::create($requestData);

        return redirect()->route('admin.tags.index')->with('success', 'Tag create successfully!');
    }

    public function show(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $this->validate($request, [
            'name_uz'=>'required',
            'name_ru'=>'required',
        ]);

        $requestData = $request->all();
        $requestData['slug'] = Str::slug($requestData['name_uz']);
        $tag->update($requestData);
        return redirect()->route('admin.tags.index')->with('success', 'Tag update successfully!');
    }

    public function destroy($id)
    {
        Tag::destroy($id);
        return redirect()->route('admin.tags.index')->with('success', 'Tag deleted successfully!');
    }
}
