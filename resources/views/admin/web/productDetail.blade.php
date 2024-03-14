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
                                    <li class="breadcrumb-item active">Product Detail</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Product Detail</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-5">

                                        <div class="tab-content pt-0">
                                            <div class="tab-pane active show" id="product-1-item">
                                                <img src="assets/images/products/product-9.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                            </div>
                                            <div class="tab-pane" id="product-2-item">
                                                <img src="assets/images/products/product-10.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                            </div>
                                            <div class="tab-pane" id="product-3-item">
                                                <img src="assets/images/products/product-11.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                            </div>
                                            <div class="tab-pane" id="product-4-item">
                                                <img src="assets/images/products/product-12.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                            </div>
                                        </div>


                                    </div> <!-- end col -->
                                    <div class="col-lg-7">
                                        <div class="ps-xl-3 mt-3 mt-xl-0">
                                            <a href="#" class="text-primary">{{$product->products->name}}</a>
                                            <h4 class="mb-3">Jack & Jones Men's T-shirt (Blue)</h4>


                                            <h4 class="mb-4">Price : <span class="text-muted me-2"><del>$80 USD</del></span> <b>$64 USD</b></h4>
                                            @if($product->status == 1)
                                                <h4><span class="badge bg-soft-success text-success mb-4">Instock</span></h4>
                                            @elseif($product->status == 2)
                                                <h4><span class="badge bg-soft-danger text-danger mb-4">Out of Stock</span></h4>
                                            @endif
                                            <p class="text-muted mb-4">The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.</p>



                                            <div>
                                                <button type="button" class="btn btn-success waves-effect waves-light">
                                                    <span class="btn-label"><i class="mdi mdi-cart"></i></span>Edit
                                                </button>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->



                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->

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

