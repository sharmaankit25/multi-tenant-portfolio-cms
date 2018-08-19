<?php if ( ! isset($placeholder)) $placeholder = "" ?>
<input @if(isset($required)) required="" @endif type="@if(isset($type)){{ $type }}@endif"
       class="form-control @if($errors->has($name)) on-error @endif @if(isset($class)) {{ $class }} @endif"
       placeholder="@if(isset($placeholder)){{ $placeholder }}@endif"
       @if(isset($disabled)) disabled='disabled' @endif
       @if(isset($readonly)) readonly='readonly' @endif
       name="@if(isset($name)){{ $name }}@endif"
       value="@if(old()){{ old($name) }}@elseif(isset($value)){{$value}}@endif"
       id="@if(isset($id)){{ $id }}@endif"
       onfocus="@if(isset($onfocus)){{ $onfocus }}@endif"
       @if(isset($maxlength)) maxlength='{{$maxlength}}' @endif
       >
