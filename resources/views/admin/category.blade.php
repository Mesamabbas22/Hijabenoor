@include('admin/head')
@include('admin/sidenav')
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
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Computer</td>
                        <td>1</td>
                        <td>
                            <input type="button" class="btn btn-warning" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">
                        </td>
                    </tr>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>  
                    </tfoot>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade text-left" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Basic Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form">
                    <div class="form-body">
                        <div class="form-group">
                            <label for="donationinput1">Category Name</label>
                            <input type="text" id="donationinput1" class="form-control square" placeholder="Category Name" name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="donationinput1">Status</label>
                            <select name="" class="form-control square"  id="">
                                <option disabled selected>--Status--</option>
                                <option value="1">Deactive</option>
                                <option value="0">Actice</option>
                            </select>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="la la-check-square-o"></i> Save
                    </button>
                </form>
                </div>
        </div>
    </div>
</div>
@include('admin/footer')