<?php require "conn.php" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
  <meta name="format-detection" content="telephone=no, address=no, email=no">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <?php showseo();?>
  <?php require "head.php" ?>
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link rel="stylesheet" href="css/swiper.min.css" type="text/css"/>
  <link rel="stylesheet" href="css/media.css" type="text/css"/>
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script>
    var wow = new WOW({
      boxClass:'wow',
      animateClass:'animated',
      offset:200,
      mobile: true,
      live: true,
    });
    wow.init();
  </script>
</head>

<body>
  <?php include 'top.php'; ?>
  <div class="banner">

    <div class="ind_banner swiper-container">
      <div class="swiper-wrapper">
      <?php
        $arr=getcorss('ban_co',1);
        ?>
        <?php 
            foreach($arr as $k=>$v){
              $turl=(!empty($v['link_url']))?$v['link_url']:'javascript:;';
              $targ=(!empty($v['link_url'])&&strpos($v['link_url'],'http://')!==false)?'target="_blank"':'';
        ?>
        <div class="swiper-slide"><img src="<?php echo $cong['path'].$v['img_sl'.$cong['lang']]?>"/></div>
        <?php
            }
            ?>
      </div>
      <!-- Add Pagination -->
      <div class="banner_pag swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="banner_next swiper-button-next"></div>
      <div class="banner_prev swiper-button-prev"></div>
    </div>
    
  </div> 

  <div class="nymain">
    <div class="con">
    	<div class="wrap">
        <ul class="con_box">
        <?php $arr = getcorss('ban_co',3,true,4);
        foreach ($arr as $k => $v) {?>
          <li <?php if ($k==3) {
            echo "class='last'";
          }?>>
            <h2><img src="<?php echo $v['img_sl'];?>" /></h2>
            <h3><?php echo $v['title'];?></h3>
            <p><?php echo $v['f_body'];?></p>
          </li>
          <?php } ?>

          <div class="clear"></div>
        </ul>

      </div>


    </div>
    <div class="con1">
    	<div class="wrap">
       <div class="cn1_lt fl animated slideInRight wow">
         <h2><?php echo getcors('ban_co',12,'title');?></h2>
         <p><?php echo getcors('ban_co',12,'f_body');?></p>
         <h4><a href="<?php echo getcors('ban_co',12,'link_url');?>">立即查看 >></a></h4>



       </div>
       <div class="cn1_rt fr animated slideInLeft wow"><img src="<?php echo getcors('ban_co',12,'img_sl');?>"/></div>

       <div class="clear"></div>



     </div>



   </div>
   <div class="con2">
     <div class="wrap">
<!--        <div class="hua">
         <h2>产品中心  |  Product center</h2>
       </div> -->


       <!-- <div class="ind_banner3 swiper-container"> -->
        <div class="swiper-wrapper cn2_box">
        <?php $arr = getcorss('pro_co',0,true,0,'','and tuijian=1');
        foreach ($arr as $k => $v) { ?>
          <div class="swiper-slide">
           <li class="pp1">
             <div class="li_img"><img  src="<?php echo $v['img_sl'];?>"/></div>
             <div class="wen">
              <h3><?php echo $v['title'];?></h3>
              <p><?php echo $v['f_body'];?></p>
            </div>	   
            <h4><a href="pro_show.php?id=<?php echo $v['id'];?>">了解更多</a></h4>
          </li>

        </div>
        <?php } ?>



</div>
<!-- Add Pagination -->
<div class="banner_pag2 swiper-pagination"></div>

</div>


            

          </div>


        </div>
        <div class="con3">
          <div class="wrap">
           <div class="hua">
             <h2>信息中心  |  NEWS center </h2>
           </div>





           <ul class="cn3_box">

            <div class="ind_banner2 swiper-container">
              <div class="swiper-wrapper">
              <?php $arr = getcorss('news_co',0,true,0,'','and tuijian=1');
        foreach ($arr as $k => $v) { ?>
                <div class="swiper-slide">
                 <div class="quan">
                  <h3 class="tt1"><?php echo $v['title'];?></h3>
                  <div class="wen1">
                    <p><?php echo $v['f_body'];?></p>
                    <div class="li_img"><img src="<?php echo $v['img_sl'];?>" /></div>
                    <span><?php echo date('Y-m-d',$v['wtime']);?></span>
                  </div>
                </div>

              </div>
              <?php } ?>
              

      </div>
      <!-- Add Pagination -->
      <div class="banner_pag2 swiper-pagination"></div>

    </div>
    <!-- Add Arrows -->
    <div class="banner_next2 swiper-button-next"></div>
    <div class="banner_prev2 swiper-button-prev"></div>

            </ul>


          </div>
        </div>







      </div>  

<?php include 'bottom.php'; ?>











     <script>
       var swiper = new Swiper('.ind_banner.swiper-container', {
        pagination: '.banner_pag.swiper-pagination',
        nextButton: '.banner_next.swiper-button-next',
        prevButton: '.banner_prev.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false

      });

       var swiper = new Swiper('.ind_banner2.swiper-container', {
        pagination: '.banner_pag2.swiper-pagination',
        nextButton: '.banner_next2.swiper-button-next',
        prevButton: '.banner_prev2.swiper-button-prev',
        paginationClickable:  true,
        loop: true,
        autoplay: 2500,
        slidesPerView: 4,
        spaceBetween: 10,
        breakpoints: {
          1024: {
            slidesPerView: 4,
            spaceBetween: 10
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 30
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          320: {
            slidesPerView: 1,
            spaceBetween: 10
          }
        }


      });





       var swiper = new Swiper('.ind_banner3.swiper-container', {
        pagination: '.banner_pag3.swiper-pagination',
        nextButton: '.banner_next3.swiper-button-next',
        prevButton: '.banner_prev3.swiper-button-prev',
        paginationClickable:  true,
        autoplay: 2500,
        slidesPerView: 4,
        spaceBetween: 8,
        breakpoints: {
         1277: {
          slidesPerView:3.5,
          spaceBetween:8
        },
        1180: {
          slidesPerView:3.1,
          spaceBetween:8
        },


        1035: {
          slidesPerView:2.5,
          spaceBetween:8
        },
        750: {
          slidesPerView:2,
          spaceBetween: 8
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 8
        },
        600: {
          slidesPerView: 1,
          spaceBetween: 8
        }
      }


    });
  </script>

  <script type="text/javascript">
  // alert('jq');
  $(".nav_img").click(function(){
   $(this).parent().find(".nav_ul").slideToggle(1000);
 });

</script>


</body>
</html>
