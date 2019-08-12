@extends('layouts.app')

@section('content')

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Peliculas</th>
        <th scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($peliculas as $pelicula)
      <tr>
        <td>{{$loop->index + 1}}</td>
        <td>{{$pelicula->pelicula}}</td>
        <td>

        <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="btn btn-primary"> Modify </a>

        </td>
    @endforeach
    </tr>
    </tbody>
   </table>

   <div class="row">
      {{ $peliculas->links() }}
   
    <div class="text-center ml-5">
      <a href="{{ route('peliculas.create') }}" class="btn btn-primary">Add Pelicula</a>
    </div>
  </div>
@endsection