<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once(__DIR__ . '/style.php') ?>
    <title>Coding | Global Classroom</title>
</head>

<body>

    <header>
        <?php include_once(__DIR__ . '/partials/navigation.php') ?>
    </header>

    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/Code_Lesson_1.png" alt="Coding Lessons" width="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
                <div class="carousel-item">
                    <img src="./assets/Code_Lesson_2.png" alt="Coding Lessons" width="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
                <div class="carousel-item">
                    <img src="./assets/Code_Lesson_3.png" alt="Coding Lessons" width="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
                <div class="carousel-item">
                    <img src="./assets/Code_Lesson_4.png" alt="Coding Lessons" width="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
                <div class="carousel-item">
                    <img src="./assets/Code_Lesson_5.png" alt="Coding Lessons" width="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
                <div class="carousel-item">
                    <img src="./assets/Code_Lesson_6.png" alt="Coding Lessons" width="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="container marketing">
            <h3 class="text-center m-5">
                This is (the start of) coding
                <small class="text-muted">- How we like it</small>
            </h3>
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 100x100" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Visual Studio Code</title>
                        <rect width="100%" height="100%" fill="#8064A2" />
                    </svg>
                    <h2 class="fw-normal">Visual Studio Code</h2>
                    <p>Before you can start coding, you need a code editor. We prefer VSCode as it is free and open source. So we will start with this download.</p>
                </div>
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 100x100" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Opening Document</title>
                        <rect width="100%" height="100%" fill="#8064A2" />
                    </svg>
                    <h2 class="fw-normal">Opening Document</h2>
                    <p>Before you can start programming, you need to choose your target document. For this lesson, the Belgian students had provided a simple template for the Mexican students to fill in.</p>
                </div>
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 100x100" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>HTML</title>
                        <rect width="100%" height="100%" fill="#8064A2" />
                    </svg>
                    <h2 class="fw-normal">HTML</h2>
                    <p>The most obvious programming language to start with is HTML. It is the standard markup language for web pages. These documents can be opened and read by a web browser and then displayed as a web page.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 100x100" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Live Server Extension</title>
                        <rect width="100%" height="100%" fill="#8064A2" />
                    </svg>

                    <h2 class="fw-normal">Live Server Extension</h2>
                    <p>To view your code directly and instantaneously on your laptop, you need the live server extension. It allows you to check your code changes very easily and quickly.</p>
                </div>
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 100x100" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>CSS</title>
                        <rect width="100%" height="100%" fill="#8064A2" />
                    </svg>

                    <h2 class="fw-normal">CSS</h2>
                    <p>CSS or style sheets, are a way of separating the design of web pages from their actual content and defining them centrally. This allows you to create unique and powerful designs.</p>
                </div>
            </div>

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Coding lesson</h2>
                    <p class="lead">In preparation for this lesson, the Mexican students had to download VSCode and some files (prepared by the IMD students).</p>
                </div>
                <div class="col-md-5">
                    <img src="./assets/preparation_coding.png" alt="Map to School" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Intro to programming <span class="text-muted">by Robbe Bierebeeck</span></h2>
                    <p class="lead">From the start of classes, we knew that an intro to programming can be very overwhelming. Therefore, we started very calm and simple. This ensured that by the end of the lesson, everyone had an introduction to HTML and CSS.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="./assets/intro_coding.png" alt="Elements of a city" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">My First Website</h2>
                    <p class="lead">The assignment after the lesson was to create his/her own website about his/her favourite person. Of course, this again included a source file and lots of tips. So that everything remained clear and did not become too difficult.</p>
                </div>
                <div class="col-md-5">
                    <img src="./assets/task_coding.png" alt="Elements of Mechelen" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->
        </div>

        <footer class="container">
            <p class="float-end"><a href="#" class="btn btn-primary">Back to top</a></p>
            <p>&copy; 2022 Global CLassroom &middot; Nicole &middot; Alan &middot; Macarena &middot; Erick &middot; Robbe &middot; Ismaïl &middot; William &middot; Seppe</p>
        </footer>

    </main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>