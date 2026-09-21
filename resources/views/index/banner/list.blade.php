@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Banners</h5>
            <a href="{{ route('banner.create') }}" class="btn btn-primary">Add Banner Data</a>
        </div>

        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

             @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center align-middle">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Background Image</th>
                            <th>Button Text</th>
                            <th>Button Link</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($banners as $ban)
                        <tr>
                            <td>{{ $ban->id }}</td>
                            <td>{{ $ban->title }}</td>
                            <td>{{ $ban->sub_title }}</td>

                            <td>
                                @if($ban->bg_img)
                                <img src="{{ asset('assets/images/' . $ban->bg_img) }}" width="70" height="50"
                                    class="rounded object-fit-cover" style="cursor:pointer;" data-bs-toggle="modal"
                                    data-bs-target="#imageModal{{ $ban->id }}" alt="Banner">
                                @else
                                No Image
                                @endif
                            </td>

                            <td>{{ $ban->btn_txt }}</td>
                            <td><a href="{{ $ban->btn_link }}" target="_blank">Destinations</a></td>
                            <td>{!! $ban->status !!}</td>

                            <td>
                                                        <div class="d-flex gap-2">
                            <a href="{{route('banner.edit',$ban->id)}}"
                            class="btn btn-sm btn-outline-primary px-3">
                                <i class="fa-solid fa-pen-to-square me-1"></i> Edit
                            </a>

                            <form action="{{route('banner.destroy',$ban->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-sm btn-outline-danger px-3"
                                        onclick="return confirm('Are you sure you want to delete this banner?')">
                                    <i class="fa-solid fa-trash-can me-1"></i> Delete
                                </button>
                            </form>
                        </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @foreach($banners as $ban)
            @if($ban->bg_img)
            <div class="modal fade" id="imageModal{{ $ban->id }}" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ $ban->bg_img }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body text-center">
                            <img src="{{ asset('assets/images/' . $ban->bg_img) }}" class="img-fluid rounded"
                                alt="Banner">
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

        </div>
    </div>
</div>
@endsection