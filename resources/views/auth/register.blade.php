@extends('layouts.layout')
@section('main')
    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <div class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="/">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span>Account Page</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="login__section section--padding">
            <div class="container">
<div class="col">
    <div class="account__login register">
        <div class="account__login--header mb-25">
            <h2 class="account__login--header__title mb-15">Create an Account</h2>
            <p class="account__login--header__desc">Register here if you are a new customer</p>
        </div>
        <form method="post" action='{{route('register')}}'>
            @csrf
            <div class="account__login--inner">
                <label>
                    <input name="name" class="account__login--input" placeholder="Username" type="text">
                </label>
                <label>
                    <input name="email" class="account__login--input" placeholder="Email Addres" type="email">
                </label>
                <label>
                    <input name="password" class="account__login--input" placeholder="Password" type="password">
                </label>
                <label>
                    <input name="password_confirmation" class="account__login--input" placeholder="Confirm Password" type="password">
                </label>
                <button class="account__login--btn primary__btn mb-10" type="submit">Submit & Register</button>
                <div class="account__login--remember position__relative">
                    <input class="checkout__checkbox--input" id="check2" type="checkbox">
                    <span class="checkout__checkbox--checkmark"></span>
                    <label class="checkout__checkbox--label login__remember--label" for="check2">
                        I have read and agree to the terms & conditions</label>
                </div>
            </div>
        </form>
    </div>
</div>
            </div>
        </div>
        <section class="feature__section section--padding pt-0">
            <div class="container">
                <div class="feature__inner d-flex justify-content-between">
                    <div class="feature__items d-flex align-items-center">
                        <div class="feature__icon">
                            <img src="/img/other/feature1.webp" alt="img">
                        </div>
                        <div class="feature__content">
                            <h2 class="feature__content--title h3">Free Shipping</h2>
                            <p class="feature__content--desc">Free shipping over $100</p>
                        </div>
                    </div>
                    <div class="feature__items d-flex align-items-center">
                        <div class="feature__icon ">
                            <img src="/img/other/feature2.webp" alt="img">
                        </div>
                        <div class="feature__content">
                            <h2 class="feature__content--title h3">Support 24/7</h2>
                            <p class="feature__content--desc">Contact us 24 hours a day</p>
                        </div>
                    </div>
                    <div class="feature__items d-flex align-items-center">
                        <div class="feature__icon">
                            <img src="/img/other/feature3.webp" alt="img">
                        </div>
                        <div class="feature__content">
                            <h2 class="feature__content--title h3">100% Money Back</h2>
                            <p class="feature__content--desc">You have 30 days to Return</p>
                        </div>
                    </div>
                    <div class="feature__items d-flex align-items-center">
                        <div class="feature__icon">
                            <img src="/img/other/feature4.webp" alt="img">
                        </div>
                        <div class="feature__content">
                            <h2 class="feature__content--title h3">Payment Secure</h2>
                            <p class="feature__content--desc">We ensure secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
