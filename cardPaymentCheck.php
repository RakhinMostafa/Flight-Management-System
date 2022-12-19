

<?php
session_start();
include_once 'dbconnect.php';


if (!isset($_SESSION['user'])) {
    header("Location: customersignin.html");
} else {
    $user = $_SESSION['user'];


    $accountNumber = $_POST["AccountNumber"];
    $promo = $_POST["promoCode"];

    $sum = mysqli_query($conn, "SELECT SUM(price)
    FROM book B, class C
    WHERE B.username = '$user' AND paid = '0'
    AND classtype=C.name AND flightno = C.number");

    $t = mysqli_fetch_array($sum);
    $total = $t['SUM(price)'];

    $res = mysqli_query($conn, "SELECT * FROM promo WHERE code='$promo'");
    $row = mysqli_fetch_array($res);
    if (strtolower($row['Code']) == strtolower($promo)) {
        $_SESSION['Discount'] = $row['Discount'];
        $sum = mysqli_query($conn, "SELECT SUM(price)
        FROM book B, class C
        WHERE B.username = '$user' AND paid = '0'
        AND classtype=C.name AND flightno = C.number");

        $t = mysqli_fetch_array($sum);
        $total = $t['SUM(price)'];

        $sql = "INSERT INTO billing(Card,Cash,Amount,username,Discount) VALUES( '" . $accountNumber . "',0," . $total . ",'" . $user . "'," . $row['Discount'] . " )";

        mysqli_query($conn, $sql);


        header("Location:finalReport.php");
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Promo code is wrong");';
        echo 'window.location.href = "billing.php";';
        echo '</script>';
    }
}
?>
