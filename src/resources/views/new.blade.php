@extends('header')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="bg-white p-2 mb-4 rounded">
                <div class="row">
                    @include ('message')
                    <form method="POST" action="{{route('saveNew')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-10 offset-1   col-lg-10 offset-lg-1 text-center mt-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" placeholder="Title" >
                                </div>
                            </div>

                            <div class="form-group col-10 offset-1  col-lg-10 offset-lg-1">
                                <textarea type="text" class="form-control" name="description" placeholder="Description"></textarea>
                            </div>


                            <div class="form-group col-10 offset-1  col-lg-10 offset-lg-1">
                                <label for="country_id">Choose county</label>
                                <select name="country_id" class="form-control">
                                    <option ></option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group col-10 offset-1 col-lg-10 offset-lg-1">
                                <input type="text" id="customer_phone" class="form-control" name="phone" value="" size="25">
                                <input type="checkbox" hidden id="phone_mask" checked><label id="descr" for="phone_mask"></label>
                            </div>

                            <div class="form-group col-10 offset-1 col-lg-10 offset-lg-1">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>

                            <div class="form-group col-10 offset-1 col-lg-10 offset-lg-1">
                                <label for="end_date">Enter the end date</label>
                                <input type="date" class="form-control" name="end_date">
                            </div>

                            <div class="form-group col-10 offset-1 col-lg-10 offset-lg-1">
                                <label for="photo">Choose image</label>
                                <input type="file" class="form-control-file " name="photo">
                            </div>

                            <div class="col-10 offset-1 col-lg-10 offset-lg-1 mb-4">
                                <div class="row">
                                    <div class="col-12 col-lg-9 mb-3">
                                        @include ('map')
                                    </div>
                                    <div class="col-12 col-lg-3 text-left">
                                        <input onclick="deleteMarkers();" type=button value="Delete Marker">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-10 offset-1 col-lg-10 offset-lg-1  text-right">
                                <button type="submit" class="btn btn-success btn-lg ">Save</button>
                            </div>


                            <input id="lat" type="hidden" name="latitude" value="">
                            <input id="lon" type="hidden" name="longitude" value="">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>







    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdn.rawgit.com/RobinHerbots/Inputmask/3.2.7/dist/min/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
    <script src="https://cdn.rawgit.com/andr-04/inputmask-multi/1.2.0/js/jquery.inputmask-multi.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/phone.js') }}"></script>
@endsection
