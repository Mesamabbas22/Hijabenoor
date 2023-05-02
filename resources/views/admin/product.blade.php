@include('admin/head')
@include('admin/sidenav')
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                        <th>Price</th>
                        <th>Warehouse Price</th>
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
                        <th>Price</th>
                        <th>Warehouse Price</th>
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
    $(document).ready(function(){
        let file = $('#file');
        file.change(function(){   
    
        })
        
        $('#productFrom').submit(function(e){
            e.preventDefault();
            let = form = new FormData(this);
            if($('#file').get(0).files.length <= 4){
                $.ajax({
                url: 'productController',
                type:'POST',
                data: form,
                cache:false,
                contentType: false,
                processData: false,
                success:(response)=>{
                    console.log(response)
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
                    $('#select-category').append(html)
                })  
            }

        })
    }

    let productRander = ()=>{
        $.ajax({
            url:'productController',
            success: (response)=>{
                $.each(response,function(kay,value){
                    var html = `
                    <tr>
                        <td>${kay+1}</td>
                        <td>${value.product}</td>
                        <td>${value.category}</td>
                        <td>${value.price}</td>
                        <td>${value.ware_price}</td>
                        <td>5</td>
                        <td>
                            <button type="button" class="btn btn-success" onclick="singleProduct(${value.id})" data-toggle="modal" data-target="#view-product"><i class="la la-eye"></i></button>
                            <button type="button" class="btn btn-warning"><i class="la la-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="la la-trash-o"></i></button>
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
    })

    let singleProduct = (id)=>{
        $.ajax({
            url: 'productController/'+id,
            type: 'GET',
            beforeSend: ()=>{
                $('.loaders').show();
                $('.carousel-container').hide();
            },
            success: (response)=>{
                console.log(response)                          

                            let images = response.images;
                            var carousel = '';
                            $.each(images,function(kay,value){
                                 carousel += `
                                                <div class="carousel-item">
                                                    <img src="{{url('${value}')}}" class="img-fluid" alt="First slide">
                                                </div>
                                `;
                                // console.log(carousel)
                            })
                            $('.custom').html(carousel)
                            console.log(carousel)
                            $('.custom .carousel-item:first-child').addClass('active')
                            
                            // $('.single-product').html(html)

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
</script>