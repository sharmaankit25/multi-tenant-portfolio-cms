@php
    $old = old(str_replace('[]','',$name));
    if(!empty($old) && is_array($old)){
        $data = $old;
    }

    if(!empty($data)){
        if(!is_array($data)){
        $data = json_decode($data);
        }
    }
    
@endphp


<label class="control control--checkbox @if($errors->has($name)) on-error @endif" >@if(isset($label)) {{ $label }} @endif
    
    <input type="{{$type}}" @if(isset($disabled)) disabled='disabled' @endif
     
     @if(isset($id))  
     id="{{$id}}"
     @endif
     @if(isset($checked))
     	@if($checked) checked="checked" @endif
     @endif
     class="@if(isset($class)) {{ $class }} @endif" name="{{ $name }}" value="@if(isset($value)){{ $value }} @endif"
     @if(isset($data))
        {{ Helper::checkboxValuesCheck($data,$value) }}
     @endif
        @if(isset($require))
            required=""
        @endif
      >

</label>
