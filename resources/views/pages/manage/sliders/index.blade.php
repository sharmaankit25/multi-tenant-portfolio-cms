@extends('layouts.app')

@section('page-header','sliders')
@section('page-description','')

@section('content')
	<a href="{{route('sliders.create')}}" class="btn btn-success">Create New</a>
	<h4>List of sliders</h4>
		    <!-- /.box-header -->
      <div class="box-body">
        <table class="datatable table table-bordered table-striped">
          {{-- head of table --}}
          <thead>
          <tr>
              <th>Name</th>
			  <th>Actions</th>
          </tr>
          </thead>
          {{-- Body Of table --}}
          <tbody>
            @foreach($sliders as $slider)
            <tr>
            	<td>{{ $slider->title }}</td>
            	<td>
                @can('view',$slider)
            		<a class="btn btn-info" href="{{route('sliders.show',['slider'=>$slider->id])}}"><i class="fa fa-eye"></i></a>
                @endcan
                @can('update',$slider)
            		<a class="btn btn-success" href="{{route('sliders.edit',['slider'=>$slider->id])}}"><i class="fa fa-edit"></i></a>
                @endcan
                @can('delete',$slider)
            		<a class="btn btn-danger" href="{{route('sliders.destroy',['slider'=>$slider->id])}}"><i class="fa fa-trash"></i></a>
                @endcan
            	</td>
            </tr>
            @endforeach
          </tbody>

          {{-- Footer of Table  --}}
          <tfoot>
            <tr>
              <th>Name</th>
			  <th>Actions</th>
            </tr>
            </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
@endsection
