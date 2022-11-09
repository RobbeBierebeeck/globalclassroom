<?php $pageName = basename($_SERVER['PHP_SELF']); ?>
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">Global Classroom</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link 
                    <?php if ($pageName == "index.php") {
                        echo "active";
                    } ?>" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($pageName == "city.php") {
                                            echo "active";
                                        } ?>" href="./city.php">City</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($pageName == "code.php") {
                                            echo "active";
                                        } ?>" href="./code.php"">Code</a>
                </li>
                <li class=" nav-item">
                        <a class="nav-link <?php if ($pageName == "survey.php") {
                                                echo "active";
                                            } ?>" href="./survey.php"">Survey</a>
                </li>
            </ul>
        </div>
    </div>
</nav>