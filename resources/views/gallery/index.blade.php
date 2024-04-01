@extends('layouts.gallery')

@section('container')
    <section class="py-5">
        <div class="table-responsive">
            <table class="table table-hover">
                <tbody id="images">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Size</th>
                            <th scope="col">Extension</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Product Action</th>
                        </tr>
                    </thead>
                    @foreach ($images as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <!-- name -->
                            <td>
                                {{ $item->name }}
                            </td>
                            <!-- /name -->

                            <!-- img thumbnail -->
                            <td>
                                <?php
                                $image = str_replace('https://drive.google.com/uc?id=', 'https://lh3.googleusercontent.com/d/', $item->path);
                                $image = str_replace('&export=media', '=s0', $image);
                                ?>
                                <img src="{{ $image }}" class="img-thumbnail p-0" alt="{{ $item->name }}"
                                    style="max-height: 50px">
                            </td>
                            <!-- /img thumbnail -->

                            {{-- size --}}
                            <td>
                                {{ $item->size }}
                            </td>
                            {{-- /size --}}

                            {{-- extension --}}
                            <td>
                                {{ $item->extension }}
                            </td>
                            {{-- /extension --}}

                            {{-- created_at --}}
                            <td>
                                {{ $item->created_at }}
                            </td>
                            {{-- /created_at --}}

                            {{-- updated_at --}}
                            <td>
                                {{ $item->updated_at }}
                            </td>
                            {{-- /updated_at --}}

                            {{-- action --}}

                            <td>
                                {{-- view --}}
                                <a href="/gallery/{{ $item->name }}" class="badge bg-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 32 32">
                                        <path fill="currentColor"
                                            d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z" />
                                        <path fill="currentColor"
                                            d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
                                    </svg>
                                </a>
                                {{-- view end --}}

                                {{-- edit --}}
                                <form action="/gallery/{{ $item->name }}/edit" method="get" class="d-inline">
                                    @csrf
                                    <button class="btn badge bg-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M6 22q-.825 0-1.413-.588T4 20V4q0-.825.588-1.413T6 2h8l6 6v4h-2V9h-5V4H6v16h6v2H6Zm0-2V4v16Zm12.3-5.475l1.075 1.075l-3.875 3.85v1.05h1.05l3.875-3.85l1.05 1.05l-4.3 4.3H14v-3.175l4.3-4.3Zm3.175 3.175L18.3 14.525l1.45-1.45q.275-.275.7-.275t.7.275l1.775 1.775q.275.275.275.7t-.275.7l-1.45 1.45Z" />
                                        </svg>
                                    </button>
                                </form>
                                {{-- edit end --}}

                                {{-- delete --}}
                                <form action="/gallery/{{ $item->name }}" method="post" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn badge bg-danger border-0"
                                        onclick="return confirm('Are you sure to delete this image?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="m9.4 16.5l2.6-2.6l2.6 2.6l1.4-1.4l-2.6-2.6L16 9.9l-1.4-1.4l-2.6 2.6l-2.6-2.6L8 9.9l2.6 2.6L8 15.1l1.4 1.4ZM7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7ZM17 6H7v13h10V6ZM7 6v13V6Z" />
                                        </svg>
                                    </button>
                                </form>
                                {{-- delete end --}}

                            </td>
                            {{-- /action --}}

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $images->links() }}
            </div>
        </div>
    </section>
@endsection
