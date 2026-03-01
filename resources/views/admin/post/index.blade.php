@extends('admin.partial.app')

@section('content')

    {{-- <div class="app-content mt-3">
        < class="container-fluid"> --}}

            <div class="app-main">

                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header mt-3">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-10">
                                    <h1>Post</h1>
                                </div>
                                <div class="col-sm-2">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Post</li>
                                    </ol>
                                </div>
                            </div>
                        </div><!-- /.container-fluid -->
                    </section>

                    <!-- Main content -->
                    <section class="content">

                        {{-- <div class="app-main"> --}}
                            <div class="app-content mt-3">
                                <div class="container-fluid"></div>

                                <div class="card shadow-sm">
                                    {{-- <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Category List</h5>

                                        <a href="{{ route('category.create') }}" class="btn btn-success btn-sm">
                                            Add New
                                        </a>
                                    </div> --}}

                                    <div class="card-header d-flex align-items-center">
                                        <h5 class="mb-0 fw-semibold">Post List</h5>

                                        <a href="{{ route('post.create') }}" class="btn btn-success btn-sm ms-auto">
                                            <i class="bi bi-plus-lg me-1"></i> Add New
                                        </a>
                                    </div>


                                    <div class="card-body" style="vw:100">

                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        <div class="table-responsive">
                                            <table id="postTable" class="table table-bordered table-striped w-100">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>SL</th>
                                                        <th>Sub Category</th>
                                                        <th>Category</th>
                                                        <th>Author</th>
                                                        <th>Title</th>
                                                        <th>Published</th>
                                                        <th>Status</th>
                                                        <th class="no-export" width="220">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($posts as $key => $row)
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            {{-- <td>{{ $row->sub_category_name }}</td>
                                                            <td>{{ $row->category_name }}</td>
                                                            <td>{{ $row->name }}</td> --}}
                                                            <td>{{ $row->sub_category_lj->sub_category_name }}</td>
                                                            <td>{{ $row->category_lj->category_name }}</td>
                                                            <td>{{ $row->user_lj->name }}</td>
                                                            <td>{{ $row->title }}</td>
                                                            <td>{{ date('d F, Y', strtotime($row->post_date)) }}</td>
                                                            <td>
                                                                @if ($row->status == 1)
                                                                    <span class="badge bg-success">Active</span>

                                                                @else
                                                                    <span class="badge bg-danger">Inactive</span>

                                                                @endif
                                                            </td>
                                                            {{-- <td>
                                                                <a href="{{ route('category.show', $row->id) }}"
                                                                    class="btn btn-sm btn-primary">
                                                                    View
                                                                </a>

                                                                <a href="{{ route('category.edit', $row->id) }}"
                                                                    class="btn btn-sm btn-warning">
                                                                    Edit
                                                                </a>

                                                                <form action="{{ route('category.destroy', $row->id) }}"
                                                                    method="POST" class="d-inline">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                                        onclick="return confirm('Are you sure?')">
                                                                        Delete
                                                                    </button>
                                                                </form>

                                                                <form id="delete-form-{{ $row->id }}"
                                                                    action="{{ route('category.destroy', $row->id) }}"
                                                                    method="POST" style="d-inline;">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button type="button"
                                                                        class="btn btn-sm btn-danger delete-btn"
                                                                        data-id="{{ $row->id }}">
                                                                        Delete
                                                                    </button>

                                                                </form>


                                                            </td> --}}
                                                            <td>
                                                                <div class="d-flex gap-2">

                                                                    <a href="{{ route('post.show', $row->id) }}"
                                                                        class="btn btn-sm btn-primary">
                                                                        View
                                                                    </a>

                                                                    <a href="{{ route('post.edit', $row->id) }}"
                                                                        class="btn btn-sm btn-warning">
                                                                        Edit
                                                                    </a>

                                                                    <form action="{{ route('post.destroy', $row->id) }}"
                                                                        method="POST" style="display:inline;">
                                                                        @csrf
                                                                        @method('DELETE')

                                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                                            onclick="return confirm('Are you sure? It will be permanently deleted!')">
                                                                            Delete
                                                                        </button>
                                                                    </form>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </section>

                </div>
            </div>

@endsection



        @section('scripts')

            <!-- jQuery -->
            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

            <!-- DataTables -->
            <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

            <!-- Buttons -->
            <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>

            <!-- Export Dependencies -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

            <!-- Export Buttons -->
            <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

            <script>
                $(document).ready(function () {

                    let table = $('#postTable').DataTable({
                        responsive: true,
                        autoWidth: false,
                        pageLength: 10,
                        lengthChange: true,

                        dom:
                            "<'row mb-3'<'col-md-6'B><'col-md-6'f>>" +
                            "<'row'<'col-md-12'tr>>" +
                            "<'row mt-3'<'col-md-5'i><'col-md-7'p>>",

                        buttons: [
                            {
                                extend: 'copy',
                                className: 'btn btn-secondary btn-sm',
                                exportOptions: { columns: ':not(.no-export)' }
                            },
                            {
                                extend: 'csv',
                                className: 'btn btn-info btn-sm',
                                exportOptions: { columns: ':not(.no-export)' }
                            },
                            {
                                extend: 'excel',
                                className: 'btn btn-success btn-sm',
                                exportOptions: { columns: ':not(.no-export)' }
                            },
                            {
                                extend: 'pdf',
                                className: 'btn btn-danger btn-sm',
                                exportOptions: { columns: ':not(.no-export)' }
                            },
                            {
                                extend: 'print',
                                className: 'btn btn-primary btn-sm',
                                exportOptions: { columns: ':not(.no-export)' }
                            }
                        ]
                    });

                    $('#postTable').css('width', '100%');
                });
            </script>

        @endsection