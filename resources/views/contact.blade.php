@extends('partials.layout')

@section('title', 'Contact Us - DE-FORT')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('./css/contact.css')}}">

<div class="content py-5">
  <div class="container">
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
    <div class="row justify-content-center w-100">
      <div class="col-md-8 col-lg-8 text-center mb-4">
        <h1>Get in touch with us</h1>
        <p class="lead">Fill up the form to get in touch with us.</p>
      </div>

      <div class="col-md-10 container-xxl w-100">
        <div class="card shadow-sm">
          <div class="card-body d-flex flex-row p-4 justify-content-evenly">
            <div class="col-lg-6 p-lg-2 p-md-0 me-3" style="max-height: 55%; min-width:30%">
              <img class="img-fluid h-100 w-auto mb-4 rounded object-fit-span" src="/images/cont.webp" alt="Contact Us">
            </div>
            <div class="col-lg-5 ms-lg-3 mg-md-2">
              <form method="POST" action="/addcontact">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label"><b>Name</b></label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name / Company Name" required>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label"><b>Email Address</b></label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                </div>

                <div class="mb-3">
                  <label for="message" class="form-label"><b>Message</b></label>
                  <textarea class="form-control" id="message" name="message" placeholder="Enter Message" rows="5" required></textarea>
                </div>

                <div class="d-flex justify-content-between">
                  <a href="/" class="btn btn-secondary">Cancel</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <div>
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
            <iframe height="600px" style="border:0;" allowfullscreen="yes" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?q=De-fort%2C%20Jawlakhel&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
          </div>
          <style>

          </style>
        </div>

        <div class="container h-100 w-50 m-0 p-0 c0l-sm-6">
          <div class="d-flex justify-content-evenly row h-100 g-3">
            <div class="col-12 col-lg-6 col-md-3 col-sm-3">
              <div class="card contact-card h-100">
                <div class="card-body text-center">
                  <i class="bi bi-geo-alt-fill fs-1 contact-icon"></i>
                  <h5 class="card-title mt-3">Visit Us</h5>
                  <p class="lead">Jhamsikhel<br>Lalitpur-03, Nepal</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-md-3 col-sm-3">
              <div class="card contact-card h-100">
                <a href="tel:+977-01-5444086" style="text-decoration: none; color: inherit;">
                  <div class="card-body text-center">
                    <i class="bi bi-telephone-fill fs-1 contact-icon"></i>
                    <h5 class="card-title mt-3">Call Us</h5>
                    <p class="lead">+977-01-5444086</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-sm-3 col-md-3">
              <a href="mailto:info@de-fortnp.com?subject=Inquiry%20from%20Website" style="text-decoration: none; color: inherit;">
                <div class="card contact-card h-100">
                  <div class="card-body text-center">
                    <i class="bi bi-envelope-fill fs-1 contact-icon"></i>
                    <h5 class="card-title mt-3">Email Us</h5>
                    <p class="lead">info@de-fortnp.com</p>
                  </div>
              </a>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-md-3 col-sm-6">
            <div class="card contact-card h-100">
              <div class="card-body text-center">
                <i class="bi bi-clock-fill fs-1 contact-icon"></i>
                <h5 class="card-title mt-3">9-5</h5>
                <p class="lead">Open</p>
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