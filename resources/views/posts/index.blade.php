@extends('layouts.app')
@section('content')
@section('title' , 'Posts')
<div class="container">

    <div class="row">
        <div class="col-md-8 ">
            <h1>All Blogs here</h1>
        </div>
        <div class="col-md-3 offset-md-1">
            <a href="{{route('posts.create')}}" class="btn btn-success">
            Create a Post
            </a>
        </div>
    </div>
    
    
    
    <div class="row">
        <div class="col-md-12">
            <table class="table">
            <thead>
                <th>#</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Blog Body</th>
                <th>Last Update</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td>{{ substr(strip_tags($post->body) , 0 , 20)}}  {{ strlen(strip_tags($post->body) > 20 ?'.....' : '' ) }}</td>
                    <td>{{$post->updated_at}}</td>
                    <td>
                        <a href="{{route('posts.show' , $post)}}" class="btn btn-sm btn-outline-info"><i class="far fa-eye"></i></a>
                  <a href="{{route('posts.edit' , $post)}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center" >
        {!! $posts->links("pagination::bootstrap-4"); !!}
    </div>
</div>
</div>
</div>

@endsection