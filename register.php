<?php
include 'functions/user-functions.php';
if(isset($_POST['register'])){
    register();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/register.css">
</head>

<body class="darko">
    <main class="container">
        <div class="card mx-auto w-50 border border-0">
            <div class="card-header darko border-0">
                <h1 class="text-center text-uppercase mb-4">Registration</h1>
            </div>
            <div class="card-body darko">
                <form action="" method="post">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="first-name" class="form-label">First Name <span>*</span></label>
                            <input type="text" name="first_name" id="first_name" class="form-control darko" required autofocus>
                        </div>
                        <div class="col-md-6">
                            <label for="last-name" class="form-label">Last Name <span>*</span></label>
                            <input type="text" name="last_name" id="last-name" class="form-control darko" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control darko">
                    </div>
                    <div class="mb-4">
                        <label for="contact-number" class="form-label">Contact Number <span>*</span></label>
                        <input type="text" name="contact_number" id="contact-number" class="form-control darko" required>
                        <!-- pattern="[0-9]+" maxlength="11" placeholder="09xxxxxxxxx" -->
                    </div>
                    <div class="mb-4">
                        <label for="username" class="form-label">Username <span>*</span></label>
                        <input type="text" name="username" id="username" class="form-control darko" maxlength="15" required>
                    </div>
                    <div class="mb-5">
                        <label for="password" class="form-label">Password <span style="color: crimson">*</span></label>
                        <input type="password" name="password" id="password" class="form-control darko" minlength="8" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" name="register" class="btn btn-dark px-5 py-2 text-uppercase">Register</button>
                        </div>
                        <div class="col position-relative">
                            <p class="mb-0 position-absolute" style="bottom: 0; right: 0"><span class="text-white">Have an account? </span><a href="login.php">Sign In</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>