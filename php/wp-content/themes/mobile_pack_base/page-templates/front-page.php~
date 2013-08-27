<?php
/*
Template Name:  Page Template
*/


if( 'POST' == $_SERVER['REQUEST_METHOD']) {

// Do some minor form validation to make sure there is content
$name="empty";
	if (isset ($_POST['uname'])) {
		$name =  $_POST['uname'];
	} else {
		//echo 'Please enter the wine name';
	}
$email="empty";
	if (isset ($_POST['email'])) {
		$email = $_POST['email'];
	} else {
		//echo 'Please enter some notes';
	}
$mobile=0000;
        if (isset ($_POST['mobile'])) {
		$mobile = $_POST['mobile'];
	} else {
	   //	echo 'Please enter some notes';
	}

	

global $wpdb;

$wpdb->insert( 'clients', array( 'name' => $name, 'email' => $email,'mobile' => $mobile  ), array( '%s','%s','%d' ) );



} // END THE IF STATEMENT THAT STARTED THE WHOLE FORM

//POST THE POST YO
//do_action('wp_insert_post', 'wp_insert_post');

get_header(); ?>

     <div id="container">
            <div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                   

                    <div class="form-content">
                        <?php the_content(); ?>
                       
                       
                    </div><!-- .entry-content -->
                </div><!-- #post-## -->

                <?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

            </div><!-- #content -->
        </div><!-- #container -->

<?php get_footer(); ?>




