@extends('layouts.app')

@section('content')
<div class="container">

<form action="/p" enctype="multipart/form-data" method="post">
  @csrf {{-- blade directive for security --}}

  <div class="row">
    <div class="col-8 offset-2">

      <div class="row">
        <h1>Add New Post</h1>
      </div>

<hr>
      <div class="form-group row">
          <label for="title" class="col-md-4 col-form-label"> <b>Post Title*</b> </label>
              <input id="title"
                      type="text"
                      class="form-control @error('title') is-invalid @enderror"
                      name="title" value="{{ old('title') }}" autocomplete="title" autofocus>

              @error('title')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
      </div>

<hr>
{{-- description_part1 --}}
      <div class="form-group row">
            <label for="description_part1" class="col-md-4 col-form-label"> <b>Description Part 01*</b> </label>
                  <textarea id="description_part1"
                          rows="8" cols="80"
                          class="form-control @error('description_part1') is-invalid @enderror"
                          name="description_part1" autocomplete="description_part1" autofocus>{{ old('description_part1') }}</textarea>

                @error('description_part1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

      <div class="row">
        <label for="image1" class="col-md-4 col-form-label"> <b>Post Image 01</b> </label>
        <input type="file" class="form-control-file" id="image1" name="image1" >

        @error('image1')
                <strong>{{ $message }}</strong>
        @enderror

      </div>

      <div class="form-group row">
          <label for="image1_caption" class="col-md-4 col-form-label"> <b>Image 01 Caption (* if Image 01 is uploaded)</b> </label>
              <input id="image1_caption"
                      type="text"
                      class="form-control @error('image1_caption') is-invalid @enderror"
                      name="image1_caption" value="{{ old('image1_caption') }}" autocomplete="image1_caption" autofocus>

              @error('image1_caption')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
      </div>

      <div class="row">
        <b>Image 01 placement (* if Image 01 is uploaded)</b>
        {{-- <label for="image1_place" class="col-md-4 col-form-label">
          <input id="image1_place"
                  type="radio"
                  class=" @error('image1_place') is-invalid @enderror"
                  name="image1_place"
                  value="above" autocomplete="image1_place" autofocus> Above Description
        </label> --}}


        {{-- <label for="image1_place" class="col-md-4 col-form-label">
          <input id="image1_place"
                  type="radio"
                  class=" @error('image1_place') is-invalid @enderror"
                  name="image1_place"
                  value="below" autocomplete="image1_place" autofocus> Below Description
        </label> --}}

        <input id="above"
                type="radio"
                class=" @error('image1_place') is-invalid @enderror"
                name="image1_place"
                value="above">
          <label for="image1_place" >Above Description</label><br>

          <input id="below"
                  type="radio"
                  class=" @error('image1_place') is-invalid @enderror"
                  name="image1_place"
                  value="below">
            <label for="image1_place" >Below Description</label><br>

              @error('image1_place')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
      </div>


<hr>
{{-- description_part2 --}}
      <div class="form-group row">
            <label for="description_part2" class="col-md-4 col-form-label"> <b>Description Part 02</b> </label>

                  <textarea id="description_part2"
                          rows="8" cols="80"
                          class="form-control @error('description_part2') is-invalid @enderror"
                          name="description_part2" autocomplete="description_part2" autofocus>{{ old('description_part2') }}</textarea>

                @error('description_part2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

      <div class="row">
        <label for="image2" class="col-md-4 col-form-label"> <b>Post Image 02</b> </label>
        <input type="file" class="form-control-file" id="image2" name="image2" >

        @error('image2')
                <strong>{{ $message }}</strong>
        @enderror

      </div>

      <div class="form-group row">
          <label for="image2_caption" class="col-md-4 col-form-label"> <b>Image 02 Caption (* if Image 02 is uploaded)</b> </label>
              <input id="image2_caption"
                      type="text"
                      class="form-control @error('image2_caption') is-invalid @enderror"
                      name="image2_caption" value="{{ old('image2_caption') }}" autocomplete="image2_caption" autofocus>

              @error('image2_caption')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
      </div>

      <div class="form-group row">
        <b>Image 02 placement (* if Image 02 is uploaded)</b>
        {{-- <label for="image2_place" class="col-md-4 col-form-label">
          <input id="image2_place"
                  class="@error('image2_place') is-invalid @enderror"
                  name="image2_place"
                  type="radio" value="above"> Above Description
        </label>


        <label for="image2_place" class="col-md-4 col-form-label">
          <input id="image2_place"
                  class="@error('image2_place') is-invalid @enderror"
                  name="image2_place"
                  type="radio" value="below"> Below Description
        </label> --}}

        <input id="above"
                type="radio"
                class=" @error('image2_place') is-invalid @enderror"
                name="image2_place"
                value="above">
          <label for="image2_place" >Above Description</label><br>

          <input id="below"
                  type="radio"
                  class=" @error('image2_place') is-invalid @enderror"
                  name="image2_place"
                  value="below">
            <label for="image2_place" >Below Description</label><br>

              @error('image2_place')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
      </div>


<hr>
{{-- description_part3 --}}
  <div class="form-group row">
        <label for="description_part3" class="col-md-4 col-form-label"> <b>Description Part 03</b> </label>

              <textarea id="description_part3"
                      rows="8" cols="80"
                      class="form-control @error('description_part3') is-invalid @enderror"
                      name="description_part3" autocomplete="description_part3" autofocus>{{ old('description_part3') }}</textarea>

            @error('description_part3')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>

  <div class="row">
    <label for="image3" class="col-md-4 col-form-label"> <b>Post Image 03</b> </label>
    <input type="file" class="form-control-file" id="image3" name="image3" >

    @error('image3')
            <strong>{{ $message }}</strong>
    @enderror

  </div>

  <div class="form-group row">
      <label for="image3_caption" class="col-md-4 col-form-label"> <b>Image 03 Caption (* if Image 03 is uploaded)</b> </label>
          <input id="image3_caption"
                  type="text"
                  class="form-control @error('image3_caption') is-invalid @enderror"
                  name="image3_caption" value="{{ old('image3_caption') }}" autocomplete="image3_caption" autofocus>

          @error('image3_caption')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>

  <div class="form-group row">
    <b>Image 03 placement (* if Image 03 is uploaded)</b>
    {{-- <label for="image3_place" class="col-md-4 col-form-label">
      <input id="image3_place"
              class="@error('image3_place') is-invalid @enderror"
              name="image3_place"
              type="radio" value="above"> Above Description
    </label>


    <label for="image3_place" class="col-md-4 col-form-label">
      <input id="image3_place"
              class="@error('image3_place') is-invalid @enderror"
              name="image3_place"
              type="radio" value="below"> Below Description
    </label> --}}

    <input id="above"
            type="radio"
            class=" @error('image3_place') is-invalid @enderror"
            name="image3_place"
            value="above">
      <label for="image3_place" >Above Description</label><br>

      <input id="below"
              type="radio"
              class=" @error('image3_place') is-invalid @enderror"
              name="image3_place"
              value="below">
        <label for="image3_place" >Below Description</label><br>

          @error('image3_place')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>


      {{-- <div class="row">
        <label for="image2" class="col-md-4 col-form-label"> <b>Post Image 02</b> </label>
        <input type="file" class="form-control-file" id="image2" name="image2" >

        @error('image2')
                <strong>{{ $message }}</strong>
        @enderror

      </div>

      <div class="row">
        <label for="image3" class="col-md-4 col-form-label"> <b>Post Image 03</b> </label>
        <input type="file" class="form-control-file" id="image3" name="image3" >

        @error('image3')
                <strong>{{ $message }}</strong>
        @enderror

      </div> --}}


      <div class="form-group row">
          <label for="tag" class="col-md-4 col-form-label"> <b>Post Tag*</b> </label>
              <select id="tag"
                      class="form-control @error('tag') is-invalid @enderror"
                      name="tag"
                      value="{{ old('tag') }}" autocomplete="tag" autofocus>

              <option value="history">History</option>
              <option value="science">Science</option>
              <option value="religion">Religion</option>
              <option value="others">Others</option>
              </select>

              @error('tag')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
      </div>



{{-- <label for="img1_placement" class="col-md-4 col-form-label">Male</label><br> --}}

      <div class="row pt-4">
        <button class="btn btn-primary">Add New Post</button>
      </div>

    </div>
  </div>


</form>


</div>
@endsection
