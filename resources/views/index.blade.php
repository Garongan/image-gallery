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

    {{-- bootstrap js --}}
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="px-lg-5">

            <!-- header -->
            <header class="navbar mt-4">
                <a class="navbar-brand" href="/">
                    <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo"
                        width="30" height="24" class="d-inline-block align-text-top">
                    Bootstrap
                </a>

                @guest
                    <div class="navbar-nav">
                        <div class="nav-item text-nowrap">
                            <a href="/login" class="btn btn-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                                    <path fill-rule="evenodd"
                                        d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                </svg>
                                Login
                            </a>
                        </div>
                    </div>
                @endguest

                {{-- auth view --}}
                @auth
                    Hello {{ auth()->user()->name }}
                    {{-- user panel start --}}
                    <aside class="">
                        <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                            </svg>
                        </button>

                        <div class="offcanvas offcanvas-end w-auto" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel">Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="row row-cols-1 gap-3">
                                    <div class="col">
                                        <a href="/gallery" class="btn btn-dark w-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                <path
                                                    d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2M14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1M2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1z" />
                                            </svg>
                                            My gallery
                                        </a>
                                    </div>
                                    <div class="col">
                                        <form action="/gallery" method="post">
                                            <button type="submit" class="btn btn-dark w-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708z" />
                                                    <path
                                                        d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                                                </svg>
                                                Upload
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col">
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button class="btn btn-dark w-100" type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                                </svg>
                                                Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    {{-- user panel end --}}
                @endauth
                {{-- auth view end --}}

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
