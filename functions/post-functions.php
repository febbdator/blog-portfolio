<?php
require 'connection.php';

function displayCategories(){
   
    $conn = dbConnect();
    $sql = "SELECT * FROM categories";

    if ($result = $conn->query($sql)){
        if($result->num_rows > 0){
            echo "<option value='' hidden> CATEGORY </option>";
            while($row -> $result->fetch_assoc()){
                echo "<option value='".$row['category_id']."'>" .$row['category_name'] . "</option>";  
            }
        }else{
            echo "<option value='' hidden> No Category Found </option>";
        }
    }else{
        die ("Error: " . $conn->error);
    }

}

function displayUsers(){
   
    $conn = dbConnect();
    $sql = "SELECT * FROM accounts";

    if ($result = $conn->query($sql)){
        if($result->num_rows > 0){
            echo "<option value='' hidden> SELECT AUTHOR </option>";
            while($row -> $result->fetch_assoc()){
                echo "<option value='".$row['account_id']."'>" .$row['username'] . "</option>";  
            }
        }else{
            echo "<option value='' hidden> No Accounts Found </option>";
        }
    }else{
        die ("Error: " . $conn->error);
    }

}

function addPost(){
    $conn = dbConnect();
    $title = $_POST['title'];
    $date_posted = $_POST['date_posted'];
    $category_id = $_POST['category_id'];
    $message = $_POST['message'];
    $author_id = $_POST['author_id'];

    $sql = "INSERT INTO posts (`post_title`, `post_message`, `date_posted`, `account_id`, `category_id`) VALUES ('$title', '$message', '$date_posted', $author_id, $category_id)";

    if ($conn->query($sql)){
        header("location: posts.php");
        exit;
    }else{
        die ("Error" . $conn->error);
    }

}

function addPostByUser($account_id){
    $conn = dbConnect();
    $title = $_POST['title'];
    $date_posted = $_POST['date_posted'];
    $category_id = $_POST['category_id'];
    $message = $_POST['message'];

    $sql = "INSERT INTO posts (post_title, post_message, date_posted, account_id, category_id) VALUES ('$title','$message', '$date_posted', $account_id, $category_id)";
    
    if($conn->query($sql)){
        header("location: posts.php");
        exit;
    }else{
        die("Error: " . $conn->error);
    }
}

// ok
function getPostDetails($post_id){
    $conn = dbConnect();
    
    $sql = "SELECT * FROM posts 
            INNER JOIN categories ON categories.category_id = posts.category_id 
            INNER JOIN users ON users.account_id = posts.account_id 
            WHERE post_id = $post_id";

    if($result = $conn->query($sql)){
        return $result->fetch_assoc();
    } else {
        die("Error: ". $conn->error);
    }        
}

function updatePost($post_id){
    $conn = dbConnect();
    $title = $_POST['title'];
    $date_posted = $_POST['date_posted'];
    $category_id = $_POST['category_id'];
    $message = $_POST['message'];
    $author_id = $_POST['author_id'];

    $sql = "UPDATE posts
    SET post_title = '$title',
        date_posted = '$date_posted',
        category_id = $category_id,
        post_message = '$message',
        account_id = $author_id
    WHERE post_id = $post_id";

    if($conn->query($sql)){
        header ("location: posts.php");
        exit;
    }else{
        die ("Error: " . $conn->error);
    }
}

function updatePostByUser($post_id){
    $conn = dbConnect();
    $title = $_POST['title'];
    $date_posted = $_POST['date_posted'];
    $category_id = $_POST['category_id'];
    $message = $_POST['message'];

    $sql = "UPDATE posts
    SET post_title = '$title',
        date_posted = '$date_posted',
        category_id = $category_id,
        post_message = '$message'
    WHERE post_id = $post_id";

    if($conn->query($sql)){
        header ("location: posts.php");
        exit;
    }else{
        die ("Error: " . $conn->error);
    }
}