@extends('partials.layout')
@section('title', 'Projects - DE-FORT Tech and Health')
<style>
    i {
        color: #0d95f0ff;
    }
</style>

@section('content')
<section class="container-fullwidth column px-md-5 px-3 mt-5" id="pageintro">
    <div class="row d-flex justify-content-start reveal">
        <div class="col-8 col-sm-6">
            <div class="section-title d-flex align-items-center">
                <span class="line-divider d-inline-block me-3" style="background-color: #007bff; width:2.5rem; height:0.2rem;"></span>
                <h5><span class="fw-bold"> Our Projects</span></h5>
            </div>
            <p>
            <h1><span style="color: #007bff;">Building Excellence</span>: Our Projects Portfolio</h1>
            </p>
        </div>
    </div>
    <div class="section-subtitle col-lg-6 col-sm-10 mt-3 reveal">
        <p class="lead">
            Explore our diverse portfolio of successfully delivered engineering and construction
            projects.
        </p>
    </div>
</section>

<section class="mt-5 container-fullwidth px-5">
    <div class="container h-auto py-5">
        <h1 class="text-center mb-4">Our Projects</h1>

        @if($projects->isEmpty())
        <div class="alert alert-info text-center">
            Please <a href="/contact">Contact us</a> for any project information you wish to enquire about.
        </div>
        @else
        <div class="d-flex flex-column">
            @foreach($projects as $project)
            <div class="card w-100 mb-4 border-0 bg-light" style="height: 40%;">
                <div class="row g-0">
                    <div class="col-lg-4 h-100 m-0 col-sm-4">
                        <span class="badge bg-light-subtle" style="position:absolute; top:0.5rem; left: 0.5rem; color: #1f6cc4ff; z-index: 1;">{{ $project->category }}</span>
                        @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" class="card-img-start h-100 w-100" alt="{{ $project->projectname }}" style=" object-fit: cover;">
                        @else
                        <img src="https://placehold.co/500x300?text={{ $project->projectname }}" class="img-fluid rounded mb-3" alt="{{ $project->projectname }}" style=" object-fit: cover;">
                        @endif
                    </div>
                    <div class="card-body col-lg-8 col-sm-8 p-3 ps-5" style="line-height: 2rem;">
                        <div class="row">
                            <p class="card-text">
                                <span class="badge {{ $project->status ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $project->status ? 'Completed' : 'Ongoing' }}
                                </span>
                            </p>
                        </div>
                        @if($project->projectname)
                        <h5 class="card-title fs-4"><strong>{{ $project->projectname }}</strong></h5>
                        @endif
                        <div class="row mb-2 justify-content-between">
                            <div class="col-md-6">
                                @if($project->clientname)
                                <i class="bi bi-person"> </i><span> Client: {{ $project->clientname }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                @if($project->completeddate)
                                <span><i class="bi bi-calendar-check"></i> Completed: {{ $project['completeddate'] }}</span>
                                @endif
                            </div>
                        </div>
                        @if($project->description && strip_tags($project->description))
                        <div class="p-1">
                            <p class="lead">{!! \Illuminate\Support\Str::words(strip_tags($project->description), 20, '...') !!}</p>
                        </div>
                        @else
                        <p class="card-text">Description not available.</p>
                        @endif
                    </div>
                </div>
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection