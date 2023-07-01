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
                          <div class="tranding-product-name mt-2 text-center">
                            <a href="#">${value.product}</a>
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
      }
    })
  })
}
$('.input-group .input-group-btn').click(function(){
        console.log($($(this)[0].parentElement).data('id'))
        console.log($(this).siblings('input').val())
    })
</script>
