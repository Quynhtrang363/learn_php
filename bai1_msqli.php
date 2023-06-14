<?php 
$db_server = "localhost";
$db_username = "root";
$db_pass = " ";
$db_name = "bai1msqli";

//connect 
$dbh = mysqli_connect('localhost','root','');
if (!$dbh)
    die ("Not connect:" .mysqli_error());
if (!mysqli_select_db($dbh,'bai1'))
    die ("Not found database:" . mysqli_error());

// Create table 
$sql_stml = "CREATE table dssv(
    MaSV varchar(10) not null PRIMARY key,
    HoTen varchar(50) not null,
    NgaySinh date,
    LopHoc varchar(10),
    DTB float
    );";
$result = mysqli_query($dbh,$sql_stml);
if(!$result){
    die ("Create failed:" . mysqli_error());}
else {
    echo "Create success";
}

//insert
$sql_stml = "INSERT INTO dssv (MaSV, HoTen, NgaySinh, LopHoc, DTB)";
$sql_stml .= "VALUES ('SV001','Nguyen Thi A','2001-05-24','12C1','7.4'),
        ('SV002','Nguyen Thi B','2002-03-22','11C3','9.6'),
        ('SV003','Nguyen Thi C','2002-09-15','12C4','8.2'),
        ('SV004','Nguyen Thi D','2003-10-12','10C3','7.9'),
        ('SV005','Nguyen Thi E','2003-07-27','10B2','6.8')";
$result = mysqli_query($dbh,$sql_stml);
if (!$result) {
    die("Add failed: " . mysqli_error());
} else {
    echo "Add success";
}

//update 
$sql_stml = "UPDATE dssv set DTB ='8.5'";
$sql_stml .= "where MaSV = 'SV001'";
$result = mysqli_query($dbh,$sql_stml);
if (!$result) {
    die("Update failed: " .mysqli_error());
} else {
    echo "Update success";
}

//delete 
$sql_stml = "DELETE from dssv where MaSV = 'SV003'";
$result = mysqli_query($dbh, $sql_stml);
if (!$result) {
    die("delete failed: " .mysqli_error());
} else {
    echo "delete success";
}

//select 
$sql_stml = "SELECT * from dssv";
$result = mysqli_query($dbh, $sql_stml);
if (!$result)
die("select failed: " .mysqli_error());
$rows = mysqli_num_rows($result);
if($rows){
    while($row =mysqli_fetch_array($result)) {
        echo 'MaSV: ' .$row['MaSV'] . '<br>';
        echo 'HoTen: ' .$row['HoTen'] . '<br>';
        echo 'NgaySinh: ' .$row['NgaySinh'] . '<br>';
        echo 'LopHoc: ' .$row['LopHoc'] . '<br>';
        echo 'DBT: ' .$row['DTB'] . '<br>';
    }
}
?>