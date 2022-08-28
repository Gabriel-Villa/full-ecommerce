@extends('layouts.app')

@section('content')
    <section class="h-100 h-custom mb-4">

        <div class="container h-100 py-5">
            <div class="row d-flex align-items-center h-100">
                <div class="row">
                    <div class="col">
                        <h2>{{ Cart::count() }} producto(s) en el carrito</h2>
                    </div>
                    <div class="col">
                        <a href="{{ route('productos.index') }}" class="btn btn-primary float-end">Seguir comprando</a>
                    </div>
                </div>
                <div class="col my-4 p-0">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col" class="h5">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Total</th>
                                <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse (Cart::content() as $item)
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                            <img src="/images/products/{{ $item->id }}.jpg" class="img-fluid rounded-3" style="width: 120px"
                                                alt="Book" />
                                            <div class="flex-column ms-4">
                                                <p class="mb-2">{{ $item->name }}</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="align-middle">
                                        <div class="d-flex flex-row">
                                            <p>{{ $item->qty }}</p>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <p class="mb-0" style="font-weight: 500">
                                            S/ {{ format_number($item->price) }}
                                        </p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="mb-0" style="font-weight: 500">
                                            S/ {{ format_number($item->subtotal) }}
                                        </p>
                                    </td>
                                    <td class="align-middle">
                                        <form action="{{ route('carrito.destroy', [$item->rowId]) }}" method="POST">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="_method" value="DELETE">                
                                           <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash mx-1"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="5">Sin productos</td></tr>                            
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="w-100"></div>
                
                <table class="table w-50 mt-4 table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Sub Total</th>
                            <th>Igv</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-end">S/ {{ Cart::subtotal() }}</th>
                            <th class="text-end">{{ config('cart.tax') }}%</th>
                            <th class="text-end">S/ {{ Cart::total() }}</th>
                        </tr>
                    </tbody>
                </table>
                <div class="w-100"></div>
                <a href="/checkout" class="btn btn-success w-25">Pagar</a>
            </div>
        </div>
    </section>
@endsection
