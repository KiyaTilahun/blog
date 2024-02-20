@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('categories.store')}}" method="post">
        @csrf
    <div class="mb-3">
        <label for="" class="form-label">Category</label>
        <input
            type="text"
            name="name"
            id=""
            class="form-control"
            placeholder="{{old('name')}}"
            aria-describedby="helpId"
        />
        <small id="helpId" class="text-muted">make it a verb</small>
        @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="d-grid gap-2">
        <button
            type="submit"
            name=""
            id=""
            class="btn btn-primary"
        >
            Add <i class="fa fa-plus" aria-hidden="true"></i>
        </button>
    </div>
    
</form>
   
</div>
@endsection
@section('js')
<script type="text/javascript">
 
    $(document).ready(function() {
        $('#example-buttonContainer').multiselect({
            buttonContainer: '<div class="btn-group" />'
        });
    });
</script>
    
@endsection
