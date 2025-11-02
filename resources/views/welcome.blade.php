<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
        }
        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .card-hover {
            transition: transform 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                🛍️ Product Management
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('products.index') }}">View Products</a>
                <a class="nav-link" href="{{ route('products.create') }}">Add Product</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Welcome to Product Management System</h1>
            <p class="lead mb-4">A complete CRUD application built with Laravel for managing your product inventory</p>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="text-center">
                                <div class="feature-icon">📦</div>
                                <h5>Manage Products</h5>
                                <p class="small">Add, edit, and delete products with ease</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <div class="feature-icon">🔍</div>
                                <h5>View Inventory</h5>
                                <p class="small">Browse and search through your product catalog</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <div class="feature-icon">📊</div>
                                <h5>Track Stock</h5>
                                <p class="small">Monitor product quantities and categories</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <a href="{{ route('products.index') }}" class="btn btn-light btn-lg me-3">View Products</a>
                <a href="{{ route('products.create') }}" class="btn btn-outline-light btn-lg">Add New Product</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card card-hover h-100">
                        <div class="card-body text-center p-4">
                            <h3 class="text-primary">🚀</h3>
                            <h4 class="card-title">Fast & Efficient</h4>
                            <p class="card-text">Built with Laravel for optimal performance and clean code architecture.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card card-hover h-100">
                        <div class="card-body text-center p-4">
                            <h3 class="text-success">📱</h3>
                            <h4 class="card-title">Responsive Design</h4>
                            <p class="card-text">Works perfectly on desktop, tablet, and mobile devices.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card card-hover h-100">
                        <div class="card-body text-center p-4">
                            <h3 class="text-warning">🛡️</h3>
                            <h4 class="card-title">Secure & Validated</h4>
                            <p class="card-text">Form validation and security features built-in.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card card-hover h-100">
                        <div class="card-body text-center p-4">
                            <h3 class="text-info">⚡</h3>
                            <h4 class="card-title">CRUD Operations</h4>
                            <p class="card-text">Full Create, Read, Update, Delete functionality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h2 class="mb-5">Built With Modern Technologies</h2>
            <div class="row justify-content-center">
                <div class="col-md-2 col-4 mb-3">
                    <div class="bg-white rounded p-3 shadow-sm">
                        <h5 class="text-primary">Laravel</h5>
                        <small class="text-muted">PHP Framework</small>
                    </div>
                </div>
                <div class="col-md-2 col-4 mb-3">
                    <div class="bg-white rounded p-3 shadow-sm">
                        <h5 class="text-primary">Bootstrap 5</h5>
                        <small class="text-muted">CSS Framework</small>
                    </div>
                </div>
                <div class="col-md-2 col-4 mb-3">
                    <div class="bg-white rounded p-3 shadow-sm">
                        <h5 class="text-primary">MySQL</h5>
                        <small class="text-muted">Database</small>
                    </div>
                </div>
                <div class="col-md-2 col-4 mb-3">
                    <div class="bg-white rounded p-3 shadow-sm">
                        <h5 class="text-primary">Eloquent ORM</h5>
                        <small class="text-muted">Database Layer</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Product Management System. Built with Laravel for portfolio demonstration.</p>
            <small class="text-muted">A complete CRUD application showcasing modern web development skills</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>