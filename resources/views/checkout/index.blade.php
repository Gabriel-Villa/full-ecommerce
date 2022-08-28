@extends('layouts.app', ['footer' => true])

<link rel="stylesheet" href="{{ asset('css/products/show.css') }}">

@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <main>
            <div class="py-5 text-center">
                <h2>Pago</h2>
            </div>

            <div class="row g-5">
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
                    <h4 class="mb-3">Datos de usuario</h4>
                    <form class="needs-validation" novalidate="">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="{{ Auth::user()->name }}"
                                    required="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                                <div data-lastpass-icon-root="true"
                                    style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                    required="">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="Email:" value="{{ Auth::user()->email }}">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

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
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">Metodo pago</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input"
                                    checked="" required="">
                                <label class="form-check-label" for="credit">Paypal</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input"
                                    required="">
                                <label class="form-check-label" for="debit">Mercado Pago</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder=""
                                    required="">
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                                <div data-lastpass-icon-root="true"
                                    style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder=""
                                    required="">
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder=""
                                    required="">
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder=""
                                    required="">
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection
