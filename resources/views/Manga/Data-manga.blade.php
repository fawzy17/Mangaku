@extends('heading')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-evenly">
            <h5>Manga Store</h5>
            <a href="{{ route('create-manga') }}" class="btn btn-primary">Insert</a>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">Genre</th>
                <th scope="col">Creator</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($manga as $m)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $m->nama }}</td>
                  <td>{{ $m->genre }}</td>
                  <td>{{ $m->creator }}</td>
                  <td>
                    <a href="{{ url('edit-manga',$m->id ) }}" class="btn btn-primary">Update</a>
                    <a href="{{ route('delete-manga',$m->id) }}" class="btn btn-primary">Delete</a>
                  </td>
                </tr>
                @empty

                @endforelse
          </table>
    </div>
@endsection
