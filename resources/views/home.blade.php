@extends('layouts.main')

@section('content')
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="my_header" style="padding-top:190px;"></div>
        <div class="row">
          <div class="col-md-4 col-lg-3">
            <div class="w3-sidebar w3-collapse" style="padding-bottom: 100px;">
              <div class="card-header" style="background-color:#fff;">
                <div class="Dash">
                  <h4 style="font-family: sans-serif; font-weight:bold; color: black; text-align: center;" >Welcome {{ Auth::user()->name }}</h4>
                </div>
              </div>
            <div class="card-body">
              <div class="actions">
                <a href="#" class="act">Create Event</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
