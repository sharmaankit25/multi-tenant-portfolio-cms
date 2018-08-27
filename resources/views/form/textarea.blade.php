<textarea @if($placeholder) placeholder="{{ $placeholder }}" @endif @if(isset($required)) required="" @endif @if(isset($cols)) cols="{{$cols}}" @endif @if(isset($rows)) rows="{{$rows}}" @endif type="text" name="@if(isset($name)){{ $name }}@endif" class="form-control @if($errors->has($name)) on-error @endif @if(isset($class)) {{ $class }} @endif">@if(old()){{ old($name) }}@elseif(isset($value)){{$value}}@endif</textarea>