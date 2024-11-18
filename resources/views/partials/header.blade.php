    <!-- header  -->


    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid topbar px-0 d-none d-lg-block">
        <div class="container px-0">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-muted me-4"><Span style="color: crimson"><i
                                    class="fas fa-map-marker-alt"></Span></i> Find A Location </a>
                        <a href="#" class="text-muted me-4"><Span style="color: rgb(47, 214, 6)"><i
                                    class="fas fa-phone-alt "></Span></i>
                            +01234567890 </a>
                        <a href="#" class="text-muted me-0"><i class="fas fa-envelope text-primary me-2"></i>
                            Example@gmail.com </a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i
                                class="fab fa-facebook-f text-white"></i></a>
                        <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i
                                class="fab fa-twitter text-white"></i></a>
                        <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i
                                class="fab fa-instagram text-white"></i></a>
                        <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-0"><i
                                class="fab fa-linkedin-in text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid sticky-top px-0">
        <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;"></div>
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                <a href="/" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i style="color: crimson" class="fas fa-donate me-3"></i><span
                            style="color: crimson">Investa</span></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto py-0">
                        <li class="nav-item"><a href="/" class="nav-link active">Home</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">Projects</a></li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu m-0">
                                <li><a href="/" class="dropdown-item">Our Team</a></li>
                                <li><a href="/" class="dropdown-item">Testimonial</a></li>
                                <li><a href="/" class="dropdown-item">FAQs</a></li>
                                <li><a href="/" class="dropdown-item">404 Page</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="/" class="nav-link">Contact</a></li>
                    </ul>
                    <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                        <button class="btn btn-primary btn-md-square mx-2" data-bs-toggle="modal"
                            data-bs-target="#searchModal">
                            <i class="fas fa-search"></i>
                        </button>
                        <a href="#"
                            class="btn btn-primary rounded-pill text-white py-2 px-4 ms-2 flex-wrap flex-sm-shrink-0">
                            Start Investa
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end-header  -->
