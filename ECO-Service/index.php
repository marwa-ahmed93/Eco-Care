

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
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Eco-Service</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/Mo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img class="img-fluid w-25 rounded-circle" src="images/ecologo2.jpeg" alt="" />
    </a>
    
    
    <h3><?php echo $row['user_name']; ?></h3>
    
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#home">الرئيسية</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">أنواع الفيروسات</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#cov1">المبيدات</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#cov2">الزراعه العضويه</a>
            </li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#cov3">نظم الري الحديئة</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#cov4">معدلات تسميد</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#cov5">زراعه الهيدروبنك</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#cov6">زراعه الانسجه</a>
			  </li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#team">أفضل الأستشاريين</a>
			  </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">تواصل معنا</a>
            </li>
            
            <?php    if(isset($_SESSION['email'])){?>
 <li class="nav-item">
       <a class="nav-link" href="../ECO-logout/index.php"> خروج</a>
                        </li>
                        <?php }
                        ?>

          </ul>
        </div>
      </div>
    </nav>
	
	<section id="home" class="main-banner parallaxie" style="background: url('uploads/slider111.jpeg')">
		<div class="heading ">
			<h1>للعلاج والمبيدات EcoCare مركز</h1>			
			<h3 class="cd-headline clip is-full-width">
				
				<span class="cd-words-wrapper">
					<b class="is-visible">زراعه الأنسجه</b>
					<b>الزراعه العضويه</b>
					<b>نظم الري الحديثة</b>
					<b>معدلات التسميد</b>
				</span>
				<span>يوجد قسم للتعامل مع </span>
				<div class="btn-ber">
					<a class="get_btn hvr-bounce-to-top" href="../STEPN -SignUp/SignUp.php">افتح حساب جديد</a>
          <a class="learn_btn hvr-bounce-to-top" href="../ECO-Index/index.php">الصفحة الرئيسية</a>
					<!-- <a class="learn_btn hvr-bounce-to-top" href="#"> مرحبا بك معانا  </a> -->
          <a class="get_btn hvr-bounce-to-top" href="../STEPN-Login/index.php">سجل دخول</a>

				</div>
			</h3>
		</div>
	</section>

<!-- ------------------فراغ about ------------------>
    <!-- <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>أنواع الفيروسات</h3>
                <p>نعمل على تسهيل خيارات الاستشارات على مدار الساعة بدلاً من المستشفيات العادية والحلول السريرية
				</p>
            </div>end title

            <div class="row text-right">
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-seo "></i>
						</div>
						<h2>استشارة</h2>
						<p>زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
						</p>
					</div>
                </div> -->
                <!-- end col -->
                <!-- <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-development"></i>
						</div>
						<h2>توفير غرف نظيفه بالمستشفي</h2>
						<p>زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
						</p>
					</div>
                </div> -->
                <!-- end col -->
				<!-- <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-process"></i>
						</div>
						<h2>خصومات</h2>
						<p>زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
						</p>
					</div>
                </div> -->
                <!-- end col -->
				<!-- <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-discuss-issue"></i>
						</div>
						<h2>خدمة اسعاف مجانية</h2>
						<p>زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
						</p>
					</div>
                </div> -->
                <!-- end col -->
				<!-- <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea"></i>
						</div>
						<h2>طوارئ</h2>
						<p>زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
						</p>
					</div>
                </div> -->
                <!-- end col -->
				<!-- <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea-1"></i>
						</div>
						<h2>فريق دعم</h2>
						<p>زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
						</p>
					</div>
                </div> -->
                <!-- end col -->
            <!-- </div> -->
            <!-- end row -->
        <!-- </div> -->
        <!-- end container -->
    <!-- </div> --> 
     <!-- end section -->
	
	<!--------------------فراغ Blog-------------------->
  <div id="cov1" >
	<section class="about-us">
        <div class="section-header">
          <h1 class="section-heading">المبيدات</h1>
          <div class="underline"></div>
        </div>
        <div class="services">
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pen-nib"></i>
              <h3 class="pl-5">أسبابه</h3>
            </div>
            <p class="service-text pr-5">
            الحشرات - الفطريات - البكتريا <br> جميعهم يتسببو بأضرار فادحه
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-roller"></i>
              <h3>المشاكل</h3>
            </div>
            <p class="service-text">
              الحشرات يمكن ان تقضي علي المحاصيل - الديدان والجراد يتغذون علي المجموع الخضري والثمار <br> كفيلين بالقضاء علي المحصول بأكمله 
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pencil-alt"></i>
              <h3>أنواع</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-brush"></i>
              <h3>العلاج</h3>
            </div>
            <p class="service-text">
              رش المبيدات الزراعية <br> وهناك ايضا طرق حيويه للعلاج - حشرات تفترس الحشرات الضارة 
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-ruler-combined"></i>
              <h3>أعراض إستخدام المبيد </h3>
            </div>
            <p class="service-text">
              يمكن ان تتسبب في العقم وضعف المناعه لدي الطيور <br> وتقتل ايضا الحشرات النافعه التي من دورها القضاء علي الحشرات الضاره 
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="far fa-building"></i>
              <h3>التعامل معه</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="about-us-img-wrapper">
            <img class="w-100 mt-5 ml-5 rounded-circle" src="uploads/mm.png"/>
          </div>
        </div> 
      </section>
	<!--------------------فراغ Blog-------------------->
  <div id="cov2" >
    <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading">الزراعه العضوية </h1>
          <div class="underline"></div>
        </div>
        <div class="services">
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pen-nib"></i>
              <h3>تعريف الزراعه العضوية</h3>
            </div>
            <p class="service-text">
              عياه عن الزراعة بدون إستخدام المناعة الكيميائي <br> مثل => المبيدات والاسمده المصنعه كيميائي 
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-roller"></i>
              <h3>كيفيتها</h3>
            </div>
            <p class="service-text">
              تعتمد علي الاسمده العضويه الطبيعيه مثل اسمده الدواجن ويوجد انواع من البكتريا قادره علي تصنيع السماد في التربه مثل بكتريا الاسيتو بكتر
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pencil-alt"></i>
              <h3>أنواع</h3>
            </div>
            <p class="service-text">
              تعتمد علي كل شيئ عضوي  من تصنيع بيولوجي وليس كيميائي <br> كم انها لا تحتوي علي مبيدات كيميائيه
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-brush"></i>
              <h3>فوائدها</h3>
            </div>
            <p class="service-text">
              الزراعه العضويه لها فوائد علي الصحه العامه وعلي التلوس من المبيدات  واثاره علي التربه وعلي الحيوانات والانسان والبيئه ايضا
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-ruler-combined"></i>
              <h3>الأعراض</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="far fa-building"></i>
              <h3>التعامل معه</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="about-us-img-wrapper">
            <img class="w-75 ml-5 rounded-circle" src="uploads/mm.png" />
          </div>
        </div>
      </section>
	<!--------------------فراغ Blog-------------------->
  <div id="cov3" >
    <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading">نظم الري الحديثه</h1>
          <div class="underline"></div>
        </div>
        <div class="services">
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pen-nib"></i>
              <h3>أسبابه</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-roller"></i>
              <h3>المشاكل</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pencil-alt"></i>
              <h3>أنواع</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-brush"></i>
              <h3>العلاج</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-ruler-combined"></i>
              <h3>الأعراض</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="far fa-building"></i>
              <h3>التعامل معه</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="about-us-img-wrapper">
            <img class="w-75 ml-5 rounded-circle"  src="uploads/mm.png" />
          </div>
        </div>
      </section>
	<!--------------------فراغ Blog-------------------->
  <div id="cov4" >
    <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading">معدلات تسميد</h1>
          <div class="underline"></div>
        </div>
        <div class="services">
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pen-nib"></i>
              <h3>أسبابه</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-roller"></i>
              <h3>المشاكل</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pencil-alt"></i>
              <h3>أنواع</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-brush"></i>
              <h3>العلاج</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-ruler-combined"></i>
              <h3>الأعراض</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="far fa-building"></i>
              <h3>التعامل معه</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="about-us-img-wrapper">
            <img class="w-75 ml-5 rounded-circle"  src="uploads/mm.png" />
          </div>
        </div>
      </section>
	<!--------------------فراغ Blog-------------------->
  <div id="cov5" >
    <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading">زراعة الهيدروينك</h1>
          <div class="underline"></div>
        </div>
        <div class="services">
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pen-nib"></i>
              <h3>أسبابه</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-roller"></i>
              <h3>المشاكل</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pencil-alt"></i>
              <h3>أنواع</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-brush"></i>
              <h3>العلاج</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-ruler-combined"></i>
              <h3>الأعراض</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="far fa-building"></i>
              <h3>التعامل معه</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="about-us-img-wrapper">
            <img class="w-75 ml-5 rounded-circle"  src="uploads/mm.png" />
          </div>
        </div>
      </section>
	<!--------------------فراغ Blog-------------------->
  <div id="cov6" >
    <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading">زراعة الأنسجة</h1>
          <div class="underline"></div>
        </div>
        <div class="services">
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pen-nib "></i>
              <h3>أسبابه</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-roller"></i>
              <h3>المشاكل</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pencil-alt"></i>
              <h3>أنواع</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-brush"></i>
              <h3>العلاج</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-ruler-combined"></i>
              <h3>الأعراض</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="far fa-building"></i>
              <h3>التعامل معه</h3>
            </div>
            <p class="service-text">
              زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="about-us-img-wrapper">
            <img class="w-75 ml-5 rounded-circle"  src="uploads/mm.png" />
          </div>
        </div>
      </section>
	<!--------------------فراغ Blog-------------------->
	
	<div id="team" class="section wb">
		<div class="container">
			<div class="section-title text-center">
				<h3>أفضل المتخصصين</h3>
				<p>نعمل على تسهيل خيارات الاستشارات على مدار الساعة بدلاً من الحلول السريرية
				</p>
			</div>
      
      <!-- end title -->
		
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="uploads/img-2.png">
						</div>
						<div class="team-content">
							<h3 class="title">دكتور أحمد أيمن</h3>
							<span class="post">زراعة أنسجة</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-male"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="uploads/img-4.png">
						</div>
						<div class="team-content">
							<h3 class="title">دكتور محمد جعفر</h3>
							<span class="post">زراعة عضوية</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-male"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="uploads/img-1.png">
						</div>
						<div class="team-content">
							<h3 class="title">دكتور محمد ربيع</h3>
							<span class="post">زراعة الهيدروينك</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-male"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="uploads/img-3.png">
						</div>
						<div class="team-content">
							<h3 class="title">دكتور علي المغاوري</h3>
							<span class="post">نظم الري الحديث</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-male"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

		<!--------------------فراغ Pricing -------------------->


    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>تواصل معنا</h3>
                <p>نعمل على تسهيل خيارات الاستشارات على مدار الساعة بدلاً من الحلول السريرية
				</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form ">
                        <div id="message"></div>
                        <form action="../STEPN-hospital/handelIndex2.php" method="post" id="contactForm" name="sentMessage" novalidate="novalidate">
							<div class="row ">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control text-right" id="name" type="text" placeholder="اسمك ثلاثي" required="required" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control text-right" id="email" type="email" placeholder="البريد الإلكتروني" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control text-right" id="phone" type="tel" placeholder="رقم الهاتف" required="required" data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control text-right" id="message" placeholder="الرسالة" required="required" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn hvr-bounce-to-top" type="submit">ارسال</button>
								</div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
				<a href="#"><img src="images/logo.png" alt="" /></a>
                <div class="footer-center">
                    <p class="footer-links">
                        <a href="#home">الرئيسية</a>
                        <a href="#">المبيدات</a>
                        <a href="#">الزراعة العضوية</a>
                        <a href="#">نظم الري الحديثة</a>
                        <a href="#">معدلات تسميد</a>
                        <a href="#">زراعة الهيدرونيك</a>
                        <a href="#">زراعة الانسجة</a>
						
                        <a href="#team">أفضل الاستشاريين</a>
                        <a href="#contact">تواصل معنا</a>
                    </p>
                    <p class="footer-company-name">Mohammed Osman &copy; 2022 <a href="#">EcoCare</a> جميع حقوق النشر محفوظة	
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/headline.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>

</body>
</html>