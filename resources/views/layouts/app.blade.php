<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookSwap</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f8f9fb;
            color: #111827;
        }

        .navbar {
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            padding: 16px 0;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .nav-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand-area {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .brand {
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            color: #111827;
        }

        .nav-link {
            text-decoration: none;
            color: #374151;
            font-size: 14px;
        }

        .btn {
            display: inline-block;
            background: #0b63c9;
            color: white;
            text-decoration: none;
            border: none;
            padding: 10px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn:hover {
            background: #0954aa;
        }

        .hero {
            background: #edf3f3;
            padding: 70px 20px;
            text-align: center;
            margin-top: 0;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 16px;
        }

        .hero p {
            color: #6b7280;
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.5;
        }

        .section {
            padding: 40px 0;
        }

        .section h2 {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .section-sub {
            color: #6b7280;
            margin-bottom: 24px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            overflow: hidden;
        }

        .card-image {
            background: #e5e7eb;
            height: 290px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #9ca3af;
            font-size: 56px;
            position: relative;
        }

        .badge {
            position: absolute;
            top: 14px;
            right: 14px;
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 999px;
        }

        .badge-new {
            background: #dcfce7;
            color: #166534;
        }

        .badge-good {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .badge-fair {
            background: #fef3c7;
            color: #92400e;
        }

        .badge-poor {
            background: #fee2e2;
            color: #991b1b;
        }

        .card-body {
            padding: 16px;
        }

        .course {
            font-size: 12px;
            color: #6b7280;
            margin-bottom: 8px;
        }

        .title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .author {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 16px;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price {
            font-size: 30px;
            font-weight: bold;
        }

        .form-wrap {
            max-width: 600px;
            margin: 40px auto;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #111827;
            font-size: 14px;
        }

        .form-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 24px;
        }

        .form-card h1 {
            font-size: 38px;
            margin-bottom: 10px;
        }

        .form-card p {
            color: #6b7280;
            margin-bottom: 24px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 14px;
            background: white;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        .alert {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .detail-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1fr;
            margin-top: 24px;
        }

        .detail-image {
            background: #e5e7eb;
            min-height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #9ca3af;
            font-size: 72px;
        }

        .detail-image img,
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .detail-body {
            padding: 32px;
        }

        .detail-body .title {
            font-size: 24px;
            margin-bottom: 16px;
        }

        .detail-meta {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 14px;
        }

        .detail-divider {
            border-top: 1px solid #e5e7eb;
            margin: 20px 0;
        }

        .detail-price-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 24px;
        }

        .small-label {
            color: #6b7280;
            font-size: 12px;
            margin-bottom: 4px;
        }

        @media (max-width: 900px) {
            .grid {
                grid-template-columns: 1fr;
            }

            .detail-card {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container nav-inner">
            <div class="brand-area">
                <a href="/books" class="brand">BookSwap</a>
                <a href="/books" class="nav-link">Browse Books</a>
            </div>
            <a href="/books/create" class="btn">+ Add Book</a>
        </div>
    </nav>

    @yield('content')
</body>
</html>