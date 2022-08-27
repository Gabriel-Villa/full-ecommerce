@extends('layouts.app', ['footer' => true])

<link rel="stylesheet" href="{{ asset('css/products/show.css') }}">

@section('content')
    <div class="container">

        <div class="container mt-5 mb-5">
            <div class="card border-0 shadow p-3 mb-5 bg-body rounded">
                <div class="row g-0">
                    <div class="col-md-5 border-end">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="main_image"> <img src="{{ asset('images/products/' . $product->image) }}"
                                    id="main_product_image" width="350"
                                    style="height: 400px; max-height:400px; min-height:400px; margin:auto;margin-left: 32px;">
                            </div>
                            <div class="thumbnail_images">
                                <ul id="thumbnail" style="display: flex; margin-top: 22px;">
                                    <li style="list-style: none;"><img onclick="changeImage(this)"
                                            src="https://eligroup.es/wp-content/uploads/2016/07/ads-300x250.gif"
                                            width="70" style="height: 70px; min-height: 70px; max-height: 70px;"></li>
                                    <li><img onclick="changeImage(this)"
                                            src="https://www.uned.ac.cr/extension/images//UAbierta/285x180.png"
                                            width="70" style="height: 70px; min-height: 70px; max-height: 70px;"></li>
                                    <li><img onclick="changeImage(this)" src="https://baros.com.ar/assets/images/dr-img.jpg"
                                            width="70" style="height: 70px; min-height: 70px; max-height: 70px;"></li>
                                    <li><img onclick="changeImage(this)"
                                            src="{{ asset('images/products/' . $product->image) }}" width="70"
                                            style="height: 70px; min-height: 70px; max-height: 70px;"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 right-side">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>{{ $product->name }}</h3> <span class="heart"><i class='bx bx-heart'></i></span>
                            </div>
                            <div class="mt-2 pr-3 content">
                                <p>
                                    {{ $product->description }}
                                </p>
                            </div>
                            <h3>S/ {{ format_number($product->price) }}</h3>
                            <div class="d-flex justify-content-between mb-2">
                                <p class="text-muted mb-0">Available: <span class="fw-bold">{{ $product->stock }}</span></p>
                                <div class="ms-auto text-warning">
                                    @for ($i = 1; $i <= $product->qual; $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <div class="buttons d-flex flex-row mt-1 gap-3">
                                        <button type="button" class="btn btn-success m-0 mx-2" style="height: 34px;">
                                            Agregar
                                        </button> 
                                        <a href="#" class="btn btn-secondary m-0 w-25 mt-1" style="height: 34px;">Ver carrito</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>
                        <div class="p-3 d-flex flex-column bd-highlight mb-3">
                            <a href="#" class="text-decoration-none mb-2 text-dark p-2" style="font-size: 16px;">
                                <i class="fas fa-lock"></i>
                                <span class="px-2"> Buyer Protection</span>
                            </a>
                            <a href="#" class="text-decoration-none mb-2 text-dark p-2" style="font-size: 16px;">
                                <i class="fas fa-phone"></i>
                                <span class="px-2"> Telephone advice (01) xxxx-xxx</span>
                            </a>
                            <a href="#" class="text-decoration-none mb-2 text-dark p-2" style="font-size: 16px;">
                                <i class="fab fa-app-store"></i>
                                /
                                <i class="fab fa-android"></i>
                                <span class="px-2"> Download the app</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Policy</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                    type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Aditional
                    Info</button>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active bg-white p-4" id="nav-home" role="tabpanel"
                aria-labelledby="nav-home-tab">
                <p class="mt-3">
                    Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget
                    tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin
                    eget
                    tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
                </p>
                <p>
                    Sed porttitor lectus nibh.
                    Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non
                    nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum
                    commodo. Nunc et congue enim. Nulla ultricies porta
                </p>

                Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue
                leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque
                nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non
                nulla sit amet nisl tempus convallis quis ac egestas non nisi. Curabitur non nulla sit amet nisl tempus
                convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim.
                Nulla ultricies
                </p>
            </div>
            <div class="tab-pane fade bg-white p-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <h3 class="return-title mt-3">RETURNS POLICY</h3>
                <p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut
                    blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis
                    dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus
                    scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus
                    urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis.
                    Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex
                    ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis
                    lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget
                    augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia,
                    venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>
            </div>
            <div class="tab-pane fade bg-white p-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <p class="additional-information-text mt-3">Quisque velit nisi, pretium ut lacinia in, elementum id
                    enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt
                    nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                    Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque
                    nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero
                    malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna
                    dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus
                    nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero
                    malesuada feugiat. </p>
                <ul class="additional-feature">
                    <li class="single-feature">
                        <h3 class="feature-title">Comodous:</h3>
                        <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                    </li>
                    <li class="single-feature">
                        <h3 class="feature-title">Mattis laoreet:</h3>
                        <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                    </li>
                    <li class="single-feature">
                        <h3 class="feature-title">Divamus de ametos:</h3>
                        <p class="feature-text">Divamus sit amet purus justo</p>
                    </li>
                    <li class="single-feature">
                        <h3 class="feature-title">Molestie:</h3>
                        <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                    </li>
                </ul>
            </div>
        </div>

        <hr>
        <br>

        <div class="container text-center my-3 mt-4 p-4 bg-white ">
            <h2 class="font-weight-light">Productos Relacionados</h2>
            <div class="row mx-auto my-auto justify-content-center">
                @forelse ($relate_products as $relate_product)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('images/products/' . $relate_product->image) }}" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">{{ $relate_product->name }}</div>
                            <a href="{{ route('productos.show', $relate_product->slug) }}"
                                style="position: absolute;top: 87%; right: 1%;" class="btn btn-warning text-white"
                                type="button">Show</a>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>

    </div>

    <script type="application/javascript">
        function changeImage(element) {
            var main_prodcut_image = document.getElementById('main_product_image');
            main_prodcut_image.src = element.src;
        }
    </script>
@endsection
