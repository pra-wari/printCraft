
@extends('backEnd.includes.layout')



@section('content')
<div class="container-fluid">
    <div class="main-content">
      @if ($errors->any())

        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)

              <li>{{$error}}</li>

            @endforeach
          </ul>
        </div>

      @endif
      
      <h1>Admin Dashboard</h1>
    </div>
</div>
@endsection('content')
<!-- .animated -->
