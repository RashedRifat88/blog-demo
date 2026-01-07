<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add New Class</title>

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
            max-width: 600px;
            margin: auto;
        }

        .card-header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
        }

        input[type="text"]:focus {
            border-color: #007bff;
        }

        .btn-submit {
            background: #007545;
            color: white;
            padding: 10px 18px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
        }

        .btn-submit:hover {
            background: #0056b3;
        }

        .btn-back {
            background: #555;
            color: white;
            padding: 10px 18px;
            border-radius: 6px;
            text-decoration: none;
        }

        .btn-back:hover {
            background: #333;
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="card-header">Add New Class</div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('category.store') }}" method="POST">
            @csrf

            <div class="form-group" style="margin-right: 20px">
                
                <div style="margin-bottom: 20px" class="mb-3">
                    <label class="form-label" >Name</label>
                    <input type="text" name="category_name" value="{{ old('category_name') }}" placeholder="Enter Category Name"
                        required style="border:1px solid {{ $errors->has('category_name') ? 'red' : '#ccc' }};">

                    @error('category_name')
                        <small style="color:red;">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            

            </div>


            <div style="display:flex; justify-content:space-between;">
                <a href="{{ route('category.index') }}" class="btn-back">Back</a>
                <button type="submit" class="btn-submit">Save</button>
            </div>
        </form>

    </div>

</body>

</html>