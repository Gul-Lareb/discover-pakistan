@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card shadow-sm">

        <!-- CARD HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Featured Cards</h5>

            <a href="{{route('featured.create')}}" class="btn btn-primary">
                Add Featured
            </a>
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

            <div class="table-responsive">

                <table class="table table-bordered align-middle mb-0">

                    <!-- TABLE HEADER -->
                    <thead class="table-dark">
                        <tr>
                            <th style="width:70px;" class="text-center">ID</th>

                            <th>Image</th>

                            <th>Region</th>

                            <th>Place</th>
                            <th>About</th>
                            <th>Button text</th>
                            <th>Button Link</th>
                            
                            <th style="width:120px;" class="text-center">
                                Status
                            </th>

                            <th style="width:190px;" class="text-center">
                                Actions
                            </th>
                        </tr>
                    </thead>

                    <!-- TABLE BODY -->
                    <tbody>

                        @foreach($featureds as $featured)

                        <tr>

                            <!-- ID -->
                            <td class="text-center">
                                {{$featured->id}}
                            </td>

                            <!-- CARD 1 -->
                            <td>
                                {{$featured->card1_title}}
                            </td>

                            <!-- CARD 2 -->
                            <td>
                                {{$featured->card2_title}}
                            </td>

                            <!-- CARD 3 -->
                            <td>
                                {{$featured->card3_title}}
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <!-- STATUS -->
                            <td class="text-center">

                                <span class="badge {{$featured->is_active ? 'bg-success' : 'bg-secondary'}}">
                                    {{$featured->is_active ? 'Active' : 'Inactive'}}
                                </span>

                            </td>

                            <!-- ACTIONS -->
                            <td class="text-center">

                                <div class="d-flex justify-content-center gap-2">

                                    <a href="{{route('featured.edit',$featured->id)}}"
                                       class="btn btn-sm btn-outline-primary px-3">

                                        <i class="fa-solid fa-pen-to-square me-1"></i>
                                        Edit

                                    </a>

                                    <a href="{{route('featured.delete',$featured->id)}}"
                                       class="btn btn-sm btn-outline-danger px-3"
                                       onclick="return confirm('Are you sure you want to delete this featured section?')">

                                        <i class="fa-solid fa-trash-can me-1"></i>
                                        Delete

                                    </a>

                                </div>

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