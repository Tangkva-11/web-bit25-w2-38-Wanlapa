<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณพื้นที่สามเหลี่ยม</title>
    <link rel="stylesheet" href="style.css">

    <!-- Font Mali -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    
    <!-- <?php
        $student_name = $_POST['student_name'];
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "ชื่อนักศึกษา : " . $student_name . "<br>";
        echo "คะแนนช่อง 1 : " . $num1 . "<br>";
        echo "คะแนนช่อง 2 : " . $num2 . "<br>";

        $total = $num1 + $num2;
        echo "คะแนนรวม : " . $total . "<br>";
    ?> -->

    <?php
        $base = $_POST['base'];
        $height = $_POST['height'];

        $area = (1/2) * $base * $height;

    ?>

    <div class="container">

        <div class="shark">🦈💙🦈</div>

        <h1>ผลการคำนวณ</h1>

        <div class="result-box">
            <p><strong>พื้นที่ฐาน :</strong> <?php echo $base; ?></p>
            <p><strong>ความสูง :</strong> <?php echo $height; ?></p>
            <p class="answer">
                พื้นที่สามเหลี่ยม = <?php echo $area; ?>
            </p>
        </div>

        <a href="index.php" class="back-btn">
            กลับไปหน้าแรก
        </a>

</div>

</body>
</html>