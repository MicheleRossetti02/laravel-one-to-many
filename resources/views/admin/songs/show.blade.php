@extends('layouts.app')
@section('content')

<h1>
    {{$song->title}}
</h1>
<div class="content">
    l'album che stai ascoltando è di
    {{$song->artist}}
    è prende il nome di
    {{$song->album}}


</div>
@endsection