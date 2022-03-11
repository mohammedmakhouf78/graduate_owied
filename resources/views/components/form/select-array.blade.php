<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <select class="custom-select form-control-border" id="{{$name}}" name="{{$name}}">
        @foreach ($mydata as $item)
        <option value="{{$item}}">{{$item}}</option>
        @endforeach
    </select>
</div>
@error($name)
<p class="text-danger">{{$message}}</p>
@enderror