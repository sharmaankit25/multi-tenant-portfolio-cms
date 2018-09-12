@extends('layouts.app')

@section('page-header','Events')
@section('page-description','')

@section('content')
	<a href="{{route('events.create')}}" class="btn btn-success">Create New</a>
	<h4>List of Events</h4>
		    <!-- /.box-header -->
      <div class="box-body">
        <table class="datatable table table-bordered table-striped">
          {{-- head of table --}}
          <thead>
          <tr>
              <th>Name</th>
              <th>Description</th>
			  <th>Start Date</th>
			  <th>End Date</th>
			  <th>Actions</th>
          </tr>
          </thead>
          {{-- Body Of table --}}
          <tbody>
            @foreach($events as $event)
            <tr>
            	<td>{{ $event->name }}</td>
            	<td>{{ $event->description }}</td>
				<td>{{ $event->start_date }}</td>
				<td>{{ $event->end_date }}</td>
            	<td>
                @can('view',$event)
            		<a class="btn btn-info" href="{{route('events.show',['event'=>$event->id])}}"><i class="fa fa-eye"></i></a>
                @endcan
                @can('update',$event)
            		<a class="btn btn-success" href="{{route('events.edit',['event'=>$event->id])}}"><i class="fa fa-edit"></i></a>
                @endcan
                @can('delete',$event)
            		<a class="btn btn-danger" href="{{route('events.destroy',['event'=>$event->id])}}"><i class="fa fa-trash"></i></a>
                @endcan
            	</td>
            </tr>
            @endforeach
          </tbody>

          {{-- Footer of Table  --}}
          <tfoot>
            <tr>
              <th>Name</th>
			  <th>Description</th>
			  <th>Actions</th>
            </tr>
            </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
@endsection
