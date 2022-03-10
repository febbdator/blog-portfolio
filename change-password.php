<?php

session_start();
include "functions/profile-functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
    <main class="container col-3 my-5">
        <a href="profile.php" class="text-secondary text-decoration-none mb-3 d-block"> <i class="fas fa-chevron-left me-2"> </i> Back to Profile </a>
            <div class="card">
                <div class="card-header bg-warning bg-gradient text-dark">
                    <h2 class="display-4"> Change Password </h2>
                </div>
            
                <div class="card-body">
                    <form method="post">
                        <div class="mb-5">
                            <label for="current_passw"> Current Password </label>
                            <input type="password" name="current_passw"  id="current_passw" class="form-control" autofocus required>
                        <div>
                        <div class="mb-5">
                            <label for="new_passw"> New Password </label>
                            <input type="password" name="new_passw"  id="new_passw" class="form-control" required>
                        <div>
                        <div class="mb-5">
                            <label for="conf_passw"> Confirm Password </label>
                            <input type="password" name="conf_new"  id="conf_new" class="form-control" required>
                        <div>

                        <button type="submit" name="update_passw" class="btn btn-dark float-end"> Update Password </button>
                    </form>
                </div>
            </div>
    </main>
    
</body>
</html>