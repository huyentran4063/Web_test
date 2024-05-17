<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layoutsite.css')}}">

    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js')}}"></script>
</head>
<body>
    <header class="section_header bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-3 py-2">
                    <a href="index.html">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" width="150px" height="70px">
                    </a>
                </div>
                <div class="col-md-6 py-2">
                    <nav class="navbar navbar-expand-lg bg-white d-left ">
                        <div class="container-fluid">
                          <a class="navbar-brand d-none" href="#">Navbar</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/TranHuyenTran_CCQ2211J/public">Trang Chủ</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Sale</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Tất Cả Sản Phẩm
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Giày dép</a></li>
                                  <li><a class="dropdown-item" href="#">Quần Áo</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Phụ Kiện</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="lien-he">Liên hệ</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
                <div class="col-md-3 py-4 ">
                    <div class="nav justify-content-end">
                        <li class="nav-item px-2">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </li>
                        <li class="nav-item px-2">
                            <i class="fa-regular fa-user"></i>
                        </li>
                        <li class="nav-item px-2 position-relative">
                            <i class="fa-regular fa-heart"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                0
                            <span class="visually-hidden">unread messages</span>
                            </span>
                        </li>
                        <li class="nav-item px-2">
                            <i class="fa-regular fa-bell"></i>
                        </li>
                        <li class="nav-item px-2">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </li>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <main>
        @yield('content')
    </main>
    <footer class="section_footer bg-dark text-white pt-4 ">
        <div class="container">
            <div class="row py-4">
                <div class="col-md-4">
                    <h4>THÔNG TIN</h4>
                    <p>Chúng tôi luôn trân trọng và mong đợi nhận được mọi ý kiến đóng góp từ khách hàng để có thể nâng cấp trải nghiệm dịch vụ và sản phẩm tốt hơn nữa.</p>
                        <p><i class="fa-solid fa-location-dot px-2"></i>70 Lữ Gia, Phường 15, Quận 11, TP. HCM</p>
                        <p><i class="fa-solid fa-phone-volume px-2"></i>1900 6750</p>
                        <p><i class="fa-regular fa-paper-plane px-2"></i>support@sapo.vn</p>  
                </div>
                <div class="col-md">
                    <h4>CHÍNH SÁCH</h4>
                    <p>Chính sách thành viên</p>
                    <p>Chính sách vận chuyển</p>
                    <p>Chăm sóc khách hàng</p>
                    <p>Phương thức thanh toán</p>
                    <p>Chính sách đổi trả / bảo hành</p>
                </div>
                <div class="col-md">
                    <h4>HƯỚNG DẪN</h4>
                    <p>Denny Member</p>
                    <p>Mua hàng dễ dàng</p>
                    <p>Hợp tác nhượng quyền</p>
                    <p>Hướng dẫn mua hàng online</p>
                    <p>Hướng dẫn kiểm tra hạng thẻ thành viên</p>
                </div>
                <div class="col-md-3">
                    <h4>HÌNH THỨC THANH TOÁN</h4>
                    <div class="nav">
                        <li class="nav-item px-2"><img src="assets/images/tm.webp" alt="" width="80px"></li>
                        <li class="nav-item px-2"><img src="assets/images/ck.webp" alt="" width="80px"></li>
                        <li class="nav-item px-2"><img src="assets/images/atm.webp" alt="" width="80px"></li>
                    </div>
                    <span style="margin-bottom: 10px;  display: block;margin-top: 20px;"><h5>Folower chúng tôi:</h5></span>
                    <div class="nav">
                        <li class="nav-item px-2"><img src="assets/images/facebook.webp" alt="" width="50px"></li>
                        <li class="nav-item px-2"><img src="assets/images/youtube.webp" alt="" width="50px"></li>
                        <li class="nav-item px-2"><img src="assets/images/twitter.webp" alt="" width="50px"></li>
                        <li class="nav-item px-2"><img src="assets/images/instagram.webp" alt="" width="50px"></li>
                    </div>
                
                </div>
            </div>
            <hr class="m-0 p-0">
                <div class="row py-3 text-center">
                    <div class="col-12">
                        <p>Bản quyền thuộc về Sudes theme. Cung cấp bởi Sapo</p>
                    </div>
                </div>
            </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/layoutsite.js"></script>
    
</body>
</html>