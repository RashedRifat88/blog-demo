@extends('admin.partial.app')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header fw-bold">
                    Student Details
                </div>

                <div class="card-body">

                    @php
                        $className = $classes->firstWhere('id', $student->class_id)?->class_name;
                    @endphp

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Class</label>
                        <input type="text" 
                               class="form-control" 
                               value="{{ $className }}" 
                               readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Name</label>
                        <input type="text" 
                               class="form-control" 
                               value="{{ $student->name }}" 
                               readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Roll</label>
                        <input type="text" 
                               class="form-control" 
                               value="{{ $student->roll }}" 
                               readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="text" 
                               class="form-control" 
                               value="{{ $student->email }}" 
                               readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Address</label>
                        <input type="text" 
                               class="form-control" 
                               value="{{ $student->address }}" 
                               readonly>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">
                            Back
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection




{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Details</title>

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
        <div class="card-header">Student Details</div>

            <div class="form-group" style="margin-right: 20px">

                {{-- <div style="margin-bottom: 20px" class="mb-3">
                    <label class="form-label" >Class</label>
                    <select class="form-control" name="class_id" required style="border:1px solid;">
                            @foreach ($classes as $row)
                                <option value="{{ $row->id}}" @if ( $row->id ==  $student->class_id) selected @endif>{{ $row->class_name }}</option>
                            @endforeach
                    </select>

                </div> --}}

                
                    @php
                        $className = $classes->firstWhere('id', $student->class_id)?->class_name;
                    @endphp

                    <div style="margin-bottom: 20px" class="mb-3">
                        <label class="form-label">Class</label>
                        <input
                            type="text"
                            value="{{ $className }}"
                            class="form-control"
                            readonly
                            style="border:1px solid;"
                        >
                    </div>

                
                <div style="margin-bottom: 20px" class="mb-3">
                    <label class="form-label" >Name</label>
                    <input type="text" name="name" value="{{ $student->name }}" placeholder="Enter Class Name"
                        required style="border:1px solid ;">

                </div>


                
                <div style="margin-bottom: 20px" class="mb-3">
                    <label class="form-label" >Roll</label>
                    <input type="text" name="roll" value="{{ $student->roll }}" placeholder="Enter Roll"
                        required style="border:1px solid ;">

                    
                </div>


                <div style="margin-bottom: 20px" class="mb-3">
                    <label class="form-label" >Email</label>
                    <input type="text" name="email" value="{{ $student->email }}" placeholder="Enter Email"
                        required style="border:1px solid {{ $errors->has('email') ? 'red' : '#ccc' }};">

                    
                </div>


                <div style="margin-bottom: 20px" class="mb-3">
                    <label class="form-label" >Address</label>
                    <input type="text" name="address" value="{{ $student->address }}" placeholder="Enter Address"
                        required style="border:1px solid ;">

                </div>


            </div>


            <div style="display:flex; justify-content:space-between;">
                <a href="{{ route('students.index') }}" class="btn-back">Back</a>
                {{-- <button type="submit" class="btn-submit">Save</button> --}}
            </div>
        

    </div>

</body>

</html> --}}