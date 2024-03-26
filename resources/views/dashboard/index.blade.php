<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery - {{ $title }}</title>

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    {{-- my style css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="px-lg-5">

            <!-- header -->
            <header class="navbar">
                <a class="navbar-brand btn btn-dark text-white" href="/">
                    <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo"
                        width="30" height="24" class="d-inline-block align-text-top">
                    Bootstrap
                </a>
                <button class="navbar-toggler position-absolute d-md-none collapsed" style="top: 0.25rem;right: 1rem;"
                    type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @auth
                    Hello {{ Auth::user()->name }}
                    <div class="navbar-nav">
                        <div class="nav-item text-nowrap">
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="btn btn-dark d-flex align-items-center" type="submit">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M6 2h9a2 2 0 0 1 2 2v2h-2V4H6v16h9v-2h2v2a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z" />
                                            <path fill="currentColor"
                                                d="M16.09 15.59L17.5 17l5-5l-5-5l-1.41 1.41L18.67 11H9v2h9.67z" />
                                        </svg></span>
                                    <span>Logout</span>
                                </button>
                            </form>
                        @endauth
                    </div>
                </div>
            </header>

            <!-- For demo purpose -->
            <div class="row py-5">
                <div class="col-lg-12 mx-auto">
                    <div class="text-white p-5 shadow-sm rounded banner">
                        <h1 class="display-4">Bootstrap 4 photo gallery</h1>
                        <p class="lead">Bootstrap photogallery snippet.</p>
                        <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-reset">
                                Bootstrapious</a>, Images by <a href="https://unsplash.com"
                                class="text-reset">Unsplash</a>.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End -->

            <div class="row">
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img
                            src="https://bootstrapious.com/i/snippets/sn-gallery/img-1.jpg" alt=""
                            class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Red paint cup</a></h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">JPG</span></p>
                                <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img
                            src="https://bootstrapious.com/i/snippets/sn-gallery/img-2.jpg" alt=""
                            class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Blorange</a></h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">PNG</span></p>
                                <div class="badge badge-primary px-3 rounded-pill font-weight-normal">Trend</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img
                            src="https://bootstrapious.com/i/snippets/sn-gallery/img-3.jpg" alt=""
                            class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">And She Realized</a></h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">JPG</span></p>
                                <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">
                                    Featured</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img
                            src="https://bootstrapious.com/i/snippets/sn-gallery/img-4.jpg" alt=""
                            class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">DOSE Juice</a></h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">JPEG</span></p>
                                <div class="badge badge-success px-3 rounded-pill font-weight-normal">Hot</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img
                            src="https://bootstrapious.com/i/snippets/sn-gallery/img-5.jpg" alt=""
                            class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Pineapple</a></h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">PNG</span></p>
                                <div class="badge badge-primary px-3 rounded-pill font-weight-normal">New</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img
                            src="https://bootstrapious.com/i/snippets/sn-gallery/img-6.jpg" alt=""
                            class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Yellow banana</a></h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">JPG</span></p>
                                <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">
                                    Featured</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img
                            src="https://bootstrapious.com/i/snippets/sn-gallery/img-7.jpg" alt=""
                            class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Teal Gameboy</a></h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">JPEG</span></p>
                                <div class="badge badge-info px-3 rounded-pill font-weight-normal">Hot</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img
                            src="https://bootstrapious.com/i/snippets/sn-gallery/img-8.jpg" alt=""
                            class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Color in Guatemala.</a></h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">PNG</span></p>
                                <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">
                                    Featured</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img
                            src="https://bootstrapious.com/i/snippets/sn-gallery/img-1.jpg" alt=""
                            class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Red paint cup</a></h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">JPG</span></p>
                                <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img
                            src="https://bootstrapious.com/i/snippets/sn-gallery/img-2.jpg" alt=""
                            class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">PNG</span></p>
                                <div class="badge badge-primary px-3 rounded-pill font-weight-normal">Trend</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img
                            src="https://bootstrapious.com/i/snippets/sn-gallery/img-3.jpg" alt=""
                            class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">JPG</span></p>
                                <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">
                                    Featured</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img
                            src="https://bootstrapious.com/i/snippets/sn-gallery/img-4.jpg" alt=""
                            class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">JPEG</span></p>
                                <div class="badge badge-success px-3 rounded-pill font-weight-normal">Hot</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

            </div>
            <div class="py-5 text-right"><a href="#" class="btn btn-dark px-5 py-3 text-uppercase">Show me
                    more</a></div>
        </div>
    </div>
</body>

</html>
