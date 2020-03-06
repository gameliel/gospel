@extends('layouts.main')

@section('content')
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">

   <div class="card-header">
     <h3>Event List out</h3>
   </div>
   @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <div class="card-body">
     <table class="table table-bordered table-striped">
       <tr>
         <th width="10%">Image</th>
         <th width="20%">Title</th>
         <th width="20%">Venue</th>
         <th width="20%">Date</th>
         <th width="40%">Description</th>
       </tr>
       @foreach($events as $event)
       <tr>
         <td><img src="{{ URL::to('/') }}/images/{{ $event->image }}" class="img-thumbnail" width="75"/></td>
         <td>{{ $event->title}}</td>
         <td>{{ $event->venue}}</td>
         <td>{{ $event->date }}</td>
         <td>{{ $event->description }}</td>
         <td>
         <a class="btn btn-info" href="{{ route('events.show',$event->id) }}">Show</a>
         <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Edit</a>
         <form action="{{ route('events.destroy',$event->id) }}" method="POST">
            @csrf
            @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
         </td>
       </tr>
       @endforeach
     </table>
     {!! $events->links() !!}
   </div>
@endsection
