@extends('admin.partial.app')

@section('content')

<div class="container mt-4">

    <div class="card shadow-sm rounded-3">
        <div class="card-header bg-white fw-bold fs-5">
            Category List
        </div>

        <div class="card-body">

            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('category.create') }}" class="btn btn-success">
                    Add New
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th width="220">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key => $row)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $row->category_name }}</td>
                                <td>{{ $row->category_slug }}</td>
                                <td>
                                    <a href="{{ route('category.show', $row->id) }}"
                                        class="btn btn-sm btn-primary">
                                        View
                                    </a>

                                    <a href="{{ route('category.edit', $row->id) }}"
                                        class="btn btn-sm btn-warning">
                                        Edit
                                    </a>

                                    <form action="{{ route('category.destroy', $row->id) }}"
                                          method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure?')">
                                            Delete
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

@endsection



{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Table inside Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 40px;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }

        .card-header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f1f3f5;
        }

        tr:hover {
            background: #f9fafb;
        }


        .btn1 {
            display: inline-block;
            padding: 10px 20px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn1:hover {
            background: #0056b3;
        }

        .btn2 {
            display: inline-block;
            padding: 10px 20px;
            background: #007500;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn2:hover {
            background: #0056b3;
        }

        .btn3 {
            display: inline-block;
            padding: 10px 20px;
            background: #007545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn3:hover {
            background: #0056b3;
        }

                @vite(['resources/css/app.css', 'resources/js/app.js'])

    </style>
</head>

<body>

    <div class="card">
        <div class="card-header">Category List</div>

        <div class="table-wrapper">
            <div style="display:flex; justify-content:flex-end;">
                <a href="{{ route('category.create') }}" class="btn3">Add New</a>
            </div>

            <br />
            <br />

             @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table>
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categories as $key => $row)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $row->category_name }}</td>
                            <td>{{ $row->category_slug }}</td>
                            <td>
                                <a href="{{ route('category.show', $row->id) }}" class="btn1">View</a>
                                <a href="{{ route('category.edit', $row->id) }}" class="btn1">Edit</a>
                                <a href="{{ route('category.destroy', $row->id) }}" class="btn btn-danger">Delete</a>
                                <form action="{{ route('category.destroy', $row->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</body>

</html> --}}