<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
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

        .form-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            padding: 2rem;
            transition: all 0.4s ease;
            animation: float 6s ease-in-out infinite;
        }

        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }

        .form-label {
            color: #6e45e2;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
        }

        .form-control:focus {
            border-color: #6e45e2;
            box-shadow: 0 0 0 0.2rem rgba(110, 69, 226, 0.25);
            background: white;
            transform: translateY(-2px);
        }

        .input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .input-icon {
            align-self: start;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6e45e2;
            z-index: 5;
        }

        .form-control.with-icon {
            padding-left: 45px;
        }

        .btn-primary {
            background: linear-gradient(45deg, #FF416C, #FF4B2B);
            border: none;
            border-radius: 50px;
            font-weight: 600;
            padding: 12px 30px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 75, 43, 0.4);
            width: 100%;
            margin-top: 10px;
            font-size: 1.1rem;
        }

        .btn-primary:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 20px rgba(255, 75, 43, 0.6);
        }

        .alert-danger {
            background: linear-gradient(45deg, #ff6b6b, #ee5a52);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 1rem 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.3);
        }

        .alert-danger ul {
            margin-bottom: 0;
            padding-left: 1rem;
        }

        .alert-danger li {
            margin-bottom: 5px;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }

        .form-header-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(45deg, #6e45e2, #88d3ce);
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
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
            70% { box-shadow: 0 0 0 10px rgba(110, 69, 226, 0); }
            100% { box-shadow: 0 0 0 0 rgba(110, 69, 226, 0); }
        }

        /* Magic sparkle effect */
        .form-container::before {
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
            border-radius: 15px;
        }

        .form-container:hover::before {
            transform: translateX(100%);
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .form-container {
                padding: 1.5rem;
            }
            
            .form-header-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body class="container mt-5">
    <h2><i class="fas fa-user-edit"></i> Edit Student</h2>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back to List
    </a>

    <div class="form-container">
        <div class="form-header">
            <div class="form-header-icon">
                <i class="fas fa-user-edit"></i>
            </div>
            <h3 class="text-primary">Update Student Information</h3>
            <p class="text-muted">Edit the details below and save changes</p>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <h5><i class="fas fa-exclamation-triangle"></i> Please fix the following errors:</h5>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="input-group">
                <i class="fas fa-user input-icon"></i>
                <div class="form-floating w-100">
                    <input type="text" name="name" class="form-control with-icon" id="name" 
                           value="{{ old('name', $student->name) }}" placeholder="Student Name" required>
                    <label for="name" class="form-label">Full Name</label>
                </div>
            </div>
            
            <div class="input-group">
                <i class="fas fa-envelope input-icon"></i>
                <div class="form-floating w-100">
                    <input type="email" name="email" class="form-control with-icon" id="email" 
                           value="{{ old('email', $student->email) }}" placeholder="Email Address" required>
                    <label for="email" class="form-label">Email Address</label>
                </div>
            </div>
            
            <div class="input-group">
                <i class="fas fa-phone input-icon"></i>
                <div class="form-floating w-100">
                    <input type="text" name="phone" class="form-control with-icon" id="phone" 
                           value="{{ old('phone', $student->phone) }}" placeholder="Phone Number" required>
                    <label for="phone" class="form-label">Phone Number</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update Student
            </button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>