@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">Modifica Elemento</div>

      <div class="card-body">

        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
          @csrf()
          @method('PUT')

          <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
              value="{{ old('name', $project->name) }}">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>


          <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea name="description" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror">{{ old('description', $project->description) }}</textarea>
            @error('description')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          


          <div class="mb-3">
            <label class="form-label">Immagine di copertina</label>
            <input type="file" class="form-control @error('cover_img') is-invalid @enderror" name="cover_img">
            @error('cover_img')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror

            <img src="{{ asset('storage/' . $project->cover_img) }}" alt="" class="img-thumbnail">
          </div>

          <div class="mb-3">
            <label class="form-label">Link GitHub</label>
            <input type="text" class="form-control @error('github_link') is-invalid @enderror" name="github_link"
              value="{{ old('github_link', $project->github_link) }}">
            @error('github_link')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Annulla</a>
          <button class="btn btn-primary">Salva</button>
        </form>

      </div>
    </div>
  </div>

@endsection