<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Country;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Location;

class PostController extends Controller
{
    public function index(){
        $posts = Post::paginate(15);

        return response()->view('welcome', ['data' => $posts]);
    }

    public function showPost($id){
        $post = new Post;
        $post = $post->findOrFail($id);

        $country = new Country;
        $country = $country->find($post->country_id);
        return response()->view('post', ['data' => $post, 'country' => $country]);
    }

    public function showCreateForm(){
        if (Auth::check()){
            return response()->view('new', ['countries' => Country::all()]);
        }
        else{
            abort(404);
        }
    }

    public function showEditForm($id){
        $post = new Post;
        $post = $post->findOrFail($id);
        if ((Auth::check()) && (Auth::user()->id == $post->user_id)){
//            dd($post);
            return response()->view('edit',['post' => $post,'countries' => Country::all()]);
        }
        else {
            abort(404);
        }
    }

    public function MAP(){
        return response()->view('map');
    }


    public function saveNew(PostRequest $req){
        $post = new Post();
        $post->title = $req->input('title');
        $post->description = $req->input('description');
        $post->country_id = $req->input('country_id');
        $post->phone = $req->input('phone');
        $post->email = $req->input('email');
        $post->end_date = $req->input('end_date');
        $post->user_id = Auth::user()->id;

        if ($req->photo != null){
            $image = $req->file('photo')->store('public/images');

            $filename = explode('/', $image)[2];
            $post->photo = $filename;
        }
        else {
            $post->photo = null;
        }

        $post->save();
        return redirect()->route('main')->with('success', 'The post was added.');
    }

    public function saveEdited(PostRequest $req){
        $post = new Post();
        $post = $post->find($req->id);
        $post->title = $req->input('title');
        $post->description = $req->input('description');
        $post->country_id = $req->input('country_id');
        $post->phone = $req->input('phone');
        $post->email = $req->input('email');
        $post->end_date = $req->input('end_date');
        $post->user_id = Auth::user()->id;
        $post->latitude = $req->input('latitude');
        $post->longitude = $req->input('longitude');

        $delete = $req->input('delete');

        if ($req->photo != null){ //save new photo
            $image = $req->file('photo')->store('public/images');
            $filename = explode('/', $image)[2];
            $post->photo = $filename;
        }
        else {
            if($delete == "0"){ //save old photo

            }
            else { //delete photo
                Storage::delete('public/images/'. $req->old_photo);
                $post->photo = null;
            }
        }

        $post->save();
        return redirect()->route('main')->with('success', 'The post was updated.');
    }


}
