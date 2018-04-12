
@if(count($errors))
    <div class="form-group">
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <ul>{{$error}}</ul>
            @endforeach
        </div>
    </div>
@endif