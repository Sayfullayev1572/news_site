@extends('layouts.admin')

@section('title')
    Permissin create
@endsection

@section('css')
    <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <form action="{{ route('admin.permission.store') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4>Permission Create</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Permission Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
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

@section('js')
    <script src="/admin/assets/bundles/select2/dist/js/select2.full.min.js"></script>
@endsection
