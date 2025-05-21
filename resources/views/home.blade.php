<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5026231084 - Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h1 {
            color: #0d6efd;
            margin-bottom: 30px;
            text-align: center;
        }
        .list-group-item {
            transition: all 0.3s ease;
        }
        .list-group-item:hover {
            transform: translateY(-3px);
            background-color: #f1f8ff;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My Web Development Portfolio</h1>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="list-group">
                    <a href="{{ url('/html') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        HTML Basic - ITS Web Article
                        <span class="badge bg-primary rounded-pill">
                            <i class="bi bi-code"></i>
                        </span>
                    </a>

                    <a href="{{ url('/css') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        CSS Demo - Tables & Multi-Column Layout
                        <span class="badge bg-success rounded-pill">
                            <i class="bi bi-palette"></i>
                        </span>
                    </a>

                    <a href="{{ url('/bootstrap') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Bootstrap Example - Helpero
                        <span class="badge bg-info rounded-pill">
                            <i class="bi bi-bootstrap"></i>
                        </span>
                    </a>

                    <a href="{{ url('/javascript') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        JavaScript Example - Simple Calculator
                        <span class="badge bg-warning rounded-pill">
                            <i class="bi bi-filetype-js"></i>
                        </span>
                    </a>

                    <a href="{{ url('/javascript/js2') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        JavaScript Example - Form Validation
                        <span class="badge bg-warning rounded-pill">
                            <i class="bi bi-filetype-js"></i>
                        </span>
                    </a>

                    <a href="{{ url('/linktree') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Linktree Clone
                        <span class="badge bg-danger rounded-pill">
                            <i class="bi bi-link"></i>
                        </span>
                    </a>

                    <a href="{{ url('/danantara') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Danantara Clone
                        <span class="badge bg-secondary rounded-pill">
                            <i class="bi bi-layout-text-window"></i>
                        </span>
                    </a>

                    <a href="{{ url('/ets') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Evaluasi Tengah Semester - Personal Website
                        <span class="badge bg-primary rounded-pill">
                            <i class="bi bi-file-earmark-code"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer">
            <p> Azhar Aditya Pratama | 5026231084 | Pemrograman Web</p>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</body>
</html>
