<?php
/*
Plugin Name:JB Accordion
Plugin URL:http://jobairbd.com/wpplugins
Description: JB Accordion is a simple Responsive and animated accordion plugin. which you can use by a shortcode where you want.
Author: jobair
Author URI: http://jobairbd.com
Version:1.0
*/
function jb_accordion_js(){
	wp_enqueue_script('jb-accordion-js',plugins_url('/js/jquery.bwlaccordion.min.js', __FILE__ ), array('jquery'),1.0,false);
	wp_enqueue_style('jb-font-awesome-ss',plugins_url('/css/font-awesome.min.css', __FILE__ ));	
	wp_enqueue_style('jb-animatec-ss',plugins_url('/css/animate.css', __FILE__ ));	
	wp_enqueue_style('jb-accordion-ss',plugins_url('/css/accordion.css', __FILE__ ));	
	
}
add_action('init','jb_accordion_js');

function jb_do_shortcode($atts,$content = null){
	extract( shortcode_atts( array(
		'id' =>'',
		'animation' =>'',
		'toggle' =>'true',
		'theme' =>'',
		'rtl' =>'false',
		
	), $atts ) );
	
return '	<script type="text/javascript">
				jQuery(document).ready(function(){			
					jQuery("#accordion_1'.$id.'").bwlAccordion({
						animation: "'.$animation.'",
						toggle: '.$toggle.',
						theme: "'.$theme.'",
						rtl : '.$rtl.',

					});
				});
			</script>
			<div class="bwl_acc_container" id="accordion_1'.$id.'"><!-- start .bwl_acc_container -->									
				<section>
					'.do_shortcode($content).'					
				</section>
			</div>
		';

}
add_shortcode('jbaccordion', 'jb_do_shortcode');
/* short code */
function jb_accordion_shortcode($atts,$content = null){
	extract( shortcode_atts( array(
		'title' =>'',
		'content' =>'',
		
	), $atts ) );
	
return '	<h2 class="acc_title_bar"><a href="#">'.$title.'</a></h2>
			<div class="acc_container">
				<div class="block">
					'.$content.'
			
				</div>
			</div>
		';
}
add_shortcode('accordion', 'jb_accordion_shortcode');
?>
