@include('admin.head')
@include('admin.sidenav')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h3 class="card-title">Category</h3>
        <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-brand" value="Add">
    </div>
    <div class="card-content collapse show">
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-primary white">
                    <tr>
                        <th>#</th>
                        <th>Brand</th>
                        <th>Description</th>
                        <th>Country Of Orgin</th>
                        <th>Logo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Brand</th>
                        <th>Description</th>
                        <th>Country Of Orgin</th>
                        <th>Logo</th>
                        <th>Action</th>
                    </tr>  
                </tfoot>
            </table>
        </div>
    </div>
</div>
@include('admin.modal')
@include('admin.footer')
<script>
    $('#add-brand').submit(function(event){
        event.preventDefault();
        let formValues = new FormData(this);
        $.ajax({
            url:'brandController',
            type: 'POST',
            data: formValues,
            cache:false,
            processData: false,
            contentType: false,
            success:(response)=>{
                reUseAbleSweetAlert('Sucess',response.message,'success','btn btn-primary')
                $('#new-brand').modal('hide')
                $('#tbody > tr').remove()
                brnadDataDisplay()
            }

        })
    })
    let countery = ()=>{
        $.ajax({
            url:'countrysController',
            type: "get",
            success:(response)=>{
                $.each(response,function(kay,value){
                    var html = `<option value="${value.id}">${value.name}</option>`;
                    $('#counteroforgin,#ediit-counteroforgin').append(html)
                })
            }
        })
    }
    countery()
    let brnadDataDisplay = ()=>{
        $.ajax({
            url:'brandController',
            type: "get",
            success:(response)=>{
                $.each(response,function(kay,value){
                    let html = `<tr>
                            <td>${kay + 1}</td>
                            <td>${value.BrandName}</td>
                            <td>${value.Description}</td>
                            <td>${value.country[0].name}</td>
                            <td><img style="width:50px;" class="img-fluid" src="{{url('${value.Logo}')}}"></td>
                            <td>
                                <button type="button" data-toggle="modal" onclick="brandEdit(${value.id})" data-target="#edit-brand" class="btn btn-warning">Edit</button>
                                <button type="button" onclick="brandDelete(${value.id})" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>`
                        $('#tbody').append(html)
                })
            }
        })
    }
    brnadDataDisplay()
    let glob = null;
let brandEdit = (id)=>{
    glob = id
    $.ajax({
        url:'brandController/'+id+'/edit',
        type: 'get',
        success:(response)=>{
            $('#edit_brand').val(response[0].BrandName);
            $('#ediit-counteroforgin').val(response[0].CountryOfOrigin);
            $('#edit-descriotion').val(response[0].Description);
            $('#images-name').html(response[0].Logo);
        }
    })
}
$('#form_edtit-brand').submit(function(event){
    event.preventDefault()
    let oldImage = $('#images-name').html()
    let editForm = new FormData(this);
    editForm.append('oldImage',oldImage);
    $.ajax({
        url:'brandController/'+glob,
        type: "POST",
        data:editForm,
        processData:false,
        contentType:false,
        cache:false,
        success:(response)=>{
            reUseAbleSweetAlert('Sucess',response.message,'success','btn btn-primary')
                $('#edit-brand').modal('hide')
                $('#tbody > tr').remove()
                brnadDataDisplay();
        }
    })
})
let brandDelete = (id)=>{
    Swal.fire({
      title: 'Are you sure?',
      text: "You want to delete a Product!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonClass: 'btn btn-warning',
      cancelButtonClass: 'btn btn-primary ml-1',
      buttonsStyling: false,
    }).then(function(result){
        if(result.value){
            $.ajax({
                url: 'brandController/'+id,
                type:'DELETE',
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (response)=>{
                    $('#tbody > tr').remove()
                brnadDataDisplay()       
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
</script>