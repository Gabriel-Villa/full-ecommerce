@extends('layouts.app')



@section('content')


    <div id="bg-overlay-black" class="p-5 text-center bg-light mb-4" style=" height: 330px; 
        background-image: url({{asset('/images/banner/04.jpg')}});
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    ">
    </div>


    <div class="container marketing mt-4">

        <div class="row" style="margin-top: 120px !important;">
            <div class="col-lg-4">
                <img src="{{ asset('/images/products/1.jpg') }}" alt="product-1" width="140" height="140" class="mx-auto d-block rounded-circle">
                <br>
                <h2 class="text-center">Heading</h2>
                <br>
                <p>Some representative placeholder content for the three columns of text below the carousel</p>
                <p class="text-center"><a class="btn btn-secondary" >View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{ asset('/images/products/2.jpg') }}" alt="product-2" width="140" height="140" class="mx-auto d-block rounded-circle">
                <br>
                <h2 class="text-center">Heading</h2>
                <br>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second
                    column.</p>
                <p class="text-center"><a class="btn btn-secondary" >View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{ asset('/images/products/3.jpg') }}" alt="product-3" width="140" height="140" class="mx-auto d-block rounded-circle">
                <br>
                <h2 class="text-center">Heading</h2>
                <br>
                <p>And lastly this, the third column of representative placeholder content.</p>
                <p class="text-center"><a class="btn btn-secondary" >View details »</a></p>
            </div><!-- /.col-lg-4 -->
        </div>

        <hr class="featurette-divider my-4" style="margin-top: 65px !important;">

        <div class="row featurette">
            <div class="col-md-7 d-flex flex-column justify-content-center">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your
                        mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose
                    here.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('/images/products/1.jpg') }}" alt="product-1" width="500" height="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            </div>
        </div>

        <hr class="featurette-divider my-4">

        <div class="row featurette">
            <div class="col-md-7 order-md-2 d-flex flex-column justify-content-center">
                <h2 class="featurette-heading text-end">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span>
                </h2>
                <p class="lead text-end">Another featurette? Of course. More placeholder content here to give you an idea of how
                    this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="{{ asset('/images/products/2.jpg') }}" alt="product-2" width="500" height="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            </div>
        </div>

        <hr class="featurette-divider my-4">

        <div class="row featurette mb-4">
            <div class="col-md-7 d-flex flex-column justify-content-center">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really
                    intended to be actually read, simply here to give you a better view of what this would look like with
                    some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('/images/products/3.jpg') }}" alt="product-3" width="500" height="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            </div>
        </div>

    </div>

@endsection
