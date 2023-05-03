@extends('layouts.admin')

@section('title')
    Reklama create
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <form action="{{ route('admin.ads.update', $ad->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    <h4>Reklama Create</h4>
                </div>
                <div class="card-body">
                    <div class="card-header">
                        <h4>Top Create</h4>
                    </div>
                    <div class="form-group">
                        <label>Tile1 (Top)</label>
                        <input type="text" name="title1" value="{{ $ad->title1 }}" class="form-control @error('title1') is-invalid @enderror">
                        @error('title1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Image1 (Top)</label>
                        <input type="file" name="image1" value="{{ $ad->image1 }}" class="form-control @error('image1') is-invalid @enderror">
                        @error('image1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Url1 (Top)</label>
                        <input type="text" name="url1" value="{{ $ad->url1 }}" class="form-control @error('url1') is-invalid @enderror">
                        @error('url1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="card-header">
                        <h4>Sidebar Create</h4>
                    </div>
                    <div class="form-group">
                        <label>Tile2 (Sidebar)</label>
                        <input type="text" name="title2" value="{{ $ad->title2 }}" class="form-control @error('title2') is-invalid @enderror">
                        @error('title2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Image2 (Sidebar)</label>
                        <input type="file" name="image2" value="{{ $ad->image2 }}" class="form-control @error('image2') is-invalid @enderror">
                        @error('image2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Url2 (Sidebar)</label>
                        <input type="text" name="url2" value="{{ $ad->url2 }}" class="form-control @error('url2') is-invalid @enderror">
                        @error('url2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
