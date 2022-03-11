<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <textarea class="ckeditor form-control" name="{{$name}}">{!!$old!!}</textarea>
    @error($name)
    <p class="text-danger">{{$message}}</p>
    @enderror
</div>