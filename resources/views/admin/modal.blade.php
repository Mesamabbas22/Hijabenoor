<div class="modal fade text-left" id="edit-product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Basic Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body edit-product">
                <form id="product-edit-form" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product</label>
                                <input type="text" name="product" class="form-control" id="edtt-product">        
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="projectinput2">Category</label>
                                <select class="form-control edit-category select-category" id="" name="category"><option value="" disabled selected>--Category</option></select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control" id="edit-price">        
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="projectinput2">Wharehoure Price</label>
                                <input type="text" name="warehouse" class="form-control" id="edit-wahehouse">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Brand</label>
                                <input type="text" name="Brand" class="form-control" id="edit-brand">        
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="projectinput2">Stock</label>
                                <input type="text" name="stock" class="form-control" id="edit-stock">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                      <input type="file" name="editImage[]" multiple class="custom-file-input" id="editFile" aria-describedby="inputGroupFileAddon01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                    <div class="image-container border border d-flex justify-content-between">
                                    </div>
                                 </div>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="projectinput2">Description</label>
                                {{-- <input type="text" name="Description" class="form-control" id=""> --}}
                                <textarea id="edit-description" name="description" cols="30" class="form-control" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">     
                            <div class="form-group">
                                <label for="donationinput1">Status</label>
                                <select name="Status" class="form-control square"  id="edit-status">
                                    <option disabled selected>--Status--</option>
                                    <option value="0">Deactive</option>
                                    <option value="1">Actice</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6"></div>
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

<div class="modal fade text-left" id="view-product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Basic Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body single-product">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="loader-wrapper loaders" style="display: none">
                                        <div class="loader-container">
                                            <div class="line-spin-fade-loader loader-black">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="carousel-keyboard" class="carousel carousel-container  slide" style="display: none" data-ride="carousel" data-keyboard="false">
                                        <ol class="carousel-indicators">
                                        </ol>
                                        <div class="carousel-inner custom" role="listbox">
                                            
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-keyboard" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-keyboard" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-2">
                        <form>
                            <label for="">Product</label>
                            <input type="text" name="" value="Vivo" class="form-control" readonly id="Product">

                            <label for="">Category</label>
                            <input type="text" name="" value="Vivo" class="form-control" readonly id="Category">

                            <label for="">Price</label>
                            <input type="text" name="" value="20,200.00" class="form-control" readonly id="Price">

                            <label for="">Wharehoure Price</label>
                            <input type="text" name="" value="20,000.00" class="form-control" readonly id="Wharehoure">

                            <label for="">Brand Name</label>
                            <input type="text" name="" value="Samsund" class="form-control" readonly id="Brand">

                            <label for="">Stock</label>
                            <input type="text" name="" value="105" class="form-control" readonly id="Stock">

                            <label for="">Description</label>
                            <textarea name="" style="resize: none;" class="form-control" readonly id="Description" cols="30" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa excepturi tenetur beatae vel accusamus sequi eligendi recusandae, numquam fuga nostrum qui id eaque dicta doloremque porro voluptates, debitis voluptate fugit?</textarea>
                        </form>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                    </button>
                </form>
                </div>
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

<div class="modal fade text-left" id="product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" id="productFrom" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="projectinput1">Add Product</label>
                                    <input type="text" id="projectinput1" class="form-control" placeholder="Product Name" name="Product">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="projectinput2">Add Category</label>
                                    <select class="form-control select-category" id="" name="category"><option value="" disabled selected>--Category</option></select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="projectinput3">Add Price</label>
                                    <input type="text" id="projectinput3" class="form-control" placeholder="Price" name="Price">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="projectinput4">Add WareHoues Price</label>
                                    <input type="text" id="projectinput4" class="form-control" placeholder="WareHoues Price" name="WareHoues">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="companyName">Add Description</label>
                            <input type="text" id="companyName" class="form-control" placeholder="Description" name="Description">
                        </div>

                        <div class="form-group">
                            <label for="companyName">Add Product Brand</label>
                            <input type="text" id="companyName" class="form-control" placeholder="Product Brand" name="Product">
                        </div>

                        <div class="form-group">
                            <label>Images Uplaod</label>
                            <br>
                            <label id="projectinput7" class="file center-block">
                                <input type="file" class="form-control" name="image[]" multiple id="file">
                                <span class="file-custom"></span>
                            </label>

                            <div class="wrapper d-flex">
                                <div class="img px-1 ml-1 border border-danger"><a class="media-right" href="#">
                                    <img src="https://getuikit.com/v2/docs/images/placeholder_600x400.svg" alt="Generic placeholder image" height="64" width="64">
                                    </a>
                                </div>
                                <div class="img px-1 ml-1 border border-danger"><a class="media-right" href="#">
                                    <img src="https://getuikit.com/v2/docs/images/placeholder_600x400.svg" alt="Generic placeholder image" height="64" width="64">
                                    </a>
                                </div>

                                <div class="img px-1 ml-1 border border-danger"><a class="media-right" href="#">
                                    <img src="https://getuikit.com/v2/docs/images/placeholder_600x400.svg" alt="Generic placeholder image" height="64" width="64">
                                    </a>
                                </div>

                                <div class="img px-1 ml-1 border border-danger"><a class="media-right" href="#">
                                    <img src="https://getuikit.com/v2/docs/images/placeholder_600x400.svg" alt="Generic placeholder image" height="64" width="64">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="projectinput2">Status</label>
                            <select name="Status" class="form-control" id=""><option value="">--Status</option>
                                <option value="0">Deactive</option>
                                <option value="1">Actice</option></select>
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
