@extends('header')



@section('content')
    <div class="row">
        <div class="col-12">
            <div class="bg-white p-2 mb-4 rounded">
                <div class="row">
                    <div class="col-12 text-justify mb-3 mt-4">
                        <h2>{{$data->title}}</h2>
                    </div>

                    <div class="col-12 text-right">
                        <p>Date of creation: {{$data->created_at->format('d.m.Y H:m:s')}}</p>
                    </div>

                    <div class="col-12 text-center mb-4">
                        @if ($data->photo != null)
                            <img class="" src="../storage/images/{{$data->photo}}"  width="100%">
                        @else
                            <img class="" src="../storage/default.jpg"  width="100%">
                        @endif
                    </div>

                    <div class="col-12 text-justify">
                        <p>{{$data->description}}</p>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 text-left">
                                Phone:
                            </div>
                            <div class="col-9 text-left">
                                <p>{{$data->phone}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-3  text-left">
                                Country:
                            </div>
                            <div class="col-9  text-left">
                                <p>{{$country->name}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-3  text-left">
                                Email:
                            </div>
                            <div class="col-9  text-left">
                                <p>{{$data->email}}</p>
                            </div>
                        </div>
                    </div>



                    <input id="lat" type="hidden" name="latitude" value="{{$data->latitude}}">
                    <input id="lon" type="hidden" name="longitude" value="{{$data->longitude}}">
                    <div class="col-12">
                        @include ('map_show')
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
