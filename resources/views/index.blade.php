@extends('partials.layout')

@section('title')

@section('content')
<div class="carousel-slide shadow my-3" data-bs-ride="carousel" style="height: 40vh;">
    <div class="carousel-inner">
        <div class="carousel-item active h-100 w-100">
            <img src="{{asset('images/carousel/carousel1.jpg')}}" class="img-fluid d-block w-100" style="object-fit: cover; width: 100%; height:40vh;" alt="DE-FORT1">
            <div class="carousel-caption d-none d-md-block">
                <h5>
                    <p class="lead mt-3">Army Project</p>
                </h5>
            </div>
        </div>
        <div class="carousel-item h-100 w-100">
            <img src="{{asset('images/carousel/narapark.jpg')}}" class="img-fluid d-block w-100" style="object-fit: cover; width: 100%; height:40vh;" alt="DE-FORT2">
        </div>
        <div class="carousel-item h-100 w-100">
            <img src="{{ asset('images/carousel/defort.jpg') }}" class="img-fluid d-block w-100" style="object-fit: cover; width: 100%; height:40vh;" alt="DE-FORT3">
        </div>
        
    </div>
</div>
<div class="h-100 pt-5 px-5 pb-2 bg-body-tertiary border rounded-3 my-3">
    <h1 class="bg-dark-subtle d-inline px-2"> About Us </h1>
    <p class="mt-2">DE-FORT was the reformation of then established company E-Fort Nepal (1998 AD) in 2004 AD with the goal of serving public and private sector in major areas of Infrastructural, Urban and regional development and other related engineering discipline. Under one single roof, singly owned and with one same management having own office building since year 2009, it has three wings. One as purely consulting wing “DE-FORT Designers P. Ltd. (Designers’ of 1992)” other as design Built Company “Development E-Fort Nepal P. Ltd. (A Group of Engineering Endeavor)” and another as “E2E Development Incorporation P. Lt
        scattered entrepreneurial, technical and managerial efficiencies or is the integration of number of established firms and companies efforts for a different higher objective with the goal of serving public and private sector in major areas of real estate and infrastructural developments works.

        DE-FORT has completed more than 700 no. of smaller and larger architectural, engineering, environmental and infrastructural Projects since its establishment till today and hence gathered wide range of experience and professional network.

        DE-FORT has successfully completed 10 different Hospital projects as well, we are currently involved in more than 20 different projects from Hotel Buildings, Home stay, Office Extension, Commercial Buildings, Factory etc. within country and public complex (Nepali Temple) Design/Drawing at Sydney, Australia .

        The scope of DE-FORT includes, but not limited to Survey, Research, Design and Turnkey projects on infrastructural development works like Urban planning, GIS & Database projects, water supply and sanitary engineering, highway engineering, irrigation design building, housing and commercial complexes, surveying. Likewise, the company has extended its services to include urban and infrastructural planning, Landscaping, Interior/Exterior designing, as well as training, Research & Development (R&D). Recently it has started its wings on leasing business, BOT and BOOT projects on infrastructural Development projects especially in urban areas. To provide diversified service, DE-FORT maintains a pool of high-caliber experts in various disciplines, apart from full-time in-house dedicated and capable staffs.
        The company is fully equipped with the latest and advanced computer facilities and instruments, and makes full use of CADD (Computer Aided Design and Drafting) technologies; field Instruments as well as testing machines and equipment.
    </p>

    <hr style="border: 1px solid black; width: 100%;">

    <div class="h-100 pt-5 mt-3">
        <h1 class="bg-dark-subtle d-inline px-2"> <a href="/projects">Our Projects</a> </h1>
        <p class="mt-2">We have successfully completed numerous projects across various sectors. Click to see more of our <a href="/projects"><u>Projects:</u></a></p>
        <div class="d-flex flex-row justify-content-between w-200 w-lg-50 mb-4 px-2">
            <div class="card shadow h-100 pt-3">
                <div class="card-body p-3">
                    <img src="{{ asset('images/project/narapark.jpg') }}" class="card-img-top img-fluid rounded mb-3" alt="" style="max-height: 150px; object-fit: cover;"></a>
                    <h5 class="card-title fs-4 text-center"><strong>Nara Park, Sankhamul</strong></h5>

                    <hr style="border: 1px solid black; width: 100%;">
                </div>
            </div>
            <div class="card shadow h-100 pt-3">
                <div class="card-body p-3">
                    <img src="{{ asset('images/project/gagan.jpg')}}" class="card-img-top img-fluid rounded mb-3" alt="" style="max-height: 150px; object-fit: cover;"></a>
                    <h5 class="card-title fs-4 text-center"><strong>Gagan Apartments, Lalitpur</strong></h5>

                    <hr style="border: 1px solid black; width: 100%;">
                </div>
            </div>
            <div class="card shadow h-100 pt-3">
                <div class="card-body p-3">
                    <img src="{{ asset('images/project/m10.jpg')}}" class="card-img-top img-fluid rounded mb-3" alt="" style="max-height: 150px; object-fit: cover;"></a>
                    <h5 class="card-title fs-4 text-center"><strong>Building Project, Lalitpur</strong></h5>
                    <hr style="border: 1px solid black; width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 text-center">
    <a href="{{ route('blog.index') }}" class="btn btn-primary btn-lg mx-3">
        View Blog Posts
    </a>
    
    <a href="{{ route('blog.admin.posts.index') }}" class="btn btn-warning btn-lg mx-3">
        Manage Blog (Admin)
    </a>
</div>
</div>
@endsection