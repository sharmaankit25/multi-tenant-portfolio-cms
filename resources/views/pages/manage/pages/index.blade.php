@extends('layouts.app')

@section('page-header','pages')
@section('page-description','')

@section('content')
	<a href="{{route('pages.create')}}" class="btn btn-success">Create New</a>
	<h4>List of pages</h4>
	 <!-- /.box-header -->
      <div class="box-body">
        <table class="datatable table table-bordered table-striped">
          {{-- head of table --}}
          <thead>
          <tr>
              <th>Title</th>
			  <th>Slug</th>
			  <th>Actions</th>
          </tr>
          </thead>
          {{-- Body Of table --}}
          <tbody>
            @foreach($pages as $page)
            <tr>
            	<td>{{ $page->title }}</td>
				<td>{{ $page->slug }}</td>
            	<td>
                @can('view',$page)
            		<a class="btn btn-info" href="{{route('pages.show',['page'=>$page])}}"><i class="fa fa-eye"></i></a>
                @endcan
                @can('update',$page)
            		<a class="btn btn-success" href="{{route('pages.edit',['page'=>$page])}}"><i class="fa fa-edit"></i></a>
                @endcan
                @can('delete',$page)
            		<a class="btn btn-danger" href="{{route('pages.destroy',['page'=>$page])}}"><i class="fa fa-trash"></i></a>
                @endcan
            	</td>
            </tr>
            @endforeach
          </tbody>

          {{-- Footer of Table  --}}
          	<tfoot>
            <tr>
              <th>Title</th>
			  <th>Slug</th>
			  <th>Actions</th>
            </tr>
        	</tfoot>
        </table>
      </div>
      <!-- /.box-body -->
@endsection
