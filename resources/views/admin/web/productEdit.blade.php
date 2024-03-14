@extends('admin.layout.layout')
@section('main')
    <div class="content-page">



        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Edit Product</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Edit Product</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <form action="{{url("/admin/productUpdated",["product"=>$product->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Product Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" id="product-name" class="form-control" placeholder="e.g : Apple iMac">
                                    </div>



                                    <div class="mb-3">
                                        <label for="product-summary" class="form-label">Product Description</label>
                                        <textarea class="form-control" name="description" id="product-summary" rows="3" placeholder="Please enter summary"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="product-category" class="form-label">Categories <span class="text-danger">*</span></label>
                                        <select name="brand_id" class="form-control select2" id="product-category">
                                            @foreach($brand as $b)
                                                <option value="{{$b->id}}">{{$b->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="product-price">Price <span class="text-danger">*</span></label>
                                        <input type="number" name="price" class="form-control" id="product-price" placeholder="Enter amount">
                                    </div>

                                    <div class="mb-3">
                                        <label class="mb-2">Status <span class="text-danger">*</span></label>
                                        <br/>
                                        <div class="d-flex flex-wrap">
                                            <div class="form-check me-2">
                                                <input class="form-check-input" type="radio" name="status" value="1" id="inlineRadio1" checked>
                                                <label class="form-check-label" for="inlineRadio1">In stock</label>
                                            </div>
                                            <div class="form-check me-2">
                                                <input class="form-check-input" type="radio" name="status" value="2" id="inlineRadio2">
                                                <label class="form-check-label" for="inlineRadio2">Out of stock</label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div> <!-- end card -->
                        </div> <!-- end col -->

                        <div class="col-lg-6">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Images</h5>

                                    <div class="fallback">
                                        <input name="images" type="file" multiple />
                                    </div>

                                    <div class="dz-message needsclick">
                                        <i class="h1 text-muted dripicons-cloud-upload"></i>
                                        <h3>Drop files here or click to upload.</h3>
                                        <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                    <strong>not</strong> actually uploaded.)</span>
                                    </div>

                                    <!-- Preview -->
                                    <div class="dropzone-previews mt-3" id="file-previews"></div>
                                </div>
                            </div> <!-- end col-->



                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="text-center mb-3">
                                <button type="button" class="btn w-sm btn-light waves-effect">Cancel</button>
                                <button type="submit" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </form>

                <!-- file preview template -->
                <div class="d-none" id="uploadPreviewTemplate">
                    <div class="card mt-1 mb-0 shadow-none border">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                    <p class="mb-0" data-dz-size></p>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="#" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                        <i class="dripicons-cross"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div><script>document.write(new Date().getFullYear())</script> © Ubold - <a href="https://coderthemes.com/" target="_blank">Coderthemes.com</a></div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end footer-links">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

@endsection
