@extends('partials.layout')
@section('title', 'About Us - DE-FORT')
<style>
    .outer-diamond {
        width: 6.25rem;
        /* Slightly larger than inner */
        height: 6.25rem;
        position: relative;
        transform: rotate(45deg);
        border: 5px solid #6d95d1;
    }
</style>

@section('content')
<div class="container-fluid mt-4 p-5">
    <section class="w-100 column">
        <div class="row d-flex justify-content-start">
            <div class="col-1 ms-4">
                <div class="outer-diamond">
                    <div class="inner-diamond">
                    </div>
                </div>
            </div>
            <div class="col-8 ms-5">
                <div class="section-title d-flex align-items-center">
                    <span class="line-divider d-inline-block me-3" style="background-color: #007bff; width:3rem; height:0.2rem;"></span>
                    <h5><span class="fw-bold"> About Us</span></h5>
                </div>
                <p><h1>About <span style="color: #007bff;">DE-FORT Tech</span></h1></p>
            </div>
        </div>
        <div class="section-subtitle col-lg-6 col-sm-10 mt-3">
            <p class="lead">
                To engineer and build sustainable, high-performance solutions that improve
                communities, empower our clients, and set new standards for safety and quality
                  in the industry.
            </p>
        </div>
    </section>

    <section class="d-flex row-sm-1 row-lg mt-5 py-5">
        <div class="image-wrapper col-5">
            <img class="img-fluid" src="{{asset('images/carousel/carousel2.jpg')}}">
        </div>
        <div class="section-title col-6">
            <h1>To Engineer and Build <span style="color:#007bff">Sustainable</span>,<span style="color: #007bff;"> High-Performance</span> Solutions</h1>
        </div>
    </section>
</div>
@endsection