@extends('front.layout')

@section('styles')
    <style>
        iframe {
            width: 100%;
        }
    </style>
@section('content')

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Contact us</h2>
                        <p>Home<span>/<span>Contact us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- ================ contact section start ================= -->
<section class="contact-section section_padding">
<div class="container">
    <div class="row">
        <div class="col-12 text-center mb-5 ">
            {!! $settings->map !!}
        </div>
    </div>


  <div class="row">
    <div class="col-12">
      <h2 class="contact-title">Get in Touch</h2>
    </div>
    <div class="col-lg-8">
      <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
        <div class="row">
          <div class="col-12">
            <div class="form-group">

                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
            </div>
          </div>
        </div>
        <div class="form-group mt-3">
          <button type="submit" class="button button-contactForm btn_1">Send Message</button>
        </div>
      </form>
    </div>
    <div class="col-lg-4">
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-home"></i></span>
        <div class="media-body">
          <h3>{{ $seettings->city }}</h3>
          <p>{{ $seettings->address }}</p>
        </div>
      </div>
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
        <div class="media-body">
          <h3>{{ $seettings->phone }}</h3>
          <p>{{ $seettings->work_hours }}</p>
        </div>
      </div>
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-email"></i></span>
        <div class="media-body">
          <h3>{{ $seettings->email }}</h3>
          <p>Send us your query anytime!</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- ================ contact section end ================= -->

@endsection