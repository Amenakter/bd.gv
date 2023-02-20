<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangladesh.gov.bd</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <?php wp_head();?>
</head>
<body>
    <!-- topbar part start -->
<header class="cont">
    <div class="row topbar">
        <div class="col-sm-6 top-left"> 
            <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
        </div>
        <div class="col-sm-6 top-right d-flex justify-content-end">
            <p>৩ ফাল্গুন, ১৪২৯ 3 |</p>
            <a href="">English</a>
        </div>
    </div>
</header>
<!-- topbar part end -->
<!-- logo part start -->
<section class="cont">
    <div class="row logo">
        <div class="col-sm-4 logo-left">
               <a href="">
                <?php the_custom_logo();?>
        </div>
        <div class="col-sm-8 logo-right">
              <div class="logo_right_top d-flex justify-content-end">
                   <div class="top_menu d-flex">
                       <span>৫৮ </span>
                      <p>মন্ত্রণালয় <br> ও বিভাগ </p>
                    </div>
                    <div class="top_menu d-flex ">
                      <span>৩৫৩ </span>
                       <p>অধিদপ্তর <br> ও অন্যান্য </p>
                    </div>
                    <div class="top_menu d-flex">
                        <span>৮ </span>
                        <p> বিভাগ </p>
                     </div>
                     <div class="top_menu d-flex">
                        <span>৬৪ </span>
                       <p>জেলা </p>
                     </div>
                     <div class="top_menu d-flex">
                        <span>৪৯২ </span>
                        <p>উপজেলা </p>
                     </div>
                     <div class="top_menu d-flex">
                         <span>৪৫৫৪ </span>
                         <p>ইউনিয়ন </p>
                </div>
            </div>
           <div class="logo_right_bottom">
                  <div class="row xx">
                       <div class="col-lg-9 logo_right_bottom_search">
                           <form action="">
                               <input type="text" placeholder="খুঁজুন ">
                               <button>অনুসন্ধান </button>
                           </form>
                        </div>
                        <div class="col-lg-3 logo_right_bottom_icon d-flex justify-content-center">
                             <div class="logo_right_bottom_right1">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/header/a2i-logo-footer.png" alt=""></a>
                             </div>
                       <div class="logo_right_bottom_right2">
                        <p>সাথে থাকুন:</p>
                        <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/header/facebook-icon.png" alt=""></a>
                        <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/header/youtube-icon.png" alt=""></a>
                        <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/header/twitter-blue-icon.png" alt=""></a>
                        <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/header/gplus-icon.png" alt=""></a>           
                    </div>
                </div>
           </div>
        </div>
   </div>
</section>
<!-- logo part end -->
<!-- menu part start -->
<section class="cont">
    <div class="row menubar">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">

              <div class="collapse navbar-collapse" id="navbarNav">
                <?php wp_nav_menu([
                  'theme_location'=>'TM',
                  'menu_class'=>'navbar-nav',
                ]);
                ?>
                <ul class="navbar-nav">
                  <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">হোম</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ই-সেবাসমূহ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">সেবাখাত</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ব্যবসা-বাণিজ্য</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"> বৈদেশিক বিনিয়োগ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">আইন-বিধি</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">তথ্য বাতায়ন</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">সেবাকুঞ্জ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ফরমস</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">তথ্য বাতায়ন হ্যাকাথন</a>
                  </li> -->
                </ul>
              </div>
            </div>
          </nav>
    </div>
</section>
<!-- menu part end -->
<!-- hero part start -->
<section class="cont">
       <div class="row hero">
        <div class="hero_main col-sm-8">
            <div class="banner">
                <a href="#">
                  <?php dynamic_sidebar('banner');?>
                <!-- <img src="<?= get_template_directory_uri() ?>./assets/images/padmabanner.jpg" class="d-block w-100"  alt=""></a> -->
            </div>
 <!-- slider start -->
            <div class="slider mt-4 ">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                  <?php 
                  $slid = new WP_Query([
                    'post_type'=>'post',
                    'catagory_name'=>'slider',
                  ]);
                  ?>
                    <div class="carousel-inner">
                      <?php 
                      $x = 0;
                      while( $slid->have_posts()){ $slid->the_post();
                      $x++;
                      ?>
                     <div class="carousel-item <?= ($x==1)?'active':''?>">
                     <?php the_post_thumbnail();?>

                    </div>
                    <?php }?>
                  </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
     <!-- slider end -->
            <div class="tab">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">দপ্তর ভিত্তিক সেবা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">সকল ই-সেবা</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/call_center.png" alt=""></a>
                                <p>কল সেন্টার</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>মৎস্য ও প্রাণী</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/mobile_service.png" alt=""></a>
                                <p>মোবাইল সেবা </p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/helpdesk.png" alt=""></a>
                                <p>হেল্পডেস্ক</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/call_center.png" alt=""></a>
                                <p>কল সেন্টার</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>মৎস্য ও প্রাণী</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/mobile_service.png" alt=""></a>
                                <p>মোবাইল সেবা </p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/helpdesk.png" alt=""></a>
                                <p>হেল্পডেস্ক</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/call_center.png" alt=""></a>
                                <p>কল সেন্টার</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>মৎস্য ও প্রাণী</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/mobile_service.png" alt=""></a>
                                <p>মোবাইল সেবা </p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/helpdesk.png" alt=""></a>
                                <p>হেল্পডেস্ক</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                <p>কৃষি</p>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="list m-3">
                <h5>উদ্যোগ</h5>
                <ul>
                    <li><a href="">উদ্যোগ বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০) (১৩-০৬-২০১৬)</a> </li>
                    <li><a href="">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা। (১১-০৪-২০১৫)</a>  </li>
                    <li><a href="">বাংলাদেশ সরকারের ষষ্ঠ পঞ্চবার্ষিক পরিকল্পনা। (০৭-০৪-২০১৫)</a> </li>
                    <li><a href="">বাংলাদেশ সরকারের প্রেক্ষিত পরিকল্পনা (২০১০-২০২১)। (০৭-০৪-২০১৫)</a> </li>
                    <li><a href="">দূর্যোগ ব্যবস্থাপনা জন্য জাতীয় পরিকল্পনা ২০১০-২০১৫। (০৭-০৪-২০১৫)</a> </li>

                </ul>
            </div>
            <div class="others">
              <div class="row text-center">
                <a href=""><button>সকল</button></a>
              </div>
              <div class="row bottom_img">
                  <div class="col-sm-4" >
                    <a href=""><img src="<?= get_template_directory_uri() ?>./assets/images/forms_portal_logo (1).png" alt=""></a>
                    <a href=""><img src="<?= get_template_directory_uri() ?>./assets/images/Konnect Logo.png" alt=""></a>
                    <a href=""><img src="<?= get_template_directory_uri() ?>./assets/images/logo_0_0.png" alt=""></a>
                    <a href=""><img src="<?= get_template_directory_uri() ?>./assets/images/ebook_bangla (1).png" alt=""></a>
                     </div>
                  <div class="col-sm-4">
                    <a href=""><img src="<?= get_template_directory_uri() ?>./assets/images/TP main-logo.png" alt=""></a>
                    <a href=""><img src="<?= get_template_directory_uri() ?>./assets/images/visit-bangladesh-logo (1).png" alt=""></a>
                    <a href=""><img src="<?= get_template_directory_uri() ?>./assets/images/infokosh-logo (1).png" alt=""></a>

                  </div>
                  <div class="col-sm-4">
                    <a href=""><img src="<?= get_template_directory_uri() ?>./assets/images/vision_2021_bn.png" alt=""></a>
                    <a href=""><img src="<?= get_template_directory_uri() ?>./assets/images/MP logo.png" alt=""></a>
                    <a href=""><img src="<?= get_template_directory_uri() ?>./assets/images/services_portal_bn.png" alt=""></a>
                  </div> 
              </div>
              <div class="bottom_video">
                <h5> আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</h5>
                    <iframe width="200" height="150" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="200" height="150" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="200" height="150" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h5>অন্যান্য ভিডিও</h5>
                    <iframe width="200" height="150" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="200" height="150" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="200" height="150" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     
                    
                     
              </div>
          </div>
        </div>
        <div class="hero_side col-sm-4">
            <div class="side_img">
                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100 mb-2" alt=""></a>
                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100 mb-2" alt=""></a>
                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100 mb-2" alt=""></a>
                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100 mb-2" alt=""></a>
                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100 mb-2" alt=""></a>
            </div>
            <h4>সকল বাতায়ন</h4>
            <form action="">
                <select name="" id="">
                    <option value="">ওয়েবসাইট বাছাই করুন</option>
                    <option value="">মন্ত্রণালয়</option>
                    <option value="">অধিদপ্তর </option>
                    <option value="">ঢাকা বিভাগ</option>
                    <option value="">চট্টগ্রাম বিভাগ</option>
                </select>
                <button>চলুন</button>
            </form>
            <div class="side_video">
                <h5>মুজিব১০০ আ্যাপ</h5>
                <iframe width="315" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h5>মাস্ক পরুন সেবা নিন</h5>
                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/sidebar/mask-bd-portal (1).jpg" class="d-block w-100" alt=""></a>
                <h6>ডেঙ্গু প্রতিরোধে করণীয়</h6>
                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/sidebar/dengu.jpg" class="d-block w-100" alt=""></a>
                <h6>ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর</h6>
                <iframe width="315" height="220" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="মাননীয় প্রধানমন্ত্রী জননেত্রী শেখ হাসিনার নেতৃত্বে ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর।" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                 <h6>রূপময় বাংলাদেশ</h6>
                 <iframe width="315" height="220" src="https://www.youtube.com/embed/QNUSIOMb6vI" title="Beautiful Bangladesh - Land Of Stories" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
       </div>
</section>
<!-- hero part end -->
  <!-- footer part start -->
  <footer class="cont mt-5">
    <div class="row footer_main">
        <img src="<?= get_template_directory_uri() ?>./assets/images/footer/download.png" alt="">
    </div>
    <div class="row footer_bottom">
        <div class="col-lg-7 fb_left">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="#">গোপনীয়তার নীতিমালা</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">ব্যবহারের শর্তাবলি</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">সার্বিক সহযোগিতায়</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">সেবাখাত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">সাইট ম্যাপ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">সচরাচর জিজ্ঞাসা</a>
                      </li>
                </ul>
              </div>
           </div>
        </nav>
           <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
     </div>
        <div class="col-lg-5 fb_right text-end">
               <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি </p>
                             কারিগরি সহায়তায়:   <img src="<?= get_template_directory_uri() ?>./assets/images/footer/np-logo-set.png" alt="">
        </div>
    </div>
</footer>
       
<!-- footer part end -->
<?php wp_footer();?>


    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>