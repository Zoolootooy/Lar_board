@extends('header')

@section('content')
{{--    @dd(Auth::user()->id)--}}

    <div class="row">
        <div class="col-12">
            @include ('message')

            @foreach($data as $post)
                <div class="bg-white p-2 mb-4 rounded">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 offset-md-0 col-lg-12 offset-lg-0 text-justify text-lg-center">
                            <h3><a class="text-dark" href="/post/{{$post->id}}">{{$post->title}}</a></h3>
                        </div>
                        <div class="col-12 col-md-12 offset-md-0 col-lg-12 offset-lg-0 text-center mb-3 mt-3">
                            @if ($post->photo != null)
                                <img class="" src="storage/images/{{$post->photo}}" alt="" width="400px">
                            @else
                                <img class="" src="../storage/default.jpg" alt="" width="400px">
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-justify">
                            <p>
                                @if (strlen($post->description) < 256)
                                    {{$post->description}}
                                @else
                                    {{substr($post->description,0,255)."..."}}
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-right">
                            <small>
                                Date of creation: {{$post->created_at->format('d.m.Y')}}
                            </small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-right">
                            @if((Auth::check()) && ($post->user_id == Auth::user()->id))
                                <a class="text-primary" href="/edit/{{$post->id}}">
                                    Edit
                                </a>
                            @endif
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            {{$data->links()}}
        </div>
    </div>


</div>


@endsection
