<div id="bg-overlay-black" class="p-5 text-center bg-light mb-4"
    style=" height: 330px; 
        background-image: url({{ asset('/images/banner/04.jpg') }});
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    ">
    <nav aria-label="breadcrumb" style="display: flex; justify-content: center; margin-top: 190px !important;">
        {{-- @if (Route::current()->uri() != '/') --}}
        <ol class="breadcrumb">
            @for ($i = 0; $i <= count(Request::segments()); $i++)
                <li class="breadcrumb-item text-white"><a href="#"
                        class="text-white">{{ Str::upper(Request::segment($i)) }}</a></li>
            @endfor
        </ol>
        {{-- @endif --}}
    </nav>
</div>
