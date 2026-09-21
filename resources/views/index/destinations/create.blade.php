@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow-sm">

        <div class="card-header">
            <h5 class="mb-0">Add Destination</h5>
        </div>

        <div class="card-body">

            <form action="{{route('destinations.store')}}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <!-- LEFT COLUMN -->
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Region</label>

                            <input type="text"
                                   name="region"
                                   value="{{old('region')}}"
                                   class="form-control">

                            @error('region')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Place</label>

                            <input type="text"
                                   name="title"
                                   value="{{old('title')}}"
                                   class="form-control">

                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Best For</label>

                            <input type="text"
                                   name="best_for"
                                   value="{{old('best_for')}}"
                                   class="form-control">

                            @error('best_for')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">About</label>

                            <textarea name="about"
                                      class="form-control"
                                      rows="4">{{old('about')}}</textarea>

                            @error('about')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                    </div>


                    <!-- RIGHT COLUMN -->
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Image</label>

                            <input type="file"
                                   name="image"
                                   class="form-control">

                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Button Text</label>

                            <input type="text"
                                   name="button_text"
                                   value="{{old('button_text')}}"
                                   class="form-control">

                            @error('button_text')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Button Link</label>

                            <input type="text"
                                   name="button_link"
                                   value="{{old('button_link')}}"
                                   class="form-control">

                            @error('button_link')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-check mt-4">
                            <input type="checkbox"
                                   name="is_active"
                                   value="1"
                                   id="is_active"
                                   class="form-check-input"
                                   {{old('is_active') ? 'checked' : ''}}>

                            <label class="form-check-label" for="is_active">
                                Activate Featured
                            </label>
                        </div>

                    </div>

                </div>

                <hr>

                <button type="submit" class="btn btn-primary">
                    Save Destination
                </button>

                <a href="{{route('destinations.list')}}"
                   class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>

@endsection