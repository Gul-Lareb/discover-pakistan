@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Footer</h5>
            <a href="{{route('footer.list')}}" class="btn btn-secondary">Back</a>
        </div>

        <div class="card-body">

            <form action="{{route('footer.store')}}" method="POST">
                @csrf

                <h5>Social Media Links</h5>
                <hr>

                <div class="mb-3">
                    <label class="form-label">Instagram Link</label>
                    <input type="text" name="instagram_link"
                           value="{{old('instagram_link')}}"
                           class="form-control @error('instagram_link') is-invalid @enderror"
                           placeholder="https://instagram.com/...">

                    @error('instagram_link')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Facebook Link</label>
                    <input type="text" name="facebook_link"
                           value="{{old('facebook_link')}}"
                           class="form-control @error('facebook_link') is-invalid @enderror"
                           placeholder="https://facebook.com/...">

                    @error('facebook_link')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">YouTube Link</label>
                    <input type="text" name="youtube_link"
                           value="{{old('youtube_link')}}"
                           class="form-control @error('youtube_link') is-invalid @enderror"
                           placeholder="https://youtube.com/...">

                    @error('youtube_link')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">LinkedIn Link</label>
                    <input type="text" name="linkedin_link"
                           value="{{old('linkedin_link')}}"
                           class="form-control @error('linkedin_link') is-invalid @enderror"
                           placeholder="https://linkedin.com/...">

                    @error('linkedin_link')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <h5 class="mt-5">Explore Pakistan</h5>
                <hr>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description"
                              class="form-control @error('description') is-invalid @enderror"
                              rows="3">{{old('description','Discover beautiful destinations, rich cultures and helpful travel information across Pakistan.')}}</textarea>

                    @error('description')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <h5 class="mt-5">Bottom Footer</h5>
                <hr>

                <div class="mb-3">
                    <label class="form-label">Tagline</label>
                    <input type="text" name="tagline"
                           value="{{old('tagline','Explore. Experience. Discover Pakistan.')}}"
                           class="form-control @error('tagline') is-invalid @enderror">

                    @error('tagline')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Save Footer</button>

            </form>

        </div>
    </div>
</div>
@endsection