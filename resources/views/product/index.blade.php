@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-top: 100px !important;">
    <div class="row">
        <form method="get" action="{{ route('productos.index') }}" class="p-0 m-0 row" style="width: 100% !important;">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Filtrar por categoria</h5>
                        <hr>
                        @forelse ($categories as $categorie)
                            <div class="mb-1 form-check">
                                <input type="checkbox"
                                    {{ !is_null(request()->input('category')) && in_array($categorie->category_id, request()->input('category')) ? 'checked' : '' }}
                                    name="category[]" value="{{ $categorie->category_id }}" class="form-check-input"
                                    id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"> {{ $categorie->name }}</label>
                            </div>
                        @empty
                            <label class="custom-control-label">Aun no hay categorias</label>
                        @endforelse
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ordenar por precio</h5>
                        <hr>
                        <select class="form-select" aria-label="Default select example" name="price">
                            <option value="">Seleccionar</option>
                            <option value="asc" {{ request()->input('price') == 'asc' ? 'selected' : '' }}>Mas caro</option>
                            <option value="desc" {{ request()->input('price') == 'desc' ? 'selected' : '' }}>Mas barato</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <h5>Buscar Producto</h5>
                        <hr>
                        <input class="form-control" type="text" value="{{ request()->input('nombre') }}"
                            name="name" id="name" placeholder="Buscar">
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary">Filtrar <i style="margin-left: 10px;" class="fa fa-search"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @forelse ($products as $product)
                        <div class="col-4 col-sm-4 col-md-4 col-lg-3 mb-4 mt-0 card">
                            <div class="d-flex justify-content-between p-3">
                                <p class="lead mb-0">{{ $product->name }}</p>
                            </div>
                            <img src="{{ asset('images/products/'.$product->image) }}"
                                class="card-img-top" alt="{{ $product->name }}" />
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="small"><a href="#!" class="text-muted">{{ $product->category->name ?? '' }}</a></p>
                                    <h5 class="text-dark mb-0">S/ {{ format_number($product->price) }}</h5>
                                </div>
                                <p class="text-truncate mb-4 mb-md-0">
                                    {{ Str::limit($product->description, 20) }}
                                </p>
                                <div class="d-flex justify-content-between mb-2">
                                    <p class="text-muted mb-0">Available: <span class="fw-bold">{{ $product->stock }}</span></p>
                                    <div class="ms-auto text-warning">
                                        @for ($i = 1; $i <= $product->qual; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                    </div>
                                </div>
                                <div class="container-fluid text-center d-flex p-0">
                                    <a href="{{ route('productos.show', $product->slug) }}" class="btn btn-warning text-white" type="button">Ver</a>
                                    <button type="button" class="btn btn-success m-0 mx-2" style="height: 34px;">
                                        Agregar
                                    </button>             
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No products!</p>
                    @endforelse
                    <div class="w-100"></div>
                    {{ $products->links() }}
                </div>
            </div>
        </form>
    </div>
</div>
@endsection