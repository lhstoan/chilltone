<?php
$keywords = get_field( 'keywords' );
$GLOBALS[ 'keywords' ] = $keywords;
$h1 = get_field( 'h1' );
$GLOBALS[ 'h1' ] = $h1;
$GLOBALS[ 'h2' ] = get_the_title();

$GLOBALS[ 'pageClass' ] = "under";
$GLOBALS[ 'pageID' ] = $post->post_name;
$GLOBALS[ 'h2_en' ] = $post->post_name;
$h2_en = get_field( 'h2_en' );
if ( $h2_en == "" ) {
    $GLOBALS[ 'h2_en' ] = $post->post_name;
} else {
    $GLOBALS[ 'h2_en' ] = $h2_en;
}
?>



<?php if (is_page( 'renovation' )):?>
<?php $GLOBALS[ 'jsonLD_step' ] = '<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "HowTo",
    "name": "小田原・南足柄の空き家を地域産材でリノベーション｜一級建築士事務所のサオビ",
    "description": "住む　～自然の中で、空き家リノベーション～",
    "step": [{
        "@type": "HowToStep",
        "text": "施主様、事業主様の募集"
    }, {
        "@type": "HowToStep",
        "text": "地域とコミットするためのコンセプトワーク"
    }, {
        "@type": "HowToStep",
        "text": "空き家・遊休地探し、周辺インフラの確認、お試し移住"
    }, {
        "@type": "HowToStep",
        "text": "物件の売買または賃借における交渉サポート"
    }, {
        "@type": "HowToStep",
        "text": "リノベーション・建築の検討・設計"
    }, {
        "@type": "HowToStep",
        "text": "森林・製材所見学などサステナビリティへの理解を深める"
    }, {
        "@type": "HowToStep",
        "text": "リノベーション・建築に着手"
    },{
        "@type": "HowToStep",
        "text": "お引渡し"
    },{
        "@type": "HowToStep",
        "text": "地域コミュニティ参加／先輩移住者として情報発信"
    }]
}
</script>'; ?>

<?php endif; ?>

<?php get_header(); ?>
        <main>
            <!-- content start -->
            <div id="content">
                <div id="swup">
                <?php include('includes/top_info.php'); ?>
        	    <?php include('includes/topic_path.php'); ?>

                    <div class="inner clearfix">
                    	<!--inner--> 
                        <?php
                            if ( have_posts() ):
                                while ( have_posts() ): the_post();
                                    the_content();
                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>
                <!--end inner--> 
            </div>
            <!-- end #content --> 
        </main>
<?php get_footer(); ?>
