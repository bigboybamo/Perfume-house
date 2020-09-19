@extends('layouts.layouts')

@section('content')
     <div class="content">
        <h1 class="title m-b-md">Perfume Place</h1>
        <img src="/img/perfnew.jpg" alt="perfume house logo">
        <div class="title m-b-md">
            THE BEST PLACE TO SMELL!
        </div>
        <p class="msg"> {{ session('msg') }} </p>
        <a href="/perfume/create">Submit your favorite Perfume</a><br>
        <a href="/perfume">See a List of All submitted perfumes</a>
    </div>
</div>
@endsection