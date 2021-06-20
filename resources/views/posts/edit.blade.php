@extends('layouts.app')
@section('content')
<div class="col-md-8 offset-md-2">
    
    <h1>Edit a Blog </h1>
    
    {{Form::model($post ,['route' => ['posts.update' , $post->id] , 'method' => 'PUT' , 'data-parsley-validate' , 'class' => 'form'])}}
    {{Form::label('title' , 'Blog Title:')}}
    {{Form::text('title' , null , ['class' => 'form-control'] )}}
    {{Form::label('slug' , 'URL-Slug')}}
    {{Form::text('slug' , null , ['class' => 'form-control'])}}
    {{Form::label('body' , 'Blog Body')}}
    {{Form::textarea('body' , null , ['class' => 'form-control'])}}
    {{Form::submit('Update a Post' , ['class' => 'btn btn-lg btn-success btn-mr'])}}
    {{Form::close()}}
    
    </div>
@endsection