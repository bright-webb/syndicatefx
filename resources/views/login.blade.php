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
                    <a href="/register" class="btn nav-link text-light size-14 weight-500 pe-0">Create acccount</a>
                </div>
            </header>
            <!-- ===================================
              START THE SPACE STICKY
            ==================================== -->
            <div class="space-sticky"></div>

    <section class="account-section padding-20">
        <div class="display-title">
            <span class="name_step" style="color: #eee">Step 1 of 2</span>
            <h1 class="text-light">Sign in</h1>
            <p style="color: #eee">Enter your credentials to continue</p>
        </div>

        <div class="dividar_or">

        </div>
        <div class="content__form margin-t-24">
            <form>
                <div class="form-group icon-left">
                    <label style="color: #eee">Email Address</label>
                    <div class="input_group">
                        <input type="email" class="form-control transparent" placeholder='e. g. "example@mail.com"'
                            required>
                        <div class="icon">
                            <i class="ri-mail-open-line"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn  btn-sm btn-sm-arrow bg-primary visited">
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
