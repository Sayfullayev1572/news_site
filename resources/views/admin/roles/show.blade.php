@extends('layouts.admin')

@section('title')
    Role Show
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $role->id }}-ID Ma'lumotlari</h4>
                <div class="card-header-form">
                    <a href="{{ route('admin.roles.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Name:</th> <td>{{ $role->name }}</td>
                        </tr>
                        @foreach ($role->permissions as $permission)
                            <tr>
                                <th>Permissions:</th> <td>{{ $permission->name }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
