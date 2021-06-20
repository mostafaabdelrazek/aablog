@extends("layouts.app")
@section('title' , "Edit $tag->name")

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            {{Form::model( $tag ,['route' => ['tags.update' , $tag ], 'method' => 'PUT' , 'data-parsley-validate' => '' , 'class' => 'form'])}}
            {{Form::label('name' , 'Tag Name:')}}
            {{Form::text('name' , null , ['class' => 'form-control'])}}
            {{Form::submit('Save the changes' , ['class' => 'btn btn-outline-primary btn-block btn-sm  btn-mr'])}}
            {{Form::close()}}
        </div>
    </div>
</div>

@endsection