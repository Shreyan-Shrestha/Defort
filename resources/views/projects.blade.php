@extends('partials.layout')
@section('title', 'Projects - DE-FORT Tech and Health')
@section('content')
<style>
    /* Custom width for 6 cards per row on large screens */
    @media (min-width: 992px) {
        .w-lg-16 {
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }
    }
</style>
<div class="content py-5">
    <h1 class="text-center mb-4">Our Projects</h1>

    @if($projects->isEmpty())
    <div class="alert alert-info text-center">
        Please stay tuned for more info.
    </div>
    @else
    <div class="d-flex flex-row flex-wrap">
        @foreach($projects as $project)
        <div class="flex-fill w-50 w-lg-16 mb-4 px-2">
            <div class="card shadow h-100">
                <div class="card-body p-3">
                    @if($project->image)
                    <a href="/viewproject/{{$project['id']}}"><img src="{{ asset('storage/' . $project->image) }}" class="card-img-top img-fluid rounded mb-3" alt="{{ $project->projectname }}" style="max-height: 150px; object-fit: cover;"></a>
                    @else
                    <a href="/viewproject/{{$project['id']}}"><img src="https://placehold.co/300?text={{ $project->projectname }}" class="card-img-top img-fluid rounded mb-3" alt="{{ $project->projectname }}" style="max-height: 150px; object-fit: cover;"></a>
                    @endif
                    <p class="card-text">
                        <span class="badge {{ $project->status ? 'bg-success' : 'bg-secondary' }}">
                            {{ $project->status ? 'Completed' : 'Ongoing' }}
                        </span>
                    </p>
                    <hr style="border: 1px solid black; width: 100%;">
                    @if($project->clientname)
                    <h5 class="card-title fs-4 text-center"><strong>{{ $project->projectname }}</strong></h5>
                    @endif

                    <hr style="border: 1px solid black; width: 100%;">
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection