<x-app-layout>          
    <x-layout_crud>
        <div class="page-heading">
            <h3>Operaciones de CRUD en un inventario de libros</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="stats-icon purple">
                                                <a href="libro/create">
                                                    <i>
                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAABmJLR0QA/wD/AP+gvaeTAAAD6ElEQVRoge3az29VRRTA8Y+Egral+INEN0hDaiWCBNdGQxA1EVET44+VC9HgykjY+AcQou40ERMTl4KgS93qRv8BQKONAQpVpEVJrCZqgLqYkr7OPff13R8PNOk3mcXMm3vmnLkz554581hmmWWacFMfZK7AVmzBOO7E8Pxvf+ACJnASx3G1Dzo0ZgBP4Rh+w1yP5VccnX924LprHTCM/fhZ70aUlZ+wD0PX1YIOduNsFwWbGPZSXaXq7KG1+AjPLtHvCiZxBrPzbSPYgFFpr3XjU7yC32vo2DPj+FH57E7jXTym+9IZwuN4DzNd5E1grA92gAckDxUNfAp7sKqG3FV4VXqTkexfsK2h7gXuERtzGQdwSwtjDOLgvMzIqNbe1K3iZXYBD7c1SAfbpaUbLb+RNgb4LBB+Rnpr/WJccij5uJ80FfxiIHQa9zYV3ANj0lLLx1/Ku5YyLH0T8j3Tj2VWxg7FPXVW2m+V2a84OwdaUbMabwV6vFFVyIBiOHNKdW+2XorvOsv6ijIGFffTlIqx39OKs7KnoiKwOZCzuYacvYGcXVUEHMsenlbvo9mWQasVI4rDUcconlqBR7K2I/inhiJt8bc0yZ08KtA/Mmgrbs/avmhHr0Z8ntXXSYfIRUQG3Z/Vr+CblpRqwteKp9tcVyuDB8ez+iT+XGKwjbitpD3nPtwctF+SPGkZs9I3aLSjLdc15AOLN9+XPTyTO5E6Jd8jEV9lzxzKO0RLbk1W7+sBqyK5LrmuS54a/3dEBs1m9VZC9pbIdcl1DZ3CTFbf0MNAb+LtoH2j4t54Xrz5L/UwzmhWn847RAZNBEKGpSRhGWXe6a+g7Tt820VWGWtwd9aW6xouuZNBnwdrKNA2DynqeyLvFBl0XMp+dlIpEOwTT2b1GcXJL+Woxf5+xo0PTi9mcj6OOpa57bzzOg2ymS3wMu7I2kKDyhhQPH6fdmMOeEOKKedzYofWlX2Ky+VgVSEt8E6gx+t1BA1JM5EnSba3omZv7JSi/U4dJjVIbD6nODsz2NRU0x4YE2drn2kqOIqkJ/U3N7dJfFUTHrurslb6IkdvakcbA2TsVHTRc/heEF3XpSyLeVnKm9VK/GUMSQ4g3zNzOC8+LDZim9ioa0twr3of39V4Tflt4Hkpz9EXxsTL71q5iPfxhIWb74jh+T6HxMurc5lVejN1riRH8CFeWKLfVWnWT1t8JTkqHUmWGvuI9NYLZ55+sVv5rVuTMuUGhlmDUuJ8qouCvZZzUgTQxm1gY1ZK4f1h3S+B8zItBZm71IjNIvr115gtFv4ac5cFBzErff1/kE6tJyTDlllmmf8I/wL+hdQjAJuY+wAAAABJRU5ErkJggg=="/>
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-6">
                                            <a href="libro/create">
                                                <h6 class="text-muted font-extrabold">CREATE</h6>
                                            </a>
                                            {{-- <h6 class="font-extrabold mb-0">112.000</h6> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="stats-icon blue">
                                                <a href="/readall">
                                                    <i>
                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAC3ElEQVRoge2ZvWtTURjGf3WoEYMgIppBC23BQicXwcF8GLq4OraWglAU+j9YdPBjd9dBEDeTkLbgoi62ilutbn4sSuwgFTWJGIeTlPCek3tzbt6bWMwPDvSk3Od5nxzu+QoMGRILIz0+nwIuABlgGhgDDjX/9w34AGwCT4Ey8LlHP3WyQAn4DTS6bHWgCKQHUK/FJLBK98V3amVgos+17zIPfA8p0KftAHN9TQBcDyjoDXATyAOngIPNNtX87BawFfD8cr9C3OhQwDqQ89A5CzzvoBV7mHmHaRVYJNqMNwJcaWpI3VmFep1MYr8TX4FzCtppYFto7wDjCtoWcnaqohOiRQaoCY+Soj5g1gk59IvaJsBVh4/ml0VJiL+g912AixFgQ3gVtMRTmFW4XTyjJe4gJ7zqwDEN4ctCeFNDNIS3wnPBV2Cf4zP57asNdQCPRT/rK+AKMi36T3xFIyA9ZA2huIKMif4nX9EIfAypIRJy1U1qiIaQFJ6/fAVcIyKJY9qVyDrqvQqA2Sq0k/IVjYD0qPgKuIK8F/0TvqIROCn6X3wFXEHkujHjKxoB6fFaQ1QuiFsaoiG8E54XNUSPY29RvBcoD/LCqwoc0RIvCvF14ts0vhJe9zUN0kK8gTnZabPk8DmtbVIWBjV076Ry2AerB4r6u0xg1pR2o210tvRZ7KNuBTiqoO1kDnvoa5iTXdTLhyXskWgAz4DR3kvuzLLDtAG8BM576OSxX2zZykBCq3AXncI0MIei25hFbQqzAUw2/54B7mCvE0GtQMwjM4v9zsTVisD+OMOMY19M+LY/wCNgbdBhwFzZFLB3AEHtJ/AQONPUSAArIc+U+hEGzG3HAnAP8/JXMFuMH5iT5QZwF7gEHHY8/0+F6ZVR7C2RbCvEPJtp0U2YVYZh+s9/F2YNODCoAn3oZjbr+++PUQkamWsDrCsSrjB7LkSL9jB7NkSLBDH+WDpkSAB/AT5+sT1GQO1MAAAAAElFTkSuQmCC"/>
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="/readall">
                                                <h6 class="text-muted font-extrabold">READ</h6>
                                            </a>
                                            {{-- <h6 class="font-extrabold mb-0">183.000</h6> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="stats-icon green">
                                                <a href="/update">
                                                    <i>
                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAADFklEQVRoge3Zy2tVVxTH8c+1dqjEPkSlah2UxPooaClWEW3/hdI/QToIjm3BSSv4Aq1SHPg32AcddlCDDxQRJ9pKIo5s0NBim9ZJYyVxsO7Fm5PzynkUA/cLe3DO3Xet/dvvtQ4DBgwYsJTotGDvPXyArViDoe77v/AQE7iG25hr2H9tNuOsaOhcyTKFM9jWduM+LFFnBN9hVnkByTKLH0VntMJFjGb8thyH8bSGgGR5iq+6thdN3hoZwz4cxLm+96+JUdif89/7uIVx/INXsQ5rsQvrc/57FZ/g94K2l2bMi6Hvjcy6buPSevQPHMU7BXY72NmtO51h6x42Ni2kJ+YL/Jri9D8cx8oKPl7Hacyk2J3Am7UUdOkXklUmldsUitgtdrGk/csqrpl+ioSMy5/ri2UD7qT4+bKu4TwhjzU4h/vYYOHIzGC4jtE8If0bQNPssXDNfF/HYNHUalPMmRRfW6oaK7PYZ8U50zSr8GfC1+mqxsoIaXNkjiX8PJRzgOed7OfFwVWGORwS15qmeB83E++2i51tSdHBb+aPymdZlZf9T42qwhyuJN6NZFV+mYUQl89+3sqq+LILmU48r6hi5Cfz5+fnNRvVKnkj8iTxvLbNhtQlT8hk4nnJChlPPO/SfNalMfLu+tcTz+uxQ4SwTfExTijfQbfknCVZdCy8Uh9drJESjCqfhRmr6uRswtA03qjT6gwOKCemspBtKQ4q30ILKDMylYUQybNkxLa7jsEcisTUErLZwohtSoSlTfO2CKNbEQJHUoze0ayYjSKf1drUIrbpKymGp0SMXZe9yiXAawuB1dJ7bEbE2FV2syGcwrMUu7+IpGD/mmlECDH8EylOe1vzMRHZFR1w7+Kk7PVw14srUf8GkCmkypVjNb4V0yGLSTEV74kkdkf0/rAQuinnvz/jU/FhqMcovsElfFShzZksFxnAtJxt1fKviPtfyfA5qtmcwDxG8IP6H3ouKM7i00yeOZct+BqPlBfwQCz0WunQHm18DN0qTv5hEWMPiYb/LdbOXdywBNM6AwYMGNAczwHpOa8adlEpbQAAAABJRU5ErkJggg=="/>
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="/update">
                                                <h6 class="text-muted font-extrabold">UPDATE</h6>
                                            </a>
                                            {{-- <h6 class="font-extrabold mb-0">80.000</h6> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="stats-icon red">
                                                <a href="/delete">
                                                    <i>
                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAACV0lEQVRoge3Zu2sVQRTA4S+JQXyBmAREQZtIsDIRBC3sBBWxl0QLSwstDFhoY6GIghY2+QdEEMFGUAtRELQ2WNmIj4CCiYVKYhAfxWwgXu7d7MzuvcGwP1hYzsycx545M3PnUlNTU/M/0dUmvd0YxdYG+RRu40/VBnuqVpgxhnOC42sWPSfxFa+qNriqaoUZg7iHiw3yH9jRJpvJjOGDME2qeN4L07GjjOAT9laoc1+mcyRlcEyN7BaysB/ncQX3U4y2YApfcBkbhcDmhOCWpOiqNYIHuIVf8T425Zvg9AU8xgFsWNTegxM4hJcV2TSO61Upi+AGzhbpWHTVeoKHmMX3RKdiWS8U/8EinWM2xGEcFabCBOajXSvGapzCJaEGJ9tkxztsa5dybMfb2EHdCYZm0NdEz3FhVesqIYdNwuoVRUog0+hvkI3ijfAlR0vIZbqnY52qKiODeIHn/j2CtJJvaSGX6Z6JdaqqjMRyLadtAJ9jFaZmpGwg4zltfTpYI41TK5ZnOW19OlQjVUytPJa12GM5ktPWsUBWTEbqQArSsX1kTvhpujZh7FKsw+/MRhQpgVDNXtKMfgnZID2QKvaSZiTtIZQLJDYjswX6JNUHnZ1aeeerBQYsQ0ZWxNRKycieAn2SDox0NiN5x5IF+iUc4Um/+23MyLxwabDwnipPzkhqII2r1l1czd5vlpAnHU/KMKw91zST2NUGvS3pFb7cUIU6dwr10ZsyOHVq/cQZPMUdBS+ac9iMYzid6Y6m7F9vQzicOVKGj3iE1yX11NTU1NTUJPEXtL6SvmlDkxgAAAAASUVORK5CYII="/>
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="/delete">
                                                <h6 class="text-muted font-extrabold">DELETE</h6>
                                            </a>
                                            {{-- <h6 class="font-extrabold mb-0">112</h6> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Profile Visit</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart-profile-visit"></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </section>
            {{-- TABLA --}}
            <section class="section">
                <div class="row" id="table-striped">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Libros actuales</h4>
                            </div>
                            <div class="card-content">                   
                                <!-- table striped -->
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>Título</th>
                                                <th>Autor</th>
                                                <th>Publicación</th>
                                                <th>ISBM</th>
                                                <th>Cantidad</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- <tr>
                                                <td class="text-bold-500">Michael Right</td>
                                                <td>$15/hr</td>
                                                <td class="text-bold-500">UI/UX</td>
                                                <td>Remote</td>
                                                <td>Austin,Taxes</td> 
                                                <td><a href="#"><i
                                                            class="badge-circle badge-circle-light-secondary font-medium-1"
                                                            data-feather="mail"></i></a></td> 
                                                </tr> --}}                                                                            
                                            @foreach ($libros as $libro)
                                                <tr>                                    
                                                    <td>{{ $libro->titulo }}</td>
                                                    <td>{{ $libro->autor }}</td>
                                                    <td>{{ $libro->fecha }}</td>
                                                    <td>{{ $libro->isbn }}</td>
                                                    <td>{{ $libro->cantidad }}</td>  
                                                    <td><a href="/libro/{{ $libro->id }}" class="btn btn-info">Ver detalle</a><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="mail"></i></a></td>
                                                </tr>                                                
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </x-layout_crud>
</x-app-layout>