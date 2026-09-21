@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Banner</h5>
            <a href="{{ route('banner.list') }}" class="btn btn-secondary">Back</a>
        </div>

        <div class="card-body">
            <form action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                       value="{{ old('title', $banner->title) }}">
                    @error('title')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Sub Title</label>
                    <input type="text" class="form-control @error('sub_title') is-invalid @enderror" name="sub_title"
                       value="{{ old('sub_title', $banner->sub_title)}}">
                    @error('sub_title')$
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Background Image</label>

                    <div class="mb-2">
                        <img id="imagePreview" src="{{ asset('assets/images/'.$banner->bg_img) }}" width="70"
                            height="50" class="rounded object-fit-cover" style="cursor:pointer;" data-bs-toggle="modal"
                            data-bs-target="#imageModal">
                    </div>

                    <input type="file" class="form-control @error('bg_img') is-invalid @enderror" name="bg_img"
                        id="bg_img" accept="image/*">

                    @error('bg_img')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Button Text</label>
                    <input type="text" class="form-control @error('btn_txt') is-invalid @enderror" name="btn_txt"
                       value="{{ $errors->has('btn_txt') ? '' : $banner->btn_txt }}">
                    @error('btn_txt')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Button Link</label>
                    <input type="text" class="form-control @error('btn_link') is-invalid @enderror" name="btn_link"
                        value="{{ $errors->has('btn_link') ? '' : $banner->btn_link }}">
                    @error('btn_link')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                 <div class="form-check">
                <input class="form-check-input" type="checkbox" 
                name="is_active" value="1"
                {{ $banner->is_active ? ' disabled' : '' }}>
                              
                <label class="form-check-label">
                    Activate
                </label>
                @if($banner->is_active)
                <small class="text-muted">
                    This banner is currently active. To deactivate it, please activate another banner first.
                </small>
                @endif
                </div>

                <button type="submit" class="btn btn-primary">Update Banner</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Image Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <img id="modalImage" src="{{ asset('assets/images/'.$banner->bg_img) }}" class="img-fluid rounded">
            </div>

        </div>
    </div>
</div>


@endsection