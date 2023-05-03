<?php
$i=1;
?>

@extends('layouts.admin')

@section('title')
    Users
@endsection


@section('content')

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Users</h4>
                    <div class="card-header-form">
                        <a href="{{ route('admin.users.create')}}" class="btn btn-primary">Users Create</a>
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
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $i++ ?? '' }}</td>
                                        <td>{{ $user->name ?? '' }}</td>
                                        <td>{{ $user->email ?? '' }}</td>
                                        <td>
                                            @foreach ($user->roles as $role)
                                                {{$role->name}}
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info">Edit</a>
                                            <form action="{{ route('admin.users.destroy', $user->id)}}" method="POST" style="display: inline">
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
