<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa Employees</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .employee-card {
            background-color: white;
            border-radius: 0.375rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            text-align: center;
            margin-bottom: 2rem;
            transition: transform 0.3s;
        }
        .employee-card:hover {
            transform: translateY(-10px);
        }
        .employee-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-top-left-radius: 0.375rem;
            border-top-right-radius: 0.375rem;
        }
        .employee-card .card-body {
            padding: 1rem;
        }
        .employee-card h5 {
            margin: 0;
            background-color: #ff69b4;
            color: white;
            padding: 0.75rem 0;
            border-bottom-left-radius: 0.375rem;
            border-bottom-right-radius: 0.375rem;
        }
        .employee-card p {
            margin: 0;
            padding: 0.5rem 0;
            background-color: #ff69b4;
            color: white;
            border-bottom-left-radius: 0.375rem;
            border-bottom-right-radius: 0.375rem;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="text-center mb-4">
        <h2>Meet Our Spa & Beauty Experts</h2>
    </div>
    <div class="row">
        <!-- Employee 1 -->
        <div class="col-md-3">
            <div class="employee-card">
                <img src="https://via.placeholder.com/300x400" alt="Oliva Mia">
                <div class="card-body p-0">
                    <h5>Oliva Mia</h5>
                    <p>Spa & Beauty Expert</p>
                </div>
            </div>
        </div>
        <!-- Employee 2 -->
        <div class="col-md-3">
            <div class="employee-card">
                <img src="https://via.placeholder.com/300x400" alt="Charlotte Ross">
                <div class="card-body p-0">
                    <h5>Charlotte Ross</h5>
                    <p>Spa & Beauty Expert</p>
                </div>
            </div>
        </div>
        <!-- Employee 3 -->
        <div class="col-md-3">
            <div class="employee-card">
                <img src="https://via.placeholder.com/300x400" alt="Amelia Luna">
                <div class="card-body p-0">
                    <h5>Amelia Luna</h5>
                    <p>Spa & Beauty Expert</p>
                </div>
            </div>
        </div>
        <!-- Employee 4 -->
        <div class="col-md-3">
            <div class="employee-card">
                <img src="https://via.placeholder.com/300x400" alt="Isabella Evelyn">
                <div class="card-body p-0">
                    <h5>Isabella Evelyn</h5>
                    <p>Spa & Beauty Expert</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
