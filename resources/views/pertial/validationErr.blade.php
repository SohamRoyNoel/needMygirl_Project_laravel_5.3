<div class="alert alert-danger" style="visibility: hidden">
    @if(count($errors) > 0)
        <div class="alert alert-danger" style="visibility: visible">
            @foreach($errors->all() as $er)
                {{$er}}
                <br>
            @endforeach
        </div>
    @endif
</div>