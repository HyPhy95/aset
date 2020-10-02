@extends('layouts.app')

@section('content')
    <h1>{{$car->plate}}</h1>
    <h3>Model: {{$car->model}}</h3>
    <div>
        <h4>Tarikh Diperbaharui: {{$car->renew}}</h4>
        <h4>Tarikh Luput: {{$car->expired}}</h4>
        <h4>Cukai Jalan: RM{{$car->roadtax}}</h4>
        <h4>Premium Dibayar: RM{{$car->prepay}}</h4>
        <h4>Nilai Insurans: RM{{$car->ins}}</h4>
    </div>
    <hr>
    <h6>Written on: {{$car->created_at->format('d-m-Y')}} | Update on: {{$car->updated_at->format('d-m-Y')}}</h6>
    <a href="/car/{{$car->id}}/edit" class="btn btn-default">Update</a>
    <hr>

    <a href="/car/{{$car->id}}/delete" class="btn btn-danger">Delete</a>
    <hr>
    <a href="{{ route('cars.show')}}" class="btn btn-default">Back</a>
@endsection
