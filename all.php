<?php 

$posts = get_posts( array(
        'posts_per_page' => -1,
        'fields' => 'ids',
        'post_type' => 'course',
        
    ) );
   $count = count($posts);

   $user_id = 2 ;



   for ($i=0; $i < $count ; $i++) {
       bp_course_add_user_to_course($user_id,$posts[$i]);
   }


$posts = get_posts( array(
        'posts_per_page' => -1,
        'fields' => 'ids',
        'post_type' => 'course',
        
    ) );
   $count = count($posts);

   $user_id =get_current_user_id();

   for ($i=0; $i < $count ; $i++) {
       bp_course_add_user_to_course($user_id,$posts[$i]);
   }






$user_id = get_current_user_id();

if(pmpro_hasMembershipLevel('7',$user_id))
{

	   $posts = get_posts( array(
        'posts_per_page' => -1,
        'fields' => 'ids',
        'post_type' => 'course',
        
    ) );
   $count = count($posts); 

   for ($i=0; $i < $count ; $i++) {
       bp_course_add_user_to_course($user_id,$posts[$i]);
   }
 
}






$user_id = get_current_user_id();

if(pmpro_hasMembershipLevel('7'),$user_id){

   $posts = get_posts( array(
        'posts_per_page' => -1,
        'fields' => 'ids',
        'post_type' => 'course',
        
    ) );
   $count = count($posts); 

   for ($i=0; $i < $count ; $i++) {
       bp_course_add_user_to_course($user_id,$posts[$i]);
   }
     

}



if(pmpro_hasMembershipLevel(array('2','3'),$user_id)){
  
    echo 'You see this because you are a level 2 or level 3 member and you have access to this level 2 or 3 course'
}

if(pmpro_hasMembershipLevel('-1'),$user_id){
    //This will show if the course is NOT set for level 1, any other level, and the site visitor is NOT a level 1 member (i.e. level 1 is excluded)
    echo 'You see this because you are NOT a level 1 member viewing a course that is set for members who are not level 1 members'
    echo 'They could be level 0, level 2, level 3, etc.  But if you are a level 1 member OR the course allows level 1 members, then you will not see this message.'    
}

else {
    //This is where you put content that shows to members withOUT access;
    echo 'You <span>DO NOT</span> have access to this page'
}

$user_id = get_current_user_id();

if(pmpro_hasMembershipLevel('7',$user_id))
{

	 $posts = get_posts( array(
        'posts_per_page' => -1,
        'fields' => 'ids',
        'post_type' => 'course',
        
    ) );
   $count = count($posts); 

   for ($i=0; $i < $count ; $i++) {
       bp_course_add_user_to_course($user_id,$posts[$i]);
   }
 
}



 $user_id = get_current_user_id();
if(pmpro_hasMembershipLevel('1',$user_id))
{
	$args = array(
        'posts_per_page'    => -1,
        'post_status'       => 'publish',
        'orderby'           => 'date',
	     'order'            => 'DESC',
        'fields'            => 'ids',
        'suppress_filters' => true,
        'post_type'         => 'course',
	);

$coures_lists = get_posts($args);
$count = count($coures_lists); 
   for ($i=0; $i < $count ; $i++) {
       bp_course_add_user_to_course($user_id,$coures_lists[$i]);
   }
 
}

 $user_id = get_current_user_id();
if(pmpro_hasMembershipLevel(array('1','2','3'),$user_id)){
		$args = array(
			'posts_per_page'    => -1,
			'post_status'       => 'publish',
			'orderby'           => 'date',
			 'order'            => 'DESC',
			'fields'            => 'ids',
			'suppress_filters' => true,
			'post_type'         => 'course',
		);

		$coures_lists = get_posts($args);
		$count = count($coures_lists); 
		for ($i=0; $i < $count ; $i++) {
		bp_course_add_user_to_course($user_id,$coures_lists[$i]);
		}
}


 $user_id = get_current_user_id();
if(pmpro_hasMembershipLevel('3',$user_id)){
		$args = array(
			'posts_per_page'    => -1,
			'post_status'       => 'publish',
			'orderby'           => 'date',
			'order'            => 'DESC',
			'fields'            => 'ids',
			'suppress_filters' => true,
			'post_type'         => 'course',
		);

		$coures_lists = get_posts($args);
		$count = count($coures_lists); 
		for ($i=0; $i < $count ; $i++) {
		bp_course_add_user_to_course($user_id,$coures_lists[$i]);
		}
}


//  $user_id = get_current_user_id();
// if(pmpro_hasMembershipLevel('3',$user_id)){
//    $args = array(
// 			'posts_per_page'    => -1,
// 			'post_status'       => 'publish',
// 			'orderby'           => 'date',
// 			'order'             => 'DESC',
// 			'fields'            => 'ids',
// 			'suppress_filters'  => true,
// 			'depth'             => 1,
// 			'hide_empty'        => 1,
// 			'post_type'         => 'course',
// 		    'nopaging' => true
// 		); 

//     $coures_lists = new WP_Query( $args );

//     $count = count($coures_lists); 
// 		for ($i=0; $i < $count ; $i++) {
// 		bp_course_add_user_to_course($user_id,$coures_lists[$i]);
// 		}
//     wp_reset_postdata();
// }








// essentiaL
 // <-- be careful when copy pasting.. you might NOT NEED TO COPY this line
add_filter('woocommerce_get_price_html', 'woocommerce_get_price_html', 10, 2 );
function woocommerce_get_price_html( $price, $product ) {
 
	//$productsss = wc_get_product( $product_id );
	//var_dump($product);

	if ( WC()->cart->has_discount() ) {
 

		$values = array (
			'data'		=> $product,
			'quantity'	=> 1
		);
 
		$coupons = WC()->cart->get_coupons();
		//var_dump($coupons);
		// echo "<pre>";
		// echo print_r($coupons);
		// echo "</pre>";

		$_price = $product->get_price();
		$undiscounted_price = $_price;
 
		if ( ! empty( $coupons ) ) {
 
			foreach ( $coupons as $code => $coupon ) {
 
				if ( $coupon->is_valid() && ( $coupon->is_valid_for_product( $product, $values ) || $coupon->is_valid_for_cart() ) ) {
					$discount_amount = $coupon->get_discount_amount( 'yes' === get_option( 'woocommerce_calc_discounts_sequentially', 'no' ) ? $_price : $undiscounted_price, $values, true );
					$discount_amount = min( $_price, $discount_amount );
					$_price          = max( $_price - $discount_amount, 0 );
				}
 
				if ( 0 >= $_price ) {
					break;
				}
			}
			if ( ( $product->get_price() > 0 ) && ( $undiscounted_price !== $_price ) )
				$price = wc_format_sale_price( wc_get_price_to_display( $product, array( 'price' => $undiscounted_price ) ), $_price ) . $product->get_price_suffix();
		}
 
	}
 
	return $price;
}

//Satrt WC woocommerce coupon code -Sakib

/*
function return_custom_price($price, $product) {
    global $post, $blog_id;
    $price = get_post_meta($post->ID, '_regular_price');
    $post_id = $post->ID;
    $price = ($price[0]*2.3);
    return $price;
}
add_filter('woocommerce_get_price', 'return_custom_price', 10, 2);
*/




add_shortcode( 'coupon_field', 'display_coupon_field' );
function display_coupon_field() {
    if( isset($_GET['coupon']) && isset($_GET['redeem-coupon']) ){
        if( $coupon = esc_attr($_GET['coupon']) ) {
            $applied = WC()->cart->apply_coupon($coupon);
        } else {
            $coupon = false;
        }

        $success = sprintf( __('Coupon "%s" Applied successfully.'), $coupon );
        $error   = __("This Coupon can't be applied");

        $message = isset($applied) && $applied ? $success : $error;
    }

	$output  = '<div class="redeem-coupon"><form id="coupon-redeem">
    <p><input type="text" name="coupon" id="coupon"/>
    <input type="submit" name="redeem-coupon" value="'.__('Redeem Offer.').'" /></p>';

    $output .= isset($coupon) ? '<p class="result">'.$message.'</p>' : '';

    return $output . '</form></div>';
}

//END WC woocommerce coupon code -Sakib


//Redeem Voucher
// add_filter( 'gform_field_validation_5_3', 'custom_validation', 10, 4 );
//       function custom_validation( $result, $value, $form, $field) {
//       $input_data = rgpost( 'input_3' );
//         global $wpdb;
//         $table_name = $wpdb->prefix.'voucher_details';
//         $all_voucher_lists = $wpdb->get_row( "SELECT * FROM $table_name WHERE `voucher_code`='$input_data'");
//         $all_voucher_hidden = $wpdb->get_results( "SELECT * FROM $table_name");
       
//        if($result['is_valid'] && $all_voucher_lists==1){
//           foreach($all_voucher_hidden as $voucher_code_data){
//             if($voucher_code_data->voucher_code==$input_data){
//                $course_name = "Course Name is " .$voucher_code_data->product_title;
//                $_POST["input_6"] = $course_name;
//             }

//           }
//        }
//        elseif($result['is_valid'] && $all_voucher_lists!=1){
//          $result['is_valid'] = false;
//          $result['message']="Voucher Code is Not Match"; 
//        }

//    return $result;
// }

//Voucher validation - Sakib
function vouchervalidations(){
	global $wpdb;
	$voucher_code = $_POST["voucher_code"];
	$table_name = $wpdb->prefix.'voucher_details';
	$all_voucher_lists = $wpdb->get_row( "SELECT * FROM $table_name WHERE `voucher_code`='$voucher_code'");
	$all_voucher_hidden = $wpdb->get_results( "SELECT * FROM $table_name");
	
	if( $all_voucher_lists==1){
		echo $all_voucher_lists->product_title;
	}
	elseif($all_voucher_lists!=1){
		echo 0;
	}
	die();
}
add_action( 'wp_ajax_vouchervalidations', 'vouchervalidations' );
add_action('wp_ajax_nopriv_vouchervalidations', 'vouchervalidations');



add_action( 'gform_after_submission_26', 'post_to_third_party', 10, 2 );
function post_to_third_party( $entry, $form ) {
	global $wpdb;
	$vocuher 	= rgpost( 'input_7' );
	$full_name 	= rgpost( 'input_1' );
	$email 		= rgpost( 'input_4' );
	$course 	= rgpost( 'input_6' );
	$password 	= '123456';
	$name 		= explode(' ',trim($full_name));
	$username 	=  $name[0]; 
	$f_name 	=  $name[0]; 
	$l_name 	=  substr(strstr($full_name," "), 1);


	//Start 3rd method
	//var_dump($course);
	echo "<h3> Course Name: ".$course."</h3>";
	$args = array("post_type" => "course", "s" => $course);
	//$args = array("post_type" => "course","s" => "Accredited Time Management Skills Training");
	//$args = array("post_type" => "post");
	
	$qr = new WP_Query($args);
	//var_dump($qr);
	// echo "<pre>";
	// 	print_r($qr);
	// echo "</pre>";
	// var_dump($post_type);
	// var_dump($post_id);

	echo "<h1> Post Type: ".$post_type = $qr->query['post_type']."</h1>";
	echo "<h2> Post Id: " .$post_id = $qr->posts[0]->ID. "</h2>";
	$course_id = $qr->posts[0]->ID;
	wp_reset_postdata(); 
	//End 3rd method
	
	$user_login 	=  wp_slash( $username );
	$user_email 	=  wp_slash( $email );
	$display_name 	=  wp_slash( $full_name );
	$first_name 	=  wp_slash( $f_name );
	$last_name 		=  wp_slash( $l_name );
	$user_pass  	=  $password;
	$role  			=  'student';
	$exists = email_exists( $user_email );

	if ( username_exists( $user_login ) && !email_exists( $user_email ) ) {
		$user_login = $user_login.'_student';
	} else {
		$user_login = $user_login;
	}


	if ( !$exists ) {
		$userdata = compact( 'user_login', 'user_email', 'user_pass', 'display_name', 'first_name', 'last_name', 'role' );
		//return wp_insert_user( $userdata );
		$user_id = wp_insert_user( $userdata ) ;

	}else{
		$user 	= get_user_by( 'email', $user_email );
		$user_id = $user->ID;
	}


	if ( ! is_wp_error( $user_id ) ) {
		echo "<h2><b>User ID : ". $user_id . "</b></h2>";
		$course_check = bp_course_add_user_to_course($user_id,$course_id);
		var_dump($course_check);
		if ($course_check != '') {
			echo "1";
       		$table_name = $wpdb->prefix.'voucher_details';
      		$delete = $wpdb->query("DELETE FROM $table_name WHERE voucher_code='$vocuher'");
		}else{
			echo "Voucher code is not valid";
		}
	}
		
}


$user_id = get_current_user_id();

if(pmpro_hasMembershipLevel('1',$user_id))
{

	 $posts = get_posts( array(
        'posts_per_page' => -1,
        'fields' => 'ids',
        'post_type' => 'course',
        
    ) );
   $count = count($posts); 

   for ($i=0; $i < $count ; $i++) {
       bp_course_add_user_to_course($user_id,$posts[$i]);
   }
 
}





$user_id = get_current_user_id();

if(pmpro_hasMembershipLevel('3',$user_id))
{
	$args = array(
            'posts_per_page'    => 10,
            'post_status'       => 'publish',
            'orderby'           => 'date',
            'order'            => 'DESC',
            'fields'            => 'ids',
            'suppress_filters' => true,
            'post_type'         => 'course',
		);

		$coures_lists = get_posts($args);
		$count = count($coures_lists); 
		?>
		<div class="my-posts">
		<?php
            for ($i=0; $i < $count ; $i++) {
		 bp_course_add_user_to_course($user_id,$coures_lists[$i]);
		}
		 ?>
		 <div class="loadmore">Load More...</div>
		</div>
	<?php 

	?>
	<script type="text/javascript">
		var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
		var page = 2;
		jQuery(function($) {
		    $('body').on('click', '.loadmore', function() {
		        var data = {
		            'action': 'load_posts_by_ajax',
		            'page': page,
		            'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
		        };
		 
		        $.post(ajaxurl, data, function(response) {
		            if(response != '') {
		                $('.my-posts').append(response);
		                page++;
		            } else {
		                $('.loadmore').hide();
		            }
		        });
		    });
		});
		</script>
	<?php 

	function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts', 'security');
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'course',
        'post_status' => 'publish',
        'posts_per_page' => '10',
        'paged' => $paged,
    );
      $args = array(
			'posts_per_page'    => 10,
			'post_status'       => 'publish',
			'orderby'           => 'date',
			'order'            => 'DESC',
			'fields'            => 'ids',
			'suppress_filters' => true,
			'post_type'         => 'course',
		);

		$coures_lists = get_posts($args);
		$count = count($coures_lists); 
		for ($i=0; $i < $count ; $i++) {
		bp_course_add_user_to_course($user_id,$coures_lists[$i]);

     wp_die();
}

add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');	

}

}





 










$user_id = get_current_user_id();
if(pmpro_hasMembershipLevel('3',$user_id))
{
	$args = array(
            'posts_per_page'    => 10,
            'post_status'       => 'publish',
            'orderby'           => 'date',
            'order'            => 'DESC',
            'fields'            => 'ids',
            'suppress_filters' => true,
            'post_type'         => 'course',
		);

		$coures_lists = get_posts($args);
		$count = count($coures_lists); 
		?>
		<div class="my-posts">
		<?php
            for ($i=0; $i < $count ; $i++) {
		   bp_course_add_user_to_course($user_id,$coures_lists[$i]);
		}
		 ?>
		 <div class="loadmore">Load More...</div>
		</div>
	<?php 

	?>
	<script type="text/javascript">
		var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
		var page = 2;
		jQuery(function($) {
		    $('body').on('click', '.loadmore', function() {
		        var data = {
		            'action': 'load_posts_by_ajax',
		            'page': page,
		            'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
		        };
		 
		        $.post(ajaxurl, data, function(response) {
		            if(response != '') {
		                $('.my-posts').append(response);
		                page++;
		            } else {
		                $('.loadmore').hide();
		            }
		        });
		    });
		});
		</script>
	<?php 

	function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts', 'security');
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'course',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'paged' => $paged,
    );
      $args = array(
            'posts_per_page'    => 10,
            'post_status'       => 'publish',
            'orderby'           => 'date',
            'order'            => 'DESC',
            'fields'            => 'ids',
            'suppress_filters' => true,
            'post_type'         => 'course',
		);

		$coures_lists = get_posts($args);
		$count = count($coures_lists); 
		for ($i=0; $i < $count ; $i++) {
		bp_course_add_user_to_course($user_id,$coures_lists[$i]);

     wp_die();
}


}

}

add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');	




$shortcode = '[ajax_load_more id="2379053401" container_type="ul" post_type="course" posts_per_page="10"]';

$user_id = get_current_user_id();

if(pmpro_hasMembershipLevel('3',$user_id))
{
	$coures_lists = $shortcode;
    $count = count($coures_lists); 
      for ($i=0; $i < $count ; $i++) {
	 bp_course_add_user_to_course($user_id,$coures_lists[$i]);

}









$user_id = get_current_user_id();
if(pmpro_hasMembershipLevel('3',$user_id))
{
 $args = array(
            'posts_per_page'    => 10,
            'post_status'       => 'publish',
            'orderby'           => 'date',
            'order'            => 'DESC',
            'fields'            => 'ids',
            'suppress_filters' => true,
            'post_type'         => 'course',
            'paged' => 1,
		);
 		$coures_lists = get_posts($args);
		$count = count($coures_lists); 
		for ($i=0; $i < $count ; $i++) {
		bp_course_add_user_to_course($user_id,$coures_lists[$i]);
    }

    ?>
    <div class="studesks-load-more">Load More...</div>
    <?php 

}

?>
<script>
	
var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
    var page = 2;
    jQuery(function($) {
        $('body').on('click', '.studesks-load-more', function() {
            var maxPages =jQuery('.studesks-max-pages').attr('data-max-pages'); 
            var data = {
                'action': 'studesks_load_more_posts_by_ajax',
                'page': page,
                'security': '<?php echo wp_create_nonce("studesks_load_more_posts"); ?>'
            };
            $.post(ajaxurl, data, function(response) {
                if (page == maxPages){
                    $('.studesks-load-more').css('display','none');
                }else{
                    $('.studesks-posts').append(response);
                }
                page++;
            });
        });
    });

</script>
<?php 

                                                        
function studesks_load_more_posts_by_ajax_callback() {
    check_ajax_referer('studesks_load_more_posts', 'security');
    $paged = $_POST['page'];
    $args = array(
            'posts_per_page'    => 10,
            'post_status'       => 'publish',
            'orderby'           => 'date',
            'order'            => 'DESC',
            'fields'            => 'ids',
            'suppress_filters' => true,
            'post_type'         => 'course',
            'paged' => $paged,
    );

 	   $coures_lists = get_posts($args);
		$count = count($coures_lists); 
		for ($i=0; $i < $count ; $i++) {
		bp_course_add_user_to_course($user_id,$coures_lists[$i]);
    }


}

add_action('wp_ajax_studesks_load_more_posts_by_ajax', 'studesks_load_more_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_studesks_load_more_posts_by_ajax', 'studesks_load_more_posts_by_ajax_callback');





$user_id = get_current_user_id();
if(pmpro_hasMembershipLevel('3',$user_id))
{
 $args = array(
            'posts_per_page'    => '10',
            'post_status'       => 'publish',
            'orderby'           => 'date',
            'order'            => 'DESC',
            'fields'            => 'ids',
            'suppress_filters' => true,
            'post_type'         => 'course',
            'paged' => 1,
		);
 		$coures_lists = get_posts($args);
		$count = count($coures_lists); 
		for ($i=0; $i < $count ; $i++) {
		bp_course_add_user_to_course($user_id,$coures_lists[$i]);
    }
     ?>
    <div class="studesks-load-more">Load More...</div>
    <?php 
}

  ?>
<script>
	
var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
    var page = 2;
    jQuery(function() {
        jQuery('body').on('click', '.studesks-load-more', function() {
            var maxPages =jQuery('.studesks-max-pages').attr('data-max-pages'); 
            var data = {
                'action': 'studesks_load_more_posts_by_ajax',
                'page': page,
                'security': '<?php echo wp_create_nonce("studesks_load_more_posts"); ?>'
            };
            jQuery.post(ajaxurl, data, function(response) {
                if (page == maxPages){
                    jQuery('.studesks-load-more').css('display','none');
                }else{
                    jQuery('.studesks-posts').append(response);
                }
                page++;
            });
        });
    });

</script>
<?php                                                    
function studesks_load_more_posts_by_ajax_callback() {
    check_ajax_referer('studesks_load_more_posts', 'security');
    $paged = $_POST['page'];
    $args = array(
            'posts_per_page'    => '10',
            'post_status'       => 'publish',
            'orderby'           => 'date',
            'order'            => 'DESC',
            'fields'            => 'ids',
            'suppress_filters' => true,
            'post_type'         => 'course',
            'paged' => $paged,
    );

 	   $coures_lists = get_posts($args);
		$count = count($coures_lists); 
		for ($i=0; $i < $count ; $i++) {
		bp_course_add_user_to_course($user_id,$coures_lists[$i]);
    }

}
add_action('wp_ajax_studesks_load_more_posts_by_ajax', 'studesks_load_more_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_studesks_load_more_posts_by_ajax', 'studesks_load_more_posts_by_ajax_callback');








