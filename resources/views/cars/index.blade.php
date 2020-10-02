@extends('layouts.app')

@section('content')
    <h1>Cars</h1>
    @if (count($cars) > 0)
        @foreach ($cars as $car)
            <div class="well">
                <h3><a href="/car/{{$car->id}}">{{$car->plate}}</a></h3>
                <h4>Model: {{$car->model}}</h4>
                <hr>
                <h6>Written on: {{$car->created_at->format('d-m-Y')}} | Update on: {{$car->updated_at->format('d-m-Y')}}</h6>
            </div>
        @endforeach
        {{$cars->links()}}
    @else
        <p>No cars found</p>
    @endif
@endsection
