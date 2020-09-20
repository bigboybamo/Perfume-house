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


                    <tr>

                        <td><a href="/perfume/1">Legend Spirit</a></td>
                        <td>Mont blanc</td>
                        <td>Bamiji</td>

                    </tr>

                    <tr>
                        <td><a href="/perfume/2">Allure Homme Sport Eau Extreme</a></td>
                        <td>Chanel</td>
                        <td>Bamiji</td>

                    </tr>
                </tbody>
            </table>
            <a href="/perfume/create">Submit a new fragrance</a>
            <a href="/">Go to home page</a><br>


        </div>

    </div>

    @endsection