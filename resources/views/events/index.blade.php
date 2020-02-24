@extends('layouts.main')

@section('content')
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">

   <div class="card-header">
     <h3>Event List out</h3>
   </div>
   <div class="card-body">
     <table class="table table-bordered table-striped">
       <tr>
         <th width="10%">Image</th>
         <th width="20%">Title</th>
         <th width="20%">Venue</th>
         <th width="20%">Date</th>
         <th width="40%">Description</th>
       </tr>
       @foreach($data as $row)
       <tr>
         <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75"</td>
         <td>{{ $row->title}}</td>
         <td>{{ $row->venue}}</td>
         <td>{{ $row->date }}</td>
         <td>{{ $row->description }}</td>
         <td>

         </td>
       </tr>
       @endforeach
     </table>
     {!! $events->links() !!}
   </div>
@endsection
