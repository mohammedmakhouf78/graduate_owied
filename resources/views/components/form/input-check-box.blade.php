<div class="form-check">
    <input type="checkbox" class="form-check-input" id="{{$name}}" name="{{$name}}" {{$old==true ? 'checked' : '' }}
        value="1">
    <label class="form-check-label" for="{{$name}}">{{$label}}</label>
</div>
@error($name)
<p class="text-danger">{{$message}}</p>
@enderror