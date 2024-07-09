<?php
$conn = mysqli_connect('localhost', 'root', '', 'book_db');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    // Use prepared statements for better security and to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);

    if ($stmt->execute()) {
        header('Location: book.php');
    } else {
        echo 'Something went wrong try again!';
    }

    $stmt->close();
}
else{
    echo 'Something went wrong try again!';
}

$conn->close();
?>
