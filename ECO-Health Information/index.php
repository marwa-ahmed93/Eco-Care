

<?php

session_start();

include '../connection.php';

$email=$_SESSION['email'];
$query=" SELECT *
FROM my_client
WHERE email='$email' ";
$result = $conn->query($query);
 $row=$result->fetch_assoc();

?>



<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEPN-Health Information</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

<a href="#" class="logo"><span>STEPN</span> Health Information</a>
<h3><?php echo $row['user_name']; ?></h3>
<div id="menu" class="fas fa-bars"></div>

<nav class="navbar">
    <ul>
        <li><a class="active" href="#home">الرئيسية</a></li>
        <li><a href="#about">من نحن </a></li>
        <li><a href="#service">الخدمات</a></li>
        <li><a href="#trainer">أفضل الأطباء</a></li>
        <li><a href="#plan">الخطة</a></li>
        <li><a href="#register">تواصل معنا</a></li>
    </ul>

    <?php    if(isset($_SESSION['email'])){
?>
 <li class="nav-item">
       <a class="nav-link" href="../STPEN-logout/index.php">تسجيل خروج</a>
                        </li>
                        <?php }
                        ?>
</nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

<h1>STEPN الصحي<br>صحتك تستحق !</h1>

<div class="btn-ber">
<a href="#"><button class="btn">افتح حساب الآن</button></a>
<a href="#"><button class="btn">الصفحة الرئيسية</button></a>
<a href="#"><button class="btn">سجل دخول</button></a>


</section>

<!-- home section ends -->

<!-- about section start  -->

<section class="about" id="about">

<div class="row">

    <div class="image">
        <img src="images/gm3.jpg" alt="">
    </div>

    <div class="content">
        <h3>نعمل على حل مشكلة نقص الاهتمام بالصحة</h3>
        <p>في الثقافة المصرية ، لا يتم الترويج بشكل جيد لنمط الحياة الصحي من ممارسة الرياضة وتناول الطعام الصحي وتجنب الممارسات اليومية الضارة التي تؤثر على سبل العيش.
        </p>
         <p> إن الحاجة إلى الوعي الذاتي والاهتمام بالصحة أمر بالغ الأهمية للحفاظ على المزيد من سبل العيش للمواطنين المصريين ليكونوا منتجين.
            لذا نهدف إلى المساهمة فى تحقيق رؤية مصر 2030</p>
        <a href="#"><button class="btn">لمعرفة المزيد زور صفحتنا الرئيسية</button></a>
    </div>

</div>

</section>

<!-- about section ends -->

<!-- service section starts  -->

<section class="service" id="service">

<h1 class="heading">الخدمات المتاحة</h1>

<div class="box-container">

    <div class="box">
        <img src="images/img1.jpg" alt="">
        <div class="info">
            <h3>نظام تخسيس</h3>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <a href="#"><button class="btn">للمزيد</button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/img2.jpg" alt="">
        <div class="info">
            <h3>ممارسة الرياضة فى المنزل</h3>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <a href="#"><button class="btn">للمزيد</button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/img3.jpg" alt="">
        <div class="info">
            <h3>التعامل مع الأدوات الرياضية</h3>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <a href="#"><button class="btn">للمزيد</button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/img4.jpg" alt="">
        <div class="info">
            <h3>نظام رياضي منتظم</h3>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <a href="#"><button class="btn">للمزيد</button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/img5.jpg" alt="">
        <div class="info">
            <h3>حافظ على جسمك</h3>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
         <a href="#"><button class="btn">للمزيد</button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/img6.jpg" alt="">
        <div class="info">
            <h3>ممارسة رياضتك المفضلة</h3>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <a href="#"><button class="btn">للمزيد</button></a>
        </div>
    </div>
     <div class="box">
        <img src="images/gm9.jpg" alt="">
        <div class="info">
            <h3>علاج طبيعي</h3>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <a href="#"><button class="btn">للمزيد</button></a>
        </div>
    </div>
     <div class="box">
        <img src="images/gm3.jpg" alt="">
        <div class="info">
            <h3>تحدي الأفضل</h3>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <a href="#"><button class="btn">للمزيد</button></a>
        </div>
    </div>
     <div class="box">
        <img src="images/gm1.jpg" alt="">
        <div class="info">
            <h3>تمارين أثناء اليوم</h3>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <a href="#"><button class="btn">للمزيد</button></a>
        </div>
    </div>
     <div class="box">
        <img src="images/gm6.jpg" alt="">
        <div class="info">
            <h3>تمارين الصباح</h3>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <a href="#"><button class="btn">للمزيد</button></a>
        </div>
    </div>

</div>

</section>

<!-- service section ends -->

<!-- trainer section starts  -->

<section class="trainer" id="trainer">

<h1 class="heading">أفضل الأطباء</h1>

<div class="box-container">

    <div class="box">
        <img src="images/coach1.png" alt="">
        <div class="info">
            <h3>دكتور عبدالرحمن</h3>
        </div>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fa fa-male"></a>
        </div>
    </div>

    <div class="box">
        <img src="images/coach1.png" alt="">
        <div class="info">
            <h3>دكتور أحمد محمد</h3>
        </div>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fa fa-male"></a>
        </div>
    </div>

    <div class="box">
        <img src="images/coach1.png" alt="">
        <div class="info">
            <h3>دكتور السيد </h3>
        </div>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fa fa-male"></a>
        </div>
    </div>

    <div class="box">
        <img src="images/coach1.png" alt="">
        <div class="info">
            <h3>دكتور جمال</h3>
        </div>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fa fa-male"></a>
        </div>
    </div>

</div>

</section>

<!-- trainer section ends -->

<!-- plan section starts  -->

<section class="plan" id="plan">

<h1 class="heading">خطط الدعم</h1>

<div class="box-container">

    <div class="box">
        <h3 class="title">نظام عادي</h3>
        <h3 class="price"> 200 جنية<span> /3 أشهر</span></h3>
        <h3 class="month">3 أشهر</h3>
        <ul>
            <li><i class="fas fa-check"></i>معلومات رياضية</li>
            <li><i class="fas fa-check"></i>استشارات </li>
            <li><i class="fas fa-check"></i>تمارين</li>
            <li><i class="fas fa-check"></i>مكالمات صوتية</li>
            <li><i class="fas fa-check"></i>مكالمات فيديو</li>
        </ul>
        <a href="#"><button class="btn">سجل الآن</button></a>
    </div>

    <div class="box">
        <h3 class="title">نظام اقتصادي</h3>
        <h3 class="price">500 جنية<span> /5 أشهر</span></h3>
        <h3 class="month">6 أشهر</h3>
        <ul>
            <li><i class="fas fa-check"></i>معلومات صحية</li>
            <li><i class="fas fa-check"></i>استشارات </li>
            <li><i class="fas fa-check"></i>انظمة صحية</li>
            <li><i class="fas fa-check"></i>مكالمات صوتية</li>
            <li><i class="fas fa-check"></i>مكالمات فيديو</li>
        </ul>
        <a href="#"><button class="btn">سجل الآن</button></a>
    </div>

    <div class="box">
        <h3 class="title">نظام مميز</h3>
        <h3 class="price">900 جنية<span> / 1 سنة</span></h3>
        <h3 class="month">12 شهر</h3>
        <ul>
            <li><i class="fas fa-check"></i>معلومات رياضية</li>
            <li><i class="fas fa-check"></i>استشارات </li>
            <li><i class="fas fa-check"></i>تمارين</li>
            <li><i class="fas fa-check"></i>مكالمات صوتية</li>
            <li><i class="fas fa-check"></i>مكالمات فيديو</li>
        </ul>
        <a href="#"><button class="btn">سجل الآن</button></a>
    </div>
        
</div>

</section>

<!-- plan section ends -->

<!-- register section starts  -->

<section class="register" id="register">

<h1 class="heading">تواصل معنا </h1>

<form action="">

    <div class="inputBox">
        <input type="text" placeholder="اسمك ثلاثي">
    </div>

    <div class="inputBox">
        <input type="email" placeholder="البريد الإلكتروني">
        <input type="number" placeholder="رقم الهاتف">
    </div>

    <textarea name="" id="" cols="30" rows="10" placeholder="الرسالة"></textarea>

    <input type="submit" class="btn" value="ارسال">

</form>

</section>

<!-- register section ends -->

<!-- footer section starts  -->

<section class="footer">
جميع حقوق النشر محفوظة © 2021 <a href="#">STEPN </a> |Mohammed Osman 
</section>

<!-- footer section ends -->













<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="javas.js"></script>


</body>
</html>