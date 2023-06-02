@php
    $url = url()->previous();
@endphp
@extends('layout.app')

@section('content')
  <!-- ===================================
              START THE HEADER
            ==================================== -->
            <header class="default heade-sticky bg-transparent header-light">
                <div class="un-title-page go-back">
                    <a href="{{$url}}" class="icon">
                        <i class="ri-arrow-drop-left-line"></i>
                    </a>
                    <h1></h1>
                </div>
                <div class="un-block-right">
                    <a href="/login" class="btn nav-link text-light size-14 weight-500 pe-0">Sign In</a>
                </div>
            </header>
            <!-- ===================================
              START THE SPACE STICKY
            ==================================== -->
            <div class="space-sticky"></div>
            <!-- ===================================
              START THE FORM
            ==================================== -->
            <section class="account-section padding-20">
                <div class="display-title">
                    <span class="name_step" style="color: #eee">Step 1 of 2</span>
                    <h1 class="text-light">Create account</h1>

                </div>
                <div class="content__form margin-t-40">
                    <form>
                        <div class="form-group icon-left">
                            <label style="color: #eee">First Name</label>
                            <div class="input_group">
                                <input type="text" class="form-control" placeholder='e. g. "John doe"' required>
                                <div class="icon">
                                    <i class="ri-user-3-line"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group icon-left">
                            <label style="color: #eee">Last Name</label>
                            <div class="input_group">
                                <input type="text" class="form-control" placeholder='e. g. "John doe"' required>
                                <div class="icon">
                                    <i class="ri-user-3-line"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group icon-left">
                            <label style="color: #eee">Email Address</label>
                            <div class="input_group">
                                <input type="email" class="form-control" placeholder='e. g. "example@mail.com"'
                                    required>
                                <div class="icon">
                                    <i class="ri-mail-open-line"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn  btn-sm btn-sm-arrow bg-primary" style="width: 100%">
                                <p>Continue</p>
                                <div class="ico">
                                    <i class="ri-arrow-drop-right-line"></i>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </section>
@endsection
