<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title>
    <link rel="stylesheet" href="css\bootstrap-theme.css"
</head>
<body class="font-mali">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <h3 class="card-header bg-da text-l">Array เหมือนตู้ล็อคเกอร์</h3>
                    <div class="card-body">
                        <?php
                        //Basic Array
                        $dayName = ["จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์", "อาทิตย์"];
                        echo "<h3 class='mb-4'>วันนี้วัน {$dayName[4]} พรุ่งนี้วัน {$dayName[5]} ดีใจจังไม่ต้องมาเรียน</h3>";
                        
                        //กำหนดตัวแปร ต่อไปนี้ให้นะจะ แบบ Indexed Array และ Associative Array ให้นักเรียน echo ข้อมูลใน
                        //Array ทั้งหมดออกมา โดยใช้วิธีแบบ Indexed Array และ Associative Array ให้ถูก
                        $studentMapperLover_indexed = ["น้องโบ๊ท", "น้องจ๋า", "น้องเนตร", "น้องเนย"];
                        $studentNineLover_assoc = ["a" => "น้องโชค","b" => "น้องโบ๊ท","c" => "น้องพิมพ์"];
                        
                        echo "<h4 class='mb-4'>คนที่ถูกเลือก คือ {$studentMapperLover_indexed[0]}</h4>";
                        echo "<h5 class='mb-4'>คนที่ถูกเลือก คือ {$studentNineLover_assoc['a']}</h5>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<body>
    
</body>
</html>