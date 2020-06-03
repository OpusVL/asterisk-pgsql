@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a contact</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('endpoints.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" name="city"/>
          </div>
          <div class="form-group">
              <label for="country">Country:</label>
              <input type="text" class="form-control" name="country"/>
          </div>
          <div class="form-group">
              <label for="job_title">Job Title:</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>                         
          <button type="submit" class="btn btn-primary-outline">Add contact</button>
      </form>
  </div>
</div>
</div>
@endsection