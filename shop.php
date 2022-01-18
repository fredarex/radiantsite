
        
        <!--================Menu Area =================-->
    <?php
        include ('includes/header.php');
        ?>



        <!--================End Menu Area =================-->
        
        <!--================Categories Banner Area =================-->
      
        <!--================End Categories Banner Area =================-->
        
        <!--================Categories Product Area =================-->

<?php
   

?>

        <section class="categories_product_main p_80">
            <div class="container">
                <div class="categories_main_inner">
                    <div class="row row_disable"> 
                        <div class="col-lg-12">
                            <div class="col-lg-3 float-md-left">
                            <div class="categories_sidebar">
                                <aside class="l_widgest l_p_categories_widget">
                                    <div class="l_w_title">
                                        <h3>Categories</h3>
                                    </div>
                                    <ul class="navbar-nav p_cat">
                                     
                                    </ul>
                                </aside>
                                
                                
                              
                            </div>
                        </div>
                            
          
                            
                             <div class="col-lg-9 float-md-right">
            
                            <div class="categories_product_area">
                                <div class="row p_cat_select">
                                      <?php
                                      
                                        //getpcatpro();

                                       ?>

                                </div>
                                <div class="row get_product">
                            
                                    <?php
                                    
                                  // getproductcat(); 
                                    
                                    
                                    
                           /* if(!isset($_GET['p_cat'])){
                                
                               // $per_page = 6;
                                if(isset($_GET['page'])){
                                    
                        $page = $_GET['page'];
                                    
                                }else{
                            $page=1;            
                                    
                                }
                        $start_from = ($page-1) * $per_page;
                                    
    $get_products ="select * from products order by 1 DESC LIMIT $start_from,$per_page";
                                    
            $run_products = mysqli_query($db,$get_products);
                    
                while($row_products=mysqli_fetch_assoc($run_products)){
                    $pro_id = $row_products['product_id'];
                    
             $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
                    
            $pro_img1 = $row_products['product_img1']; 
                    
                echo "
               <div class='col-lg-4 col-sm-6 center-reponsive'>
                                        <div class='l_product_item'>
                              <div class='l_p_img'>
                              <a href='details.php?pro_id=$pro_id'>
              <img src='admin_area/product_images/$pro_img1' alt='' width='328px' height='166px'>
                                   <h5 class='new'>New</h5>
                                   </a>
                                            </div>
                                <div class='l_p_text'>
                                               <ul>
          
                 <li><a class='add_cart_btn' href='details.php?pro_id=$pro_id'>Add To Cart</a></li>
            
                                 </ul>
                                                <h4>$pro_title</h4>
                                                <h5>N$pro_price</h5>
                                            </div>
                                        </div>
                                    </div>
                
                ";    
                    
                }                    
                                
                           
                                    */
                                    
                                    ?>
                                    
                                </div>
                                <nav aria-label="Page navigation example" class="pagination_area">
                                  <ul class="pagination page">
                                      
                                      <?php
                               
                               // navproductcat();

                            /*    
                                $select = "select * from products";
                                
                                $query = mysqli_query($con,$select);
                                
                                
                                $per_page = 6;
                                
                                $total_page = mysqli_num_rows($query);
                                
                                $page = ceil($total_page/$per_page);
                                
                                
                                echo "<li><a href='shop.php?page=1'>firstpage</a></li>";
    
            for($i=1; $i<$page;$i++){
                echo "<li><a href='shop.php?page=$i'>$i</a>
                </li> ";
            }                    
                
    echo "<li><a href='shop.php?page=$page'>lastpage</a></li>";
                                
                                
                                             }  */
                                      
                                      ?>
                              
                                  </ul>
                                </nav>
                            

                             
                               
                            </div>
                             
                        </div>
                            
                            
                            
                        
                        
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Categories Product Area =================-->
 
        <!--================Footer Area =================-->
         <?php
        include ('includes/footer.php');

        ?>


        <!--================End Footer Area =================-->
        
        
        
        
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        
    </body>
</html>