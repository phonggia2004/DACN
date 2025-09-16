$(document).ready(function(){
   let sizes = JSON.parse(jQuery('#data-size').attr('data-sizes'))
   let color = $('#data-color').val()
   showSize(color, sizes);
   //lắng nghe sự thay đổi của màu sắc
   $(document).on('change', '#data-color', function(){
      //lấy cái id màu sắc thay đổi
      let color = $('#data-color').val()
      // gọi hàm showSize để hiển thị size và số lượng của size
      showSize(color, sizes);
   })

   // lắng nghe sự thay đổi của size
   $(document).on('change', '#data-size', function(){
      let sizes = JSON.parse(jQuery('#data-size').attr('data-sizes'))
      // lấy cái id kích thước vừa thay đổi
      let productSizeId = $('#data-size').val();
      let dataColor = $('#data-color').val()
      // duyệt qua mảng kích thước và hiển thị số lượng của kích thước đó
      sizes.forEach(element => {
         if (element.product_color_id == dataColor && element.product_size_id == productSizeId) {
            $('#quantity_remain').text(element.quantity)
         }
      });
   })

   // khi dùng chọn sao thì tô màu
   $(document).on('click', '.star', function(){
         $('.rating label .fa-star').css({
            "color": "#b1b1b1",
         })
         let star = $(this).attr('id');
         for (let i = 1; i <= star.split('star')[1]; i++){
            $(`#icon-star${i} i`).css({
               "color": "#F5A623",
            });
         }
   })
 })

 function showSize(color, sizes)
 {
   let option = '';
   sizes.forEach(element => {
    if (element.product_color_id == color) {
       option += `
          <option value='${element.product_size_id}'>${element.size_name}</option>
       `
    }
   });
   $('#data-size').html(option)
   showQuantity(sizes);
}

function showQuantity(sizes)
{
   let size = $('#data-size').val()
   sizes.forEach(element => {
      if (element.product_size_id == size) {
         $('#quantity_remain').text(element.quantity)
      }
     });
}
// XỬ LÝ ĐÁNH GIÁ SẢN PHẨM
(function () {
  const ratingGroup = document.getElementById('ratingGroup');
  const reviewBox   = document.getElementById('reviewBox');
  const submitBtn   = document.getElementById('submitBtn');
  const contentBox  = document.getElementById('content');

  if (!ratingGroup) return;

  // Helper: tô vàng N sao đầu
  function paintStars(n){
    for(let i=1;i<=5;i++){
      const lbl = document.getElementById('icon-star'+i);
      if (!lbl) continue;
      lbl.classList.toggle('active', i <= n);
    }
  }

  // Khi click vào label sao → radio tương ứng sẽ check (nhờ for="starX")
  ratingGroup.addEventListener('click', function(e){
    const lbl = e.target.closest('label[id^="icon-star"]');
    if (!lbl) return;
    const n = Number(lbl.id.replace('icon-star','')) || 0;

    paintStars(n);
    reviewBox?.classList.remove('hidden');
    if (submitBtn) submitBtn.disabled = false;

    // focus vào textarea cho mượt
    setTimeout(()=> contentBox && contentBox.focus(), 0);
  });

  // Hover: highlight tạm
  ratingGroup.addEventListener('mouseover', function(e){
    const lbl = e.target.closest('label[id^="icon-star"]');
    if (!lbl) return;
    const n = Number(lbl.id.replace('icon-star','')) || 0;
    paintStars(n);
  });

  // Rời chuột: giữ mức đã chọn
  ratingGroup.addEventListener('mouseleave', function(){
    const checked = document.querySelector('.rating input.star:checked');
    paintStars(checked ? Number(checked.value) : 0);
  });

  // Khi load lại do validate fail: giữ trạng thái
  const checked = document.querySelector('.rating input.star:checked');
  if (checked) {
    paintStars(Number(checked.value));
    reviewBox?.classList.remove('hidden');
    if (submitBtn) submitBtn.disabled = false;
  } else {
    paintStars(0);
  }
})();

(function($){
  $(document).on('click', '#gallery_01 a', function(e){
    e.preventDefault(); e.stopPropagation();
    var $a = $(this), $main = $('#zoom_03');
    var img  = $a.data('image') || $a.find('img').attr('src');
    var zoom = $a.data('zoom-image') || img;

    // Nếu có elevateZoom thì xài API, không thì đổi src trực tiếp
    var ez = $main.data && $main.data('elevateZoom');
    if (ez && typeof ez.swaptheimage === 'function') {
      ez.swaptheimage(img, zoom);
    } else {
      $main.attr('src', img).attr('data-zoom-image', zoom);
    }

    // highlight thumb
    $('#gallery_01 a').removeClass('active');
    $a.addClass('active');
    return false;
  });
})(jQuery);