<!DOCTYPE html>
<html>
<head>
    <title>Show Student</title>
</head>
<body>
    <div class="container">
        <h1>Student Details</h1>

        <div>
            <strong>First Name:</strong> {{ $student->first_name }}
        </div>
        <div>
            <strong>Last Name:</strong> {{ $student->last_name }}
        </div>
        <div>
            <strong>Email:</strong> {{ $student->email }}
        </div>
        <div>
            <strong>Phone:</strong> {{ $student->phone }}
        </div>
        <div>
            <strong>Date of Birth:</strong> {{ $student->dob }}
        </div>

        <a href="{{ route('students.index') }}">Back to Students List</a>
    </div>
</body>
</html>
