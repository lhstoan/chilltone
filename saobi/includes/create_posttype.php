<?php
/*======================/Create post type - Start /=============================*/
function prefix_register_all() {

  /* ========================================================================= */
  if ( get_user_locale() == "ja" ) {
    $name = "ブログ";
    $singular_name = "ブログ";
    $menu_name = "ブログ";
    $name_admin_bar = "ブログ";
    $all_items = "ブログ一覧";
    $add_new = "新規追加";
    $add_new_item = "新規投稿を追加";
    $edit_item = "項目編集";
    $new_item = "新規項目";
    $view_item = "項目閲覧";
    $search_items = "投稿を検索";
    $not_found = "投稿が見つかりませんでした。";
    $not_found_in_trash = "空のゴミ箱";
    $parent_item_colon = "大項目種類:";
  } else {
    $name = "Blog";
    $singular_name = "Blog";
    $menu_name = "Blog";
    $name_admin_bar = "Blog";
    $all_items = "All Items";
    $add_new = "Add New";
    $add_new_item = "Add New Item";
    $edit_item = "Edit Item";
    $new_item = "New Item";
    $view_item = "View Item";
    $search_items = "Search Items";
    $not_found = "No items found.";
    $not_found_in_trash = "No items found in Trash.";
    $parent_item_colon = "Parent Items:";
  }
  register_post_type(
    'blog',
    array(
      'labels' => array(
        'name' => __( $name, 'text_domain' ),
        'singular_name' => __( $singular_name, 'text_domain' ),
        'menu_name' => __( $menu_name, 'text_domain' ),
        'name_admin_bar' => __( $name_admin_bar, 'text_domain' ),
        'all_items' => __( $all_items, 'text_domain' ),
        'add_new' => _x( $add_new, 'blog', 'text_domain' ),
        'add_new_item' => __( $add_new_item, 'text_domain' ),
        'edit_item' => __( $edit_item, 'text_domain' ),
        'new_item' => __( $new_item, 'text_domain' ),
        'view_item' => __( $view_item, 'text_domain' ),
        'search_items' => __( $search_items, 'text_domain' ),
        'not_found' => __( $not_found, 'text_domain' ),
        'not_found_in_trash' => __( $not_found_in_trash, 'text_domain' ),
        'parent_item_colon' => __( $parent_item_colon, 'text_domain' )
      ),
      'public' => true,
      'menu_position' => 20,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions'
      ),
      'taxonomies' => array(
        'blog-category'
      ),
      'has_archive' => true,
      'menu_icon' => 'dashicons-welcome-write-blog'
    )
  );

  /* ========================================================================= */
  if ( get_user_locale() == "ja" ) {
    $name = "コミュニティ";
    $singular_name = "コミュニティ";
    $menu_name = "コミュニティ";
    $name_admin_bar = "コミュニティ";
    $all_items = "コミュニティ一覧";
    $add_new = "新規追加";
    $add_new_item = "新規投稿を追加";
    $edit_item = "項目編集";
    $new_item = "新規項目";
    $view_item = "項目閲覧";
    $search_items = "投稿を検索";
    $not_found = "投稿が見つかりませんでした。";
    $not_found_in_trash = "空のゴミ箱";
    $parent_item_colon = "大項目種類:";
  } else {
    $name = "Community";
    $singular_name = "Community";
    $menu_name = "Community";
    $name_admin_bar = "Community";
    $all_items = "All Items";
    $add_new = "Add New";
    $add_new_item = "Add New Item";
    $edit_item = "Edit Item";
    $new_item = "New Item";
    $view_item = "View Item";
    $search_items = "Search Items";
    $not_found = "No items found.";
    $not_found_in_trash = "No items found in Trash.";
    $parent_item_colon = "Parent Items:";
  }
  register_post_type(
    'community',
    array(
      'labels' => array(
        'name' => __( $name, 'text_domain' ),
        'singular_name' => __( $singular_name, 'text_domain' ),
        'menu_name' => __( $menu_name, 'text_domain' ),
        'name_admin_bar' => __( $name_admin_bar, 'text_domain' ),
        'all_items' => __( $all_items, 'text_domain' ),
        'add_new' => _x( $add_new, 'community', 'text_domain' ),
        'add_new_item' => __( $add_new_item, 'text_domain' ),
        'edit_item' => __( $edit_item, 'text_domain' ),
        'new_item' => __( $new_item, 'text_domain' ),
        'view_item' => __( $view_item, 'text_domain' ),
        'search_items' => __( $search_items, 'text_domain' ),
        'not_found' => __( $not_found, 'text_domain' ),
        'not_found_in_trash' => __( $not_found_in_trash, 'text_domain' ),
        'parent_item_colon' => __( $parent_item_colon, 'text_domain' )
      ),
      'public' => true,
      'menu_position' => 20,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions'
      ),
      'taxonomies' => array(
        'community-category'
      ),
      'has_archive' => true,
      'menu_icon' => 'dashicons-welcome-write-blog'
    )
  );

  /* ========================================================================= */
  if ( get_user_locale() == "ja" ) {
    $name = "イベント";
    $singular_name = "イベント";
    $menu_name = "イベント";
    $name_admin_bar = "イベント";
    $all_items = "イベント一覧";
    $add_new = "新規追加";
    $add_new_item = "新規投稿を追加";
    $edit_item = "項目編集";
    $new_item = "新規項目";
    $view_item = "項目閲覧";
    $search_items = "投稿を検索";
    $not_found = "投稿が見つかりませんでした。";
    $not_found_in_trash = "空のゴミ箱";
    $parent_item_colon = "大項目種類:";
  } else {
    $name = "Event";
    $singular_name = "Event";
    $menu_name = "Event";
    $name_admin_bar = "Event";
    $all_items = "All Items";
    $add_new = "Add New";
    $add_new_item = "Add New Item";
    $edit_item = "Edit Item";
    $new_item = "New Item";
    $view_item = "View Item";
    $search_items = "Search Items";
    $not_found = "No items found.";
    $not_found_in_trash = "No items found in Trash.";
    $parent_item_colon = "Parent Items:";
  }
  register_post_type(
    'event',
    array(
      'labels' => array(
        'name' => __( $name, 'text_domain' ),
        'singular_name' => __( $singular_name, 'text_domain' ),
        'menu_name' => __( $menu_name, 'text_domain' ),
        'name_admin_bar' => __( $name_admin_bar, 'text_domain' ),
        'all_items' => __( $all_items, 'text_domain' ),
        'add_new' => _x( $add_new, 'event', 'text_domain' ),
        'add_new_item' => __( $add_new_item, 'text_domain' ),
        'edit_item' => __( $edit_item, 'text_domain' ),
        'new_item' => __( $new_item, 'text_domain' ),
        'view_item' => __( $view_item, 'text_domain' ),
        'search_items' => __( $search_items, 'text_domain' ),
        'not_found' => __( $not_found, 'text_domain' ),
        'not_found_in_trash' => __( $not_found_in_trash, 'text_domain' ),
        'parent_item_colon' => __( $parent_item_colon, 'text_domain' )
      ),
      'public' => true,
      'menu_position' => 20,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions'
      ),
      'taxonomies' => array(
        'event-category'
      ),
      'has_archive' => true,
      'menu_icon' => 'dashicons-welcome-write-blog'
    )
  );

  /* ========================================================================= */


}

add_action( 'init', 'prefix_register_all', 0 );


function prefix_flush_rewrite_rules() {
  flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'prefix_flush_rewrite_rules' );


/* change color for icon menu admin */
function replace_admin_menu_icons_css() {
  ?>
<style>
#adminmenu #menu-posts, #adminmenu #menu-comments {
/*display: none;*/
}

		/*#adminmenu #menu-posts-blog div.wp-menu-image::before,
		#adminmenu #menu-posts-blog div.wp-menu-name {
			color: #f0f300;
		}*/
</style>
<?php
}
add_action( 'admin_head', 'replace_admin_menu_icons_css' );


/*======================/Create post type - end /=============================*/
// Add theme option
// if( function_exists('acf_add_options_page') ) {
//     $option_page = acf_add_options_page(array(
//         'page_title'    => 'Option_Name',
//         'menu_title'    => 'Option_Name',
//         'menu_slug'     => 'theme-general-settings',
//         'capability'    => 'edit_posts',
//         'redirect'  => false,
//         'position' => 20,
//         'icon_url' => 'dashicons-media-spreadsheet',
//     ));
// }
?>
