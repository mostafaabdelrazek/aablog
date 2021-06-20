@extends('layouts.app')
@section('title' , ' Categories')
@section('content')

<div class="container">
    <div class="row d-flex justify-content-around  align-items-center">
        <h1>Categories:</h1>
        <div class="col-md-3 offset-md-2">
            {{Form::open(['route' => 'categories.store' , 'method' => 'POST' , 'data-parsley-validate' => '' , 'class' => 'form'])}}
            {{Form::label('name' , 'Category Name:')}}
            {{Form::text('name' , null , ['class' => 'form-control'])}}
            {{Form::submit('Create a New Category' , ['class' => 'btn btn-success btn-block btn-sm  btn-mr'])}}
            {{Form::close()}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-1">
            
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Created_at</th>
                    <th>Control</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>
                            {{$category->id}}
                        </td>
                        <td>
                            {{$category->name}}
                        </td>
                        <td>
                            {{$category->created_at}}
                        </td>
                        <td>
                            <div class="d-flex  justify-content-around">
                            <form action="{{route('categories.destroy' , $category)}}" method="post" class = 'form inlile'>
                                <input name="_method" type="hidden" value="DELETE"/>
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are You Sure to Delete {{$category->name}}') ">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                </form>
                                <a href="{{route('categories.edit' , $category)}}" class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-edit"> 
                                </i>
                            </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center" >
                {!! $categories->links("pagination::bootstrap-4"); !!}
            </div>
        </div>
    </div>
</div>

@endsection