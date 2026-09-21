@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Featured Card</h5>
            <a href="{{route('featured.list')}}" class="btn btn-secondary">Back</a>
        </div>

        <div class="card-body">
            <form action="{{route('featured.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
<hr>

<div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" name="card1_image"
           class="form-control @error('card1_image') is-invalid @enderror">

    @error('card1_image')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Region</label>
    <input type="text" name="card1_region"
           value="{{old('card1_region')}}"
           class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Place</label>
    <input type="text" name="card1_title"
           value="{{old('card1_title')}}"
           class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">About</label>
    <textarea name="card1_description"
              class="form-control">{{old('card1_description')}}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Best For</label>
    <input type="text" name="card1_best_for"
           value="{{old('card1_best_for')}}"
           class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Button Text</label>
    <input type="text" name="card1_btn_txt"
           value="{{old('card1_btn_txt')}}"
           class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Button Link</label>
    <input type="text" name="card1_btn_link"
           value="{{old('card1_btn_link')}}"
           class="form-control">

    @error('card1_btn_link')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

                <button type="submit" class="btn btn-primary">Save Featured</button>
            </form>
        </div>
    </div>
</div>
@endsection