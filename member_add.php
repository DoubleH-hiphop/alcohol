<?php 
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST['submit'])){
exit("錯誤執行");
}

$account = $_POST['account'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['mail'];

$again = "帳號已被申請過";
include('connect.php');

$check_account = "SELECT count(*) FROM member_info where member_id = '$account' ";	# MySQL/MariaDB 指令

$result = mysqli_query($connection,$check_account);	# 執行 MySQL/MariaDB 指令

	while ($row = mysqli_fetch_row($result)) 	# 取得結果
	{
		if($row[0] == 1){
            echo "<script type='text/javascript'>alert('$again');</script>";
            header("refresh:0; url=member_add.html");
        }
		else{
            $new_data = "insert into member_info (member_id, Password, Name, Email) values ('$account', '$password', '$name', '$email')";
            $result1 = mysqli_query($connection, $new_data);
            if($result1){
                echo "新增成功，葉面即將跳轉";
                header("refresh:2; url=member_account.html");
            }
        }
    }
mysqli_close($result);	# 釋放資源	# 釋放資源
mysqli_close($connection);	# 關閉 MySQL/MariaDB 連線
?>
