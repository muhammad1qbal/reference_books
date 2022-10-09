@extends('layouts.main')
@section('container')

<h1>Halaman About</h1>
<script src="js/script.js"></script>
<h3>Muhammad Iqbal</h3>
<p>iqbal@gmail.com</p>
<p><?= $email; ?></p>
<img src="img/<?= $image; ?>" alt="iqbal" width="200" class="img-thumbnail rounded-circle">
<p>{{ $image }}</p>
    
@endsection

