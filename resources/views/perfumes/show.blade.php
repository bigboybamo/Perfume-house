@extends('layouts.layouts')

@section('content')
<div class="wrapper perfume-details">

    <h1><b>{{$perfume->name}}</b></h1>
    <p class="type"> The Brand of this Fragrance is <strong>{{$perfume->brand}}</strong> </p>
    <p class="base"> The major notes are {{$perfume->notes}} </p>
    <p>This entry was submitted by {{$perfume->Entryname}}</p>
    <p>Why {{$perfume->Entryname}} loves this scent: "<i>{{$perfume->Content}}</i> "</p>

</div>
<form action="/perfume/{{ $perfume->id }}" method="POST">
    @csrf

    @method('DELETE')
    <button>Delete this fragrance</button>
</form>
<a href="/perfume" class="back">
    <- Back to all Perfumes</a> <a href="/">Go to home page
</a><br>

@endsection