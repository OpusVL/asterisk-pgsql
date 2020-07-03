@extends('base')

@section('main')
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
  
<div class="row">
<div class="col-sm-12">
    <h2 class="display-4">Extensions by Company</h2>    

<div style="margin-top:100px"></div>

<h3>Company: {{$context}}</h3>

<div style="margin-top:30px"></div>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Context</td>
          <td>Auth Username</td>
          <td>Auth Password</td>
          <td>Aors Max Contacts</td>
          <td>Aors Remove Existing</td>
          <td>Registered?</td>
          <td>URI</td>
          <td>User Agent</td>
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
            <td>@if (!$endpoint->uri=="")Yes
                @else No
                @endif
            </td>
            <td>{{$endpoint->uri}} </td>
            <td>{{$endpoint->user_agent}} </td>
              <td>
              <a href="{{ URL::to('endpoints/' . $endpoint->id) . '/edit'}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
            <form action="{{ URL::to('endpoints/' . $endpoint->id)}}" method="post">
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