<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01 Transitional//EN” “http://www.w3.org/TR/html4/loose.dtd”>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>缺酒精者，進入</title>
  <meta name="description" content="這是一個關於酒的網站，從介紹各種酒類的文化產區到訂購，應有盡有，對酒有興趣的朋友們千萬別錯過"> 
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="icon" href="img/liquor.png">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/switcher.css">
  <link rel="stylesheet" href="css/auto_change_bg.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body data-theme="light">
<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">

        <a class="navbar-brand" href="#">體內消毒</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://127.0.0.1/alcohol/discount_area.html">優惠區</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              酒類文化介紹
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">威士忌 Whisky</a></li>
                <li><a class="dropdown-item" href="#">白蘭地 Brandy</a></li>
                <li><a class="dropdown-item" href="#">龍舌蘭 Tequila</a></li>
              </ul>
            </li>

              <li class="nav-item dropdown">
                <a class="nav-link active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                酒類商品
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="http://127.0.0.1/alcohol/introduce_whisky.html">威士忌 Whisky</a></li>
                  <li><a class="dropdown-item" href="http://127.0.0.1/alcohol/introduce_tequila.html">龍舌蘭 Tequila</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                會員專區
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="http://127.0.0.1/alcohol/member_data.html">會員資料</a></li>
                </ul>
              </li>
          </ul>
          <!-- switch background-color -->
          <div class="theme-switcher">  
            <input type="checkbox" id="switcher">  
            <label for=switcher></label>  
          </div>  
        </div>
      </div>
    </nav>

<?php
session_start();
 $account = $_SESSION["account"]; 
 $password = $_SESSION["password"]; 

 include('connect.php');


	$name=$_POST['name'];

	

$sql= "select Name from member_info where member_id = '$account' and Password ='$password'  ";
$result=mysql_query($connection, $sql);
while($row = mysql_fetch_row($result)){
  echo "<tr>
        <td> $row[0] </td>
       </tr>";

}
mysql_close($connection);
?>

</section>


<footer>
  <div><br>
    聯絡方式： 
    <ul>
      <br>
      <li>  
        <a  href="https://www.facebook.com/yiqing.li1/" target="_blank">
          <i class="fa fa-facebook" style="font-size:24px;">
          </i>
        </a>facebook連結
      </li>

        <li>
          <a  href="  https://www.instagram.com/yiqing88420/" target="_blank">
            <i class="fa fa-instagram" style="font-size:24px;">
            </i>
          </a>instagram連結
        </li>
    </ul>
  </div>


  <div class="text">
    <em> 禁止酒駕   酒後不開車 安 全 有 保 障</em>
    <img src="img/no_doti.png" class="img" alt="禁止酒駕安全有保障">
  </div>
</footer>
</body>
</html> 

<script src="js/change_theme.js"></script>


<!-- 

<table>
  <tr>
    <td>姓名</td>
  </tr>


// session_start();
// $account = $_POST['account'];
// $password = $_POST['password'];
// $account=$_SESSION['account']; 
// $password=$_SESSION['password']; 
// include('connect.php');
// $sql = "SELECT * FROM member_info where member_id = '$account' and Password ='$password'";

// $result = mysqli_query($connection, $sql);
// while($row = mysqli_fetch_row($result))
// {
//          echo "<tr>
//                 <td> $row[0] </td>
//                 <td> $row[1] </td>
//                 <td> $row[2] </td>
//                 <td> $row[3] </td>
//                 <td> $row[4] </td>
//              </tr>";
// }



</table> -->
    