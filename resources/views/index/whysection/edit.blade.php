@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Why Pakistan Section</h5>

            <a href="{{ route('whysection.index') }}" class="btn btn-secondary">
                Back
            </a>
        </div>

        <div class="card-body">

            <form action="{{ route('whysection.update', $why->id) }}" method="POST">
                @csrf
                @method('PUT')


                <div class="mb-3">
                    <label class="form-label">Title</label>

                    <input type="text"
                    name="title"
                    value="{{ old('title', $why->title) }}"
                    class="form-control @error('title') is-invalid @enderror">

                    @error('title')
                    <span class="invalid-feedback d-block">
                        {{ $message }}
                    </span>
                    @enderror
                </div>



                <div class="mb-3">
                    <label class="form-label">Sub Title</label>

                    <textarea name="sub_title"
                    class="form-control @error('sub_title') is-invalid @enderror">{{ old('sub_title', $why->sub_title) }}</textarea>

                    @error('sub_title')
                    <span class="invalid-feedback d-block">
                        {{ $message }}
                    </span>
                    @enderror

                </div>



                <div class="row">


                    <div class="col-md-6 mb-3">
                        <label class="form-label">Card 1 Number</label>

                        <input type="text"
                        name="card1_number"
                        value="{{ old('card1_number', $why->card1_number) }}"
                        class="form-control">
                    </div>


                    <div class="col-md-6 mb-3">
                        <label class="form-label">Card 1 Text</label>

                        <input type="text"
                        name="card1_text"
                        value="{{ old('card1_text', $why->card1_text) }}"
                        class="form-control">
                    </div>



                    <div class="col-md-6 mb-3">
                        <label class="form-label">Card 2 Number</label>

                        <input type="text"
                        name="card2_number"
                        value="{{ old('card2_number', $why->card2_number) }}"
                        class="form-control">
                    </div>


                    <div class="col-md-6 mb-3">
                        <label class="form-label">Card 2 Text</label>

                        <input type="text"
                        name="card2_text"
                        value="{{ old('card2_text', $why->card2_text) }}"
                        class="form-control">
                    </div>



                    <div class="col-md-6 mb-3">
                        <label class="form-label">Card 3 Number</label>

                        <input type="text"
                        name="card3_number"
                        value="{{ old('card3_number', $why->card3_number) }}"
                        class="form-control">
                    </div>


                    <div class="col-md-6 mb-3">
                        <label class="form-label">Card 3 Text</label>

                        <input type="text"
                        name="card3_text"
                        value="{{ old('card3_text', $why->card3_text) }}"
                        class="form-control">
                    </div>


                </div>


                <button type="submit" class="btn btn-primary">
                    Update Section
                </button>


            </form>

        </div>

    </div>

</div>

@endsection