@extends('layouts.site')
@section('content')
    <div class="layout-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-12">
                    <div class="infor">
                        <span style="margin-bottom: 10px;  display: block;margin-top: 20px;"><h2>Liên hệ với chúng tôi</h2></span>
                        <span class="content-form">
                            Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại với bạn sớm nhất có thể .
                        </span>
                    </div>
                        <div class="form-contact">
                        <form action="" method="post">
                            <div class="container">
                            <span style="margin-bottom: 10px;  display: block;margin-top: 20px;">
                            <input type="text" placeholder="Họ và tên" required><br>
                            <input type="email" placeholder="Email" required><br>
                            <input type="tel" placeholder="Số điện thoại"><br>
                            <textarea placeholder="Nội dung" rows="5" cols="67" required></textarea><br>
                            <button class="bg-success"type="submit">Gửi biểu mẫu</button>
                        </span>
                    </div>
                            </form>
                        </div>
                    

                </div>
                <div class="col-md-7 col-12">
                    <div id="contact_map" class="map">
                        <span style="margin-bottom: 20px;  display: block;margin-top: 20px;">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.904611732553!2d105.81388241542348!3d21.03650239288885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1946cc7e23%3A0x87ab3917166a0cd5!2zQ8O0bmcgdHkgY-G7lSBwaOG6p24gY8O0bmcgbmdo4buHIFNBUE8!5e0!3m2!1svi!2s!4v1555900531747!5m2!1svi!2s" height="500px" width="800px" ></iframe>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/layoutsite.js"></script>
@endsection
@section('title','Liên hệ')
@section('header')
    <link rel="stylesheet" href="{{ asset('home.css') }}">
@endsection