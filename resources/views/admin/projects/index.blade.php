@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="nav justify-content-center">
      <div class="nav-link">
        <a href="{{ route('admin.projects.create') }}" class="btn btn-link">Aggiungi</a>
      </div>
    </div>

    <div class="card">
      <div class="card-header">Lista progetti</div>

      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
                <th>Titolo</th>
              <th>Cover</th>
              <th>Descrizione</th>
              <th>Link gitHub</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($projects as $project)
              <tr>
                  <td>{{ $project->name }}</td>
                <td><img src="{{ asset('/storage/' . $project->cover_img) }}" alt="" style="width: 60px"></td> 
                <td>{{ $project->description }}</td>
                <td><a href="">{{ $project->github_link }}</a></td>
                <td>
                  <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary"><i
                      class="fas fa-pencil"></i>E</a>
                  <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-info"><i
                      class="fas fa-eye"></i>S</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection