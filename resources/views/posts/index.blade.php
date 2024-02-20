@extends('layouts.app')

@section('content')
<div class="container">
    Post PAGE
   
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
