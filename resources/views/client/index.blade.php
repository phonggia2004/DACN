@extends('layouts.client')
@section('content-client')
<link rel="stylesheet" href="{{ asset('resources/client/css/home.css') }}">
<div class="clearfix"></div>
<div class="swiper mySwiper">
  <div class="swiper-wrapper">

    <!-- Slide 1 -->
    <div class="swiper-slide slide-1">
      <div class="slide-content">
        <h1>MUSCLE STORE</h1>
        <p>💪 Chào mừng bạn đến với cửa hàng đồ tập gym – nơi cung cấp 
          <b>trang phục & phụ kiện tập luyện</b> chất lượng cao.</p>
        <p>✨ Tự tin – Phong cách – Sẵn sàng bứt phá trong từng buổi tập!</p>
        <a href="#shop" class="btn btn-warning btn-lg mt-3">Khám phá ngay</a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="swiper-slide slide-2">
      <div class="slide-content">
        <h1>MUSCLE STORE</h1>
        <p>🔥 Khám phá bộ sưu tập đa dạng: 
          <b>áo thun, quần short, giày & phụ kiện gym</b>.</p>
        <p>🏋️‍♂️ Sức khỏe và phong cách – chúng tôi đồng hành cùng bạn trên hành trình fitness.</p>
        <a href="#collection" class="btn btn-light btn-lg mt-3">Xem bộ sưu tập</a>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="swiper-slide slide-3">
      <div class="slide-content">
        <h1>MUSCLE STORE</h1>
        <p>⚡ Trang bị cho bạn sự <b>tự tin và phong cách</b> trong từng buổi tập luyện.</p>
        <p>🌟 Đột phá sức mạnh – Bền bỉ từng ngày!</p>
        <a href="#about" class="btn btn-outline-light btn-lg mt-3">Tìm hiểu thêm</a>
      </div>
    </div>

  </div>

  <!-- Pagination & Navigation -->
  <div class="swiper-pagination"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>


<div class="clearfix"></div>
<div class="container_fullwidth">
    <div class="container">
        <div class="hot-products">
            <h3 class="title">Sản Phẩm Bán Chạy</h3>
            <div class="control"></div>
            <ul>
                <li>
                <div class="row">
                    @foreach ($bellingProducts as $bellingProduct)
                    <div class="col-md-3 col-sm-6">
                        <div class="products">
                            <div class="offer-1">Bán Chạy</div>
                            <div class="thumbnail">
                                <a href="{{ route('user.products_detail', $bellingProduct->id) }}"><img src="{{ asset("asset/client/images/products/small/$bellingProduct->img") }}" alt="Product Name"></a>
                            </div>
                            <div class="productname" style="height: 42px;">{{ $bellingProduct->name }}</div>
                            <h4 class="price">{{ format_number_to_money($bellingProduct->price_sell) }} VNĐ</h4>
                            <div class="productname" style="padding-bottom: 10px; padding-top: unset;">
                                <x-avg-stars :number="$bellingProduct->avg_rating" />
                                <span style="font-size: 14px;">Đã bán: {{ $bellingProduct->sum }}</span>
                            </div>
                            <div class="button_group"><a href="{{ route('user.products_detail', $bellingProduct->id) }}" class="button add-cart" type="button">Xem Chi Tiết</a></div>
                        </div>
                    </div>
                    @endforeach
                </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="featured-products">
            <h3 class="title">Sản Phẩm Mới Nhất</h3>
            <div class="control"></div>
            <ul>
                <li>
                <div class="row">
                    @foreach ($newProducts as $newProduct)
                        <div class="col-md-3 col-sm-6">
                            <div class="products">
                                <div class="offer-2">Mới Nhất</div>
                                <div class="thumbnail"><a href="{{ route('user.products_detail', $newProduct->id) }}"><img src="{{ asset("asset/client/images/products/small/$newProduct->img") }}" alt="Product Name"></a></div>
                                <div class="productname" style="height: 42px;">{{ $newProduct->name }}</div>
                                <h4 class="price">{{ format_number_to_money($newProduct->price_sell) }} VNĐ</h4>
                                <div class="productname" style="padding-bottom: 10px; padding-top: unset;">
                                    <x-avg-stars :number="$newProduct->avg_rating" />
                                    <span style="font-size: 14px;">Đã bán: {{ $newProduct->sum }}</span>
                                </div>
                                <div class="button_group"><a href="{{ route('user.products_detail', $newProduct->id) }}" class="button add-cart" type="button">Xem Chi Tiết</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection