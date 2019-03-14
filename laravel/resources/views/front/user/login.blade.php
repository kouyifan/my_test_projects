@extends('front.layouts.app')

@section('title', 'Login')

@section('content')
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection

@section('scripts')
    <script>

        $(function(){
            $('button').on('click',function () {
                $('.content_1').css('color','blue');
            });
        })
    </script>
@endsection