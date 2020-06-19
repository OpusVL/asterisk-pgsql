@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add an endpoint</h1>
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
              <label for="id">Extension number</label>
              <input type="text" class="form-control" name="id"/>
          </div>

          <div class="form-group">
              <label for="context">Company shortcode (context)</label>
              <input type="text" class="form-control" name="context"/>
          </div>

          <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password"/>
          </div>
          <div class="form-group">
              <label for="pickup_group">Ring Pickup Group</label>
              <input type="text" class="form-control" name="pickup_group"/>
          </div>
                               
          <button type="submit" class="btn btn-primary">Add Endpoint</button>
      </form>
  </div>
</div>
</div>
@endsection