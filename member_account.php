<script>
    var error = "帳號或密碼錯誤";
</script>

<?PHP
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST["submit"])){
exit("錯誤執行");
}

include('connect.php');

$account = $_POST['account'];
$passowrd = $_POST['password'];
$message = "帳號或密碼有誤！";
$ok = "登入成功";

if ($account && $passowrd){
    $sql = "select member_id, Password from member_info where member_id = '$account' && Password='$passowrd' ";
    $result = mysqli_query($connection,$sql);

    $rows = mysqli_num_rows($result);

    if($rows == 1){
        echo "<script type='text/javascript'>alert('$ok');</script>";
        header('refresh:0; url = member_center.php');  
    }
    else{   
       echo "<script type='text/javascript'>alert('$message');</script>";
       header("refresh:0; url=member_account.html");
    }

}
mysqli_close($rows);
mysqli_close($connection);
?>

