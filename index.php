<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just an standard page</title>
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="vh-100 d-flex justify-content-center align-items-center bg-dark">

    <div class="container w-50">
        <h1 class="text-center text-primary">PHP anywhere, Windows | Linux | OSX with docker
            <img src="/assets/docker.svg" alt="Docker" class="img-fluid mb-3">
        </h1>

        <h3 class="text-center text-white">
            <?php

            $architecture = php_uname("m");
            $os = php_uname("s");

            echo "Current OS: $os, Architecture: $architecture";

            ?>

        </h3>
        <div class="container justify-space-between">

            <a class="link-primary link-underline-opacity-0" href="https://github.com/vsaint1/php-anywhere"> Github </a>
            <a class="link-primary  link-underline-opacity-0" href="https://www.linkedin.com/in/vinicius-gabriel-09741623b/"> Linkedin </a>

        </div>

    </div>

</body>

</html>