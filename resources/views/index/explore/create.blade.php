@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Explore More Cards</h5>
            <a href="{{route('explore.list')}}" class="btn btn-secondary">Back</a>
        </div>

        <div class="card-body">

            <form action="{{route('explore.store')}}" method="POST">
                @csrf

                @for($i=1;$i<=3;$i++)

                    <h5 class="{{$i>1?'mt-5':''}}">Card {{$i}}</h5>
                    <hr>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text"
                               name="card{{$i}}_title"
                               value="{{old('card'.$i.'_title')}}"
                               class="form-control @error('card'.$i.'_title') is-invalid @enderror">

                        @error('card'.$i.'_title')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="card{{$i}}_description"
                                  class="form-control @error('card'.$i.'_description') is-invalid @enderror">{{old('card'.$i.'_description')}}</textarea>

                        @error('card'.$i.'_description')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Button Text</label>
                        <input type="text"
                               name="card{{$i}}_button"
                               value="{{old('card'.$i.'_button')}}"
                               class="form-control @error('card'.$i.'_button') is-invalid @enderror">

                        @error('card'.$i.'_button')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Button Link</label>
                        <input type="text"
                               name="card{{$i}}_link"
                               value="{{old('card'.$i.'_link')}}"
                               class="form-control @error('card'.$i.'_link') is-invalid @enderror"
                               placeholder="/culture">

                        @error('card'.$i.'_link')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                @endfor

                <button type="submit" class="btn btn-primary">Save Explore More</button>

            </form>

        </div>
    </div>
</div>
@endsection