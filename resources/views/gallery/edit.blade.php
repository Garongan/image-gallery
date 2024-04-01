@extends('layouts.gallery')

@section('container')
    <section class="py-5">
        <form action="/gallery/{{ $gallery->name }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="row row-cols-1 gap-3">
                {{-- img name --}}
                <div class="col">
                    <?php
                    $image = str_replace('https://drive.google.com/uc?id=', 'https://lh3.googleusercontent.com/d/', $gallery->path);
                    $image = str_replace('&export=media', '=s0', $image);
                    ?>
                    <img class="img-preview img-fluid mb-3 pb-3" src="{{ $image }}">
                    <input type="hidden" name="oldImage" value="{{ $gallery->fileName }}">
                    <input id="image" name="image" class="form-control @error('image') is-invalid @enderror"
                        type="file" onchange="previewImg()"
                        accept="image/png, image/gif, image/jpeg, image/jpg, image/svg+xml" />
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- /img name --}}

                {{-- name image --}}
                <div class="col">
                    <label for="name" class="py-4">Image Name</label>
                    <input id="name" name="name" type="text"
                        class="form-control @error('name') is-invalid @enderror" placeholder="Input image name..."
                        value="{{ $gallery->name }}" />
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- name image end --}}
            </div>
            <div class="mt-3 d-flex gap-2">
                <a href="/gallery" class="btn btn-outline-dark text-uppercase">Back</a>
                <button type="submit" name="submit" class="btn btn-dark text-uppercase">
                    Upload
                </button>
            </div>
        </form>
        {{-- input end --}}
    </section>
@endsection
