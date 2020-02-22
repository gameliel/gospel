@extends('layouts.main')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/event.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css')}}">

    <section>
        <div classs="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="event">
                    <h1>Creat an Event</h1>
                </div>
                <div class="create">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ url('event')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-sm-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" name="title" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="venue">Venue</label>
                                                <input type="text" class="form-control" name="venue" placeholder="Venue">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Date</label>
                                                <input type="date" class="form-control" name="date">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="venue">Description</label>
                                                <input type="text" class="form-control" name="description" placeholder=" Enter the Description for the event">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="file" class="form-control image" name="image" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-info btn-lg btn-block" id="button" name="submit" value="Add Event" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
