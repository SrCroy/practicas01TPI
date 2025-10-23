<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusShop - Tienda Online Moderna</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #f43f5e;
            --dark: #0f172a;
            --light: #f8fafc;
            --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --shadow: 0 10px 25px rgba(0,0,0,0.1);
            --shadow-lg: 0 25px 50px rgba(0,0,0,0.15);
            --radius: 16px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: var(--light);
            color: var(--dark);
            overflow-x: hidden;
        }

        /* Navbar Moderna */
        .navbar-modern {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            padding: 1rem 0;
        }

        .navbar-scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: var(--shadow);
        }

        .logo {
            font-weight: 800;
            font-size: 1.8rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
        }

        .logo::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 30px;
            height: 3px;
            background: var(--gradient);
            border-radius: 10px;
        }

        .nav-link {
            font-weight: 600;
            margin: 0 0.5rem;
            position: relative;
            color: var(--dark) !important;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .search-box {
            background: rgba(255, 255, 255, 0.8);
            border: 2px solid rgba(99, 102, 241, 0.1);
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            transition: all 0.3s ease;
        }

        .search-box:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        /* Hero Section */
        .hero-section {
            background: var(--gradient);
            color: white;
            padding: 8rem 0 6rem;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.05)" points="0,1000 1000,0 1000,1000"/></svg>');
            background-size: cover;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn-modern {
            background: var(--gradient-secondary);
            border: none;
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
        }

        .btn-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }

        .btn-modern:hover::before {
            left: 100%;
        }

        .btn-modern:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        /* Product Cards */
        .product-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            transition: all 0.3s ease;
            border: none;
            box-shadow: var(--shadow);
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .product-image {
            height: 250px;
            background: linear-gradient(45deg, #f0f4ff, #e6f7ff);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .product-image img {
            max-height: 80%;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--secondary);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .product-old-price {
            text-decoration: line-through;
            color: #94a3b8;
            font-size: 1rem;
        }

        /* Categorías */
        .category-card {
            background: white;
            border-radius: var(--radius);
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: var(--shadow);
            border: none;
            position: relative;
            overflow: hidden;
        }

        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .category-card:hover::before {
            transform: scaleX(1);
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .category-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Testimonios */
        .testimonial-card {
            background: white;
            border-radius: var(--radius);
            padding: 2rem;
            box-shadow: var(--shadow);
            border: none;
            position: relative;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 1rem;
            left: 1rem;
            font-size: 4rem;
            color: var(--primary);
            opacity: 0.1;
            font-family: serif;
        }

        .stars {
            color: #fbbf24;
        }

        /* Footer */
        .footer {
            background: var(--dark);
            color: white;
            padding: 5rem 0 2rem;
        }

        .footer h5 {
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .footer h5::after {
            content: '';
            position: absolute;
            bottom: -0.5rem;
            left: 0;
            width: 30px;
            height: 2px;
            background: var(--primary);
        }

        .footer a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: white;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            margin-right: 0.5rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }

        /* Animaciones */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .product-card {
                margin-bottom: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar Moderna -->
    <nav class="navbar navbar-expand-lg navbar-modern fixed-top">
        <div class="container">
            <a class="navbar-brand logo" href="#">NexusShop</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nuevo</a>
                    </li>
                </ul>
                
                <div class="d-flex align-items-center">
                    <div class="input-group search-box me-3">
                        <span class="input-group-text bg-transparent border-0">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control border-0 bg-transparent" placeholder="Buscar productos...">
                    </div>
                    
                    <div class="btn-group">
                        <a href="#" class="btn btn-outline-dark position-relative me-2">
                            <i class="bi bi-heart"></i>
                        </a>
                        <a href="#" class="btn btn-outline-dark position-relative">
                            <i class="bi bi-cart3"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Descubre la nueva era de compras online</h1>
                    <p class="hero-subtitle">Productos seleccionados, envío rápido y la mejor experiencia de usuario. Todo en un solo lugar.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <button class="btn btn-modern">Explorar Productos</button>
                        <button class="btn btn-outline-light">Ver Ofertas</button>
                    </div>
                </div>
                <div class="col-lg-6 text-center floating">
                    <img src="https://cdn.pixabay.com/photo/2021/11/04/04/46/online-shopping-6766793_1280.png" alt="Hero Image" class="img-fluid" style="max-height: 500px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Productos Destacados -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Productos Destacados</h2>
                <p class="text-muted">Los artículos más populares de nuestra tienda</p>
            </div>
            
            <div class="row">
                <!-- Producto 1 -->
                <div class="col-md-6 col-lg-3 mb-4 fade-in">
                    <div class="product-card h-100">
                        <div class="product-image">
                            <span class="product-badge">-20%</span>
                            <img src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_1280.jpg" alt="iPhone" class="img-fluid">
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title fw-bold">iPhone 14 Pro</h5>
                            <p class="card-text text-muted">El último smartphone de Apple con Dynamic Island.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="product-price">$999</span>
                                    <span class="product-old-price ms-2">$1249</span>
                                </div>
                                <button class="btn btn-primary rounded-circle p-2">
                                    <i class="bi bi-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Producto 2 -->
                <div class="col-md-6 col-lg-3 mb-4 fade-in">
                    <div class="product-card h-100">
                        <div class="product-image">
                            <img src="https://cdn.pixabay.com/photo/2016/11/29/08/41/apple-1868496_1280.jpg" alt="MacBook" class="img-fluid">
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title fw-bold">MacBook Air M2</h5>
                            <p class="card-text text-muted">Potente y ligero, perfecto para trabajo y creatividad.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="product-price">$1199</span>
                                </div>
                                <button class="btn btn-primary rounded-circle p-2">
                                    <i class="bi bi-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Producto 3 -->
                <div class="col-md-6 col-lg-3 mb-4 fade-in">
                    <div class="product-card h-100">
                        <div class="product-image">
                            <span class="product-badge">Nuevo</span>
                            <img src="https://cdn.pixabay.com/photo/2015/05/12/09/13/social-media-763731_1280.jpg" alt="Smart Watch" class="img-fluid">
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title fw-bold">Apple Watch Series 8</h5>
                            <p class="card-text text-muted">Monitoriza tu salud y mantente conectado.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="product-price">$399</span>
                                </div>
                                <button class="btn btn-primary rounded-circle p-2">
                                    <i class="bi bi-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Producto 4 -->
                <div class="col-md-6 col-lg-3 mb-4 fade-in">
                    <div class="product-card h-100">
                        <div class="product-image">
                            <img src="https://cdn.pixabay.com/photo/2014/09/27/14/13/headphones-463685_1280.jpg" alt="AirPods" class="img-fluid">
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title fw-bold">AirPods Pro</h5>
                            <p class="card-text text-muted">Sonido inmersivo con cancelación activa de ruido.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="product-price">$249</span>
                                </div>
                                <button class="btn btn-primary rounded-circle p-2">
                                    <i class="bi bi-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categorías -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Explora Categorías</h2>
                <p class="text-muted">Encuentra lo que necesitas por categoría</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="category-card h-100">
                        <div class="category-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h5>Teléfonos</h5>
                        <p class="text-muted">Los últimos smartphones</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="category-card h-100">
                        <div class="category-icon">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h5>Laptops</h5>
                        <p class="text-muted">Para trabajo y entretenimiento</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="category-card h-100">
                        <div class="category-icon">
                            <i class="bi bi-smartwatch"></i>
                        </div>
                        <h5>Wearables</h5>
                        <p class="text-muted">Tecnología para tu día a día</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="category-card h-100">
                        <div class="category-icon">
                            <i class="bi bi-headphones"></i>
                        </div>
                        <h5>Audio</h5>
                        <p class="text-muted">La mejor experiencia sonora</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Lo que dicen nuestros clientes</h2>
                <p class="text-muted">Experiencias reales de compradores</p>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card h-100">
                        <div class="stars mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="mb-4">"Increíble experiencia de compra. El producto llegó antes de lo esperado y en perfectas condiciones. Definitivamente volveré a comprar."</p>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <span class="text-white fw-bold">M</span>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">María González</h6>
                                <small class="text-muted">Cliente desde 2022</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card h-100">
                        <div class="stars mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <p class="mb-4">"La atención al cliente es excepcional. Me ayudaron en todo momento y resolvieron mis dudas rápidamente. Muy recomendable."</p>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <span class="text-white fw-bold">C</span>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">Carlos Rodríguez</h6>
                                <small class="text-muted">Cliente desde 2021</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card h-100">
                        <div class="stars mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="mb-4">"Los precios son competitivos y la calidad de los productos es excelente. Encontré exactamente lo que buscaba a un precio increíble."</p>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <span class="text-white fw-bold">A</span>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">Ana Martínez</h6>
                                <small class="text-muted">Cliente desde 2023</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>NexusShop</h5>
                    <p class="mb-4">Tu destino para compras online con los mejores precios, productos de calidad y servicio excepcional.</p>
                    <div class="social-links">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Enlaces</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Inicio</a></li>
                        <li class="mb-2"><a href="#">Productos</a></li>
                        <li class="mb-2"><a href="#">Categorías</a></li>
                        <li class="mb-2"><a href="#">Ofertas</a></li>
                        <li class="mb-2"><a href="#">Nuevo</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Categorías</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Teléfonos</a></li>
                        <li class="mb-2"><a href="#">Laptops</a></li>
                        <li class="mb-2"><a href="#">Tablets</a></li>
                        <li class="mb-2"><a href="#">Wearables</a></li>
                        <li class="mb-2"><a href="#">Audio</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-geo-alt me-2"></i>
                            Calle Principal 123, Ciudad
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-telephone me-2"></i>
                            +1 234 567 890
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-envelope me-2"></i>
                            info@nexusshop.com
                        </li>
                    </ul>
                </div>
            </div>
            
            <hr class="my-4" style="border-color: rgba(255,255,255,0.1);">
            
            <div class="text-center">
                <p>&copy; 2023 NexusShop. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Efecto de scroll en navbar
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-modern');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

        // Animación de elementos al hacer scroll
        const fadeElements = document.querySelectorAll('.fade-in');
        
        const fadeInOnScroll = function() {
            fadeElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        };
        
        window.addEventListener('scroll', fadeInOnScroll);
        // Ejecutar una vez al cargar la página
        fadeInOnScroll();
    </script>
</body>
</html>