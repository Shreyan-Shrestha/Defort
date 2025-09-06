@extends('partials.layout')

@section('title')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="content py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card shadow-sm">
          <div class="card-body p-4">
            <h2 class="text-center mb-4">Leave us a Message</h2>

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

            <form method="POST" action="/contact">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label"><b>Name</b></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
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