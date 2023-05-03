@extends('layouts.admin')

@section('title')
    Category Show
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $category->id }}-ID Ma'lumotlari</h4>
                <div class="card-header-form">
                    <a href="{{ route('admin.categories.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Name (UZ):</th> <td>{{ $category->name_uz }}</td>
                        </tr>
                        <tr>
                            <th>Name (RU):</th> <td>{{ $category->name_ru }}</td>
                        </tr>
                        <tr>
                            <th>Meta Title:</th> <td>{{ $category->meta_title }}</td>
                        </tr>
                        <tr>
                            <th>Mete Description:</th> <td>{{ $category->meta_description }}</td>
                        </tr>
                        <tr>
                            <th>Mete Keywords:</th> <td>{{ $category->meta_keywords }}</td>
                        </tr>
                        <tr>
                            <th>Slug:</th> <td>{{ $category->slug }}</td>
                        </tr>
                        <tr>
                            <th>Created At:</th> <td>{{ $category->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Updated At:</th> <td>{{ $category->updated_at }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
