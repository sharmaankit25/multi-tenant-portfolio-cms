<select @if(isset($required)) required="" @endif name="@if(isset($name)){{ $name }}@endif" class="form-control @if(isset($class)){{ $class }}@endif @if($errors->has($name)) on-error @endif" id="@if(isset($id)){{ $id }}@endif" >
    @if(isset($placeholder))
        <option value="">{{ $placeholder }}</option>
    @else
        <option value="">Select Option</option>
    @endif

    @if(old($name) != '')
        @php($data = old($name))
    @endif

	@if(Helper::is_assoc($options))
		@foreach($options as $key => $opt)
        	<option @if(isset($data)){{ Helper::selectvaluesCheck($data,$key) }} @endif
        	value="{{ $key }}">{{ $opt }}</option>
    	@endforeach
	@else
		@foreach($options as $key => $opt)
        <option @if(isset($data)){{ Helper::selectvaluesCheck($data,$opt) }} @endif
        value="{{ $opt }}">{{ $opt }}</option>
    	@endforeach
	@endif
</select>
