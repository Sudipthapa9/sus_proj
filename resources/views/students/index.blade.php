<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 30px;
            margin-top: 20px;
        }

        .header-section {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid rgba(106, 17, 203, 0.1);
        }

        h2 {
            color: #333;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .btn-primary {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            border: none;
            border-radius: 8px;
            font-weight: 600;
            padding: 10px 25px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(106, 17, 203, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(106, 17, 203, 0.4);
        }

        .alert-success {
            background: linear-gradient(45deg, #4CAF50, #8BC34A);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
            margin-top: 15px;
        }

        .table-container {
            margin-top: 30px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .table {
            margin-bottom: 0;
            border-collapse: collapse;
        }

        .table thead th {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            color: white;
            border: none;
            padding: 15px;
            font-weight: 600;
            text-align: left;
        }

        .table tbody tr {
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
            transform: translateX(5px);
        }

        .table td {
            padding: 15px;
            vertical-align: middle;
            border: none;
        }

        .btn-sm {
            border-radius: 5px;
            margin: 0 3px;
            transition: all 0.3s ease;
            font-weight: 500;
            padding: 5px 15px;
        }

        .btn-info {
            background: linear-gradient(45deg, #17a2b8, #138496);
            border: none;
            color: white;
        }

        .btn-warning {
            background: linear-gradient(45deg, #FFC107, #FF9800);
            border: none;
            color: white;
        }

        .btn-danger {
            background: linear-gradient(45deg, #dc3545, #c82333);
            border: none;
        }

        .btn-info:hover, .btn-warning:hover, .btn-danger:hover {
            transform: translateY(-2px);
            color: white;
        }

        .action-buttons {
            white-space: nowrap;
        }

        .student-id {
            font-weight: bold;
            color: #6a11cb;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            
            .table-responsive {
                overflow-x: auto;
            }
            
            .action-buttons {
                display: flex;
                flex-direction: column;
                gap: 5px;
            }
            
            .action-buttons .btn {
                width: 100%;
                margin: 2px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-section">
            <h2><i class="fas fa-graduation-cap"></i> Student Management System</h2>
            
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="{{ route('students.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle"></i> Add New Student
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        <div class="table-container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><i class="fas fa-id-card"></i> ID</th>
                            <th><i class="fas fa-user"></i> Name</th>
                            <th><i class="fas fa-envelope"></i> Email</th>
                            <th><i class="fas fa-phone"></i> Phone</th>
                            <th><i class="fas fa-cogs"></i> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td class="student-id">#{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td class="action-buttons">
                                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i> Show
                                    </a>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">
                                            <i class="fas fa-trash-alt"></i> Delete
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>