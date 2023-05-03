@extends('layouts.admin')

@section('title')
    Permission Show
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $permission->id }}-ID Ma'lumotlari</h4>
                <div class="card-header-form">
                    <a href="{{ route('admin.permission.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>ID:</th> <td>{{ $permission->id }}</td>
                        </tr>
                        <tr>
                            <th>Permission name:</th> <td>{{ $permission->name }}</td>
                        </tr>
                        <tr>
                            <th>Yaratilhan vaqti:</th> <td>{{ $permission->created_at }}</td>
                        </tr>
                        <tr>
                            <th>tahrirlangan vaqti:</th> <td>{{ $permission->updated_at }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
