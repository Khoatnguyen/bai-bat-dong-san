@extends('layout.main')

@section('content')
    <section class="create-news">
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 ">
                    <form action="{{route('post.create.news')}}" method="POST" enctype="multipart/form-data">
                        @csrf()
                        <div class="news-information">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $err)
                                            <li>{{$err}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="rowHeader">
                                <h4> Thông tin cơ bản</h4>
                            </div>

                            <div class="basic-information">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Tiêu đề:</label>
                                    <input type="text" class="form-control-file" name="title">
                                </div>
                                <div class="form-group">
                                    <p> Miêu tả :</p>
                                    <textarea id="description" name="description" rows="4" cols="50">

                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tỉnh/Thành phố:</label>
                                    <select class="form-control" id="exampleFormControlSelect1"
                                            onchange="getDistrict(this)" name="province_id">
                                        <option> chọn</option>
                                        @foreach($province as $item)
                                            <option value="{{$item->code}}"> {{$item->name}}</option>
                                            {{--                                        <!-- value="{{$item->code}} lấy dữ liệu code -->--}}
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Quận/Huyện:</label>
                                    <select class="form-control" id="district" onchange="getWard(this)"
                                            name="district_id">
                                        <option> Chọn</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Xã:</label>
                                    <select class="form-control" id="ward" name="ward_id">
                                        <option> Chọn</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Địa chỉ:</label>
                                    <input type="text" class="form-control-file" name="address">
                                    @error('address')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Dự án:</label>
                                    <input type="text" class="form-control-file" name="project">
                                    @error('project')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Diện tích:</label>
                                    <input type="text" class="form-control-file" name="acreage">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Giá tiền:</label>
                                    <input type="text" class="form-control-file" name="price">
                                    @error('price')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Giá tiền m2:</label>
                                    <input type="text" class="form-control-file" name="price_m2">
                                    @error('price_m2')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Phòng Ngủ:</label>
                                    <input type="number" class="form-control-file" name="bedroom">
                                    @error('bedroom')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Phòng khách:</label>
                                    <input type="number" class="form-control-file" name="living_rom">
                                    @error('living_rom')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Số Tầng:</label>
                                    <input type="number" class="form-control-file" name="number_floor">
                                    @error('number_floor')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Phương Hướng:</label>
                                    <input type="text" class="form-control-file" name="direction">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Nội thất:</label>
                                    <input type="text" class="form-control-file" name="furniture">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Mặt tiền:</label>
                                    <input type="text" class="form-control-file" name="frontispiece">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Đường:</label>
                                    <input type="text" class="form-control-file" name="road">
                                </div>
                                <div class="form-check">
                                    <label for="exampleFormControlFile1">Kiểu:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                               id="inlineRadio1" value="" name="type">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type"
                                               id="inlineRadio2" value="">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <label for="exampleFormControlFile1">Trạng thái:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status"
                                               id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Hoạt Dộng</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status"
                                               id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Không hoạt động</label>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="news-information">
                            <div class="rowHeader">
                                <h4> Thêm hình ảnh và video</h4>
                            </div>

                            <div class="content-image">
                                Số lượng ảnh tối đa theo các loại tin: VIP Đặc biệt - 24 ảnh, VIP1 - 20 ảnh, VIP2 & VIP
                                3 -
                                18 ảnh, VIP Ưu đãi - 16 ảnh, Tin thưởng - 8 ảnh. Mỗi ảnh tối đa 2MB

                                Vui lòng sử dụng hình ảnh thật, không đăng trùng và không thêm số điện thoại vào hình
                                ảnh.
                                Tìm hiểu thêm về Quy định đăng tin.

                                Tin rao có ảnh sẽ được xem nhiều hơn gấp 10 lần và được nhiều người gọi gấp 5 lần so với
                                tin
                                rao không có ảnh. Hãy đăng ảnh để được giao dịch nhanh chóng!
                            </div>
                            <div class="form-group video">
                                <input type="file" class="form-control" id="image-video" name="files[]" multiple>
                            </div>
                        </div>

                        <div class="news-information">
                            <div class="rowHeader">
                                <h4> Liên hệ</h4>
                            </div>

                            <div class="title-contact">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Tên Liên Hệ:</label>
                                    <input type="text" class="form-control-file" name="contact_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Địa Chỉ:</label>
                                    <input type="text" class="form-control-file" name="contact_address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Email:</label>
                                    <input type="text" class="form-control-file" name="contact_email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Số Điện Thoại:</label>
                                    <input type="text" class="form-control-file" name="contact_phone">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary margin-title-20">Đăng tin</button>
                    </form>

                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                </div>
            </div>

        </div>

    </section>
    <script>
        function getDistrict(data) {
            //ajax
            $.ajax({
                url: '{{route('get.district')}}',
                type: 'POST',
                data: {
                    province_id: data.value,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {//sau khi ajax call thành công


                    // bỏ những option cũ và thay thế bằng những option mới
                    $('#district').html('<option value=""> </option>');

                    // duyệt mảng
                    $.each(res, function (key, value) {
                        // duyệt dữ liệu ra từ trong database
                        $('#district').append('<option value="' + value.code + '">' + value.name + '</option>')
                    })

                }

            })

        }

        function getWard(data) {
            $.ajax({
                url: '{{route('get.ward')}}',
                type: 'POST',
                data: {
                    district_id: data.value,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {

                    // khi call ajax thành công
                    $('#ward').html('<option value=""></option>')
                    // duyệt mảng
                    $.each(res, function (key, value) {
                        // duyệt dữ liệu ra từ trong database
                        $('#ward').append('<option value="' + value.code + '">' + value.name + '</option>')
                    })

                }

            })
        }
    </script>

@endsection