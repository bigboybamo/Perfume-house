    @extends('layouts.layouts')

    @section('content')
    <div class="flex-center position-ref full-height">


        <div class="content">
            <div class="title m-b-md">
                Perfume List

            </div>

            @foreach($perfumes as $perfume)
            <div>

                <a href="/perfume/{{$perfume->id}}">{{$perfume->name}}</a> - {{$perfume->brand}}-{{$perfume->notes}}
            </div>


            @endforeach
            <a href="/">Go to home page</a>

        </div>

    </div>

    @endsection