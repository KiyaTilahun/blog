@extends('layouts.app')

@section('content')
<div class="container">
    <div
        class="table-responsive"
    >
        <table
           id="myTable" class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
             
                    <th>Title</th>
                    <th>Categories</th>
                    <th>Images</th>
                    <th></th>


                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($post as $post)
                    
              
                <tr
                    class="table-primary"
                >
                    <td scope="row">{{$post->title}}</td>
                    
                    <td> @foreach ($post->categories as $index => $category)
                        <span class="btn
                          @if ($index % 2 === 0)
                            btn-primary
                          @else
                            btn-secondary
                          @endif
                        ">{{$category->name}}</span> 
                      @endforeach</td>
                    <td>
                        <div><img src="{{ asset('images/'.$post->image) }}" style="max-width: 100px;
                        max-height: 100px;" class="rounded img-fluid d-block" alt="Product Image"></div></td>

                 <td>
                    <a href="#" title="View" class="btn btn-primary m-1"><i class="fas fa-eye"></i></a>
                     <a href="{{ route('posts.edit', ['post' => $post->id])}}" class="btn btn-success m-1 " title="Edit"><i class="fas fa-edit"></i></a>
                    <a href="#" title="Delete" class="btn btn-danger m-1"><i class="fa fa-trash" aria-hidden="true"></i></i></a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
            
        </table>
    </div>
    

   
</div>
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
