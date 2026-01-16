@extends('partials.layout')
@section('title', 'About Us - DE-FORT')
<style>
    .outer-diamond {
        width: 6.25rem;
        /* Slightly larger than inner */
        height: 6.25rem;
        position: relative;
        transform: rotate(45deg);
        border: 5px solid;
        color: #87b0db;
    }
    

    #forborder {
        background-image: linear-gradient( #87b0db, #87b0db),
            linear-gradient( #87b0db, #87b0db),
            linear-gradient( #87b0db, #87b0db),
            linear-gradient( #87b0db, #87b0db),
            linear-gradient(steelblue, steelblue);
        background-repeat: no-repeat;
        background-size: 5px 50%, 50% 5px, 5px 50%, 50% 5px;
        background-position: left bottom, left bottom, right top, right top;
    }
</style>

@section('content')
<div class="container-fluid mt-4 p-5">
    <section class="w-100 column">
        <div class="row d-flex justify-content-start">
            <div class="col-1 ms-4">
                <div class="outer-diamond p-3">
                    <div class="inner-diamond">
                    </div>
                </div>
            </div>
            <div class="col-8 ms-5">
                <div class="section-title d-flex align-items-center">
                    <span class="line-divider d-inline-block me-3" style="background-color: #007bff; width"></span>
                    <h5><span class="fw-bold"> About Us</span></h5>
                </div>
                <p>
                <h1>About <span style="color: #007bff;">DE-FORT Tech</span></h1>
                </p>
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

    <section class="d-flex flex-sm-row mt-5 py-5 justify-content-between position-relative">
        <div id="forborder" class="col-5 p-3 d-flex justify-content-center">
            <div class="image-wrapper col-5 h-100 w-100 col-sm-6">
                <img class="img-fluid h-100 w-100 rounded" src="{{asset('images/carousel/carousel2.jpg')}}" style="aspect-ratio: 5/3;">
            </div>
        </div>
        <div class="section-title col-lg-6 align-content-stretch ps-5 pt-3">
            <h1>To Engineer and Build <span style="color: #007bff">Sustainable</span>,<span style="color: #007bff;"> High-Performance</span> Solutions</h1>
            <p class="lead mt-3">We are DE-FORT, a full service [Civil/Structural/General] engineering and construction firm dedicated
                to shaping resilient infastructure and inspiring spaces.</p>
            <p class="lead mt-4">For over 20 years, we've transformed complex challenges into enduring solutions, guided by an unwavering
                commitment to precision, partnership, and progress. We don't just build projects - we build trust foster innovation,
                and deliver legacies that stand the test of time.
            </p>
        </div>
    </section>
</div>
@endsection