<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="col-md-12 boxl">
            <?php include 'hend.php'?>
        </div>
    </div>
    <div class="containar">
        <div class="col-md-12 box">
            <?php include 'header.php'?>
        </div>
    </div>
    <form>
        <div class="form-group mx-sm-3 md-2">
            <label for="exampleInput">ลักษณะวัตถุพยาน</label>
            <select class="form-control ">
                <option>ระบุลักษณะวัตถุพยาน</option>
            </select>
        </div>
        <div class="form-group mx-sm-3 md-2">
            <label for="exampleInput">สารประกอบ</label>
            <select class="form-control ">
                <option>ระบุวัตถุประกอบ</option>
            </select>
        </div>
        <div class="form-group mx-sm-3 md-2">
            <label for="exampleInput">ประเทศ</label>
            <select class="form-control ">
                <option>ระบุประเทศ</option>
            </select>
        </div>
        <div class="form-group mx-sm-3 md-2">
            <label for="exampleInput">ลักษณะทางงกายภาพ</label>
            <select class="form-control ">
                <option>ระบุลักษณะทางงกายภาพ</option>
            </select>
        </div>
        <input type="date">
        <br>
        <button type="submit" class="btn btn-primary">clear</button>
        <button type="submit" class="btn btn-primary">บันทึก</button>
    </form>

    <?php include 'footer.php'?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>



</body>


</html>