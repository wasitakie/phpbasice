<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Hello</title>
</head>

<body>
    <h1>Insert Data : Employee</h1>
    <form action="insert.php" method="post" name="Employee">
        <table border="2">
            <tr>
                <td>EmployeeID:</td>
                <td><input type="text" name="EmployeeID"></td>
            </tr>
            <tr>
                <td>Title :</td>
                <td><select name="Title">
                        <option value=นาย>นาย</option>
                        <option value=นางสาว>นางสาว</option>
                        <option value=นาง>นาง</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="Name"></td>
            </tr>
            <tr>
                <td>Sex :</td>
                <td>
                    <input type="radio" name="Sex" value="ชาย">ชาย            
                    <input type="radio" name="Sex" value="หญิง">หญิง
                    
                </td>
            </tr>
            <tr>
                <td>Education :</td>
                <td><select name="Education">
                        <option value=ปริญญาตรี>ปริญญาตรี</option>
                        <option value=ปริญญาโท>ปริญญาโท</option>
                        <option value=อื่นๆ>อื่นๆ</option>
                    </select></td>
            <tr>
                <td>Start_Date: </td>
                <td><input type="date" name="Start_Date"></td>
            </tr>
            <tr>
                <td>Salary: </td>
                <td><input type="number" name="Salary"></td>
            </tr>
            <tr>
                <td>DepartmentID: </td>
                <td><input type="text" name="DepartmentID"></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Insert Data">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>