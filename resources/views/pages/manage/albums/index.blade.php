@extends('layouts.app')

@section('page-header','albums')
@section('page-description','')

@section('content')
	<a href="{{route('albums.create')}}" class="btn btn-success">Create New</a>
	<h4>List of albums</h4>
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
            @foreach($albums as $album)
            <tr>
            	<td>{{ $album->name }}</td>
            	<td>{{ $album->description }}</td>
            	<td>
                @can('view',$album)
            		<a class="btn btn-info" href="{{route('albums.show',['album'=>$album->id])}}"><i class="fa fa-eye"></i></a>
                @endcan
                @can('update',$album)
            		<a class="btn btn-success" href="{{route('albums.edit',['album'=>$album->id])}}"><i class="fa fa-edit"></i></a>
                @endcan
                @can('delete',$album)
            		<a class="btn btn-danger" href="{{route('albums.destroy',['album'=>$album->id])}}"><i class="fa fa-trash"></i></a>
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
