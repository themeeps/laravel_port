<!DOCTYPE html>
<html lang="<?php echo app()->getLocale(); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Sayyid Ali Akbar Haraki</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favlogo.png') }}">
</head>

<body>
    <header class="bg-dark text-white text-center mainContent">
        <div class="container">
            <div class="display_prime" id="typing-text"></div>
            <p class="lead">{{ __('messages.text-2') }}</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                {{ __('messages.text-3') }}
            </button>
        </div>
    </header>

    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">{{ __('messages.text-4') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><strong>{{ __('messages.text-5') }}</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio"><strong>{{ __('messages.text-6') }}</strong></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('messages.text-22') }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item" href="{{ route('change.language', ['locale' => 'en']) }}">EN</a></li>
                            <li><a class="dropdown-item" href="{{ route('change.language', ['locale' => 'id']) }}">ID</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <main class="py-5">
        <section id="portfolio" class="container">
            <h2 class="text-center mb-5"></h2>
            <div class="row">
                @yield('content')
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Sayyid Ali Akbar Haraki. All rights reserved.</p>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="portfolioModal" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content text-dark">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="portfolioModalLabel">{{ __('messages.text-9') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4" style="align-content: center;">
                                <video width="100%" height="100%" autoplay muted loop>
                                    <source src="images/portfolio_profile.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-md-8 px-3">
                                <div class="leftHere">
                                    <h2>{{ __('messages.text-10') }}</h2>
                                    <p>{{ __('messages.text-19') }}</p>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-12 col-md-6 leftHere">
                                        <h2>{{ __('messages.text-11') }}</h2>
                                        <ul class="list-unstyled">
                                            <li><strong>{{ __('messages.text-13') }}:</strong> Sayyid Ali Akbar Haraki</li>
                                            <li><strong>{{ __('messages.text-14') }}:</strong> Jakarta, 13 Juni 1997</li>
                                            <li><strong>{{ __('messages.text-15') }}:</strong> S1 Teknik Informatika, Kalbis University</li>
                                            <li><strong>{{ __('messages.text-16') }}:</strong> sayyidali195@gmail.com</li>
                                            <li><strong>{{ __('messages.text-17') }}:</strong> +6281399053740</li>
                                            <li><strong>{{ __('messages.text-18') }}:</strong> Cempaka Baru IX No,03 RT003/RW007, Kel. Cempaka Baru, Kec. Kemayoran, Jakarta Pusat, Kodepos : 10640</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <h2>{{ __('messages.text-12') }}</h2>
                                        <ul class="list-unstyled">
                                            <li>HTML</li>
                                            <li>CSS</li>
                                            <li>Javascript</li>
                                            <li>PHP</li>
                                            <li>Git Version Control</li>
                                            <li>MySQL</li>
                                            <li>Laravel</li>
                                            <li>CodeIgniter</li>
                                            <li>Vue Js</li>
                                            <li>Nuxt Js</li>
                                            <li>Bootstrap</li>
                                            <li>Vuetify</li>
                                            <li>SQL Server</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>