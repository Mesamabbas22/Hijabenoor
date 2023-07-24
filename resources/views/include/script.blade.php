<script>
  let productDisplay = ()=>{
    $.ajax({
        url:"admin/productController",
        type:'get',
        success:(response)=>{
            let shoppProductRander = $('#shop-product-rander');
            let html = ``;
            $.each(response,function(key,value){
              html = `<div class="col-lg-3 col-md-4">
                        <div class="tranding-card">
                          <img src="{{URL::asset('${value.images1}')}}" class="img-fluid" alt="">
                          <div class="card-item-row">
                            <div class="row">
                              <div class="col-4"><button type="button" class="cart-btn" data-id="${value.id}"><i class="fas fa-shopping-cart"></i></button></div>
                              <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
                              <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
                            </div>
                          </div>
                          <div class="tranding-product-name mt-2 text-center" onclick="productData(${value.id})">
                            <a href="admin/productController/${value.id}">${value.product}</a>
                            <div class="tranding-price">
                              <div class="sale price d-flex">
                                <span class="sale-price ml-auto">$98.00</span>
                                <span class="real-price mr-auto ml-1">${value.price}</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>`;
                      shoppProductRander.append(html);
                    })
                    cartBtn()
        }
    })
  }
productDisplay()
let cartBtn = ()=>{
  $('.cart-btn').click(function(){
    $.ajax({
      url:"addtocart/"+$(this).data('id'),
      type:'get',
      success:(response)=>{
        $('.cart-label').html(Object.keys(response).length)
        if(Object.keys(response).length > 0) {$('.cart-label').show()}
      }
    })
  })
}
$('.input-group .input-group-btn').click(function(){
        let id = $($(this)[0].parentElement).data('id');
        let values = $(this).siblings('input').val();
        $.ajax({
          url: 'updatetocart',
          type: 'patch',
          data: {
            "Id":id,
            "value":values,
            "_token": '{{ csrf_token() }}',
          },
          success:(response)=>{
            console.loh(response)
          }
        })
    })

    $('.product-action > button').click(function(){
      $.ajax({
        url: 'deletecart',
        type:'delete',
        data: {
                id: $(this).data('id'),
                "_token": '{{ csrf_token() }}'
              
              },
        success: (response)=>{
          $($(this)[0].parentElement.parentElement.parentElement).remove()
          let count = $('.cart-label').text();
          $('.cart-label').html(Object.keys(response).length)
          if(Object.keys(response).length == 0) {$('.cart-label').hide()}
        }
      })
    })
// $('.product-data').click(function(){
//   alert('done')
// })
// let productData = (id)=>{
//   $.ajax({
//     url:'admin/productController/'+id,
//     success: (response)=>{
//       window.location = 'product?data='+encodeURIComponent(response);
//     }
//   })
// }
$.fn.raty.defaults.path = '{{URL::asset("admin/app-assets/images/raty/")}}';

$('.ratings').raty({
    readOnly: true,
    score: 2.3551136363636362
});

// Star Review
$('#customer-review').raty({
	half : true,
  click: function(score){
    console.log(score)
  }
});

$(".touchspin").TouchSpin({ min: 1, max: 10});

$('#ratting-form').submit(function(event){
  event.preventDefault();
  let form = new FormData(this);
  $.ajax({
    url: '/admin/customerReviews',
    type: 'POST',
    data: form,
    cache: false,
    contentType: false,
    processData: false,
    success: (response)=>{
      this.reset()
    }
  })
})

let countery = ()=>{
        $.ajax({
            url:'admin/countrysController',
            type: "get",
            success:(response)=>{
                $.each(response,function(kay,value){
                    var html = `<option value="${value.id}">${value.name}</option>`;
                    $('.country').append(html)
                })
            }
        })
    }
    countery()
</script>
