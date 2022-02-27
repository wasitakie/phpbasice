<?php
$severname = 'localhost';
$username = 'root';
$password = '' ;
$dbname = 'dbemp';

$conn = mysqli_connect($severname,$username,$password,$dbname);

mysqli_set_charset($conn, "utf8");

$sql = '
      Select employee.EmployeeID, employee.Title, employee.Name, employee.Sex, employee.Education, employee.Start_Date, employee.Salary, department.DepartmentName
      From employee, department
      Where employee.DepartmentID = department.DepartmentID ; 
';

$objQuery = mysqli_query($conn, $sql) or die ("Error Query ["  . $sql .  "]");

?>
<!DOCTYPE html>
<html lang="en">
<header>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intital-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/dist/css*bootstrap.min.css">

    <title>Hello</title>
</header>

<body>
    <table border="1">
        <tr>
            <th width="50">
                <div align="center">No</div>
            </th>
            <th width="100">
                <div align="center">EmployeeID</div>
            </th>
            <th width="100">
                <div align="center">Title</div>
            </th>
            <th width="100">
                <div align="center">Name</div>
            </th>
            <th width="100">
                <div align="center">Sex</div>
            </th>
            <th width="100">
                <div align="center">Education</div>
            </th>
            <th width="100">
                <div align="center">Start_Date</div>
            </th>
            <th width="100">
                <div align="center">Salary</div>
            </th>
            <th width="100">
                <div align="center">DepartmentName</div>
            </th>
        </tr>
        <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
        <tr>
            <td>
                <div align="center"><?php echo $i; ?></div>
            </td>
            <td><?php echo $objResult["EmployeeID"]; ?></td>
            <td><?php echo $objResult["Title"]; ?></td>
            <td><?php echo $objResult["Name"]; ?></td>
            <td><?php echo $objResult["Sex"]; ?></td>
            <td><?php echo $objResult["Education"]; ?></td>
            <td><?php echo $objResult["Start_Date"]; ?></td>
            <td><?php echo $objResult["Salary"]; ?></td>
            <td><?php echo $objResult["DepartmentName"]; ?></td>
            <td align="center"><a href="Delete.php?EmployeeID=<?php echo $objResult["EmployeeID"];?>">Delete</a></td>
            <td align="center"><a href="updatedata.php?EmployeeID=<?php echo $objResult["EmployeeID"];?>">Update</a></td>
        </tr>
        <?php
     $i++;
    }
    ?>
    </table>

    <!-- Optional javaScript; choose one of the two!-->

    <!-- Option 1: Bootstrap Bundle with Popper-->
    <script src="bootstrap/dist/css*bootstrap.min.js"></script>


</body>

</html>
<?php
   mysqli_close($conn); //ปิดฐานข้อมูล>
?>