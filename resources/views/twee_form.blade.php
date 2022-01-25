@extends('layouts.master')

@section('title', 'formulier')

@section('content')
<div>
    <form action="{{route('twee_post')}}" method="post">
        @csrf
        <input type="text" name="naam" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><br>
        <input type="text" name="stad" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><br>
        <input type="submit" value="bewaar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
    </form>
</div>
@endsection
