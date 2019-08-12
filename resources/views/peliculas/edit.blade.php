@extends('layouts.app')
@section('content')
{{-- {{ route('erika.cat_alimentos.store') }} --}}
<div class="container mt-5">
<form method="POST" action="{{ route('peliculas.update', $pelicula->id) }}">
@method('PUT')
@csrf

<div class="form-group">
    <label>Peliculas</label>
    <input type="text" class="form-control @error('pelicula') is-invalid @enderror" value="{{$pelicula->pelicula}}" name="pelicula" required>

    @error('pelicula')
    <span class="text-danger">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>


<div class="row">
<div class="mr-1">
<button type="submit" class="btn btn-primary">Update</button>
</div>

<div class="mr-1">
  <a href="{{ route('peliculas.index') }}" class="btn btn-dark">Cancel</a>
</div>

<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Delete">
  Delete
</button>

</div>
</form>

</div>

  
<!-- Modal -->
  <div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            Are you sure you want to delete it?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

           <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST">
          @method('DELETE')
          @csrf
         <button type="submit" class="btn btn-danger">Delete</button>
         </form>
        </div>
      </div>
    </div>
</div>
      

@endsection