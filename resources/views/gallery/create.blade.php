@extends('gallery.layout')

@section('container')
    <section class="py-5">
        <form action="/gallery" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row row-cols-1 gap-3">
                {{-- img name --}}
                <div class="col">
                    <div class="tm-product-img-dummy" id="dummyImage">
                        <div class="tm-upload-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                                <g fill="none">
                                    <path fill="currentColor"
                                        d="M44 24a2 2 0 1 0-4 0h4ZM24 8a2 2 0 1 0 0-4v4Zm15 32H9v4h30v-4ZM8 39V9H4v30h4Zm32-15v15h4V24h-4ZM9 8h15V4H9v4Zm0 32a1 1 0 0 1-1-1H4a5 5 0 0 0 5 5v-4Zm30 4a5 5 0 0 0 5-5h-4a1 1 0 0 1-1 1v4ZM8 9a1 1 0 0 1 1-1V4a5 5 0 0 0-5 5h4Z" />
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="4"
                                        d="m6 35l10.693-9.802a2 2 0 0 1 2.653-.044L32 36m-4-5l4.773-4.773a2 2 0 0 1 2.615-.186L42 31m-5-13V6m-5 5l5-5l5 5" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img class="img-preview img-fluid mb-3 pb-3">
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
                        class="form-control @error('name') is-invalid @enderror" placeholder="Input image name..." />
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- name image end --}}
            </div>
            <div class="mt-3">
                <a href="/gallery" class="btn btn-outline-dark text-uppercase">Back</a>
                <button type="submit" name="submit" class="btn btn-dark text-uppercase">
                    Upload
                </button>
            </div>
        </form>
        {{-- input end --}}
    </section>
    <script src="{{ asset('assets/js/script.js') }}"></script>
@endsection
