@extends('layouts.app', ['footer' => true])

<link rel="stylesheet" href="{{ asset('css/products/show.css') }}">

@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <main>
            <div class="row g-5 my-4">

                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Tu carrito</span>
                        <span class="badge bg-primary rounded-pill">{{ Cart::count() }}</span>
                    </h4>
                    <ul class="list-group mb-3">
                        @foreach (Cart::content() as $item)
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">{{ $item->name }}</h6>
                                    <small class="text-muted">Cantidad {{ $item->qty }}</small>
                                </div>
                                <span class="text-muted"> S/ {{ format_number($item->price) }}</span>
                            </li>
                        @endforeach
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Sub Total </span>
                            <strong>S/ {{ Cart::subtotal() }}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>IGV </span>
                            <strong>{{ config('cart.tax') }}%</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total </span>
                            <strong>S/ {{ Cart::total() }}</strong>
                        </li>
                    </ul>
                </div>

                <div class="col-md-7 col-lg-8">
                    <form class="needs-validation" novalidate="">
                        <h4 class="mb-3">Contacto <i class="fa-solid fa-address-book"></i></h4>

                        <div class="card card-body">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">Telefono</label>
                                    <input type="number" class="form-control" id="firstName" placeholder="" required>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">Direccion de pedido <i class="fa-solid fa-location-dot"></i></h4>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <label for="country" class="form-label">Ciudad</label>
                                        <select class="form-select" id="country" required="">
                                            <option value="">Choose...</option>
                                            <option>United States</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="state" class="form-label">Distrito</label>
                                        <select class="form-select" id="state" required="">
                                            <option value="">Choose...</option>
                                            <option>California</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>

                                    <div class="form-floating mt-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea">Direccion</label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Ir a pagar</button>

                    </form>
                </div>

            </div>
        </main>
    </div>
@endsection
