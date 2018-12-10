@extends('layout.app')
@section('content')
    <h1>{{$data[0]['phone_name']}}</H1> 
        <br>
        <table class="table table-striped">
            <tr>
                <th scope="row">Phone Name</th><td>{{$data[0]['phone_name']}} </td>
            </tr>
            <tr>
                <th scope="row">Phone Brand</th><td>{{$data[0]['phone_brand']}} </td>
            </tr>
            <tr>
                <th scope="row">Phone Price</th><td>{{$data[0]['phone_price']}} </td>
            </tr>
            <tr>
                <th scope="row">Phone Description</th><td>{{$data[0]['phone_description']}} </td>
            </tr>
            <tr>
                <th scope="row">Phone Image</td><th><img src="/img/{{$data[0]['image']}}" height="32px" width="32px"/> </td>
            </tr>
        </table>
@endsection