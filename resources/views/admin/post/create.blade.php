@extends('admin.partial.app')

@section('content')

    {{-- <div class="container mt-4"> --}}

        <div class="app-main">
            <div class="app-content mt-5">
                <div class="container-fluid"></div>


                <div class="row justify-content-left  ms-4">
                    <div class="col-md-8">

                        <div class="card shadow">
                            <div class="card-header fw-bold">
                                Add New Post
                            </div>

                            <!--begin::Card-->
                            <div class="card card-primary card-outline mb-4">
                                <!--begin::Header-->
                                {{-- <div class="card-header">
                                    <div class="card-title">Post</div>
                                </div> --}}
                                <!--end::Header-->
                                <!--begin::Form-->
                                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Post Title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Post Title" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Category</label>
                                            {{-- <select class="form-control" name="category_id"> --}}
                                            <select class="form-control" name="sub_category_id">
                                                <option>Select a category</option>
                                                @foreach ($categories as $cat)
                                                    @php
                                                        $sub_cats = DB::table('subcategories')->where('category_id', $cat->id)->get();
                                                    @endphp
                                                    <option disabled value="{{ $cat->id }}" class="text-info">{{ $cat->category_name }}</option>

                                                    @foreach ($sub_cats as $sub_cat)
                                                        <option value="{{ $sub_cat->id }}">---{{ $sub_cat->sub_category_name }}</option>
                                                    @endforeach

                                                @endforeach
                                            </select>
                                        </div>
                                        {{-- <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Sub Category</label>
                                            <select class="form-control" name="sub_category_id">
                                                <option>Sub Example 1</option>
                                            </select>
                                        </div> --}}
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Post Date</label>
                                            <input type="date" class="form-control" id="post_date" name="post_date"
                                                placeholder="Post Date" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Tags</label>
                                            <input type="text" class="form-control" id="tags" name="tags"
                                                placeholder="Tags" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Description</label>
                                            <textarea class="form-control summernote" name="description"  rows="4"> </textarea>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" name="img" />
                                            {{-- <label class="input-group-text" for="inputGroupFile02">Upload Image</label> --}}
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" name="status" value="1" />
                                            <label class="form-check-label" for="exampleCheck1">Publish Now</label>
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    <!--end::Footer-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card-->


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




{{--
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
                    <label class="form-label">Name</label>
                    <input type="text" name="category_name" value="{{ old('category_name') }}"
                        placeholder="Enter Category Name" required
                        style="border:1px solid {{ $errors->has('category_name') ? 'red' : '#ccc' }};">

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

</html> --}}