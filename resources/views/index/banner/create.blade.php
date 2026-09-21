@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Banner</h5>
            <a href="{{ route('banner.list') }}" class="btn btn-secondary">Back</a>
        </div>

        <div class="card-body">
            <form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" value="{{ old('title') }}"
                        class="form-control @error('title') is-invalid @enderror" name="title">
                    @error('title')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Sub Title</label>
                    <input type="text" value="{{ old('sub_title') }}"
                        class="form-control @error('sub_title') is-invalid @enderror" name="sub_title">
                    @error('sub_title')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Background Image</label>
                    <input type="file" class="form-control" name="bg_img">

                    @error('bg_img')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Button Text</label>
                    <input type="text" value="{{ old('btn_txt') }}"
                        class="form-control @error('btn_txt') is-invalid @enderror" name="btn_txt">
                    @error('btn_txt')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Button Link</label>
                    <input type="text" value="{{ old('btn_link') }}"
                        class="form-control @error('btn_link') is-invalid @enderror" name="btn_link">
                    @error('btn_link')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Save Banner</button>
            </form>
        </div>
    </div>
</div>
@endsection