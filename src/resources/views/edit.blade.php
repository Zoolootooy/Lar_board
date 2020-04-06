@extends('header')


@section('content')

    @include ('message')
    <form method="POST" action="{{route('saveEdited')}}"  enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-12">
                <div class=" bg-white p-2 pt-4 mb-4 rounded">
                    <div class="row">
                        <div class="form-group col-10 offset-1">
                            <input type="text" class="form-control" name="title" placeholder="Title" value="{{$post->title}}">
                        </div>
                        <div class="form-group col-10 offset-1">
                            <textarea type="text" class="form-control" name="description" placeholder="Description">{{$post->description}}</textarea>
                        </div>


                        <div class="form-group col-10 offset-1">
                            <label for="country_id">Choose county</label>
                            <select name="country_id" class="form-control">

                                @foreach($countries as $country)
                                    @if ($country->id == $post->country_id)
                                        <option selected value="{{$country->id}}">{{$country->name}}</option>
                                    @else
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endif

                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-10 offset-1">
                            <input type="text" id="customer_phone" class="form-control" name="phone" value="{{$post->phone}}" size="25">
                            <input type="checkbox" hidden id="phone_mask" checked><label id="descr" for="phone_mask"></label>
                        </div>

                        <div class="form-group col-10 offset-1">
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{$post->email}}">
                        </div>

                        <div class="form-group col-10 offset-1">
                            <label for="end_date">Enter the end date</label>
                            <input type="date" class="form-control" name="end_date" value="<?=\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->end_date)->format('Y-m-d')?>">
                        </div>

                        <div class="form-group col-10 offset-1">
                            @if ($post->photo != null)
                                <img src="../storage/images/{{$post->photo}}" alt="" width="300px">
                                <br>
                                <input type="hidden" name="old_photo" value="{{$post->photo}}">
                                <input type="hidden" name="delete" value="0">
                                <input type="checkbox" name="delete" value="1">Delete and leave post without photo<br>
                            @else
                                You haven't uploaded photo now
                            @endif
                            <br>
                            <label for="photo">Choose image</label>
                            <input type="file" class="form-control-file" name="photo">
                        </div>

                        <div class="col-10 offset-1">
                            <div class="row">
                                <div class="col-9">
                                    @include ('map')
                                </div>
                                <div class="col-3 text-right">
                                    <input onclick="deleteMarkers();" type=button value="Delete Marker">
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-10 offset-1 text-right">

                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                        <input type="hidden" name="id" value="{{$post->id}}">





                        <input id="lat" type="hidden" name="latitude" value="{{$post->latitude}}">
                        <input id="lon" type="hidden" name="longitude" value="{{$post->longitude}}">
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdn.rawgit.com/RobinHerbots/Inputmask/3.2.7/dist/min/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
    <script src="https://cdn.rawgit.com/andr-04/inputmask-multi/1.2.0/js/jquery.inputmask-multi.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/phone.js') }}"></script>

@endsection
