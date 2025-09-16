@extends('layouts.client')
@section('content-client')

<div class="container_fullwidth">
  <div class="container">
    <div class="row">
      <form method="get">
        <div class="col-md-3">
          {{-- Danh mục --}}
          <div class="category leftbar">
            <h3 class="title">Danh Mục Sản Phẩm</h3>
            <ul>
              @foreach ($categories as $category)
                <li>
                  <input type="radio" id="cat-{{ $category->id }}" class="filter-input" 
                         value="{{ $category->slug }}" 
                         {{ ($categorySlug == $category->slug) ? 'checked' : '' }} 
                         name="category_slug">
                  <label class="filter-label" for="cat-{{ $category->id }}">
                    {{ $category->name }}
                  </label>
                </li>
              @endforeach
            </ul>
          </div>

          {{-- Thương hiệu --}}
          <div class="branch leftbar">
            <h3 class="title">Thương Hiệu</h3>
            <ul>
              <li>
                <input type="radio" id="brand-all" class="filter-input" value="" 
                       name="brand_id" {{ ($request->brand_id == '') ? 'checked' : '' }}>
                <label class="filter-label" for="brand-all">Tất cả</label>
              </li>
              @foreach ($brands as $brand)
                <li>
                  <input type="radio" id="brand-{{ $brand->id }}" class="filter-input" 
                         value="{{ $brand->id }}" 
                         {{ ($request->brand_id == $brand->id) ? 'checked' : '' }} 
                         name="brand_id">
                  <label class="filter-label" for="brand-{{ $brand->id }}">
                    {{ $brand->name }}
                  </label>
                </li>
              @endforeach
            </ul>
          </div>

          {{-- Khoảng giá --}}
          <div class="price-filter-box">
            <button type="submit" class="btn-filter">Lọc sản phẩm</button>
          </div>
        </div>

        {{-- Products --}}
        <div class="col-md-9">
          <div class="products-grid">
            <div class="row">
              @if (count($products) > 0)
                @foreach ($products as $product)
                  <div class="col-md-4 col-sm-6">
                    <div class="products">
                      <div class="thumbnail">
                        <a href="{{ route('user.products_detail', $product->id) }}">
                          <img src="{{ asset("asset/client/images/products/small/$product->img") }}" alt="Product">
                        </a>
                      </div>
                      <div class="productname">{{ $product->name }}</div>
                      <h4 class="price">{{ format_number_to_money($product->price_sell) }}</h4>
                      <div class="productname">
                        <x-avg-stars :number="$product->avg_rating" />
                        <span style="font-size: 14px;">Đã bán: {{ $product->sum }}</span>
                      </div>
                      <div class="button_group">
                        <a href="{{ route('user.products_detail', $product->id) }}" class="button add-cart">Xem Chi Tiết</a>
                      </div>
                    </div>
                  </div>
                @endforeach
              @else
                <h3 class="title">Không tìm thấy sản phẩm</h3>
              @endif
            </div>
          </div>

          {{-- Pagination --}}
          @if (count($products) > 0)
            <div class="text-center">
              <ul class="pagination">
                {{ $products->links('vendor.pagination.default') }}
              </ul>
            </div>
          @endif
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
