@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row  d-flex justify-content-around align-items-center">
        <div class="col-md-6">
            <h1>{{$post->title}}</h1>
            <hr>
            <div class="row">
             
                <div class="col-12">
                    Url Slug:
                    <br>
                    <a href="{{url("/blog/$post->slug")}}">{{url("/blog/$post->slug")}}</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4"> 
          <div class="col-md-10">
              <form action="{{route('posts.destroy' , $post)}}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field()}}
                <input type="submit" value="DELETE" class="btn btn-mr btn-lg  btn-block btn-outline-danger" onclick="return confirm('Are you sure to delete this post {{$post->title}}?')">
            </form>
            <a href="{{route('posts.edit' , $post)}}" class="btn btn-mr btn-lg  btn-block btn-outline-secondary">Edit</a>
          </div>
        </div>
    </div>
    
     <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-10">
    
                <p>{{$post->body}}</p>
            </div>
         </div>
     </div>
</div>
@endsection