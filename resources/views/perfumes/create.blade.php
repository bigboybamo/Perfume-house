@extends('layouts.layouts')

@section('content')
<div class="wrapper create-perfume">
    <h1>Submit a new perfume</h1>
    <form action="/perfume" method="POST">
    @csrf
        <label for="name">Perfume Name: </label>
        <input type="text" id="name" name="name"><br>
        <label for="brand">Perfume brand:</label>
        <input type="text" id="brand" name="brand"><br>
        <label for="notes">Notes(3 max):</label>
        <input type="text" id="notes" name="notes" placeholder="list 3 main notes "><br>
        <label for="user-name">Your Name:</label>
        <input type="text" id="user-name" name="user-name"><br>
        <label for="content">Why do you love this fragrance:</label>
        <input type="text" id="content" name="content"><br>
        <label for="price">How much did you get this perfume($):</label>
        <input type="number" id="price" name="price"><br>
        <input type="submit" value="Submit Perfume"><br>
    </form>
</div>

@endsection