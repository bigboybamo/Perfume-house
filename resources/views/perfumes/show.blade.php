@extends('layouts.layouts')

@section('content')
<div class="wrapper perfume-details">

    <h1>Perfume with this ID is {{$perfume->name}}</h1>
    <p class="type"> The Brand of this Fragrance is {{$perfume->brand}} </p>
    <p class="base"> The major notes are {{$perfume->notes}} </p>

</div>
<form action="/perfume/{{ $perfume->id }}" method="POST">
@csrf

@method('DELETE')
<button>Delete this fragrance</button>
</form>
<a href="/perfume" class="back"> <- Back to all Perfumes</a>

@endsection