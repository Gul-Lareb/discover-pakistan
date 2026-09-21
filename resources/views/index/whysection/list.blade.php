@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow-sm">

        <!-- CARD HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Why Pakistan Section</h5>

            <a href="{{route('whysection.create')}}" class="btn btn-primary">
                Add Section
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

                <table class="table table-bordered table-striped align-middle mb-0">

                    <!-- TABLE HEADER -->
                    <thead class="table-dark">
                        <tr>
                            <th style="width:60px;" class="text-center">ID</th>

                            <th style="width:160px;">Title</th>

                            <th>Sub Title</th>

                            <th style="width:150px;" class="text-center">Card 1</th>

                            <th style="width:150px;" class="text-center">Card 2</th>

                            <th style="width:150px;" class="text-center">Card 3</th>

                            <th style="width:190px;" class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <!-- TABLE BODY -->
                    <tbody>

                        @foreach($whysections as $why)

                        <tr>

                            <!-- ID -->
                            <td class="text-center">
                                {{$why->id}}
                            </td>

                            <!-- TITLE -->
                            <td>
                                {{$why->title}}
                            </td>

                            <!-- SUB TITLE -->
                            <td>
                                {{$why->sub_title}}
                            </td>

                            <!-- CARD 1 -->
                            <td class="text-center">
                                <strong>{{$why->card1_number}}</strong>
                                <br>
                                {{$why->card1_text}}
                            </td>

                            <!-- CARD 2 -->
                            <td class="text-center">
                                <strong>{{$why->card2_number}}</strong>
                                <br>
                                {{$why->card2_text}}
                            </td>

                            <!-- CARD 3 -->
                            <td class="text-center">
                                <strong>{{$why->card3_number}}</strong>
                                <br>
                                {{$why->card3_text}}
                            </td>

                            <!-- ACTIONS -->
                            <td class="text-center">

                                <div class="d-flex justify-content-center gap-2">

                                    <a href="{{route('whysection.edit',$why->id)}}"
                                       class="btn btn-sm btn-outline-primary px-3">

                                        <i class="fa-solid fa-pen-to-square me-1"></i>
                                        Edit

                                    </a>

                                    <form action="{{route('whysection.destroy',$why->id)}}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-sm btn-outline-danger px-3"
                                                onclick="return confirm('Are you sure you want to delete this section?')">

                                            <i class="fa-solid fa-trash-can me-1"></i>
                                            Delete

                                        </button>

                                    </form>

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