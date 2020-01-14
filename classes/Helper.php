<?php 

namespace BP;

class Helper{

	//simple breadcrumbs - use in html
	public static function get_breadcrumbs(){
		echo  '<a href="'.home_url().'" rel="nofollow">Home</a>';
		if(is_category() || is_single()){
			// >> 
			echo"&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
			echo the_category(' &bull; ');
				if(is_single()){
					// >> 
					echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
	        the_title();
				}
		} elseif (is_page()){
			// >> 
			echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
			echo the_title();
		} elseif (is_search()){
			// >> 
			echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
	    echo '"<em>';
	    echo the_search_query();
	    echo '</em>"';
		}
	}

	//easy sidebar creation - use in functions.php
	public static function create_sidebar( $name, $id, $desc ){
		register_sidebar( array(
			'name'				=> __( $name ),
			'id'					=> $id,
			'description'		=> __( $desc ),
			'before_widget'	=> '<div class="widget">',
			'after_widget'		=> '</div>',
			'before_title'		=> '<h3>',
			'after_title'			=> '</h3>'
		));
	}
}

?>