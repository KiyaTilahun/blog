@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
         <div class="container">
            <div class="row col-offset-2">
            <form action="" class="form">
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input
                        type="text"
                        name=""
                        id=""
                        class="form-control"
                        placeholder=""
                        aria-describedby="helpId"
                    />
                    <small id="helpId" class="text-muted">Help text</small>

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Body</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">City</label>
                    <select
                        multiple
                        class="form-select form-select-lg"
                        name=""
                        id="example-buttonContainer"
                    >
                        <option selected>Select one</option>
                        <option value="">New Delhi</option>
                        <option value="">Istanbul</option>
                        <option value="">Jakarta</option>
                    </select>
                </div>
                
                
                
            </form>
            </div>
         </div>
        </div>
    </div>
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
