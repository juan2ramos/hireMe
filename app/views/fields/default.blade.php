<div class="form-group">
    {{Form::label($name,$label)}}
    {{$control}}
    @if($error)
        <p class="error_messages">{{$error}}</p>
    @endif
</div>