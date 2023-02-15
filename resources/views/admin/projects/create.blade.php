@extends('layouts.app')


@section('content')

  <div class="container">
    <div class="card">
      <div class="card-header">Crea Elemento</div>

      <div class="card-body">

        @if ($errors->any())
          <div class="alert alert-danger">
            I dati inseriti non sono validi:

            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif


        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
          @csrf()

          <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
              value="">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>


          <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea name="description" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror"></textarea>
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
          </div>

          <div class="mb-3">
            <label class="form-label">Link GitHub</label>
            <input type="text" class="form-control @error('github_link') is-invalid @enderror" name="github_link"
            >
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