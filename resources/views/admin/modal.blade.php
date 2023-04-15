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
                <form id="form-category" class="form">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label for="donationinput1">Category Name</label>
                            <input type="text" name="category" id="donationinput1" class="form-control square" placeholder="Category Name" name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="donationinput1">Status</label>
                            <select name="Status" class="form-control square"  id="">
                                <option disabled selected>--Status--</option>
                                <option value="0">Deactive</option>
                                <option value="1">Actice</option>
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


<div class="modal fade text-left" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Basic Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="edit-category" class="form">
                    @method('put')
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label for="donationinput1">Category Name</label>
                            <input type="text" name="category" id="editName" class="form-control square" placeholder="Category Name" name="fullname">
                            <input type="text" name="id" id="id" hidden  class="form-control square" placeholder="" name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="donationinput1">Status</label>
                            <select name="Status" class="form-control square"  id="editStatus">
                                <option disabled selected>--Status--</option>
                                <option value="0">Deactive</option>
                                <option value="1">Actice</option>
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