@extends('layouts.app')

@section('page-header','feedbacks')
@section('page-description','')

@section('content')
	<a href="{{route('feedbacks.create')}}" class="btn btn-success">Create New</a>
	<h4>List of feedback Questions</h4>
		    <!-- /.box-header -->
      <div class="box-body">
        <table class="datatable table table-bordered table-striped">
          {{-- head of table --}}
          <thead>
          <tr>
              <th>Name</th>
              <th>Description</th>
			  <th>Actions</th>
          </tr>
          </thead>
          {{-- Body Of table --}}
          <tbody>
            @foreach($feedbacks as $feedback)
            <tr>
            	<td>{{ $feedback->question }}</td>
            	<td>{{ $feedback->description }}</td>
            	<td>
                @can('view',$feedback)
            		<a class="btn btn-info" href="{{route('feedbacks.show',['feedback'=>$feedback->id])}}"><i class="fa fa-eye"></i></a>
                @endcan
                @can('update',$feedback)
            		<a class="btn btn-success" href="{{route('feedbacks.edit',['feedback'=>$feedback->id])}}"><i class="fa fa-edit"></i></a>
                @endcan
                @can('delete',$feedback)
            		<a class="btn btn-danger" href="{{route('feedbacks.destroy',['feedback'=>$feedback->id])}}"><i class="fa fa-trash"></i></a>
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
