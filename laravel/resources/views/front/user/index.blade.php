@extends('front.layouts.app')

@section('title', 'Page Title')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>username</th>
            <th>email</th>
            <th>create</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td scope="row">{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{date('Y-m-d H:i',strtotime($user['created_at']))}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-success">查看</button>

                        <button type="button" class="btn btn-secondary">编辑</button>
                        <form id="form" action="{{route('user.destroy',$user)}}" method="post">
                            @csrf @method('delete')
                            <input type="hidden" name="user" value="{{$user}}">
                            <button type="submit" class="btn btn-danger">删除</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$users->links()}}
@endsection

@section('scripts')
    <script>

        // $(function () {
        //     var data = $('#form').serializeArray();
        //     $('.btn-danger').on('click',function(event){
        //         event.preventDefault();
        //         var url = $('#form').attr('action');
        //         $.ajax({
        //             url: url,
        //             method: "POST",
        //             data: data,
        //             dataType: "json",
        //             success: function success(data) {
        //                 alert(data.id)
        //                 console.log(data)
        //             }
        //         });
        //     });
        // });
    </script>
@endsection