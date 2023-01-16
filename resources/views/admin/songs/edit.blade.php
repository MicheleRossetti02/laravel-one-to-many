@extends('layouts.app')

@section('content')

<section class="py-5">

    <div class="container">
        <form action="{{route('admin.songs.update',$song->slug)}}" method="post" class="card p-3">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="insert a title" aria-describedby="helpId" value="{{old('title',$song)}}">
                <small id="helpId" class="text-muted">insert a song title</small>
            </div>
            <div class="mb-3">
                <label for="artist" class="form-label">artist</label>
                <input type="text" name="artist" id="artist" class="form-control" placeholder="insert a artist" aria-describedby="helpId" value="{{old('artist',$song)}}">
                <small id="helpId" class="text-muted">insert a song description</small>
            </div>
            <div class="mb-3">
                <label for="album" class="form-label">album</label>
                <input type="text" name="album" id="album" class="form-control" placeholder="insert a album " aria-describedby="helpId" value="{{old('album',$song)}}">
                <small id="helpId" class="text-muted">insert a song album url</small>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</section>


@endsection