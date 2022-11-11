@extends('heading')

@section('content')
<div class="container">
    <h3>Edit Manga</h3>
    <form action="{{ route('update-manga',$manga->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" value="{{ $manga->nama }}">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" value="{{ $manga->genre }}">
        </div>
        <div class="form-group">
            <label for="creator">Creator</label>
            <input type="text" name="creator" value="{{ $manga->creator }}">
        </div>
        <div class="form-group">
            <button type="submit">Update</button>
        </div>
    </form>
</div>
@endsection
