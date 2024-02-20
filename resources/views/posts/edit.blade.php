@extends('layouts.app')

@section('content')

    <div class="container">
    
        <div class="row justify-content-center">
            <div class="col-md-8">
             <div class="container">
                <div class="row col-offset-2">
<a
                href="#"
                class="btn btn-primary active"
                role="button"
                >NEW POST</a
             >
             
            <form action="{{ route('posts.update', ['post' => $post->id]) }}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <label for="" class="form-label">Title</label>

                    <input
                    value="{{$post->title}}"
                        type="text"
                        name="title"
                        id=""
                        class="form-control"
                        placeholder="{{old('title')}}"
                        aria-describedby="helpId"
                    />
                    <small id="helpId" class="text-muted">Help text</small>

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Body</label>
                    <textarea class="form-control" name="body" id="" rows="3">{{$post->body}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Categories</label>
                    <select
                        multiple
                        class="form-select form-select-lg js-example-basic-multiple"
                        name="categories[]"
                        id="example-buttonContainer"
                          multiple="multiple"
                    >
                    
                    @foreach ($post->categories as $category)
                        
                        <option value="{{$category->id}}" selected >{{$category->name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Choose file</label>
                    <input
                        type="file"
                        class="form-control"
                        name="photo"
                        id=""
                        placeholder=""
                        aria-describedby="fileHelpId"
                    />
                    <div id="fileHelpId" class="form-text">Help text</div>
                </div>
                
                <button
                type="submit"
                name=""
                id=""
                class="btn btn-danger"
            >
                Update <i class="fa fa-plus" aria-hidden="true"></i>
            </button>
                
                
                
            </form>

   
</div>
</div></div></div></div>
@endsection
@section('js')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
 $(document).ready( function () {
    $('#myTable').DataTable({
    ordering:  false
,
lengthChange: false,
responsive: false,


    });
} );

</script>


<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify@4.3.0/dist/tagify.min.js"></script>
@endsection
