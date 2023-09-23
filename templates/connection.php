<?php
 $host = 'localhost';
 $username ='root';
 $password = '';
 $dbname = 'product_details';

 $con = mysqli_connect($host,$username,$password,$dbname);
 if(isset($_GET['id']))
 {
    $pid = $_GET['id'];
    $sql="SELECT * FROM cart WHERE pid=$pid";
    $result=$con->query($sql);
    $total_cart = "SELECT * FROM cart";
    $total_cart_result = $con->query($total_cart);
    $cart_num = mysqli_num_rows($total_cart_result);

    if(mysqli_num_rows($result)>0){
        $in_cart = "Already in cart";
        echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
    }
    else{
        $insert="INSERT INTO cart(pid) values($pid)";
        if($con->query($insert)===true){
            $in_cart="Added to cart";
            echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
        }
        else
        {
            echo "<script> alert(It doesn't insert)</script>";
        }
    }  
 }
if(isset($_POST['Clear_Items']))
{
    $sql = "DELETE FROM cart";
    mysqli_query($con,$sql);
}
if(isset($_GET['cart_id'])){
    $pid=$_GET['cart_id'];
    $sql="DELETE FROM cart WHERE pid=$pid";
    if($con->query($sql)===true){
        echo "Removed";
    }
 }
?>