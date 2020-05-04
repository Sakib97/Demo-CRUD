@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header align-items-center"><h2>Control Panel</h2></div>

                <div class="card-body">
                  <b> <a href="/p/create">Add New Post</a> </b> <br> <hr>

                    <div class="row">

                        @foreach ($posts as $post)
                          <div class="col-12">
                            {{-- <div class="d-flex"> --}}

                              <div>
                                <a href="/p/{{$post->id}}">
                                  <span class="text-dark">
                                    {{ $post->title }} <br>
                                    By <strong>{{$post->user->name}} </strong>
                                  </span> </a>
                              </div>

                              {{-- Edit Post --}}
                              <div class="pl-5">
                                  <a href="/p/{{ $post->id }}/edit">Edit Post</a>
                              </div>

                              {{-- Delete Post --}}
                              <div>
                                <form action="/p/{{ $post->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <div class="pl-5">
                                  <button class="btn btn-primary" type="submit">Delete</button>
                                </div>

                               </form>
                              </div>


                                   {{-- <a href="/post/{{ $post->id }}" class="pl-5">Delete</a> --}}

                                <br> <hr>

                            {{-- </div> --}}



                          </div>
                          {{-- <br> <hr> --}}
                        @endforeach


                  </div>

                </div>

                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                      {{$posts->links() }} {{-- links() is used to paginate--}}
                  </div>
              </div>


            </div>
        </div>
    </div>
</div>
@endsection
