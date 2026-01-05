@extends('partials.layout')

@section('title', 'Contact Us - DE-FORT')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="content py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 text-center mb-4">
        <h1>Contact DE-FORT</h1>
        <p class="lead">We would love to hear from you! Whether you have questions, feedback, or just want to say hello, feel free to reach out to us.</p>
      </div>  
  
      <div class="col-md-10 col-lg-8">
        <div class="mb-4">
          <h5>Contact Us At:</h5>
          <h6>Phone no.: +9771-5444086</h6>
          <h6>Email: info@defort.com</h6>
          <h6>Address: Jawalakhel, Lalitpur MC-03, Nepal</h6>
          <h6>Location available in Google Maps.</h6>
        </div>
        <hr style="border: 1px solid black; width: 100%;">
        <h2>Or:</h2>
        <div class="card shadow-sm">
          <div class="card-body p-4">
            <h2 class="text-center mb-4">Leave us a short Message</h2>

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

            <form method="POST" action="/addcontact">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label"><b>Name</b></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name / Company Name" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label"><b>Email</b></label>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection