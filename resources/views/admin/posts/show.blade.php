@extends('layouts.admin')

@section('title')
    Post
@endsection


@section('content')

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $post->id }}-ID ma'lumotlari</h4>
                    <div class="card-header-form">
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th> Category (UZ): </th>
                                <td>{{ $post->category->name_uz ?? 'Categorya bog\'lanmagan' }}</td>
                            </tr>
                            <tr>
                                <th> Category (RU): </th>
                                <td>{{ $post->category->name_ru ?? 'Categorya bog\'lanmagan'}}</td>
                            </tr>
                            <tr>
                                <th> Tags (UZ): </th>
                                <td>
                                    @foreach ($post->tags as $tag)
                                        {{ $tag->name_uz}}
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th> Tags (RU): </th>
                                <td>
                                    @foreach ($post->tags as $tag)
                                        {{ $tag->name_ru}}
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Title (UZ):</th>
                                <td>{{ $post->title_uz }}</td>
                            </tr>
                            <tr>
                                <th>Title (RU):</th>
                                <td>{{ $post->title_ru }}</td>
                            </tr>
                            <tr>
                                <th>Body (UZ):</th>
                                <td>{!! $post->body_uz !!}</td>
                            </tr>
                            <tr>
                                <th>Body (RU):</th>
                                <td>{!!$post->body_ru !!}</td>
                            </tr>
                            <tr>
                                <th>Image:</th>
                                <td>
                                    <img alt="image bor" src="/site/images/posts/{{ $post->image }}" width="150">
                                </td>
                            </tr>
                            <tr>
                                <th>Meta Title:</th>
                                <td>{{ $post->meta_title }}</td>
                            </tr>
                            <tr>
                                <th>Meta Description:</th>
                                <td>{{ $post->meta_description }}</td>
                            </tr>
                            <tr>
                                <th>Meta Keywords:</th>
                                <td>{{ $post->meta_keywords }}</td>
                            </tr>
                            <tr>
                                <th>Slug:</th>
                                <td>{{ $post->slug }}</td>
                            </tr>
                            <tr>
                                <th>Created At:</th>
                                <td>{{ $post->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Updated At:</th>
                                <td>{{ $post->updated_at }}</td>
                            </tr>
                            <tr>
                                <th>View:</th>
                                <td>{{ $post->view }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
