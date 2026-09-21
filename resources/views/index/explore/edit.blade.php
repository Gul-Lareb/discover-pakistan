@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Explore More Cards</h5>
            <a href="{{route('explore.list')}}" class="btn btn-secondary">Back</a>
        </div>

        <div class="card-body">

            <form action="{{route('explore.update',$explore->id)}}" method="POST">
                @csrf

                @for($i=1;$i<=3;$i++)

                    <h5 class="{{$i>1?'mt-5':''}}">Card {{$i}}</h5>
                    <hr>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text"
                               name="card{{$i}}_title"
                               value="{{old('card'.$i.'_title',data_get($explore,'card'.$i.'_title'))}}"
                               class="form-control @error('card'.$i.'_title') is-invalid @enderror">

                        @error('card'.$i.'_title')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="card{{$i}}_description"
                                  class="form-control @error('card'.$i.'_description') is-invalid @enderror">{{old('card'.$i.'_description',data_get($explore,'card'.$i.'_description'))}}</textarea>

                        @error('card'.$i.'_description')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Button Text</label>
                        <input type="text"
                               name="card{{$i}}_button"
                               value="{{old('card'.$i.'_button',data_get($explore,'card'.$i.'_button'))}}"
                               class="form-control @error('card'.$i.'_button') is-invalid @enderror">

                        @error('card'.$i.'_button')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Button Link</label>
                        <input type="text"
                               name="card{{$i}}_link"
                               value="{{old('card'.$i.'_link',data_get($explore,'card'.$i.'_link'))}}"
                               class="form-control @error('card'.$i.'_link') is-invalid @enderror">

                        @error('card'.$i.'_link')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                @endfor

                <div class="form-check mb-3">
                    <input type="checkbox"
                           name="is_active"
                           value="1"
                           class="form-check-input"
                           {{$explore->is_active?'checked':''}}>

                    <label class="form-check-label">Active</label>
                </div>

                <button type="submit" class="btn btn-primary">Update Explore More</button>

            </form>

        </div>
    </div>
</div>
@endsection