@extends('layouts.site')
@section('content')
<div class="container">
    <div class="row">
        <div class="chitiet col-md-5">
            <span style="margin-bottom: 10px;  display: block;margin-top: 20px;">
                <img height="400" width="400" src="{{ asset('assets/images/ao1.jpeg') }}" alt="Áo">
            </span>

        </div>
        <div class="col-md-7 py-5">
            <h1>Áo thun nam nữ</h1>
            <p>Tình trạng: còn hàng</p>
            <p>500.000đ</p>
            <span style="margin-bottom: 10px;  display: block;margin-top: 20px;">Size: 
            
            <button class="button px-3" ><label for="size-s">S</label></button>
        
            <button class="button px-3" ><label for="size-m">M</label></button>

            <button class="button px-3" ><label for="size-l">L</label></button>
        </span>
        
        <div class="soluong">
            <span style="margin-bottom: 10px;  display: block;margin-top: 20px;">Số lượng: 
            <button class="button decrement " onclick="decrement()">-</button>
            <button id="starCount" >0</button>
            <button class="button increment" onclick="increment()">+</button>
            </span>
        </div>
<script>
var starCount = 0; // Khởi tạo số lượng sao

function updateStarCount() {
document.getElementById("starCount").innerText = starCount;
}

function increment() {
    if (starCount < 100) 
    {
        starCount++;
        updateStarCount();
    }
}

function decrement() {
    if (starCount > 0) 
    {
        starCount--;
        updateStarCount();
    }
}

</script>
        <div class="themgio py-3">						
            <button type="submit" class="btn btn-success px-4" >Thêm vào giỏ</button>
            <button type="submit" class="btn btn-danger px-4" >Mua ngay</button>
        </div>		
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <h5>Mô tả sản phẩm</h5>
        <hr>
        <p>Set đồ áo sơ mi mix chân váy jeans rất thích hợp với các bạn trẻ yêu thích phong cách phóng khoáng và cá tính. Những chiếc áo sơ mi form rộng sẽ giúp các bạn trẻ trở nên trẻ trung và năng động hơn.</p>
        <p>Một chiếc áo sơ mi trắng kết hợp với chân váy jeans đen hoặc kaki đen, be, nâu,… quả thực là một gợi ý không tồi đúng không nhỉ? Các bạn trẻ đã “học lỏm” bí kíp này của những tín đồ mê thời trang để khẳng định phong cách riêng của bản thân và đem đến sự đa dạng cho tủ quần áo.</p>
        <p>Với lợi thế hack chiều cao hiệu quả, xu hướng boxy fit với set đồ áo sơ mi và váy jeans ngày càng được ưa chuộng. Đối với các bạn nữ, để tăng thêm phần trang nhã và tinh tế, có thể kết hợp với boot cao hoặc giày trắng nhé! </p>
        <p>Tuy xuất hiện trên thị trường thời trang chưa lâu nhưng trong thời gian gần đây, boxy fit đã được áp dụng vào nhiều dạng áo. Dù vậy, khi diện đồ kiểu boxy fit, các bạn cần lưu ý một số vấn đề như sau:</p>
        <ul>
            <li> Trên thực tế, boxy fit khá khó khăn khi áp dụng với những người có thân hình quá cỡ. Tuy đa số mẫu áo boxy fit đều có kích cỡ rộng rãi, thoải mái nhưng với những người có số cân nặng quá lớn nên lựa chọn áo kỹ hơn.</li>
            <li>Đối với các bạn nam khi lựa chọn áo form boxy fit phải lưu ý vừa theo vóc dáng, đừng chọn quá rộng nếu thân hình các bạn quá gầy dễ dẫn đến mất cân đối.</li>
            <li>Khi lựa chọn những trang phục có màu chói phối với nhau, các bạn phải thật sự tinh tế và cẩn trọng. Người thích phong cách sáng tạo có thể nghĩ đến việc phối sắc tím với vàng, xanh với hồng. Tuy nhiên, đừng nghĩ đến việc đi cùng một đôi giày màu nóng như đỏ hoặc cam vì nó sẽ lòe loẹt và rất buồn cười. Thay vào đó, một đôi giày trắng hoặc đen vừa chân lại là sự lựa chọn hoàn hảo nhất.</li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <span style="margin-bottom: 10px;  display: block;margin-top: 20px;"><h2>Sản phẩm liên quan</h2></span>
            <div class="wrapper">
                <img src="{{ asset('assets/images/ao1.jpeg') }}" alt="" height="150px" width="150px">
                <p>Ao thun nam nu</p>
                <p>350.000đ</p>
            </div>
            <div class="wrapper">
                <img src="{{ asset('assets/images/ao1.jpeg') }}" alt="" height="150px" width="150px">
                <p>Ao thun nam nu</p>
                <p>350.000đ</p>
            </div>
            <div class="wrapper">
                <img src="{{ asset('assets/images/ao1.jpeg') }}" alt="" height="150px" width="150px">
                <p>Ao thun nam nu</p>
                <p>350.000đ</p>
            </div>
            <div class="wrapper">
                <img src="{{ asset('assets/images/ao1.jpeg') }}" alt="" height="150px" width="150px">
                <p>Ao thun nam nu</p>
                <p>350.000đ</p>
            </div>
            <div class="wrapper">
                <img src="{{ asset('assets/images/ao1.jpeg') }}" alt="" height="150px" width="150px">
                <p>Ao thun nam nu</p>
                <p>350.000đ</p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title','Chi tiết sản phẩm')
@section('header')
    <link rel="stylesheet" href="{{ asset('home.css') }}">
@endsection
   

    

