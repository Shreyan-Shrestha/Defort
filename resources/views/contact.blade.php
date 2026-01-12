@extends('partials.layout')

@section('title text-black', 'Contact Us - DE-FORT')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('./css/contact.css')}}">

<div class="container-full m-0 p-5 d-flex flex-column align-items-center">
  <div class="d-flex flex-column align-items-center w-100 mb-2">
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
      <strong>Whoops!</strong>
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>
  <div class="row w-100">
    <div class="col-md-8 col-lg-8 mx-4 mb-5">
      <div class="mb-4 d-flex align-items-center">
        <span class="line-divider align-middle d-inline-block me-3" style="background-color: #007bff; width:3rem; height:0.2rem;"></span><span><strong>Contact Us</strong></span>
      </div>
      <h1 class="mt-3 text-primary">Get in touch with us</h1>
      <p class="lead">Fill up the form to get in touch with us.</p>
    </div>

    <div class="container w-100 mb-5">
      <div class="card shadow border-0">
        <div class="card-body p-lg-4">
          <div class="d-flex flex-lg-row flex-md-row flex-column justify-content-center align-items-center p-lg-3">
            <div class="col-lg-6 p-lg-2 p-md-2 me-3" style="max-height: 65%; min-width:30%">
              <img class="img-fluid h-100 w-auto rounded object-fit-cover" src="/images/cont.webp" alt="Contact Us">
            </div>
            <div class="col-lg-6 ms-lg-3 mt-sm-2 mt-md-3">
              <form method="POST" action="/addcontact">
                @csrf
                <input type="hidden" name="sendemail" value="{{ csrf_token() }}">
                <div class="d-flex row">
                  <div class="mb-3 col-md-6 d-inline-block">
                    <label for="firstname" class="form-label"><b>First Name</b></label>
                    <input type="text" class="form-control" id="first" name="firstname" placeholder="Enter Your Name / Company Name" required>
                  </div>
                  <div class="mb-3 col-md-6 d-inline-block">
                    <label for="lastname" class="form-label"><b>Last Name</b></label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Your Last Name">
                  </div>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label"><b>Email Address</b></label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                </div>

                <div class="mb-3">
                  <label for="subject" class="form-label"><b>Subject</b></label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" required>
                </div>

                <div class="mb-3">
                  <label for="message" class="form-label"><b>Message</b></label>
                  <textarea class="form-control" id="message" name="message" placeholder="Enter Message" rows="3" required></textarea>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="container-xxl mt-5 mb-5 rounded-4 shadow-sm bg-light p-0" style="height: 60%;">
      <div class="row w-100 h-100 justify-content-between g-4">
        <div class="mapouter col-lg-6 col-md-6 m-0 w-50" style="height: 50vh;">
          <div class="gmap_canvas w-100 h-100" style="overflow:hidden; background:none!important;">
            <iframe height="600px" style="border:0;" allowfullscreen="yes" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?q=De-fort%2C%20Jawlakhel&key={{ config('services.google_maps.key') }}"></iframe>
          </div>
    </div>
<div class="container my-5">
  <div class="row align-items-stretch g-4 g-lg-5">

    <!-- MAP COLUMN – left on lg+, top on mobile -->
    <div class="col-lg-6 order-lg-1 order-1">
      <div class="mapouter h-100 w-100 position-relative">
        <div class="ratio ratio-16x9 h-100">  <!-- or ratio-4x3 / ratio-21x9 depending on preferred aspect -->
          <iframe
            class="w-100 h-100 position-absolute top-0 start-0"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed/v1/place?q=De-fort%2C%20Jawlakhel&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
          </iframe>
        </div>
      </div>
    </div>

    <!-- 2×2 CONTACT GRID COLUMN – right on lg+, bottom on mobile -->
    <div class="col-lg-6 order-lg-2 order-2">

      <div class="d-flex flex-wrap justify-content-between align-content-between h-100 p-3 p-lg-4 gap-4">

        <!-- Top Left - Visit Us -->
        <div class="col-5">
          <div class="card h-100 text-center border-0 bg-subtle text-primary">
            <div class="card-body d-flex flex-column justify-content-center p-4">
              <i class="bi bi-geo-alt-fill fs-1 contact-icon mb-3"></i>
              <h5 class="card-title text-black">Visit Us</h5>
              <p class="lead mb-0">Jawalakhel, Lalitpur<br>Metropolitan City</p>
            </div>
          </div>
        </div>

        <!-- Top Right - Call Us -->
        <div class="col-5">
          <div class="card h-100 text-center border-0 bg-transparent text-primary contact-card">
            <a href="tel:+977-01-5444086" class="text-decoration-none text-primary stretched-link d-block h-100">
              <div class="card-body d-flex flex-column justify-content-center p-4">
                <i class="bi bi-telephone-fill fs-1 contact-icon mb-3"></i>
                <h5 class="card-title text-black">Call Us</h5>
                <p class="lead mb-0">+977-01-5444086</p>
                <p class="lead mb-0">+977-985141235</p>
              </div>
            </a>
          </div>
        </div>

        <!-- Bottom Left - Email Us -->
        <div class="col-5">
          <div class="card h-100 text-center border-0 bg-transparent text-primary" style="cursor: pointer;">
            <a href="mailto:info@de-fortnp.com?subject=Inquiry%20from%20Website" class=" text-decoration-none text-primary stretched-link d-block h-100">
              <div class="card-body d-flex flex-column justify-content-center p-4">
                <i class="bi bi-envelope-fill fs-1 contact-icon mb-3"></i>
                <h5 class="card-title text-black">Email Us</h5>
                <p class="lead mb-0">info@de-fortnp.com</p>
              </div>
            </a>
          </div>
        </div>

        <!-- Bottom Right - Hours -->
        <div class="col-5">
          <div class="card h-100 text-center border-0 bg-transparent text-primary contact-card">
            <div class="card-body d-flex flex-column justify-content-center p-4">
              <i class="bi bi-clock-fill fs-1 contact-icon mb-3"></i>
              <h5 class="card-title text-black">Opening Time</h5>
              <p class="lead mb-0">9 a.m to 5 p.m<br>Open</p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>
@endsection
