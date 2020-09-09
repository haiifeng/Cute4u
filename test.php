<?php
$dbhost = 'localhost';  // mysql服务器主机地址
$dbname='haiifeng_com';// 数据库名字
$dbuser = 'haiifeng_com';            // mysql用户名
$dbpass = 'pQAP7Xx3EKQkBeKf';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $conn ){
    die('连接失败: ' . mysqli_error($conn));
}

// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");
 
$sql = 'SELECT author, mail, ip, text FROM haiifeng_comments';

// mysqli_select_db(connection,dbname); 函数用于更改连接的默认数据库 
// 更改连接的默认数据库
// mysqli_select_db( $conn, $db);

$retval = mysqli_query( $conn, $sql );

if(! $retval ){
    die('无法读取数据: ' . mysqli_error($conn));
}

echo '<h2>haiifeng</h2>';
echo '<h4>Something that stays in your mind will someday spring up in your life.<h4/>';
echo '<table border="1">
    <tr>
        <td>author</td>
        <td>mail</td>
        <td>ip</td>
        <td>text</td>
    </tr>';
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
{
    echo "<tr><td> {$row['author']}</td> ".
         "<td>{$row['mail']} </td> ".
         "<td>{$row['ip']} </td> ".
         "<td>{$row['text']} </td> ".
         "</tr>";
}
echo '</table>';
mysqli_close($conn);
?>