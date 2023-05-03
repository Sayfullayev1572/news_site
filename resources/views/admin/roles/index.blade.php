<?php
$i=1;
?>

@extends('layouts.admin')

@section('title')
    Roles
@endsection


@section('content')

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Roles</h4>
                    <div class="card-header-form">
                        <a href="{{ route('admin.roles.create') }}" class="btn btn-primary">Roles Create</a>
                    </div>
                </div>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tbody>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $i++ ?? '' }}</td>
                                        <td>{{ $role->name ?? '' }}</td>
                                        <td>
                                            @foreach ($role->permissions as $permission)
                                                {{$permission->name}},
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.roles.show', $role->id) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-info">Edit</a>
                                            <form action="{{ route('admin.roles.destroy', $role->id)}}" method="POST" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger" value="Delete" onclick="return confirm('Ma\'lumotlarni o\'chirmoqchimisiz?')">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
