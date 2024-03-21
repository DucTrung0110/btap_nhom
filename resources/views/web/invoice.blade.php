@extends('layouts.layout')
@section('main')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="invoice-content">
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="invoice-logo">
                                        <img src="assets/img/logo/nav-log.webp" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info invoice-info2">
                                        <p class="invoice-details">
                                            <strong>Order:</strong> #{{$order->id}} <br>
                                                <strong>Issued:</strong> {{$order->date}}
                                        </p>
                                        <strong class="customer-text">Invoice To</strong>
                                        <p class="invoice-details">
                                            {{$order->user->name}} <br>
                                            {{$order->address}} <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="invoice-info">
                                        <strong class="customer-text">Payment Method</strong>
                                        <p class="invoice-details invoice-details-two">
                                            {{$order->payment_method}}<br>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-end">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{$order->product->name}}</td>
                                                <td class="text-center">1</td>
                                                <td class="text-end">${{$order->product->price}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 ms-auto">
                                    <div class="table-responsive">
                                        <table class="invoice-table-two table">
                                            <tbody>
                                            <tr>
                                                <th>Total Amount:</th>
                                                <td><span>${{$order->total}}</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
