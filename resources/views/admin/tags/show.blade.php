@extends('layouts.admin')

@section('title')
    tag Show
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $tag->id }}-ID Ma'lumotlari</h4>
                <div class="card-header-form">
                    <a href="{{ route('admin.tags.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Name (UZ):</th> <td>{{ $tag->name_uz }}</td>
                        </tr>
                        <tr>
                            <th>Name (RU):</th> <td>{{ $tag->name_ru }}</td>
                        </tr>
                        <tr>
                            <th>Slug:</th> <td>{{ $tag->slug }}</td>
                        </tr>
                        <tr>
                            <th>Created At:</th> <td>{{ $tag->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Updated At:</th> <td>{{ $tag->updated_at }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
