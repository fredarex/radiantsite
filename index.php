

           
            <!--================Menu Area =================-->
           <?php
        include('includes/header.php');
?>
            <!--================End Menu Area =================-->
      
<?php

$active = 'index';
?>
 <div class="container box">
        
            <!--================Main Content Area =================-->
            <section class="home_sidebar_area">
                <div class="container">
                    <div class="row row_disable">
                        <div class="col-lg-9 float-md-right">
                            <div class="sidebar_main_content_area">
                                <div class="advanced_search_area">
                                    <select class="selectpicker">
                                        <?php
                                        
                                    $get_p_cats = "select * from product_categories";
                        $run_p_cats = mysqli_query($con, $get_p_cats);
                            while($row_p_cats=mysqli_fetch_assoc($run_p_cats)){
                                $p_cat_id = $row_p_cats['p_cat_id'];
                                $p_cat_title = $row_p_cats['p_cat_title'];
                               
                                echo " 
                                 <option value ='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></option>
                                       
                                
                                ";
                            }           
                                        
                                        ?>        
                                        
                                       
                                    </select>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button"><i class="icon-magnifier icons"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="main_slider_area">
                                    <div id="home_box_slider" class="rev_slider" data-version="5.3.1.6">
                                        <ul>
                                            <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="
                                            <?php
                        $get_slides = "select * from slider LIMIT 0,1";
                        $run_slider = mysqli_query($con,$get_slides);
                        while($row_slides=mysqli_fetch_array($run_slider)){
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];
                            
                echo "
                <div class='item active'>
                <img src='admin_area/slides_image/$slide_image' width='869px'>
                
                </div>
                ";            
                            
                            
                        }
                                           
                         ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                            <!-- MAIN IMAGE -->
                                                
                                                <?php
                        $get_slides = "select * from slider LIMIT 0,1";
                        $run_slider = mysqli_query($con,$get_slides);
                        while($row_slides=mysqli_fetch_array($run_slider)){
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];
                            
                echo "
                <div class='item active'>
                <img src='admin_area/slides_image/$slide_image' width='869px' alt='' data-bgposition='center center' data-bgfit='cover' data-bgrepeat='no-repeat' data-bgparallax='5' class='rev-slidebg' data-no-retina>
                
                </div>
                ";            
                            
                            
                        }
                                           
                         ?> 
                                                
                                

                                                <!-- LAYER NR. 1 -->
                                                <div class="slider_text_box first_text">
                                                    <div class="tp-caption tp-resizeme first_text" 
                                                    data-x="['left','left','left','left','left','left']" 
                                                    data-hoffset="['60','60','60','60','20','0']" 
                                                    data-y="['top','top','top','top','top','top']" 
                                                    data-voffset="['70','70','70','70','70','70']" 
                                                    data-fontsize="['48','48','48','48','48','48']"
                                                    data-lineheight="['56','56','56','56','56','48']"
                                                    data-width="['none','none','none','none','none']"
                                                    data-height="none"
                                                    data-whitespace="nowrap"
                                                    data-type="text" 
                                                    data-responsive_offset="on" 
                                                    data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                                    data-textAlign="['left','left','left','left','left','left']"
                                                    >Raising Christ  <br> Ambassadors</div>

                                                    <div class="tp-caption tp-resizeme secand_text" 
                                                        data-x="['left','left','left','left','left','left']" 
                                                        data-hoffset="['60','60','60','60','20','0']" 
                                                        data-y="['top','top','top','top']" data-voffset="['190','190','190','190','190','190']"  
                                                        data-fontsize="['14','14','14','14','14','14']"
                                                        data-lineheight="['24','24','24','24','24']"
                                                        data-width="['300','300','300','300','300']"
                                                        data-height="none"
                                                        data-whitespace="normal"
                                                        data-type="text" 
                                                        data-responsive_offset="on"
                                                        data-transform_idle="o:1;"
                                                        data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                                        data-textAlign="['left','left','left','left','left','left']" style="color:white"
                                                        > inspiring the next generation, who are spiritually, morally, socially academically, and positively assertive anytime anywhere
                                                    </div>

                                                    <div class="tp-caption tp-resizeme third_btn" 
                                                        data-x="['left','left','left','left','left','left']" 
                                                        data-hoffset="['60','60','60','60','20','0']" 
                                                        data-y="['top','top','top','top']" data-voffset="['290','290','290','290','290','290']" 
                                                        data-width="none"
                                                        data-height="none"
                                                        data-whitespace="nowrap"
                                                        data-type="text" 
                                                        data-responsive_offset="on" 
                                                        data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                                        data-textAlign="['left','left','left','left','left','left']">
                                                        <a class="checkout_btn" href="#">shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb=" 
                                            <?php
                        $get_slides = "select * from slider LIMIT 1,1";
                        $run_slider = mysqli_query($con,$get_slides);
                        while($row_slides=mysqli_fetch_array($run_slider)){
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];
                            
                echo "
                <div class='item active'>
                <img src='admin_area/slides_image/$slide_image' width='869px'>
                
                </div>
                ";            
                            
                            
                        }
                                           
                         ?> "  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                            <!-- MAIN IMAGE -->
                                            <?php
                        $get_slides = "select * from slider LIMIT 1,1";
                        $run_slider = mysqli_query($con,$get_slides);
                        while($row_slides=mysqli_fetch_array($run_slider)){
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];
                            
                echo "
                <div class='item active'>
                <img src='admin_area/slides_image/$slide_image' width='869px alt='' data-bgposition='center center' data-bgfit='cover' data-bgrepeat='no-repeat' data-bgparallax='5' class='rev-slidebg' data-no-retina>
                
                </div>
                ";            
                            
                            
                        }
                                           
                         ?> 
                                            <!-- LAYERS -->
                                                <!-- LAYERS -->

                                                <!-- LAYER NR. 1 -->
                                                <div class="slider_text_box first_text">
                                                    <div class="tp-caption tp-resizeme first_text" 
                                                    data-x="['left','left','left','left','left','left']" 
                                                    data-hoffset="['60','60','60','60','20','0']" 
                                                    data-y="['top','top','top','top','top','top']" 
                                                    data-voffset="['70','70','70','70','70','70']" 
                                                    data-fontsize="['48','48','48','48','48','48']"
                                                    data-lineheight="['56','56','56','56','56','48']"
                                                    data-width="['none','none','none','none','none']"
                                                    data-height="none"
                                                    data-whitespace="nowrap"
                                                    data-type="text" 
                                                    data-responsive_offset="on" 
                                                    data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                                    data-textAlign="['left','left','left','left','left','left']"
                                                    >Raising Christ <br> Ambassadors</div>

                                                    <div class="tp-caption tp-resizeme secand_text" 
                                                        data-x="['left','left','left','left','left','left']" 
                                                        data-hoffset="['60','60','60','60','20','0']" 
                                                        data-y="['top','top','top','top']" data-voffset="['190','190','190','190','190','190']"  
                                                        data-fontsize="['14','14','14','14','14','14']"
                                                        data-lineheight="['24','24','24','24','24']"
                                                        data-width="['300','300','300','300','300']"
                                                        data-height="none"
                                                        data-whitespace="normal"
                                                        data-type="text" 
                                                        data-responsive_offset="on"
                                                        data-transform_idle="o:1;"
                                                        data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                                        data-textAlign="['left','left','left','left','left','left']" style="color:white"
                                                        >inspiring the next generation, who are spiritually, morally, socially academically, and positively assertive anytime anywhere
                                                    </div>

                                                    <div class="tp-caption tp-resizeme third_btn" 
                                                        data-x="['left','left','left','left','left','left']" 
                                                        data-hoffset="['60','60','60','60','20','0']" 
                                                        data-y="['top','top','top','top']" data-voffset="['290','290','290','290','290','290']" 
                                                        data-width="none"
                                                        data-height="none"
                                                        data-whitespace="nowrap"
                                                        data-type="text" 
                                                        data-responsive_offset="on" 
                                                        data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                                        data-textAlign="['left','left','left','left','left','left']">
                                                        <a class="checkout_btn" href="#">shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="promotion_area">
                                    <div class="feature_inner row m0">
                                        <div class="left_promotion">
                                            <div class="f_add_item">
                                                <div class="f_add_img"><img class="img-fluid" src="image/annie-spratt-710490-unsplash.jpg" alt=""></div>
                                                <div class="f_add_hover">
                                                    <div class="sale">Sale</div>
                                                    <h4>Top Books <br />Collection</h4>
                                                    <a class="add_btn" href="#">Shop Now <i class="arrow_right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right_promotion">
                                            <div class="f_add_item right_dir">
                                                <div class="f_add_img"><img class="img-fluid" src="image/jesus.jpg" alt=""></div>
                                                <div class="f_add_hover">
                                                    <div class="off">Best Selling Books</div>
                                                    <h4><br />Collection</h4>
                                                    <a class="add_btn" href="#">Shop Now <i class="arrow_right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fillter_home_sidebar">
                                    <h2><span style="font-weight:bold">TOP BOOKS</span></h2>
                                    <div class="home_l_product_slider owl-carousel">
                                        <div class="item woman_shoes">
                                       
                                        </div>
                                        
                                        <div class="item woman_nails">
                                       
                                        </div>
                                        
                                        <div class="item woman_bags">
                                         
                                        </div>
                                      
                                        <div class="item woman_hair">
                                         
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                        <div class="col-lg-3 float-md-right">
                            <div class="left_sidebar_area">
                                <aside class="l_widget l_categories_widget">
                                    <div class="l_title">
                                        <h3>Categories</h3>
                                    </div>
                                    <ul class="p_cat">
                                     
                                        
                                        
                                       
                                      
                                    </ul>
                                </aside>
                                
                                <aside class="l_widget l_categories_widget">
                                    <div class="l_title">
                                        <h3>Brands</h3>
                                    </div>
                                    <ul>
                                        <li><a href="ship" class="child">Children Books</a></li>
                                        <li><a href="#">Teens Books</a></li>
                                          <li><a href="#">Adults Books</a></li>
                                          <li><a href="#">Marriage Books</a></li>
                                          <li><a href="#">Radiant Teens Magazines</a></li>
                                      
                                    </ul>
                                </aside>
                                
                               <aside class="l_widget l_news_widget">
                                    <h3>Buy Your Books here at</h3>
                                    <p>Radiant.inc !</p>
                                 <img src="image/boyguide.PNG">
                                </aside>
                                <aside class="l_widget l_news_widget">
                                    <h3>newsletter</h3>
                                    <p>Sign up for our Newsletter !</p>
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="yourmail@domain.com" aria-label="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary subs_btn" type="button">Subscribe</button>
                                        </span>
                                    </div>
                                </aside>
                                <aside class="l_widget l_hot_widget">
                                    <h3>Summer Hot Sale</h3>
                                    <p>Premium 700 Product , Titles and Content Ideas</p>
                                    <a class="discover_btn" href="#">shop now</a>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--================End Main Content Area =================-->
            
            <!--================World Wide Service Area =================-->
            <section class="world_service">
                <div class="container">
                    <div class="world_service_inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="world_service_item">
                                    <h4><img src="img/icon/world-icon-1.png" alt="">Worldwide Service</h4>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="world_service_item">
                                    <h4><img src="img/icon/world-icon-2.png" alt="">247 Help Center</h4>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="world_service_item">
                                    <h4><img src="img/icon/world-icon-3.png" alt="">Safe Payment</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!--================End World Wide Service Area =================-->
            
               <?php
        include ('includes/footer.php');

        ?>
     
   
        
        
        
        
     
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       
       
    </body>
</html>