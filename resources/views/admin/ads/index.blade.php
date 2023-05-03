@extends('layouts.admin')

@section('title')
    Ads
@endsection

@section('content')

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Reklama</h4>
                    <div class="card-header-form">
                        @empty($ad)
                            <a href="{{ route('admin.ads.create')}}" class="btn btn-primary">Add Reklama</a>
                        @endempty
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
                                    <th>Title (TOP)</th>
                                    <th>Image (TOP)</th>
                                    <th>Url (TOP)</th>
                                    <th>Title (Sidebar)</th>
                                    <th>Image (Sidebar)</th>
                                    <th>Url (Sidebar)</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>{{ \Str::limit($ad->title1, 50) ?? '' }}</td></td>
                                    <td><img alt="Add Reklama qo'shing" src="/site/images/ads/{{ $ad->image1 ?? '' }}" width="120"></td>
                                    <td>{{ \Str::limit($ad->url1, 10) ?? '' }}</td>
                                    <td>{{ \Str::limit($ad->title2, 50) ?? '' }}</td>
                                    <td><img alt="Add Reklama qo'shing" src="/site/images/ads/{{ $ad->image2 ?? ''}}" width="120"></td>
                                    <td>{{ \Str::limit($ad->url2, 10) ?? '' }}</td>
                                    @if(! empty($ad))
                                        <td>
                                            <a href="{{ route('admin.ads.show', $ad->id) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('admin.ads.edit', $ad->id) }}" class="btn btn-info">Edit</a>
                                            <form action="{{ route('admin.ads.destroy', $ad->id)}}" method="POST" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger" value="Delete" onclick="return confirm('Ma\'lumotlarni o\'chirmoqchimisiz?')">
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
