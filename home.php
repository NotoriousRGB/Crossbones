<?php get_header(); ?>

<?php
$layout = $data['homepage_blocks']['enabled'];

if ($layout):

foreach ($layout as $key=>$value) {

    switch($key) {
			case 'slideshow':
				include ( XBONES_FILEPATH . '/library/modules/slideshow.php');
			break;
    	case 'tagline':
    		include ( XBONES_FILEPATH . '/library/modules/tagline.php');
			break;
			case 'portfolio':
				include ( XBONES_FILEPATH . '/library/modules/portfolio.php');
			break;
    	case 'articles':
    		include ( XBONES_FILEPATH . '/library/modules/articles.php');
			break;
			case 'blog':
				//include ( XBONES_FILEPATH . '/library/modules/blog.php');
			break;
    	case 'widgets':
    		include ( XBONES_FILEPATH . '/library/modules/widgets.php');
			break;
		}

}

endif;

?>

<?php get_footer(); ?>