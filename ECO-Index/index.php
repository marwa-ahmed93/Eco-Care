
 <?php

session_start();

include '../connection.php';

// $email=$_SESSION['email'];
// $query=" SELECT *
// FROM my_client
// ";
// $result = $conn->query($query);
//  $row=$result->fetch_assoc();

?> 


<!DOCTYPE html>
<html>
    <link rel="shortcut icon" href="img/Mo.png" type="image/x-icon" />

    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Eco-Care</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/animate.css">
    
        <!-- [if lt IE 9]>
                <script src="js/html5shiv.min.js"></script>
        <![endif]-->
       
    </head>
    <body>
        
     <!--       start navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark  sticky-top">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <span>Eco</span>Care
          </a>
  
        <!-- <h3><?php echo $row['username']; ?></h3> -->
         
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item active">
                            <a class="nav-link " href="#home">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">الرؤية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">خدمات اضافية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">الفريق</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">خدمات متاحة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">متابعات بيئية</a>
                        </li>
                       
<?php    if(isset($_SESSION['email'])){
?>
 

<li class="nav-item">
       <a class="nav-link" href="../ECO-center/">مركز</a>
                        </li>

                        <li class="nav-item">
       <a class="nav-link" href="../ECO-Service/">خدمات</a>
                        </li>

                       <!-- <li class="nav-item">
        <a class="nav-link" href="../ECO-Sport/">رياضه</a>
                         </li> -->

                        <!-- <li class="nav-item">
       <a class="nav-link" href="../ECO-Sport%20&%20healthy/">صحه</a>
                        </li> -->

                        <li class="nav-item">
       <a class="nav-link" href="../ECO-Offers/index.php">عروض</a>
                        </li>
                        <!-- <li class="nav-item">
       <a class="nav-link" href="../ECO-logout/"> خروج</a>
                        </li> -->

                        <?php }
                        ?>
 <li class="nav-item">
                            <a class="nav-link" href="#contact">تواصل معنا </a>
                        </li>
                        <?php    if(isset($_SESSION['email'])){
?>
   <a class="nav-link" href="../ECO-logout/"> خروج</a>
                        </li>

                        <?php }
                        ?>
                    </ul>

                  </div>
                    </div>
                </nav>

<!--        end navbar-->
        
      <!--Start slider    -->
         <div class="slider" id="home">
            <div id="main-slider" class="carousel slide" data-ride="carousel">
               
              <div class="carousel-inner">
                <div class="caption">
                    <p>  Eco-Care </p> 
                    <h1>بيتك جنة </h1>
                    <h1>حياة أفضل</h1>
                    <a class="learn" href="#about">الرؤية</a>

                    <?php 

                    if(isset($_SESSION['email'])){
                        ?>
                        <a class="serv" href="../ECO-User/users.php" >حسابك الخاص</a>
                        <?php
                    // echo "مرحبا بك";
                    }

                   else
{
   ?>
     <a class="serv" href="../ECO-Login/index.php" >سجل الآن</a>
   <?php
}
                    ?>
                  
                    <a class="learn" href="#services">خدمات اضافية</a>
                  </div>
                      <div class="overlay"></div>
                <div class="carousel-item carousel-one active">
                </div>
                <div class="carousel-item carousel-two">
                </div>
                <div class="carousel-item carousel-three">
                </div>
              </div>
              <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
              </ol>
            </div>
        </div>
      
    <!--        ENd slider-->
<!--         section-->
        <section class="about" id="about">
            <h1>رؤية المشروع </h1>
            <hr>
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 col-sm-12">
                        <img src="img/about/1.jpeg" class="wow slideInLeft" data-wow-duration="1.5s" >
                    </div>
                    <div class="col-md-6 text-right">
                        <h6> حل مشكلة نقص الوعي البيئي تماشياً مع خطة مصر 2030</h6>
                        </p>
                    </p>

            تشجيع وزياده الوعي البيئي وتوعيه وتثقيف المجتمع للحفاظ علي البيئة 
                    </p>
                    
                     في الثقافة المصرية ، لا يتم الترويج بشكل جيد لتوفير خدمات مثل تحويل بعض الاشياء التي يتم القائها في القمامة لاشياء نافعه وصديقه للبيئه ويمكن عملها في المنزل</p>
                
                     </p>
                     مثل جلد الخروف او الحرف اليدوية بالاضافه لمساعدة المنتجين لها وتسهيل وصولهم للمشتريين 
                    </p>
                    إن الحاجة إلى الوعي الذاتي والاهتمام بالبيئة  أمر بالغ الأهمية للحفاظ على المزيد من سبل العيش للمواطنين المصريين ليكونوا منتجين </p>
                        </p>
                        لذا نهدف إلى المساهمة فى تحقيق رؤية مصر 2030 
                    </p>
                    وزيادة الوعي البيئي  فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم 
                     </p>
                    وحل مشكلة نقص الثقافة البيئيه والتي يعاني منها فئة كبيرة من المجتمع المصري 
                     </p>
                    أيضاً توفير سهولة أكبر فى الوصول للخدمات البيئيه 
                     </p>
                    وربط الأشخاص بمقدمي الخدمات   البيئيه 
                     </p>
                    علاوة على ذلك تقديم حلول تقنية  لإرشاد الأشخاص إلي  الطرق الفعاله ومساعدتهم في  إنقاذ البيئة
                       </p>
                    </div>
                </div>
            </div>
        </section>
      
<!--        end section-->
        
        
<!--         section-->
        <section class="services" id="services">
            <h1>خدمات اضافية</h1>
            <hr>
            <div class="container ">
                <div class="row ">
                    <div class="item col-lg-4 col-md-6 col-sm-12 wow fadeIn " data-wow-delay="0.5s">
                        <i class="fa fa-stethoscope"></i>
                        <a href="#" class="title" >   المبيدات </a>
                        <p class="desc"> زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم </p>
                    </div>
                    <div class="item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="1s">
                       <i class="fa fa-handshake-o"></i>
                       <a href="#" class="title" >العروض والخصومات</a>
                        <p class="desc">زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم </p>
                        <p></p>
                    </div>
                    <div class="item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="1.5s">
                        <i class="fa fa-map-marker"></i>
                        <a href="#" class="title" > أقرب الحدائق</a>
                        <p class="desc">زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم </p>
                    </div>
                    <div class="item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="2s">
                       <i class="fa fa-desktop"></i>
                       <a href="#" class="title" >فحص المنتج  بأستخدام الكاميرا</a>
                        <p class="desc">زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم </p>
                    </div>
                    <div class="item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="2.5s">
                        <i class="fa fa-male"></i>
                        <a href="#" class="title" > تواصل مع اطباء في البيئة</a>
                        <p class="desc">زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم </p>
                    </div>
                    <div class="item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="3s">
                        <i class="fa fa-medkit"></i> 
                        <a href="#" class="title" > معلومات بيئية</a>
                        <p class="desc">زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم </p>
                    </div>
                </div>
            </div>
        </section>
      
<!--        end section-->
<!--       start progress -->
         <section class="prog ">
            <div class="container-fluid overbg">
                <div class="row">
                     <div class="col-lg-4 col-md-6 col-sm-12">
                         <div class="box">
                            <div class="chart" data-percent="95" ><span>95</span> </div>
                            <p>نسبة الاوكسجين</p>
                         </div>  
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="box">           
                           <div class="chart"  data-percent="120"> <span>120</span></div>
                            <p>عدد الحدائق </p>
                         </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-12 ">
                         <div class="box">
                             <div class="chart"  data-percent="80"> <span>80</span></div>
                             <p>نسبة التلوث</p>
                         </div>
                    </div>
                     <!-- <div class="col-lg-3 col-md-6 col-sm-12 ">
                         <div class="box">
                           <div class="chart"  data-percent="65"> <span>65</span> </div>
                            <p>الوزن</p>
                         </div>
                    </div>
                    
                </div> -->
            </div>
        
        </section>
        
<!--        end prog-->
        
<!--        start faq-->
        
       <section class="faq" id="">
        <h1>أهم الأسئلة </h1>
        <hr>
        <div class="container">
            <div class="row ">
                <div class="col-md-6 col-sm-12  wow slideInLeft" data-wow-duration="1.5s" >
                    <div class="accordion " id="accordionExample">
                          <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne">
                                  <span> > </span>  استشارات بيئية
                                </button>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                              زيادة الوعي البيئي وتوعية وتثقيف المجتمع للحفاظ علي البيئة
                              </div>
                            </div>
                          </div>

                          <div class="card">
                            <div class="card-header" id="headingTwo">

                                <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-controls="collapseTwo">
                                 <span> > </span>    الأنظمة البيئيه
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body">
                              زيادة الوعي البيئي وتوعية وتثقيف المجتمع للحفاظ علي البيئة
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">

                                <button class="btn  collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-controls="collapseThree">
                                 <span> > </span>  التوعيه البيئية
                                </button>

                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body">
                              زيادة الوعي البيئي وتوعية وتثقيف المجتمع للحفاظ علي البيئة
                              </div>
                            </div>
                          </div>
                           <div class="card">
                            <div class="card-header" id="headingFour">

                                <button class="btn  collapsed" type="button" data-toggle="collapse" data-target="#collapseFour"  aria-controls="collapseFour">
                                <span> > </span>  المبيدات
                                </button>

                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                              <div class="card-body">
                              زيادة الوعي البيئي وتوعية وتثقيف المجتمع للحفاظ علي البيئة
                              </div>
                            </div>
                          </div>
                        </div>

                </div>
                <div class="col-md-6 col-sm-12 wow slideInRight" data-wow-duration="1.5s" >
                  <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">المشكلة</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">السبب</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">العلاج</a>
                      </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active text-right" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                       <span>المشكلة</span> 
                          <p>
                              حل مشكلة الوعي البيئي التي يعاني منها المجتمع ونقدم نظام بيئي صحي واقتصادي مناسب مع مجتمعاتنا المختلفه وكذلك الترويج لأفضل الاماكن البيئية الجيدة والغير معروفة
                                <br>
                                زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
                          </p>
                        </div>
                      <div class="tab-pane fade text-right" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <span>السبب</span>
                          <p>
                            زيادة الوعي البيئي وتوعية وتثقيف المجتمع للحفاظ علي البيئة 
                                <br>
                                بإستخدام الذكاء الاصطناعي في تطوير فكرتنا وحل المشاكل البيئية الصغيرة بسهوله من المنزل
                            </p>
                        </div>
                      <div class="tab-pane fade text-right" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <span>العلاج</span>
                        <p>
                            زيادة الوعي البيئي وتوعية وتثقيف المجتمع للحفاظ علي البيئة 
                                <br>
                                بإستخدام الذكاء الاصطناعي في تطوير فكرتنا وحل المشاكل البيئية الصغيرة بسهوله من المنزل
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      
        
<!--         end faq-->
        
<!--        start our ebsiness-->
         <section class="our">
            <div class="container-fluid overbg">
                <div class="row">
                     <div class="subscribe col-sm-12">
                          <h1> ECO-Care مرحبا بك فى </h1>
                         <p>يمكنك البحث عن اي شئ داخل الموقع </p>
                         <form>
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="search" >
                              <div class="input-group-append">
                                <button class="btn btn-primary" type="button" > بحث </button>
                              </div>
                            </div>
                         </form>
                    </div>
                </div>
            </div>
        </section>
        
<!--        end our ebsiness-->
<!--        start our team-->

       <section class="team" id="team">
             <h1>أعضاء الفريق </h1>
            <hr>
           <div class="container">
            <div class="row">
           
               
                 <div class="parent-item col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1.5s"  data-wow-delay="0.5s">
                     <div class="item">
                     <img src="img/team/2.jpeg">
                     <div class="overlay">
                        <div class="icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-male"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                     </div>
                      <p>محمد عثمان </p>
                    <h3> <span> CEO &  Flutter app development </span></h3> 
                     </div>
                </div>
           
                
                <div class="parent-item col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-duration="1.5s"  data-wow-delay="0.5s">
                    <div class="item">
                   <img src="img/team/3.jpeg">
                    <div class="overlay">
                      <div class="icon">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-male"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                      </div>
                   </div>
                    <p>عبدالرحمن محمد</p>
                   <h3><span>Doctor & Social media</span></h3> 
              </div>
              </div>
       
              <!-- <div class="parent-item col-lg-3 col-md-6 col-sm-12 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
                <div class="item">
               <img src="img/team/4.png">
                <div class="overlay">
                  <div class="icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-male"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </div>
               </div>
                <p> أسماء عطية</p>
                <span>مطور برامج أندرويد</span>
               </div>
          </div>-->
      
                 <div class="parent-item col-lg-4 col-md-6 col-sm-12 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
                      <div class="item">
                     <img src="img/team/5.jpeg">
                      <div class="overlay">
                        <div class="icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-male"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                     </div> 
                      <p>مروة أحمد</p>
                  <h3><span>Full stack developer</span></h3>    
                     </div>
                </div>
            </div>
        </div>
        </div>
     
        </section>
        
        
<!--        end our team-->
        
<!--        start WORKING -->
            
         <section class="working">
            <div class="container-fluid overbg">
                <div class="row">
                     <div class="item col-md-6 col-sm-12">
                         <img src="img/about/beeco.png">
                    </div>
                    <div class="item col-md-6 col-sm-12">
                        <div class="contact"
                            <h2>يمكنك العمل معنا</h2>
                            <p>نحن بحاجة إلى أطباء واستشاريين فى تخصصات وأماكن مختلفة بالإضافة لمبرمجين عملاقة </p>
                            <li class="btn btn-outline-secondary">
                                <a class="nav-link" href="#contact">تواصل معنا </a>
                            </li>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        
<!--                            end WORKING ---->

    <!-- start profilo-->
        <section class="protfolio" id="portfolio">
             <h1>الخدمات المتاحة </h1>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="filters text-center">
                            <li class="active" data-filter="*"><a href="#!">الكل</a></li>
                            <li data-filter=".develop"><a href="#!"> المبيدات</a></li>
                            <li data-filter=".design"><a href="#!">   أنواع النباتات</a></li>
                            <li data-filter=".photo"><a href="#!"> أنواع التربة</a></li>
                        </ul>
                        <div class="projects">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 element-item develop">
                                    <div class="card">
                                        <img src="img/portfolio/proto1.png" class="w-100 h-50%">
                                         <div class="overlay">
                                             <div class="title">
                                                <h5>
                                                <a href="#" class="title" > تواصل  مع متخصصين في البيئة</a>
                                             </h5>
                                             </div>
                                         </div>
                                    </div>
                                </div>
                                 <div class="col-lg-4 col-sm-6  element-item photo">
                                    <div class="card">
                                        <img src="img/portfolio/proto2.png" class="w-100">
                                         <div class="overlay">
                                             <div class="title">
                                                <h5>
                                                    <a href="#" class="title" >  معلومات بيئية</a>
                                                 </h5>
                                                 </div>
                                         </div>
                                    </div>
                                </div>
                                 <div class="col-lg-4 col-sm-6  element-item design">
                                    <div class="card">
                                        <img src="img/portfolio/proto3.png">
                                         <div class="overlay">
                                             <div class="title">
                                                <h5>
                                                    <a href="#" class="title" >أسواق الشتلات</a>
                                                 </h5>
                                                 </div>
                                         </div>
                                    </div>
                                </div>
                                 <div class="col-lg-4 col-sm-6  element-item design">
                                    <div class="card">
                                        <img src="img/portfolio/proto4.png">
                                         <div class="overlay">
                                             <div class="title">
                                                <h5>
                                                    <a href="#" class="title" >نصائح للزراعة</a>
                                                 </h5>
                                                 </div>
                                         </div>
                                    </div>
                                </div>
                                 <div class="col-lg-4 col-sm-6  element-item develop">
                                    <div class="card">
                                        <img src="img/portfolio/5.png">
                                         <div class="overlay">
                                             <div class="title">
                                                <h5>
                                                    <a href="#" class="title" > فحص المنتج بإستخدام الكاميرا</a>
                                                 </h5>
                                             </div>
                                         </div>
                                    </div>
                                </div>
                                 <div class="col-lg-4 col-sm-6  element-item photo">
                                    <div class="card">
                                        <img src="img/portfolio/proto6.png">
                                         <div class="overlay">
                                             <div class="title">
                                                <h5>
                                                    <a href="#" class="title" >الأماكن الملوثة</a>
                                                 </h5>
                                             </div>
                                         </div>
                                    </div>
                                </div>
                                 
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        
        
<!--        end profoli-->
        
<!--        start Pricing Table-->
          <section class="Pricing">
            <h1>خطط الدعم</h1>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRightBig" data-wow-duration="1.5s"  >
                        <div class="item ">
                        <p class="title ">نظام عادي </p>
                        <p class="salary ">أ(3)شهر/ 200 جنية </p>
                        <div><span> معلومات بيئية </span><i class="fa fa-check"></i></div>
                        <!-- <div><span> استشارات طبية</span><i class="fa fa-times"></i></div> -->
                        <!-- <div> <span> تمارين رياضية </span><i class="fa fa-check"></i></div> -->
                        <div><span>الخصومات </span><i class="fa fa-check"></i></div>
                        <div><span>مكالمات فيديو مع المتخصصين</span><i class="fa fa-times"></i></div>
                        <div><span>مكالمات صوتية مع المتخصصين</span><i class="fa fa-times"></i></div>
                        <div><span>تواصل مع فريق الدعم</span><i class="fa fa-check"></i></div>
                        <div><span>هدايا</span><i class="fa fa-times"></i></div>
                         <button><a href="../ECO -SignUp/SignUp.php" class="btn btn ">سجل الآن</a></button>
                        </div>
                    </div>      
                     <div class="col-lg-4  col-md-6 col-sm-12 wow fadeInRightBig" data-wow-duration="1.5s"  data-wow-delay="1s">
                         <div class="item">
                             <div class="sale"> <p>الأعلى طلباً</p> </div>
                            <p class="title">نظام اقتصادي </p>
                            <p class="salary">أ(5)شهر/ 500 جنية </p>
                            <div><span> معلومات بيئية</span><i class="fa fa-check"></i></div>
                            <!-- <div><span> استشارات طبية</span><i class="fa fa-check"></i></div>
                            <div> <span> تمارين رياضية </span><i class="fa fa-check"></i></div> -->
                            <div><span>الخصومات</span><i class="fa fa-check"></i></div>
                            <div><span>مكالمات فيديو مع المتخصصين</span><i class="fa fa-times"></i></div>
                            <div><span>مكالمات صوتية مع المتخصصين</span><i class="fa fa-check"></i></div>
                            <div><span>تواصل مع فريق الدعم </span><i class="fa fa-check"></i></div>
                            <div><span>هدايا</span><i class="fa fa-times"></i></div>
                            <button><a href="../ECO -SignUp/SignUp.php" class="btn btn-outline-dark centerBtn">سجل الآن</a></button>
                         </div>
                    </div>      
                     <div class="col-lg-4  col-md-6 col-sm-12 wow fadeInRightBig" data-wow-duration="1.5s"  data-wow-delay="1.5s">
                         <div class="item">
                        <p class="title">نظام متميز </p>
                        <p class="salary">س(1)نة/ 900 جنية </p>
                        <div><span> معلومات بيئية</span><i class="fa fa-check"></i></div>
                        <!-- <div><span> استشارات طبية</span><i class="fa fa-check"></i></div>
                        <div> <span> تمارين رياضية </span><i class="fa fa-check"></i></div> -->
                        <div><span>الخصومات</span><i class="fa fa-check"></i></div>
                        <div><span>مكالمات فيديو مع المتخصصين </span><i class="fa fa-check"></i></div>
                        <div><span>مكالمات صوتية مع المتخصصين</span><i class="fa fa-check"></i></div>
                        <div><span>تواصل مع فريق الدعم</span><i class="fa fa-check"></i></div>
                        <div><span>هدايا</span><i class="fa fa-check"></i></div>
                        <button><a href="../ECO -SignUp/SignUp.php" class="btn btn ">سجل الآن</a></button>
                         </div>
                    </div>      
                </div>
            </div>
        </section>
        
<!--        end Pricing Table-->
<!--        start lastest post-->
          <div class="latest-post " id="blog" >
            <div class="container ">
                <h1>آخر التطورات البيئية</h1>
                <hr>
            </div>
              <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-4 ">
                      <div class="card" >
                          <img class="card-img-top" src="img/blog/eco33.png" alt="">
                          <div class="card-body text-right">
                               <p  class="card-head ">
                                   <i class="fa fa-comment "> </i> <span> 130 تعليق </span>  </p>
                                <i class="fa fa-calendar"> </i><span> 2021-04-01 / 09:10:16</span>
                              </p>
                              <h4 class="card-title">كيفية الزراعة في المنزل</h4>
                              <p class="card-text">
                                زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
                              </p>
                              <button><a href="#" type="button" class="btn btn-outline" >لمعرفة المزيد</a></button>
                          </div>
                        </div>
                  </div>
                   <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="card">
                          <img class="card-img-top" src="img/blog/eco3.png" alt="">
                          <div class="card-body text-right" >
                               <p  class="card-head">
                                   <i class="fa fa-comment"> </i> <span> 300 تعليق </span>  </p>
                                 <i class="fa fa-calendar"> </i><span> 2021-03-05 / 01:14:11</span>
                              </p>
                              <h4 class="card-title">التعرف علي أنواع النباتات بإستخدام الكاميرا </h4>
                              <p class="card-text">
                                زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
                              </p>
                              <button><a href="#" type="button" class="btn btn-outline" >لمعرفة المزيد</a></button>
                          </div>
                        </div>
                  </div>
                   <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="card">
                          <img class="card-img-top" src="img/blog/eco.png" alt="">
                             <div class="card-body text-right">
                               <p  class="card-head">
                                   <i class="fa fa-comment"> </i> <span> 90 تعليق </span>  </p>
                                  <i class="fa fa-calendar"> </i><span> 2021-04-05 / 01:10:21</span>
                              </p>
                              <h4 class="card-title">تواصل مع دكاترة البيئة</h4>
                              <p class="card-text">
                                زيادة الوعي البيئي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
                              </p>
                              <button><a href="#" type="button" class="btn btn-outline" >لمعرفة المزيد</a></button>
                          </div>
                        </div>
                  </div>
                
              </div>
        </div>
<!--        end lates post-->
<!--        start our business-->
            <div class="our-business ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-lg-12 text-center ">
                            <h3>لا تفوت اللحظة وحافظ على بيئتك </h3>
                            <button> <a href="../ECO -SignUp/SignUp.html" type="button" class="btn btn-outline ">أحصل على حساب مجاني</a></button>
                        </div>
                        
                    </div>
                </div>
            </div>
<!--        end our business-->
        
<!--        start contact us Table-->
          <section class="contact-us text-center" id="contact">
            <h1>تواصل معنا </h1>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12  wow fadeInDown" data-wow-duration="1.5s"  data-wow-delay=".5s">
                       <div class="items">
                           <i class="fa fa-mobile"></i>
                            <p>Call: +20 010 244 53 417</p>
                           <p>(السبت - الخميس (9ص - 9م</p>
                        </div>
                    </div>      
                     <div class="col-lg-4 col-md-6 col-sm-12  wow fadeInDown" data-wow-duration="1.5s"  data-wow-delay="1s">
                          <div class="items">
                           <i class="fa fa-envelope"></i>
                            <p>Call: +20 010 244 53 417 </p>
                           <p>(السبت - الخميس (9ص - 9م</p>
                        </div>
                    </div>      
                     <div class="col-lg-4 col-md-6 col-sm-12  wow fadeInDown" data-wow-duration="1.5s"  data-wow-delay="1.5s">
                          <div class="items">
                           <i class="fa fa-map-marker"></i>
                            <p>Call: +20 010 244 53 417 </p>
                           <p>(السبت - الخميس (9ص - 9م </p>
                        </div>
                    </div>      
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024243.9267794383!2d29.84117368380947!3d29.396658659771152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1574787295873!5m2!1sen!2seg" width="100%" height="350px"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                     <div class="col-md-6 col-sm-12">
                        <form action="handelIndex.php" method ="post" >
                            <div class="form-group">
                                <input type="text" name = "yourName" class="form-control" placeholder="اسمك ثلاثي" required>
                              </div>
                              <div class="form-group">
                                 <input type="email" name = "email" class="form-control" placeholder="البريد الإلكتروني" required>
                              </div>
                              <div class="form-group">
                               <input type="text" name = "subject" class="form-control" placeholder="الموضوع" required>
                              </div>
                              <div class="form-group">
                                <textarea class="form-control" name = "message" rows="4" placeholder="الرسالة" required></textarea>
                              </div>
                             <button type="submit" class="btn btn-outline-dark">ارسال</button>
                         </form>
                    </div>
                </div>
            </div>
        </section>
        
<!--        end contact us-->
<!-- start footer -->
             <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                       <div class="ebusiness">
                          <h2><span>ECO</span>Care</h2>
                           <p>نظام بيئي متكامل ومجاني</p>
                           <ul>
                           <li><a href="#!"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#!"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#!"><i class="fa fa-instagram"></i></a></li>
                           <li><a href="#!"><i class="fa fa-youtube"></i></a></li>
                           </ul>
                        </div>
                    </div>      
                     <div class="col-lg-4 col-md-6 col-sm-12 text-right">
                          <div class="info ">
                            <h4>معلومات عنا </h4>
                            <p>فريق دعم فني على أعلى مستوى</p>
                              <div class="personal">
                                <p><span> الهاتف :</span> 01024453417 </p>
                                <p> wkader99@gmail.com <span> :البريد الإلكتروني</span></p>
                                <p><span> مواعيد العمل  :</span>متاح 24  ساعة </p>
                              </div>
                        </div>
                    </div>      
                     <div class="col-lg-4 col-md-12 col-sm-12 text-right">
                          <div class=" insta">
                               <h4>أحدث التحاليل</h4>
                              <div class="images">
                                <img src="img/portfolio/proto1.png">
                                <img src="img/portfolio/proto2.png">
                                <img src="img/portfolio/proto3.png">
                                <img src="img/portfolio/proto4.png">
                                <img src="img/portfolio/5.png">
                                <img src="img/portfolio/proto6.png">
                              </div>        
                        </div>
                    </div>      
                </div>
                </div>
        </footer>
        <div class="copyright">
            <p>&copy; محفوظة <strong>ECO-Care</strong> جميع حقوق نشر</p>
            <p> Mohammed Osman <span> 2022 </span></p>
        </div>
<!--        end footer-->
         <!-------------  start button scroll up --------------->
        <div class="topbtn">   <i class="fa fa-arrow-up"></i> </div>
<!-------------  End button scroll up --------------->
     
       
    
        
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugin.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jquery.easypiechart.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/wow.min.js"></script>
    </body>
</html>
