<div class="col-md-8 offset-md-2">
    @if(Session::has('success'))

    <div class="alert alert-success" role='alert'>
        <strong>Session: </strong> {{ Session::get('success')}}
    </div>

@endif

@if(count($errors) > 0)

    <div class="alert alert-danger">
        <strong>Error: </strong>
        <ul>
        @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>

@endif
</div>