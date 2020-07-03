@extends('layouts.app')

@section('content')
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div>
    <a style="margin: 19px;" href="{{ route('endpoints.create')}}" class="btn btn-primary">New contact</a>
    </div>  
  
<div class="col-sm-12">
<form method="post" action="{{ route('endpoints.show','')}}">
    <div class="form-group">

      <label for="context">Search Context: </label>
      <input type="text" class="form-control" name="context" />
    </div>  
    <button type="submit" class="btn btn-primary">Search</button>

  </form>
</div>
<div class="row">
<div class="col-sm-8 offset-sm-2">
    <h2 class="display-4">Endpoints</h2>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Context</td>

          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($ps_endpoints as $endpoint)
        <tr>
            <td>{{$endpoint->id}}</td>
            <td>{{$endpoint->context}} </td>
              <td>
                <a href="{{ route('endpoints.edit',$endpoint->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('endpoints.destroy', $endpoint->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

        </tbody>
  </table>
</div>
</div>

<div class="row">
<div class="col-sm-12">

        <h2 class="display-4">Auth</h2>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Auth Type</td>
          <td>Username</td>
          <td>Password</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($ps_auth as $auth)
        <tr>
            <td>{{$auth->id}}</td>
            <td>{{$auth->auth_type}} </td>
            <td>{{$auth->username}} </td>
            <td>{{$auth->password}} </td>
              <td>
                <a href="{{ route('endpoints.edit',$endpoint->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('endpoints.destroy', $endpoint->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
    </div>

<div class="row">
<div class="col-sm-12">

        <h2 class="display-4">Aors</h2>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Max Contacts</td>
          <td>Remove Existing</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($ps_aors as $aors)
        <tr>
            <td>{{$aors->id}}</td>
            <td>{{$aors->max_contacts}} </td>
            <td>{{$aors->remove_existing}} </td>
              <td>
                <a href="{{ route('endpoints.edit',$endpoint->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('endpoints.destroy', $endpoint->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
    </div>
@endsection