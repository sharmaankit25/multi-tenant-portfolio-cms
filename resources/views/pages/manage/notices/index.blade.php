@extends('layouts.app')

@section('page-header','notices')
@section('page-description','')

@section('content')
	<a href="{{route('notices.create')}}" class="btn btn-success">Create New</a>
	<h4>List of notices</h4>
		    <!-- /.box-header -->
      <div class="box-body">
        <table class="datatable table table-bordered table-striped">
          {{-- head of table --}}
          <thead>
          <tr>
              <th>Title</th>
			  <th>Description</th>
			  <th>Type</th>
			  <th>Published Date</th>
			  <th>Actions</th>
          </tr>
          </thead>
          {{-- Body Of table --}}
          <tbody>
            @foreach($notices as $notice)
            <tr>
            	<td>{{ $notice->title }}</td>
            	<td>{{ $notice->description }}</td>
				<td>{{ $notice->type }}</td>
				<td>{{ $notice->published_at }}</td>
            	<td>
                @can('view',$notice)
            		<a class="btn btn-info" href="{{route('notices.show',['notice'=>$notice->id])}}"><i class="fa fa-eye"></i></a>
                @endcan
                @can('update',$notice)
            		<a class="btn btn-success" href="{{route('notices.edit',['notice'=>$notice->id])}}"><i class="fa fa-edit"></i></a>
                @endcan
                @can('delete',$notice)
            		<a class="btn btn-danger" href="{{route('notices.destroy',['notice'=>$notice->id])}}"><i class="fa fa-trash"></i></a>
                @endcan
            	</td>
            </tr>
            @endforeach
          </tbody>

          {{-- Footer of Table  --}}
          <tfoot>
            <tr>
              <th>Title</th>
			  <th>Description</th>
			  <th>Type</th>
			  <th>Published Date</th>
			  <th>Actions</th>
            </tr>
            </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
@endsection
