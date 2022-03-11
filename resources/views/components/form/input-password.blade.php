<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <input type="password" class="form-control" id="{{$name}}" name="{{$name}}" value="{{$old}}">
</div>
@error($name)
<p class="text-danger">{{$message}}</p>
@enderror