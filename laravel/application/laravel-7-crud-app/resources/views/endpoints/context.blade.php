@extends('base')

@section('main')
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
<form method="get" action="/context">
@csrf
    <div class="form-group">
      <label for="context">Search Context: </label>
      <input type="text" class="form-control" name="context" />
    </div>  
    <button type="submit" class="btn btn-primary">Search</button>

  </form>
</div>
<div class="row">
<div class="col-sm-12">
    <h2 class="display-4">Context Endpoints</h2>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Context</td>
          <td>Auth Username</td>
          <td>Auth Password</td>
          <td>Aors Max Contacts</td>
          <td>Aors Remove Existing</td>

          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($ps_endpoints as $endpoint)
        <tr>
            <td>{{$endpoint->id}}</td>
            <td>{{$endpoint->context}} </td>
            <td>{{$endpoint->username}} </td>
            <td>{{$endpoint->password}} </td>
            <td> {{$endpoint->max_contacts}} </td>
            <td>{{$endpoint->remove_existing}} </td>
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