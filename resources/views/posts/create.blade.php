@extends('layouts.app')
@section('title' , 'Creat a New Blog')

@section('styles')
{!! Html::script('https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' , ['referrerpolicy' => 'origin']) !!}

<script>
    tinymce.init(
        {
           selector: '#featuredtextarea'
        }
    )
</script>

@endsection

@section('content')
<div class="col-md-8 offset-md-2">
    
<h1>Create a New Blog </h1>

{{Form::open(['route' => 'posts.store' , 'method' => 'Post' , 'data-parsley-validate' => '' , 'class' => 'form'])}}
{{Form::label('title' , 'Blog Title:')}}
{{Form::text('title' , null , ['class' => 'form-control' , 'required']  )}}
{{Form::label('slug' , 'URL-Slug')}}
{{Form::text('slug' , null , ['class' => 'form-control' , 'required'] )}}
{{Form::label('body' , 'Blog Body')}}
{{Form::textarea('body' , null , ['class' => 'form-control' ,'id' => 'featuredtextarea' , 'rows' => '20' , 'required'])}}
{{Form::submit('Create a Post' , ['class' => 'btn-mr btn btn-lg btn-primary'])}}
{{Form::close()}}
</div>
@endsection