@extends('dashboard.layouts.main')
@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <article>
        <h2 class="mb-3">{{ $post->title }}</h2>
        {{-- <h5>{{ $post->author }}</h5> --}}
         <a href="/dashboard/posts" class="btn btn-success">
          <span data-feather="arrow-left"></span> Back to all my posts</a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">
            <span data-feather="edit"></span>Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-danger" onclick="return confirm('are you sure?')">
                <span data-feather="x-circle">Delete</span>
              </button>
            </form>
            @if ($post->image)
              <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" 
                alt="https://matematika.uinsu.ac.id/wp-content/uploads/2021/02/book.jpeg" style="width: 18rem;"
                class="img-fluid mt-3">         

              </div>
                @else
                <img src="https://matematika.uinsu.ac.id/wp-content/uploads/2021/02/book.jpeg" 
                alt="https://matematika.uinsu.ac.id/wp-content/uploads/2021/02/book.jpeg" style="width: 18rem;"
                class="img-fluid mt-3">
            @endif

         <article class="my-3 fs-5">
           {!! $post->body !!}

         </article>
      
      </article>
    </div>
  </div>
</div>

@endsection