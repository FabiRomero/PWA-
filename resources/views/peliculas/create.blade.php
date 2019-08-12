@extends('layouts.app')
@section('content')

<div class="container mt-5">
<form method="POST" action="{{ route('peliculas.store') }}">
@csrf

<div class="form-group">
    <label>Peliculas</label>
    <input type="text" class="form-control @error('pelicula') is-invalid @enderror" name="pelicula" required>

    @error('pelicula')
    <span class="text-danger">
      <strong>{{ $message }}</strong>
    </span>
    @enderror

</div>

  <div class="text-center">
  <!-- Buttons -->
  <button type="submit" class="btn btn-info">
      Add
  </button>
  <a href="{{ route('peliculas.index') }}" class="btn btn-danger">Cancel</a>

</div>

</form>
</div>


@endsection