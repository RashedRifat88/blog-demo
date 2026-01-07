<!DOCTYPE html>
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
                                {{-- <a href="{{ route('category.destroy', $row->id) }}" class="btn2">Delete</a> --}}
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

</html>