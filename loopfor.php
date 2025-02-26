<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop PHP</title>
</head>
<body>
    <h1>วันเกิด</h1>
    <div>
        <label>วันที่</label>
        <select name="day">
            <?php
            for($i=1;$i<=31;$i++){
                echo "<option value='{$i}'>{$i}</option>";}
            ?>
        </select>
    </div>
    <div class="fs-24">
    <label>เดือน</label>
    <select name="month">
        <option value='1'>มกราคม</option>
        <option value='2'>กุมภาพันธ์</option>
        <option value='3'>มีนาคม</option>
        <option value='4'>เมษายน</option>
        <option value='5'>พฤษภาคม</option>
        <option value='6'>มิถุนายน</option>
        <option value='7'>กรกฎาคม</option>
        <option value='8'>สิงหาคม</option>
        <option value='9'>กันยายน</option>
        <option value='10'>ตุลาคม</option>
        <option value='11'>พฤษจิกายน</option>
        <option value='12'>ธันวาคม</option>
        ?>
        </select>
    </div>
    <label>ปี</label>
        <select name="year">
            <?php
            for($i=2568;$i>=2500;$i--){
                echo "<option value='{$i}'>{$i}</option>";}
            ?>
            </select>
</body>
</html>