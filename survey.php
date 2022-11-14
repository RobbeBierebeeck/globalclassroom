<?php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once(__DIR__ . '/style.php') ?>
    <title>Global Classroom | Survey</title>
</head>

<body>

    <header>
        <?php include_once(__DIR__ . '/partials/navigation.php') ?>
    </header>

    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/survey.png" alt="Our Moodboard" width="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>
        </div>

        <div class="container marketing">
            <h3 class="text-center m-5">
                Survey
                <small class="text-muted">- Not yet build</small>
            </h3>
            <div class="text-center d-flex justify-content-center">
                <p><a target="_blank" rel="noopener noreferrer" class="text-center btn btn-lg btn-primary" href="#">Fill in survey</a></p>
            </div>


            <hr class="featurette-divider">
        </div>

        <?php include_once(__DIR__ . '/partials/footer.php') ?>

    </main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>