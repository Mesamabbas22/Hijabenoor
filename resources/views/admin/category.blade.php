@include('admin/head')
@include('admin/sidenav')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h3 class="card-title">Category</h3>
        <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#add" value="Add">
    </div>
    <div class="card-content collapse show">
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-primary white">
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Status</th>
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
    $('#form-category').submit(function(event){
        event.preventDefault();
        let form = new FormData(this);
        $.ajax({
                url: 'categorycontroller',    
                type: 'post',
                data: form,
                processData: false,
                contentType: false,
                success: (data)=>{
                    reUseAbleSweetAlert('Sucess',data.message,'success','btn btn-primary')
                    $('tbody > tr').remove();
                        categoryRander();
                        $('#add').modal('hide');
                },
                error: (error)=>{
                    reUseAbleSweetAlert(error.responseJSON.message,error.responseJSON.error,'error','btn btn-danger')
                }
            })
    })
    let categoryRander = ()=>{
        $.ajax({
            url: 'categorycontroller',
            success:(data)=>{
                $.each(data,function(kay,value){
                    var html = `
                    <tr>
                        <th scope="row">${kay+1}</th>
                        <td>${value.name}</td>
                        <td><span class="badge ${(value.status =='1')?'badge-success':'badge-danger'}">${(value.status =='1')? 'Active': 'Deactive'}</span></td>
                        <td>
                            <input type="button" class="btn btn-warning" data-toggle="modal" data-target="#Edit" onclick="categoryEdit(${value.id})" value="Edit">
                            <input type="button" class="btn btn-danger" onclick="categoryDelete(${value.id})" value="Delete">
                        </td>
                    </tr>
                    `
                    $('#tbody').append(html)
                })  
            }

        })
    }
    categoryRander();
    let categoryEdit = (id)=>{
        // console.log(id)

        $.ajax({
            url: 'categorycontroller/'+id+'/edit',
            type: 'get',
            success: (response)=>{
                $('#editName').val(response.name)
                $('#id').val(response.id)
                $('#editStatus option[value="'+ response.status +'"]').prop('selected',true)
            }

        })
    }

     $('#edit-category').submit(function(e){
        e.preventDefault()
        let form = new FormData(this);
        let id = $('#id').val()
        $.ajax({
            url: 'categorycontroller/'+id,
            type:'post',
            data:form,
            contentType:false,
            processData:false,
            success: (response)=>{
                    reUseAbleSweetAlert('Sucess',response.message,'success','btn btn-primary')
                    $('tbody > tr').remove();
                    categoryRander();
                    $('#Edit').modal('hide');
            },
            error: (error)=>{
                reUseAbleSweetAlert(error.responseJSON.message,error.responseJSON.error,'error','btn btn-danger')
            }
        })

     })   

     let categoryDelete = (id)=>{
        var token = $("meta[name='csrf-token']").attr("content");
        Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete a category!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Delete!',
        confirmButtonClass: 'btn btn-warning',
        cancelButtonClass: 'btn btn-info ml-1',
        buttonsStyling: false,
        }).then(function (result) {
            if (result.value) {
            Swal.fire({
            type: "success",
            title: 'Deleted!',
            text: 'Category deleted',
            confirmButtonClass: 'btn btn-success',
            })
            $.ajax({
                    url: 'categorycontroller/'+id,
                    type: "DELETE",
                    data: {
                        '_token':token
                    },
                    success: (reponse)=>{
                        if(reponse.success){
                            $('tbody > tr').remove();
                            categoryRander();
                        }
                    },
                    error: (error)=>{
                        alert(error.responseJSON.error)
                    }
                })
        }
        })
            }
</script>