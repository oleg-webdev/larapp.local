@extends('layouts.app')

@section('content')
  <div id="app" class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Dashboard</div>

          <div class="panel-body">
            <Users></Users>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection