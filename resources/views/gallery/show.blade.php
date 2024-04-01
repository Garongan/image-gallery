@extends('layouts.gallery')

@section('container')
    <section class="d-flex justify-content-center my-5">
        <div class="row w-100">
            <div class="col"></div>
            <div class="col col-md-6">
                <div class="card">
                    <?php
                    $image = str_replace('https://drive.google.com/uc?id=', 'https://lh3.googleusercontent.com/d/', $gallery->path);
                    $image = str_replace('&export=media', '=s0', $image);
                    ?>
                    <img src="{{ $image }}" class="card-img-top" alt="{{ $gallery->name }}">
                    <div class="card-body">
                        <p class="card-title mb-0">original name: {{ $gallery->name }}</p>
                        <p class="card-title mb-0">file name: {{ $gallery->fileName }}</p>
                        <p class="card-title mb-0">size: {{ $gallery->size }}</p>
                        <p class="card-title mb-0">path: {{ $gallery->path }}</p>
                        <div
                            class="d-flex flex-column align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                            <p class="mb-0"><i class="fa fa-picture-o mr-2"></i>
                                <span class="font-weight-bold">{{ $gallery->extension }}</span>
                            </p>
                        </div>
                        <a href="/gallery" class="btn btn-primary mt-3">Back</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </section>
@endsection
