@extends('layouts.client')
@section('content-client')
@vite(['resources/client/css/about.css'])
<!-- HERO -->
<section class="about-hero">
  <div class="overlay"></div>
  <div class="container text-center content" data-aos="fade-up">
    <h1 class="title">Giới thiệu về <span>MUSCLE STORE</span></h1>
    <p class="subtitle">
      Trang phục & phụ kiện gym hiện đại, chất lượng cao – đồng hành cùng bạn chinh phục mọi giới hạn 💪🔥
    </p>
    <a href="#about-detail" class="btn-discover" data-aos="zoom-in" data-aos-delay="300">Khám phá ngay</a>
  </div>
</section>

<!-- ABOUT DETAIL -->
<section id="about-detail" class="about-detail py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4" data-aos="fade-right">
        <img src="{{ asset('asset/client/images/About-us.png') }}" alt="About Us"
             class="img-fluid rounded shadow-lg">
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <h2 class="section-title">Về chúng tôi</h2>
        <p>
          <strong>MUSCLE STORE</strong> không chỉ là một cửa hàng đồ tập gym – chúng tôi là nơi khởi nguồn
          của sự tự tin và sức mạnh.
        </p>
        <p>
          Với mong muốn đồng hành cùng bạn trên hành trình fitness, chúng tôi mang đến những sản phẩm
          <b>chất lượng cao, bền bỉ, thoải mái</b> và luôn tôn lên phong cách riêng của bạn.
        </p>
        <p>
          Hãy để chúng tôi cùng bạn tạo nên những <b>bước tiến vượt trội</b> trên con đường rèn luyện thể chất và tinh thần!
        </p>
        <a href="#shop" class="btn-action" data-aos="zoom-in" data-aos-delay="200">Mua sắm ngay</a>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="about-stats py-5">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-4 stat-box" data-aos="flip-up" data-aos-delay="100">
        <h3 class="counter">5</h3>
        <p>Năm kinh nghiệm</p>
      </div>
      <div class="col-md-4 stat-box" data-aos="flip-up" data-aos-delay="300">
        <h3 class="counter">10000</h3>
        <p>Khách hàng tin tưởng</p>
      </div>
      <div class="col-md-4 stat-box" data-aos="flip-up" data-aos-delay="500">
        <h3 class="counter">500</h3>
        <p>Sản phẩm chất lượng</p>
      </div>
    </div>
  </div>
</section>

<!-- PHILOSOPHY -->
<section class="about-philosophy py-5">
  <div class="container text-center" data-aos="fade-up">
    <h2 class="section-title">Triết lý của chúng tôi</h2>
    <p class="mt-3">
      Chúng tôi tin rằng: <b>Chọn đúng trang phục, chọn đúng tinh thần</b>.  
      MUSCLE STORE không chỉ bán sản phẩm – chúng tôi truyền cảm hứng để bạn vượt qua giới hạn,  
      bứt phá mỗi ngày và sống khỏe mạnh, tự tin hơn.
    </p>
  </div>
</section>

@endsection
