<?php
 get_header();?>
 
<!-- 		<div class="container">
  <div class="jumbotron">
    <h1>Bootstrap Tutorial</h1> 
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
    responsive, mobile-first projects on the web.</p> 
  </div>

</div> -->

<?php 
	/*
	if(have_posts() == true){
		echo "have post";
		$a =  query_posts('orderby=date&cat=' . $cat . '&order=ASC&posts_per_page=-1');
		foreach ($a as $key ) {
			// print_r($key);
			// echo "55555".get_the_post_thumbnail( $key->ID, 'medium' ); 
			echo "author Name >>> ". get_the_author_meta('display_name', $key->post_author)."<br>";
			echo "author Name >>> ". get_the_author_meta('user_email', $key->post_author)."<br>";
			
		}

		// while ( <= 10) {
		// 	# code...
		// }
	}
	*/

?>
<div class="container">
<!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-inline-block w-100 p-5" src="<?php echo get_stylesheet_directory_uri(); ?>/img/600300.png" alt="First slide">
    </div>
    <div class="carousel-item ">
      <img class="d-inline-block w-100 p-5" src="<?php echo get_stylesheet_directory_uri(); ?>/img/600300.png" alt="First slide">
    </div> 
    <div class="carousel-item ">
      <img class="d-inline-block w-100 p-5" src="<?php echo get_stylesheet_directory_uri(); ?>/img/600300.png" alt="First slide">
    </div>       
  </div>
</div> -->

<h1 class="display-4">Our Course</h1>

<div class="row">

<?php
		if(have_posts() == true){
		// echo "have post";
		// $a =  query_posts('orderby=date&cat=' . $cat . '&order=ASC&posts_per_page=-1');
		 $a =  query_posts('orderby=date&post_type=lp_course&posts_per_page=6');
		
		foreach ($a as $key ) {

			//print_r($key);
			// echo "55555".get_the_post_thumbnail_url( $key->ID, 'medium' ); 
			// echo "author Name >>> ". get_the_author_meta('display_name', $key->post_author)."<br>";
			// echo "author Name >>> ". get_the_author_meta('user_email', $key->post_author)."<br>";
			// // echo "post_excerpt".$key->post_content."<br>";
			// echo post_class(); 

   				if(empty(get_the_post_thumbnail_url( $key->ID, 'thumbnail' ))){

   					$ima_url = get_stylesheet_directory_uri()."/img/course_150_default.png";

   				}else{

   					$ima_url = get_the_post_thumbnail_url( $key->ID, 'thumbnail' );

   				}		
?>

  <div class="col-sm-3" style="margin-bottom:10px;">
	  <div class="card">
	    <a href="<?php echo $key->guid; ?>"><img class="card-img-top" src="<?php echo $ima_url;?>" alt="Card image cap" ></a>
	    <div class="card-body">
	      <a href="<?php echo $key->guid; ?>"><h3 class="card-title"><?php echo $key->post_title;?></h3></a>     
	      <!-- <p class="card-text"> -->
	      <div>
	      	<small class="text-muted ">
	      		 <span class="fa fa-address-card"></span>
	      		<?php echo get_the_author_meta('display_name', $key->post_author);?></small> 
	      </div>	
	      <div>
	      	<small class="text-muted">
	      		 <span class="fa fa-calendar-alt"></span>
	      		<?php echo $key->post_date;?>
	      	</small> 
	      </div>		      	  	

<!-- 	      </p> -->
	    </div>
	  </div>  	 	
  </div>

<?php
		
   }
	    }		
?>


</div>

<div class="float-right"><h3> <a href="<?php echo get_home_url().'/courses/' ?>"> More Course </a></h3></div>	
<div class="clearfix"></div>
<h1 class="display-4">Our Post</h1>
<div name="course-list">  
 <ul class="list-unstyled">  
<?php 

   		if(have_posts() == true){

   			$b = query_posts('orderby=date&cat=' . $cat . '&order=ASC&posts_per_page=7');
   			echo ">>>>".get_home_url();
   			foreach ($b as $bkey ) {
   				 // echo "55555".get_the_post_thumbnail_url( $bkey->ID, 'medium' ); 
   				// print_r($bkey);
   				$ima_url;
   				// echo "Test".empty(get_the_post_thumbnail_url( $bkey->ID, 'thumbnail' ));
   				// echo  get_stylesheet_directory_uri()."/img/post_default.png";


   				if(empty(get_the_post_thumbnail_url( $bkey->ID, 'thumbnail' ))){

   					$ima_url = get_stylesheet_directory_uri()."/img/post_150_default.png";

   				}else{

   					$ima_url = get_the_post_thumbnail_url( $bkey->ID, 'thumbnail' );

   				}

   				

?>

  <li class="media" style="margin:10px;">
    <a href="<?php echo $bkey->guid;?>">
    	<img class="mr-3" src="<?php echo $ima_url; ?>" alt="Generic placeholder image">
    </a>
    <div class="media-body">
    <a href="<?php echo $bkey->guid;?>">	
      <h2 class="mt-0 mb-1"><?php echo $bkey->post_title;?></h2>
    </a>  
         <div>
	      	<small class="text-muted ">
	      		 <span class="fa fa-address-card"></span>
	      		<?php echo get_the_author_meta('display_name', $key->post_author);?></small> 
	      	<small class="text-muted">
	      		 <span class="fa fa-calendar-alt"></span>
	      		<?php echo $key->post_date;?>
	      	</small> 	      		
	    </div>  	
      <?php echo  iconv_substr($bkey->post_content, 0,399,"UTF-8")?><a href="<?php echo $bkey->guid ?>">..more</a>
    </div>

  </li>


<?php    				
   			}
   		}
   ?>
</ul>
</div> 
<div class="float-right"><h3><a href="<?php echo get_home_url().'/blog-post/' ?>"> More Entry. </a></h3></div>

	</div>


</div>



<?php 


get_footer();
?>

