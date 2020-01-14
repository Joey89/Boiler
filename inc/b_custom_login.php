<?php

//custom login page
//Make a Snippet
function my_login_logo() { ?>
    <style type="text/css">
				#login h1:before{
					content: 'Game Blog';
				}

        #login h1 a, .login h1 a{
          background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/public/images/mario.jpg);
          background-size:  415px 60px;
          width:  57px;
        	animation: play 1.5s steps(7) infinite;
        }

        @keyframes play {
          from {
            background-position: 0px;
           }
          to {
            background-position: -415px;
            }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/*
function www_cusotm_login_message(){
	return 'Welcome, please login and enjoy.';
}
add_filter('login_message', 'www_cusotm_login_message');
*/

function www_custom_login_test(){
	return 'Welcome, please login and enjoy.';
}
add_filter('login_headertitle', 'www_custom_login_test');

?>