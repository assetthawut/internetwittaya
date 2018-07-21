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
<div id="carouselExampleControls" class="carousel post  slide row" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 p-5" src="<?php echo get_stylesheet_directory_uri(); ?>/img/600300.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 p-5" src="<?php echo get_stylesheet_directory_uri(); ?>/img/600300.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 p-5" src="<?php echo get_stylesheet_directory_uri(); ?>/img/600300.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div>
<div class="card-columns">		
<?php 
	
	if(have_posts() == true){
		// echo "have post";
		$a =  query_posts('orderby=date&cat=' . $cat . '&order=ASC&posts_per_page=-1');
		foreach ($a as $key ) {
			// print_r($key);
			// echo "55555".get_the_post_thumbnail_url( $key->ID, 'medium' ); 
			// echo "author Name >>> ". get_the_author_meta('display_name', $key->post_author)."<br>";
			// echo "author Name >>> ". get_the_author_meta('user_email', $key->post_author)."<br>";
			// // echo "post_excerpt".$key->post_content."<br>";
			// echo post_class(); 
?>
  <div class="card card bg-light mb-3">
   <a href="<?php echo $key->guid ?>" > <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url( $key->ID, "thumbnail" );?>" alt="Card image cap"> </a>
    <div class="card-body">
      <h5 class="card-title"><?php echo $key->post_title ?></h5>
      <p class="card-text">
      	<small class="text-muted float-left">Author: <?php echo get_the_author_meta('display_name', $key->post_author);?> <div></div><?php echo $key->post_date; ?></small>
      </p>   
      <div class="clearfix"></div>      
      <p class="card-text"><?php echo  iconv_substr($key->post_content, 0,100,"UTF-8")?><a href="<?php echo $key->guid ?>">..more</a></p>  
    </div>
  </div>

<?php			
		}

		// while ( <= 10) {
		// 	# code...
		// }
	}

?>
</div>
	  <div class="card-deck">
   
   <?php 

   		if(have_posts() == true){

   			$b = query_posts('orderby=date&post_type=lp_course&posts_per_page=6');
   			foreach ($b as $bkey ) {
   				 // echo "55555".get_the_post_thumbnail_url( $bkey->ID, 'medium' ); 
   				// print_r($bkey);
?>
        <div class="card mb-4">
            <img class="card-img-top img-fluid"  src="<?php echo get_the_post_thumbnail_url( $key->ID, "thumbnail" );?>" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">1 Card title</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
<?php    				
   			}
   		}
   ?>
  
  </div>



	</div>


<div class="container">
    <div class="card-deck">
        <div class="card mb-3">
            <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">1 Card title</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mb-3">
            <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">2 Card title</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
        <div class="card mb-3">
            <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">3 Card title</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
        <div class="card mb-3">
            <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">4 Card title</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
         <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
        <div class="card mb-3">
            <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">5 Card title</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
        <div class="card mb-3">
            <img class="card-img-top img-fluid" src="//placehold.it/500x300" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">6 Card title</h4>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
        <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
        <div class="card mb-3">
            <img class="card-img-top img-fluid" src="//placehold.it/500x270" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">7 Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mb-3">
            <img class="card-img-top img-fluid" src="//placehold.it/500x300" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">8 Card title</h4>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
        <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
        <div class="card mb-3">
            <img class="card-img-top img-fluid" src="//placehold.it/500x270" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
        <div class="card mb-3">
            <img class="card-img-top img-fluid" src="//placehold.it/500x270" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">10 Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>	

</div>



<?php 


get_footer();
?>

