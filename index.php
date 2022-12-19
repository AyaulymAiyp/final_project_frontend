<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $datas = $_POST['choice'];
    $allData = implode(", ",$datas);

    $conn = mysqli_connect('localhost', 'root', '', 'prada');

    $sql = "insert into info(email, firstname, lastname, choice) values('$email', '$fname', '$lname', '$allData')";
   $result = mysqli_query($conn, $sql);
   if($result){
    echo 'Your response submitted succesfully! ';
    echo '<a href="main.html">Go back</a>';
   }else{
    die(mysqli_error($conn));
   }
}
?>