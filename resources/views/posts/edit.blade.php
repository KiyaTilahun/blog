@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <div class="row col-offset-2">
                        <a href="#" class="btn btn-danger active" role="button">EDIT POST</a>
                        @if (Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <form action="{{ route('posts.update', ['post' => $post->id]) }}" class="form" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <label for="" class="form-label">Title</label>

                            <input value="{{ $post->title }}" type="text" name="title" id=""
                                class="form-control" placeholder="{{ old('title') }}" aria-describedby="helpId" />
                            <small id="helpId" class="text-muted">Help text</small>

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Body</label>
                        <textarea class="form-control" name="body" id="" rows="3">{{ $post->body }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Categories</label>
                        <select multiple class="form-select form-select-lg js-example-basic-multiple" name="categories[]"
                            id="example-buttonContainer" multiple="multiple">

                            @foreach ($allcategory as $category)
                            <option value="{{ $category->id }}" {{ $post->categories->contains('id', $category->id) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-7">
                            <label for="" class="form-label">Choose file</label>
                            <input type="file" class="form-control" name="photo" id="" placeholder=""
                                aria-describedby="fileHelpId" />
                            <div id="fileHelpId" class="form-text">Help text</div>
                        </div>
                        <div class="col-5"><img src="{{ asset('images/' . $post->image) }}" class="img-thumbnail"
                                alt=""></div>
                    </div>
                    <button type="submit" name="" id="" class="btn btn-danger">
                        Update <i class="fa fa-edit ml-3" aria-hidden="true"></i>
                    </button>



                    </form>


                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('js')
 <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <!-- Select2 -->
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script>
     $(document).ready(function() {
         $('.js-example-basic-multiple').select2();
     });

     const quill = new Quill('#editor', {
       theme: 'snow'
     });
 </script>
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>
@endsection
