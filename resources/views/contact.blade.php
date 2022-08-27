@extends('layouts.app')

@section('content')
    <section class="mb-4" style="margin: 100px 0px !important;">

        <h2 class="h1-responsive font-weight-bold text-center my-4">Contacto</h2>
        <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet consectetur, provident maxime, quo nihil 
            rerum modi inventore at?</p>

        <div class="row">
            <div class="col-md-7 mb-md-0 mb-5 mx-auto">
                <form id="contact-form" name="contact-form"  method="POST" action="{{ route('contact.email') }}">
                    @csrf
                    <!--Grid row-->
                    <div class="row my-4">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" required placeholder="Tu nombre" id="name" name="name" class="form-control">
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="email" required placeholder="Tu email" id="email" name="email" class="form-control">
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row my-4">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" placeholder="Tu asunto" name="subject" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row my-4">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" placeholder="Tu mensaje" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                

                    <div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    <div class="status"></div>
                </form>
            </div>
        </div>

    </section>
@endsection
