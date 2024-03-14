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
                                    <li class="breadcrumb-item active">Orders</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Orders</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-lg-8">
                                        <form class="d-flex flex-wrap align-items-center">
                                            <label for="inputPassword2" class="visually-hidden">Search</label>
                                            <div class="me-3">
                                                <input type="search" class="form-control my-1 my-lg-0" id="inputPassword2" placeholder="Search...">
                                            </div>
                                            <label for="status-select" class="me-2">Status</label>
                                            <div class="me-sm-3">
                                                <select class="form-select form-select my-1 my-lg-0" id="status-select">
                                                    <option selected>Choose...</option>
                                                    <option value="1">Paid</option>
                                                    <option value="2">Awaiting Authorization</option>
                                                    <option value="3">Payment failed</option>
                                                    <option value="4">Cash On Delivery</option>
                                                    <option value="5">Fulfilled</option>
                                                    <option value="6">Unfulfilled</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="text-lg-end">
                                            <button type="button" class="btn btn-danger waves-effect waves-light mb-2 me-2"><i class="mdi mdi-basket me-1"></i> Add New Order</button>
                                            <button type="button" class="btn btn-light waves-effect mb-2">Export</button>
                                        </div>
                                    </div><!-- end col-->
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead class="table-light">
                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Order ID</th>
                                            <th>Products</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Payment Method</th>
                                            <th>Order Status</th>
                                            <th style="width: 125px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td><a href="ecommerce-order-detail.html" class="text-body fw-bold">#UB9708</a> </td>
                                            <td>
                                                <a href="ecommerce-product-detail.html"><img src="assets/images/products/product-1.png" alt="product-img" height="32" /></a>
                                                <a href="ecommerce-product-detail.html"><img src="assets/images/products/product-2.png" alt="product-img" height="32" /></a>
                                            </td>
                                            <td>
                                                August 05 2018 <small class="text-muted">10:29 PM</small>
                                            </td>

                                            <td>
                                                $176.41
                                            </td>
                                            <td>
                                                Mastercard
                                            </td>
                                            <td>
                                                <h5><span class="badge bg-info">Shipped</span></h5>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck3">
                                                    <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td><a href="ecommerce-order-detail.html" class="text-body fw-bold">#UB9707</a> </td>
                                            <td>
                                                <a href="ecommerce-product-detail.html"><img src="assets/images/products/product-3.png" alt="product-img" height="32" /></a>
                                                <a href="ecommerce-product-detail.html"><img src="assets/images/products/product-4.png" alt="product-img" height="32" /></a>
                                                <a href="ecommerce-product-detail.html"><img src="assets/images/products/product-5.png" alt="product-img" height="32" /></a>
                                            </td>
                                            <td>August 04 2018 <small class="text-muted">08:18 AM</small></td>

                                            <td>
                                                $1,458.65
                                            </td>
                                            <td>
                                                Visa
                                            </td>
                                            <td>
                                                <h5><span class="badge bg-warning">Processing</span></h5>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck4">
                                                    <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td><a href="ecommerce-order-detail.html" class="text-body fw-bold">#UB9706</a> </td>
                                            <td>
                                                <a href="ecommerce-product-detail.html"><img src="assets/images/products/product-7.png" alt="product-img" height="32" /></a>
                                            </td>
                                            <td>August 04 2018 <small class="text-muted">10:29 PM</small></td>

                                            <td>
                                                $801.99
                                            </td>
                                            <td>
                                                Credit Card
                                            </td>
                                            <td>
                                                <h5><span class="badge bg-warning">Processing</span></h5>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>



                                        </tbody>
                                    </table>
                                </div>

                                <ul class="pagination pagination-rounded justify-content-end my-2">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
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