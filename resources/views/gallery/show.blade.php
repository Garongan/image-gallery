@extends('layouts.gallery')

@section('container')
    <section class="d-flex justify-content-center my-5">
        <div class="card w-100">
            <img src="{{ asset('storage/' . $gallery->path) }}" class="card-img-top" alt="{{ $gallery->name }}">
            <div class="card-body">
                <h5 class="card-title">Image Name: <span class="fw-normal">{{ $gallery->name }}</span></h5>
                <a href="/gallery" class="btn btn-primary">Back</a>
            </div>
        </div>
    </section>
@endsection
