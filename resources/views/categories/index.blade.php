@extends('layouts.app')

@section('content')
    <div class="container">
    
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Category</label>
                <input type="text" name="name" id="" class="form-control" placeholder="{{ old('name') }}"
                    aria-describedby="helpId"  />
                <small id="helpId" class="text-muted">make it a verb</small>
                @error('name')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
            </div>
            <div class="d-grid gap-2">
                <button type="submit" name="" id="" class="btn btn-primary">
                    Add <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
            </div>

        </form>



        <div class="table-responsive col-3">
            <table id="myTable" class="table table-striped table-hover table-borderless table-primary align-middle">
                <thead class="table-light">


                    <th>Categories</th>



                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @php
                        $categories = $category->sortByDesc('created_at');
                    @endphp
                    @foreach ($categories as $categor)
                        <tr class="table-primary">


                            <td>{{ $categor->name }}</td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myTable').DataTable({
                ordering: false,
                lengthChange: false,
                responsive: false,
                searching: false,
                paging: false


            });
        });
    </script>


    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
@endsection
