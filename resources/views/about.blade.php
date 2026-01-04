@extends('partials.layout')
@section('title', 'About Us - DE-FORT')
@section('content')
<div class="container-xxl mt-4">
    <div class="row justify-content-center">
        <div class="col-md-15 h-75">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h1 class="text-center mb-4">DE-FORT</h1>
                    @if($about && $about->description)
                    <div class="about-content">
                        {!! $about->description !!}
                    </div>
                    @else
                    <p>No information available about DE-FORT at the moment.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection