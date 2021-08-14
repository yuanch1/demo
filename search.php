<?php
header("Content-Type:text/html;charset=utf-8");
require_once 'connect.php';
$id=$_POST['pwd'];
$sql="select * from students where class='$id' or name='$id' or num='$id' or sex='$id' or nation='$id' or born='$id'or local='$id'or id='$id';";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "-班级: " . $row["class"]."<br>"; 
        echo " -姓名: " . $row["name"]."<br>" ;
        echo " -学号: " . $row["num"]."<br>" ;
        echo " -性别: " . $row["sex"]."<br>";
        echo " -民族: " . $row["nation"]."<br>";
        echo " -出生年月: " . $row["born"]."<br>";
        echo " -地址: " . $row["local"]."<br>";
    }
} else {
    echo "0 结果";
}
?>