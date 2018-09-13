@extends('layouts.app')

@section('page-header','achiever')
@section('page-description','')

@section('content')
	<a href="{{route('achievers.create')}}" class="btn btn-success">Create New</a>
	<h4>List of achiever</h4>
		    <!-- /.box-header -->
      <div class="box-body">
        <table class="datatable table table-bordered table-striped">
          {{-- head of table --}}
          <thead>
          <tr>
              <th>Name</th>
              <th>Description</th>
			  <th>Standard</th>
			  <th>Position</th>
			  <th>Event</th>
			  <th>Actions</th>
          </tr>
          </thead>
          {{-- Body Of table --}}
          <tbody>
            @foreach($achievers as $achiever)
            <tr>
            	<td>{{ $achiever->name }}</td>
            	<td>{{ $achiever->description }}</td>
				<td>{{ $achiever->standard_id }}</td>
				<td>{{ $achiever->position }}</td>
				<td>{{ $achiever->event->name }}</td>
            	<td>
                @can('view',$achiever)
            		<a class="btn btn-info" href="{{route('achievers.show',['achiever'=>$achiever])}}"><i class="fa fa-eye"></i></a>
                @endcan
                @can('update',$achiever)
            		<a class="btn btn-success" href="{{route('achievers.edit',['achiever'=>$achiever])}}"><i class="fa fa-edit"></i></a>
                @endcan
                @can('delete',$achiever)
            		<a class="btn btn-danger" href="{{route('achievers.destroy',['achiever'=>$achiever])}}"><i class="fa fa-trash"></i></a>
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
			  <th>Standard</th>
			  <th>Position</th>
			  <th>Event</th>
			  <th>Actions</th>
            </tr>
            </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
@endsection
