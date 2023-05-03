<?php
$i=1;
?>

@extends('layouts.admin')

@section('title')
    Permissions
@endsection


@section('content')

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Permissions</h4>
                    <div class="card-header-form">
                        <a href="{{ route('admin.permission.create') }}" class="btn btn-primary">Permissions Create</a>
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
                                    <th>Action</th>
                                </tr>
                                @foreach ($permissions as $permission)
                                    <tr>
                                        <td>{{ $i++ ?? '' }}</td>
                                        <td>{{ $permission->name ?? '' }}</td>
                                        <td>
                                            <a href="{{ route('admin.permission.show', $permission->id) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('admin.permission.edit', $permission->id) }}" class="btn btn-info">Edit</a>
                                            <form action="{{ route('admin.permission.destroy', $permission->id)}}" method="POST" style="display: inline">
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
