    @extends('layouts.layouts')

    @section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Perfume List
            </div>
            <table border="1">
                <tbody>
                    <tr>
                        <th>Perfume Name</th>
                        <th>Brand</th>
                        <th>Submitted by</th>
                    </tr>

                    @foreach($perfumes as $perfume)
                    <tr>

                        <td><a href="/perfume/{{$perfume->id}}">{{$perfume->name}}</a></td>
                        <td>{{$perfume->brand}}</td>
                        <td>{{$perfume->Entryname}}</td>
                        @endforeach
                    </tr>

            </table>
            <a href="/perfume/create">Submit a new fragrance</a>
            <a href="/">Go to home page</a><br>


        </div>

    </div>

    @endsection