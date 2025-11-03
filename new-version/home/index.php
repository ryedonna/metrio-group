<?php
// index.php - Bootstrap-focused version matching design reference
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reshaping the Future of Sustainable Construction</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Minimal Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-white">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top border-bottom shadow-sm">
        <div class="container px-3 px-lg-5">
            <a class="navbar-brand fw-bold fs-5" href="#home">
                Metrio Group
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-lg-4">
                    <li class="nav-item"><a class="nav-link text-dark fw-normal" href="#focus">Focus Areas</a></li>
                    <li class="nav-item"><a class="nav-link text-dark fw-normal" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link text-dark fw-normal" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link text-dark fw-normal" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="bg-light">
        <div class="container-fluid px-0">
            <h1 class="display-5 fw-bold px-3 px-lg-5 py-4 mb-0">Reshaping the Future of Sustainable Construction</h1>
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=1600&h=500&fit=crop" 
                 alt="Sustainable Building" 
                 class="img-fluid w-100" 
                 style="max-height: 500px; object-fit: cover;">
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-5">
        <div class="container px-3 px-lg-5">
            <div class="row g-4 align-items-start">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3 fs-4">We do right by humans and the planet.</h2>
                    <p class="text-secondary lh-lg">
                        Sustainable construction is core to our philosophy. We integrate cutting-edge technology with 
                        environmentally conscious practices to deliver projects that stand the test of time while 
                        minimizing environmental impact.
                    </p>
                    <button class="btn btn-dark px-4 py-2 mt-3">Read More</button>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=400&fit=crop" 
                         alt="Green Building" 
                         class="img-fluid rounded-3 shadow-sm">
                </div>
            </div>
        </div>
    </section>

    <!-- Focus Areas Section -->
    <section id="focus" class="py-5 bg-dark text-white">
        <div class="container px-3 px-lg-5">
            <h3 class="fw-bold mb-3 fs-4">Our Focus Areas</h3>
            <p class="text-white-50 lh-lg mb-0">
                We specialize in comprehensive construction solutions across multiple sectors. Our expertise spans 
                commercial real estate, aviation, and sports & leisure facilities, delivering sustainable solutions 
                that meet the highest standards.
            </p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5">
        <div class="container px-3 px-lg-5">
            <!-- Commercial Real Estate -->
            <div class="row g-4 align-items-center py-4 border-bottom">
                <div class="col-lg-6">
                    <h4 class="fw-bold mb-3 fs-5">Commercial Real Estate</h4>
                    <p class="text-secondary lh-lg">
                        Modern office spaces and commercial buildings designed for efficiency and sustainability. We create workspaces 
                        that inspire productivity while minimizing carbon footprint.
                    </p>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop" 
                         alt="Commercial" 
                         class="img-fluid rounded-3 shadow-sm">
                </div>
            </div>

            <!-- Aviation -->
            <div class="row g-4 align-items-center py-4 border-bottom">
                <div class="col-lg-6">
                    <h4 class="fw-bold mb-3 fs-5">Aviation</h4>
                    <p class="text-secondary lh-lg">
                        Cutting-edge aviation infrastructure including terminals and maintenance facilities. Built with precision 
                        and designed for operational excellence.
                    </p>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <img src="https://images.unsplash.com/photo-1539003527888-a319ce3da0c0?w=600&h=400&fit=crop" 
                         alt="Aviation" 
                         class="img-fluid rounded-3 shadow-sm">
                </div>
            </div>

            <!-- Sports & Leisure -->
            <div class="row g-4 align-items-center py-4">
                <div class="col-lg-6">
                    <h4 class="fw-bold mb-3 fs-5">Sports & Leisure</h4>
                    <p class="text-secondary lh-lg">
                        World-class sports venues and leisure facilities that combine functionality with aesthetic excellence. 
                        Engineered for maximum visitor experience.
                    </p>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <img src="https://images.unsplash.com/photo-1552418895-2e4c4af4b8e2?w=600&h=400&fit=crop" 
                         alt="Sports" 
                         class="img-fluid rounded-3 shadow-sm">
                </div>
            </div>
        </div>
    </section>

    <!-- We Plan, We Build Section -->
    <section class="py-5 bg-light">
        <div class="container px-3 px-lg-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                    <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=600&h=600&fit=crop" 
                         alt="Construction" 
                         class="img-fluid rounded-3 shadow-sm">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <h2 class="fw-bold mb-3 fs-4">We Plan, We Build, We Deliver</h2>
                    <p class="text-secondary lh-lg">
                        Our comprehensive approach ensures every project is meticulously planned, expertly executed, 
                        and delivered on time. From initial concept to final handover, we maintain the highest standards 
                        of quality and sustainability.
                    </p>
                    <button class="btn btn-dark px-4 py-2 mt-3">Get Started</button>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Provide Section -->
    <section class="py-5">
        <div class="container px-3 px-lg-5">
            <h2 class="fw-bold text-center mb-5 fs-3">What We Provide</h2>
            
            <?php
            $provisions = [
                ['title' => 'Project Design', 'desc' => 'Innovative design solutions that blend functionality with aesthetic excellence, ensuring projects meet modern standards.'],
                ['title' => 'Construction Management', 'desc' => 'Professional project management from conception to completion, ensuring timely delivery and cost efficiency.'],
                ['title' => 'Site Preparation', 'desc' => 'Comprehensive site preparation including surveying, clearing, and groundwork with minimal environmental impact.'],
                ['title' => 'Construction', 'desc' => 'Expert construction services utilizing the latest techniques and sustainable building practices.'],
                ['title' => 'Cost Monitoring', 'desc' => 'Rigorous cost tracking and budget management to ensure financial efficiency throughout the project lifecycle.']
            ];

            foreach ($provisions as $provision):
            ?>
            <div class="row g-4 align-items-start py-3 border-bottom">
                <div class="col-auto">
                    <div class="rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                        <i class="fas fa-circle" style="font-size: 8px;"></i>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5 class="fw-bold mb-0"><?php echo htmlspecialchars($provision['title']); ?></h5>
                </div>
                <div class="col-lg-8">
                    <p class="text-secondary lh-lg mb-0"><?php echo htmlspecialchars($provision['desc']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Latest Projects Section -->
    <section id="projects" class="py-5" style="background-color: #d4b896;">
        <div class="container px-3 px-lg-5">
            <h2 class="fw-bold mb-4 fs-3 text-dark">Latest Projects</h2>
            
            <div class="row g-3">
                <?php
                $projects = [
                    ['number' => '01', 'title' => 'Metropolitan Hub', 'image' => 'https://images.unsplash.com/photo-1486439773649-6e0db34014d7?w=500&h=500&fit=crop'],
                    ['number' => '02', 'title' => 'Corporate Towers', 'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=500&h=500&fit=crop'],
                    ['number' => '03', 'title' => 'Eco Park Complex', 'image' => 'https://images.unsplash.com/photo-1486442945352-5253e18b6ac7?w=500&h=500&fit=crop'],
                    ['number' => '04', 'title' => 'Innovation Center', 'image' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=500&h=500&fit=crop'],
                ];

                foreach ($projects as $project):
                ?>
                <div class="col-md-6 col-lg-3">
                    <div class="position-relative overflow-hidden rounded-3 shadow" style="height: 350px;">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>" 
                             alt="<?php echo htmlspecialchars($project['title']); ?>" 
                             class="w-100 h-100" 
                             style="object-fit: cover;">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 text-white" 
                             style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                            <div class="fw-bold opacity-75 mb-1" style="font-size: 1.5rem;"><?php echo htmlspecialchars($project['number']); ?></div>
                            <h5 class="mb-0 fs-6"><?php echo htmlspecialchars($project['title']); ?></h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-white">
        <div class="container px-3">
            <h2 class="fw-bold text-center mb-5 fs-3">Get In Touch</h2>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <form method="POST">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control py-2" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control py-2" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control py-2" placeholder="Subject" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control py-2" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark px-5 py-2">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 text-dark" style="background-color: #d4b896;">
        <div class="container px-3 px-lg-5">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">BuildCo</h5>
                    <p class="text-dark opacity-75">Reshaping the future of sustainable construction.</p>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-dark text-decoration-none opacity-75">Home</a></li>
                        <li class="mb-2"><a href="#focus" class="text-dark text-decoration-none opacity-75">Services</a></li>
                        <li class="mb-2"><a href="#projects" class="text-dark text-decoration-none opacity-75">Projects</a></li>
                        <li class="mb-2"><a href="#contact" class="text-dark text-decoration-none opacity-75">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold mb-3">Contact Info</h6>
                    <p class="text-dark opacity-75 mb-1">Email: info@buildco.com</p>
                    <p class="text-dark opacity-75 mb-1">Phone: +1 (555) 123-4567</p>
                    <p class="text-dark opacity-75 mb-0">Address: 123 Construction Ave</p>
                </div>
            </div>
            <hr class="my-4 border-dark opacity-25">
            <div class="text-center">
                <p class="mb-0 text-dark opacity-75">&copy; 2025 BuildCo. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>