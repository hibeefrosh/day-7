<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-img {
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            height: 100%;
            object-fit: cover;
        }

        .card-body {
            padding: 2rem;
        }

        .card-title {
            color: #007bff;
            font-size: 2rem;
        }

        .card-text {
            color: #6c757d;
            font-size: 1.2rem;
        }

        .btn-light {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .btn-light:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ asset('images/img1.jpeg') }}" class="card-img-top" alt="Content Image">

                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Welcome to the Content Page!</h5>
                        <p class="card-text">This is the first page content. You can add more details here.</p>
                        <a href="{{ route('visitors') }}" class="btn btn-light">Visit the Visitors Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>