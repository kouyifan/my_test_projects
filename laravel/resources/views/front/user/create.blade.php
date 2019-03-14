@extends('front.layouts.app')

@section('title', 'Page Title')

@section('content')
    <form action="{{route('user.store')}}" method="post">
        @include('front.layouts._error')
        @csrf
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="password_confirmation">password_confirmation</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value=""
                   placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('scripts')
    <script>

        $(function () {
            $('button').on('click', function () {
                $('.content_1').css('color', 'blue');
            });
        })
    </script>
@endsection