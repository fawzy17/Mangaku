@extends('heading')

@section('content')
    <div class="container">
        <h3>Input Manga</h3>
        <form action="{{ route('input-manga') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama">
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" name="genre">
            </div>
            <div class="form-group">
                <label for="creator">Creator</label>
                <input type="text" name="creator">
            </div>
            <div class="form-group">
                <button type="submit">Input</button>
            </div>
        </form>
    </div>
@endsection
