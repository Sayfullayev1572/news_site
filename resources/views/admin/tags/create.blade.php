@extends('layouts.admin')

@section('title')
    Tags create
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <form action="{{ route('admin.tags.store') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4>Tag Create</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Name (UZ)</label>
                        <input type="text" name="name_uz" class="form-control @error('name_uz') is-invalid @enderror">
                        @error('name_uz')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Name (RU)</label>
                        <input type="text" name="name_ru" class="form-control @error('name_ru') is-invalid @enderror">
                        @error('name_ru')
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
