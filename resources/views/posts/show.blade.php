@extends('layouts.app')

@section('content')
<div class="container">

<h2>{{$post->title}}</h2> <br>

{{-- description_part1 --}}
@if ($post->image1_place == 'above')
    @if ($post->image1 != 'null')
      <img src="/storage/{{ $post->image1 }}" class="w-100" style="max-width: 300px;"> <br>
    @endif
    {{$post->image1_caption}} <br>
    {{$post->description_part1}} <br>
@endif

@if ($post->image1_place == 'below')
    {{$post->description_part1}} <br>
    @if ($post->image1 != 'null')
      <img src="/storage/{{ $post->image1 }}" class="w-100" style="max-width: 300px;"> <br>
    @endif
    {{$post->image1_caption}} <br>

@endif

@if ($post->image1_place == 'null')
  {{$post->description_part1}} <br>
@endif

{{-- description_part2 --}}
@if ($post->image2_place == 'above')
    @if ($post->image2 != 'null')
      <img src="/storage/{{ $post->image2 }}" class="w-100" style="max-width: 300px;"> <br>
    @endif
    {{$post->image2_caption}} <br>
    {{$post->description_part2}} <br>
@endif

@if ($post->image2_place == 'below')
    {{$post->description_part2}} <br>
    @if ($post->image2 != 'null')
      <img src="/storage/{{ $post->image2 }}" class="w-100" style="max-width: 300px;"> <br>
    @endif
    {{$post->image2_caption}} <br>

@endif

@if ($post->image2_place == 'null')
  {{$post->description_part2}} <br>
@endif

{{-- description_part3 --}}
@if ($post->image3_place == 'above')
    @if ($post->image3 != 'null')
      <img src="/storage/{{ $post->image3 }}" class="w-100" style="max-width: 300px;"> <br>
    @endif
    {{$post->image3_caption}} <br>
    {{$post->description_part3}} <br>
@endif

@if ($post->image3_place == 'below')
    {{$post->description_part3}} <br>
    @if ($post->image3 != 'null')
      <img src="/storage/{{ $post->image3 }}" class="w-100" style="max-width: 300px;"> <br>
    @endif
    {{$post->image3_caption}} <br>

@endif

@if ($post->image3_place == 'null')
  {{$post->description_part3}} <br>
@endif

{{$post->tag}} <br>


</div>
@endsection
