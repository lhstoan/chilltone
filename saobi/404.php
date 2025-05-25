<?php 
error_reporting(0);
$GLOBALS[ 'h1' ] = "404ページ｜｜一級建築士事務所の株式会社サオビ";
$GLOBALS[ 'keywords' ] = "小田原,南足柄,注文住宅,移住,リノベーション,木の家,自然";
$GLOBALS[ 'description' ] = "神奈川県小田原市・南足柄市を中心に注文住宅を手掛けるサオビ。地産地消の木の家で、自然との調和を大切にした住まいづくりと、地域コミュニティへの参加支援を提供します。環境にも配慮した家づくりで、地域に根ざした暮らしを実現します。";

$GLOBALS[ 'h2' ] = "404 not found";
$GLOBALS[ 'pageClass' ] = "under";
$GLOBALS[ 'h2_en' ] = "";
$GLOBALS[ 'pageID' ] = "page 404";

$GLOBALS[ 'json_404' ] = '<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "name": "404 not found",
    "description": "",
    "mainEntity": {
        "@type": "WebPageElement",
        "name": "404 Page",
        "description": "お探しのページが見つかりませんでした。URLが正しく入力されていない可能性がありますので、再度ご確認ください。"
    }
}
</script>';
get_header(); ?>
<main>
<!--=====================TOP INFO========================-->

    <div id="content" class="page_404">
         <div id="swup">
            <?php include('includes/top_info.php'); ?>
            <?php include('includes/topic_path.php');?>
               <div class="inner clearfix">
                   <div class="section clearfix">
                        <p class="center">お探しのページが見つかりませんでした。<br>URLが正しく入力されていない可能性がありますので、再度ご確認ください。</p>
                        <p class="btn"><a class="auto" href="<?php echo home_url(); ?>/">トップページへ</a></p>
                   </div> 
                </div>
                <!--end .inner--> 
            </div>
    </div>
    <!-- end #content --> 
</main>
<?php get_footer(); ?>