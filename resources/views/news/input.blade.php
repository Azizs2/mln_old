{{-- <!DOCTYPE html>
<html>

<head>
    <title>Input Berita</title>
</head>

<body>
    <h1>Input Berita</h1>
    <form action="{{ route('news.store') }}" method="post">
        @csrf
        <label for="title">Judul Berita:</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="content">Isi Berita:</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html> --}}

@extends('app_2')

@section('content')
    <div class="container">
        <h2>Formulir Artikel</h2>
        <form action="{{ route('news.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="category">Categories:</label>
                <input type="text" class="form-control" id="category" name="category">
            </div>
            <div class="form-group">
                <label>Tag:</label><br>
                <input type="text" class="form-control" id="tags" name="tags">
            </div>
            <div class="form-group">
                <label for="name_user">User:</label>
                <input type="text" class="form-control" id="name_user" name="name_user">
            </div>
            {{-- <div class="form-group">
                <label for="image">Gambar:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
