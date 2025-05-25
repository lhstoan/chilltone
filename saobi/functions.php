<?php
function favicon4admin()
{
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_bloginfo("wpurl") . '/wp-content/favicon.ico" />';
}

add_action("admin_head", "favicon4admin");
function dump($str)
{
    echo "<pre>";

    print_r($str);
}

// ================ DEFAULT SETTING ===================
//add Featured Image
add_theme_support( 'post-thumbnails' );
//remove_filter( 'the_excerpt', 'wpautop' );
/*increa limit upload file*/
@ini_set( 'upload_max_size', '64M' );
@ini_set( 'post_max_size', '64M' );
@ini_set( 'max_execution_time', '300' );
/*--add feature images--*/
//ADD MENU
if ( function_exists( 'register_nav_menu' ) ) {
    register_nav_menu( 'main-menu', 'Main Menu' );
}
//EXCERPT
add_post_type_support( 'page', 'excerpt' );

function close_tags( $text ) {
    $patt_open = "%((?<!</)(?<=<)[\s]*[^/!>\s]+(?=>|[\s]+[^>]*[^/]>)(?!/>))%";
    $patt_close = "%((?<=</)([^>]+)(?=>))%";
    if ( preg_match_all( $patt_open, $text, $matches ) ) {
        $m_open = $matches[ 1 ];
        if ( !empty( $m_open ) ) {
            preg_match_all( $patt_close, $text, $matches2 );
            $m_close = $matches2[ 1 ];
            if ( count( $m_open ) > count( $m_close ) ) {
                $m_open = array_reverse( $m_open );
                foreach ( $m_close as $tag )$c_tags[ $tag ]++;
                foreach ( $m_open as $k => $tag )
                    if ( $c_tags[ $tag ]-- <= 0 )$text .= '</' . $tag . '>';
            }
        }
    }
    return $text;
}
function content_by_id( $num, $id ) {
    $post_content = get_post( $id );
    $theContent = $post_content->post_content;
    $output = preg_replace( '/<img[^>]+./', '', $theContent );
    $limit = $num + 1;
    $content = explode( ' ', $output, $limit );
    array_pop( $content );
    $content = implode( " ", $content );
    $content = strip_tags( $content, '<p><a><address><a><abbr><acronym><b><big><blockquote><br><caption><cite><class><code><col><del><dd><div><dl><dt><em><font><h1><h2><h3><h4><h5><h6><hr><i><img><ins><kbd><li><ol><p><pre><q><s><span><strike><strong><sub><sup><table><tbody><td><tfoot><tr><tt><ul><var>' );
    $a = close_tags( $content );
    $b = $a . " ...";
    return $b;
} //REMOVE NEXT ENTRIES

require_once( dirname( __FILE__ ) . '/includes/shortcode.php' );
require_once( dirname( __FILE__ ) . '/includes/create_posttype.php' );

function theme_sources() {
    // cancel jquery of wordpress
    // wp_deregister_script('jquery'); 
    // ========== CSS ==========
    
	    wp_enqueue_style( 'style', get_theme_file_uri( '/css/styles.css' ) );
        wp_enqueue_style( 'responsive', get_theme_file_uri( '/css/responsive.css' ) );
        wp_enqueue_style( 'under', get_theme_file_uri( '/css/under.css' ) );
        wp_enqueue_style( 'under_responsive', get_theme_file_uri( '/css/under_responsive.css' ) );
        wp_enqueue_style( 'zabuto_calendar', get_theme_file_uri( '/css/zabuto_calendar.min.css' ) );
        wp_enqueue_style( 'anime', get_theme_file_uri( '/css/anime.css' ) );
        wp_enqueue_style( 'animate', get_theme_file_uri( '/css/animate.css' ) );
   

    // ========== END CSS ==========
	wp_enqueue_script( 'jquery-js', get_theme_file_uri( '/js/jquery.js' ), array(), '', 1 );
    // JAVASCRIPT
    if ( is_front_page() || is_home() ) {	
        wp_enqueue_script( 'top-js', get_theme_file_uri( '/js/top.js' ), array(), '', 1 );     
    }else{
        wp_enqueue_script( 'zabuto_calendar-js', get_theme_file_uri( '/js/zabuto_calendar.min.js' ), array(), '', 1 );
        
    }
    if ( is_page('form') ) {	
        wp_enqueue_script( 'ajaxzip3-js', get_theme_file_uri( '/js/ajaxzip3.js' ), array(), '', 1 );     
    } 
    
    
    wp_enqueue_script( 'sweetlink', get_theme_file_uri( '/js/sweetlink.js' ), array(), '', 1 );
	wp_enqueue_script( 'common-js', get_theme_file_uri( '/js/common.js' ), array(), '', 1 );
    wp_enqueue_script( 'lettering-js', get_theme_file_uri( '/js/lettering.js' ), array(), '', 1 );
    //wp_enqueue_script( 'change-page-js', get_theme_file_uri( '/js/change-page.js' ), array(), '', 1 );
    wp_enqueue_script( 'wow-js', get_theme_file_uri( '/js/wow.min.js' ), array(), '', 1 );
}
add_action( 'wp_enqueue_scripts', 'theme_sources' );

// ================ END DEFAULT SETTING ===================
function wpb_set_post_views( $postID ) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta( $postID, $count_key, true );
    if ( $count == '' ) {
        $count = 0;
        delete_post_meta( $postID, $count_key );
        add_post_meta( $postID, $count_key, '0' );
    } else {
        $count++;
        update_post_meta( $postID, $count_key, $count );
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
function wpb_get_post_views( $postID ) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta( $postID, $count_key, true );
    if ( $count == '' ) {
        delete_post_meta( $postID, $count_key );
        add_post_meta( $postID, $count_key, '0' );
        return 0;
    }
    return $count;
}
function content_number( $num, $content ) {
    $a = strip_tags( $content );
    if ( strlen( $a ) > $num )
    {
        $a = mb_substr( $a, 0, $num ) . '…';
    }
    return $a;
}

function add_site_favicon() {
    echo '<link rel="shortcut icon"
        href="' . get_stylesheet_directory_uri() . '/favicon.ico" />';
        } 
add_action('login_head', 'add_site_favicon');
add_action('admin_head', 'add_site_favicon');

add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'edit-comments.php' );
    // remove_menu_page( 'themes.php' );
    // remove_menu_page( 'plugins.php' );
    // remove_menu_page( 'tools.php' );

}




// Short code
function replace_tmpurl($content) {
    return str_replace('[tmpurl]', get_bloginfo('template_url'), $content);
}
add_filter('the_content', 'replace_tmpurl');


// JS SUPPORT CHANGE PAGE
// function enqueue_swup_js() {
//     wp_enqueue_script('swup', 'https://unpkg.com/swup@4.0.0', array(), null, true);
// }
// add_action('wp_enqueue_scripts', 'enqueue_swup_js');




// Disable Gutenberg editor.
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
function remove_block_css() {
    wp_dequeue_style( 'wp-block-library' ); // Wordpress core
    wp_dequeue_style( 'wp-block-library-theme' ); // Wordpress core
    wp_dequeue_style( 'wc-block-style' ); // WooCommerce
    wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
}


function wpcf7_validate_kana($result, $tag)
{
    $tag   = new WPCF7_Shortcode($tag);
    $name  = $tag->name;
    $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";
    if ($name === "your-hira") {
        if (!preg_match("/^[ァ-ヾ]+$/u", $value)) {
            $result->invalidate($tag, "全角カタカナで入力してください。");
        }
    }
    return $result;
}
add_filter('wpcf7_validate_text', 'wpcf7_validate_kana', 11, 2);
add_filter('wpcf7_validate_text*', 'wpcf7_validate_kana', 11, 2);


add_filter('wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 20, 2);

function custom_email_confirmation_validation_filter($result, $tag)
{
    if ('your-remail' == $tag->name) {
        $your_email         = isset($_POST['your-email']) ? trim($_POST['your-email']) : '';
        $your_email_confirm = isset($_POST['your-remail']) ? trim($_POST['your-remail']) : '';

        if ($your_email != $your_email_confirm) {
            $result->invalidate($tag, "入力内容が確認用の内容と異なっています。");
        }
    }

    return $result;
}

function sort_pre_get_blog( $wp_query ) {
	if ( ! is_admin())	{
    	if (is_post_type_archive('blog')) {
    		$wp_query->set( 'posts_per_page', 8 );
    	}
    	 return $wp_query;
    }  
}
add_action( 'pre_get_posts', 'sort_pre_get_blog' );


/* ============== /////////////////////////////////////////// ============== */
function cpt_rewrite_rules2( $wp_rewrite ) {
    $rules = cpt_generate_date_archives( 'blog', $wp_rewrite );
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
    return $wp_rewrite;
}
add_action( 'generate_rewrite_rules', 'cpt_rewrite_rules2' );

function cpt_rewrite_rules3( $wp_rewrite ) {
    $rules = cpt_generate_date_archives( 'community', $wp_rewrite );
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
    return $wp_rewrite;
}
add_action( 'generate_rewrite_rules', 'cpt_rewrite_rules3' );

function cpt_generate_date_archives( $cpt, $wp_rewrite ) {
    $rules = array();

    $post_type = get_post_type_object( $cpt );
    $slug_archive = $post_type->has_archive;
    if ( $slug_archive === false ) return $rules;
    if ( $slug_archive === true ) {
        $slug_archive = $post_type->name;
    }

    $dates = array(
        array(
            'rule' => "([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})",
            'vars' => array( 'year', 'monthnum', 'day' ) ),
        array(
            'rule' => "([0-9]{4})/([0-9]{1,2})",
            'vars' => array( 'year', 'monthnum' ) ),
        array(
            'rule' => "([0-9]{4})",
            'vars' => array( 'year' ) )
    );

    foreach ( $dates as $data ) {
        $query = 'index.php?post_type=' . $cpt;
        $rule = $slug_archive . '/' . $data[ 'rule' ];

        $i = 1;
        foreach ( $data[ 'vars' ] as $var ) {
            $query .= '&' . $var . '=' . $wp_rewrite->preg_index( $i );
            $i++;
        }

        $rules[ $rule . "/?$" ] = $query;
        $rules[ $rule . "/feed/(feed|rdf|rss|rss2|atom)/?$" ] = $query . "&feed=" . $wp_rewrite->preg_index( $i );
        $rules[ $rule . "/(feed|rdf|rss|rss2|atom)/?$" ] = $query . "&feed=" . $wp_rewrite->preg_index( $i );
        $rules[ $rule . "/page/([0-9]{1,})/?$" ] = $query . "&paged=" . $wp_rewrite->preg_index( $i );
    }
    return $rules;
}
add_action('wp_enqueue_scripts', 'conditionally_dequeue_cf7_assets', 99);
function conditionally_dequeue_cf7_assets() {
    if (is_front_page()) {
        $cf7_assets = array('cf7msm', 'contact-form-7', 'wpcf7-recaptcha','contact-form-7-css','cf7msm_styles-css');

        foreach ($cf7_assets as $handle) {
            wp_dequeue_script($handle);
            wp_dequeue_style($handle);
        }
    }
}

?>