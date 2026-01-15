<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #6e45e2, #88d3ce);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 2rem 0;
        }

        .container {
            max-width: 800px;
        }

        h2 {
            color: white;
            text-align: center;
            margin-bottom: 1.5rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            position: relative;
            padding-bottom: 15px;
        }

        h2:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(to right, transparent, #fff, transparent);
        }

        .btn-secondary {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            border: none;
            border-radius: 50px;
            font-weight: 600;
            padding: 10px 25px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(37, 117, 252, 0.4);
            margin-bottom: 20px;
            color: white;
        }

        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(37, 117, 252, 0.6);
            color: white;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            border: none;
            transition: all 0.4s ease;
            animation: float 6s ease-in-out infinite;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }

        .card-body {
            padding: 2rem;
        }

        .card-title {
            color: #6e45e2;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-align: center;
            font-size: 2rem;
            position: relative;
            padding-bottom: 15px;
        }

        .card-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(to right, #6e45e2, #88d3ce);
            border-radius: 3px;
        }

        .card-text {
            margin-bottom: 1.2rem;
            font-size: 1.1rem;
            padding: 10px 15px;
            border-radius: 8px;
            background: rgba(110, 69, 226, 0.05);
            transition: all 0.3s ease;
        }

        .card-text:hover {
            background: rgba(110, 69, 226, 0.1);
            transform: translateX(5px);
        }

        .card-text strong {
            color: #6e45e2;
            font-weight: 600;
            min-width: 80px;
            display: inline-block;
        }

        .btn-warning {
            background: linear-gradient(45deg, #FFC107, #FF9800);
            border: none;
            color: white;
            border-radius: 50px;
            font-weight: 600;
            padding: 10px 25px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 152, 0, 0.4);
            margin-right: 10px;
        }

        .btn-warning:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 20px rgba(255, 152, 0, 0.6);
            color: white;
        }

        .btn-danger {
            background: linear-gradient(45deg, #FF416C, #FF4B2B);
            border: none;
            border-radius: 50px;
            font-weight: 600;
            padding: 10px 25px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 75, 43, 0.4);
        }

        .btn-danger:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 20px rgba(255, 75, 43, 0.6);
            color: white;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
            flex-wrap: wrap;
            gap: 10px;
        }

        .student-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(45deg, #6e45e2, #88d3ce);
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            animation: pulse 2s infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(110, 69, 226, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(110, 69, 226, 0); }
            100% { box-shadow: 0 0 0 0 rgba(110, 69, 226, 0); }
        }

        .detail-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.2rem;
        }

        .detail-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(45deg, #6e45e2, #88d3ce);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .detail-content {
            flex-grow: 1;
        }

        /* Magic sparkle effect */
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.3), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s;
            z-index: 1;
            pointer-events: none;
        }

        .card:hover::before {
            transform: translateX(100%);
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-warning, .btn-danger {
                width: 100%;
                margin: 5px 0;
            }
            
            .card-body {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body class="container mt-5">
    <h2><i class="fas fa-user-graduate"></i> Student Details</h2>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back to List
    </a>

    <div class="card">
        <div class="card-body">
            <div class="student-avatar">
                <i class="fas fa-user"></i>
            </div>
            <h5 class="card-title">{{ $student->name }}</h5>
            
            <div class="detail-item">
                <div class="detail-icon">
                    <i class="fas fa-id-card"></i>
                </div>
                <div class="detail-content">
                    <p class="card-text"><strong>ID:</strong> {{ $student->id }}</p>
                </div>
            </div>
            
            <div class="detail-item">
                <div class="detail-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="detail-content">
                    <p class="card-text"><strong>Email:</strong> {{ $student->email }}</p>
                </div>
            </div>
            
            <div class="detail-item">
                <div class="detail-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="detail-content">
                    <p class="card-text"><strong>Phone:</strong> {{ $student->phone }}</p>
                </div>
            </div>

            <div class="action-buttons">
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Edit Student
                </a>

                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this student?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i> Delete Student
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>