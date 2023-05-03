@extends('layouts.admin')

@section('title')
    Reklama Show
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $ad->id }}-ID Ma'lumotlari</h4>
                <div class="card-header-form">
                    <a href="{{ route('admin.ads.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Title1 (Top):</th> <td>{{ $ad->title1 ?? ''  }}</td>
                        </tr>
                        <tr>
                            <th>Image1 (Top):</th> <td><img alt="image bor" src="/site/images/ads/{{ $ad->image1 ?? '' }}" width="120"></td>

                        </tr>
                        <tr>
                            <th>Url1 (Top):</th> <td>{{ $ad->url1 }}</td>
                        </tr>
                        <tr>
                            <th>Title2 (Sidebar):</th> <td>{{ $ad->title2 }}</td>
                        </tr>
                        <tr>
                            <th>Image2 (Sidebar):</th> <td><img alt="image bor" src="/site/images/ads/{{ $ad->image2 ?? '' }}" width="120"></td>
                        </tr>
                        <tr>
                            <th>Url2 (Sidebar):</th> <td>{{ $ad->url2 }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
