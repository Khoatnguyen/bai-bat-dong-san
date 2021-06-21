@include('layout.header')

    <div class="container">
        <h4> thông tin người dùng</h4>
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Tên tài khoản</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)

                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <button type="button" class="btn btn-info">Sửa</button>
                    </td>
                    <td>
                        <a style="cursor: pointer" data-toggle="modal" data-target="#myModal_<?php echo $user->id ?> " class="btn btn-danger"> Xóa</a>
                    </td>
                    </td>
                </tr>


            @endforeach


            </tbody>
        </table>
    </div>
@include('layout.footer')