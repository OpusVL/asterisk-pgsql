@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update an Endpoint</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('endpoints.update', $endpoint->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="id">Extension Number</label>
                <input type="text" class="form-control" name="id" value={{ $endpoint->id }} />
            </div>

            <div class="form-group">
                <label for="context">Company shortcode (context)</label>
                <input type="text" class="form-control" name="context" value={{ $endpoint->context }} />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" value={{ $auth->password }} />
            </div>
            <div class="form-group">
                <label for="pickup_group">Ring Pickup Group</label>
                <input type="text" class="form-control" name="pickup_group" value={{ $endpoint->pickup_group }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection