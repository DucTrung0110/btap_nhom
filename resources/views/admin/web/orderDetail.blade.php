@extends('admin.layout.layout')
@section('main')

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
                                    <li class="breadcrumb-item active">Order Detail</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Order Detail</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Track Order</h4>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <h5 class="mt-0">Order ID:</h5>
                                            <p>#VL2537</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <h5 class="mt-0">Tracking ID:</h5>
                                            <p>894152012012</p>
                                        </div>
                                    </div>
                                </div>

                                <label for="status-select" class="me-2">Status : Shipped</label>
                                <div class="me-sm-3">
                                    <select class="form-select form-select my-1 my-lg-0" id="status-select">
                                        <option selected>Choose...</option>
                                        <option value="1">Shipped</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Cancel</option>
                                    </select>
                                </div>

                                    <div class="text-center mt-4">
                                       <button type="button" class="btn btn-success">Updated Status</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Items from Order #VL2537</h4>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-centered mb-0">
                                        <thead class="table-light">
                                        <tr>
                                            <th>Product name</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">Polo Navy blue T-shirt</th>
                                            <td><img src="assets/images/products/product-1.png" alt="product-img" height="32"></td>
                                            <td>1</td>
                                            <td>$39</td>
                                            <td>$39</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" colspan="4" class="text-end">Total :</th>
                                            <td><div class="fw-bold">$213</div></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <!-- end row -->

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
