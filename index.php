<?php include 'lang/lang.php'; ?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oi! Eu sou o Edu | Dev</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark: '#0a0a0a',
                        darker: '#050505',
                        purple: {
                            light: '#a855f7',
                            dark: '#7e22ce'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom CSS for dark tech pattern */
        body {
            background-color: #0a0a0a;
            color: #e5e7eb;
            position: relative;
            overflow-x: hidden;
        }
        
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(90deg, rgba(168, 85, 247, 0.05) 1px, transparent 1px),
                linear-gradient(rgba(168, 85, 247, 0.05) 1px, transparent 1px);
            background-size: 30px 30px;
            z-index: -1;
            opacity: 0.3;
        }
        
        .tech-border {
            position: relative;
        }
        
        .tech-border::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #a855f7, transparent);
        }
        
        .tech-card {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            background: linear-gradient(145deg, #111111, #0d0d0d);
            border: 1px solid #1e1e1e;
        }
        
        .tech-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(168, 85, 247, 0.2);
            border-color: #a855f7;
        }
        
        .tech-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.1) 0%, rgba(168, 85, 247, 0) 50%);
        }
        
        .circuit-pattern {
            background-image: 
                radial-gradient(circle, rgba(168, 85, 247, 0.1) 1px, transparent 1px),
                radial-gradient(circle, rgba(168, 85, 247, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        /* Contact form styles */
        .contact-form input,
        .contact-form textarea {
            transition: all 0.3s ease;
            background-color: #111111;
            border: 1px solid #1e1e1e;
            color: #e5e7eb;
        }
        
        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #a855f7;
            box-shadow: 0 0 0 3px rgba(168, 85, 247, 0.2);
            outline: none;
        }
        
        .contact-form button:hover {
            transform: translateY(-2px);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #0d0d0d;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #7e22ce;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #a855f7;
        }
        
        /* Glow effect */
        .glow {
            text-shadow: 0 0 10px rgba(168, 85, 247, 0.5);
        }
        
        .glow-box {
            box-shadow: 0 0 15px rgba(168, 85, 247, 0.3);
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Navigation -->
    <nav class="bg-darker shadow-sm sticky top-0 z-50 border-b border-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center text-white font-bold text-xl glow">E</div>
                        <span class="ml-2 text-xl font-bold text-purple-400">Eduardo A. F.</span>
                    </div>
                </div>
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-8">
                    <a href="#home" class="text-purple-400 hover:text-purple-300 px-3 py-2 rounded-md text-sm font-medium"><?= $t['home'] ?></a>
                    <a href="#skills" class="text-gray-400 hover:text-purple-300 px-3 py-2 rounded-md text-sm font-medium"><?= $t['skills'] ?></a>
                    <a href="#portfolio" class="text-gray-400 hover:text-purple-300 px-3 py-2 rounded-md text-sm font-medium"><?= $t['portfolio'] ?></a>
                    <a href="#contact" class="text-gray-400 hover:text-purple-300 px-3 py-2 rounded-md text-sm font-medium"><?= $t['contact'] ?></a>
                    <!-- Seletor de idioma -->
                    <div class="flex space-x-2">
                        <a href="?lang=pt" class="text-xs px-2 py-1 <?= $lang === 'pt' ? 'bg-purple-600 text-white' : 'bg-gray-800 text-gray-300' ?> rounded">PT</a>
                        <a href="?lang=en" class="text-xs px-2 py-1 <?= $lang === 'en' ? 'bg-purple-600 text-white' : 'bg-gray-800 text-gray-300' ?> rounded">EN</a>
                    </div>
                </div>
                <div class="-mr-2 flex items-center md:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-300 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                        <span class="sr-only">Abrir menu principal</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div class="hidden md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-darker border-t border-gray-800">
                <a href="#home" class="text-purple-400 block px-3 py-2 rounded-md text-base font-medium"><?= $t['home'] ?></a>
                <a href="#skills" class="text-gray-400 hover:text-purple-300 block px-3 py-2 rounded-md text-base font-medium"><?= $t['skills'] ?></a>
                <a href="#portfolio" class="text-gray-400 hover:text-purple-300 block px-3 py-2 rounded-md text-base font-medium"><?= $t['portfolio'] ?></a>
                <a href="#contact" class="text-gray-400 hover:text-purple-300 block px-3 py-2 rounded-md text-base font-medium"><?= $t['contact'] ?></a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-100 mb-6">
                        <span class="text-purple-400 glow"><?= $t['hi_im'] ?></span> <?= $t['name'] ?>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-400 mb-8 max-w-lg">
                        <?= $t['tagline'] ?>
                    </p>
                    <div class="flex space-x-4">
                        <a href="#contact" class="px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-500 transition duration-300 font-medium shadow-lg hover:shadow-xl glow-box">
                            <?= $t['get_in_touch'] ?>
                        </a>
                        <a href="#portfolio" class="px-6 py-3 border border-purple-600 text-purple-400 rounded-lg hover:bg-gray-800 transition duration-300 font-medium">
                            <?= $t['view_work'] ?>
                        </a>
                    </div>
                </div>
                <div class="relative flex justify-center">
                    <div class="w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 bg-gray-900 rounded-full flex items-center justify-center floating glow-box">
                        <div class="w-56 h-56 md:w-72 md:h-72 lg:w-80 lg:h-80 bg-gray-800 rounded-full flex items-center justify-center">
                            <div class="w-48 h-48 md:w-60 md:h-60 lg:w-72 lg:h-72 bg-gray-700 rounded-full flex items-center justify-center">
                                <img src="https://media.licdn.com/dms/image/v2/D4D03AQFz9GMtO3F_Xg/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1702666504653?e=1753315200&v=beta&t=_E9ikXKxLnbJuPai1_Fa4gnoQrwrC24cx2-oRJcbuck" alt="Profile" class="w-40 h-40 md:w-52 md:h-52 lg:w-64 lg:h-64 rounded-full object-cover border-4 border-gray-800">
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-5 left-10 md:left-20 bg-gray-800 px-4 py-2 rounded-lg shadow-lg border border-gray-700">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-green-500 rounded-full mr-2 animate-pulse"></div>
                            <span class="text-sm font-medium text-gray-300"><?= $t['currently_working'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-100 mb-4 tech-border relative pb-2 inline-block"><?= $t['my_skills'] ?></h2>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto"><?= $t['skills_description'] ?></p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

                <!-- Skill X -->
                <?php $index = 0;foreach($t['skills'] as $skill){ ?>
                    <div class="tech-card p-6 rounded-xl wow fadeInUp" data-wow-delay="<?= $index * 0.2 ?>s">
                        <div class="w-14 h-14 bg-gray-800 rounded-lg flex items-center justify-center mb-4">
                            <i class="<?=  $skill['fa'] ?> text-purple-400 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-100 mb-2"><?= $skill['name'] ?></h3>
                        <p class="text-gray-400 mb-3"><?= $skill['description'] ?></p>
                        <div class="w-full bg-gray-800 rounded-full h-2">
                            <div class="bg-purple-500 h-2 rounded-full mt-auto" style="width: <?= $skill['level'] ?>%"></div>
                        </div>
                    </div>
                <?php $index++;} ?>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-darker circuit-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-100 mb-4 tech-border relative pb-2 inline-block"><?= $t['my_portfolio'] ?></h2>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto"><?= $t['portfolio_description'] ?></p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="tech-card rounded-xl overflow-hidden">
                    <div class="h-48 bg-gray-800 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Project 1" class="w-full h-full object-cover opacity-80 hover:opacity-70 transition duration-300">
                        <div class="absolute inset-0 bg-purple-600 opacity-0 hover:opacity-20 transition duration-300"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-gray-100"><?= $t['ecommerce_platform'] ?></h3>
                            <span class="bg-gray-800 text-purple-400 text-xs font-medium px-2.5 py-0.5 rounded">React</span>
                        </div>
                        <p class="text-gray-400 mb-4"><?= $t['ecommerce_desc'] ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">React</span>
                            <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">Node.js</span>
                            <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">MongoDB</span>
                            <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">Stripe</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="tech-card rounded-xl overflow-hidden">
                    <div class="h-48 bg-gray-800 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555421689-3f034debb7ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Project 2" class="w-full h-full object-cover opacity-80 hover:opacity-70 transition duration-300">
                        <div class="absolute inset-0 bg-purple-600 opacity-0 hover:opacity-20 transition duration-300"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-gray-100">Task Management App</h3>
                            <span class="bg-gray-800 text-purple-400 text-xs font-medium px-2.5 py-0.5 rounded">React Native</span>
                        </div>
                        <p class="text-gray-400 mb-4">A mobile productivity app with team collaboration features, due date tracking, and notifications.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">React Native</span>
                            <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">Firebase</span>
                            <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">Redux</span>
                            <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">Expo</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="tech-card rounded-xl overflow-hidden">
                    <div class="h-48 bg-gray-800 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="Project 3" class="w-full h-full object-cover opacity-80 hover:opacity-70 transition duration-300">
                        <div class="absolute inset-0 bg-purple-600 opacity-0 hover:opacity-20 transition duration-300"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-gray-100">Analytics Dashboard</h3>
                            <span class="bg-gray-800 text-purple-400 text-xs font-medium px-2.5 py-0.5 rounded">Next.js</span>
                        </div>
                        <p class="text-gray-400 mb-4">A data visualization platform with real-time updates, custom reporting, and export capabilities.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">Next.js</span>
                            <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">D3.js</span>
                            <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">PostgreSQL</span>
                            <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">AWS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-100 mb-4 tech-border relative pb-2 inline-block"><?= $t['get_in_touch_section'] ?></h2>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto"><?= $t['contact_description'] ?></p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="contact-form relative">
                    <form class="space-y-6" id="contact-form">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-300 mb-1"><?= $t['name'] ?></label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-1"><?= $t['email'] ?></label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-300 mb-1"><?= $t['subject'] ?></label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-3 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-300 mb-1"><?= $t['message'] ?></label>
                            <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-500 transition duration-300 font-medium shadow-lg hover:shadow-xl glow-box">
                                <?= $t['send_message'] ?>
                            </button>
                        </div>
                    </form>
                    <div id="mail-sent" class="absolute block -bottom-10 transition-opacity opacity-0 p-6 text-center tech-card rounded-xl hover:[animation-play-state:paused]">
                        Seu e-mail foi enviado :D<br>Entrarei em contato o mais rápido possível
                        <small class="block text-gray-400 mt-2">Clique para fechar</small>
                    </div>
                </div>
                
                <div class="space-y-8">
                    <div class="tech-card p-6 rounded-xl">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-gray-800 p-3 rounded-lg text-purple-400">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-100 mb-1"><?= $t['location'] ?></h3>
                                <p class="text-gray-400"><?= $t['sao_paulo'] ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tech-card p-6 rounded-xl">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-gray-800 p-3 rounded-lg text-purple-400">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-100 mb-1">Email</h3>
                                <p class="text-gray-400">site@eduardoaf.dev.br</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tech-card p-6 rounded-xl">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-gray-800 p-3 rounded-lg text-purple-400">
                                <i class="fas fa-phone-alt text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-100 mb-1">Phone</h3>
                                <p class="text-gray-400">+1 (555) 123-4567</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tech-card p-6 rounded-xl">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-gray-800 p-3 rounded-lg text-purple-400">
                                <i class="fas fa-clock text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-100 mb-1">Availability</h3>
                                <p class="text-gray-400">Monday - Friday: 9am - 5pm PST</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center text-purple-400 hover:bg-purple-500 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center text-purple-400 hover:bg-purple-500 hover:text-white transition duration-300">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center text-purple-400 hover:bg-purple-500 hover:text-white transition duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center text-purple-400 hover:bg-purple-500 hover:text-white transition duration-300">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-darker border-t border-gray-800 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center text-white font-bold text-xl">E</div>
                        <span class="ml-2 text-xl font-bold text-purple-400">Eduardo A. F.</span>
                    </div>
                    <p class="mt-4 text-gray-400">
                        Creating beautiful, functional digital experiences with a focus on user-centered design and cutting-edge technology.
                    </p>
                    <div class="mt-6 flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-purple-400">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-purple-400">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-purple-400">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-purple-400">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-100 mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-purple-400 transition duration-300">Home</a></li>
                        <li><a href="#skills" class="text-gray-400 hover:text-purple-400 transition duration-300">Skills</a></li>
                        <li><a href="#portfolio" class="text-gray-400 hover:text-purple-400 transition duration-300">Portfolio</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-purple-400 transition duration-300">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-100 mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition duration-300">Web Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition duration-300">UI/UX Design</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition duration-300">Mobile Apps</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition duration-300">Consulting</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-12 pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm">
                    &copy; <span class="font-semibold year">2025</span> Eduardo Augusto Furlaneti. All rights reserved.
                </p>
                <div class="mt-4 md:mt-0 flex space-x-6">
                    <a href="#" class="text-gray-500 hover:text-purple-400 text-sm transition duration-300">Privacy Policy</a>
                    <a href="#" class="text-gray-500 hover:text-purple-400 text-sm transition duration-300">Terms of Service</a>
                    <a href="#" class="text-gray-500 hover:text-purple-400 text-sm transition duration-300">Cookies</a>
                </div>
            </div>
        </div>
    </footer>
<script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });

    </script>
    <script>
        document.querySelector('.year').textContent = new Date().getFullYear();
    </script>
    <script>
        mailSentCart = document.querySelector('#mail-sent');
        document.querySelector('#contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
    
            fetch('send.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                if(data.success) {
                    console.log(data.message);
                    mailSentCart.classList.remove('opacity-0');
                    mailSentCart.classList.add('animate-bounce');
                    this.reset();
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                alert('Something goes wrong. Please try again.');
            });

            this.reset();
        });
        mailSentCart.addEventListener('click', function() {
            mailSentCart.classList.add('opacity-0');
        });
        
    </script>
    <script src="assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>