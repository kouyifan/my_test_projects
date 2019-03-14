@foreach(['success','danger'] as $t)
    @if(session()->has($t))
        <div class="alert alert-{{$t}}" role="alert">
            {{session()->get($t)}}
        </div>
    @endif
@endforeach
