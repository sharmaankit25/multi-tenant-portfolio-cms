@extends('layouts.app')

@section('page-header','Organisations')
@section('page-description','')

@section('content')
	<a href="{{route('organisations.create')}}" class="btn btn-success">Create New</a>
	<h4>List of Organisations</h4>
		    <!-- /.box-header -->
      <div class="box-body">
        <table class="datatable table table-bordered table-striped">
          {{-- head of table --}}
          <thead>
          <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Token</th>
            <th>Renewal Date</th>
            <th>Actions</th>
          </tr>
          </thead>
          {{-- Body Of table --}}
          <tbody>
            @foreach($organisations as $organisation)
            <tr>
            	<td>{{ $organisation->name }}</td>
              <td>{{ $organisation->description }}</td>
              <td>{{ $organisation->address }}</td>
              <td>{{ $organisation->phone }}</td>
              <td>{{ $organisation->email }}</td>
              <td>{{ $organisation->token }}</td>
              <td>{{ $organisation->renwal_date }}</td>
            	<td>
                @can('view',$organisation)
            		<a class="btn btn-info" href="{{route('organisations.show',['organisation'=>$organisation->id])}}"><i class="fa fa-eye"></i></a>
                @endcan
                @can('update',$organisation)
            		<a class="btn btn-success" href="{{route('organisations.edit',['organisation'=>$organisation->id])}}"><i class="fa fa-edit"></i></a>
                @endcan
                @can('delete',$organisation)
            		<a class="btn btn-danger" href="{{route('organisations.destroy',['organisation'=>$organisation->id])}}"><i class="fa fa-trash"></i></a>
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
			  <th>Address</th>
			  <th>Phone</th>
			  <th>Email</th>
			  <th>Token</th>
			  <th>Renewal Date</th>
			  <th>Actions</th>
            </tr>
            </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
@endsection
