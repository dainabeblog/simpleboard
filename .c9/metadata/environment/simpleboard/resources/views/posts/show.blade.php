{"filter":false,"title":"show.blade.php","tooltip":"/simpleboard/resources/views/posts/show.blade.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":0,"column":0},"end":{"row":3,"column":0},"action":"remove","lines":["<h1>Posts</h1> ","<a href=\"/posts/create\">New Post</a>","",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":5,"column":25},"action":"insert","lines":["    @if (session('message'))","        {{ session('message') }}","    @endif","","    {{ $post->title }}","    {{ $post->content }} "]}],[{"start":{"row":5,"column":25},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":6,"column":4},"end":{"row":7,"column":0},"action":"insert","lines":["    <a href=\"/posts/{{ $post->id }}/edit\">Edit</a>",""],"id":4}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"remove","lines":["    "],"id":5}],[{"start":{"row":0,"column":0},"end":{"row":7,"column":0},"action":"remove","lines":["    @if (session('message'))","        {{ session('message') }}","    @endif","","    {{ $post->title }}","    {{ $post->content }} ","    <a href=\"/posts/{{ $post->id }}/edit\">Edit</a>",""],"id":6}],[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"insert","lines":["@extends('layouts.layouts')","","@section('title', 'Simple Board')","@section('content')","","","@endsection"],"id":7}],[{"start":{"row":4,"column":0},"end":{"row":11,"column":0},"action":"insert","lines":["    @if (session('message'))","        {{ session('message') }}","    @endif","","    {{ $post->title }}","    {{ $post->content }} ","    <a href=\"/posts/{{ $post->id }}/edit\">Edit</a>",""],"id":8}],[{"start":{"row":10,"column":50},"end":{"row":11,"column":0},"action":"remove","lines":["",""],"id":9}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":12,"column":11},"end":{"row":12,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1659264428201,"hash":"3840ae8d24e52b978d1448f1edcb64e5f9622b97"}