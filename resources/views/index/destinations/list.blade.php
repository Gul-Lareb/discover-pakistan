@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow-sm">

        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Destinations</h5>

            <a href="{{route('destinations.create')}}" class="btn btn-primary">
                Add Destination
            </a>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif

            <div class="table-responsive">

                <table class="table table-bordered table-striped align-middle mb-0">

                    <thead class="table-dark">
                        <tr>
                            <th>Image</th>
                            <th>Region</th>
                            <th>Place</th>
                            <th>About</th>
                            <th>Button Text</th>
                            <th>Button Link</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($destinations as $destination)

                        <tr>

                            <td>
                                <img src="{{asset('assets/images/'.$destination->image)}}"
                                     width="100">
                            </td>

                            <td>{{$destination->region}}</td>

                            <td>{{$destination->title}}</td>

                            <td>{{$destination->about}}</td>

                            <td>{{$destination->button_text}}</td>

                            <td>{{$destination->button_link}}</td>

                            <td>
                                <a href="{{route('destinations.edit',$destination->id)}}"
                                   class="btn btn-sm btn-outline-primary">
                                    Edit
                                </a>

                                <a href="{{route('destinations.delete',$destination->id)}}"
                                   class="btn btn-sm btn-outline-danger"
                                   onclick="return confirm('Are you sure you want to delete this destination?')">
                                    Delete
                                </a>
                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection