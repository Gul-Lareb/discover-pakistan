@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow-sm">

        <!-- CARD HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center">

            <h5 class="mb-0">Footer</h5>

            @if(!$footer)
                <a href="{{route('footer.create')}}" class="btn btn-primary">
                    Add Footer
                </a>
            @endif

        </div>

        <!-- CARD BODY -->
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


            @if($footer)

                <!-- SOCIAL MEDIA TABLE -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped align-middle mb-0">

                        <thead class="table-dark">
                            <tr>
                                <th>Instagram</th>
                                <th>Facebook</th>
                                <th>YouTube</th>
                                <th>LinkedIn</th>

                                <th style="width:120px;" class="text-center">
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>

                                <td>
                                    {{$footer->instagram_link ?: '-'}}
                                </td>

                                <td>
                                    {{$footer->facebook_link ?: '-'}}
                                </td>

                                <td>
                                    {{$footer->youtube_link ?: '-'}}
                                </td>

                                <td>
                                    {{$footer->linkedin_link ?: '-'}}
                                </td>

                                <td class="text-center">

                                    <a href="{{route('footer.edit',$footer->id)}}"
                                       class="btn btn-sm btn-outline-primary px-3">

                                        <i class="fa-solid fa-pen-to-square me-1"></i>
                                        Edit

                                    </a>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- FOOTER CONTENT -->
                <div class="mt-4">

                    <div class="border rounded p-3 mb-3">

                        <h6 class="fw-bold mb-2">
                            Explore Pakistan Description
                        </h6>

                        <p class="mb-0">
                            {{$footer->description}}
                        </p>

                    </div>


                    <div class="border rounded p-3">

                        <h6 class="fw-bold mb-2">
                            Bottom Tagline
                        </h6>

                        <p class="mb-0">
                            {{$footer->tagline}}
                        </p>

                    </div>

                </div>


            @else

                <div class="alert alert-info mb-0">
                    No footer has been created yet.
                    Click <strong>Add Footer</strong> to create it.
                </div>

            @endif

        </div>

    </div>

</div>

@endsection