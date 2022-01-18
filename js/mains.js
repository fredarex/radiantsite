$(document).ready(function(){
// calling the function 
    p_cat();
    get_product('','');


   pagepro('');


get_product('','checked');


var rand = Math.round((Math.random() * 6));

getindexpro(rand,2,'_shoes');
getindexpro(rand + 3,2,'_bags');
getindexpro(rand + 6,2,'_nails');
getindexpro(rand + 9,2,'_hair');

clickcategory();


// end of calling the function 






// these happen when clicking the add_btn it redirect to the detail.php

$(document).on('click','.detail_id',function(){
  var id = $(this).attr('id');
var details ='details.php?id='+id+'';

window.location=details;





});
  
  // end of clicking the add_btn to redirect to the detail.php




// product categories for the book or magazine

    function p_cat(){
        
         
         $.ajax({
        url:'action.php',
        method:'POST',
        data:{
            p_cat : 1
        },
         success:function(response){
             $('.p_cat').append(response);
             
         }    
             
             
        
        
      
        
    });
    
    }
//ending product categories for the book or magazine




function getshopcat(){

$(document).on('click','.current',clickcategory);


}



// these get the product in the index.php page

function getindexpro(start,limit,thing){

$.ajax({
  url:'action.php',
  method:'POST',
  data:{
    firstpro:1,
    start:start,
    limit:limit
  },
  success:function(response){
  $('.woman'+thing).html(response);
  }


});

}

// end of getting the product in the index.php page




// what happens when clicking the magazine or the book 

function clickcategory(){

$(document).on('click','a[name="pcategory"]',function(){
 
 var id = $(this).attr('id');
  


  page(id); 
  product_category('',id);
  product_cat(id);
window.location.assign("shop.php#");


});
}
// end of clicking the magazine or book





// starting the page when click the book or magazine this will get the description and title of the selected product category
function product_cat(id){

$.ajax({
  url:'action.php',
  method:'POST',
  data:{
    get_pro_cat:1,
    id:id

  },
  success:function(response){
   
   // window.location = 'shop.php?p_cat_id='+id+'';
    $('.p_cat_select').html(response);
  }


});



}
// ending the page when click the book or magazine this will get the description and title of the selectdd product category





//  getting the products  in the database when the magazine or  book is clicked 
function product_category(page,id){

$.ajax({
  url:'action.php',
  method:'POST',
  data:{
    get_p_cat:1,
    id:id,
    page:page

  },
  success:function(response){
   
   // window.location = 'shop.php?p_cat_id='+id+'';
    $('.get_product').html(response);
  }


});





  }
// end of  getting the products  in the database when the magazine or  book is clicked 





   //get_product for the shop or other pages
        function get_product(page,pattern){
           var pro; 


          if(pattern!='' && page==''){
            
          pro = $('.get_productes');
          }else if(pattern=='' && page!=''){   
         pro = $('.get_product');
          
          }else if(pattern == '' && page == ''){   
         pro = $('.get_product');
          
          }


           $.ajax({
            method:'POST',
            url:'action.php',
            data:{
             getpro:1,
             pages:page,  
              pattern:pattern
                
            },
            success:function(response){
               console.log('good work');  
                pro.html(response);
              
            }
            
            
        });

   
        
    }

   // end of getting product for the shop or the pages




    
  //get the nav list for the page when the product categories is clicked  
 function page(page_p_cat){
         $.ajax({
            method:'POST',
            url:'action.php',
            data:{
             pagee:1,
             page_p_cat : page_p_cat     
            },
            success:function(response){
 $('.page').html(response);
                
            }
            
            
        });
        
       
        
        
    }
    // ending the nav list for the page when the product categories is clicked




    
// starting the nav list for the page without clicking on the  book or the magazine of the product categories
    function pagepro(page_p_cat){
         $.ajax({
            method:'POST',
            url:'action.php',
            data:{
             pagepro:1,
             page_p_cat : page_p_cat     
            },
            success:function(response){
 $('.page').html(response);
                
            }
            
            
        });
        
       
        
        
    }

    //ending the nav list for the page without clicking on the book or the magazine of the product categories
    
   
    
    

    // these happens when u click to the next page without going to product_categories
 $(document).on('click','#pagers',function(){

  var pages = $(this).attr('spage');
  get_product(pages,'');

 });
   // end of what happens when u click to the next page without going to product_categories 






   // these happens when u click to the next page with the product_category being involved 
$(document).on('click','#pageno',function(){
               var page = $(this).attr('page');
             
               var page_p_cat = $(this).attr('p_cat');
  

        product_category(page,page_p_cat);
       product_cat(page_p_cat);
             
    });
    
       // end of what happens when u click to the next page with the product_category being involved 








 
    
});
