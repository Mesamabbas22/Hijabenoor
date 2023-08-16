@include('admin/head')
@include('admin/sidenav')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .image-container{
        width: 100%;
        height: 130px;
        padding: 3px
    }
    .image-item {
        width: 120px;
        height: 120px;
    }
    .image-item > img{
        aspect-ratio: 1/1; 
    }
    .image-item{
        position: relative;
    }
    .remove_icon{
        position: absolute;
        right: 0px;
        display: none;
        transition: linear 500ms;
    }

</style>
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h3 class="card-title">Category</h3>
        <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#product" value="Add">
    </div>
    <div class="card-content collapse show">
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-primary white">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>  
                </tfoot>
            </table>
        </div>
    </div>
</div>
@include('admin/modal')
@include('admin/footer')
<script>


    // dropzone.emit(mockFile, 'https://i.tribune.com.pk/media/images/1692679-books-1524459622/1692679-books-1524459622.jpg');
        let file = $('#file');
        file.change(function(){   
    
        })
        
        $('#productFrom').submit(function(e){
            e.preventDefault();
            let form = new FormData(this);
            if($('#file').get(0).files.length <= 4){
                $.ajax({
                url: 'productController',
                type:'POST',
                data: form,
                cache:false,
                contentType: false,
                processData: false,
                success:(response)=>{
                    reUseAbleSweetAlert('Sucess',response.message,'success','btn btn-primary')
                    $('#tbody > tr').remove()
                    productRander()
                    $('#product').modal('hide')
                },
                error: (error)=>{
                    reUseAbleSweetAlert(error.responseJSON.message,error.responseJSON.error,'error','btn btn-danger')
                }
            })   
            }
        })

        let categoryRander = ()=>{
        $.ajax({
            url: 'categorycontroller',
            success:(data)=>{
                $.each(data,function(kay,value){
                    var html = `<option value="${value.id}">${value.name}</option>`
                    $('.select-category').append(html)
                })  
            }

        })
    }
    let brnadDataDisplay = ()=>{
        $.ajax({
            url:'brandController',
            type: "get",
            success:(response)=>{
                $.each(response,function(kay,value){
                    let html = `<option value="${value.id}">${value.BrandName}</option>`
                        $('#product-brand ,#edit-product-brand').append(html)
                })
            }
        })
    }
    brnadDataDisplay()
    let productRander = ()=>{
        $.ajax({
            url:'productController',
            success: (response)=>{
                $.each(response,function(kay,value){
                    var html = `
                    <tr>
                        <td>${kay+1}</td>
                        <td>${value.product}</td>
                        <td>${value.get_category[0].name}</td>
                        <td>${value.get_brand[0].BrandName}</td>
                        <td>${value.price}</td>
                        <td>${value.stock}</td>
                        <td>
                            <button type="button" class="btn btn-primary" onclick="singleProduct(${value.id})" data-toggle="modal" data-target="#rating-product"><i class="la la-smile-o"></i></button>
                            <button type="button" class="btn btn-success" onclick="singleProduct(${value.id})" data-toggle="modal" data-target="#view-product"><i class="la la-eye"></i></button>
                            <button type="button" class="btn btn-warning" onclick="editProduct(${value.id})" data-toggle="modal" data-target="#edit-product"><i class="la la-edit"></i></button>
                            <button type="button" class="btn btn-danger" onclick="deleteProduct(${value.id})"><i class="la la-trash-o"></i></button>
                        </td>
                    </tr>
                    `
                    $('#tbody').append(html)
                })

            },
            error: (error)=>{
                console.log(error)
            }

        })
    }
    productRander()
    categoryRander()
    let productId;
    let singleProduct = (id)=>{
        $.ajax({
            url: 'productController/'+id,
            type: 'GET',
            beforeSend: ()=>{
                $('.loaders').show();
                $('.carousel-container').hide();
            },
            success: (response)=>{
                            let images = response.images;
                            var carousel = '';
                            var nav = '';
                            $.each(images,function(kay,value){
                                if(value  !=null){
                                    carousel += `
                                                <div class="carousel-item">
                                                    <img src="{{url('${value}')}}" class="img-fluid" alt="First slide">
                                                </div>
                                `;

                                nav += `
                                <li data-target="#carousel-keyboard" data-slide-to="${kay}" class="navs"></li>
                                `;
                                }
                                // console.log(carousel)
                            })
                            $('#Product').val(response.product)
                            $('#Category').val(response.Category)
                            $('#Price').val(response.price)
                            $('#Wharehoure').val(response.ware_price)
                            $('#Brand').val(response.Brand)
                            $('#Stock').val(response.stock)
                            $('#Description').val(response.description)
                            $('.custom').html(carousel)
                            $('.carousel-indicators').html(nav)
                            $('.custom .carousel-item:first-child').addClass('active')
                            $('.carousel-indicators .navs:first-child').addClass('active')
                            
                            // $('.single-product').html(html)
                            $('#rating-product').on('hide.bs.modal',function(){
                                $('.rating-model').empty()  
                            })
                            $.each(response['reviews'],function(kay,value){
                                var color = ''
                                if(parseFloat(value['rating']) >= 3.50){
                                    color = 'bg-success'
                                }else if(parseFloat(value['rating']) >= 2.00){
                                    color ='bg-warning'
                                }
                                else{
                                    color = 'bg-danger'
                                } 
                                var name = ''
                                if(value['guest_name']!=null){
                                    name = value['guest_name']
                                }else{
                                    name = response['user'][0]['name']
                                }
                                var html = `<div class="card px-2 py-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="row">
                                                    <div class="color-of-review ${color}  my-auto ml-auto"></div>
                                                    <img alt="Generic placeholder image" class="my-auto media-object mx-2" src="{{URL::asset('admin/app-assets/images/portrait/small/avatar-s-1.png')}}" width="50" height="50" />
                                                    <p class="font-weight-bold my-auto mr-auto">${name}</p>
                                                </div>
                                        </div>
                                            <div class="col-2">
                                                <div class='ratings-value' data-rating="dummy"></div>
                                                <span class="m-auto admin-ratings${kay}">
                                                </span>
                                            </div>
                                            <div class="col-7">${value['comment']}</div>
                                        </div>
                                    </div>`;
                                    
                $('.rating-model').append(html)
                $('.admin-ratings'+kay).raty({
                        readOnly: true,
                        score: value['rating']
                    });
                            })

            },
            error: (error)=>{
                console.log(error)
            },
            complete: ()=>{
                $('.loaders').hide();   
                $('.carousel-container').show();   
            }
        })
    }
    let editProduct = (id)=>{
        $.ajax({
            url: 'productController/'+id+"/edit",
            type: "get",
            beforeSend:(before)=>{
                
            },
            success: (response)=>{
                $('#product-edit-form').attr('data-id',response.id)
                productId = response.id
                $('#edtt-product').val(response.product)
                $('.select-category').val(response.categoryId)
                $('#edit-price').val(response.price)
                $('#edit-wahehouse').val(response.ware_price)
                $('#edit-product-brand').val(response.Brand)
                $('#edit-stock').val(response.stock)
                $('#edit-description').val(response.description)
                $('#edit-status').val(response.status)
                let image = '';
                let = dataImages = response.images
                
                $.each(dataImages,function(index,images){
                    if(images !=null){
                        image += `      <div data-src="${images}" class="image-item rounded border border">
                                            <div class="remove_icon">
                                            <button type="button" class="btn btn-danger btn-sm rounded-circle remove-button">
                                                <i class="la la-close"></i>
                                            </button>
                                            </div>
                                            <img src="{{URL::asset('${images}')}}" alt="" class="img-fluid" srcset="">
                                            <input type="hidden" value="${images}" name="${index}" id="${index}">
                                        </div>
                                        `;
                    }
                })
                $('.image-container').html(image)
                $('#edit-product').on('hide.bs.modal',function(){
                    $('.image-container').empty()
                    $('#editFile').val('')
                })
                productImages()
                productRemove(dataImages)
            },
            error: (error)=>{
                console.log(error)
            }
        })
        let productImages = ()=>{
            $('.image-item').hover(
                function(){
                    $(this.children[0]).css('display','block')
                },
                function(){
                    $(this.children[0]).css('display','none')
                }

            )
            }
        let productRemove = (images)=>{
            $('.remove-button').click(function(){
                $(this.parentElement.parentElement).remove()
            })
        }
    }
$(
    $('#product-edit-form').submit(function(event){
        // let id = $(this).data('id');
        event.preventDefault();
        let productForm = new FormData(this);
        let imagesLength = $('#editFile').get(0).files.length + $('.image-item').length
        if(imagesLength <= 4 && imagesLength !=0 ){
            $.ajax({
            url: 'productController/'+productId,
            type:'post',
            processData: false,
            cache:false,
            contentType: false,
            data: productForm,
            success: (response)=>{
                reUseAbleSweetAlert('Sucess',response.message,'success','btn btn-primary')
                $('#edit-product').modal('hide')
                    $('#tbody > tr').remove()
                    productRander()

                },
                error: (error)=>{
                    reUseAbleSweetAlert(error.responseJSON.message,error.responseJSON.error,'error','btn btn-danger')
                }
            })
        }
        // if($('.image-item').length + )
    })
)
let deleteProduct = (id)=>{
    var token = $("meta[name='csrf-token']").attr("content");
    Swal.fire({
      title: 'Are you sure?',
      text: "You want to delete a Product!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonClass: 'btn btn-warning',
      cancelButtonClass: 'btn btn-primary ml-1',
      buttonsStyling: false,
    }).then(function (result) {
      if (result.value) {
            $.ajax({
            url: 'productController/'+id,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (response)=>{
                $('#tbody > tr').remove()
                productRander()       
                Swal.fire({
                type: "success",
                title: response.message,
                text: 'Product Deleted',
                confirmButtonClass: 'btn btn-success',
                })
            }

        })
      }
    })
}
$.fn.raty.defaults.path = '{{URL::asset("admin/app-assets/images/raty/")}}';

    
</script>