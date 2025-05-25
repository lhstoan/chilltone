<?php
$meta_keywords = get_field( 'keywords' );
$meta_h1 = get_field( 'h1' );
$GLOBALS[ 'keywords' ] = $meta_keywords;
$GLOBALS[ 'h1' ] = $meta_h1;
$GLOBALS[ 'pageID' ] = "TOP";
$GLOBALS['jsonLD'] = '
<script type="application/ld+json">
    {
      "@context" : "https://schema.org/",
      "@type" : "LocalBusiness",
      "name" : "株式会社サオビ　一級建築士事務所",
      "image" : "'. get_theme_file_uri('') .'/images/logo.svg",
      "telephone" : "03-5770-7272",
      "address" : {
        "@type" : "PostalAddress",
        "streetAddress" : "関本72番地8",
        "addressLocality" : "南足柄市",
        "addressRegion" : "神奈川県",
        "postalCode" : "250-0105"
      },
        "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Thursday","Wednesday","Thursday","Friday","Saturday"],
        "opens": "10:00",
        "closes": "18:00"
      }
    ]
    }
</script>
<!-- JSON WEBSITE -->
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebSite",
    "name": "地域とつながる暮らしをデザイン｜小田原・南足柄の一級建築士事務所｜株式会社サオビ",
    "alternateName": "SAoBi Architects",
    "url": "' . home_url() . '/"
}
</script>

';
get_header();
/* Template Name: Index */ 
?>
	<main id="index">
      <div id="swup">
            <div class="inner">
               <div class="intro active">
                  <p class="tt_info">さあ、探索開始！</p>
                  <p class="desc_info">気になるところをクリックして、<br class="sp">まちづくりニュースを発見しよう！</p>
                  <div class="ct_intro">
                     <ul class="location_list">
                        <li class="location_info it_location1">
                           <p class="num"></p>
                           <p class="item_txt"><span class="txt-name">薪ストーブの<br>ある暮らし</span></p>
                        </li>

                        
                        <li class="location_info it_location2">
                           
                        </li>
                        <li class="location_info it_location3">
                           
                        </li>
                     </ul>
                     <p class="btn-intro"><span class="ic">GO</span></p>
                  </div>
                  </div>
               <div class="item_main">
                  <div class="item_big">
                     <img src="<?php echo get_theme_file_uri('') ?>/images/main_img_big_top.webp" loading="lazy" width="508" height="326"  alt="ドンドンモノづくり、ワクワクコトづくり">
                  </div>
                  <div class="item_ic icon_1"></div>
                  <div class="item_ic icon_2"></div>
                  <div class="item_ic icon_3"></div>
                  <div class="item_renovation">
                     <div class="ct_renovation">
                        <p class="info_email"><a href="<?php echo home_url(); ?>/renovation/" aria-label="移住をお考えの方へ"><span class="ic">移住をお考えの方へ</span></a></p>
                        <a class="link_renovation_user" href="<?php echo home_url(); ?>/renovation/" aria-label="移住をお考えの方へ">
                        <img src="<?php echo get_theme_file_uri('') ?>/images/ic_renovation.svg" loading="lazy" width="75" height="116" alt="移住をお考えの方へ">
                        </a>
                     </div>
                     <svg id="Component_9_4" data-name="Component 9 – 4" xmlns="http://www.w3.org/2000/svg" width="452.826" height="250.177" viewBox="0 0 452.826 250.177">
                        <g id="Group_835" data-name="Group 835">
                           <g id="Group_1809" data-name="Group 1809">
                              <path id="Path_4759" data-name="Path 4759" d="M440.05,147.211,392.1,88.607l-4.914-6-16.35-9.439-4.088-2.357-32.7-18.881L268.628,14.155,264.539,11.8,248.191,2.356,244.1,0l-4.061,2.356L223.8,11.8l-56.85,33.041-61.315-35.4-4.084-2.355L97.481,9.434,36.548,44.848l-4.063,2.363L4.06,63.732,0,66.086l4.085,2.359,98.1,56.641,4.088,2.363,28.634,16.524,122.9,70.961c-13.986,10.476-12.67,25.617,4,35.242l28.43-16.525,16.348,9.445,4.088,2.357,4.06-2.357,16.244-9.445,12.184-7.076,4.057-2.359,52.815-30.7,12.185-7.071L428.459,177l4.063-2.357,16.245-9.445,4.06-2.362ZM391.471,89.785l46.7,57.107-2.179.751-46.725-57.1ZM362.683,73.167l-16.24,9.44-38.58,22.42L283.341,90.869l54.824-31.862ZM191.815,120.384l8.12-4.721L244.9,141.619l4.087,2.355,16.352,9.45-8.121,4.715ZM256.2,158.726l-2.031,1.181-65.4-37.76,2.035-1.179ZM121.367,95l2.045,1.177,5.11,2.95-2.028,1.183-23.505-13.57,2.031-1.181,2.041,1.181,2.045,1.176Zm-11.242-7.672,14.251-1.182-1.99,8.262Zm-8.178-4.721L88.92,75.088l.167-.616,1.988-8.259.248-1.11-1.886.168L75.182,66.448l-1.078.082-.769-.443L49.918,52.565l32-18.59,52.032,30.039ZM86.624,74.94l2.044,1.175,11.241,6.491L97.88,83.79,71.314,68.445l2.028-1.18,1.021.591ZM75.378,67.265l14.256-1.179-2,8.263Zm55.185,31.862-6.88-3.967.145-.63,1.993-8.26.25-1.108-1.889.16L109.927,86.5l-1.085.088-2.805-1.626L146.646,61.37l32.7,18.875-40.609,23.6Zm90.807,24.2,54.843-31.869,2.041,1.174-54.842,31.876Zm27.593,15.929L224.437,125.1l54.841-31.872L303.8,107.387Zm88.177-80.838L282.317,90.279l-2.043-1.185L335.1,57.236ZM268.633,15.336l63.374,36.593L329.98,53.1,266.6,16.515Zm-40.748-1.181L244.233,23.6l16.243-9.444,4.09,2.36,65.419,37.771,4.09,2.36L279.25,88.508l-1.038.6-2.006,1.17-1.017.59-54.84,31.872L204,113.3l-4.089-2.362L167.189,92.046l16.242-9.44,4.084-2.369-4.092-2.361L150.726,59Zm-30.036,96.771-2.028,1.18-30.656-17.7,2.029-1.182ZM162.884,47.2l-16.246,9.442-4.077,2.37-7.616,4.424L82.914,33.394,110.851,17.16ZM101.568,11.8l8.262,4.769L48.9,51.976l-8.261-4.765Zm5.7,111.522L134.657,107.4c.682.424,1.3.85,1.9,1.267L109.316,124.5Zm3.066,1.767L137.491,109.3c12.4,9.265,12.476,22.3.179,31.565Zm151.489,123.9c-15.145-9.306-16.134-23.55-3.01-33.47l30.4,17.552Zm28.4-16.509-30.464-17.592c.616-.427,1.205-.866,1.858-1.273l30.635,17.685Zm36.663-1.18-16.348-9.438-16.246,9.438-32.7-18.88L138.67,141.447c12.848-9.611,12.774-23.112.089-32.879l4.063-2.361,20.3-11.8,32.721,18.9-8.121,4.719-4.062,2.36,4.091,2.364,65.4,37.757,4.086,2.359L261.3,160.5l8.126-4.723,32.7,18.88-24.366,14.163,4.089,2.361,36.787,21.236,20.44,11.8Zm-22.744-59-2.028,1.187-30.636-17.691c.717-.395,1.464-.755,2.2-1.083Zm-29.382-18.139c17.1-7.645,41.68-7.1,57.813,1.619l-27.412,15.932Zm68.37,67.7-19.417-11.21,51.8-30.1,19.414,11.211Zm69.073-36.595-2.038-1.18,14.211-8.258L426.422,177Zm20.184-34.215-20.306,11.794,16.347,9.443-4.06,2.364-16.242,9.434-12.184,7.081-20.439-11.8L322.69,210.055l-36.784-21.237,24.368-14.163-4.089-2.36,28.446-16.529c-16.668-9.622-42.813-10.339-61.145-2.35l-4.087-2.36-16.35-9.437,54.839-31.87,4.065-2.362,38.575-22.423L366.881,94.4l16.245-9.439,4.294,5.255,47.946,58.606,6.113,7.472Z" fill="#d2c7b7"/>
                              <path id="Path_4760" data-name="Path 4760" d="M149.671,49.273l38.914,22.461a6.766,6.766,0,0,0,6.114.008l13.642-7.927c1.669-.976,1.662-2.572-.019-3.544L169.408,37.8a6.784,6.784,0,0,0-6.117,0l-13.64,7.932c-1.671.965-1.66,2.567.021,3.54m1-2.95,13.642-7.929a4.485,4.485,0,0,1,4.076,0L207.3,60.861a1.246,1.246,0,0,1,.014,2.359l-13.642,7.927a4.5,4.5,0,0,1-4.074,0L150.687,48.68a1.245,1.245,0,0,1-.015-2.358" transform="translate(-55.586 -13.886)" fill="#d2c7b7"/>
                              <path id="Path_4761" data-name="Path 4761" d="M564.217,307.725a1.258,1.258,0,0,0-.006,2.37l8.175,4.72a4.523,4.523,0,0,0,4.095-.008l20.306-11.8a1.251,1.251,0,0,0-.017-2.36l-8.172-4.721a4.588,4.588,0,0,0-4.076,0Zm23.364-11.208,8.176,4.716a.625.625,0,0,1,.006,1.181l-20.306,11.8a2.258,2.258,0,0,1-2.059.011l-8.174-4.719c-.557-.321-.557-.86.015-1.19l20.306-11.808a2.283,2.283,0,0,1,2.036.006" transform="translate(-211.018 -110.662)" fill="#d2c7b7"/>
                           </g>
                        </g>
                     </svg>
                  </div>
                  <?php include("includes/title_post_community_1.php"); ?>
                  <?php include("includes/title_post_event_2.php"); ?>
                  <?php include("includes/title_post_community_3.php"); ?>
                  <?php include("includes/title_post_blog_4.php"); ?>
                  <?php include("includes/title_post_event_5.php"); ?>
                  <?php include("includes/title_post_community_6.php"); ?>
                  <?php include("includes/title_post_event_7.php"); ?>
                  <?php include("includes/title_post_community_8.php"); ?>
                  <?php include("includes/title_post_blog_9_10.php"); ?>
                  <?php include("includes/title_post_event_11.php"); ?>
                  <?php include("includes/title_post_community_12.php"); ?>
                  <?php include("includes/title_post_blog_13.php"); ?>
                  <?php include("includes/title_post_event_14.php"); ?>
                  <?php include("includes/title_post_event_15.php"); ?>
                 
                  <div class="img_svg img_svg1">
                     <div class="c-firework"></div>
                     <div class="popup_1 popup_small" id="popup_1">
                        <div class="wrap_popup_small">
                           <p class="tt_name">一緒に“あなたらしいカタチ”を<br>見つけ出そう！</p>
                           <p class="btn"><a href="<?php echo home_url(); ?>/tree/">木の家を建てる<span class="bg_btn"></span></a></p>
                        </div>
                     </div>
                     <div id="map" class="map_svg">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="242.652" height="248.482" viewBox="0 0 242.652 248.482">
                             <defs>
                               <clipPath id="clip-path">
                                 <rect id="Rectangle_789" data-name="Rectangle 789" width="22.385" height="72.544" fill="none"/>
                               </clipPath>
                               <clipPath id="clip-path-3">
                                 <rect id="Rectangle_786" data-name="Rectangle 786" width="4.421" height="4.528" fill="none"/>
                               </clipPath>
                               <clipPath id="clip-path-4">
                                 <rect id="Rectangle_787" data-name="Rectangle 787" width="5.546" height="5.302" fill="none"/>
                               </clipPath>
                               <clipPath id="clip-path-5">
                                 <rect id="Rectangle_307" data-name="Rectangle 307" width="61.988" height="73.307" fill="none"/>
                               </clipPath>
                               <clipPath id="clip-path-7">
                                 <rect id="Rectangle_303" data-name="Rectangle 303" width="30.463" height="21.94" fill="none"/>
                               </clipPath>
                               <clipPath id="clip-path-8">
                                 <rect id="Rectangle_305" data-name="Rectangle 305" width="3.75" height="7.114" fill="none"/>
                               </clipPath>
                             </defs>
                           <a xlink:href="#popup_1" data-popup="popup_1" data-id="1">
                             <g id="Group_3228" data-name="Group 3228" transform="translate(-159.409 -51.912)">
                               <g id="Group_1732" data-name="Group 1732" transform="translate(193.979 59.318)">
                                 <g id="Group_2345" data-name="Group 2345" transform="translate(185.698 67.786)">
                                   <g id="Group_2341" data-name="Group 2341" clip-path="url(#clip-path)">
                                     <g id="Group_2340" data-name="Group 2340">
                                       <g id="Group_2339" data-name="Group 2339" clip-path="url(#clip-path)">
                                         <path id="Path_9187" data-name="Path 9187" d="M12.783,18l1.089,6.284A16.657,16.657,0,0,1,16.941,18.7l2.4-.7v6.518l-3.692,7.054a4.047,4.047,0,0,1-1.863,1.316,3.055,3.055,0,0,1-3-1.789V19.638Z" transform="translate(-7.789 -12.996)" fill="#fff"/>
                                         <path id="Path_9188" data-name="Path 9188" d="M21.917,206.562a5.1,5.1,0,0,1,.029,2.846c-.447,1.228-1.631,1.026-2.661,1.1-1.99.135-3.1,1.526-5.706,1.294-1.552-.138-2.558-.561-2.8-1.574a1.683,1.683,0,0,1,.887-1.313c3.708-1.287,3.705-1.288,3.794-1.337a18.6,18.6,0,0,0,1.835-1.2c.041-.12.863-2.8.863-2.8l3.834.335Z" transform="translate(-7.782 -146.961)" fill="#4e4e4e"/>
                                         <path id="Path_9189" data-name="Path 9189" d="M37.915,105.283,34.1,120.236c.095,4.642,1.371,9.3.633,13.731-.466,1.824-4.265,1.28-4.9-.131.49-3.448-1.184-8.725-1.552-14.461.225-5.634.7-11.415,2.153-15.8Z" transform="translate(-20.413 -74.773)" fill="#466677"/>
                                         <path id="Path_9190" data-name="Path 9190" d="M57.9,230.8a3.916,3.916,0,0,1,.116,2.323,12.33,12.33,0,0,0-.61,1.223c-.27.744-.326,2.014-1.508,2.694-1.42.969-4.026.837-4.765-.354A5.972,5.972,0,0,1,52.376,234l1.493-2.364.076-2.307,3.853-.568Z" transform="translate(-36.914 -165.137)" fill="#4e4e4e"/>
                                         <path id="Path_9191" data-name="Path 9191" d="M44.9,140.611a1.191,1.191,0,0,1-.578.946,1.88,1.88,0,0,1-.471.212c-1.224.393-3.166-.05-3.761-.915-.136-3.475-1.386-8.814-2.776-14.394-.221-2.732-.355-5.37-.369-7.88-.008-1.005-.211-5.395-.177-6.349-2.266-.966-3.885-3.252-4.041-4.4.4-2.159-.09-1.3.268-3.086l5.261.245,7.28.259a11.383,11.383,0,0,1-.457,7.719l-1.321,14.208A51.374,51.374,0,0,1,44.9,140.611" transform="translate(-23.622 -75.619)" fill="#618598"/>
                                         <path id="Path_9192" data-name="Path 9192" d="M28.727,46.329c1.928,2.863,9.595,4.634,12.643-1.286.094-1.186.2-2.987.285-4.814.107-2.223.188-4.486.19-5.734a11.132,11.132,0,0,0-.347-3,6.576,6.576,0,0,0-.613-1.5,4.434,4.434,0,0,0-.237-.4,6.2,6.2,0,0,0-1.167-1.326,7.459,7.459,0,0,0-1.175-.837A9.985,9.985,0,0,0,33.414,22.1a1.2,1.2,0,0,0-.122-.049,9.951,9.951,0,0,0-3.956-.707c-4.914,6.689-.709,24.612-.61,24.988" transform="translate(-19.46 -15.406)" fill="#618598"/>
                                         <path id="Path_9193" data-name="Path 9193" d="M31.542,31.883a16.05,16.05,0,0,0,4.82,4.371s.358-5.129,4.085-6.3a3.825,3.825,0,0,1,2.33.159,7.34,7.34,0,0,0-1.168-.832,9.984,9.984,0,0,0-4.892-5.344,1.26,1.26,0,0,0-.122-.049L32.774,25.2a16.927,16.927,0,0,0-1.232,6.684" transform="translate(-22.763 -17.24)" fill="#fff"/>
                                         <path id="Path_9194" data-name="Path 9194" d="M44.448,29.658l.247,2.237c-.123,2.534-3.5,3.23-4.983,2.277l-.357-3.6Z" transform="translate(-28.41 -21.41)" fill="#f4c6b4"/>
                                         <g id="Group_2335" data-name="Group 2335" transform="translate(10.49 10.415)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
                                           <g id="Group_2334" data-name="Group 2334">
                                             <g id="Group_2333" data-name="Group 2333">
                                               <path id="Path_9195" data-name="Path 9195" d="M42.141,37.449c-.4,1.092-.924,3.35-1.746,4.077-2.129,1.653-2.482-1.7-2.675-2.614Z" transform="translate(-37.72 -37.449)" fill="#ffb294"/>
                                             </g>
                                           </g>
                                         </g>
                                         <path id="Path_9196" data-name="Path 9196" d="M38.581,20.766a5.27,5.27,0,0,1-3.937,2.961,1.223,1.223,0,0,1-1.388-.64L32.709,20.7a5.3,5.3,0,0,1-.289-2.414L36.238,15l3.138,1.354.6,2.694Z" transform="translate(-23.383 -10.826)" fill="#f4c6b4"/>
                                         <path id="Path_9197" data-name="Path 9197" d="M38.659,18.049,37.3,17.776A1.163,1.163,0,0,0,36,17.093a5.2,5.2,0,0,1-3.406-.348,2.365,2.365,0,0,1-1.108-3.294c.6-1.153,3.781-2.982,6.037-1.822,2.666,1.371,3.1,3.988,1.266,6.8Z" transform="translate(-22.519 -8.127)" fill="#4e4e4e"/>
                                         <path id="Path_9198" data-name="Path 9198" d="M55.116,29.987a.569.569,0,0,1,.462.429.8.8,0,0,1-.089.467,2.391,2.391,0,0,1-.611.82,1.074,1.074,0,0,1-.369.226.516.516,0,0,1-.421-.035c-.442-.271-.1-.835,0-1.187a.986.986,0,0,1,1.025-.72" transform="translate(-38.887 -21.64)" fill="#f4c6b4"/>
                                         <g id="Group_2338" data-name="Group 2338" transform="translate(8.782 5.988)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
                                           <g id="Group_2337" data-name="Group 2337">
                                             <g id="Group_2336" data-name="Group 2336" clip-path="url(#clip-path-4)">
                                               <path id="Path_9199" data-name="Path 9199" d="M37.126,24.112C36.2,25.986,34.39,27.4,32.4,26.617l-.819-3.584,1.51-1.5Z" transform="translate(-31.58 -21.533)" fill="#ffb294"/>
                                             </g>
                                           </g>
                                         </g>
                                         <path id="Path_9200" data-name="Path 9200" d="M26.43,21.683a9.843,9.843,0,0,0,3.1,1.152c-.033.019.205.1.172.122-1.848,1.016-4.232,2.761-6.792.647-2.257-1.864-.364-2.676,1.484-3.692.039-.022.081-.041.12-.061a4.894,4.894,0,0,0,1.921,1.832" transform="translate(-15.792 -14.33)" fill="#466677"/>
                                         <path id="Path_9201" data-name="Path 9201" d="M36.535,13.556a5.757,5.757,0,0,0,3.456-1.13s1.408-3.787-2-5.089c-5.58-2.127-6.639,3.113-6.639,3.113.338,1.656,2.481,2.507,5.187,3.106" transform="translate(-22.63 -4.93)" fill="#618598"/>
                                         <path id="Path_9202" data-name="Path 9202" d="M53.575,63.106c2.769-.536,5.5-1.1,7.094-2.641.107-2.223.188-4.486.19-5.734a11.132,11.132,0,0,0-.347-3,6.589,6.589,0,0,0-.613-1.5,3.31,3.31,0,0,0-3.3-.723c-4.664,1.1-3.029,13.594-3.029,13.594" transform="translate(-38.475 -35.642)" fill="#fff"/>
                                         <path id="Path_9205" data-name="Path 9205" d="M11.041,2.525,9.99,0l0,2.433L9.478,2.02l-.533-.627c-.643-.88-.7.36-.369.7l.476.926L9.99,4.989V6.046l1.052-1.039Z" transform="translate(-6.046)" fill="#f4c6b4"/>
                                       </g>
                                     </g>
                                   </g>
                                 </g>
                                 <g id="Group_3187" data-name="Group 3187" transform="translate(3.907 -7.406)">
                                   <path id="Path_11720" data-name="Path 11720" d="M156.055,312.746v-1.4l-.249-.143Z" transform="translate(-61.773 -123.385)" fill="#ddd299"/>
                                   <path id="Path_11721" data-name="Path 11721" d="M148.612,307.052l-9.2-5.31,10.141,7.252Z" transform="translate(-55.274 -119.633)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11722" data-name="Path 11722" d="M154.654,310.54l.945,1.942-.249-1.541Z" transform="translate(-61.316 -123.121)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11723" data-name="Path 11723" d="M98.3,278.805,37.82,243.89l-2.118.174,72.735,41.994Z" transform="translate(-14.155 -96.696)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11724" data-name="Path 11724" d="M35.7,241.864v1.4l2.118-.174Z" transform="translate(-14.155 -95.893)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11725" data-name="Path 11725" d="M0,263.873l72.735,41.993v-1.4L0,262.475Z" transform="translate(0 -104.064)" fill="#777"/>
                                   <path id="Path_11726" data-name="Path 11726" d="M0,254.3,72.735,296.3l21.547-12.441L21.547,241.865Z" transform="translate(0 -95.893)" fill="#ccc"/>
                                   <path id="Path_11727" data-name="Path 11727" d="M65.1,226.15v-30.2l-8.376-4.837v30.2Z" transform="translate(-22.49 -75.771)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11728" data-name="Path 11728" d="M99.859,184.638l26.156,15.1v-9.671l-26.156-15.1Z" transform="translate(-39.591 -69.37)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11729" data-name="Path 11729" d="M55.77,191.112l-1.451.839v30.2l1.451-.837Z" transform="translate(-21.536 -75.771)" fill="#653" fill-rule="evenodd"/>
                                   <path id="Path_11730" data-name="Path 11730" d="M57.223,241.994l-1.453-.837-1.451.837,1.451.839Z" transform="translate(-21.536 -95.612)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11731" data-name="Path 11731" d="M57.223,191.95l-1.453-.839-1.451.839,1.451.837Z" transform="translate(-21.536 -75.77)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11732" data-name="Path 11732" d="M58.177,195.278l-1.453.837v26.852l1.453-.838Z" transform="translate(-22.49 -77.422)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11733" data-name="Path 11733" d="M63.649,245.7l-5.472-3.161-1.453.839,5.473,3.159Z" transform="translate(-22.49 -96.162)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11734" data-name="Path 11734" d="M58.177,239.767l-1.453.839,5.473,3.159,1.451-.839Z" transform="translate(-22.49 -95.061)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11735" data-name="Path 11735" d="M63.649,195.66,58.177,192.5l-1.453.837L62.2,196.5Z" transform="translate(-22.49 -76.322)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11736" data-name="Path 11736" d="M67.245,247.78l-1.451.837,1.451.839,1.451-.839Z" transform="translate(-26.085 -98.238)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11737" data-name="Path 11737" d="M67.245,197.736l-1.451.839,1.451.837,1.451-.837Z" transform="translate(-26.085 -78.397)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11738" data-name="Path 11738" d="M69.65,199.125l-1.451.837v30.2l1.451-.839Z" transform="translate(-27.039 -78.948)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11739" data-name="Path 11739" d="M98.906,190.992l-1.451.839,26.156,15.1,1.451-.839Z" transform="translate(-38.638 -75.723)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11740" data-name="Path 11740" d="M98.906,189.891v-1.676l-1.451.839v1.676Z" transform="translate(-38.638 -74.622)" fill="#653" fill-rule="evenodd"/>
                                   <path id="Path_11741" data-name="Path 11741" d="M142.245,213.237l-1.451.837v1.677l1.451-.838Z" transform="translate(-55.821 -84.543)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11742" data-name="Path 11742" d="M101.31,189.6l-1.451.837,23.252,13.426,1.453-.839Z" transform="translate(-39.591 -75.173)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11743" data-name="Path 11743" d="M98.906,184.063v-6.32l-1.451.838v6.32Z" transform="translate(-38.638 -70.471)" fill="#653" fill-rule="evenodd"/>
                                   <path id="Path_11744" data-name="Path 11744" d="M101.31,179.133l-1.451.837v6.32l1.451-.837Z" transform="translate(-39.591 -71.022)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11745" data-name="Path 11745" d="M142.245,209.086v-6.32l-1.451.838v6.318Z" transform="translate(-55.821 -80.391)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11746" data-name="Path 11746" d="M98.906,176.643v-1.676l-1.451.839v1.676Z" transform="translate(-38.638 -69.37)" fill="#653" fill-rule="evenodd"/>
                                   <path id="Path_11747" data-name="Path 11747" d="M142.245,201.665v-1.676l-1.451.837V202.5Z" transform="translate(-55.821 -79.29)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11748" data-name="Path 11748" d="M98.906,174.967l-1.451.839,26.156,15.1,1.451-.838Z" transform="translate(-38.638 -69.37)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11749" data-name="Path 11749" d="M54.12,192.571v30.2l.121-.069V192.5Z" transform="translate(-21.457 -76.322)" fill="#653"/>
                                   <path id="Path_11750" data-name="Path 11750" d="M55.692,243.382l-1.451-.839-.12.07,1.451.838Z" transform="translate(-21.457 -96.162)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11751" data-name="Path 11751" d="M55.692,193.339,54.24,192.5l-.12.069,1.451.837Z" transform="translate(-21.457 -76.322)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11752" data-name="Path 11752" d="M56.525,196.736v26.85l.121-.069V196.665Z" transform="translate(-22.41 -77.972)" fill="#222"/>
                                   <path id="Path_11753" data-name="Path 11753" d="M62.119,247.092l-5.474-3.159-.12.069L62,247.162Z" transform="translate(-22.41 -96.713)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11754" data-name="Path 11754" d="M56.645,241.156l-.12.069L62,244.385l.122-.07Z" transform="translate(-22.411 -95.612)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11755" data-name="Path 11755" d="M56.645,196.665l-.12.071L62,199.9l.122-.069Z" transform="translate(-22.411 -77.972)" fill="#6af" fill-rule="evenodd"/>
                                   <path id="Path_11756" data-name="Path 11756" d="M62.119,197.049l-5.474-3.161-.12.069L62,197.118Z" transform="translate(-22.41 -76.871)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11757" data-name="Path 11757" d="M65.592,201.972v26.85l.122-.069V201.9Z" transform="translate(-26.005 -80.049)" fill="#059"/>
                                   <path id="Path_11758" data-name="Path 11758" d="M65.714,249.168l-.121.069,1.451.839.122-.069Z" transform="translate(-26.006 -98.788)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11759" data-name="Path 11759" d="M65.714,199.125l-.121.069,1.451.837.122-.069Z" transform="translate(-26.006 -78.948)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11760" data-name="Path 11760" d="M68,200.582v30.2l.122-.069v-30.2Z" transform="translate(-26.959 -79.498)" fill="#222"/>
                                   <path id="Path_11761" data-name="Path 11761" d="M97.374,192.381l-.122.069,26.157,15.1.121-.07Z" transform="translate(-38.558 -76.274)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11762" data-name="Path 11762" d="M97.253,189.674v1.676l.122-.07V189.6Z" transform="translate(-38.558 -75.173)" fill="#653"/>
                                   <path id="Path_11763" data-name="Path 11763" d="M140.592,214.7v1.676l.122-.07v-1.677Z" transform="translate(-55.741 -85.093)" fill="#222"/>
                                   <path id="Path_11764" data-name="Path 11764" d="M99.779,190.992l-.122.069,23.254,13.426.12-.069Z" transform="translate(-39.511 -75.723)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11765" data-name="Path 11765" d="M97.253,179.2v6.32l.122-.069v-6.32Z" transform="translate(-38.558 -71.021)" fill="#653"/>
                                   <path id="Path_11766" data-name="Path 11766" d="M99.658,180.591v6.318l.122-.069v-6.32Z" transform="translate(-39.512 -71.572)" fill="#222"/>
                                   <path id="Path_11767" data-name="Path 11767" d="M138.187,202.836v6.32l.121-.069v-6.32Z" transform="translate(-54.787 -80.391)" fill="#059"/>
                                   <path id="Path_11768" data-name="Path 11768" d="M140.592,204.225v6.32l.122-.071v-6.318Z" transform="translate(-55.741 -80.942)" fill="#222"/>
                                   <path id="Path_11769" data-name="Path 11769" d="M99.779,180.52l-.122.071,23.254,13.424.12-.069Z" transform="translate(-39.511 -71.572)" fill="#6af" fill-rule="evenodd"/>
                                   <path id="Path_11770" data-name="Path 11770" d="M97.253,176.426V178.1l.122-.07v-1.675Z" transform="translate(-38.558 -69.921)" fill="#653"/>
                                   <path id="Path_11771" data-name="Path 11771" d="M140.592,201.448v1.676l.122-.07v-1.677Z" transform="translate(-55.741 -79.84)" fill="#222"/>
                                   <path id="Path_11772" data-name="Path 11772" d="M97.374,176.356l-.122.069,26.157,15.1.121-.071Z" transform="translate(-38.558 -69.921)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Union_62" data-name="Union 62" d="M72.484,142.424,63.3,85.88V76.211l-26.157-15.1V70.78L63.3,85.88l9.18,56.544-.7-.4v0l-9.2-5.305-.023-.017L2.116,101.8l9-.741,8.375,4.835v-30.2l-8.375-4.835v30.2l-9,.741L0,100.574V0L.463.267l.349.2L19.49,75.686.811.467l1.633.944L72.113,41.637l.622.357V142.566Z" transform="translate(21.547 45.398)" fill="#a09584"/>
                                   <path id="Union_62_-_Outline" data-name="Union 62 - Outline" d="M73.236,143.421l-.092-.052,0,.017-.91-.527-.207-.117v0l-.64-.373-9.069-5.233-.023-.017L-.5,100.863V-.866l.543.314v0L2.695.978,73.236,41.705Zm-10.37-7.127,8.955,5.167L62.848,86.195l-26.2-15.125V60.242L63.8,75.922V85.84l8.432,51.936V42.284l-.371-.213L1.58,1.489,20.259,76.707l-.269-.155v30.2L11,101.565l-7.249.6,59.092,34.115ZM11.615,100.766l7.375,4.257V75.975l-7.375-4.258ZM.5,100.286l1.73,1,8.385-.69V69.985l8.106,4.68L.5,1.288ZM37.646,70.492,62.8,85.014V76.5L37.646,61.974Z" transform="translate(21.547 45.398)" fill="rgba(0,0,0,0)"/>
                                   <path id="Path_11780" data-name="Path 11780" d="M122.911,194.062,99.657,180.638v6.318l23.254,13.425Z" transform="translate(-39.511 -71.618)" fill="#6af" fill-rule="evenodd"/>
                                   <path id="Path_11781" data-name="Path 11781" d="M123.409,191.574l-26.156-15.1,1.451,2.514,23.253,13.424Z" transform="translate(-38.558 -69.966)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11782" data-name="Path 11782" d="M121.958,204.532,98.7,191.106l-1.451.839,26.157,15.1Z" transform="translate(-38.558 -75.769)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11783" data-name="Path 11783" d="M97.253,176.472v9.672L98.7,185.3v-6.318Z" transform="translate(-38.558 -69.966)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11784" data-name="Path 11784" d="M138.187,202.331v6.32l1.451,2.515v-9.672Z" transform="translate(-54.787 -79.887)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11786" data-name="Path 11786" d="M0,196.407l2.42,1.4V97.232L0,95.835Z" transform="translate(0 -37.996)" fill="#fff"/>
                                   <path id="Path_11787" data-name="Path 11787" d="M25.558,178.109V77.536L4.011,89.977V190.55Z" transform="translate(-1.59 -30.741)" fill="#888" fill-rule="evenodd"/>
                                   <path id="Path_11788" data-name="Path 11788" d="M65.592,201.466v26.85l1.451,2.514v-30.2Z" transform="translate(-26.005 -79.543)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11789" data-name="Path 11789" d="M54.12,192.616v30.2l1.451-.837v-26.85Z" transform="translate(-21.457 -76.367)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11790" data-name="Path 11790" d="M54.12,242.109l8.375,4.837-1.451-2.515-5.472-3.159Z" transform="translate(-21.457 -95.658)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11791" data-name="Path 11791" d="M55.571,195.131l5.472,3.159,1.451-.838-8.375-4.835Z" transform="translate(-21.457 -76.367)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11792" data-name="Path 11792" d="M56.525,196.783v26.85L62,226.792v-26.85Z" transform="translate(-22.411 -78.019)" fill="#6af" fill-rule="evenodd"/>
                                   <path id="Path_11793" data-name="Path 11793" d="M35.7,73.386l.462.266L35.7,70.593Z" transform="translate(-14.155 -27.988)" fill="#ddd299"/>
                                   <path id="Path_11794" data-name="Path 11794" d="M155.191,142.608l.62.358v-2.794Z" transform="translate(-61.529 -55.574)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11795" data-name="Path 11795" d="M36.513,73.854l1.634.945-2.445-4.2Z" transform="translate(-14.155 -27.989)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11796" data-name="Path 11796" d="M36.513,73.854l-.811-3.26.462,3.059Z" transform="translate(-14.155 -27.989)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11797" data-name="Path 11797" d="M38.147,74.8l69.67,40.224.62-2.436L35.7,70.593Z" transform="translate(-14.155 -27.988)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11798" data-name="Path 11798" d="M0,87.661l2.42,1.4L23.968,76.618l-2.421-1.4Z" transform="translate(0 -29.823)" fill="#fff"/>
                                   <path id="Path_11799" data-name="Path 11799" d="M0,94l2.42,1.4V92.6L0,91.2Z" transform="translate(0 -36.16)" fill="#fff"/>
                                   <path id="Path_11800" data-name="Path 11800" d="M74.325,134.117,4.01,93.52v2.794l70.315,40.6Z" transform="translate(-1.59 -37.078)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11801" data-name="Path 11801" d="M0,83.033l72.735,41.994,21.547-12.441L21.547,70.593Z" transform="translate(0 -27.988)" fill="#fff"/>
                                   <path id="Path_11802" data-name="Path 11802" d="M108.285,1.159,35.7,43.064l72.735,41.993L181.02,43.151Z" transform="translate(-14.155 -0.46)" fill="#ddd299" fill-rule="evenodd"/>
                                   <path id="Path_11803" data-name="Path 11803" d="M228.8,70.737l-72.583,41.905V217.408L228.8,175.5Z" transform="translate(-61.936 -28.046)" fill="#6d5d41" fill-rule="evenodd"/>
                                   <path id="Path_11804" data-name="Path 11804" d="M120.516,333.453,139.645,344.5v-1.4l-19.128-11.043Z" transform="translate(-47.781 -131.651)" fill="#777"/>
                                   <path id="Path_11805" data-name="Path 11805" d="M152.211,314.654v1.4l94.13-54.346v-1.4Z" transform="translate(-60.347 -103.205)" fill="#555"/>
                                   <path id="Union_63" data-name="Union 63" d="M19.128,65.388h0v0L0,54.347l21.545-12.44v0L94.129,0l19.129,11.045L19.129,65.387v0Z" transform="translate(72.735 146.059)" fill="#ccc"/>
                                   <path id="Union_63_-_Outline" data-name="Union 63 - Outline" d="M19.629,66.384l-.581-.432-.42.158v-.434L-1,54.347,21.3,41.472,94.129-.577l20.129,11.622L19.629,65.675ZM1,54.347,19.127,64.81l93.131-53.766L94.129.577Z" transform="translate(72.735 146.059)" fill="rgba(0,0,0,0)"/>
                                   <path id="Path_11808" data-name="Path 11808" d="M139.645,171.828l-19.128-11.043v2.794l19.128,11.043Z" transform="translate(-47.781 -63.747)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11809" data-name="Path 11809" d="M156.218,134.73l91.711-52.949L228.8,70.737l-72.583,41.905Z" transform="translate(-61.936 -28.046)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11810" data-name="Path 11810" d="M142.064,162.259V140.171l-21.547,12.441,19.128,11.043Z" transform="translate(-47.781 -55.574)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11811" data-name="Path 11811" d="M265.284,138.161l19.128-11.043v-9.671l-19.128,11.043Z" transform="translate(-105.178 -46.564)" fill="#888" fill-rule="evenodd"/>
                                   <path id="Path_11812" data-name="Path 11812" d="M265.284,144.514l1.451.839,19.128-11.043-1.452-.839Z" transform="translate(-105.178 -52.917)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11813" data-name="Path 11813" d="M296.978,130.694v1.676l1.451.838v-1.677Z" transform="translate(-117.744 -51.817)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11814" data-name="Path 11814" d="M265.284,142.287l1.451.839,17.677-10.206-1.453-.838Z" transform="translate(-105.178 -52.367)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11815" data-name="Path 11815" d="M296.978,120.223v6.32l1.451.837v-6.318Z" transform="translate(-117.744 -47.665)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11816" data-name="Path 11816" d="M294.571,127.931l1.453.839v-6.32l-1.453-.837Z" transform="translate(-116.789 -48.216)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11817" data-name="Path 11817" d="M296.978,117.446v1.676l1.451.838v-1.677Z" transform="translate(-117.744 -46.564)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11818" data-name="Path 11818" d="M265.284,128.489l1.451.839,19.128-11.045-1.452-.838Z" transform="translate(-105.178 -46.564)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11819" data-name="Path 11819" d="M267.689,145.9l.12.069,19.129-11.043-.121-.07Z" transform="translate(-106.131 -53.468)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11820" data-name="Path 11820" d="M299.383,133.758l.12.069v-1.675l-.12-.071Z" transform="translate(-118.697 -52.367)" fill="#fff"/>
                                   <path id="Path_11821" data-name="Path 11821" d="M267.689,143.677l.12.069,17.677-10.206-.12-.069Z" transform="translate(-106.131 -52.918)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11822" data-name="Path 11822" d="M299.383,127.93l.12.071v-6.32l-.12-.069Z" transform="translate(-118.697 -48.216)" fill="#fff"/>
                                   <path id="Path_11823" data-name="Path 11823" d="M296.978,129.319l.12.069V123.07l-.12-.07Z" transform="translate(-117.744 -48.766)" fill="#a0a0a4"/>
                                   <path id="Path_11824" data-name="Path 11824" d="M267.689,133.206l.12.069,17.677-10.206-.12-.069Z" transform="translate(-106.131 -48.766)" fill="#6af" fill-rule="evenodd"/>
                                   <path id="Path_11825" data-name="Path 11825" d="M299.383,120.51l.12.069V118.9l-.12-.069Z" transform="translate(-118.697 -47.114)" fill="#fff"/>
                                   <path id="Path_11826" data-name="Path 11826" d="M267.689,129.878l.12.069L286.938,118.9l-.121-.069Z" transform="translate(-106.131 -47.114)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11827" data-name="Path 11827" d="M266.3,202.8l-2.419-1.4v52.381l2.419,1.4Z" transform="translate(-104.621 -79.852)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11828" data-name="Path 11828" d="M253.639,149.473l7.028-4.059v-9.672l-7.028,4.058Z" transform="translate(-100.561 -53.819)" fill="#888" fill-rule="evenodd"/>
                                   <path id="Path_11829" data-name="Path 11829" d="M262.118,152.607l-1.451-.839-7.028,4.059,1.452.837Z" transform="translate(-100.561 -60.172)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11830" data-name="Path 11830" d="M253.639,155.714v1.677l1.452.837v-1.675Z" transform="translate(-100.561 -61.736)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11831" data-name="Path 11831" d="M263.072,149.83l-1.451-.839-5.577,3.22,1.451.837Z" transform="translate(-101.514 -59.071)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11832" data-name="Path 11832" d="M253.639,145.245v6.318l1.452.838v-6.32Z" transform="translate(-100.561 -57.586)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11833" data-name="Path 11833" d="M253.639,144.143l1.452.837V143.3l-1.452-.838Z" transform="translate(-100.561 -56.484)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11834" data-name="Path 11834" d="M262.118,136.582l-1.451-.839-7.028,4.058,1.452.838Z" transform="translate(-100.561 -53.819)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11835" data-name="Path 11835" d="M263.072,153.158l-7.028,4.057.121.071,7.027-4.059Z" transform="translate(-101.514 -60.723)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11836" data-name="Path 11836" d="M256.044,158.779l.121.071v-1.677l-.121-.07Z" transform="translate(-101.514 -62.287)" fill="#a0a0a4"/>
                                   <path id="Path_11837" data-name="Path 11837" d="M264.025,150.381l-5.577,3.219.12.071,5.577-3.22Z" transform="translate(-102.468 -59.622)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11838" data-name="Path 11838" d="M258.448,151.563l.121.071v-6.32l-.121-.069Z" transform="translate(-102.468 -57.586)" fill="#6af"/>
                                   <path id="Path_11839" data-name="Path 11839" d="M256.044,152.952l.121.069V146.7l-.121-.071Z" transform="translate(-101.514 -58.136)" fill="#a0a0a4"/>
                                   <path id="Path_11840" data-name="Path 11840" d="M264.025,139.91l-5.577,3.22.12.069,5.577-3.22Z" transform="translate(-102.468 -55.471)" fill="#6af" fill-rule="evenodd"/>
                                   <path id="Path_11841" data-name="Path 11841" d="M256.044,145.531l.121.071v-1.677l-.121-.07Z" transform="translate(-101.514 -57.035)" fill="#a0a0a4"/>
                                   <path id="Path_11842" data-name="Path 11842" d="M263.072,137.133l-7.028,4.057.121.07,7.027-4.057Z" transform="translate(-101.514 -54.37)" fill="#a0a0a4" fill-rule="evenodd"/>
                                   <path id="Path_11843" data-name="Path 11843" d="M170.18,278.1,154.63,185.109l-2.419-1.4,15.55,92.992Z" transform="translate(-60.347 -72.837)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11844" data-name="Path 11844" d="M152.21,182.795l2.419,1.4V181.4Z" transform="translate(-60.347 -71.92)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11845" data-name="Path 11845" d="M154.629,180.481l-2.419-1.4v2.794Z" transform="translate(-60.347 -71.002)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Path_11846" data-name="Path 11846" d="M156.218,141.986v2.794l94.13-54.347-2.418-1.4Z" transform="translate(-61.936 -35.301)" fill="#fff"/>
                                   <path id="Path_11847" data-name="Path 11847" d="M154.629,176.769l-2.419,1.4,2.419,1.4Z" transform="translate(-60.347 -70.084)" fill="#fff" fill-rule="evenodd"/>
                                   <path id="Union_61" data-name="Union 61" d="M0,57.14,49.975,77.873v52.382L15.55,150.132ZM67.395,67.817,49.975,77.873,60.367,41.431l26.157-15.1V16.656L94.129,0V104.762L67.395,120.2ZM0,57.14V54.347L49.975,77.873Zm0-2.793L94.129,0l-7.6,16.656-26.157,15.1v9.673L49.975,77.873Z" transform="translate(94.282 55.133)" fill="#888"/>
                                   <path id="Union_61_-_Outline" data-name="Union 61 - Outline" d="M94.629-2.3V-.866l.6-.349-.6,1.324V105.05L66.895,121.066V68.683L50.475,78.162v52.382l-35.3,20.381L-.447,57.5-.5,57.474v-.292l-.142-.849.142.059V54.664l-.578-.272.578-.334v-.5l.476.224L93.74-.353ZM86.136,16.3,93.024,1.215,1.078,54.3,49.656,77.17,59.867,41.361V31.47Zm7.493,88.17V2.3l-6.6,14.465v9.852L60.793,41.763l-10,35.06,17.1-9.871v52.382Zm-7.6-78.434V17.522L60.867,32.047v8.518ZM30.4,69.21.5,55.135v1.671Zm18.974,8.954L.642,57.947l15.283,91.391,33.551-19.372V78.739l-.319.184Z" transform="translate(94.282 55.133)" fill="rgba(0,0,0,0)"/>
                                   <path id="Path_11854" data-name="Path 11854" d="M281.9,123.115l-23.254,13.426v6.32L281.9,129.434Z" transform="translate(-102.547 -48.812)" fill="#059" fill-rule="evenodd"/>
                                   <path id="Path_11855" data-name="Path 11855" d="M280.948,133.586l-23.254,13.426-1.451,2.514,26.156-15.1Z" transform="translate(-101.594 -52.963)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11856" data-name="Path 11856" d="M282.4,118.948l-26.156,15.1,1.451.839,23.253-13.426Z" transform="translate(-101.593 -47.16)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11857" data-name="Path 11857" d="M256.243,143.971v9.673l1.452-2.514v-6.32Z" transform="translate(-101.593 -57.081)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11858" data-name="Path 11858" d="M297.178,121.463v6.32l1.451.839v-9.673Z" transform="translate(-117.823 -47.16)" fill="#222" fill-rule="evenodd"/>
                                   <path id="Path_11860" data-name="Path 11860" d="M156.218,144.54v.7l94.13-54.346v-.7Z" transform="translate(-61.936 -35.759)" fill="#222"/>
                                   <path id="Path_11861" data-name="Path 11861" d="M0,90.746l94.282,54.435v-.7L0,90.048Z" transform="translate(0 -35.702)" fill="#a0a0a4"/>
                                   <path id="Path_11862" data-name="Path 11862" d="M94.13,0,0,54.346l94.282,54.435,94.13-54.346Z" transform="translate(0 0)" fill="#77695d"/>
                                 </g>
                                 <g id="Group_2343" data-name="Group 2343" transform="translate(-203.411 -279.304)">
                                   <g id="Group_2343-2" data-name="Group 2343" transform="translate(201.082 408.958)">
                                     <g id="Group_889" data-name="Group 889">
                                       <g id="Group_888" data-name="Group 888">
                                         <g id="Group_887" data-name="Group 887">
                                           <path id="Path_4952" data-name="Path 4952" d="M7.051,175.141l-2.037,2.58-.652,2.548s1.019.578,1.05,1.4-.789.91-1.669,1S.4,181.455.069,180.392s.637-3.46.759-4.249-.091-3.113,1.336-3.62a6.393,6.393,0,0,1,2.671,0c.953.237,2.216,2.618,2.216,2.618" transform="translate(0 -123.333)" fill="#4e4e4e"/>
                                           <path id="Path_4953" data-name="Path 4953" d="M110.333,155.438l.251,3.5a9.879,9.879,0,0,0,2.462.267c1.145-.06,2.924-.422,3.437.452s.271,1.839-.9,2.5a9.859,9.859,0,0,1-4.734.9,4.71,4.71,0,0,0-2.653.754c-.874.216-2.862.432-2.862-1.437s2.108-6.07,2.108-6.07Z" transform="translate(-75.362 -111.213)" fill="#4e4e4e"/>
                                           <path id="Path_4954" data-name="Path 4954" d="M49.085,103.773c.174,2.5,2.628,3.261,4.466,3.485a11.92,11.92,0,0,0,2.037.062,3.717,3.717,0,0,0,1.41.354,20.687,20.687,0,0,0,11.5-4.286c-1.447,3.591-3.143,13.79-3.143,13.79a2.305,2.305,0,0,0,1.2.553c1.646.211,4.361-1.242,4.361-1.242s.683-.36,2.777-7.579c2.025-6.988,1.118-10.871,1.118-10.871,0-1.087-.994-1.845-2.4-2.087-4.4-.758-11.275,2.628-11.275,2.628l-.149-2.255-.366.031-10.573.888a12.281,12.281,0,0,0-.969,6.529" transform="translate(-35.077 -68.573)" fill="#618598"/>
                                           <path id="Path_4955" data-name="Path 4955" d="M15.621,134.41c-.039.26-.292,1.439-.36,1.661,3.526-.728,14.706-6.4,14.706-6.4,1.326-.82,2.007-6.281,2.282-9.271.048-.478.082-.893.106-1.216.034-.448.048-.719.048-.738,0,0-.444-4.216-.569-4.216-.121.039-7.622-2.393-7.5,2.272a64.952,64.952,0,0,0,.864,8.611c-.772-.241-3.42,1.278-4.592,2.045s-6.175,3.189-6.175,3.189c1.167.14,1.442,2.412,1.187,4.067" transform="translate(-10.327 -81.298)" fill="#618598"/>
                                           <g id="Group_883" data-name="Group 883" transform="translate(4.933 32.834)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
                                             <g id="Group_882" data-name="Group 882">
                                               <g id="Group_881" data-name="Group 881" clip-path="url(#clip-path-7)">
                                                 <path id="Path_4956" data-name="Path 4956" d="M17.338,137.34c3.528-.727,14.71-6.4,14.71-6.4,1.323-.82,2.006-6.28,2.28-9.268a20.687,20.687,0,0,0,11.5-4.286c-1.447,3.591-3.143,13.79-3.143,13.79a2.305,2.305,0,0,0,1.2.553l.211-.112A55.165,55.165,0,0,1,47.8,115.4c-14.834,8.088-18.456,2.739-20.555,2.4a38.518,38.518,0,0,1,3.634,3.448c1.466,2.317,1.466,5.243.41,8.218-1.634,2.317-8.075,4.758-13.753,6.939a7.942,7.942,0,0,1-.2.932" transform="translate(-17.338 -115.4)" fill="#618598"/>
                                               </g>
                                             </g>
                                           </g>
                                           <path id="Path_4957" data-name="Path 4957" d="M138.383,36.815l-.627.953-.708.421-.735.184-1.488,1.153V36.92l.743-.414.648-.654Z" transform="translate(-96.464 -25.652)" fill="#f4c6b4"/>
                                           <path id="Path_4958" data-name="Path 4958" d="M87.748,35.715a2.5,2.5,0,0,1,.278,2.926,17.289,17.289,0,0,1-9.517,3.974l-10.52-2.762,4.066-5.108,7.043,3.09Z" transform="translate(-48.645 -24.86)" fill="#b3b3b3"/>
                                           <path id="Path_4959" data-name="Path 4959" d="M64.663,44.142c-.057.868-.155,1.731-.288,2.595-.057.372-.119.744-.19,1.116-.682,5.919-1.161,5.915-2.5,7.257-1,1.014-2.351,1.2-4.33,1.257a5.115,5.115,0,0,1-5.18-4.853c.4-.629.678-9.422.651-11.335-.062-4.206,2.05-10.351,7.177-8.2a11.617,11.617,0,0,1,2.391,1.855,9.767,9.767,0,0,1,1.793,2.581c.062.323.119.646.173.965.075.474.142.943.19,1.417a28.779,28.779,0,0,1,.115,5.344" transform="translate(-37.328 -22.563)" fill="#618598"/>
                                           <path id="Path_4960" data-name="Path 4960" d="M142.941,28.073c.006-.014.311-.6.314-.6-.038.089,0,.187.12.258a.739.739,0,0,0,.671.007c.125-.07.169-.17.13-.262.1.246.206.36.31.606.065.153-.009.322-.218.439a1.24,1.24,0,0,1-1.125-.011c-.2-.119-.265-.283-.2-.432" transform="translate(-102.255 -19.653)" fill="#b3b3b3"/>
                                           <path id="Path_4961" data-name="Path 4961" d="M144.2,26.816a.74.74,0,0,1,.671.007c.183.109.178.283-.01.388a.739.739,0,0,1-.671-.007c-.183-.109-.178-.283.009-.389" transform="translate(-103.068 -19.131)" fill="#e6e6e6"/>
                                           <path id="Path_4962" data-name="Path 4962" d="M142.908,33.145l0-3.167a.393.393,0,0,0,.225.322,1.24,1.24,0,0,0,1.125.011.4.4,0,0,0,.241-.329l0,3.168a.4.4,0,0,1-.241.329,1.24,1.24,0,0,1-1.125-.011.393.393,0,0,1-.225-.322" transform="translate(-102.248 -21.449)" fill="#1a1a1a"/>
                                           <path id="Path_4963" data-name="Path 4963" d="M144.776,24.186V22.875a.13.13,0,0,0,.075.107.412.412,0,0,0,.374,0,.132.132,0,0,0,.08-.11v1.311a.133.133,0,0,1-.08.11.413.413,0,0,1-.374,0,.131.131,0,0,1-.075-.107" transform="translate(-103.584 -16.367)" fill="#1a1a1a"/>
                                           <path id="Path_4964" data-name="Path 4964" d="M124.1,34.746l-1.694.9-.485,3.026a.3.3,0,0,0,.094.312l.927.584a.261.261,0,0,0,.267-.017l.921-.489a.827.827,0,0,0,.388-.562l.508-3.169Z" transform="translate(-87.228 -24.86)" fill="#999"/>
                                           <path id="Path_4965" data-name="Path 4965" d="M132.176,35.589l0,.936a.394.394,0,0,1-.179.308l-.71.409.194-1.255Z" transform="translate(-93.936 -25.463)" fill="#f45157"/>
                                           <path id="Path_4966" data-name="Path 4966" d="M127.357,36.8l-.508,3.169a.826.826,0,0,1-.388.562l-.921.489c-.234.124-.4-.015-.361-.3l.485-3.026Z" transform="translate(-89.558 -26.329)" fill="#4d4d4d"/>
                                           <path id="Path_4967" data-name="Path 4967" d="M123,45.3l-.627.953-.708.421-.934.6-1.31-.166-.018-.664.782-1.449.648-.654Z" transform="translate(-85.433 -31.721)" fill="#f4c6b4"/>
                                           <path id="Path_4968" data-name="Path 4968" d="M129.593,36.414a.479.479,0,0,1-.049.819l-.776.525c-.287.149-1.717.5-1.479.135.148-.226,1.9-1.18,2.008-1.31.117-.067.181-.11.3-.169" transform="translate(-91.054 -26.053)" fill="#f4c6b4"/>
                                           <path id="Path_4969" data-name="Path 4969" d="M128.161,40.124l.136.12a.453.453,0,0,1,.132.48l-.077.238.105.275a.459.459,0,0,1-.02.375l-.09.174.018.14a.455.455,0,0,1-.115.363l-.375.412-.771.481c-.617.3-1.26.453-1.017.256-.312-2.295.446-2.738.933-2.756l.918-.637.022.185Z" transform="translate(-90.16 -28.651)" fill="#f4c6b4"/>
                                           <path id="Path_4970" data-name="Path 4970" d="M124.435,40.585l-.639-.5-.726.141c-.5.205-.976.342-1.287.083l.032-.543-.194.195a.939.939,0,0,0-.267.781l-.147,1.4.924.147.923-1.221.763-.108.475.2Z" transform="translate(-86.72 -28.452)" fill="#f4c6b4"/>
                                           <path id="Path_4971" data-name="Path 4971" d="M162.158,6.885l.153.265,1.505-.9a.08.08,0,0,0,.032-.06.158.158,0,0,0-.087-.15.08.08,0,0,0-.068,0Z" transform="translate(-116.021 -4.312)" fill="#4d4d4d"/>
                                           <path id="Path_4972" data-name="Path 4972" d="M159.618,8.931l.34.589.617-.435a.143.143,0,0,0,.05-.12.426.426,0,0,0-.193-.334.139.139,0,0,0-.129-.016s-.685.316-.685.316" transform="translate(-114.203 -6.157)" fill="#666"/>
                                           <path id="Path_4973" data-name="Path 4973" d="M155.967,8.679l1.106,1.915.516-.832a.449.449,0,0,0,.055-.224,1.052,1.052,0,0,0-.476-.825.415.415,0,0,0-.22-.062s-.98.028-.98.028" transform="translate(-111.591 -6.19)" fill="#4d4d4d"/>
                                           <rect id="Rectangle_304" data-name="Rectangle 304" width="1.675" height="2.315" transform="matrix(0.866, -0.5, 0.5, 0.866, 42.727, 3.381)" fill="gray"/>
                                           <path id="Path_4974" data-name="Path 4974" d="M154.429,9.333c0-.522.366-.734.819-.473a1.809,1.809,0,0,1,.819,1.418c0,.522-.367.734-.819.473a1.809,1.809,0,0,1-.819-1.418" transform="translate(-110.491 -6.26)" fill="gray"/>
                                           <path id="Path_4975" data-name="Path 4975" d="M149.33,12.278c0-.522.366-.733.819-.473a1.81,1.81,0,0,1,.819,1.418c0,.522-.367.734-.819.473a1.809,1.809,0,0,1-.819-1.418" transform="translate(-106.843 -8.366)" fill="#e6e6e6"/>
                                           <path id="Path_4976" data-name="Path 4976" d="M145.663,16.617c0-.28.2-.393.439-.254a.971.971,0,0,1,.439.761c0,.28-.2.393-.439.254a.971.971,0,0,1-.439-.761" transform="translate(-104.219 -11.665)" fill="#666"/>
                                           <path id="Path_4977" data-name="Path 4977" d="M146.736,15.342l1.423-.822a.308.308,0,0,0,.129-.284.969.969,0,0,0-.439-.76.308.308,0,0,0-.31-.031l-1.423.821Z" transform="translate(-104.542 -9.599)" fill="#4e4e4e"/>
                                           <path id="Path_4978" data-name="Path 4978" d="M128.267,13.784a.527.527,0,0,0-.222-.485l-1.684-.979a.537.537,0,0,0-.541.053l-5.853,3.379a1.69,1.69,0,0,0-.735,1.1l-.423,1.991a.633.633,0,0,0,.2.7l1.686.98a.532.532,0,0,0,.539-.053l6.28-3.626a1.665,1.665,0,0,0,.756-1.306Z" transform="translate(-84.992 -8.779)" fill="#999"/>
                                           <path id="Path_4979" data-name="Path 4979" d="M131.744,15.817c.419-.242.759-.049.761.43l0,1.747a1.666,1.666,0,0,1-.756,1.306l-6.28,3.626c-.49.283-.851-.034-.74-.645l.423-1.991a1.692,1.692,0,0,1,.735-1.095Z" transform="translate(-89.23 -11.242)" fill="#4d4d4d"/>
                                           <path id="Path_4980" data-name="Path 4980" d="M136.844,28.135c-.055.032-.1.013-.1-.042V27.2a.208.208,0,0,1,.1-.158c.055-.032.1-.013.1.042v.89a.207.207,0,0,1-.1.158" transform="translate(-97.838 -19.339)" fill="#1a1a1a"/>
                                           <path id="Path_4981" data-name="Path 4981" d="M135.783,28.747c-.055.032-.1.013-.1-.042v-.889a.208.208,0,0,1,.1-.158c.055-.032.1-.013.1.042v.889a.207.207,0,0,1-.1.158" transform="translate(-97.078 -19.777)" fill="#1a1a1a"/>
                                           <path id="Path_4982" data-name="Path 4982" d="M134.723,29.359c-.056.032-.1.013-.1-.042v-.889a.208.208,0,0,1,.1-.158c.055-.032.1-.013.1.042v.89a.207.207,0,0,1-.1.158" transform="translate(-96.32 -20.215)" fill="#1a1a1a"/>
                                           <path id="Path_4983" data-name="Path 4983" d="M133.662,29.972c-.055.032-.1.013-.1-.042V29.04a.209.209,0,0,1,.1-.158c.055-.032.1-.013.1.042v.89a.208.208,0,0,1-.1.158" transform="translate(-95.561 -20.654)" fill="#1a1a1a"/>
                                           <path id="Path_4984" data-name="Path 4984" d="M132.6,30.584c-.055.032-.1.013-.1-.042v-.889a.208.208,0,0,1,.1-.158c.055-.032.1-.013.1.042v.89a.208.208,0,0,1-.1.158" transform="translate(-94.802 -21.091)" fill="#1a1a1a"/>
                                           <path id="Path_4985" data-name="Path 4985" d="M131.541,31.2c-.055.032-.1.013-.1-.042v-.889a.208.208,0,0,1,.1-.158c.055-.032.1-.013.1.042v.889a.208.208,0,0,1-.1.158" transform="translate(-94.043 -21.53)" fill="#1a1a1a"/>
                                           <path id="Path_4986" data-name="Path 4986" d="M130.48,31.809c-.055.032-.1.013-.1-.042v-.889a.208.208,0,0,1,.1-.158c.055-.032.1-.013.1.042v.889a.207.207,0,0,1-.1.158" transform="translate(-93.284 -21.968)" fill="#1a1a1a"/>
                                           <path id="Path_4987" data-name="Path 4987" d="M129.419,32.421c-.055.032-.1.013-.1-.042V31.49a.207.207,0,0,1,.1-.158c.056-.032.1-.013.1.042v.89a.207.207,0,0,1-.1.158" transform="translate(-92.525 -22.406)" fill="#1a1a1a"/>
                                           <path id="Path_4988" data-name="Path 4988" d="M147.882,30.131a.448.448,0,0,1,.029.718l-.287.281c-.466.242-.533-.337-.239-.674a.742.742,0,0,1,.193-.152c0-.081,0-.31,0-.31a1.648,1.648,0,0,1,.3.137" transform="translate(-105.325 -21.46)" fill="#f4c6b4"/>
                                           <path id="Path_4989" data-name="Path 4989" d="M145.714,31.989l.185.2a.278.278,0,0,1,.056.29l-.112.291.069.251a.281.281,0,0,1-.034.226l-.189.294-.035.281a.347.347,0,0,1-.122.224l-.388.324h-.5c-.232-.149-.243-.32,0-.517l-.23-.11c-.432-.153-.252-.461-.068-.563-.449-.158-.33-.664-.077-.674l.957-.011.147-.263Z" transform="translate(-103.058 -22.887)" fill="#f4c6b4"/>
                                           <path id="Path_4990" data-name="Path 4990" d="M140.4,32.658l-.639-.5-.726.14-.015-.239-.6.349-.849.49-.126.894.654.567.906-.714.529-.676.727.26Z" transform="translate(-98.334 -22.939)" fill="#f4c6b4"/>
                                           <path id="Path_4991" data-name="Path 4991" d="M76.62,57.859c-.057.868-.155,1.731-.288,2.595l-.1.009c-.438.722-2.045,1.045-3.648.939s-3.179-.611-3.617-1.567a17.176,17.176,0,0,1,.368-5.57,4.035,4.035,0,0,1,5.162-3.347,3.654,3.654,0,0,1,2.01,1.6,28.779,28.779,0,0,1,.115,5.344" transform="translate(-49.285 -36.28)" fill="#fff"/>
                                           <path id="Path_4992" data-name="Path 4992" d="M66.953,38.731a4.553,4.553,0,0,0-2.63-1.412c-6.234-.793-6.234,8.3-6.234,8.3L55.8,42.392c.367-8.961,5.123-8.97,5.14-8.97l4.047,1.762a9.773,9.773,0,0,1,1.793,2.581c.062.323.119.646.173.965" transform="translate(-39.924 -23.913)" fill="#fff"/>
                                           <path id="Path_4993" data-name="Path 4993" d="M78.117,32.882l1.422-3.247L74.79,27.477l-1.079,2.158c-.387,1.379,3.864,4.163,4.405,3.247" transform="translate(-52.721 -19.659)" fill="#f4c6b4"/>
                                           <path id="Path_4994" data-name="Path 4994" d="M77.415,13.528l2.018-.464a1.428,1.428,0,0,0,1-.844,13.2,13.2,0,0,0,.677-5.306c-.285-2.708-3.251-3.442-5.035-2.964a4.505,4.505,0,0,0-3.569,4.143A6.525,6.525,0,0,0,74.069,12.3Z" transform="translate(-51.873 -2.728)" fill="#f4c6b4"/>
                                           <path id="Path_4995" data-name="Path 4995" d="M80.753,7.193a16.327,16.327,0,0,0-1.644.876c-.206.121-.24.943-.3,1.175l-.217.839-.85.743-.147.5a1.188,1.188,0,0,1-1.029.854,6.4,6.4,0,0,1-3.645-1s-1.984-3.036-.328-5.882a4.788,4.788,0,0,1,5.692-2.08c1.052.327,3.686,1.857,2.468,3.982" transform="translate(-51.467 -2.127)" fill="#4e4e4e"/>
                                           <path id="Path_4996" data-name="Path 4996" d="M91.777,25.027a1.086,1.086,0,0,0-.112.365,3.245,3.245,0,0,0,.017,1.133.949.949,0,0,0,.16.412.4.4,0,0,0,.391.162c.2-.047.292-.266.347-.461a2.658,2.658,0,0,0,.158-1.336c-.133-.4-.684-.765-.961-.277" transform="translate(-65.554 -17.738)" fill="#f4c6b4"/>
                                           <g id="Group_886" data-name="Group 886" transform="translate(23.297 24.173)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
                                             <g id="Group_885" data-name="Group 885">
                                               <g id="Group_884" data-name="Group 884">
                                                 <path id="Path_4997" data-name="Path 4997" d="M85.63,84.962c-.057.372-.119.744-.19,1.116-.682,5.919-.83,4.65-2.172,5.991-.357.063-.137-.2-1.388-6.16,1.6.106,3.21-.217,3.648-.939Z" transform="translate(-81.88 -84.962)" fill="#618598"/>
                                               </g>
                                             </g>
                                           </g>
                                           <path id="Path_4998" data-name="Path 4998" d="M82.746,73.861c-.057.868-.155,1.731-.288,2.595l-.1.009c-.438.722-2.045,1.045-3.648.939a25.243,25.243,0,0,0-1.262-4.33Z" transform="translate(-55.411 -52.282)" fill="#b3b3b3"/>
                                           <path id="Path_4999" data-name="Path 4999" d="M77.7,49.273l3.746,2.859c1.727-1.937,1.456-1.461,5.2-4.995,1.273.09,1.368,1.582,1,2.5a24.434,24.434,0,0,1-4.07,6.965,2.033,2.033,0,0,1-2.141.574L75.32,55.249c-5.081-2.593-1.083-8.134,2.384-5.976" transform="translate(-52.164 -33.726)" fill="#fff"/>
                                           <path id="Path_5000" data-name="Path 5000" d="M83.863,3.23a12.254,12.254,0,0,0-3.8-1.386c.038-.023.073-.048.113-.071C82.352.517,85.164-.793,88.017.855c3.126,1.8.585,3.271-1.592,4.528-.046.026-.1.05-.142.076A6.286,6.286,0,0,0,83.863,3.23" transform="translate(-57.283 -0.058)" fill="#466677"/>
                                           <path id="Path_5001" data-name="Path 5001" d="M76.606,7.349a7.9,7.9,0,0,0,3.97-2.025s.789-3.892-2.3-4.92c-6.308-2.1-6.385,4.666-6.385,4.666.391,1.72,1.836,2.279,4.719,2.279" transform="translate(-51.434 0)" fill="#618598"/>
                                           <path id="Path_5002" data-name="Path 5002" d="M157.057,190.689l12.29-7.142,1-3.707-12.29,7.142Z" transform="translate(-112.371 -128.672)" fill="#9e2d31"/>
                                           <path id="Path_5003" data-name="Path 5003" d="M140.439,175.357l12.29-7.142-8.007-4.623-12.29,7.142Z" transform="translate(-94.752 -117.047)" fill="#c93b40"/>
                                           <path id="Path_5004" data-name="Path 5004" d="M132.432,188.694l.977,4.849,6.03,3.481,1-3.707Z" transform="translate(-94.752 -135.007)" fill="#c93b40"/>
                                           <path id="Path_5005" data-name="Path 5005" d="M158.119,174.8l12.29-7.142-.976-4.844-12.29,7.142Z" transform="translate(-112.432 -116.491)" fill="#b83338"/>
                                           <path id="Path_5006" data-name="Path 5006" d="M141.979,161.2l12.29-7.142-6.03-3.481-12.29,7.142Z" transform="translate(-97.269 -107.737)" fill="#e34248"/>
                                           <path id="Path_5007" data-name="Path 5007" d="M133.433,175.683l-1,3.7,8.007,4.623-.976-4.844Z" transform="translate(-94.753 -125.697)" fill="#e34248"/>
                                           <path id="Path_5008" data-name="Path 5008" d="M177.626,192.487l1.976-1.147.321-1.19-1.976,1.147Z" transform="translate(-127.088 -136.049)" fill="#999"/>
                                           <path id="Path_5009" data-name="Path 5009" d="M177.953,187.388l1.976-1.147-.314-1.555-1.976,1.147Z" transform="translate(-127.098 -132.14)" fill="#fff"/>
                                           <path id="Path_5010" data-name="Path 5010" d="M157.186,157.066,160,155.441a.791.791,0,0,1,.8-.077l.55.32a.789.789,0,0,1,.332.725l0,1.325-.742.428-.554-.322,0-1.123-2.644,1.527a.837.837,0,0,0-.38.658l0,1.326-.742.428-.554-.322,0-1.325a2.475,2.475,0,0,1,1.12-1.943" transform="translate(-111.662 -111.105)" fill="#4d4d4d"/>
                                           <path id="Path_5011" data-name="Path 5011" d="M159.132,158.2a2.475,2.475,0,0,0-1.12,1.943l0,1.325.742-.428,0-1.325a.837.837,0,0,1,.38-.658l2.815-1.625c.211-.121.382-.024.382.218l0,1.325.742-.429,0-1.325c0-.715-.509-1-1.127-.646Z" transform="translate(-113.054 -111.914)" fill="#1a1a1a"/>
                                           <path id="Path_5012" data-name="Path 5012" d="M144.182,200.234l-25.761,13.927v.946l2.534,1.463L146.715,201.7v-.946Z" transform="translate(-84.728 -143.263)" fill="#b3b3b3"/>
                                           <path id="Path_5013" data-name="Path 5013" d="M144.182,196.908l-25.761,14.874,2.534,1.463,25.761-14.874Z" transform="translate(-84.728 -140.884)" fill="gray"/>
                                           <path id="Path_5014" data-name="Path 5014" d="M126.589,247.14a1.328,1.328,0,0,0-1.2,0,.366.366,0,0,0,0,.694,1.328,1.328,0,0,0,1.2,0,.366.366,0,0,0,0-.694" transform="translate(-89.533 -176.721)" fill="#00a9d4"/>
                                           <path id="Path_5015" data-name="Path 5015" d="M206.625,200.93a1.328,1.328,0,0,0-1.2,0,.366.366,0,0,0,0,.694,1.328,1.328,0,0,0,1.2,0,.366.366,0,0,0,0-.694" transform="translate(-146.798 -143.659)" fill="#00a9d4"/>
                                           <path id="Path_5016" data-name="Path 5016" d="M165.964,224.511l-2.155,1.245a.366.366,0,0,0,0,.694l.3.172,3.358-1.938-.3-.173a1.329,1.329,0,0,0-1.2,0" transform="translate(-117.024 -160.53)" fill="#005b72"/>
                                           <path id="Path_5017" data-name="Path 5017" d="M165.486,228.364l3.358-1.938v-.946l-3.358,1.938Z" transform="translate(-118.401 -161.326)" fill="#00a9d4"/>
                                           <path id="Path_5018" data-name="Path 5018" d="M127.186,217.966l-5.959,3.429c-.032.011-.065.063-.065.143a.482.482,0,0,0,.219.378.151.151,0,0,0,.153.014l5.959-3.428.8-.239.6-.581-.308-.535-.794.244Z" transform="translate(-86.689 -155.364)" fill="#999"/>
                                           <path id="Path_5019" data-name="Path 5019" d="M106.932,232.465l4.093-2.014a.384.384,0,0,1,.364.044,1.087,1.087,0,0,1,.492.853.387.387,0,0,1-.146.343l-3.8,2.519a.5.5,0,0,0,.211-.465,1.566,1.566,0,0,0-.71-1.231.5.5,0,0,0-.5-.049" transform="translate(-76.508 -164.863)" fill="#e62a49"/>
                                           <path id="Path_5020" data-name="Path 5020" d="M106.191,237.946c0-.455.318-.641.711-.416a1.566,1.566,0,0,1,.71,1.231c0,.455-.318.641-.71.417a1.567,1.567,0,0,1-.711-1.232" transform="translate(-75.977 -169.88)" fill="#9c0e25"/>
                                           <path id="Path_5021" data-name="Path 5021" d="M145.666,217.682l-.67.5-.391-.678.753-.356Z" transform="translate(-103.461 -155.364)" fill="#e6e6e6"/>
                                           <path id="Path_5022" data-name="Path 5022" d="M143.439,219.214l.419-.137-.392-.678-.325.272a.312.312,0,0,0,.3.544" transform="translate(-102.323 -156.26)" fill="#b3b3b3"/>
                                         </g>
                                       </g>
                                     </g>
                                   </g>
                                   <g id="Group_2344" data-name="Group 2344" transform="translate(168.842 454.123)">
                                     <path id="Path_8280" data-name="Path 8280" d="M259.831,124.985a1.288,1.288,0,0,0-.585-1.013l-.547-.316a.414.414,0,0,0-.417-.041l14.87-8.632a.414.414,0,0,1,.417.041l.548.316a1.289,1.289,0,0,1,.585,1.013.411.411,0,0,1-.171.376l-14.871,8.632a.41.41,0,0,0,.171-.376" transform="translate(-253.862 -114.661)" fill="#bd8b55"/>
                                     <path id="Path_8281" data-name="Path 8281" d="M277.084,121.277a1.421,1.421,0,0,0-.645-1.117l-.6-.349a.372.372,0,0,0-.424.045c-.024-.052.02-.129.1-.171l9.6-5.591a.457.457,0,0,1,.461.045l.6.349a1.42,1.42,0,0,1,.645,1.117.453.453,0,0,1-.189.415l-9.439,5.5a.208.208,0,0,1-.256,0,1.178,1.178,0,0,1,.129-.075c.029-.042.019-.071.019-.166" transform="translate(-265.567 -114.05)" fill="#e34248"/>
                                     <path id="Path_8282" data-name="Path 8282" d="M260.222,150.737l2.124-.153,1.19-.691,0-2.169-1.193.693-2.125.146Z" transform="translate(-255.188 -137.071)" fill="#4f4f4f"/>
                                     <path id="Path_8283" data-name="Path 8283" d="M249.346,144.1l-5.027-2.9-.008,2.171,5.034,2.905Z" transform="translate(-244.311 -132.613)" fill="#585858"/>
                                     <path id="Path_8284" data-name="Path 8284" d="M251.486,140.893l1.192-.694-6.029-3.48-2.317,1.42,5.028,2.9Z" transform="translate(-244.326 -129.547)" fill="#373737"/>
                                     <path id="Path_8285" data-name="Path 8285" d="M251.247,148.376c.324.187.588.037.588-.335a1.289,1.289,0,0,0-.585-1.013l-.547-.316c-.324-.187-.587-.037-.588.335a1.287,1.287,0,0,0,.585,1.013Z" transform="translate(-248.279 -136.324)" fill="#bd8b55"/>
                                   </g>
                                 </g>
                                 <path id="Path_9206" data-name="Path 9206" d="M4.712,112.255l-.926.8-2.144.706L1,114l-.872.792c-.364.4.131.747.6.453l1.166-.553-.151,1.387-.6.829-.981.566,1,.342,2.809-1.054.981-1.849L6,113.471Z" transform="translate(185.698 -13.251)" fill="#f4c6b4"/>
                                 <path id="Path_9207" data-name="Path 9207" d="M26.265,57.136,21.793,64.7l-8.178,7.153c1.086.371,1.4,1.032,1.173,1.858,2.977-.661,6.366-2.495,9.79-4.742,2.282-1.981,4.472-5.135,6.639-8.58,3.252-5.715-3.266-6.619-4.952-3.251" transform="translate(175.869 27.954)" fill="#fff"/>
                               </g>
                               <g id="Group_2632" data-name="Group 2632" transform="translate(276.235 222.295)">
                                 <g id="Group_2634" data-name="Group 2634" transform="translate(0 0)">
                                   <path id="Path_10145" data-name="Path 10145" d="M14.252,33.639,18.423,26.4,31.7,16.953l-30.392-6.3L-6.52,19.337l-2.043,9.279Z" transform="translate(12.08)" fill="#fff"/>
                                   <path id="Path_10121" data-name="Path 10121" d="M100.771,96.006s2.8-1.062,4.614.642l.3,1.276a5.42,5.42,0,0,1-5.426-.148c.117-.473.511-1.77.511-1.77" transform="translate(-93.409 -83.905)" fill="#91b1b3"/>
                                   <path id="Path_10125" data-name="Path 10125" d="M209.748,156.992l1.974-.253a6.335,6.335,0,0,0,1.5-.608c.382-.181,1.363-1.4.85-1.568-.309-.1-1.62.485-1.75.14a.586.586,0,0,1,.022-.458,1.419,1.419,0,0,1,.166-.238c.161-.206.621-.972.249-1.181a.111.111,0,0,0-.067-.017.135.135,0,0,0-.068.038,3.491,3.491,0,0,0-.361.393c-.238.284-.489.556-.731.835l-.018.021a1.474,1.474,0,0,1-.72.466,2.862,2.862,0,0,0-1.191.848Z" transform="translate(-181.483 -129.666)" fill="#617f88"/>
                                   <path id="Path_10126" data-name="Path 10126" d="M76.656,120.27l-7.534.434,2.708-11.347c.334-1.1-.41-1.855-1.545-2-.9-.114-1.481.092-1.723.439-1.757,2.512-2.28,7.3-2.583,10.795a33.076,33.076,0,0,0-.063,5.4c4.692.861,10.478-1.665,10.478-1.665Z" transform="translate(-65.829 -93.234)" fill="#2a424b"/>
                                   <path id="Path_10127" data-name="Path 10127" d="M92.836,386.919a4.1,4.1,0,0,0-.245,2.36s.175,1.056,2.221.72a4.173,4.173,0,0,0,1.308-.4c.314-.175.467-.382.848-.442.561-.088,1.132-.082,1.69-.173a4.575,4.575,0,0,0,1.507-.516,2.612,2.612,0,0,0,.387-.263c1.293-1.079,1.485-1.573,1.081-2.159-.258-.374-.851-.612-3.12-.249a15.116,15.116,0,0,1-2.168.465,1.816,1.816,0,0,1-.848-.148,2.2,2.2,0,0,0-1.3-.094,1.759,1.759,0,0,0-1.366.9" transform="translate(-87.206 -316.148)" fill="#2a424b"/>
                                   <path id="Path_10128" data-name="Path 10128" d="M93.985,388.6c-.094-.478.527-1,1.386-1.171s1.632.082,1.725.559-.527,1-1.386,1.171-1.632-.082-1.726-.559" transform="translate(-88.375 -317.556)" fill="#2a424b"/>
                                   <path id="Path_10129" data-name="Path 10129" d="M131.582,408.956a4.094,4.094,0,0,0-.346,2.347s.129,1.063,2.188.815a4.18,4.18,0,0,0,1.324-.343c.322-.162.483-.361.866-.4.564-.064,1.135-.033,1.7-.1a4.576,4.576,0,0,0,1.528-.451,2.6,2.6,0,0,0,.4-.247c1.339-1.022,1.551-1.508,1.173-2.11-.241-.385-.824-.648-3.106-.383a15.094,15.094,0,0,1-2.186.371,1.816,1.816,0,0,1-.841-.185,2.205,2.205,0,0,0-1.29-.15,1.759,1.759,0,0,0-1.4.841" transform="translate(-118.185 -334.056)" fill="#2a424b"/>
                                   <path id="Path_10130" data-name="Path 10130" d="M132.978,409.674c-.073-.481.569-.978,1.435-1.11s1.627.152,1.7.633-.569.978-1.435,1.11-1.627-.152-1.7-.633" transform="translate(-119.612 -334.505)" fill="#2a424b"/>
                                   <path id="Path_10131" data-name="Path 10131" d="M101.235,217.945l.261,7.523.23,12.121-.687,18.428s-1.545,1.054-5.15.055c0-1.821.15-16.374.15-16.374l-1.8-14.471.024,13.7-.786,12.785a9.4,9.4,0,0,1-5.523.1c0-.579.553-12.6.553-12.6l-.7-17.953.368-3.742a13.174,13.174,0,0,0,5.57,1.54c5.247.353,7.493-1.118,7.493-1.118" transform="translate(-83.432 -181.505)" fill="#475c64"/>
                                   <path id="Path_10132" data-name="Path 10132" d="M78.627,125.724a13.17,13.17,0,0,0,5.57,1.54c5.247.353,7.493-1.118,7.493-1.118l-.174-1.138s-.226-6.652-.372-9.4c-.111-2.1-.321-8.085-1.257-9.853-1.4-2.647-7-3.163-10.652-2.674-4.094.548-3.39,3.743-3.137,5.25,1.567,9.328,2.771,13.808,2.771,13.808Z" transform="translate(-73.886 -89.704)" fill="#2a424b"/>
                                   <path id="Path_10133" data-name="Path 10133" d="M104.958,49.931c-.357-.835-1.421-1.959-4.163-1.736s-3.32,2.247-3.176,4.641a4.447,4.447,0,0,0,1.516,3.222.827.827,0,0,1,.266.838c-.206.841-.571,2.346-.571,2.346.006.493.912.964,2.023,1.052s2.006-.241,2-.734l-.037-2.707a2.344,2.344,0,0,0,2.546-2.156,9.264,9.264,0,0,0-.4-4.765" transform="translate(-91.277 -45.847)" fill="#f9c3c0"/>
                                   <path id="Path_10134" data-name="Path 10134" d="M101.038,97.322s1.181,1.627,4.614.642l.3,1.276s-3.046,1.676-5.359-.4c.12-.579.444-1.518.444-1.518" transform="translate(-93.676 -85.221)" fill="#ebf1f1"/>
                                   <path id="Path_10135" data-name="Path 10135" d="M148.47,122.876a56.775,56.775,0,0,1-7.946,2.476,22.171,22.171,0,0,1-2.438-3.182,39.735,39.735,0,0,1-3.6-7.161,13.54,13.54,0,0,1-.806-3.594c-.085-1.363.492-1.829,1.312-1.6,1.337.375,2.477.457,3.63,3.742.714,2.033,3.279,7.7,3.279,7.7l6.111-.8a2.444,2.444,0,0,1,.454,2.416" transform="translate(-120.174 -95.183)" fill="#2a424b"/>
                                   <path id="Path_10136" data-name="Path 10136" d="M98.429,47.912c.093-.458.188-.915.278-1.373.164-.836.711-.863,1.235-1.49a1.507,1.507,0,0,0,.352-1.383,1.463,1.463,0,0,0-.3-.507,2.974,2.974,0,0,0-1.644-.869c-.6-.133-1.156-.359-1.759-.481a3.218,3.218,0,0,0-3.363,1c-.165.225-.784.387-1.027.633a3.289,3.289,0,0,0-.743,1.253,6.163,6.163,0,0,0-.258,1.995c0,.239.07.46.076.7a2.837,2.837,0,0,0,.162.927,5.31,5.31,0,0,0,1.409,1.856c.2.2.445.32.642.519a1.236,1.236,0,0,0,.708.424,4.271,4.271,0,0,0,1.092-.126.338.338,0,0,1,.214.016c.063.036.093.137.035.181a2.441,2.441,0,0,0,1.333-.96,1.44,1.44,0,0,0,.194-1.444c-.134-.66-.087-1.41.464-1.644.524-.223.755.319.9.773" transform="translate(-86.151 -40.675)" fill="#7b502c"/>
                                   <path id="Path_10141" data-name="Path 10141" d="M115.746,69.417a.316.316,0,0,0,.253-.241,8.877,8.877,0,0,0,.161-3.552.316.316,0,0,0-.617.134,8.176,8.176,0,0,1-.082,2.9c-1.4-.627-2.575-1.26-2.588-1.267a.315.315,0,1,0-.3.555c.014.008,1.417.764,2.992,1.448a.315.315,0,0,0,.18.021" transform="translate(-103.14 -59.631)" fill="#2a424b"/>
                                   <path id="Path_10142" data-name="Path 10142" d="M93.014,46c.718,1.315,3.4,1.232,6-.185s4.118-3.631,3.4-4.946-3.4-1.232-6,.185S92.3,44.682,93.014,46" transform="translate(-87.463 -39.25)" fill="#d2dadc"/>
                                   <path id="Path_10143" data-name="Path 10143" d="M87.314,44.287c.718,1.315,3.4,1.232,6-.185s4.119-3.631,3.4-4.946l-.2-.357c-1.242-2.277-4.354-2.974-6.95-1.557s-3.693,4.411-2.45,6.687l.2.357" transform="translate(-82.472 -36.508)" fill="#b0bec3"/>
                                   <path id="Path_10144" data-name="Path 10144" d="M124.482,83.3s-.056,1.263-.666,1.451c.259-.014.724.022.9-.142a2.521,2.521,0,0,0,.491-1.614Z" transform="translate(-112.277 -73.742)" fill="#2a424b"/>
                                 </g>
                               </g>
                             </g>
                          </a>
                           </svg>

                     </div>
                  </div>
                  <div class="img_svg img_svg2">
                     <div class="c-firework"></div>
                     <div class="popup_1 popup_small" id="popup_2">
                        <div class="wrap_popup_small">
                           <p class="tt_name">経年変化もデザインの一部。<br>味わい深い家にしよう。</p>
                           <p class="btn"><a href="<?php echo home_url(); ?>/tree/">木の家を建てる<span class="bg_btn"></span></a></p>
                        </div>
                     </div>
                     <div id="map2" class="map_svg">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="519.411" height="293.2" viewBox="0 0 519.411 293.2">
  <defs>
    <clipPath id="clip-path">
      <rect id="Rectangle_524" data-name="Rectangle 524" width="244.636" height="106.18" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-2">
      <rect id="Rectangle_40" data-name="Rectangle 40" width="141.307" height="87" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-3">
      <rect id="Rectangle_785" data-name="Rectangle 785" width="39.773" height="43.196" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-5">
      <rect id="Rectangle_783" data-name="Rectangle 783" width="17.505" height="11.417" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-6">
      <rect id="Rectangle_794" data-name="Rectangle 794" width="80.942" height="104.961" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-7">
      <rect id="Rectangle_525" data-name="Rectangle 525" width="204.94" height="106.18" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-8">
      <rect id="Rectangle_612" data-name="Rectangle 612" width="47.387" height="108.767" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-10">
      <rect id="Rectangle_607" data-name="Rectangle 607" width="5.437" height="46.719" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-11">
      <rect id="Rectangle_608" data-name="Rectangle 608" width="10.281" height="5.134" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-12">
      <rect id="Rectangle_609" data-name="Rectangle 609" width="6.574" height="8.585" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-13">
      <rect id="Rectangle_610" data-name="Rectangle 610" width="14.462" height="6.616" fill="none"/>
    </clipPath>
  </defs>
  <a xlink:href="#popup_2" data-popup="popup_2" data-id="2">
  <g id="Group_3228" data-name="Group 3228" transform="translate(-1177.072 -1435.381)">
    <path id="Path_10004" data-name="Path 10004" d="M512.209,263.126a1.708,1.708,0,0,1-1.708-1.708V180.14a1.708,1.708,0,1,1,3.416,0v81.278a1.708,1.708,0,0,1-1.708,1.708" transform="translate(1182.565 1307.525)" fill="#9d8769"/>
    <path id="Path_10370" data-name="Path 10370" d="M512.209,263.126a1.708,1.708,0,0,1-1.708-1.708V180.14a1.708,1.708,0,1,1,3.416,0v81.278a1.708,1.708,0,0,1-1.708,1.708" transform="translate(1174.053 1407.266)" fill="#9d8769"/>
    <g id="Component_11_4" data-name="Component 11 – 4" transform="translate(1177.072 1435.381)">
      <g id="Group_1779" data-name="Group 1779" transform="matrix(-0.999, -0.052, 0.052, -0.999, 513.853, 162.989)">
        <path id="Path_6151" data-name="Path 6151" d="M0,0,12.806,1.57,5.043,11.876Z" transform="translate(2.269 83.354)" fill="#fff"/>
        <path id="Path_6152" data-name="Path 6152" d="M0,0,12.552,2.987,3.689,12.364Z" transform="translate(13.74 70.625)" fill="#cda443"/>
        <path id="Path_6153" data-name="Path 6153" d="M0,0,12.33,3.8,2.874,12.579Z" transform="translate(27.009 57.785)" fill="#708dc9"/>
        <path id="Path_6154" data-name="Path 6154" d="M0,0,11.8,5.217,1.383,12.828Z" transform="translate(41.336 44.744)" fill="#ab5e62"/>
        <path id="Path_6155" data-name="Path 6155" d="M0,0,11.206,6.4.064,12.9Z" transform="translate(59.273 32.882)" fill="#fff"/>
        <path id="Path_6156" data-name="Path 6156" d="M1.231,0,11.738,7.488,0,12.844Z" transform="translate(76.406 22.274)" fill="#cda443"/>
        <path id="Path_6157" data-name="Path 6157" d="M1.854,0,11.985,7.99,0,12.769Z" transform="translate(95.597 13.586)" fill="#708dc9"/>
        <path id="Path_6158" data-name="Path 6158" d="M3.742,0l8.823,9.415L0,12.348Z" transform="translate(114.526 7.488)" fill="#ab5e62"/>
        <path id="Path_6159" data-name="Path 6159" d="M4.831,0l7.945,10.166L0,11.964Z" transform="translate(133.446 2.973)" fill="#fff"/>
        <path id="Path_6160" data-name="Path 6160" d="M6.111,0,12.9,10.973,0,11.363Z" transform="translate(153.673 0.196)" fill="#cda443"/>
        <path id="Path_6161" data-name="Path 6161" d="M0,10.821,7.027,0l5.857,11.5Z" transform="translate(172.667 0)" fill="#708dc9"/>
        <path id="Path_6162" data-name="Path 6162" d="M7.488,0l5.355,11.739L0,10.507Z" transform="translate(192.096 1.293)" fill="#ab5e62"/>
        <g id="Group_1455" data-name="Group 1455" transform="translate(0 0)">
          <g id="Group_1454" data-name="Group 1454" clip-path="url(#clip-path)">
            <path id="Path_6163" data-name="Path 6163" d="M173.447,0a204.479,204.479,0,0,0-67.428,11.416C47.436,31.786,14.449,72.483,0,94.928l.638.411c14.4-22.363,47.263-62.91,105.631-83.206C166.416-8.78,218.614,3.786,244.375,13.139l.26-.715A210.9,210.9,0,0,0,173.447,0" transform="translate(0 10.84)" fill="#a8835e"/>
          </g>
        </g>
      </g>
      <g id="Group_1567" data-name="Group 1567" transform="translate(-0.071 1.801)">
        <g id="Group_2346" data-name="Group 2346" transform="translate(95.711 8.447) rotate(-2)">
          <g id="Group_87" data-name="Group 87" transform="translate(0 0)" clip-path="url(#clip-path-2)">
            <path id="Path_1271" data-name="Path 1271" d="M36.943,14.682A8.5,8.5,0,0,0,30.468,6.44,8.479,8.479,0,0,0,15.056,3.972,8.45,8.45,0,0,0,3.028,10.02,8.464,8.464,0,0,0,6.564,24.755,8.494,8.494,0,0,0,13.5,28.649a8.413,8.413,0,0,0,12.866-.059,8.47,8.47,0,0,0,7.624-7.5,8.46,8.46,0,0,0,2.958-6.408" transform="translate(0 0)" fill="#a5b775"/>
            <path id="Path_1272" data-name="Path 1272" d="M30.882,1.1c.014.2.061.4.061.6a8.52,8.52,0,0,1-8.52,8.52,8.5,8.5,0,0,1-6.97-3.641A8.451,8.451,0,0,1,9.9,8.684,8.5,8.5,0,0,1,1.646,2.171,9.764,9.764,0,0,1,0,2.521,8.516,8.516,0,0,0,6.339,8.953a8.491,8.491,0,0,0,6.93,3.894,8.416,8.416,0,0,0,12.868-.059,8.465,8.465,0,0,0,7.62-7.5A8.5,8.5,0,0,0,36.636,0a8.412,8.412,0,0,1-4.363,1.238A8.628,8.628,0,0,1,30.882,1.1" transform="translate(0.153 15.802)" fill="#889a58"/>
            <path id="Path_1273" data-name="Path 1273" d="M36.943,14.682a8.5,8.5,0,0,0-6.476-8.245A8.481,8.481,0,0,0,15.054,3.97,8.451,8.451,0,0,0,3.025,10.016,8.467,8.467,0,0,0,6.564,24.753a8.488,8.488,0,0,0,6.928,3.894,8.416,8.416,0,0,0,12.871-.059,8.464,8.464,0,0,0,7.62-7.5,8.47,8.47,0,0,0,2.959-6.408" transform="translate(28.501 14.004)" fill="#a5b775"/>
            <path id="Path_1274" data-name="Path 1274" d="M30.88,1.1c.016.2.061.4.061.6a8.519,8.519,0,0,1-8.518,8.521,8.5,8.5,0,0,1-6.97-3.643,8.434,8.434,0,0,1-5.55,2.1A8.508,8.508,0,0,1,1.644,2.171,9.4,9.4,0,0,1,0,2.52,8.512,8.512,0,0,0,6.338,8.953a8.493,8.493,0,0,0,6.932,3.894,8.409,8.409,0,0,0,12.865-.059,8.466,8.466,0,0,0,7.624-7.5A8.5,8.5,0,0,0,36.633,0a8.418,8.418,0,0,1-4.361,1.238A8.669,8.669,0,0,1,30.88,1.1" transform="translate(28.655 29.804)" fill="#889a58"/>
            <path id="Path_1275" data-name="Path 1275" d="M36.942,14.682a8.5,8.5,0,0,0-6.476-8.245A8.48,8.48,0,0,0,15.053,3.972a8.41,8.41,0,0,0-3.672-.863,8.515,8.515,0,0,0-8.357,6.909A8.468,8.468,0,0,0,6.562,24.755a8.494,8.494,0,0,0,6.93,3.893,8.416,8.416,0,0,0,12.869-.061,8.461,8.461,0,0,0,7.62-7.5,8.466,8.466,0,0,0,2.961-6.408" transform="translate(56.305 29.81)" fill="#a5b775"/>
            <path id="Path_1276" data-name="Path 1276" d="M30.88,1.1c.016.206.061.4.061.606a8.517,8.517,0,0,1-8.518,8.518,8.5,8.5,0,0,1-6.97-3.639,8.453,8.453,0,0,1-5.55,2.1A8.51,8.51,0,0,1,1.644,2.171,9.24,9.24,0,0,1,0,2.521,8.514,8.514,0,0,0,6.338,8.957a8.5,8.5,0,0,0,6.932,3.893,8.411,8.411,0,0,0,12.865-.061,8.464,8.464,0,0,0,7.624-7.5A8.505,8.505,0,0,0,36.633,0a8.4,8.4,0,0,1-4.361,1.24A8.469,8.469,0,0,1,30.88,1.1" transform="translate(56.458 45.609)" fill="#889a58"/>
            <path id="Path_1277" data-name="Path 1277" d="M36.943,14.684a8.5,8.5,0,0,0-6.474-8.245A8.481,8.481,0,0,0,15.054,3.972a8.415,8.415,0,0,0-3.67-.863,8.515,8.515,0,0,0-8.357,6.909A8.466,8.466,0,0,0,6.564,24.755,8.5,8.5,0,0,0,13.5,28.647a8.412,8.412,0,0,0,12.867-.059,8.466,8.466,0,0,0,7.622-7.5,8.462,8.462,0,0,0,2.958-6.407" transform="translate(81.239 42.389)" fill="#a5b775"/>
            <path id="Path_1278" data-name="Path 1278" d="M30.884,1.1c.014.2.059.4.059.6a8.52,8.52,0,0,1-8.52,8.52,8.5,8.5,0,0,1-6.97-3.641,8.436,8.436,0,0,1-5.548,2.1A8.5,8.5,0,0,1,1.648,2.171,9.442,9.442,0,0,1,0,2.521,8.522,8.522,0,0,0,6.34,8.955a8.492,8.492,0,0,0,6.929,3.892,8.413,8.413,0,0,0,12.868-.059,8.462,8.462,0,0,0,7.621-7.5A8.5,8.5,0,0,0,36.636,0a8.412,8.412,0,0,1-4.361,1.24A8.39,8.39,0,0,1,30.884,1.1" transform="translate(81.392 58.189)" fill="#889a58"/>
            <path id="Path_1279" data-name="Path 1279" d="M36.941,14.684a8.5,8.5,0,0,0-6.472-8.245A8.48,8.48,0,0,0,15.056,3.97,8.454,8.454,0,0,0,3.027,10.018,8.466,8.466,0,0,0,6.564,24.755a8.5,8.5,0,0,0,6.93,3.894,8.416,8.416,0,0,0,12.869-.061,8.464,8.464,0,0,0,7.62-7.5,8.462,8.462,0,0,0,2.958-6.407" transform="translate(104.367 55.389)" fill="#a5b775"/>
            <path id="Path_1280" data-name="Path 1280" d="M30.884,1.1c.013.2.058.4.058.6a8.52,8.52,0,0,1-8.516,8.52,8.494,8.494,0,0,1-6.972-3.643A8.433,8.433,0,0,1,9.9,8.687,8.5,8.5,0,0,1,1.646,2.173,9.57,9.57,0,0,1,0,2.523,8.521,8.521,0,0,0,6.339,8.957a8.5,8.5,0,0,0,6.931,3.894,8.412,8.412,0,0,0,12.866-.061,8.466,8.466,0,0,0,7.623-7.5A8.5,8.5,0,0,0,36.634,0a8.415,8.415,0,0,1-4.361,1.24A8.574,8.574,0,0,1,30.884,1.1" transform="translate(104.521 71.187)" fill="#889a58"/>
          </g>
        </g>
        <g id="Group_3191" data-name="Group 3191" transform="translate(-11804.984 -5140.872)">
          <g id="Group_3189" data-name="Group 3189" transform="translate(11805.056 5139.071)">
            <path id="Path_12509" data-name="Path 12509" d="M29.263,24.518,92.334,60.933l47.448-23.365L76.712,1.154Z" transform="translate(-12.116 -0.478)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12510" data-name="Path 12510" d="M158.15,114.781l25.395-14.662V90.73L158.15,105.392Z" transform="translate(-65.482 -37.567)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12511" data-name="Path 12511" d="M158.15,121.417l1.409.814,25.395-14.662-1.409-.814Z" transform="translate(-65.482 -44.202)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12512" data-name="Path 12512" d="M201.49,103.978V105.6l1.409.814v-1.628Z" transform="translate(-83.426 -43.052)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12513" data-name="Path 12513" d="M158.15,129v1.627l1.409.814v-1.628Z" transform="translate(-65.482 -53.413)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12514" data-name="Path 12514" d="M160.555,118.4l1.409.814,22.576-13.035-1.409-.814Z" transform="translate(-66.478 -43.626)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12515" data-name="Path 12515" d="M201.49,93.507v6.135l1.409.813V94.321Z" transform="translate(-83.426 -38.716)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12516" data-name="Path 12516" d="M199.085,101.03l1.409.814V95.709l-1.409-.813Z" transform="translate(-82.431 -39.292)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12517" data-name="Path 12517" d="M158.15,118.529v6.135l1.409.813v-6.135Z" transform="translate(-65.482 -49.077)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12518" data-name="Path 12518" d="M201.49,92.357l1.409.814V91.542l-1.409-.813Z" transform="translate(-83.426 -37.567)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12519" data-name="Path 12519" d="M158.15,117.379l1.409.813v-1.627l-1.409-.813Z" transform="translate(-65.482 -47.927)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12520" data-name="Path 12520" d="M158.15,105.392l1.409.813,25.395-14.662-1.409-.813Z" transform="translate(-65.482 -37.567)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12521" data-name="Path 12521" d="M136.9,86.663l1.409.813,47.448-23.364-1.409-.814Z" transform="translate(-56.684 -26.209)" fill="#fff"/>
            <path id="Path_12522" data-name="Path 12522" d="M160.555,122.806l.118.067,25.395-14.662-.118-.067Z" transform="translate(-66.478 -44.777)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12523" data-name="Path 12523" d="M203.894,106.993l.118.067v-1.627l-.118-.069Z" transform="translate(-84.422 -43.626)" fill="#fff"/>
            <path id="Path_12524" data-name="Path 12524" d="M160.555,132.016l.118.067v-1.627l-.118-.069Z" transform="translate(-66.478 -53.987)" fill="#a0a0a4"/>
            <path id="Path_12525" data-name="Path 12525" d="M162.96,119.789l.118.067,22.575-13.034-.117-.068Z" transform="translate(-67.473 -44.202)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12526" data-name="Path 12526" d="M203.894,101.03l.118.069V94.963l-.118-.067Z" transform="translate(-84.422 -39.292)" fill="#fff"/>
            <path id="Path_12527" data-name="Path 12527" d="M201.489,102.419l.117.067V96.352l-.117-.069Z" transform="translate(-83.426 -39.866)" fill="#a0a0a4"/>
            <path id="Path_12528" data-name="Path 12528" d="M162.96,124.665l.118.067V118.6l-.118-.068Z" transform="translate(-67.473 -49.077)" fill="#6af"/>
            <path id="Path_12529" data-name="Path 12529" d="M160.555,126.052l.118.069v-6.136l-.118-.069Z" transform="translate(-66.478 -49.651)" fill="#a0a0a4"/>
            <path id="Path_12530" data-name="Path 12530" d="M162.96,109.318l.118.067,22.575-13.033-.117-.069Z" transform="translate(-67.473 -39.866)" fill="#6af" fill-rule="evenodd"/>
            <path id="Path_12531" data-name="Path 12531" d="M203.894,93.745l.118.067V92.186l-.118-.069Z" transform="translate(-84.422 -38.141)" fill="#fff"/>
            <path id="Path_12532" data-name="Path 12532" d="M160.555,118.766l.118.069v-1.628l-.118-.067Z" transform="translate(-66.478 -48.502)" fill="#a0a0a4"/>
            <path id="Path_12533" data-name="Path 12533" d="M160.555,106.779l.118.067,25.395-14.66-.118-.069Z" transform="translate(-66.478 -38.141)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12534" data-name="Path 12534" d="M139.306,88.051l.117.069,47.449-23.365-.118-.068Z" transform="translate(-57.679 -26.784)" fill="#fff"/>
            <path id="Path_12535" data-name="Path 12535" d="M139.306,86.9l.117.069L186.871,63.6l-.118-.068Z" transform="translate(-57.679 -26.306)" fill="#a0a0a4"/>
            <path id="Path_12536" data-name="Path 12536" d="M184.741,106.87,162.166,119.9l-1.409,2.441,25.395-14.662Z" transform="translate(-66.561 -44.249)" fill="#222" fill-rule="evenodd"/>
            <path id="Path_12537" data-name="Path 12537" d="M186.152,92.234l-25.395,14.66,1.409.814,22.575-13.034Z" transform="translate(-66.561 -38.19)" fill="#222" fill-rule="evenodd"/>
            <path id="Path_12538" data-name="Path 12538" d="M160.757,117.255v9.391l1.409-2.441v-6.135Z" transform="translate(-66.561 -48.549)" fill="#222" fill-rule="evenodd"/>
            <path id="Path_12539" data-name="Path 12539" d="M201.689,94.676v6.134l1.41.814V92.235Z" transform="translate(-83.509 -38.19)" fill="#222" fill-rule="evenodd"/>
            <path id="Path_12540" data-name="Path 12540" d="M185.737,96.4l-22.575,13.033v6.135l22.575-13.034Z" transform="translate(-67.557 -39.915)" fill="#059" fill-rule="evenodd"/>
            <path id="Path_12541" data-name="Path 12541" d="M123.622,199.019l8.132,4.7V174.391l-8.132-4.694Z" transform="translate(-51.185 -70.263)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12542" data-name="Path 12542" d="M83.557,72.951,28.268,41.028l-1.409.695L82.148,73.644Z" transform="translate(-11.121 -16.988)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12543" data-name="Path 12543" d="M122.626,169.7l-1.409.813v29.324l1.409-.814Z" transform="translate(-50.19 -70.263)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12544" data-name="Path 12544" d="M124.036,220.554l-1.41-.814-1.409.814,1.409.813Z" transform="translate(-50.19 -90.983)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12545" data-name="Path 12545" d="M124.036,170.51l-1.41-.813-1.409.813,1.409.814Z" transform="translate(-50.19 -70.263)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12546" data-name="Path 12546" d="M124.036,96.321l-1.41-.813-1.409.693,1.409.814Z" transform="translate(-50.19 -39.545)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12547" data-name="Path 12547" d="M125.032,173.861l-1.41.814v26.068l1.41-.813Z" transform="translate(-51.185 -71.987)" fill="#222" fill-rule="evenodd"/>
            <path id="Path_12548" data-name="Path 12548" d="M130.345,224.2l-5.313-3.067-1.41.813,5.314,3.069Z" transform="translate(-51.185 -91.559)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12549" data-name="Path 12549" d="M125.032,218.352l-1.41.813,5.314,3.069,1.409-.814Z" transform="translate(-51.185 -90.409)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12550" data-name="Path 12550" d="M130.345,174.153l-5.313-3.069-1.41.814,5.314,3.067Z" transform="translate(-51.185 -70.837)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12551" data-name="Path 12551" d="M130.345,99.964,125.032,96.9l-1.41.695,5.314,3.067Z" transform="translate(-51.185 -40.119)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12552" data-name="Path 12552" d="M134.1,226.363l-1.409.814,1.409.813,1.409-.813Z" transform="translate(-54.941 -93.726)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12553" data-name="Path 12553" d="M134.1,176.321l-1.409.813,1.409.814,1.409-.814Z" transform="translate(-54.941 -73.006)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12554" data-name="Path 12554" d="M135.509,102.945l-1.409-.813-1.409.693,1.409.814Z" transform="translate(-54.94 -42.288)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12555" data-name="Path 12555" d="M136.505,177.708l-1.409.814v29.322l1.409-.813Z" transform="translate(-55.936 -73.58)" fill="#222" fill-rule="evenodd"/>
            <path id="Path_12556" data-name="Path 12556" d="M136.505,103.519l-1.409.695,1.174.677,1.409-.693Z" transform="translate(-55.936 -42.862)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12557" data-name="Path 12557" d="M82.064,74.135,26.775,42.213l-.118.058L81.948,74.192Z" transform="translate(-11.037 -17.478)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12558" data-name="Path 12558" d="M121.018,171.152v29.324l.117-.068V171.085Z" transform="translate(-50.107 -70.838)" fill="#888"/>
            <path id="Path_12559" data-name="Path 12559" d="M122.543,221.942l-1.409-.813-.117.067,1.409.814Z" transform="translate(-50.107 -91.559)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12560" data-name="Path 12560" d="M122.543,171.9l-1.409-.814-.117.068,1.409.814Z" transform="translate(-50.107 -70.837)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12561" data-name="Path 12561" d="M122.543,97.505l-1.409-.814-.117.058,1.409.814Z" transform="translate(-50.107 -40.035)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12562" data-name="Path 12562" d="M123.422,175.318v26.068l.117-.067V175.251Z" transform="translate(-51.103 -72.563)" fill="#222"/>
            <path id="Path_12563" data-name="Path 12563" d="M128.853,225.585l-5.315-3.069-.117.069,5.313,3.067Z" transform="translate(-51.103 -92.133)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12564" data-name="Path 12564" d="M123.539,219.739l-.117.067,5.313,3.069.118-.067Z" transform="translate(-51.103 -90.983)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12565" data-name="Path 12565" d="M123.539,175.251l-.117.067,5.313,3.069.118-.069Z" transform="translate(-51.103 -72.563)" fill="#6af" fill-rule="evenodd"/>
            <path id="Path_12566" data-name="Path 12566" d="M128.853,175.541l-5.315-3.067-.117.067,5.313,3.067Z" transform="translate(-51.103 -71.413)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12567" data-name="Path 12567" d="M128.853,101.148l-5.315-3.067-.117.057,5.313,3.067Z" transform="translate(-51.103 -40.611)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12568" data-name="Path 12568" d="M132.49,180.554v26.068l.118-.067v-26.07Z" transform="translate(-54.857 -74.73)" fill="#059"/>
            <path id="Path_12569" data-name="Path 12569" d="M132.608,227.753l-.118.067,1.409.814.118-.069Z" transform="translate(-54.857 -94.301)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12570" data-name="Path 12570" d="M132.608,177.708l-.118.067,1.409.814.118-.067Z" transform="translate(-54.857 -73.58)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12571" data-name="Path 12571" d="M134.017,104.129l-1.409-.814-.118.058,1.409.814Z" transform="translate(-54.857 -42.778)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12572" data-name="Path 12572" d="M134.895,179.166v29.323l.118-.069V179.1Z" transform="translate(-55.853 -74.156)" fill="#222"/>
            <path id="Path_12573" data-name="Path 12573" d="M135.012,104.705l-.118.057,1.176.678.117-.057Z" transform="translate(-55.853 -43.353)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12574" data-name="Path 12574" d="M68.75,203.218l39.933,23.056-1.175-7.8-8.131-4.7Z" transform="translate(-28.466 -84.142)" fill="#757575" fill-rule="evenodd"/>
            <path id="Path_12575" data-name="Path 12575" d="M136.07,216.334V179.891l-1.175-.678v29.324Z" transform="translate(-55.853 -74.203)" fill="#757575" fill-rule="evenodd"/>
            <path id="Path_12576" data-name="Path 12576" d="M128.735,204.5V178.434l-5.313-3.069v26.068Z" transform="translate(-51.103 -72.61)" fill="#6af" fill-rule="evenodd"/>
            <path id="Path_12577" data-name="Path 12577" d="M122.427,199.709V173.641l-1.409-2.441v29.324Z" transform="translate(-50.107 -70.885)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12578" data-name="Path 12578" d="M133.9,208.537V179.213l-1.409.814V206.1Z" transform="translate(-54.857 -74.203)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12579" data-name="Path 12579" d="M129.149,175.895l-8.131-4.7,1.409,2.442,5.313,3.069Z" transform="translate(-50.107 -70.885)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12580" data-name="Path 12580" d="M127.74,222.923l-5.313-3.069-1.409.814,8.131,4.7Z" transform="translate(-50.107 -91.031)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12581" data-name="Path 12581" d="M99.377,188.029V158.705L68.751,141.024v36.443Z" transform="translate(-28.466 -58.391)" fill="#757575" fill-rule="evenodd"/>
            <path id="Path_12582" data-name="Path 12582" d="M42.091,214.97v1.357l3.25-3.233Z" transform="translate(-17.428 -88.231)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12583" data-name="Path 12583" d="M45.341,209l-3.25,3.233,15.621-9.02-3.25.52Z" transform="translate(-17.428 -84.142)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12584" data-name="Path 12584" d="M63.2,202.78l3.25-.52V200.9Z" transform="translate(-26.169 -83.184)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12585" data-name="Path 12585" d="M42.091,209.923l39.933,23.055,15.621-9.019L57.712,200.9Z" transform="translate(-17.428 -83.185)" fill="#eee" fill-rule="evenodd"/>
            <path id="Path_12586" data-name="Path 12586" d="M45.031,189.66l9.123-5.267V158.626l-9.123,5.267Z" transform="translate(-18.645 -65.679)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12587" data-name="Path 12587" d="M60.6,184.393l1.526.882V159.508l-1.526-.882Z" transform="translate(-25.091 -65.679)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12588" data-name="Path 12588" d="M45.031,207.868l1.527.882,9.121-5.267-1.526-.882Z" transform="translate(-18.645 -83.887)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12589" data-name="Path 12589" d="M45.031,163.892l1.527.882,9.121-5.267-1.526-.882Z" transform="translate(-18.645 -65.679)" fill="#bbb" fill-rule="evenodd"/>
            <path id="Path_12590" data-name="Path 12590" d="M45.031,193.381l1.527.882V168.5l-1.527-.882Z" transform="translate(-18.645 -69.401)" fill="#bbb" fill-rule="evenodd"/>
            <path id="Path_12591" data-name="Path 12591" d="M42.091,156.415V191.5l3.25-1.876V163.859Z" transform="translate(-17.428 -64.764)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12592" data-name="Path 12592" d="M57.712,141.024l-15.621,9.018,3.25,7.443,9.121-5.267Z" transform="translate(-17.428 -58.391)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12593" data-name="Path 12593" d="M63.2,152.22v25.767l3.25-1.876V141.025Z" transform="translate(-26.169 -58.391)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12594" data-name="Path 12594" d="M47.638,191.164l9.121-5.267V160.131L47.638,165.4Z" transform="translate(-19.724 -66.302)" fill="#444" fill-rule="evenodd"/>
            <path id="Path_12595" data-name="Path 12595" d="M0,50,64.6,87.3l15.621-7.692L15.62,42.313Z" transform="translate(0 -17.52)" fill="#fff"/>
            <path id="Path_12596" data-name="Path 12596" d="M110.242,95.457v.676l64.6-31.809v-.676Z" transform="translate(-45.645 -26.353)" fill="#222"/>
            <path id="Path_12597" data-name="Path 12597" d="M110.242,249.268v1.357l15.621-9.018v-1.358Z" transform="translate(-45.645 -99.475)" fill="#777"/>
            <path id="Path_12598" data-name="Path 12598" d="M139.841,95.537l25.395-14.66v9.389l-25.395,14.662Zm-29.6,1.074v44.927l15.621-9.018v36.444l48.975-28.276V64.8Z" transform="translate(-45.646 -26.832)" fill="#b7b6b6"/>
            <path id="Path_12599" data-name="Path 12599" d="M0,136.81l24.663,14.24V114.606L0,55.44Z" transform="translate(0 -22.955)" fill="#fff"/>
            <path id="Path_12600" data-name="Path 12600" d="M0,54.962,64.6,92.257V91.58L0,54.286Z" transform="translate(0 -22.477)" fill="#a0a0a4"/>
            <path id="Path_12601" data-name="Path 12601" d="M24.663,114.607,64.6,137.661V92.735L0,55.44Z" transform="translate(0 -22.955)" fill="#fff"/>
            <path id="Path_12602" data-name="Path 12602" d="M42.091,217.652l39.933,23.054V239.35L42.091,216.295Z" transform="translate(-17.428 -89.557)" fill="#eee"/>
            <path id="Path_12603" data-name="Path 12603" d="M64.6,0,0,31.809,64.6,69.1l64.477-31.876Z" transform="translate(0 0)" fill="#7c7c7c"/>
          </g>
          <g id="Group_3188" data-name="Group 3188" transform="translate(-469.039 544.952)">
            <path id="Path_11863" data-name="Path 11863" d="M761.255,135.084l-2.386-1.377v1.377l2.386,1.378Z" transform="translate(11694.713 4599.49)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11864" data-name="Path 11864" d="M657.447,190.332v1.377l16.7-9.641v-1.377Z" transform="translate(11735.781 4580.465)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11865" data-name="Path 11865" d="M786.932,148.971v1.378l2.385-1.378v-1.377Z" transform="translate(11683.35 4593.867)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11866" data-name="Path 11866" d="M786.932,148.971v1.378l2.385-1.378v-1.377Z" transform="translate(11683.35 4593.867)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11867" data-name="Path 11867" d="M762.879,136.021V137.4l14.313,8.263v-1.377Z" transform="translate(11693.09 4598.553)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11868" data-name="Path 11868" d="M755.6,149.908,709.561,176.49v1.378L755.6,151.286Z" transform="translate(11714.68 4592.93)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11869" data-name="Path 11869" d="M711.333,196.3l-1.773.354,41.807,24.136-.112-1.441Z" transform="translate(11714.68 4574.146)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11870" data-name="Path 11870" d="M709.561,194.578v1.378l1.773-.355Z" transform="translate(11714.68 4574.842)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11871" data-name="Path 11871" d="M816.846,256.562l-36.919-21.315-.11,1.313Z" transform="translate(11686.231 4558.374)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11872" data-name="Path 11872" d="M779.816,236.515l.11-1.313-.11-.064Z" transform="translate(11686.231 4558.417)" fill="#f7eee5"/>
            <path id="Path_11873" data-name="Path 11873" d="M779.74,236.472v-1.377l-.111-.064Z" transform="translate(11686.307 4558.461)" fill="#f7eee5"/>
            <path id="Path_11874" data-name="Path 11874" d="M816.846,257.456l-37.03-20,53.615,30.956v-.339L826.11,262.8Z" transform="translate(11686.231 4557.48)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11875" data-name="Path 11875" d="M703.925,222.7v-1.377l-1.55.9V223.6Z" transform="translate(11717.589 4564.01)" fill="gray" fill-rule="evenodd"/>
            <path id="Path_11876" data-name="Path 11876" d="M754.636,251.981V250.6l-1.551.9v1.377Z" transform="translate(11697.056 4552.155)" fill="gray" fill-rule="evenodd"/>
            <path id="Path_11877" data-name="Path 11877" d="M805.319,281.243v-1.378l-1.551.9v1.378Z" transform="translate(11676.532 4540.307)" fill="gray" fill-rule="evenodd"/>
            <path id="Path_11878" data-name="Path 11878" d="M845.862,300.491l16.7-9.641v-1.377l-16.7,9.64Z" transform="translate(11659.487 4536.416)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11879" data-name="Path 11879" d="M844.238,306.114v-1.378l-2.386-1.377v1.377Z" transform="translate(11661.111 4530.793)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11880" data-name="Path 11880" d="M655.824,197.332v-1.377l-2.385-1.378v1.378Z" transform="translate(11737.404 4574.842)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11881" data-name="Path 11881" d="M752.03,252.877V251.5l-1.55-.895v1.376Z" transform="translate(11698.109 4552.155)" fill="#fffbf0" fill-rule="evenodd"/>
            <path id="Path_11882" data-name="Path 11882" d="M701.32,223.6v-1.377l-1.551-.895V222.7Z" transform="translate(11718.645 4564.01)" fill="#fffbf0" fill-rule="evenodd"/>
            <path id="Path_11883" data-name="Path 11883" d="M802.713,282.139v-1.378l-1.551-.9v1.378Z" transform="translate(11677.588 4540.307)" fill="#fffbf0" fill-rule="evenodd"/>
            <path id="Path_11884" data-name="Path 11884" d="M653.439,194.578v1.378l114.505,66.11v-1.378Z" transform="translate(11737.404 4574.842)" fill="#aaa" fill-rule="evenodd"/>
            <path id="Path_11885" data-name="Path 11885" d="M686.835,168.992l97.807,56.469-16.7,9.64-114.506-66.11,65.125-37.6,16.7,9.641Z" transform="translate(11737.404 4600.427)" fill="#bbb" fill-rule="evenodd"/>
            <path id="Path_11886" data-name="Path 11886" d="M761.255,72.593l-2.386-1.378V108.4l2.386,1.378Z" transform="translate(11694.713 4624.794)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11887" data-name="Path 11887" d="M655.824,170.651V133.464l-2.385-1.377v37.186Z" transform="translate(11737.404 4600.146)" fill="#d0a984" fill-rule="evenodd"/>
            <path id="Path_11888" data-name="Path 11888" d="M657.447,127.841v37.187l16.7-9.641V118.2Z" transform="translate(11735.781 4605.769)" fill="#ddbea2" fill-rule="evenodd"/>
            <path id="Path_11889" data-name="Path 11889" d="M786.932,86.48v37.187l2.385-1.378V85.1Z" transform="translate(11683.35 4619.171)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11890" data-name="Path 11890" d="M762.879,73.531v37.187l14.313,8.264V81.794Z" transform="translate(11693.09 4623.857)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11891" data-name="Path 11891" d="M812.349,227.655V213.882l-28.627-16.527v13.774Z" transform="translate(11684.649 4573.717)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11892" data-name="Path 11892" d="M761.64,198.378V184.6l-28.627-16.527V181.85Z" transform="translate(11705.183 4585.572)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11893" data-name="Path 11893" d="M843.675,255.676l-1.432.825v8.264l1.432-.826Z" transform="translate(11660.953 4550.102)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11894" data-name="Path 11894" d="M843.675,269.562l-1.432.825,9.265,5.35,1.431-.827Z" transform="translate(11660.953 4544.479)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11895" data-name="Path 11895" d="M732.04,191.222l-1.431.827,28.627,16.527,1.431-.826Z" transform="translate(11706.156 4576.201)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11896" data-name="Path 11896" d="M782.749,220.5l-1.431.825,28.627,16.528,1.431-.827Z" transform="translate(11685.623 4564.345)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11897" data-name="Path 11897" d="M732.04,188.444l-1.431.827v1.653l1.431-.826Z" transform="translate(11706.156 4577.325)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11898" data-name="Path 11898" d="M780.145,216.217l-1.431.827V218.7l1.431-.825Z" transform="translate(11686.678 4566.079)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_11899" data-name="Path 11899" d="M782.749,217.722l-1.431.827V220.2l1.431-.825Z" transform="translate(11685.623 4565.47)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11900" data-name="Path 11900" d="M830.855,245.5l-1.431.825v1.654l1.431-.827Z" transform="translate(11666.144 4554.223)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_11901" data-name="Path 11901" d="M843.675,254.55V252.9l-1.432.827v1.653Z" transform="translate(11660.953 4551.227)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11902" data-name="Path 11902" d="M785.156,219.112l-1.432.827,25.764,14.874,1.431-.827Z" transform="translate(11684.649 4564.907)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11903" data-name="Path 11903" d="M734.444,189.833l-1.431.827,25.763,14.874,1.432-.825Z" transform="translate(11705.183 4576.763)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11904" data-name="Path 11904" d="M732.04,181.322V170.854l-1.431.827v10.467Z" transform="translate(11706.156 4584.448)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11905" data-name="Path 11905" d="M734.444,172.243l-1.431.827v10.467l1.431-.827Z" transform="translate(11705.183 4583.886)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_11906" data-name="Path 11906" d="M780.145,209.095V198.628l-1.431.827v10.467Z" transform="translate(11686.678 4573.202)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_11907" data-name="Path 11907" d="M782.749,210.6V200.133l-1.431.826v10.468Z" transform="translate(11685.623 4572.592)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11908" data-name="Path 11908" d="M785.156,201.521l-1.432.827v10.468l1.432-.827Z" transform="translate(11684.649 4572.03)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_11909" data-name="Path 11909" d="M830.855,238.374V227.905l-1.431.827V239.2Z" transform="translate(11666.144 4561.347)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_11910" data-name="Path 11910" d="M843.675,245.774V235.306l-1.432.827V246.6Z" transform="translate(11660.953 4558.35)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11911" data-name="Path 11911" d="M732.04,169.73v-1.652l-1.431.826v1.653Z" transform="translate(11706.156 4585.572)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11912" data-name="Path 11912" d="M780.145,197.5v-1.653l-1.431.826v1.653Z" transform="translate(11686.678 4574.326)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_11913" data-name="Path 11913" d="M782.749,199.008v-1.652l-1.431.826v1.653Z" transform="translate(11685.623 4573.717)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11914" data-name="Path 11914" d="M830.855,226.781v-1.653l-1.431.827v1.653Z" transform="translate(11666.144 4562.471)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_11915" data-name="Path 11915" d="M843.675,234.182V232.53l-1.432.827v1.653Z" transform="translate(11660.953 4559.474)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11916" data-name="Path 11916" d="M782.749,197.355l-1.431.827,28.627,16.528,1.431-.827Z" transform="translate(11685.623 4573.717)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11917" data-name="Path 11917" d="M732.04,168.077l-1.431.827,28.627,16.527,1.431-.826Z" transform="translate(11706.156 4585.573)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11918" data-name="Path 11918" d="M843.675,229.719v-4.132l-1.432.825v4.133Z" transform="translate(11660.953 4562.285)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11919" data-name="Path 11919" d="M843.675,225.587l-1.432.825,9.265,5.35,1.431-.827Z" transform="translate(11660.953 4562.285)" fill="#ead4bf" fill-rule="evenodd"/>
            <path id="Path_11920" data-name="Path 11920" d="M842.043,257.131V265.4l.119-.07v-8.264Z" transform="translate(11661.034 4549.54)" fill="#777"/>
            <path id="Path_11921" data-name="Path 11921" d="M842.162,270.949l-.118.07,9.265,5.349.118-.069Z" transform="translate(11661.033 4543.917)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11922" data-name="Path 11922" d="M730.527,192.61l-.12.069,28.626,16.528.12-.07Z" transform="translate(11706.238 4575.638)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11923" data-name="Path 11923" d="M781.238,221.888l-.118.068,28.626,16.528.119-.068Z" transform="translate(11685.703 4563.783)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11924" data-name="Path 11924" d="M730.407,189.9v1.653l.12-.068v-1.652Z" transform="translate(11706.238 4576.763)" fill="#777"/>
            <path id="Path_11925" data-name="Path 11925" d="M778.513,217.675v1.654l.12-.07v-1.653Z" transform="translate(11686.759 4565.517)" fill="#888"/>
            <path id="Path_11926" data-name="Path 11926" d="M781.119,219.18v1.653l.118-.068v-1.653Z" transform="translate(11685.703 4564.907)" fill="#777"/>
            <path id="Path_11927" data-name="Path 11927" d="M829.225,246.953v1.654l.118-.068v-1.654Z" transform="translate(11666.224 4553.661)" fill="#888"/>
            <path id="Path_11928" data-name="Path 11928" d="M842.043,254.355v1.652l.119-.068v-1.652Z" transform="translate(11661.034 4550.664)" fill="#777"/>
            <path id="Path_11929" data-name="Path 11929" d="M783.642,220.5l-.118.068,25.764,14.874.118-.068Z" transform="translate(11684.729 4564.345)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11930" data-name="Path 11930" d="M732.932,191.222l-.12.069,25.764,14.875.119-.07Z" transform="translate(11705.265 4576.201)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11931" data-name="Path 11931" d="M730.407,172.312v10.467l.12-.069V172.243Z" transform="translate(11706.238 4583.886)" fill="#777"/>
            <path id="Path_11932" data-name="Path 11932" d="M732.812,173.7v10.467l.12-.069V173.632Z" transform="translate(11705.265 4583.323)" fill="#888"/>
            <path id="Path_11933" data-name="Path 11933" d="M776.108,198.7v10.467l.118-.07V198.628Z" transform="translate(11687.732 4573.202)" fill="gray"/>
            <path id="Path_11934" data-name="Path 11934" d="M778.513,200.086v10.467l.12-.069V200.017Z" transform="translate(11686.759 4572.639)" fill="#888"/>
            <path id="Path_11935" data-name="Path 11935" d="M781.119,201.59v10.467l.118-.069V201.521Z" transform="translate(11685.703 4572.03)" fill="#777"/>
            <path id="Path_11936" data-name="Path 11936" d="M783.524,202.979v10.467l.118-.068V202.91Z" transform="translate(11684.729 4571.468)" fill="#888"/>
            <path id="Path_11937" data-name="Path 11937" d="M826.82,227.975v10.467l.118-.069V227.905Z" transform="translate(11667.198 4561.347)" fill="gray"/>
            <path id="Path_11938" data-name="Path 11938" d="M829.225,229.364v10.467l.118-.069V229.3Z" transform="translate(11666.224 4560.784)" fill="#888"/>
            <path id="Path_11939" data-name="Path 11939" d="M842.043,236.765v10.467l.119-.069V236.7Z" transform="translate(11661.034 4557.787)" fill="#777"/>
            <path id="Path_11940" data-name="Path 11940" d="M783.642,202.91l-.118.069,25.764,14.875.118-.07Z" transform="translate(11684.729 4571.468)" fill="#fffbf0" fill-rule="evenodd"/>
            <path id="Path_11941" data-name="Path 11941" d="M732.932,173.632l-.12.069,25.764,14.874.119-.069Z" transform="translate(11705.265 4583.323)" fill="#fffbf0" fill-rule="evenodd"/>
            <path id="Path_11942" data-name="Path 11942" d="M730.407,169.535v1.652l.12-.069v-1.653Z" transform="translate(11706.238 4585.01)" fill="#777"/>
            <path id="Path_11943" data-name="Path 11943" d="M778.513,197.308v1.653l.12-.068V197.24Z" transform="translate(11686.759 4573.764)" fill="#888"/>
            <path id="Path_11944" data-name="Path 11944" d="M781.119,198.813v1.652l.118-.069v-1.652Z" transform="translate(11685.703 4573.154)" fill="#777"/>
            <path id="Path_11945" data-name="Path 11945" d="M829.225,226.587v1.652l.118-.068v-1.652Z" transform="translate(11666.224 4561.908)" fill="#888"/>
            <path id="Path_11946" data-name="Path 11946" d="M842.043,233.989v1.652l.119-.068V233.92Z" transform="translate(11661.034 4558.911)" fill="#777"/>
            <path id="Path_11947" data-name="Path 11947" d="M781.238,198.744l-.118.069,28.626,16.527.119-.068Z" transform="translate(11685.703 4573.155)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11948" data-name="Path 11948" d="M730.527,169.466l-.12.069,28.626,16.527.12-.068Z" transform="translate(11706.238 4585.01)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11949" data-name="Path 11949" d="M842.043,227.044v4.132l.119-.069v-4.133Z" transform="translate(11661.034 4561.724)" fill="#777"/>
            <path id="Path_11950" data-name="Path 11950" d="M842.162,226.974l-.118.07,9.265,5.348.118-.069Z" transform="translate(11661.033 4561.724)" fill="#ead4bf" fill-rule="evenodd"/>
            <path id="Path_11951" data-name="Path 11951" d="M709.561,132.087l12.4,22.312,28.627,16.527.775-14.7Z" transform="translate(11714.68 4600.146)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11952" data-name="Path 11952" d="M712.539,194.851l39.923,23.05-.664-8.646-28.627-16.528Z" transform="translate(11713.474 4575.591)" fill="#ddbea2" fill-rule="evenodd"/>
            <path id="Path_11953" data-name="Path 11953" d="M709.561,132.087v37.187l1.773,1.023,10.632-2.125V154.4Z" transform="translate(11714.68 4600.146)" fill="#ddbea2" fill-rule="evenodd"/>
            <path id="Path_11954" data-name="Path 11954" d="M816.921,251.2l-7.628-12.668L780.666,222,780,229.884Z" transform="translate(11686.156 4563.736)" fill="#ddbea2" fill-rule="evenodd"/>
            <path id="Path_11955" data-name="Path 11955" d="M836.852,226.906l16.585-.057v-.027l-24.213-.189Z" transform="translate(11666.225 4561.861)" fill="#f7eee5"/>
            <path id="Path_11956" data-name="Path 11956" d="M779.816,172.648v37.187l.11.064.665-7.881V188.246Z" transform="translate(11686.231 4583.722)" fill="#ddbea2" fill-rule="evenodd"/>
            <path id="Path_11957" data-name="Path 11957" d="M778.513,187.351v13.774l.664,8.646.111.064V172.648Z" transform="translate(11686.759 4583.722)" fill="#ddbea2" fill-rule="evenodd"/>
            <path id="Path_11958" data-name="Path 11958" d="M829.225,226.633v13.774l7.628,12.668V226.906Z" transform="translate(11666.225 4561.861)" fill="#ddbea2" fill-rule="evenodd"/>
            <path id="Path_11959" data-name="Path 11959" d="M757.6,206.213l-25.764-14.875-1.431.826,28.627,16.528Z" transform="translate(11706.238 4576.154)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11960" data-name="Path 11960" d="M731.838,172.061,757.6,186.935l1.431-.826-28.627-16.528Z" transform="translate(11706.238 4584.963)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11961" data-name="Path 11961" d="M808.314,235.491,782.55,220.616l-1.431.825,28.627,16.528Z" transform="translate(11685.703 4564.298)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11962" data-name="Path 11962" d="M782.55,201.339l25.764,14.875,1.431-.827L781.119,198.86Z" transform="translate(11685.703 4573.108)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11963" data-name="Path 11963" d="M858.628,227l-16.585.057,9.265,5.349,7.321-4.085Z" transform="translate(11661.033 4561.715)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11964" data-name="Path 11964" d="M730.407,169.581v13.773l1.431-.827V172.06Z" transform="translate(11706.238 4584.963)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11965" data-name="Path 11965" d="M777.539,211.129V197.355l-1.431.827V208.65Z" transform="translate(11687.732 4573.717)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11966" data-name="Path 11966" d="M781.119,198.86v13.772l1.431-.825V201.339Z" transform="translate(11685.703 4573.108)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11967" data-name="Path 11967" d="M828.251,240.406V226.633l-1.431.827v10.467Z" transform="translate(11667.198 4561.862)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_11968" data-name="Path 11968" d="M833.431,204.962V203.6l-53.615-30.954.775,15.6,28.626,16.527Z" transform="translate(11686.231 4583.722)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11969" data-name="Path 11969" d="M699.769,158.226l1.551.9,1.55-.9-1.55-.9Z" transform="translate(11718.645 4589.924)" fill="#fffbf0" fill-rule="evenodd"/>
            <path id="Path_11970" data-name="Path 11970" d="M703.925,196.022V158.836l-1.55.895v37.187Z" transform="translate(11717.589 4589.314)" fill="#ddd3a2" fill-rule="evenodd"/>
            <path id="Path_11971" data-name="Path 11971" d="M732.812,184.215l25.764,14.875V188.622l-25.764-14.874Z" transform="translate(11705.265 4583.276)" fill="#a7d6e4" fill-rule="evenodd"/>
            <path id="Path_11972" data-name="Path 11972" d="M701.32,196.918V159.731l-1.551-.9v37.187Z" transform="translate(11718.645 4589.314)" fill="#f7eee6" fill-rule="evenodd"/>
            <path id="Path_11973" data-name="Path 11973" d="M750.481,187.5l1.55.9,1.551-.9-1.551-.9Z" transform="translate(11698.109 4578.068)" fill="#fffbf0" fill-rule="evenodd"/>
            <path id="Path_11974" data-name="Path 11974" d="M754.636,225.3V188.113l-1.551.9V226.2Z" transform="translate(11697.056 4577.459)" fill="#ddd3a2" fill-rule="evenodd"/>
            <path id="Path_11975" data-name="Path 11975" d="M783.524,213.493l25.764,14.874V217.9l-25.764-14.875Z" transform="translate(11684.729 4571.421)" fill="#a7d6e4" fill-rule="evenodd"/>
            <path id="Path_11976" data-name="Path 11976" d="M801.161,216.767l1.551.894,1.551-.894-1.551-.9Z" transform="translate(11677.588 4566.219)" fill="#fffbf0" fill-rule="evenodd"/>
            <path id="Path_11977" data-name="Path 11977" d="M805.319,254.562V217.376l-1.551.894v37.187Z" transform="translate(11676.532 4565.61)" fill="#ddd3a2" fill-rule="evenodd"/>
            <path id="Path_11978" data-name="Path 11978" d="M842.043,253.26l9.265,5.348V232.44l-9.265-5.349Z" transform="translate(11661.033 4561.676)" fill="#ead4bf" fill-rule="evenodd"/>
            <path id="Path_11979" data-name="Path 11979" d="M802.713,255.457V218.27l-1.551-.894v37.185Z" transform="translate(11677.588 4565.61)" fill="#f7eee6" fill-rule="evenodd"/>
            <path id="Path_11980" data-name="Path 11980" d="M752.03,226.2V189.009l-1.55-.9V225.3Z" transform="translate(11698.109 4577.459)" fill="#f7eee6" fill-rule="evenodd"/>
            <path id="Path_11981" data-name="Path 11981" d="M844.238,279.431V242.244l-2.386-1.377v37.187Z" transform="translate(11661.111 4556.098)" fill="#d0a984" fill-rule="evenodd"/>
            <path id="Path_11982" data-name="Path 11982" d="M761.255,67.965l-2.386-1.377v2.755l2.386,1.377Z" transform="translate(11694.713 4626.668)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11983" data-name="Path 11983" d="M657.447,123.212v2.755l16.7-9.641v-2.754Z" transform="translate(11735.781 4607.644)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11984" data-name="Path 11984" d="M789.317,80.474l-2.385,1.377v2.755l2.385-1.377Z" transform="translate(11683.35 4621.045)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11985" data-name="Path 11985" d="M786.932,81.852v2.755l2.385-1.377V80.474Z" transform="translate(11683.35 4621.045)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11986" data-name="Path 11986" d="M762.879,68.9v2.755l14.313,8.264V77.165Z" transform="translate(11693.09 4625.731)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11987" data-name="Path 11987" d="M755.6,82.789,709.561,109.37v2.755L755.6,85.543Z" transform="translate(11714.68 4620.108)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_11988" data-name="Path 11988" d="M781.351,169.509l-1.535,1.868,53.615,30.954v-.988l-4.264-4.227Z" transform="translate(11686.231 4584.993)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11989" data-name="Path 11989" d="M712.662,130.467l-3.1.964,41.807,24.137-1.535-3.641Z" transform="translate(11714.68 4600.802)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11990" data-name="Path 11990" d="M709.561,127.458v2.755l3.1-.964Z" transform="translate(11714.68 4602.021)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11991" data-name="Path 11991" d="M779.816,168.019v2.755l1.535-1.868Z" transform="translate(11686.231 4585.596)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11992" data-name="Path 11992" d="M777.236,166.529l1.535,3.641v-2.755Z" transform="translate(11687.276 4586.199)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11993" data-name="Path 11993" d="M844.238,240.37v-2.753l-2.386-1.378v2.755Z" transform="translate(11661.111 4557.972)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11994" data-name="Path 11994" d="M655.824,131.59v-2.755l-2.385-1.377v2.754Z" transform="translate(11737.404 4602.02)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11995" data-name="Path 11995" d="M653.439,127.458v2.755l114.505,66.109v-2.753Z" transform="translate(11737.404 4602.021)" fill="#d0a984" fill-rule="evenodd"/>
            <path id="Path_11996" data-name="Path 11996" d="M686.835,101.873l48.427-27.959-16.7-9.641-65.125,37.6Z" transform="translate(11737.404 4627.605)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11997" data-name="Path 11997" d="M653.439,127.458l114.505,66.11,16.7-9.641-97.807-56.469Z" transform="translate(11737.404 4602.021)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11998" data-name="Path 11998" d="M761.255,66.807l-2.386-1.377v.689l2.386,1.377Z" transform="translate(11694.713 4627.137)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_11999" data-name="Path 11999" d="M657.447,122.055v.688l16.7-9.641v-.688Z" transform="translate(11735.781 4608.112)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_12000" data-name="Path 12000" d="M789.317,79.317l-2.385,1.377v.689l2.385-1.378Z" transform="translate(11683.35 4621.514)" fill="#222" fill-rule="evenodd"/>
            <path id="Path_12001" data-name="Path 12001" d="M786.932,80.694v.688l2.385-1.377v-.689Z" transform="translate(11683.35 4621.514)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_12002" data-name="Path 12002" d="M762.879,67.744v.688L777.192,76.7v-.688Z" transform="translate(11693.09 4626.2)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12003" data-name="Path 12003" d="M755.6,81.631l-46.041,26.582v.689L755.6,82.32Z" transform="translate(11714.68 4620.577)" fill="#222" fill-rule="evenodd"/>
            <path id="Path_12004" data-name="Path 12004" d="M655.824,128.367v-.688l-2.385-1.378v.688Z" transform="translate(11737.404 4602.489)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12005" data-name="Path 12005" d="M671.76,136.879l-14.313-8.264v.689l14.313,8.264Z" transform="translate(11735.781 4601.552)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12006" data-name="Path 12006" d="M715.549,130.062l-.775.241,37.169,21.46-.384-.91Z" transform="translate(11712.568 4600.966)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12007" data-name="Path 12007" d="M709.561,126.3v.688l3.1,1.791.775-.241Z" transform="translate(11714.68 4602.489)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12008" data-name="Path 12008" d="M779.816,166.862v.688l1.535.887.384-.467Z" transform="translate(11686.231 4586.064)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12009" data-name="Path 12009" d="M776.59,165l.384.91,1.535.887v-.689Z" transform="translate(11687.537 4586.819)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12010" data-name="Path 12010" d="M782.78,168.724l-.384.467L830.211,196.8l-1.662-1.648Z" transform="translate(11685.187 4585.311)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12011" data-name="Path 12011" d="M858.551,218.879l-16.7,9.641v.689l16.7-9.64Z" transform="translate(11661.111 4565.001)" fill="#222" fill-rule="evenodd"/>
            <path id="Path_12012" data-name="Path 12012" d="M844.238,237.148v-.69l-2.386-1.377v.688Z" transform="translate(11661.111 4558.441)" fill="#d0a984" fill-rule="evenodd"/>
            <path id="Path_12013" data-name="Path 12013" d="M681.5,143.191l95.42,55.091v-.689L681.5,142.5Z" transform="translate(11726.042 4595.929)" fill="#a0a0a4" fill-rule="evenodd"/>
            <path id="Path_12014" data-name="Path 12014" d="M686.835,100.715l95.422,55.091-16.7,9.641L653.439,100.715l65.125-37.6,16.7,9.641Z" transform="translate(11737.404 4628.074)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_12015" data-name="Path 12015" d="M761.255,8.408l2.385-1.24-2.385-1.378-2.386,1.24Z" transform="translate(11694.713 4651.287)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12016" data-name="Path 12016" d="M758.869,2.4l2.386,1.377,2.385-1.24-2.385-1.377Z" transform="translate(11694.713 4653.163)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12017" data-name="Path 12017" d="M761.255,9.252l-2.386-1.378v34.25l2.386,1.377Z" transform="translate(11694.713 4650.443)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12018" data-name="Path 12018" d="M727.54,3.24,681.5,27.163l2.385,1.378L729.926,4.617Z" transform="translate(11726.042 4652.319)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12019" data-name="Path 12019" d="M653.439,56.754l2.385,1.378,16.7-8.677-2.385-1.377Z" transform="translate(11737.404 4634.164)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12020" data-name="Path 12020" d="M670.137,43.442l-16.7,8.677,2.385,1.378,16.7-8.677Z" transform="translate(11737.404 4636.041)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12021" data-name="Path 12021" d="M657.447,59.069V96.94l16.7-9.641V50.392Z" transform="translate(11735.781 4633.227)" fill="#ddbea2" fill-rule="evenodd"/>
            <path id="Path_12022" data-name="Path 12022" d="M762.879,9.346l14.313,8.264,2.385-1.24L765.264,8.106Z" transform="translate(11693.09 4650.349)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12023" data-name="Path 12023" d="M762.879,4.711l14.313,8.264,2.385-1.24L765.264,3.471Z" transform="translate(11693.09 4652.226)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12024" data-name="Path 12024" d="M786.932,23.233V57.482l2.385-1.377V21.993Z" transform="translate(11683.35 4644.726)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_12025" data-name="Path 12025" d="M762.879,10.189V44.439L777.192,52.7V18.453Z" transform="translate(11693.09 4649.506)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12026" data-name="Path 12026" d="M720.187,5.554l-62.74,32.6,14.313,8.264,62.74-32.6Z" transform="translate(11735.781 4651.382)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12027" data-name="Path 12027" d="M780.171,69.714l54.953,31.727L882,77.084l-95.42-55.091Z" transform="translate(11686.087 4644.726)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12028" data-name="Path 12028" d="M752.634,69.714l6.408-47.721L712.167,46.35Z" transform="translate(11713.624 4644.726)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12029" data-name="Path 12029" d="M712.167,41.715l95.42,55.091,46.876-24.357-95.42-55.092Z" transform="translate(11713.624 4646.603)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12030" data-name="Path 12030" d="M816,162.644V148.871l-23.258-13.428v13.773Z" transform="translate(11680.996 4598.787)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12031" data-name="Path 12031" d="M756.273,128.158V114.385l-23.259-13.428V114.73Z" transform="translate(11705.183 4612.751)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12032" data-name="Path 12032" d="M732.04,124.1l-1.431.827,23.258,13.428,1.432-.827Z" transform="translate(11706.156 4603.379)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12033" data-name="Path 12033" d="M791.771,158.588l-1.431.827L813.6,172.843l1.431-.827Z" transform="translate(11681.97 4589.415)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12034" data-name="Path 12034" d="M732.04,122.977v-1.653l-1.431.827V123.8Z" transform="translate(11706.156 4604.504)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_12035" data-name="Path 12035" d="M771.125,143.891l-1.432.827v1.653l1.432-.827Z" transform="translate(11690.33 4595.366)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12036" data-name="Path 12036" d="M791.771,157.463v-1.652l-1.431.826v1.653Z" transform="translate(11681.97 4590.54)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_12037" data-name="Path 12037" d="M830.855,178.376l-1.431.827v1.653l1.431-.827Z" transform="translate(11666.144 4581.402)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12038" data-name="Path 12038" d="M734.444,122.713l-1.431.827,20.4,11.776,1.431-.827Z" transform="translate(11705.183 4603.941)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12039" data-name="Path 12039" d="M794.175,157.2l-1.431.827,20.4,11.775,1.431-.826Z" transform="translate(11680.996 4589.978)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12040" data-name="Path 12040" d="M732.04,114.2V103.734l-1.431.827v10.467Z" transform="translate(11706.156 4611.626)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_12041" data-name="Path 12041" d="M734.444,105.123l-1.431.827v10.467l1.431-.827Z" transform="translate(11705.183 4611.064)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12042" data-name="Path 12042" d="M771.125,136.768V126.3l-1.432.827v10.467Z" transform="translate(11690.33 4602.489)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12043" data-name="Path 12043" d="M791.771,148.688V138.22l-1.431.827v10.467Z" transform="translate(11681.97 4597.662)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_12044" data-name="Path 12044" d="M794.175,139.609l-1.431.827V150.9l1.431-.827Z" transform="translate(11680.996 4597.1)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12045" data-name="Path 12045" d="M830.855,171.254V160.786l-1.431.827V172.08Z" transform="translate(11666.144 4588.525)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12046" data-name="Path 12046" d="M732.04,102.61v-1.652l-1.431.826v1.653Z" transform="translate(11706.156 4612.751)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_12047" data-name="Path 12047" d="M771.125,125.176v-1.652l-1.432.826V126Z" transform="translate(11690.33 4603.613)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12048" data-name="Path 12048" d="M791.771,137.1v-1.652l-1.431.826v1.653Z" transform="translate(11681.97 4598.787)" fill="#777" fill-rule="evenodd"/>
            <path id="Path_12049" data-name="Path 12049" d="M830.855,159.662v-1.653l-1.431.827v1.653Z" transform="translate(11666.144 4589.649)" fill="#888" fill-rule="evenodd"/>
            <path id="Path_12050" data-name="Path 12050" d="M732.04,100.957l-1.431.827,23.258,13.428,1.432-.827Z" transform="translate(11706.156 4612.751)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12051" data-name="Path 12051" d="M791.771,135.443l-1.431.827L813.6,149.7l1.431-.827Z" transform="translate(11681.97 4598.787)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12052" data-name="Path 12052" d="M780.038,102.187l-.2,1.457,53.718,31.013,1.431-.743Z" transform="translate(11686.221 4612.253)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12053" data-name="Path 12053" d="M751.465,87.746l.2-1.457L711.193,62.925l-1.431.744Z" transform="translate(11714.598 4628.151)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12054" data-name="Path 12054" d="M711.193,58.29l-1.431.744,95.42,55.091,1.431-.744Z" transform="translate(11714.598 4630.028)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12055" data-name="Path 12055" d="M730.527,125.491l-.12.069,23.259,13.428.118-.069Z" transform="translate(11706.238 4602.817)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12056" data-name="Path 12056" d="M790.258,159.976l-.12.069,23.26,13.428.118-.069Z" transform="translate(11682.052 4588.853)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12057" data-name="Path 12057" d="M730.407,122.782v1.652l.12-.069v-1.653Z" transform="translate(11706.238 4603.941)" fill="#777"/>
            <path id="Path_12058" data-name="Path 12058" d="M769.494,145.348V147l.118-.069v-1.653Z" transform="translate(11690.411 4594.804)" fill="#888"/>
            <path id="Path_12059" data-name="Path 12059" d="M790.138,157.268v1.652l.12-.069V157.2Z" transform="translate(11682.052 4589.977)" fill="#777"/>
            <path id="Path_12060" data-name="Path 12060" d="M829.225,179.834v1.652l.118-.068v-1.653Z" transform="translate(11666.224 4580.84)" fill="#888"/>
            <path id="Path_12061" data-name="Path 12061" d="M732.932,124.1l-.12.069,20.4,11.775.118-.068Z" transform="translate(11705.265 4603.379)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12062" data-name="Path 12062" d="M792.663,158.588l-.12.069,20.4,11.776.118-.069Z" transform="translate(11681.078 4589.415)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12063" data-name="Path 12063" d="M730.407,105.192V115.66l.12-.069V105.124Z" transform="translate(11706.238 4611.064)" fill="#777"/>
            <path id="Path_12064" data-name="Path 12064" d="M732.812,106.581v10.468l.12-.07V106.513Z" transform="translate(11705.265 4610.501)" fill="#888"/>
            <path id="Path_12065" data-name="Path 12065" d="M767.089,126.37v10.467l.118-.069V126.3Z" transform="translate(11691.385 4602.489)" fill="gray"/>
            <path id="Path_12066" data-name="Path 12066" d="M769.494,127.758v10.468l.118-.07V127.69Z" transform="translate(11690.411 4601.926)" fill="#888"/>
            <path id="Path_12067" data-name="Path 12067" d="M790.138,139.678v10.468l.12-.069V139.609Z" transform="translate(11682.052 4597.1)" fill="#777"/>
            <path id="Path_12068" data-name="Path 12068" d="M792.543,141.066v10.468l.12-.07V141Z" transform="translate(11681.078 4596.538)" fill="#888"/>
            <path id="Path_12069" data-name="Path 12069" d="M826.82,160.856v10.467l.118-.069V160.787Z" transform="translate(11667.198 4588.524)" fill="gray"/>
            <path id="Path_12070" data-name="Path 12070" d="M829.225,162.244v10.468l.118-.07V162.176Z" transform="translate(11666.224 4587.962)" fill="#888"/>
            <path id="Path_12071" data-name="Path 12071" d="M732.932,106.512l-.12.069,20.4,11.775.118-.068Z" transform="translate(11705.265 4610.502)" fill="#fffbf0" fill-rule="evenodd"/>
            <path id="Path_12072" data-name="Path 12072" d="M792.663,141l-.12.069,20.4,11.776.118-.069Z" transform="translate(11681.078 4596.538)" fill="#fffbf0" fill-rule="evenodd"/>
            <path id="Path_12073" data-name="Path 12073" d="M730.407,102.415v1.653l.12-.068v-1.653Z" transform="translate(11706.238 4612.188)" fill="#777"/>
            <path id="Path_12074" data-name="Path 12074" d="M769.494,124.981v1.652l.118-.068v-1.653Z" transform="translate(11690.411 4603.051)" fill="#888"/>
            <path id="Path_12075" data-name="Path 12075" d="M790.138,136.9v1.652l.12-.068v-1.653Z" transform="translate(11682.052 4598.225)" fill="#777"/>
            <path id="Path_12076" data-name="Path 12076" d="M829.225,159.466v1.653l.118-.068V159.4Z" transform="translate(11666.224 4589.087)" fill="#888"/>
            <path id="Path_12077" data-name="Path 12077" d="M730.527,102.346l-.12.069,23.259,13.428.118-.069Z" transform="translate(11706.238 4612.189)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12078" data-name="Path 12078" d="M790.258,136.832l-.12.069,23.26,13.428.118-.069Z" transform="translate(11682.052 4598.225)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12079" data-name="Path 12079" d="M779.832,104.636l-.015.121,53.615,30.954.118-.062Z" transform="translate(11686.231 4611.262)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12080" data-name="Path 12080" d="M751.383,88.252l-41.7-24.077-.12.062,41.807,24.137Z" transform="translate(11714.68 4627.646)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12081" data-name="Path 12081" d="M709.681,59.54l-.12.062,95.422,55.091.118-.062Z" transform="translate(11714.68 4629.522)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12082" data-name="Path 12082" d="M788.516,140.41l-7.747-4.473v11.015L757.51,133.524V122.647l-12.285-7.231v11.015L721.966,113V101.988L709.56,94.48v18.936L788.516,159Z" transform="translate(11714.68 4615.374)" fill="#ddbea2" fill-rule="evenodd"/>
            <path id="Path_12083" data-name="Path 12083" d="M721.966,87l23.259,13.428,6.143-12.013L709.561,64.279Z" transform="translate(11714.68 4627.604)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12084" data-name="Path 12084" d="M813.4,150.376l-23.259-13.428,1.431,2.479,20.4,11.776Z" transform="translate(11682.051 4598.178)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12085" data-name="Path 12085" d="M753.666,115.89l-23.259-13.428,1.431,2.479,20.4,11.776Z" transform="translate(11706.238 4612.142)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12086" data-name="Path 12086" d="M730.407,125.044l23.259,13.428-1.431-2.479-20.4-11.776Z" transform="translate(11706.238 4603.333)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12087" data-name="Path 12087" d="M790.138,159.53,813.4,172.958l-1.431-2.479-20.4-11.776Z" transform="translate(11682.052 4589.368)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12088" data-name="Path 12088" d="M790.138,136.947V150.72l1.431-.827V139.426Z" transform="translate(11682.052 4598.178)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12089" data-name="Path 12089" d="M826.82,160.34v10.467l1.431,2.479V159.513Z" transform="translate(11667.198 4589.04)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12090" data-name="Path 12090" d="M730.407,102.461v13.773l1.431-.827V104.941Z" transform="translate(11706.238 4612.142)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12091" data-name="Path 12091" d="M767.089,125.854v10.467l1.431,2.479V125.027Z" transform="translate(11691.385 4603.004)" fill="#fff" fill-rule="evenodd"/>
            <path id="Path_12092" data-name="Path 12092" d="M833.431,137.19v-1.4L779.816,104.84l6.142,19.107,23.259,13.428Z" transform="translate(11686.231 4611.179)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12093" data-name="Path 12093" d="M732.812,117.1l20.4,11.776V118.4l-20.4-11.776Z" transform="translate(11705.265 4610.455)" fill="#a7d6e4" fill-rule="evenodd"/>
            <path id="Path_12094" data-name="Path 12094" d="M792.543,151.581l20.4,11.776V152.889l-20.4-11.776Z" transform="translate(11681.077 4596.491)" fill="#a7d6e4" fill-rule="evenodd"/>
            <path id="Path_12095" data-name="Path 12095" d="M698.2,59.644l-16.7,8.677,95.42,55.091,16.7-8.677Z" transform="translate(11726.042 4629.48)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12096" data-name="Path 12096" d="M858.551,152.223l-16.7,8.677,2.386,1.378,16.7-8.677Z" transform="translate(11661.111 4591.992)" fill="#f7eee5" fill-rule="evenodd"/>
            <path id="Path_12097" data-name="Path 12097" d="M844.238,210.687V172.816l-2.386-1.377V209.31Z" transform="translate(11661.111 4584.211)" fill="#d0a984" fill-rule="evenodd"/>
            <path id="Path_12098" data-name="Path 12098" d="M653.439,60.781l114.505,66.11v-2.758L653.439,58.023Z" transform="translate(11737.404 4630.136)" fill="#d0a984" fill-rule="evenodd"/>
            <path id="Path_12099" data-name="Path 12099" d="M767.945,123.665v-.688L653.44,56.867v.688Z" transform="translate(11737.404 4630.604)" fill="#555" fill-rule="evenodd"/>
            <path id="Path_12100" data-name="Path 12100" d="M655.824,102.6l-2.385-1.378V62.658l2.385,1.377Z" transform="translate(11737.404 4628.259)" fill="#d0a984" fill-rule="evenodd"/>
            <path id="Path_12101" data-name="Path 12101" d="M718.563,0l-65.125,33.84,114.506,66.11,65.125-33.841Z" transform="translate(11737.404 4653.632)" fill="#777"/>
            <path id="Path_12102" data-name="Path 12102" d="M910.986,111.095V190.66l-65.125,37.6V144.935Z" transform="translate(11659.487 4608.646)" fill="#ddbea2" fill-rule="evenodd"/>
            <path id="Path_12103" data-name="Path 12103" d="M910.986,244.145l-65.125,37.6v-1.378l65.125-37.187Z" transform="translate(11659.487 4555.161)" fill="#aaa" fill-rule="evenodd"/>
          </g>
        </g>
        <g id="Group_2327" data-name="Group 2327" transform="translate(70.119 0.294)">
          <g id="Group_2332" data-name="Group 2332">
            <g id="Group_2331" data-name="Group 2331">
              <g id="Group_2330" data-name="Group 2330">
                <path id="Path_9167" data-name="Path 9167" d="M47.772,132.385a4.778,4.778,0,0,1,.679,3.815,3.229,3.229,0,0,1-2.83.591c-2.244.285-3.431.807-4.632.7a3.681,3.681,0,0,1-3.016-1.386,1.307,1.307,0,0,1,.766-1.873,13.108,13.108,0,0,0,4.278-1.487l1.048-3.112,3.271,1.673Z" transform="translate(-19.106 -94.311)" fill="#4e4e4e"/>
                <path id="Path_9168" data-name="Path 9168" d="M3.216,101.53l-2.028,1.954s-1.926.736-.873,1.9a4.166,4.166,0,0,0,1.968.722c1.4-.032.954.076,3.788-2.188l1.8-.63a2.1,2.1,0,0,0,1.656-2.038l-.134-.71L7.862,97.914l-1.393.032-3.249.932Z" transform="translate(30.248 -71.234)" fill="#4e4e4e"/>
                <path id="Path_9169" data-name="Path 9169" d="M30.451,81.866,28.122,84.44a38.637,38.637,0,0,1-3.8,1.806,24.008,24.008,0,0,1-3.311,1.087c-6.116,1.475-7.97-1.352-7.97-1.352-.326-1.014.264-2.332,1.29-3.724a23.025,23.025,0,0,1,2.241-2.532,52.384,52.384,0,0,1,4.647-4.042C22.276,74.859,23,74.346,23,74.346l.416.535c.169.222,1.43,1.481,2.838,2.873.353.348.724.71,1.086,1.065.689.683,1.359,1.338,1.9,1.868.72.7,1.212,1.179,1.212,1.179" transform="translate(5.793 -54.088)" fill="#618598"/>
                <path id="Path_9170" data-name="Path 9170" d="M20.355,93.009a16.306,16.306,0,0,1-4.821-.29,36.767,36.767,0,0,1-6.394-1.884.7.7,0,0,0,.141.068,8.655,8.655,0,0,1,2.942,2.9A11.351,11.351,0,0,1,14.2,98.683a4.514,4.514,0,0,1-4.561.452L5.043,93.683a4.447,4.447,0,0,1-1.737-3.967,4.423,4.423,0,0,1,.78-1.2,9.778,9.778,0,0,1,3.7-2.317,34.932,34.932,0,0,1,8.823-1.9c.334-.033.623-.06.854-.074.424-.035.67-.046.67-.046l6.019-.938s1.293,9.16-3.8,9.766" transform="translate(14.584 -60.561)" fill="#618598"/>
                <path id="Path_9171" data-name="Path 9171" d="M80.141,35.329l-1.8,1.289c-2.881.014-10.051,2.661-10.051,2.661l-.043,1.686c4.183.216,11.991-1.192,11.991-1.192.469-.151,1.009-.361,1.591-.607a4.68,4.68,0,0,1-1.692-3.836" transform="translate(-60.656 -25.702)" fill="#f4c6b4"/>
                <path id="Path_9172" data-name="Path 9172" d="M54.783,27.79l-2.8,2.005a4.853,4.853,0,0,0,1.754,3.978c1.316-.555,2.864-1.3,4.47-2.1Z" transform="translate(-32.602 -20.218)" fill="#fff"/>
                <path id="Path_9173" data-name="Path 9173" d="M78.136,4.007a3.7,3.7,0,0,0-1.489,4.63,3.835,3.835,0,0,1,2.739-1.6Z" transform="translate(-60.424 -2.915)" fill="#4e4e4e"/>
                <path id="Path_9174" data-name="Path 9174" d="M18.8,41.072a5.092,5.092,0,0,1-2.695.934c-2.737.208-5.747-1.208-7.008-1.886-.393-.2-.613-.345-.613-.345L4.809,33.552a5.249,5.249,0,0,1-.773-.981c-1.814-2.927-.964-7.389-.47-9.3.149-.583.268-.928.268-.928C10.8,19.59,13.608,25,16.606,29.626S18.8,41.072,18.8,41.072" transform="translate(20.081 -15.71)" fill="#618598"/>
                <path id="Path_9175" data-name="Path 9175" d="M36.187,31.209s-2.826-2.832-5.652-1.589c-2.148.952-2.623,3.326-2.731,4.409-1.814-2.927-.964-7.389-.47-9.3a5.809,5.809,0,0,1,5.18-.836,11.287,11.287,0,0,1,3.672,7.321" transform="translate(-3.689 -17.168)" fill="#fff"/>
                <path id="Path_9176" data-name="Path 9176" d="M23.6,55.462s-1.04-5.2,1.861-6.286,5.429,1.294,5.8,4.326l.372,3.032-7.784,1.078Z" transform="translate(1.759 -35.583)" fill="#fff"/>
                <path id="Path_9177" data-name="Path 9177" d="M29.783,67.613l-.618,1.865S39.989,74.191,42.59,72.14c0,0,1.249-.87,1.385-5.315l.657-7.9c.342-5.273-6.132-5.025-5.671-.029l.429,9.342Z" transform="translate(-12.819 -40.055)" fill="#f4c6b4"/>
                <path id="Path_9178" data-name="Path 9178" d="M52.9,24.209c.072.107,3.147,3.859,3.147,3.859a7.107,7.107,0,0,0,2.278-5.612c-.436-.81-.15-1.319-1.267-2.465Z" transform="translate(-32.971 -14.544)" fill="#f4c6b4"/>
                <path id="Path_9179" data-name="Path 9179" d="M61.345,7.593s1.7-3.627-1.472-5.958c0,0-4.029-1.975-6.158,1.337,0,0-1.091,2.259-.34,3.6l-.356.814a.552.552,0,0,0,.1.6l.3.326.311,1.331A1.653,1.653,0,0,0,54.7,10.8a3.275,3.275,0,0,0,1.977.133c1.884-.4,4.671-3.342,4.671-3.342" transform="translate(-36.463 -0.764)" fill="#f4c6b4"/>
                <path id="Path_9180" data-name="Path 9180" d="M51.946,3.792c.447,1.175,3.093,1.373,3.3,3.19a2.258,2.258,0,0,0,2.641,1.551c1.985-.474,2.352-1.218,2.352-1.218s1.61-3.853-.305-5.759A5.037,5.037,0,0,0,54.736.223c-1.615.416-3.476,1.765-2.79,3.569" transform="translate(-35.208 0)" fill="#4e4e4e"/>
                <path id="Path_9181" data-name="Path 9181" d="M68.75,23.311a.959.959,0,0,1,.378.35A1.483,1.483,0,0,1,69.266,25a.683.683,0,0,1-.465.457.552.552,0,0,1-.453-.152,1.122,1.122,0,0,1-.266-.412,2.009,2.009,0,0,1-.164-1.143.6.6,0,0,1,.832-.438" transform="translate(-48.09 -16.919)" fill="#f4c6b4"/>
                <path id="Path_9182" data-name="Path 9182" d="M121.359,44.833l-1.544-.017L117.666,43.7l-2-.671-1.823-.092-1.13.183a.327.327,0,0,0-.269.381l.037.2-.111.021a.235.235,0,0,0-.183.292.438.438,0,0,0,.368.32l.241.03.063.179a.6.6,0,0,0,.626.394L114.8,44.8l1.476.693-1.248-.18-.319.035a.464.464,0,0,0-.406.542.187.187,0,0,0,.171.154l.687.049,1.711.427,1.206.2,1.69-.224,1.613-.511Z" transform="translate(-112.178 -31.24)" fill="#f4c6b4"/>
                <g id="Group_2329" data-name="Group 2329" transform="translate(18.67 17.6)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
                  <g id="Group_2328" data-name="Group 2328">
                    <g id="Group_2327-2" data-name="Group 2327" clip-path="url(#clip-path-5)">
                      <path id="Path_9183" data-name="Path 9183" d="M26.284,64.591,23.9,66.99l-.121,2.74-2.228-1.144A52.365,52.365,0,0,0,16.9,72.628a9.779,9.779,0,0,0-3.7,2.317l1.458.214,5.8.848,9.1-2.418,1.144-.3c-3.546-2.01-4.427-8.694-4.427-8.694" transform="translate(-13.205 -64.591)" fill="#618598"/>
                    </g>
                  </g>
                </g>
                <path id="Path_9184" data-name="Path 9184" d="M45.835,88.341a5,5,0,0,1-5,.035l.187,4.076-9.606-.624L30.8,93.692s10.824,4.714,13.425,2.663c0,0,1.249-.87,1.385-5.315Z" transform="translate(-14.454 -64.269)" fill="#f4c6b4"/>
                <path id="Path_9185" data-name="Path 9185" d="M34.158,63.667l.455-5.47c.359-5.543-6.446-5.283-5.962-.031l.254,5.537a5.258,5.258,0,0,0,5.253-.037" transform="translate(-2.653 -39.383)" fill="#fff"/>
                <path id="Path_9186" data-name="Path 9186" d="M83.563,101.319l-1.146-.485-1.872-.113-2.634.265-1.1.723-.136.685-.321.365-.071.356.414,1.4A.4.4,0,0,0,77,104.8l.145.029.057.222a.24.24,0,0,0,.225.18l.083,0a.145.145,0,0,0,.149-.164l-.024-.186.11-.082a.464.464,0,0,0,.152-.55l-.156-.376.3-.407,1.846,0L81.8,102.7l2.642.172Z" transform="translate(-65.453 -73.275)" fill="#f4c6b4"/>
              </g>
            </g>
          </g>
        </g>
        <g id="Group_3192" data-name="Group 3192" transform="translate(118.262 186.438)">
          <g id="Group_2368" data-name="Group 2368" transform="translate(0)" clip-path="url(#clip-path-6)">
            <path id="Path_9470" data-name="Path 9470" d="M75.068,24.762c-.08.122-.186.123-.291.195s-.148.2-.219.318a1.1,1.1,0,0,1-.675.525c-.252.057-.526.027-.783.059a.375.375,0,0,1-.2-.016.38.38,0,0,1-.141-.139.892.892,0,0,1-.18-.868,1.006,1.006,0,0,1,.254-.289l.668-.588a1.491,1.491,0,0,1,.364-.261,1.233,1.233,0,0,1,.8-.007.938.938,0,0,1,.373.164.8.8,0,0,1,.028.906" transform="translate(-45.122 -14.701)" fill="#f49895"/>
            <path id="Path_9471" data-name="Path 9471" d="M73.029,13.243c.046-.088.092-.175.134-.264a.2.2,0,0,1,.266.074.457.457,0,0,1,.051.3,6.239,6.239,0,0,1-.305,1.026,3.155,3.155,0,0,1-.119.408c-.04.093-.093.179-.136.271a2.627,2.627,0,0,0-.187.782.849.849,0,0,1,.311.365c.012.131,0,.411-.131.47a3.36,3.36,0,0,1-1.668.507.074.074,0,0,1-.087-.1,2.5,2.5,0,0,1,.408-1,6.24,6.24,0,0,0,.393-.878c.284-.672.72-1.306,1.068-1.96" transform="translate(-44.274 -8.06)" fill="#f6aba8"/>
            <path id="Path_9472" data-name="Path 9472" d="M76.141,19.817a.41.41,0,0,1,.048.377,2.667,2.667,0,0,1-.8,1.574.543.543,0,0,1-.2.13.2.2,0,0,1-.218-.061.288.288,0,0,1,.022-.28c.1-.212.232-.409.335-.621.131-.271.151-.329-.134-.372-.112-.017-.156-.155-.16-.267a1.283,1.283,0,0,1,.1-.529.088.088,0,0,1,.034-.048.087.087,0,0,1,.042-.007c.284,0,.763-.1.94.1" transform="translate(-46.624 -12.249)" fill="#f6aba8"/>
            <path id="Path_9473" data-name="Path 9473" d="M77.245,20.817a.41.41,0,0,1,0,.38,2.667,2.667,0,0,1-1,1.455.543.543,0,0,1-.217.1.2.2,0,0,1-.209-.089.286.286,0,0,1,.059-.275c.129-.2.284-.375.414-.572.166-.251.193-.307-.084-.386-.108-.032-.134-.174-.123-.286a1.28,1.28,0,0,1,.165-.512.092.092,0,0,1,.04-.043.09.09,0,0,1,.043,0c.282.034.77,0,.918.227" transform="translate(-47.159 -12.81)" fill="#f6aba8"/>
            <path id="Path_9474" data-name="Path 9474" d="M78.142,22.188a.371.371,0,0,1-.031.343,2.417,2.417,0,0,1-1.019,1.239.5.5,0,0,1-.2.076.183.183,0,0,1-.182-.1.261.261,0,0,1,.074-.244c.131-.169.285-.318.417-.485.169-.214.2-.263-.046-.356-.1-.037-.108-.167-.09-.268a1.169,1.169,0,0,1,.189-.45.08.08,0,0,1,.04-.036.082.082,0,0,1,.038,0c.253.052.7.058.813.275" transform="translate(-47.72 -13.632)" fill="#f6aba8"/>
            <path id="Path_9475" data-name="Path 9475" d="M70.7,22.206c0-.012.009-.025.014-.037a7.065,7.065,0,0,1,.377-.76.308.308,0,0,1,.1-.13.3.3,0,0,1,.1-.032,7.51,7.51,0,0,1,.8-.154c.238-.019.467.041.7.041a4.77,4.77,0,0,0,1.052.181c.117,0,.254-.005.324.088.083.111,0,.273-.1.361-.366.3-.809.09-1.232.155a.269.269,0,0,0-.107.034.289.289,0,0,0-.082.095c-.09.142-.19.276-.09.431a1.254,1.254,0,0,1,.225.394,2.4,2.4,0,0,1-.034.927,6.01,6.01,0,0,1-.588,1.641.073.073,0,0,1-.114.046,5.8,5.8,0,0,1-1.55-.9c.161-.173.539-.624.5-.883-.02-.128-.187-.3-.238-.43a1.685,1.685,0,0,1-.106-.476,1.442,1.442,0,0,1,.047-.6" transform="translate(-43.865 -13.122)" fill="#f9c3c0"/>
            <path id="Path_9476" data-name="Path 9476" d="M70.937,31.742l.393-.6a2.729,2.729,0,0,0-1.148-1.172,2.2,2.2,0,0,0-1.3-.355l-.323.53Z" transform="translate(-42.659 -18.425)" fill="#fff"/>
            <path id="Path_9477" data-name="Path 9477" d="M47.436,32.407a56.756,56.756,0,0,1-5.13,9.382,46.041,46.041,0,0,1-4.4-2.161C34.122,37.586,33.37,36.3,33.37,36.3a13.674,13.674,0,0,1-2.463-2.786c-.738-1.164-.456-1.857.382-2.053,1.365-.319,2.413-.8,5.032,1.542,1.621,1.45,4.516,3.964,4.516,3.964l3.975-6.43s2.379.38,2.623,1.874" transform="translate(-18.966 -18.998)" fill="#fff"/>
            <path id="Path_9478" data-name="Path 9478" d="M5.2,54.5l.469-6.612L4.23,34.8a2.529,2.529,0,0,1,1.494-2.833c2.829-1.281,6.14-2.871,11.485-.773.732.288,1.006,1.17,1.258,1.913a7.851,7.851,0,0,1,.416,2.792l-.059,1.622q-.04,4.64-.079,9.279c-.017,1.96-.114,3.894-.254,5.85-.061.86-.018,2.189-.018,2.189s-1.608,1.434-6.374,1.408C6.909,56.219,5.2,54.5,5.2,54.5" transform="translate(-2.606 -18.775)" fill="#fff"/>
            <path id="Path_9479" data-name="Path 9479" d="M5.308,187.658l-.586,1.653.173,2.225a3.924,3.924,0,0,0,2.044.676,7.067,7.067,0,0,0,4.792,1.874c.595.013,1.621-.55,1.177-1.158-.274-.375-3.149-2.016-4.584-5.327a14.314,14.314,0,0,0-3.017.059" transform="translate(-2.938 -116.69)" fill="#2a424b"/>
            <path id="Path_9480" data-name="Path 9480" d="M25.271,176.577l-.462,1.695.335,2.2a3.9,3.9,0,0,0,2.087.51,7.023,7.023,0,0,0,4.916,1.484c.594-.035,1.575-.678,1.088-1.249-.3-.352-3.288-1.757-4.961-4.944a14.313,14.313,0,0,0-3,.3" transform="translate(-15.436 -109.678)" fill="#2a424b"/>
            <path id="Path_9481" data-name="Path 9481" d="M21.753,27.534a3.623,3.623,0,0,0-4.343.244,6.918,6.918,0,0,1-.211,1.011l2.17.779,2.329-.329a12.436,12.436,0,0,0,.054-1.705" transform="translate(-10.702 -16.754)" fill="#bfd4d5"/>
            <path id="Path_9482" data-name="Path 9482" d="M20.469,22.972c-.934,0-1.43.526-1.43.981L18.566,27c.043.528.941.956,2.005.956s1.892-.428,1.849-.956l-.46-3.189c-.038-.464-.556-.842-1.49-.842" transform="translate(-11.552 -14.293)" fill="#f0a4a8"/>
            <path id="Path_9483" data-name="Path 9483" d="M17,3.284c-2.659.02-3.393,2.017-3.393,4.44a4.222,4.222,0,0,0,3.141,4.438c1.3.379,2.913.716,3.9-1.771a9.674,9.674,0,0,0,.241-5.046c-.284-.868-1.231-2.08-3.89-2.06" transform="translate(-8.466 -2.043)" fill="#f9c3c0"/>
            <path id="Path_9484" data-name="Path 9484" d="M26.26,34.631l-1.23-1.11-.948,1.608.563.832,1.221-.15Z" transform="translate(-14.984 -20.857)" fill="#7a9ed5"/>
            <path id="Path_9485" data-name="Path 9485" d="M26.092,39.584l-1.221.15s-.1,5.194-.426,10.6c-.03.494,1.714,1.659,1.714,1.659s1.334-1.268,1.321-1.754a49.952,49.952,0,0,0-1.388-10.653" transform="translate(-15.209 -24.629)" fill="#a3bce2"/>
            <path id="Path_9486" data-name="Path 9486" d="M16.371,3.436c.07-.21-.2-.374-.421-.388-.979-.059-1.089.864-1.7,1.387a3,3,0,0,0-.828.854,3.9,3.9,0,0,0-.481,1.458c-.329-.912-1.574,1.346-1.254,1.6-.091-.072-1.007-.878-.923-.911a.757.757,0,0,1-.388.043,2.436,2.436,0,0,0,.082-1.158.373.373,0,0,1-.542-.148,1.076,1.076,0,0,1-.06-.635.9.9,0,0,1-.429-.115,11.973,11.973,0,0,0,.285-1.812,3.477,3.477,0,0,1,1.191-2.035c.187-.1.5-.08.629-.241s-.036-.5.159-.709A1.444,1.444,0,0,1,12.441.26,5.874,5.874,0,0,1,15.641.2a9.8,9.8,0,0,1,1.977.946,3,3,0,0,1,.53.367,5.993,5.993,0,0,1,.777,1.356.8.8,0,0,0,.434.361.807.807,0,0,1-.158.26.272.272,0,0,1-.276.076A1.152,1.152,0,0,1,19,4.387a4.106,4.106,0,0,1-.273.849c-.031.067-.115.125-.176.084s-.049-.1-.043-.156a.432.432,0,0,0-.038-.318.364.364,0,0,0-.091-.074L18.1,4.585c-.173-.114-.2-.39-.287-.572a1.526,1.526,0,0,0-.411-.535.831.831,0,0,0-1.028-.042" transform="translate(-5.867 0)" fill="#4e4e4e"/>
            <path id="Path_9487" data-name="Path 9487" d="M15.77,16.93s-.046-.9-.82-.783c-.66.1-.645.529-.454,1.28s.651,1.108,1.115,1.087.159-1.584.159-1.584" transform="translate(-8.948 -10.04)" fill="#f9c3c0"/>
            <path id="Path_9488" data-name="Path 9488" d="M6.113,114.258,5.621,98.271l.29-3.714s1.729,1.577,6.9,1.748c4.251.141,6.374-1.408,6.374-1.408l-1.224,15.951-1.1,15.284a3.059,3.059,0,0,1-1.877.452,3.2,3.2,0,0,1-2.108-.7l.485-13.472-.74-14.349-1.9,14.788-1.52,16.9a3.091,3.091,0,0,1-1.917.648,3.276,3.276,0,0,1-1.959-.621Z" transform="translate(-3.314 -58.833)" fill="#2a424b"/>
            <path id="Path_9489" data-name="Path 9489" d="M19.938,30.82s-.506,1.246-.948,2.39A6.057,6.057,0,0,1,15.9,30.454c.294-.467.7-1.274.7-1.274a6.622,6.622,0,0,0,3.337,1.64" transform="translate(-9.892 -18.156)" fill="#fff"/>
            <path id="Path_9490" data-name="Path 9490" d="M26.858,56.509l.46-11.942a23.4,23.4,0,0,0,1.238-13.495c-.017-.085-.035-.166-.055-.251-.005-.04-.009-.08-.011-.122l.09.017a15.31,15.31,0,0,1,2.734.8c.732.288,1.1,1.178,1.351,1.921a7.98,7.98,0,0,1,.46,2.808l-.065,1.634c-.026,3.093-.1,6.206-.122,9.3-.017,1.96-.142,3.86-.281,5.815-.061.86-.078,2.313-.078,2.313s-1.458,1.3-5.7,1.4Z" transform="translate(-16.711 -19.101)" fill="#466677"/>
            <path id="Path_9491" data-name="Path 9491" d="M28.366,44.368S31.619,39,32.332,34.477a6.294,6.294,0,0,0-1.3-.41l.8-1.384-1.369-1.84-1.21-.231a22.531,22.531,0,0,1-.89,13.756" transform="translate(-17.649 -19.047)" fill="#5e7a89"/>
            <path id="Path_9492" data-name="Path 9492" d="M5.724,32.847a26.857,26.857,0,0,1,3.027-1.229l.009-.029.01.023s1.806,8.8,5.034,12.774c-.058,3.747-.62,12.87-.62,12.87A6.022,6.022,0,0,1,12.1,57.4a19.765,19.765,0,0,1-2.444-.156A8.845,8.845,0,0,1,5.2,55.652c0-.066,0-.16,0-.272h0c.032-1.293.362-5.378.459-6.492l.009-.12-.1-.939-.5-4.541L4.23,35.68a2.529,2.529,0,0,1,1.494-2.833" transform="translate(-2.606 -19.655)" fill="#466677"/>
            <path id="Path_9493" data-name="Path 9493" d="M6.737,56.9s.423-1.865,1.118-4.637a27.825,27.825,0,0,1-.972,5.956Z" transform="translate(-4.192 -32.52)" fill="#004595"/>
            <path id="Path_9494" data-name="Path 9494" d="M19.029,44.936s-5.035-4.973-7.014-9.1a6.3,6.3,0,0,1,1.127-.766l-1.165-1.1.838-2.287,1.04-.436s1.735,8.567,5.174,13.683" transform="translate(-7.452 -19.445)" fill="#5e7a89"/>
            <path id="Path_9495" data-name="Path 9495" d="M26.591,30.419A3.276,3.276,0,0,0,27.6,28.535s.473.62.738.94a4.732,4.732,0,0,1-.316,2.809,10.513,10.513,0,0,0-1.427-1.865" transform="translate(-16.545 -17.754)" fill="#fff"/>
            <path id="Path_9496" data-name="Path 9496" d="M4.769,49.672l-.7-4.709a31.746,31.746,0,0,0-1.041-9.926C.306,36.329.37,37.809,0,40.7c0,0,.159,8.485,2.268,10.364,1.842,1.889,2.5-1.39,2.5-1.39" transform="translate(0 -21.8)" fill="#fff"/>
            <path id="Path_9497" data-name="Path 9497" d="M31.264,65.018l-8.013,1.96V56.256l8.013-1.96Z" transform="translate(-14.467 -33.783)" fill="#2a424b"/>
            <path id="Path_9498" data-name="Path 9498" d="M35.332,62.941c.451-.239.905-.475,1.374-.7a.912.912,0,0,1,.451-.125.316.316,0,0,1,.307.3.466.466,0,0,1-.223.3l-.617.473a.371.371,0,0,1,.131.405.881.881,0,0,1-.247.377.373.373,0,0,1,.123.405c-.083.361.047.467.016.8-.025.26-.333.369-.553.51a3.928,3.928,0,0,1-.4.276,1.386,1.386,0,0,1-.584.1,10.838,10.838,0,0,0-2.824.215c-.158-.567-.4-1.544-.616-2.093a12.966,12.966,0,0,0,2.132-.436c.516-.26,1.019-.531,1.525-.8" transform="translate(-19.708 -38.648)" fill="#f9c3c0"/>
            <path id="Path_9499" data-name="Path 9499" d="M17,68.96a10.431,10.431,0,0,0-.223-2.593q-5.266.611-10.524,1.295a.854.854,0,0,0-.578.233.846.846,0,0,0-.141.448,3.943,3.943,0,0,0,.03,1.586c.58,1.935,3.6.925,4.983.691A39.379,39.379,0,0,0,17,68.96" transform="translate(-3.4 -41.293)" fill="#fff"/>
            <path id="Path_9500" data-name="Path 9500" d="M118,88.154l-.048-3.769.7-1.552c.2-.521.508-1.309.019-1.741-.125-.11-.288-.193-.353-.346-.046-.109-.038-.241-.11-.335-.124-.161-.424-.13-.5-.318-.033-.083-.006-.182-.042-.265s-.128-.131-.2-.191a1.068,1.068,0,0,1-.235-.912L117.3,77.4c.011-.185-.011-.422-.188-.481a.293.293,0,0,0-.324.153,3.7,3.7,0,0,0-.207.9c-.072.328-.122.66-.167.992a5.938,5.938,0,0,1-.147,1.3,9.786,9.786,0,0,1-.552,1.266c-.025.041-.229-.319-.239-.353a1.562,1.562,0,0,1-.014-.464,2.927,2.927,0,0,0-.025-.524.94.94,0,0,0-.187-.493.408.408,0,0,0-.48-.12,10.391,10.391,0,0,0,.173,3.411,4.809,4.809,0,0,0,.485,1.228c.043.074.382.458.368.532l-.581,3.121Z" transform="translate(-71.37 -47.851)" fill="#f1cac4"/>
            <path id="Path_9501" data-name="Path 9501" d="M77.295,94.995s2.909-1.105,4.8.668l.314,1.328a5.64,5.64,0,0,1-5.646-.155c.122-.492.532-1.841.532-1.841" transform="translate(-47.761 -58.893)" fill="#91b1b3"/>
            <path id="Path_9502" data-name="Path 9502" d="M116.03,110.237c1.663.543,2.206-1.889,2.332-5.028s-.109-4.823-.147-6.424c-.789-.489-2.125-1.075-2.959-.318-.193,1.095-1.6,10.995.775,11.77" transform="translate(-71.345 -61.04)" fill="#8cbcb5"/>
            <path id="Path_9503" data-name="Path 9503" d="M69.159,114.505l-7.839.451,2.817-11.807c.348-1.149-.427-1.93-1.608-2.08-.937-.119-1.541.1-1.793.456-1.828,2.614-2.373,7.6-2.688,11.232a34.371,34.371,0,0,0-.066,5.619c4.882.9,10.9-1.733,10.9-1.733Z" transform="translate(-36.021 -62.865)" fill="#8cbcb5"/>
            <path id="Path_9504" data-name="Path 9504" d="M71.8,255.4a4.261,4.261,0,0,0-.255,2.455s.182,1.1,2.311.749a4.342,4.342,0,0,0,1.36-.416c.327-.182.485-.4.883-.459.583-.092,1.178-.085,1.758-.18a4.772,4.772,0,0,0,1.569-.537,2.7,2.7,0,0,0,.4-.274c1.346-1.123,1.545-1.637,1.125-2.246-.269-.39-.885-.637-3.246-.259a15.7,15.7,0,0,1-2.256.484,1.893,1.893,0,0,1-.883-.155,2.3,2.3,0,0,0-1.348-.1,1.83,1.83,0,0,0-1.422.937" transform="translate(-44.469 -158.065)" fill="#2a424b"/>
            <path id="Path_9505" data-name="Path 9505" d="M72.281,256.281c-.1-.5.548-1.042,1.442-1.218s1.7.085,1.8.582-.548,1.042-1.442,1.218-1.7-.085-1.8-.582" transform="translate(-44.967 -158.665)" fill="#2a424b"/>
            <path id="Path_9506" data-name="Path 9506" d="M93.072,267.321a4.261,4.261,0,0,0-.36,2.442s.134,1.106,2.276.847a4.343,4.343,0,0,0,1.377-.357c.335-.168.5-.376.9-.421.587-.066,1.181-.034,1.765-.1a4.76,4.76,0,0,0,1.59-.469,2.729,2.729,0,0,0,.414-.257c1.393-1.064,1.614-1.569,1.221-2.2-.252-.4-.857-.674-3.232-.4a15.72,15.72,0,0,1-2.274.386,1.891,1.891,0,0,1-.875-.192,2.293,2.293,0,0,0-1.342-.156,1.83,1.83,0,0,0-1.461.875" transform="translate(-57.656 -165.689)" fill="#2a424b"/>
            <path id="Path_9507" data-name="Path 9507" d="M93.647,267.792c-.076-.5.592-1.018,1.493-1.155s1.693.158,1.768.659-.592,1.017-1.493,1.155-1.693-.158-1.769-.659" transform="translate(-58.263 -165.879)" fill="#2a424b"/>
            <path id="Path_9508" data-name="Path 9508" d="M83.912,161.866l.272,7.828-.208,12.612-.794,19.174s-1.292,1.1-4.305.058c0-1.895.076-17.037.076-17.037l-2.316-15.057L75.569,183.8l-.557,13.21a5.078,5.078,0,0,1-4.086.1c0-.6.094-13.106.094-13.106l-1.082-18.68.382-3.893a13.709,13.709,0,0,0,5.8,1.6c5.46.367,7.8-1.164,7.8-1.164" transform="translate(-43.515 -100.44)" fill="#2a424b"/>
            <path id="Path_9509" data-name="Path 9509" d="M66.257,122.35a13.7,13.7,0,0,0,5.8,1.6c5.46.367,7.8-1.164,7.8-1.164l-.182-1.184s-.235-6.921-.387-9.777c-.116-2.186-.334-8.413-1.308-10.252-1.458-2.754-7.28-3.291-11.084-2.782-4.26.57-3.527,3.894-3.264,5.463,1.63,9.706,2.883,14.368,2.883,14.368Z" transform="translate(-39.451 -61.362)" fill="#8cbcb5"/>
            <path id="Path_9510" data-name="Path 9510" d="M102.758,111.559a3.888,3.888,0,0,1-3.575-.989,35.578,35.578,0,0,1-4.877-4.535,6.322,6.322,0,0,1-1.973-3.286c-.234-1.4-1.036-2.414-.15-2.383a6.4,6.4,0,0,1,5.733,2.883c1.371,1.774,2.877,2.283,4.05,4.117.423.661,1.744,3.6.792,4.194" transform="translate(-57.103 -62.447)" fill="#8cbcb5"/>
            <path id="Path_9511" data-name="Path 9511" d="M65.509,122.443l-1.335-7.258a23.677,23.677,0,0,0,1.021,8.574l.314-1.317" transform="translate(-39.894 -71.668)" fill="#63a49b"/>
            <path id="Path_9512" data-name="Path 9512" d="M81.866,85.969c-.989-.079-1.558.435-1.6.917l-.759,3.189c0,.563.915,1.092,2.041,1.182s2.039-.292,2.038-.855l-.217-3.414c0-.494-.517-.938-1.506-1.018" transform="translate(-49.47 -53.484)" fill="#f8b9b6"/>
            <path id="Path_9513" data-name="Path 9513" d="M79.549,67.4c-2.886.382-3.412,2.65-3.084,5.282a4.621,4.621,0,0,0,4.013,4.394c1.462.235,3.261.383,4-2.452a10.59,10.59,0,0,0-.422-5.513c-.426-.9-1.619-2.093-4.5-1.71" transform="translate(-47.523 -41.892)" fill="#f9c3c0"/>
            <path id="Path_9514" data-name="Path 9514" d="M81.706,68.834a2.349,2.349,0,0,1-.832,1.631.265.265,0,0,1-.25.082c-.1-.039-.115-.164-.135-.266a1.033,1.033,0,0,0-.322-.566A3.211,3.211,0,0,1,79.45,70.9c-.173.181-.459.348-.656.191-.065-.052-.1-.131-.172-.179a.346.346,0,0,0-.393.033,1.2,1.2,0,0,0-.265.325,9.668,9.668,0,0,0-.734.91c-.168.342.022.719.113,1.081a.182.182,0,0,1,.006.1.166.166,0,0,1-.053.068,1.109,1.109,0,0,1-.384.223,3.047,3.047,0,0,0-.3.1c-.223.1-.368.323-.567.467-.368.266-.875-.393-1.179-.558a2.183,2.183,0,0,1-.866-.732,3.273,3.273,0,0,1-.3-.719,8.682,8.682,0,0,1-.674-3.58,3.291,3.291,0,0,1,.468-1.349,3.185,3.185,0,0,1,.468-.584c.129-.127.456-.282.536-.428,0,0,1.461-2.661,5.9-1.126a3.283,3.283,0,0,1,2.057,4.419,1.973,1.973,0,0,0-.742-.731" transform="translate(-45.415 -40.237)" fill="#4e4e4e"/>
            <path id="Path_9515" data-name="Path 9515" d="M83.849,81.639s-.172-.972-1-.739c-.7.2-.629.662-.32,1.452s.856,1.115,1.358,1.029-.042-1.742-.042-1.742" transform="translate(-51.211 -50.313)" fill="#f9c3c0"/>
            <path id="Path_9516" data-name="Path 9516" d="M77.409,95.555s1.228,1.693,4.8.668l.314,1.328s-3.17,1.744-5.576-.416c.124-.6.462-1.58.462-1.58" transform="translate(-47.876 -59.454)" fill="#ebf1f1"/>
            <path id="Path_9517" data-name="Path 9517" d="M188.288,243.7a3.479,3.479,0,0,1,.931,1.787s.192.889-1.529,1.263a3.551,3.551,0,0,1-1.158.093,1.961,1.961,0,0,0-.808-.083c-.47.105-.92.289-1.389.391a3.893,3.893,0,0,1-1.352.064,2.233,2.233,0,0,1-.388-.087c-.4-.133-1.334-.426-1.417-.924a.586.586,0,0,1,.272-.548,1.629,1.629,0,0,1,.6-.218c1.363-.29,2.867-.488,3.88-1.542a1.871,1.871,0,0,1,.994-.479,1.5,1.5,0,0,1,1.361.284" transform="translate(-112.724 -151.43)" fill="#f1cac4"/>
            <path id="Path_9518" data-name="Path 9518" d="M187.544,248.722a5.815,5.815,0,0,1-1.277.254c-.434.063-.854.238-1.286.333a4.964,4.964,0,0,1-2.783-.08,1.1,1.1,0,0,1-.683-.54c-.168-.407.17-.6.465-.745a2.422,2.422,0,0,0-1.391.488.933.933,0,0,0-.348,1.056,1.253,1.253,0,0,0,.869.583,6.44,6.44,0,0,0,2.662.164c.507-.074.977-.309,1.474-.426a4.162,4.162,0,0,1,.737-.076,1.726,1.726,0,0,1,.554-.035c.043.019.077.054.118.076a.453.453,0,0,0,.216.042,3.1,3.1,0,0,0,1.845-.582,1.811,1.811,0,0,0,0-.94c-.071-.238-.266-.446-.29-.7.057.6-.361.932-.885,1.13" transform="translate(-112.108 -154.051)" fill="#2a424b"/>
            <path id="Path_9519" data-name="Path 9519" d="M169.154,255.345a3.744,3.744,0,0,1,1.067,1.887s.24.949-1.6,1.414a3.816,3.816,0,0,1-1.242.142,2.116,2.116,0,0,0-.872-.06c-.5.131-.978.345-1.479.472a4.187,4.187,0,0,1-1.452.119,2.441,2.441,0,0,1-.42-.079c-1.478-.432-1.819-.776-1.695-1.414.11-.565.886-.887,1.374-.937a10.024,10.024,0,0,0,2.7-.575c.158-.059.269-.176.435-.239a1.659,1.659,0,0,0,.656-.434,2.011,2.011,0,0,1,1.051-.552,1.607,1.607,0,0,1,1.474.255" transform="translate(-100.447 -158.679)" fill="#f1cac4"/>
            <path id="Path_9520" data-name="Path 9520" d="M168.607,261.359a6.261,6.261,0,0,1-1.388.2c-.47.042-.931.2-1.4.28a5.339,5.339,0,0,1-2.985-.255,1.186,1.186,0,0,1-.7-.621c-.156-.447.219-.633.545-.772a2.6,2.6,0,0,0-1.524.441,1,1,0,0,0-.437,1.114,1.348,1.348,0,0,0,.9.678,6.93,6.93,0,0,0,2.849.336c.55-.049,1.068-.274,1.609-.369a4.5,4.5,0,0,1,.8-.037,1.856,1.856,0,0,1,.6,0c.045.023.079.062.122.089a.491.491,0,0,0,.23.058,3.332,3.332,0,0,0,2.017-.514,1.944,1.944,0,0,0,.06-1.009c-.062-.26-.259-.5-.269-.772.025.648-.444.979-1.019,1.161" transform="translate(-99.967 -161.885)" fill="#2a424b"/>
            <path id="Path_9521" data-name="Path 9521" d="M188.286,102.265l6.824.393-2.453-10.277c-.3-1-.071-1.914.957-2.045a2.6,2.6,0,0,1,2,.631c1.592,2.276,2.065,6.615,2.34,9.778a29.937,29.937,0,0,1,.057,4.891c-4.25.78-9.49-1.508-9.49-1.508Z" transform="translate(-117.15 -56.197)" fill="#8cbcb5"/>
            <path id="Path_9522" data-name="Path 9522" d="M205.623,109.54l1.162-6.318a20.607,20.607,0,0,1-.889,7.464l-.274-1.146" transform="translate(-127.937 -64.224)" fill="#508b82"/>
            <path id="Path_9523" data-name="Path 9523" d="M190.258,197.546c.214,1.631.475,15.758.507,18.047a8.41,8.41,0,0,0,4.018-.171c-.255-3.487.947-13.627.2-18.22Z" transform="translate(-118.377 -122.698)" fill="#fdfdfd"/>
            <path id="Path_9524" data-name="Path 9524" d="M193.27,166.761c.187-10.912,1.36-12.721,1.347-14.776.108-2.786-.5-3.728-.5-3.728l-1.755-.016-4.857,1.831s.834,15.377,1.039,17.01Z" transform="translate(-116.666 -92.235)" fill="#fdfdfd"/>
            <path id="Path_9525" data-name="Path 9525" d="M174.685,198.13c.113,2.02-.176,19.429-.345,22.24a5.368,5.368,0,0,0,3.536.029c.078-4.293,2.5-16.583,2.016-22.283Z" transform="translate(-108.473 -123.267)" fill="#fff"/>
            <path id="Path_9526" data-name="Path 9526" d="M180.417,164.659c1.408-12.959,3.435-12.206,3.981-15.27.466-2.606.09-3.162.09-3.162L180.8,144.3l-5.466,1.6s-.23,16.721-.127,18.742Z" transform="translate(-108.998 -89.782)" fill="#fff"/>
            <path id="Path_9527" data-name="Path 9527" d="M189.111,88.242s-3.155-1.2-5.207.724c-.143.608-.34,1.44-.34,1.44a6.116,6.116,0,0,0,6.123-.167c-.132-.533-.576-2-.576-2" transform="translate(-114.212 -54.674)" fill="#91b1b3"/>
            <path id="Path_9528" data-name="Path 9528" d="M174.367,107.626c.084-1.848.277-2.737.255-3.777-.024-1.176-1.79-5.247-1.2-6.266a8.007,8.007,0,0,0,.989-4.436c1.283-2.423,6.887-4.208,10.161-3.387,5.791.973.238,11.073-.488,16.67l1.2,5.315s-5.779,2.181-11.321.263c0-.835.409-4.381.409-4.381" transform="translate(-107.826 -55.723)" fill="#8cbcb5"/>
            <path id="Path_9529" data-name="Path 9529" d="M180.633,64.027c.345-.807,1.374-1.894,4.024-1.678s3.21,2.172,3.07,4.486a4.3,4.3,0,0,1-1.466,3.115.8.8,0,0,0-.257.81c.2.813.552,2.268.552,2.268-.006.476-.882.932-1.956,1.016s-1.94-.232-1.933-.709l.036-2.616a2.266,2.266,0,0,1-2.461-2.085,8.953,8.953,0,0,1,.39-4.606" transform="translate(-112.052 -38.776)" fill="#facdcb"/>
            <path id="Path_9530" data-name="Path 9530" d="M189.111,88.85s-1.332,1.836-5.207.724l-.34,1.44s3.438,1.891,6.048-.451c-.135-.654-.5-1.713-.5-1.713" transform="translate(-114.212 -55.282)" fill="#ebf1f1"/>
            <path id="Path_9531" data-name="Path 9531" d="M187.114,66.251c-.421.332-.853.652-1.246,1.015a.548.548,0,0,1-.25.159.519.519,0,0,1-.187-.01,10.676,10.676,0,0,1-1.844-.409c-.4-.155-.354-.49-.681-.687a1.641,1.641,0,0,0-.3-.094c-.3-.108-.09-.27.021-.421a1.677,1.677,0,0,0,.3-.654c.141-.7.091-1.49-.49-1.738a.541.541,0,0,0-.7.238,1.821,1.821,0,0,0-.192.4.99.99,0,0,1-.054.178.03.03,0,0,1-.012.012c.142-.046-.968-.875-1.071-.99a2.749,2.749,0,0,1-.675-1.586,3.515,3.515,0,0,1,1.094-2.718A5.385,5.385,0,0,1,183.5,57.6a3.326,3.326,0,0,1,3.491,1.238c.285.389,1.017.6,1.371,1.032a4.046,4.046,0,0,1,.889,2.014,4.26,4.26,0,0,1-.879,3.176,7.386,7.386,0,0,1-1.259,1.189" transform="translate(-111.829 -35.784)" fill="#4e4e4e"/>
            <path id="Path_9532" data-name="Path 9532" d="M175.041,113.454l2.678-4.37a45.235,45.235,0,0,1-2.192,5.942,14.563,14.563,0,0,0-.486-1.573" transform="translate(-108.909 -67.872)" fill="#508b82"/>
            <path id="Path_9533" data-name="Path 9533" d="M145.408,113.169l-4.036-4.039-1.243-.536a8.306,8.306,0,0,1-1.614-1.282c-.436-.476-.767-.827-.869-.948-.153-.179-.291-.409-.155-.516.1-.08.35.078.35.078s-.6-.516-.68-.6-.2-.262-.092-.378.373-.017.373-.017c-.247-.213-.262-.379-.179-.486.105-.136.507.013.507.013s0-.327.577-.06a12.539,12.539,0,0,1,1.8,1.408,1.866,1.866,0,0,0,.887.272.412.412,0,0,0,.339-.322,5.151,5.151,0,0,0-.073-.55c0-.271.091-1.194.53-1.135a.118.118,0,0,1,.066.027.139.139,0,0,1,.033.074,3.645,3.645,0,0,1,.054.551c.02.383.059.765.085,1.149,0,.009,0,.019,0,.028a1.531,1.531,0,0,0,.307.836,2.967,2.967,0,0,1,.46,1.446l3.124,2.453Z" transform="translate(-85.256 -64.751)" fill="#facdcb"/>
            <path id="Path_9534" data-name="Path 9534" d="M157.14,105.706l1.494.8,4.408-8.637c1.365-2,1.575-1,2.4-.426.657.453.917.929.873,1.3-.321,2.677-1.827,4.76-3.676,7.227a48.132,48.132,0,0,1-3.518,4.6c-1.68-1.369-3.586-2.611-3.586-2.611a6.323,6.323,0,0,1,.533-1.5,3.269,3.269,0,0,1,1.068-.756" transform="translate(-96.775 -60.154)" fill="#8cbcb5"/>
            <path id="Path_9535" data-name="Path 9535" d="M184.87,79.354a.519.519,0,1,0,.519-.519.519.519,0,0,0-.519.519" transform="translate(-115.025 -49.051)" fill="#fca167"/>
          </g>
        </g>
      </g>
      <g id="Group_1777" data-name="Group 1777" transform="translate(-1179.105 -1020.537)">
        <g id="Group_1800" data-name="Group 1800" transform="matrix(-0.857, -0.515, 0.515, -0.857, 1634.295, 1267.923)">
          <path id="Path_6164" data-name="Path 6164" d="M0,0,12.806,1.57,5.043,11.876Z" transform="translate(2.269 83.354)" fill="#fff"/>
          <path id="Path_6165" data-name="Path 6165" d="M0,0,12.552,2.987,3.689,12.364Z" transform="translate(13.74 70.625)" fill="#cda443"/>
          <path id="Path_6166" data-name="Path 6166" d="M0,0,12.33,3.8,2.874,12.579Z" transform="translate(27.009 57.785)" fill="#708dc9"/>
          <path id="Path_6167" data-name="Path 6167" d="M0,0,11.8,5.217,1.383,12.828Z" transform="translate(41.336 44.744)" fill="#ab5e62"/>
          <path id="Path_6168" data-name="Path 6168" d="M0,0,11.206,6.4.064,12.9Z" transform="translate(59.273 32.882)" fill="#fff"/>
          <path id="Path_6169" data-name="Path 6169" d="M1.231,0,11.739,7.488,0,12.844Z" transform="translate(76.406 22.274)" fill="#cda443"/>
          <path id="Path_6170" data-name="Path 6170" d="M1.854,0,11.986,7.99,0,12.768Z" transform="translate(95.596 13.586)" fill="#708dc9"/>
          <path id="Path_6171" data-name="Path 6171" d="M3.742,0l8.823,9.415L0,12.348Z" transform="translate(114.526 7.488)" fill="#ab5e62"/>
          <path id="Path_6172" data-name="Path 6172" d="M4.832,0l7.945,10.166L0,11.964Z" transform="translate(133.445 2.973)" fill="#fff"/>
          <path id="Path_6173" data-name="Path 6173" d="M6.112,0,12.9,10.973,0,11.363Z" transform="translate(153.672 0.196)" fill="#cda443"/>
          <path id="Path_6174" data-name="Path 6174" d="M0,10.821,7.028,0l5.857,11.5Z" transform="translate(172.666 0)" fill="#708dc9"/>
          <path id="Path_6175" data-name="Path 6175" d="M0,10.508,7.488,0l5.356,11.739Z" transform="translate(192.097 1.292)" fill="#ab5e62"/>
          <g id="Group_1458" data-name="Group 1458" transform="translate(0 0)">
            <g id="Group_1457" data-name="Group 1457" clip-path="url(#clip-path-7)">
              <path id="Path_6176" data-name="Path 6176" d="M173.192,0a203.554,203.554,0,0,0-67.172,11.365C47.436,31.736,14.449,72.433,0,94.878l.639.412c14.4-22.363,47.262-62.91,105.63-83.206a204.639,204.639,0,0,1,98.378-8.964l.112-.75A213.855,213.855,0,0,0,173.192,0" transform="translate(0 10.891)" fill="#a8835e"/>
            </g>
          </g>
        </g>
        <g id="Group_2378" data-name="Group 2378" transform="translate(562.03 -556.971)">
          <path id="Path_9131" data-name="Path 9131" d="M63.581,158.47c3.261-8.43.975-18.421.306-27.2l11.463-.911s.509,11.027-1.657,12.656c-1.014.764-1.218,3.053-1.085,5.471l.033-.005c2.036-.113,5.1-3.849,5.505-5.77a1.474,1.474,0,1,1,2.884.611c-.572,2.695-4.292,7.79-8.125,8.088a25.966,25.966,0,0,0,.787,3.786c.656,1.964,2.917,4.306,1.658,6.551-2.155,3.848-9.345,4.774-12.022.815-1.32-1.954-.525-2.076.253-4.089" transform="translate(911.996 1656.427)" fill="#675841"/>
          <path id="Path_9132" data-name="Path 9132" d="M46.857,114.981a4.814,4.814,0,0,1-.218-1.367c0-.05.012-.093.014-.141a6.357,6.357,0,0,1,.98-8.581,4.841,4.841,0,0,1-.734-2.549,4.89,4.89,0,0,1,2.789-4.406,4.9,4.9,0,0,1,4.791-3.874c.059,0,.115.015.173.017a9.7,9.7,0,0,1,6.726-8.207,4.9,4.9,0,0,1,4.565-3.142,4.832,4.832,0,0,1,1.512.261,4.84,4.84,0,0,1,1.511-.261,4.894,4.894,0,0,1,4.565,3.142,9.7,9.7,0,0,1,6.728,8.207c.059,0,.113-.017.173-.017a4.9,4.9,0,0,1,4.791,3.874,4.848,4.848,0,0,1,2.055,6.954,6.357,6.357,0,0,1,.98,8.581c0,.048.014.092.014.141a4.86,4.86,0,0,1-.218,1.367,4.894,4.894,0,0,1-3.385,8.438,4.949,4.949,0,0,1-1.2-.163,4.864,4.864,0,0,1-7.151,5.545,4.758,4.758,0,0,1-4.9,0,4.656,4.656,0,0,1-3.964.418,4.656,4.656,0,0,1-3.964-.418,4.758,4.758,0,0,1-4.9,0,4.851,4.851,0,0,1-2.451.68,4.9,4.9,0,0,1-4.9-4.9,4.831,4.831,0,0,1,.2-1.322,4.851,4.851,0,0,1-6.1-4.74,4.879,4.879,0,0,1,1.518-3.535" transform="translate(914.625 1673.353)" fill="#a5b775"/>
          <path id="Path_9133" data-name="Path 9133" d="M45.34,125.708a4.888,4.888,0,0,1,1.518-3.535,4.859,4.859,0,0,1-.216-1.367c0-.05.01-.093.012-.141a6.359,6.359,0,0,1,.981-8.581,4.851,4.851,0,0,1,2.056-6.954,4.894,4.894,0,0,1,1.076-2.161c-1.874,6.749,1.823,11.367,4,10.33-.982,5.628,6.552,10.213,9.5,9.559-1.965,5.9,13.276,6.644,14.172,2.667-.9,3.978,11.8-.1,9.621-3.351a4.894,4.894,0,0,1-3.385,8.438,4.956,4.956,0,0,1-1.2-.162,4.855,4.855,0,0,1,.2,1.321,4.872,4.872,0,0,1-7.355,4.223,4.757,4.757,0,0,1-4.9,0,4.656,4.656,0,0,1-3.964.418,4.655,4.655,0,0,1-3.964-.418,4.759,4.759,0,0,1-4.9,0,4.872,4.872,0,0,1-7.355-4.223,4.806,4.806,0,0,1,.2-1.321,4.854,4.854,0,0,1-6.1-4.74" transform="translate(914.624 1666.161)" fill="#889a58"/>
        </g>
        <g id="Group_2379" data-name="Group 2379" transform="translate(535.388 -538.981)">
          <path id="Path_9131-2" data-name="Path 9131" d="M63.581,158.47c3.261-8.43.975-18.421.306-27.2l11.463-.911s.509,11.027-1.657,12.656c-1.014.764-1.218,3.053-1.085,5.471l.033-.005c2.036-.113,5.1-3.849,5.505-5.77a1.474,1.474,0,1,1,2.884.611c-.572,2.695-4.292,7.79-8.125,8.088a25.966,25.966,0,0,0,.787,3.786c.656,1.964,2.917,4.306,1.658,6.551-2.155,3.848-9.345,4.774-12.022.815-1.32-1.954-.525-2.076.253-4.089" transform="translate(911.996 1656.427)" fill="#675841"/>
          <path id="Path_9132-2" data-name="Path 9132" d="M46.857,114.981a4.814,4.814,0,0,1-.218-1.367c0-.05.012-.093.014-.141a6.357,6.357,0,0,1,.98-8.581,4.841,4.841,0,0,1-.734-2.549,4.89,4.89,0,0,1,2.789-4.406,4.9,4.9,0,0,1,4.791-3.874c.059,0,.115.015.173.017a9.7,9.7,0,0,1,6.726-8.207,4.9,4.9,0,0,1,4.565-3.142,4.832,4.832,0,0,1,1.512.261,4.84,4.84,0,0,1,1.511-.261,4.894,4.894,0,0,1,4.565,3.142,9.7,9.7,0,0,1,6.728,8.207c.059,0,.113-.017.173-.017a4.9,4.9,0,0,1,4.791,3.874,4.848,4.848,0,0,1,2.055,6.954,6.357,6.357,0,0,1,.98,8.581c0,.048.014.092.014.141a4.86,4.86,0,0,1-.218,1.367,4.894,4.894,0,0,1-3.385,8.438,4.949,4.949,0,0,1-1.2-.163,4.864,4.864,0,0,1-7.151,5.545,4.758,4.758,0,0,1-4.9,0,4.656,4.656,0,0,1-3.964.418,4.656,4.656,0,0,1-3.964-.418,4.758,4.758,0,0,1-4.9,0,4.851,4.851,0,0,1-2.451.68,4.9,4.9,0,0,1-4.9-4.9,4.831,4.831,0,0,1,.2-1.322,4.851,4.851,0,0,1-6.1-4.74,4.879,4.879,0,0,1,1.518-3.535" transform="translate(914.625 1673.353)" fill="#a5b775"/>
          <path id="Path_9133-2" data-name="Path 9133" d="M45.34,125.708a4.888,4.888,0,0,1,1.518-3.535,4.859,4.859,0,0,1-.216-1.367c0-.05.01-.093.012-.141a6.359,6.359,0,0,1,.981-8.581,4.851,4.851,0,0,1,2.056-6.954,4.894,4.894,0,0,1,1.076-2.161c-1.874,6.749,1.823,11.367,4,10.33-.982,5.628,6.552,10.213,9.5,9.559-1.965,5.9,13.276,6.644,14.172,2.667-.9,3.978,11.8-.1,9.621-3.351a4.894,4.894,0,0,1-3.385,8.438,4.956,4.956,0,0,1-1.2-.162,4.855,4.855,0,0,1,.2,1.321,4.872,4.872,0,0,1-7.355,4.223,4.757,4.757,0,0,1-4.9,0,4.656,4.656,0,0,1-3.964.418,4.655,4.655,0,0,1-3.964-.418,4.759,4.759,0,0,1-4.9,0,4.872,4.872,0,0,1-7.355-4.223,4.806,4.806,0,0,1,.2-1.321,4.854,4.854,0,0,1-6.1-4.74" transform="translate(914.624 1666.161)" fill="#889a58"/>
        </g>
      </g>
      <g id="Group_1799" data-name="Group 1799" transform="translate(248.993 144.619)">
        <g id="Group_1798" data-name="Group 1798">
          <g id="Group_1797" data-name="Group 1797">
            <g id="Group_1796" data-name="Group 1796">
              <path id="Path_8391" data-name="Path 8391" d="M91.179,79.281a.392.392,0,0,1,0,.743,1.423,1.423,0,0,1-1.287,0,.392.392,0,0,1,0-.743,1.423,1.423,0,0,1,1.287,0" transform="translate(-71.504 -54.897)" fill="#f45157"/>
              <path id="Path_8392" data-name="Path 8392" d="M89.625,80.844v6.238a.451.451,0,0,0,.266.371,1.419,1.419,0,0,0,1.287,0,.451.451,0,0,0,.267-.371V80.844Z" transform="translate(-71.503 -56.088)" fill="#f45157"/>
              <path id="Path_8393" data-name="Path 8393" d="M82.1,59.8c.006.22-.584.22-.578,0V57.791a.289.289,0,0,1,.084-.2l4.006-4.052V51.57a.321.321,0,0,0-.481-.278l-6.539,3.776-.289-.5,6.54-3.776a.9.9,0,0,1,1.348.778v2.084a.289.289,0,0,1-.084.2L82.1,57.91Z" transform="translate(-62.784 -35.154)" fill="#4e4e4e"/>
              <rect id="Rectangle_606" data-name="Rectangle 606" width="3.149" height="8.787" transform="matrix(-0.5, -0.866, 0.866, -0.5, 15.183, 22.207)" fill="gray"/>
              <path id="Path_8394" data-name="Path 8394" d="M79.249,49.821c0-.71.5-1,1.113-.643a2.462,2.462,0,0,1,1.113,1.928c0,.71-.5,1-1.113.643a2.461,2.461,0,0,1-1.113-1.929" transform="translate(-58.356 -34.013)" fill="gray"/>
              <path id="Path_8395" data-name="Path 8395" d="M104.1,64.169c0-.71.5-1,1.113-.643a2.461,2.461,0,0,1,1.113,1.928c0,.71-.5,1-1.113.643a2.461,2.461,0,0,1-1.113-1.929" transform="translate(-90.82 -43.968)" fill="#fff"/>
              <path id="Path_8396" data-name="Path 8396" d="M106.373,66.606c0-.266.187-.375.418-.241a.924.924,0,0,1,.418.724c0,.266-.187.374-.418.241a.924.924,0,0,1-.418-.724" transform="translate(-92.395 -46.003)" fill="#4e4e4e"/>
              <path id="Path_8397" data-name="Path 8397" d="M88.963,89.818c-.009-.077-.27-1.809-.27-1.809l.724-1.068.148-1.656-.52-1.064s-.269-.408-.525-.4v.4l-.356.46-.491.286-.6.341-.214-.168s-.076-.362-.155-.785l-.325.574-.162.917.172,1.1.314,2.063.246.981h1.982Z" transform="translate(-68.578 -58.151)" fill="#f4c6b4"/>
              <path id="Path_8398" data-name="Path 8398" d="M77.182,114.643l-2.628-6.264s-2.919-10.419-3.4-11.21c-.362-.6-2.091-.074-2.091,1.066l.01,9.236,3.972,12.5Z" transform="translate(-50.944 -67.241)" fill="#fff"/>
              <path id="Path_8399" data-name="Path 8399" d="M88.6,316.51c-1.9.387-2.207,1.838-1.482,3.1l2.141,2.968a3.069,3.069,0,0,0,3.294,1.778,1.6,1.6,0,0,0,1.087-2.294l-.527-1.581-.823-4.291Z" transform="translate(-72.984 -219.365)" fill="#4e4e4e"/>
              <path id="Path_8400" data-name="Path 8400" d="M91.739,250.468c-.593,1.974-4.487,1.9-4.744-.736l-1.061-9.5c0-.006-.224-3.078-.224-3.078l-2.152-8.565-.466-3.572,1.52-9.173,7.977-.36s-1.117,18.5-1.123,19.128c1.115,3.455.527,11.346.272,15.86" transform="translate(-70.647 -149.496)" fill="#25435c"/>
              <path id="Path_8401" data-name="Path 8401" d="M91.739,250.468c-.593,1.974-4.487,1.9-4.744-.736l-1.061-9.5c0-.006-.224-3.078-.224-3.078l-2.152-8.565-.466-3.572,1.52-9.173,7.977-.36s-1.117,18.5-1.123,19.128c1.115,3.455.527,11.346.272,15.86" transform="translate(-70.647 -149.496)" fill="#466677"/>
              <path id="Path_8402" data-name="Path 8402" d="M114.085,330.993a5.369,5.369,0,0,1-.038,4.354c-1.342.494-2.467.593-3.248.069-2.537-.149-3.956.183-5.262-.18a4.137,4.137,0,0,1-3.045-2.154,1.468,1.468,0,0,1,1.233-1.911,14.726,14.726,0,0,0,5.032-.76l1.8-3.221,3.268,2.523Z" transform="translate(-98.508 -226.999)" fill="#4e4e4e"/>
              <path id="Path_8403" data-name="Path 8403" d="M90.769,229.185a47.748,47.748,0,0,0-.174,4.891c1.738,5.241,1.805,13.465,1.692,18.4-1.364,2.133-6.1,1.357-6.452-.628l-.133-1.3-.755-7.307c0-.006-.007-.047-.013-.12l-.027-.214-.314-2.353-.929-5.763c-.615-4.58.247-15.564.595-20.364.027-.374.054-.709.073-1l3.283-.374,4.579-.528a.189.189,0,0,0,.007.107c.147,1.056,5.034,1.437,5.088,2.52.114,2.507-.6,7.244-5.23,7.685-1.288,1.921-1.075,3.215-1.288,6.351" transform="translate(-75.464 -147.444)" fill="#618598"/>
              <path id="Path_8404" data-name="Path 8404" d="M84.955,155.942s-.776,1.531-1.6,3.276a34.718,34.718,0,0,0-1.972,4.666c-.274,1.371-.8,6.86-.8,6.86-2.908,2.774-7.053,2.968-10.67,1.371a5.005,5.005,0,0,1-.809-.448c-.836-.542-1.137-.595-1.551-1.645a45.364,45.364,0,0,1,.869-10.443c.06-.261.127-.515.194-.755.074-.281.16-.548.254-.809.187-.535.381-1.27.575-2.039a11.779,11.779,0,0,1,1.331-3.724l1.778-.749,1.511-.642.7-.294c.976-.375,2.728-.776,5.462-1.511.441-.12.9-.241,1.391-.381.174-.047.354-.094.535-.147,2.848-.227,4.1,3.563,2.808,7.414" transform="translate(-58.759 -103.04)" fill="#618598"/>
              <g id="Group_1786" data-name="Group 1786" transform="translate(7.983 56.386)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
                <g id="Group_1785" data-name="Group 1785">
                  <g id="Group_1784" data-name="Group 1784" clip-path="url(#clip-path-10)">
                    <path id="Path_8405" data-name="Path 8405" d="M116.363,188.925l-1.27,4.432-1,3.47c-1.651,3.866-1.679,10.644-1.658,17.509l.742,16.52-.755-7.307c0-.007-.007-.047-.013-.12l-.027-.214-.314-2.353-.929-5.763c-.615-4.579.247-15.564.595-20.364a45.363,45.363,0,0,1,.869-10.443l.354-.154.528,2a2.991,2.991,0,0,0,2.875,2.788" transform="translate(-110.926 -184.138)" fill="#618598"/>
                  </g>
                </g>
              </g>
              <path id="Path_8406" data-name="Path 8406" d="M109.663,176.344l-2.059,7.174a2.991,2.991,0,0,1-2.875-2.788l-.528-2Z" transform="translate(-94.184 -122.345)" fill="#b3b3b3"/>
              <path id="Path_8407" data-name="Path 8407" d="M137.7,163.729a26.549,26.549,0,0,1,.131-2.661l-.386-1.635c-.188-.73-.605-.3-.542.157l.027.805-.247,1.116Z" transform="translate(-132.299 -110.341)" fill="#f4c6b4"/>
              <path id="Path_8408" data-name="Path 8408" d="M141.306,162.847a14.854,14.854,0,0,1-1.252-1.149l-1.506-1.276-1.229-1.454-.776-.8-.815-.466c-.471-.329-.264-.694.1-.568l.936.362.742.442-.778-.941-1.131-.777c-.35-.246-.29-.732.175-.546l1.932,1.078-.511-.707-1.2-.835c-.342-.227-.281-.772.283-.493l.951.5,1.064.854-.277-.442-.872-.954c-.332-.459-.046-.769.44-.367l.826.785a4.42,4.42,0,0,1,.867,1.028l.428.822.431.673a6.623,6.623,0,0,1,.642,2.7Z" transform="translate(-135.372 -106.928)" fill="#f4c6b4"/>
              <path id="Path_8409" data-name="Path 8409" d="M105.388,170.567a3.859,3.859,0,0,1-2.22.408,2.991,2.991,0,0,1-2.875-2.788l-.528-2-.16-.6c.073-.28.16-.548.254-.809.187-.535.381-1.27.575-2.039a11.768,11.768,0,0,1,1.331-3.724l1.778-.749a3.6,3.6,0,0,1,3.055,3.1c.287,2.307-1.21,9.206-1.21,9.206" transform="translate(-89.749 -109.802)" fill="#fff"/>
              <path id="Path_8410" data-name="Path 8410" d="M109.663,176.344l-2.059,7.174a2.991,2.991,0,0,1-2.875-2.788l-.528-2Z" transform="translate(-94.184 -122.345)" fill="#b3b3b3"/>
              <path id="Path_8411" data-name="Path 8411" d="M82.9,150.275a2.365,2.365,0,0,1,2.163,1.711c.763,2.406-.378,8.19-.378,8.19a11.319,11.319,0,0,1-5.846,2.746,46.988,46.988,0,0,0,.661-7.107c-.256-3.427-2.757-3.735-2.757-3.735l.7-.294c.976-.374,2.727-.775,5.462-1.511" transform="translate(-61.434 -104.258)" fill="#fff"/>
              <path id="Path_8412" data-name="Path 8412" d="M70.886,155.942s-.776,1.531-1.6,3.276c0,0,1.127-7.058-.026-9.186a3.08,3.08,0,0,0-1.712-1.357c.174-.047.354-.094.535-.147,2.848-.227,4.1,3.563,2.808,7.414" transform="translate(-44.69 -103.04)" fill="#fff"/>
              <path id="Path_8413" data-name="Path 8413" d="M82.523,124.027a4.115,4.115,0,0,1-3.47,4.4c-4.2.681-5.085-1.154-5.482-3.076-.328-1.587,1.967-6.209,4.29-6.281s4.541,2.793,4.662,4.96" transform="translate(-57.662 -82.606)" fill="#f4c6b4"/>
              <path id="Path_8414" data-name="Path 8414" d="M83.613,137.134l-1.479,5.287c2.386,2.759,6.139.609,5.333-.731l.6-4.806Z" transform="translate(-65.828 -94.969)" fill="#f4c6b4"/>
              <path id="Path_8415" data-name="Path 8415" d="M74.8,125.508l.519-.917s-.795-1.209-.122-3.682,3.43-1.629,4.55-1.112c1.351.625,1.733.908,2.109,3.3s.162,3.305-.405,4.045a24.184,24.184,0,0,1-1.757,1.94s-1.221,1.639-3.848-.363a1.566,1.566,0,0,1-.616-1.352,3.333,3.333,0,0,0-.429-1.855" transform="translate(-57.563 -82.72)" fill="#4e4e4e"/>
              <path id="Path_8416" data-name="Path 8416" d="M109.468,166.33l-3.2-2.5c-.976-.965-3.014.176-2.506,2.556l4.145,5.093a3.42,3.42,0,0,0,2.3,1.328c2.7-.176,4.123-4.135,5.607-7.917.386-2.02.036-3.49-.733-4.335a2.353,2.353,0,0,0-3.761.545Z" transform="translate(-100.337 -110.9)" fill="#fff"/>
              <path id="Path_8417" data-name="Path 8417" d="M83.7,117.178s-3.252-3.333.156-5.01c2.633-1.3,4.946,2.545,4.946,2.545Z" transform="translate(-66.619 -77.635)" fill="#466677"/>
              <path id="Path_8418" data-name="Path 8418" d="M72.052,121.685s.657,6.415,5.655,6.474a6.256,6.256,0,0,0,2.56-5.35,4.366,4.366,0,0,0-3.227-4.237c-1.566-.652-4.357.552-4.988,3.113" transform="translate(-54.97 -82.143)" fill="#618598"/>
              <path id="Path_8419" data-name="Path 8419" d="M95.729,137.035c.926,1.185-.39,3.028-.825,1.969-.247-.6.258-2.7.825-1.969" transform="translate(-77.706 -94.968)" fill="#f4c6b4"/>
              <path id="Path_8420" data-name="Path 8420" d="M.014,282.783l.146,1.553.058.63.025.276.058.634.664,7.067a.91.91,0,0,0,.5.647l6.867,3.965a2.705,2.705,0,0,0,2.442,0l4.258-2.459a.875.875,0,0,0,.5-.651c.008,0,.96-9.955.96-9.955Z" transform="translate(30.889 -196.19)" fill="#f45157"/>
              <path id="Path_8421" data-name="Path 8421" d="M.571,274.529l7.767,4.484a3.051,3.051,0,0,0,2.759,0l4.819-2.782a.841.841,0,0,0,0-1.593l-7.767-4.484a3.049,3.049,0,0,0-2.759,0L.571,272.936a.841.841,0,0,0,0,1.593" transform="translate(30.899 -187.2)" fill="#f45157"/>
              <path id="Path_8422" data-name="Path 8422" d="M1.363,274.676c0,.142.138.3.363.434l1.4.81s.923.53.923.53l5.259,3.035s.184.109.184.109a2.4,2.4,0,0,0,1.169.276,2.425,2.425,0,0,0,1.173-.276l2.5-1.44,2.321-1.34c.225-.134.363-.3.363-.434s-.138-.305-.363-.439l-7.768-4.483a2.4,2.4,0,0,0-1.169-.276,2.425,2.425,0,0,0-1.173.276l-4.817,2.784c-.225.13-.363.292-.363.434" transform="translate(29.953 -188.142)" fill="#b03a3f"/>
              <g id="Group_1789" data-name="Group 1789" transform="translate(34.004 86.593)" style="mix-blend-mode: multiply;isolation: isolate">
                <g id="Group_1788" data-name="Group 1788">
                  <g id="Group_1787" data-name="Group 1787" clip-path="url(#clip-path-11)">
                    <path id="Path_8423" data-name="Path 8423" d="M10.128,284.5l5.443,3.143a2.4,2.4,0,0,0,1.169.275,2.426,2.426,0,0,0,1.173-.275l2.5-1.44-5.447-3.143a2.4,2.4,0,0,0-1.169-.275,2.424,2.424,0,0,0-1.173.275Z" transform="translate(-10.128 -282.783)" fill="#961b20"/>
                  </g>
                </g>
              </g>
              <g id="Group_1792" data-name="Group 1792" transform="translate(32.689 87.778)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
                <g id="Group_1791" data-name="Group 1791">
                  <g id="Group_1790" data-name="Group 1790" clip-path="url(#clip-path-12)">
                    <path id="Path_8424" data-name="Path 8424" d="M27.106,288.358l.306.17a1.011,1.011,0,0,1,.518.949l-.041.644a1.179,1.179,0,0,0,.591,1.1l.6.343a1.048,1.048,0,0,1,.528.909v1.672a1.018,1.018,0,0,0,.509.882l.254.147a.5.5,0,0,0,.748-.432v-.578a.466.466,0,0,1,.7-.4.466.466,0,0,0,.7-.379l.132-2.933.442-.225s-5.259-3.039-5.259-3.039l-.918-.53s-.4.254-.4.254v.465a1.125,1.125,0,0,0,.579.984" transform="translate(-26.527 -286.655)" fill="#b03a3f"/>
                  </g>
                </g>
              </g>
              <g id="Group_1795" data-name="Group 1795" transform="translate(30.68 88.146)" style="mix-blend-mode: multiply;isolation: isolate">
                <g id="Group_1794" data-name="Group 1794">
                  <g id="Group_1793" data-name="Group 1793" clip-path="url(#clip-path-13)">
                    <path id="Path_8425" data-name="Path 8425" d="M7.625,287.921l.075-.067.058.63a.446.446,0,0,0-.008.15.386.386,0,0,0,.033.125.463.463,0,0,0,.2.234l8.549,4.876a1.328,1.328,0,0,0,1.616-.217l3.285-3.331a.21.21,0,0,1,.3.3l-3.281,3.327a1.739,1.739,0,0,1-2.125.288l-8.486-4.838-.063-.038a.893.893,0,0,1-.154-1.436" transform="translate(-7.331 -287.854)" fill="#4e4e4e"/>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
      </g>
    </g>
  </g>
</a>
</svg>



                     </div>
                  </div>
                  <div class="img_svg img_svg3">
                     <div class="c-firework"></div>
                     <div class="popup_1 popup_small" id="popup_3">
                        <div class="wrap_popup_small">
                           <p class="tt_name">見た目だけじゃない。<br>ずっと心地いい暮らしを目指そう。</p>
                           <p class="btn"><a href="<?php echo home_url(); ?>/tree/">木の家を建てる<span class="bg_btn"></span></a></p>
                        </div>
                     </div>
                     <div id="map3" class="map_svg">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="317.165" height="258.326" viewBox="0 0 317.165 258.326">
  <defs>
    <clipPath id="clip-path">
      <rect id="Rectangle_40" data-name="Rectangle 40" width="141.307" height="87" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-2">
      <rect id="Rectangle_622" data-name="Rectangle 622" width="51" height="45.053" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-4">
      <rect id="Rectangle_619" data-name="Rectangle 619" width="23.257" height="18.137" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-5">
      <rect id="Rectangle_620" data-name="Rectangle 620" width="2.94" height="5.308" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-6">
      <rect id="Rectangle_625" data-name="Rectangle 625" width="39.343" height="43.653" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-8">
      <rect id="Rectangle_623" data-name="Rectangle 623" width="17.769" height="11.589" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-9">
      <rect id="Rectangle_774" data-name="Rectangle 774" width="101.615" height="82.512" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-11">
      <rect id="Rectangle_634" data-name="Rectangle 634" width="23.144" height="15.065" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-13">
      <rect id="Rectangle_626" data-name="Rectangle 626" width="9.533" height="4.645" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-14">
      <rect id="Rectangle_627" data-name="Rectangle 627" width="17.833" height="10.323" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-15">
      <rect id="Rectangle_628" data-name="Rectangle 628" width="15.065" height="8.72" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-18">
      <rect id="Rectangle_631" data-name="Rectangle 631" width="10.059" height="8.447" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-19">
      <rect id="Rectangle_632" data-name="Rectangle 632" width="15.81" height="10.803" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-21">
      <rect id="Rectangle_644" data-name="Rectangle 644" width="23.143" height="15.065" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-39">
      <rect id="Rectangle_652" data-name="Rectangle 652" width="15.809" height="10.803" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-44">
      <rect id="Rectangle_657" data-name="Rectangle 657" width="17.833" height="10.324" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-48">
      <rect id="Rectangle_661" data-name="Rectangle 661" width="10.059" height="8.448" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-151">
      <rect id="Rectangle_766" data-name="Rectangle 766" width="4.473" height="3.621" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-152">
      <path id="Path_8912" data-name="Path 8912" d="M246.251,176.622l0,1.548a.352.352,0,0,1-.142-.264l0-1.548a.352.352,0,0,0,.142.265" transform="translate(-246.109 -176.357)" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-154">
      <rect id="Rectangle_838" data-name="Rectangle 838" width="22.352" height="73.462" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-155">
      <rect id="Rectangle_768" data-name="Rectangle 768" width="4.002" height="3.69" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-156">
      <rect id="Rectangle_769" data-name="Rectangle 769" width="6.584" height="35.96" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-157">
      <rect id="Rectangle_770" data-name="Rectangle 770" width="6.118" height="12.466" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-158">
      <rect id="Rectangle_771" data-name="Rectangle 771" width="5.057" height="6.632" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-159">
      <rect id="Rectangle_772" data-name="Rectangle 772" width="6.127" height="4.92" fill="none"/>
    </clipPath>
  </defs>
  <a xlink:href="#popup_3" data-popup="popup_3" data-id="3">
  <g id="Component_24_1" data-name="Component 24 – 1" transform="translate(0 0.458)">
    <g id="Group_3202" data-name="Group 3202" transform="translate(-718.82 -1724.653)">
      <path id="Path_9131" data-name="Path 9131" d="M63.581,158.47c3.261-8.43.975-18.421.306-27.2l11.463-.911s.509,11.027-1.657,12.656c-1.014.764-1.218,3.053-1.085,5.471l.033-.005c2.036-.113,5.1-3.849,5.505-5.77a1.474,1.474,0,1,1,2.884.611c-.572,2.695-4.292,7.79-8.125,8.088a25.966,25.966,0,0,0,.787,3.786c.656,1.964,2.917,4.306,1.658,6.551-2.155,3.848-9.345,4.774-12.022.815-1.32-1.954-.525-2.076.253-4.089" transform="translate(911.996 1656.427)" fill="#675841"/>
      <path id="Path_9132" data-name="Path 9132" d="M46.857,114.981a4.814,4.814,0,0,1-.218-1.367c0-.05.012-.093.014-.141a6.357,6.357,0,0,1,.98-8.581,4.841,4.841,0,0,1-.734-2.549,4.89,4.89,0,0,1,2.789-4.406,4.9,4.9,0,0,1,4.791-3.874c.059,0,.115.015.173.017a9.7,9.7,0,0,1,6.726-8.207,4.9,4.9,0,0,1,4.565-3.142,4.832,4.832,0,0,1,1.512.261,4.84,4.84,0,0,1,1.511-.261,4.894,4.894,0,0,1,4.565,3.142,9.7,9.7,0,0,1,6.728,8.207c.059,0,.113-.017.173-.017a4.9,4.9,0,0,1,4.791,3.874,4.848,4.848,0,0,1,2.055,6.954,6.357,6.357,0,0,1,.98,8.581c0,.048.014.092.014.141a4.86,4.86,0,0,1-.218,1.367,4.894,4.894,0,0,1-3.385,8.438,4.949,4.949,0,0,1-1.2-.163,4.864,4.864,0,0,1-7.151,5.545,4.758,4.758,0,0,1-4.9,0,4.656,4.656,0,0,1-3.964.418,4.656,4.656,0,0,1-3.964-.418,4.758,4.758,0,0,1-4.9,0,4.851,4.851,0,0,1-2.451.68,4.9,4.9,0,0,1-4.9-4.9,4.831,4.831,0,0,1,.2-1.322,4.851,4.851,0,0,1-6.1-4.74,4.879,4.879,0,0,1,1.518-3.535" transform="translate(914.625 1673.353)" fill="#a5b775"/>
      <path id="Path_9133" data-name="Path 9133" d="M45.34,125.708a4.888,4.888,0,0,1,1.518-3.535,4.859,4.859,0,0,1-.216-1.367c0-.05.01-.093.012-.141a6.359,6.359,0,0,1,.981-8.581,4.851,4.851,0,0,1,2.056-6.954,4.894,4.894,0,0,1,1.076-2.161c-1.874,6.749,1.823,11.367,4,10.33-.982,5.628,6.552,10.213,9.5,9.559-1.965,5.9,13.276,6.644,14.172,2.667-.9,3.978,11.8-.1,9.621-3.351a4.894,4.894,0,0,1-3.385,8.438,4.956,4.956,0,0,1-1.2-.162,4.855,4.855,0,0,1,.2,1.321,4.872,4.872,0,0,1-7.355,4.223,4.757,4.757,0,0,1-4.9,0,4.656,4.656,0,0,1-3.964.418,4.655,4.655,0,0,1-3.964-.418,4.759,4.759,0,0,1-4.9,0,4.872,4.872,0,0,1-7.355-4.223,4.806,4.806,0,0,1,.2-1.321,4.854,4.854,0,0,1-6.1-4.74" transform="translate(914.624 1666.161)" fill="#889a58"/>
    </g>
    <g id="Group_3203" data-name="Group 3203" transform="translate(-750.82 -1741.653)">
      <path id="Path_9131-2" data-name="Path 9131" d="M63.581,158.47c3.261-8.43.975-18.421.306-27.2l11.463-.911s.509,11.027-1.657,12.656c-1.014.764-1.218,3.053-1.085,5.471l.033-.005c2.036-.113,5.1-3.849,5.505-5.77a1.474,1.474,0,1,1,2.884.611c-.572,2.695-4.292,7.79-8.125,8.088a25.966,25.966,0,0,0,.787,3.786c.656,1.964,2.917,4.306,1.658,6.551-2.155,3.848-9.345,4.774-12.022.815-1.32-1.954-.525-2.076.253-4.089" transform="translate(911.996 1656.427)" fill="#675841"/>
      <path id="Path_9132-2" data-name="Path 9132" d="M46.857,114.981a4.814,4.814,0,0,1-.218-1.367c0-.05.012-.093.014-.141a6.357,6.357,0,0,1,.98-8.581,4.841,4.841,0,0,1-.734-2.549,4.89,4.89,0,0,1,2.789-4.406,4.9,4.9,0,0,1,4.791-3.874c.059,0,.115.015.173.017a9.7,9.7,0,0,1,6.726-8.207,4.9,4.9,0,0,1,4.565-3.142,4.832,4.832,0,0,1,1.512.261,4.84,4.84,0,0,1,1.511-.261,4.894,4.894,0,0,1,4.565,3.142,9.7,9.7,0,0,1,6.728,8.207c.059,0,.113-.017.173-.017a4.9,4.9,0,0,1,4.791,3.874,4.848,4.848,0,0,1,2.055,6.954,6.357,6.357,0,0,1,.98,8.581c0,.048.014.092.014.141a4.86,4.86,0,0,1-.218,1.367,4.894,4.894,0,0,1-3.385,8.438,4.949,4.949,0,0,1-1.2-.163,4.864,4.864,0,0,1-7.151,5.545,4.758,4.758,0,0,1-4.9,0,4.656,4.656,0,0,1-3.964.418,4.656,4.656,0,0,1-3.964-.418,4.758,4.758,0,0,1-4.9,0,4.851,4.851,0,0,1-2.451.68,4.9,4.9,0,0,1-4.9-4.9,4.831,4.831,0,0,1,.2-1.322,4.851,4.851,0,0,1-6.1-4.74,4.879,4.879,0,0,1,1.518-3.535" transform="translate(914.625 1673.353)" fill="#a5b775"/>
      <path id="Path_9133-2" data-name="Path 9133" d="M45.34,125.708a4.888,4.888,0,0,1,1.518-3.535,4.859,4.859,0,0,1-.216-1.367c0-.05.01-.093.012-.141a6.359,6.359,0,0,1,.981-8.581,4.851,4.851,0,0,1,2.056-6.954,4.894,4.894,0,0,1,1.076-2.161c-1.874,6.749,1.823,11.367,4,10.33-.982,5.628,6.552,10.213,9.5,9.559-1.965,5.9,13.276,6.644,14.172,2.667-.9,3.978,11.8-.1,9.621-3.351a4.894,4.894,0,0,1-3.385,8.438,4.956,4.956,0,0,1-1.2-.162,4.855,4.855,0,0,1,.2,1.321,4.872,4.872,0,0,1-7.355,4.223,4.757,4.757,0,0,1-4.9,0,4.656,4.656,0,0,1-3.964.418,4.655,4.655,0,0,1-3.964-.418,4.759,4.759,0,0,1-4.9,0,4.872,4.872,0,0,1-7.355-4.223,4.806,4.806,0,0,1,.2-1.321,4.854,4.854,0,0,1-6.1-4.74" transform="translate(914.624 1666.161)" fill="#889a58"/>
    </g>
    <g id="Group_3204" data-name="Group 3204" transform="translate(-687.42 -1706.237)">
      <path id="Path_9131-3" data-name="Path 9131" d="M63.581,158.47c3.261-8.43.975-18.421.306-27.2l11.463-.911s.509,11.027-1.657,12.656c-1.014.764-1.218,3.053-1.085,5.471l.033-.005c2.036-.113,5.1-3.849,5.505-5.77a1.474,1.474,0,1,1,2.884.611c-.572,2.695-4.292,7.79-8.125,8.088a25.966,25.966,0,0,0,.787,3.786c.656,1.964,2.917,4.306,1.658,6.551-2.155,3.848-9.345,4.774-12.022.815-1.32-1.954-.525-2.076.253-4.089" transform="translate(911.996 1656.427)" fill="#675841"/>
      <path id="Path_9132-3" data-name="Path 9132" d="M46.857,114.981a4.814,4.814,0,0,1-.218-1.367c0-.05.012-.093.014-.141a6.357,6.357,0,0,1,.98-8.581,4.841,4.841,0,0,1-.734-2.549,4.89,4.89,0,0,1,2.789-4.406,4.9,4.9,0,0,1,4.791-3.874c.059,0,.115.015.173.017a9.7,9.7,0,0,1,6.726-8.207,4.9,4.9,0,0,1,4.565-3.142,4.832,4.832,0,0,1,1.512.261,4.84,4.84,0,0,1,1.511-.261,4.894,4.894,0,0,1,4.565,3.142,9.7,9.7,0,0,1,6.728,8.207c.059,0,.113-.017.173-.017a4.9,4.9,0,0,1,4.791,3.874,4.848,4.848,0,0,1,2.055,6.954,6.357,6.357,0,0,1,.98,8.581c0,.048.014.092.014.141a4.86,4.86,0,0,1-.218,1.367,4.894,4.894,0,0,1-3.385,8.438,4.949,4.949,0,0,1-1.2-.163,4.864,4.864,0,0,1-7.151,5.545,4.758,4.758,0,0,1-4.9,0,4.656,4.656,0,0,1-3.964.418,4.656,4.656,0,0,1-3.964-.418,4.758,4.758,0,0,1-4.9,0,4.851,4.851,0,0,1-2.451.68,4.9,4.9,0,0,1-4.9-4.9,4.831,4.831,0,0,1,.2-1.322,4.851,4.851,0,0,1-6.1-4.74,4.879,4.879,0,0,1,1.518-3.535" transform="translate(914.625 1673.353)" fill="#a5b775"/>
      <path id="Path_9133-3" data-name="Path 9133" d="M45.34,125.708a4.888,4.888,0,0,1,1.518-3.535,4.859,4.859,0,0,1-.216-1.367c0-.05.01-.093.012-.141a6.359,6.359,0,0,1,.981-8.581,4.851,4.851,0,0,1,2.056-6.954,4.894,4.894,0,0,1,1.076-2.161c-1.874,6.749,1.823,11.367,4,10.33-.982,5.628,6.552,10.213,9.5,9.559-1.965,5.9,13.276,6.644,14.172,2.667-.9,3.978,11.8-.1,9.621-3.351a4.894,4.894,0,0,1-3.385,8.438,4.956,4.956,0,0,1-1.2-.162,4.855,4.855,0,0,1,.2,1.321,4.872,4.872,0,0,1-7.355,4.223,4.757,4.757,0,0,1-4.9,0,4.656,4.656,0,0,1-3.964.418,4.655,4.655,0,0,1-3.964-.418,4.759,4.759,0,0,1-4.9,0,4.872,4.872,0,0,1-7.355-4.223,4.806,4.806,0,0,1,.2-1.321,4.854,4.854,0,0,1-6.1-4.74" transform="translate(914.624 1666.161)" fill="#889a58"/>
    </g>
    <g id="Group_3194" data-name="Group 3194" transform="translate(192.534 124.636) rotate(177)">
      <g id="Group_87" data-name="Group 87" transform="translate(0 0)" clip-path="url(#clip-path)">
        <path id="Path_1271" data-name="Path 1271" d="M36.943,16.929a8.5,8.5,0,0,1-6.474,8.242,8.479,8.479,0,0,1-15.412,2.468A8.45,8.45,0,0,1,3.028,21.591,8.464,8.464,0,0,1,6.564,6.856,8.494,8.494,0,0,1,13.5,2.961a8.413,8.413,0,0,1,12.866.059,8.47,8.47,0,0,1,7.624,7.5,8.46,8.46,0,0,1,2.958,6.408" transform="translate(0 55.389)" fill="#a5b775"/>
        <path id="Path_1272" data-name="Path 1272" d="M30.882,14.71c.014-.2.061-.4.061-.6a8.51,8.51,0,0,0-15.49-4.879A8.454,8.454,0,0,0,1.646,13.638,9.764,9.764,0,0,0,0,13.288,8.516,8.516,0,0,1,6.339,6.856a8.491,8.491,0,0,1,6.93-3.894,8.416,8.416,0,0,1,12.868.059,8.465,8.465,0,0,1,7.62,7.5,8.5,8.5,0,0,1,2.879,5.289,8.412,8.412,0,0,0-4.363-1.238,8.628,8.628,0,0,0-1.391.139" transform="translate(0.153 55.389)" fill="#889a58"/>
        <path id="Path_1273" data-name="Path 1273" d="M36.943,16.929a8.5,8.5,0,0,1-6.476,8.245,8.481,8.481,0,0,1-15.412,2.467A8.451,8.451,0,0,1,3.025,21.595,8.467,8.467,0,0,1,6.564,6.857a8.488,8.488,0,0,1,6.928-3.894,8.416,8.416,0,0,1,12.871.059,8.464,8.464,0,0,1,7.62,7.5,8.47,8.47,0,0,1,2.959,6.408" transform="translate(28.501 41.385)" fill="#a5b775"/>
        <path id="Path_1274" data-name="Path 1274" d="M30.88,14.712c.016-.2.061-.4.061-.6A8.508,8.508,0,0,0,15.454,9.231,8.454,8.454,0,0,0,1.644,13.64,9.4,9.4,0,0,0,0,13.291,8.512,8.512,0,0,1,6.338,6.857,8.493,8.493,0,0,1,13.27,2.963a8.409,8.409,0,0,1,12.865.059,8.466,8.466,0,0,1,7.624,7.5,8.5,8.5,0,0,1,2.874,5.291,8.418,8.418,0,0,0-4.361-1.238,8.669,8.669,0,0,0-1.391.139" transform="translate(28.655 41.385)" fill="#889a58"/>
        <path id="Path_1275" data-name="Path 1275" d="M36.942,16.927a8.5,8.5,0,0,1-6.476,8.245,8.48,8.48,0,0,1-15.412,2.465,8.41,8.41,0,0,1-3.672.863,8.515,8.515,0,0,1-8.357-6.909A8.468,8.468,0,0,1,6.562,6.854a8.494,8.494,0,0,1,6.93-3.893,8.416,8.416,0,0,1,12.869.061,8.461,8.461,0,0,1,7.62,7.5,8.466,8.466,0,0,1,2.961,6.408" transform="translate(56.305 25.581)" fill="#a5b775"/>
        <path id="Path_1276" data-name="Path 1276" d="M30.88,14.712c.016-.206.061-.4.061-.606A8.51,8.51,0,0,0,15.454,9.227,8.453,8.453,0,0,0,1.644,13.64,9.24,9.24,0,0,0,0,13.289,8.514,8.514,0,0,1,6.338,6.854,8.5,8.5,0,0,1,13.27,2.961a8.411,8.411,0,0,1,12.865.061,8.464,8.464,0,0,1,7.624,7.5,8.505,8.505,0,0,1,2.874,5.292,7.941,7.941,0,0,0-5.752-1.1" transform="translate(56.458 25.581)" fill="#889a58"/>
        <path id="Path_1277" data-name="Path 1277" d="M36.943,16.927a8.5,8.5,0,0,1-6.474,8.245,8.481,8.481,0,0,1-15.414,2.467,8.415,8.415,0,0,1-3.67.863,8.515,8.515,0,0,1-8.357-6.909A8.466,8.466,0,0,1,6.564,6.856,8.5,8.5,0,0,1,13.5,2.963a8.412,8.412,0,0,1,12.867.059,8.466,8.466,0,0,1,7.622,7.5,8.462,8.462,0,0,1,2.958,6.407" transform="translate(81.239 13.001)" fill="#a5b775"/>
        <path id="Path_1278" data-name="Path 1278" d="M30.884,14.712c.014-.2.059-.4.059-.6a8.51,8.51,0,0,0-15.49-4.879A8.451,8.451,0,0,0,1.648,13.64,9.442,9.442,0,0,0,0,13.289,8.522,8.522,0,0,1,6.34,6.856a8.492,8.492,0,0,1,6.929-3.893,8.413,8.413,0,0,1,12.868.059,8.462,8.462,0,0,1,7.621,7.5,8.5,8.5,0,0,1,2.878,5.291,7.94,7.94,0,0,0-5.752-1.1" transform="translate(81.392 13.001)" fill="#889a58"/>
        <path id="Path_1279" data-name="Path 1279" d="M36.941,16.927a8.5,8.5,0,0,1-6.472,8.245,8.48,8.48,0,0,1-15.412,2.469A8.454,8.454,0,0,1,3.027,21.593,8.466,8.466,0,0,1,6.564,6.856a8.5,8.5,0,0,1,6.93-3.894,8.416,8.416,0,0,1,12.869.061,8.464,8.464,0,0,1,7.62,7.5,8.462,8.462,0,0,1,2.958,6.407" transform="translate(104.367 0.001)" fill="#a5b775"/>
        <path id="Path_1280" data-name="Path 1280" d="M30.884,14.712c.013-.2.058-.4.058-.6A8.508,8.508,0,0,0,15.454,9.231,8.451,8.451,0,0,0,1.646,13.64,9.57,9.57,0,0,0,0,13.289,8.521,8.521,0,0,1,6.339,6.856,8.5,8.5,0,0,1,13.27,2.961a8.412,8.412,0,0,1,12.866.061,8.466,8.466,0,0,1,7.623,7.5,8.5,8.5,0,0,1,2.876,5.292,8.415,8.415,0,0,0-4.361-1.24,8.574,8.574,0,0,0-1.389.139" transform="translate(104.521 0.001)" fill="#889a58"/>
      </g>
    </g>
    <g id="Group_3193" data-name="Group 3193" transform="translate(131.973)">
      <path id="Path_12604" data-name="Path 12604" d="M125.488,47.01l67.728,39.1L190.676,82.5,122.949,43.4Z" transform="translate(-50.907 -17.968)" fill="#222"/>
      <path id="Path_12605" data-name="Path 12605" d="M115.588,139.271v.582L170.3,67.508l19.87,28.269V94.8L170.442,66.735Z" transform="translate(-47.859 -27.632)" fill="#444"/>
      <path id="Path_12606" data-name="Path 12606" d="M122.948,53.407l67.728,39.1v57.8l-67.728-39.1Z" transform="translate(-50.906 -22.113)" fill="#bbb" fill-rule="evenodd"/>
      <path id="Path_12607" data-name="Path 12607" d="M202.758,193.367V172.231l5.861-3.385v21.138Z" transform="translate(-83.952 -69.911)" fill="#fff" fill-rule="evenodd"/>
      <path id="Path_12608" data-name="Path 12608" d="M212.761,168.846l1.015.587V190.57l-1.015-.586Z" transform="translate(-88.093 -69.911)" fill="#888" fill-rule="evenodd"/>
      <path id="Path_12609" data-name="Path 12609" d="M211.027,205.506l1.015-.586,1.016.586-1.016.587Z" transform="translate(-87.376 -84.847)" fill="#fff" fill-rule="evenodd"/>
      <path id="Path_12610" data-name="Path 12610" d="M211.027,169.433l1.015-.587,1.016.587-1.016.586Z" transform="translate(-87.376 -69.911)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12611" data-name="Path 12611" d="M211.027,171.85l1.015.586v18.792l-1.015-.587Z" transform="translate(-87.376 -71.154)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12612" data-name="Path 12612" d="M204.491,208.132l3.83-2.212,1.015.587-3.83,2.211Z" transform="translate(-84.669 -85.261)" fill="#fff" fill-rule="evenodd"/>
      <path id="Path_12613" data-name="Path 12613" d="M208.321,203.919l1.015.587-3.83,2.211-1.015-.587Z" transform="translate(-84.669 -84.433)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12614" data-name="Path 12614" d="M204.491,172.059l3.83-2.211,1.015.586-3.83,2.212Z" transform="translate(-84.669 -70.326)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12615" data-name="Path 12615" d="M203.774,209.7l1.015.586-1.015.587-1.015-.587Z" transform="translate(-83.952 -86.824)" fill="#fff" fill-rule="evenodd"/>
      <path id="Path_12616" data-name="Path 12616" d="M203.774,173.621l1.015.587-1.015.586-1.015-.586Z" transform="translate(-83.952 -71.888)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12617" data-name="Path 12617" d="M202.758,174.623l1.015.586v21.138l-1.015-.587Z" transform="translate(-83.952 -72.303)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12618" data-name="Path 12618" d="M214.494,190.984l.085.049V169.9l-.085-.049Z" transform="translate(-88.811 -70.326)" fill="#888"/>
      <path id="Path_12619" data-name="Path 12619" d="M212.761,206.507l1.015-.587.086.049-1.016.587Z" transform="translate(-88.093 -85.261)" fill="#fff" fill-rule="evenodd"/>
      <path id="Path_12620" data-name="Path 12620" d="M212.761,170.434l1.015-.586.086.049-1.016.586Z" transform="translate(-88.093 -70.326)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12621" data-name="Path 12621" d="M212.761,191.641l.085.049V172.9l-.085-.05Z" transform="translate(-88.093 -71.568)" fill="#222"/>
      <path id="Path_12622" data-name="Path 12622" d="M206.225,209.133l3.83-2.211.085.049-3.83,2.211Z" transform="translate(-85.387 -85.676)" fill="#fff" fill-rule="evenodd"/>
      <path id="Path_12623" data-name="Path 12623" d="M210.054,204.92l.085.049-3.83,2.211-.084-.049Z" transform="translate(-85.387 -84.847)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12624" data-name="Path 12624" d="M210.054,172.85l.085.05-3.83,2.211-.084-.049Z" transform="translate(-85.387 -71.568)" fill="#6af" fill-rule="evenodd"/>
      <path id="Path_12625" data-name="Path 12625" d="M206.225,173.06l3.83-2.212.085.049-3.83,2.212Z" transform="translate(-85.387 -70.74)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12626" data-name="Path 12626" d="M206.225,195.415l.084.049V176.673l-.084-.049Z" transform="translate(-85.387 -73.131)" fill="#059"/>
      <path id="Path_12627" data-name="Path 12627" d="M205.507,210.7l.084.049-1.016.587-.084-.049Z" transform="translate(-84.67 -87.238)" fill="#fff" fill-rule="evenodd"/>
      <path id="Path_12628" data-name="Path 12628" d="M205.507,174.623l.084.049-1.016.586-.084-.049Z" transform="translate(-84.67 -72.303)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12629" data-name="Path 12629" d="M204.492,196.76l.084.049V175.671l-.084-.049Z" transform="translate(-84.67 -72.716)" fill="#222"/>
      <path id="Path_12630" data-name="Path 12630" d="M204.635,196.843V175.706l1.015.587v18.791Z" transform="translate(-84.729 -72.751)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12631" data-name="Path 12631" d="M212.906,190.482V171.691l1.015-1.76v21.136Z" transform="translate(-88.154 -70.36)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12632" data-name="Path 12632" d="M204.635,173.315l5.862-3.384-1.016,1.76L205.65,173.9Z" transform="translate(-84.729 -70.36)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12633" data-name="Path 12633" d="M205.651,207.214,209.482,205l1.015.586-5.862,3.384Z" transform="translate(-84.729 -84.882)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12634" data-name="Path 12634" d="M206.368,193.936V175.145l3.831-2.211v18.791Z" transform="translate(-85.447 -71.604)" fill="#6af" fill-rule="evenodd"/>
      <path id="Path_12635" data-name="Path 12635" d="M220.174,155.107v32.422l-5.535-2.6V163.793Z" transform="translate(-88.871 -64.222)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12636" data-name="Path 12636" d="M200.442,209.388,206.3,206l5.534,2.6-17.33,10.005Z" transform="translate(-80.536 -85.296)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12637" data-name="Path 12637" d="M194.509,165.112l17.33-10.005-5.535,8.686-5.862,3.384Z" transform="translate(-80.536 -64.222)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12638" data-name="Path 12638" d="M194.509,204.6V172.182l5.933,2.065v21.138Z" transform="translate(-80.536 -71.292)" fill="#fff" fill-rule="evenodd"/>
      <path id="Path_12639" data-name="Path 12639" d="M110.7,96.714l59.262,34.215-17.331,10.005L93.37,106.72Z" transform="translate(-38.66 -40.044)" fill="#fff" fill-rule="evenodd"/>
      <path id="Path_12640" data-name="Path 12640" d="M122.768,53.153l67.729,39.1.1.149L122.873,53.3Z" transform="translate(-50.832 -22.008)" fill="#444" fill-rule="evenodd"/>
      <path id="Path_12641" data-name="Path 12641" d="M169.963,60.19,110.7,25.974,93.37,1.319l59.263,34.215Z" transform="translate(-38.66 -0.546)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12642" data-name="Path 12642" d="M169.858,70.051,110.6,35.836,93.37,11.33l59.263,34.214Z" transform="translate(-38.66 -4.691)" fill="#444" fill-rule="evenodd"/>
      <path id="Path_12643" data-name="Path 12643" d="M93.513,0l-.144.192,59.263,34.214.144-.19Z" transform="translate(-38.659 0)" fill="#888"/>
      <path id="Path_12644" data-name="Path 12644" d="M211.735,94.228l-17.226,9.945V69.721Z" transform="translate(-80.536 -28.868)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12645" data-name="Path 12645" d="M211.839,84.367l-17.33-24.656,8.465,4.888,17.331,24.656Z" transform="translate(-80.536 -24.723)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12646" data-name="Path 12646" d="M211.735,94.228,194.509,69.721l8.465,4.888L220.2,99.116Z" transform="translate(-80.536 -28.868)" fill="#444" fill-rule="evenodd"/>
      <path id="Path_12647" data-name="Path 12647" d="M194.509,58.583l.144-.19,8.466,4.888-.145.19Z" transform="translate(-80.536 -24.178)" fill="#777" fill-rule="evenodd"/>
      <path id="Path_12648" data-name="Path 12648" d="M93.37,11.33l59.263,34.214V80L93.37,45.781Z" transform="translate(-38.66 -4.691)" fill="#888" fill-rule="evenodd"/>
      <path id="Path_12649" data-name="Path 12649" d="M93.37,113.791,152.632,148v32.422L93.37,146.212Z" transform="translate(-38.66 -47.115)" fill="#888" fill-rule="evenodd"/>
      <path id="Path_12650" data-name="Path 12650" d="M64.365,23.793l17-22.475,66.628,38.468-17,22.475Z" transform="translate(-26.65 -0.546)" fill="silver" fill-rule="evenodd"/>
      <path id="Path_12652" data-name="Path 12652" d="M62.631,41.017l1.016-1.343,66.628,38.468-1.017,1.343Z" transform="translate(-25.932 -16.427)" fill="silver" fill-rule="evenodd"/>
      <path id="Path_12654" data-name="Path 12654" d="M34.858,63.486l16.274-21.52,66.627,38.468-16.272,21.518Z" transform="translate(-14.433 -17.376)" fill="silver" fill-rule="evenodd"/>
      <path id="Path_12656" data-name="Path 12656" d="M33.124,80.036l1.015-1.343,66.628,38.466L99.753,118.5Z" transform="translate(-13.715 -32.583)" fill="silver" fill-rule="evenodd"/>
      <path id="Path_12658" data-name="Path 12658" d="M1.879,105.195l18.309-24.21,66.628,38.468-18.309,24.21Z" transform="translate(-0.778 -33.532)" fill="silver" fill-rule="evenodd"/>
      <path id="Path_12660" data-name="Path 12660" d="M34.46,212.552l-7.117-4.109v-25.66l7.117,4.109Z" transform="translate(-11.321 -75.681)" fill="#656" fill-rule="evenodd"/>
      <path id="Path_12661" data-name="Path 12661" d="M.145,123.646l14.911,8.609,1.016-1.344L1.161,122.3Z" transform="translate(-0.06 -50.64)" fill="silver"/>
      <path id="Path_12663" data-name="Path 12663" d="M26.472,208.443l-1.233.712V183.5l1.233-.713Z" transform="translate(-10.45 -75.681)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12664" data-name="Path 12664" d="M27.706,227.287,26.472,228l-1.233-.713,1.233-.713Z" transform="translate(-10.45 -93.813)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12665" data-name="Path 12665" d="M27.706,183.5l-1.235.711-1.233-.711,1.233-.713Z" transform="translate(-10.45 -75.681)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12666" data-name="Path 12666" d="M26.608,138.924l-1.015-.586,1.015-1.344,1.017.587Z" transform="translate(-10.597 -56.722)" fill="silver" fill-rule="evenodd"/>
      <path id="Path_12668" data-name="Path 12668" d="M28.578,209.241l-1.235.711V187.14l1.235-.711Z" transform="translate(-11.321 -77.191)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12669" data-name="Path 12669" d="M28.578,227.791l4.65,2.685-1.233.711L27.343,228.5Z" transform="translate(-11.321 -94.317)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12670" data-name="Path 12670" d="M33.227,228.045l-1.233.713-4.651-2.685,1.234-.711Z" transform="translate(-11.322 -93.311)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12671" data-name="Path 12671" d="M28.578,184l4.65,2.684-1.233.713-4.651-2.685Z" transform="translate(-11.321 -76.185)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12672" data-name="Path 12672" d="M31.156,141.55l-3.831-2.212L28.342,138l3.829,2.211Z" transform="translate(-11.314 -57.137)" fill="silver" fill-rule="evenodd"/>
      <path id="Path_12674" data-name="Path 12674" d="M36.514,232.374l1.233.711-1.233.712-1.233-.712Z" transform="translate(-14.608 -96.214)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12675" data-name="Path 12675" d="M36.514,188.579l1.233.713L36.514,190l-1.233-.711Z" transform="translate(-14.608 -78.081)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12676" data-name="Path 12676" d="M34.879,143.7l-1.015-.586,1.015-1.344,1.015.587Z" transform="translate(-14.021 -58.699)" fill="silver" fill-rule="evenodd"/>
      <path id="Path_12678" data-name="Path 12678" d="M38.618,215.455l-1.233.713V190.507l1.233-.711Z" transform="translate(-15.479 -78.585)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12679" data-name="Path 12679" d="M35.6,144.113l1.015-1.343,45.856,26.474-1.017,1.343Z" transform="translate(-14.739 -59.114)" fill="silver" fill-rule="evenodd"/>
      <path id="Path_12681" data-name="Path 12681" d="M0,124.707l14.911,8.608L15,133.2.085,124.595Z" transform="translate(0 -51.588)" fill="silver"/>
      <path id="Path_12682" data-name="Path 12682" d="M0,123.714l14.911,8.608.084-.111L.085,123.6Z" transform="translate(0 -51.177)" fill="#888"/>
      <path id="Path_12683" data-name="Path 12683" d="M25.065,184.058v25.66l.1-.059V184Z" transform="translate(-10.378 -76.185)" fill="#ddd"/>
      <path id="Path_12684" data-name="Path 12684" d="M26.4,228.5l-.1.059-1.233-.713.1-.059Z" transform="translate(-10.378 -94.317)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12685" data-name="Path 12685" d="M26.4,184.71l-.1.059-1.233-.711.1-.059Z" transform="translate(-10.378 -76.185)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12686" data-name="Path 12686" d="M25.532,139.288l1.015.586-.084.113-1.016-.587Z" transform="translate(-10.537 -57.672)" fill="silver" fill-rule="evenodd"/>
      <path id="Path_12687" data-name="Path 12687" d="M25.532,138.294l1.015.586-.084.113-1.016-.587Z" transform="translate(-10.537 -57.261)" fill="#888" fill-rule="evenodd"/>
      <path id="Path_12688" data-name="Path 12688" d="M27.169,187.7v22.812l.1-.06V187.642Z" transform="translate(-11.249 -77.693)" fill="#a0a0a4"/>
      <path id="Path_12689" data-name="Path 12689" d="M27.271,229.007l4.651,2.684-.1.059-4.649-2.684Z" transform="translate(-11.25 -94.82)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12690" data-name="Path 12690" d="M31.922,229.26l-.1.059-4.65-2.684.1-.06Z" transform="translate(-11.249 -93.813)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12691" data-name="Path 12691" d="M31.922,190.328l-.1.059-4.65-2.684.1-.06Z" transform="translate(-11.249 -77.693)" fill="#6af" fill-rule="evenodd"/>
      <path id="Path_12692" data-name="Path 12692" d="M27.271,185.213l4.651,2.685-.1.059-4.649-2.685Z" transform="translate(-11.25 -76.687)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12693" data-name="Path 12693" d="M27.266,140.287,31.1,142.5l-.086.111-3.83-2.211Z" transform="translate(-11.254 -58.086)" fill="silver" fill-rule="evenodd"/>
      <path id="Path_12694" data-name="Path 12694" d="M27.266,139.294l3.831,2.212-.086.111-3.83-2.211Z" transform="translate(-11.254 -57.675)" fill="#888" fill-rule="evenodd"/>
      <path id="Path_12695" data-name="Path 12695" d="M35.1,192.284V215.1l.1-.059V192.225Z" transform="translate(-14.535 -79.591)" fill="#6af"/>
      <path id="Path_12696" data-name="Path 12696" d="M35.207,233.587l1.233.713-.1.059-1.233-.713Z" transform="translate(-14.535 -96.717)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12697" data-name="Path 12697" d="M35.207,189.8l1.233.711-.1.059-1.233-.711Z" transform="translate(-14.535 -78.585)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12698" data-name="Path 12698" d="M33.8,144.062l1.015.586-.085.112-1.015-.587Z" transform="translate(-13.961 -59.649)" fill="silver" fill-rule="evenodd"/>
      <path id="Path_12699" data-name="Path 12699" d="M33.8,143.069l1.015.586-.085.112-1.015-.587Z" transform="translate(-13.961 -59.238)" fill="#888" fill-rule="evenodd"/>
      <path id="Path_12700" data-name="Path 12700" d="M37.209,191.069V216.73l.1-.059V191.009Z" transform="translate(-15.406 -79.087)" fill="#a0a0a4"/>
      <path id="Path_12701" data-name="Path 12701" d="M35.536,145.062l45.855,26.474-.084.112L35.451,145.175Z" transform="translate(-14.679 -60.063)" fill="silver" fill-rule="evenodd"/>
      <path id="Path_12702" data-name="Path 12702" d="M35.536,144.069l45.855,26.474-.084.113L35.451,144.182Z" transform="translate(-14.679 -59.652)" fill="#888" fill-rule="evenodd"/>
      <path id="Path_12703" data-name="Path 12703" d="M165.139,163.943l-18.305,10.569v-6.768l18.305-10.569Z" transform="translate(-60.797 -65.078)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12704" data-name="Path 12704" d="M165.139,168.725l1.015.587L147.85,179.881l-1.015-.587Z" transform="translate(-60.797 -69.861)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12705" data-name="Path 12705" d="M178.074,167.9v-1.173l1.015.587v1.173Z" transform="translate(-73.731 -69.032)" fill="#656" fill-rule="evenodd"/>
      <path id="Path_12706" data-name="Path 12706" d="M146.834,184.76l1.015.587v1.172l-1.015-.587Z" transform="translate(-60.796 -76.5)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12707" data-name="Path 12707" d="M164.84,167.725l1.017.586-16.274,9.4-1.016-.587Z" transform="translate(-61.514 -69.447)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12708" data-name="Path 12708" d="M178.074,163.6v-4.423l1.015.587v4.423Z" transform="translate(-73.731 -65.907)" fill="#656" fill-rule="evenodd"/>
      <path id="Path_12709" data-name="Path 12709" d="M176.339,160.177l1.017.587v4.422l-1.017-.586Z" transform="translate(-73.013 -66.321)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12710" data-name="Path 12710" d="M146.834,181.635v-4.423l1.015.587v4.423Z" transform="translate(-60.796 -73.375)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12711" data-name="Path 12711" d="M178.074,158.347v-1.173l1.015.587v1.173Z" transform="translate(-73.731 -65.078)" fill="#656" fill-rule="evenodd"/>
      <path id="Path_12712" data-name="Path 12712" d="M146.834,176.384v-1.173l1.015.587v1.173Z" transform="translate(-60.796 -72.546)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12713" data-name="Path 12713" d="M165.139,157.174l1.015.587L147.85,168.33l-1.015-.587Z" transform="translate(-60.797 -65.078)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12714" data-name="Path 12714" d="M168.42,66.968l1.015.587L114.725,139.9l-1.016-.587Z" transform="translate(-47.081 -27.728)" fill="#444" fill-rule="evenodd"/>
      <path id="Path_12716" data-name="Path 12716" d="M166.873,169.727l.084.049-18.306,10.569-.084-.049Z" transform="translate(-61.514 -70.275)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12717" data-name="Path 12717" d="M179.807,168.9l.084.049v-1.173l-.084-.049Z" transform="translate(-74.449 -69.446)" fill="#656"/>
      <path id="Path_12718" data-name="Path 12718" d="M148.568,186.935l.084.049v-1.173l-.084-.049Z" transform="translate(-61.514 -76.915)" fill="#222"/>
      <path id="Path_12719" data-name="Path 12719" d="M166.575,168.725l.084.05-16.274,9.395-.084-.049Z" transform="translate(-62.232 -69.861)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12720" data-name="Path 12720" d="M179.807,164.6l.084.049v-4.423l-.084-.048Z" transform="translate(-74.449 -66.322)" fill="#656"/>
      <path id="Path_12721" data-name="Path 12721" d="M178.074,165.6l.084.05v-4.423l-.084-.049Z" transform="translate(-73.731 -66.736)" fill="#222"/>
      <path id="Path_12722" data-name="Path 12722" d="M150.3,181.636l.084.049v-4.423l-.084-.049Z" transform="translate(-62.232 -73.375)" fill="#059"/>
      <path id="Path_12723" data-name="Path 12723" d="M148.568,182.637l.084.049v-4.423l-.084-.049Z" transform="translate(-61.514 -73.79)" fill="#222"/>
      <path id="Path_12724" data-name="Path 12724" d="M166.575,161.179l.084.049-16.274,9.4-.084-.049Z" transform="translate(-62.232 -66.736)" fill="#6af" fill-rule="evenodd"/>
      <path id="Path_12725" data-name="Path 12725" d="M179.807,159.348l.084.049v-1.173l-.084-.049Z" transform="translate(-74.449 -65.493)" fill="#656"/>
      <path id="Path_12726" data-name="Path 12726" d="M148.568,177.385l.084.049v-1.173l-.084-.049Z" transform="translate(-61.514 -72.961)" fill="#222"/>
      <path id="Path_12727" data-name="Path 12727" d="M166.873,158.176l.084.049-18.306,10.569-.084-.049Z" transform="translate(-61.514 -65.493)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12728" data-name="Path 12728" d="M170.153,67.97l.084.049-54.71,72.345-.085-.049Z" transform="translate(-47.799 -28.143)" fill="#444" fill-rule="evenodd"/>
      <path id="Path_12729" data-name="Path 12729" d="M170.153,66.977l.084.049-54.71,72.345-.085-.049Z" transform="translate(-47.799 -27.732)" fill="#777" fill-rule="evenodd"/>
      <path id="Path_12730" data-name="Path 12730" d="M14.911,185.166V164.03l5.861,3.384v21.138ZM0,182.352l67.729,39.1V163.889L0,124.787Z" transform="translate(0 -51.668)" fill="#bbb"/>
      <path id="Path_12731" data-name="Path 12731" d="M0,124.376l67.729,39.1V162.9L0,123.794Z" transform="translate(0 -51.257)" fill="#444"/>
      <path id="Path_12732" data-name="Path 12732" d="M27.169,210.558V187.746l4.65,2.684v22.812Z" transform="translate(-11.249 -77.736)" fill="#6af" fill-rule="evenodd"/>
      <path id="Path_12733" data-name="Path 12733" d="M35.1,214.635V191.823l1.233-.713v25.661Z" transform="translate(-14.535 -79.129)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12734" data-name="Path 12734" d="M25.065,209.76V184.1l1.233,2.136v22.812Z" transform="translate(-10.378 -76.227)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12735" data-name="Path 12735" d="M25.065,184.1l7.116,4.108-1.233.713-4.65-2.684Z" transform="translate(-10.378 -76.227)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12736" data-name="Path 12736" d="M26.3,226.678l4.65,2.684L32.18,231.5l-7.115-4.109Z" transform="translate(-10.378 -93.856)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12737" data-name="Path 12737" d="M135,159.821,153.3,149.252v6.769L135,166.589Zm0-28.343L153.3,120.909v6.768L135,138.246ZM115.588,140.4v57.565l54.71-31.587V73.918l17.331,24.656v57.8l2.54-1.465V96.322L170.3,68.053Z" transform="translate(-47.859 -28.177)" fill="#aaa"/>
      <path id="Path_12738" data-name="Path 12738" d="M168.41,208.042,146.834,220.5v-7.978l21.576-12.457Z" transform="translate(-60.796 -82.837)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12739" data-name="Path 12739" d="M168.41,213.679l1.2.692-21.576,12.457-1.2-.691Z" transform="translate(-60.796 -88.474)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12740" data-name="Path 12740" d="M183.656,212.7V211.32l1.2.691v1.383Z" transform="translate(-76.043 -87.497)" fill="#656" fill-rule="evenodd"/>
      <path id="Path_12741" data-name="Path 12741" d="M146.834,232.58l1.2.692v1.382l-1.2-.692Z" transform="translate(-60.796 -96.3)" fill="#aaa" fill-rule="evenodd"/>
      <path id="Path_12742" data-name="Path 12742" d="M168.057,212.5l1.2.691-19.182,11.074-1.2-.692Z" transform="translate(-61.642 -87.986)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12743" data-name="Path 12743" d="M183.656,207.636v-5.213l1.2.692v5.213Z" transform="translate(-76.043 -83.813)" fill="#656" fill-rule="evenodd"/>
      <path id="Path_12744" data-name="Path 12744" d="M181.611,203.6l1.2.692v5.211l-1.2-.69Z" transform="translate(-75.196 -84.302)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12745" data-name="Path 12745" d="M146.834,228.9v-5.213l1.2.692v5.213Z" transform="translate(-60.796 -92.616)" fill="#aaa" fill-rule="evenodd"/>
      <path id="Path_12746" data-name="Path 12746" d="M183.656,201.447v-1.382l1.2.691v1.383Z" transform="translate(-76.043 -82.837)" fill="#656" fill-rule="evenodd"/>
      <path id="Path_12747" data-name="Path 12747" d="M146.834,222.707v-1.382l1.2.691V223.4Z" transform="translate(-60.796 -91.639)" fill="#aaa" fill-rule="evenodd"/>
      <path id="Path_12748" data-name="Path 12748" d="M168.41,200.064l1.2.692-21.576,12.457-1.2-.691Z" transform="translate(-60.796 -82.837)" fill="#aaa" fill-rule="evenodd"/>
      <path id="Path_12749" data-name="Path 12749" d="M170.453,214.86l.1.057-21.576,12.457-.1-.057Z" transform="translate(-61.642 -88.963)" fill="#ddd" fill-rule="evenodd"/>
      <path id="Path_12750" data-name="Path 12750" d="M185.7,213.883l.1.057v-1.382l-.1-.057Z" transform="translate(-76.888 -87.986)" fill="#656"/>
      <path id="Path_12751" data-name="Path 12751" d="M148.877,235.143l.1.057v-1.382l-.1-.057Z" transform="translate(-61.642 -96.789)" fill="#222"/>
      <path id="Path_12752" data-name="Path 12752" d="M170.1,213.679l.1.059-19.182,11.073-.1-.057Z" transform="translate(-62.488 -88.474)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12753" data-name="Path 12753" d="M185.7,208.817l.1.057v-5.213l-.1-.058Z" transform="translate(-76.888 -84.302)" fill="#656"/>
      <path id="Path_12754" data-name="Path 12754" d="M183.656,210l.1.059v-5.213l-.1-.057Z" transform="translate(-76.042 -84.791)" fill="#222"/>
      <path id="Path_12755" data-name="Path 12755" d="M150.92,228.9l.1.057v-5.213l-.1-.057Z" transform="translate(-62.488 -92.616)" fill="#059"/>
      <path id="Path_12756" data-name="Path 12756" d="M148.877,230.077l.1.057v-5.213l-.1-.057Z" transform="translate(-61.642 -93.105)" fill="#222"/>
      <path id="Path_12757" data-name="Path 12757" d="M170.1,204.785l.1.057-19.182,11.073-.1-.057Z" transform="translate(-62.488 -84.791)" fill="#6af" fill-rule="evenodd"/>
      <path id="Path_12758" data-name="Path 12758" d="M185.7,202.627l.1.057V201.3l-.1-.057Z" transform="translate(-76.888 -83.326)" fill="#656"/>
      <path id="Path_12759" data-name="Path 12759" d="M148.877,223.887l.1.057v-1.383l-.1-.057Z" transform="translate(-61.642 -92.128)" fill="#222"/>
      <path id="Path_12760" data-name="Path 12760" d="M170.453,201.245l.1.057L148.976,213.76l-.1-.057Z" transform="translate(-61.642 -83.326)" fill="#a0a0a4" fill-rule="evenodd"/>
      <path id="Path_12761" data-name="Path 12761" d="M170.271,210.1l-19.182,11.073v-5.213l19.182-11.074Z" transform="translate(-62.558 -84.832)" fill="#6af" fill-rule="evenodd"/>
      <path id="Path_12762" data-name="Path 12762" d="M169.425,203.417,150.243,214.49l-1.2-.69,21.576-12.457Z" transform="translate(-61.712 -83.366)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12763" data-name="Path 12763" d="M170.622,214.47l-21.576,12.457,1.2-2.074,19.182-11.074Z" transform="translate(-61.712 -88.515)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12764" data-name="Path 12764" d="M149.046,230.58V222.6l1.2.69v5.213Z" transform="translate(-61.712 -92.169)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12765" data-name="Path 12765" d="M183.825,208.63v-5.213l1.2-2.074v7.978Z" transform="translate(-76.113 -83.366)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12766" data-name="Path 12766" d="M170.129,161.487l-19.356,11.175V167.4l19.356-11.175Z" transform="translate(-62.427 -64.685)" fill="#6af" fill-rule="evenodd"/>
      <path id="Path_12767" data-name="Path 12767" d="M170.484,165.9l-21.772,12.57,1.208-2.093L169.275,165.2Z" transform="translate(-61.574 -68.403)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12768" data-name="Path 12768" d="M169.275,154.748l-19.356,11.175-1.208-.7,21.773-12.57Z" transform="translate(-61.573 -63.207)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12769" data-name="Path 12769" d="M148.711,182.158v-8.05l1.208.7v5.261Z" transform="translate(-61.574 -72.089)" fill="#222" fill-rule="evenodd"/>
      <path id="Path_12770" data-name="Path 12770" d="M183.807,160.008v-5.261l1.208-2.093v8.05Z" transform="translate(-76.105 -63.207)" fill="#222" fill-rule="evenodd"/>
      <path id="Union_67" data-name="Union 67" d="M-12260.779-4954.228l.084-.111-45.853-26.473,1.015-1.343,45.853,26.47-45.855-26.473-1.015,1.343-1.018-.585h0l-3.831-2.211,1.018-1.343-1.018,1.343-1.014-.587v0l-14.912-8.61,1.018-1.342,18.309-24.209,1.019-1.342,16.272-21.521h0l1.021-1.342,16.994-22.473,66.631,38.464h0l1.015.588-54.709,72.344Zm20.422-27.008-66.623-38.464Zm-65.393-1.045-4.574-2.641,3.773,2.179Zm-5.65-3.259,0,0-14.909-8.607Z" transform="translate(12327.409 5065.231)" fill="#777" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/>
    </g>
    <g id="Group_1489" data-name="Group 1489" transform="translate(-1159.166 -1576.318)">
      <g id="Group_1486" data-name="Group 1486" transform="translate(-4705.077 2498.999)">
        <path id="Path_5458" data-name="Path 5458" d="M386.2,467.346v18.762L362.376,472.3V453.536Z" transform="translate(5607.882 -1150.921)" fill="#a8835e" fill-rule="evenodd"/>
        <path id="Path_5459" data-name="Path 5459" d="M542.038,483.836v18.772l-6.72,3.874-3.083,1.777-6.453,3.73V493.227l6.412-3.709,3.082-1.778Z" transform="translate(5468.302 -1176.802)" fill="#c7b299" fill-rule="evenodd"/>
        <path id="Path_5460" data-name="Path 5460" d="M402.458,402.941l-6.751,3.894-3.062,1.778-6.442,3.719-23.827-13.809,6.751-3.9,3.062-1.767,6.453-3.719Z" transform="translate(5607.882 -1095.908)" fill="#e4c4ab" fill-rule="evenodd"/>
        <path id="Path_5461" data-name="Path 5461" d="M488.582,497.443l-1.913,1.1-.867.5-1.825,1.054-6.751-3.913,1.913-1.106.867-.5,1.828-1.054Z" transform="translate(5509.779 -1185.084)" fill="#6d94ee" fill-rule="evenodd"/>
        <path id="Path_5462" data-name="Path 5462" d="M435.252,428.624,432.19,430.4,408.67,416.407l3.062-1.767Z" transform="translate(5568.338 -1117.696)" fill="#c7b299"/>
        <path id="Path_5463" data-name="Path 5463" d="M572.876,519.737l-3.082,1.778-.041-9.125,3.082-1.778Z" transform="translate(5430.744 -1199.674)" fill="#d3ccba"/>
        <path id="Path_5464" data-name="Path 5464" d="M463.278,562.978l-6.844-3.928-.056-9.293,6.844,3.928Z" transform="translate(5527.587 -1233.111)" fill="#d74348" fill-rule="evenodd"/>
        <path id="Path_5465" data-name="Path 5465" d="M465.534,575.4l-5.943-3.411-.041-6.788,5.943,3.411Z" transform="translate(5524.877 -1246.306)" fill="#f5f5f5" fill-rule="evenodd"/>
        <path id="Path_5466" data-name="Path 5466" d="M462.8,558.754l.074.044.036.02q.107.061.2.106l.1.051.015.007.01,0a.053.053,0,0,1,.012.011l.044.049a.061.061,0,0,1,.019.042v0a.563.563,0,0,1-.091.305.3.3,0,0,1-.229.126.03.03,0,0,1-.02-.006.058.058,0,0,1-.022-.028l-.02-.04c-.007-.015-.015-.03-.024-.045a.072.072,0,0,1-.012-.033c0-.01.006-.016.018-.016a.25.25,0,0,0,.169-.062.311.311,0,0,0,.09-.178.027.027,0,0,0,0-.008.021.021,0,0,0,0-.01.039.039,0,0,0-.014-.014l-.224-.12a.014.014,0,0,0-.013,0,.011.011,0,0,0,0,.01l.007.158c0,.013,0,.02,0,.021s0,.013-.007.014a.017.017,0,0,1-.013,0l-.08-.042a.059.059,0,0,1-.018-.016.057.057,0,0,1-.009-.03v-.024l0-.082,0-.091,0-.082c0-.012,0-.022,0-.03s0-.014.007-.015a.019.019,0,0,1,.014,0" transform="translate(5522.119 -1240.793)" fill="#f5f5f5"/>
        <path id="Path_5467" data-name="Path 5467" d="M468.7,562.543c0-.078,0-.145-.005-.2v0a.022.022,0,0,1,.009-.021c.006,0,.014,0,.025,0l.065.037a.064.064,0,0,1,.025.025.066.066,0,0,1,.009.032v.055c0,.04,0,.086,0,.139v.143a.039.039,0,0,0,0,.018.025.025,0,0,0,.009.01l.011,0a1.09,1.09,0,0,0,.271-.01.387.387,0,0,0,.078-.024.019.019,0,0,1,.015,0,.028.028,0,0,1,.011.012.054.054,0,0,1,0,.015c0,.006,0,.011,0,.015a.187.187,0,0,0,0,.019c0,.022.005.041.008.056h0c0,.013,0,.022,0,.029a.087.087,0,0,1,0,.014.018.018,0,0,1-.012.019.991.991,0,0,1-.367.024.574.574,0,0,1-.085-.012l-.01,0a.058.058,0,0,1-.019-.019l-.039-.057a.066.066,0,0,1-.015-.039s0-.005,0-.011a.6.6,0,0,0,0-.062q0-.039,0-.069Z" transform="translate(5517.063 -1243.837)" fill="#f5f5f5"/>
        <path id="Path_5468" data-name="Path 5468" d="M474,565.827l-.018-.009a.061.061,0,0,1-.02-.022.065.065,0,0,1-.009-.034V565.7c0-.012,0-.02.009-.023a.021.021,0,0,1,.021,0l.006,0q.03.02.1.063l.121.07q.083.048.181.1h0a.05.05,0,0,1,.019.019.055.055,0,0,1,.008.028v.085a.022.022,0,0,1,0,.014s-.008,0-.015,0l-.053-.033-.024-.015-.089-.051c-.006,0-.01,0-.013,0s0,.006,0,.013v.039a.037.037,0,0,0,0,.017.032.032,0,0,0,.013.013q.138.079.236.131h0a.066.066,0,0,1,.024.024.065.065,0,0,1,.01.033v.064c0,.012,0,.02-.009.023a.021.021,0,0,1-.021,0l-.035-.021-.088-.052-.052-.031-.064-.037c-.005,0-.01,0-.013,0s0,.006,0,.013v.07a.039.039,0,0,0,.006.024.125.125,0,0,0,.039.029q.062.036.157.082h0a.03.03,0,0,1,.013.014.041.041,0,0,1,0,.016s0,.006,0,.007a.238.238,0,0,0-.007.043c0,.016,0,.025,0,.028s0,.006,0,.009a.021.021,0,0,1-.006.017.017.017,0,0,1-.018,0l-.012-.006-.068-.034-.058-.031-.049-.027a.338.338,0,0,1-.086-.064.221.221,0,0,1-.037-.058.173.173,0,0,1-.013-.066v-.129a.034.034,0,0,0-.018-.031q-.084-.048-.17-.094h0a.065.065,0,0,1-.023-.023.064.064,0,0,1-.009-.033v-.064c0-.012,0-.019.009-.023a.023.023,0,0,1,.023,0h0q.086.054.17.1c.006,0,.01,0,.013,0s0-.006,0-.012V565.9a.035.035,0,0,0,0-.018.034.034,0,0,0-.013-.013l-.058-.032-.016-.008" transform="translate(5512.647 -1246.708)" fill="#f5f5f5"/>
        <path id="Path_5469" data-name="Path 5469" d="M480.14,570.817a.09.09,0,0,1-.026-.041l-.008-.019-.021-.042-.013-.026-.007-.013a.051.051,0,0,1-.008-.024c0-.009.005-.013.016-.012a.367.367,0,0,0,.229-.049.352.352,0,0,0,.142-.194.018.018,0,0,1,.017-.014.022.022,0,0,1,.013,0l.013.01.068.067a.065.065,0,0,1,.022.045.037.037,0,0,1,0,.013.4.4,0,0,1-.28.281.5.5,0,0,1-.136.02.036.036,0,0,1-.017-.006" transform="translate(5507.361 -1250.73)" fill="#f5f5f5"/>
        <path id="Path_5470" data-name="Path 5470" d="M485.058,571.436q-.019-.028-.056-.077c-.028-.036-.047-.059-.057-.071s-.021-.038-.012-.052l.034-.049a.015.015,0,0,1,.022,0,.1.1,0,0,1,.022.022l.024.028.058.071.018.023.016.021a.045.045,0,0,1,.008.02.017.017,0,0,1,0,.015l-.012.012-.013.017-.013.017-.01.014c0,.006-.007.007-.011,0a.048.048,0,0,1-.014-.013m-.036.41-.063-.09a.064.064,0,0,1-.012-.028.024.024,0,0,1,.006-.021.546.546,0,0,0,.112-.184c0-.01.009-.013.017-.009a.064.064,0,0,1,.021.022l.022.032.02.027.016.023c.012.018.016.032.01.043a.7.7,0,0,1-.111.2.012.012,0,0,1-.018,0,.068.068,0,0,1-.02-.018m.113-.6s-.009.006-.013,0a.058.058,0,0,1-.015-.017l-.024-.034q-.058-.077-.086-.109c-.019-.021-.023-.039-.013-.052l.036-.048a.012.012,0,0,1,.017,0,.065.065,0,0,1,.015.012q.09.107.126.157a.041.041,0,0,1,.008.02.014.014,0,0,1,0,.013l-.007.007-.006.006-.027.033a.052.052,0,0,0-.01.014m.02.631v-.068a.021.021,0,0,1,.007-.019.02.02,0,0,1,.02,0l.155.089a.02.02,0,0,0,.02,0c.005,0,.007-.009.007-.019v-.093a.055.055,0,0,0-.008-.028.053.053,0,0,0-.02-.02l-.106-.061a.058.058,0,0,1-.028-.048v-.072c0-.01,0-.016.007-.019a.019.019,0,0,1,.02,0l.106.061a.02.02,0,0,0,.02,0,.021.021,0,0,0,.007-.019v-.066a.054.054,0,0,0-.008-.028.052.052,0,0,0-.02-.02l-.136-.078a.056.056,0,0,1-.02-.021.056.056,0,0,1-.008-.028v-.064a.021.021,0,0,1,.007-.019c.005,0,.012,0,.02,0l.144.083c.01.006.016.007.018,0s0-.011-.006-.021l-.029-.046-.013-.019-.012-.017c-.016-.023-.017-.04,0-.049l.049-.029a.016.016,0,0,1,.017,0,.054.054,0,0,1,.016.014,2.081,2.081,0,0,1,.121.186c.008.013.008.022,0,.026l-.026.013c-.008.005-.007.011.005.018l.172.1a.052.052,0,0,1,.02.02.054.054,0,0,1,.008.028v.064a.021.021,0,0,1-.007.019.02.02,0,0,1-.02,0l-.132-.076a.019.019,0,0,0-.02,0s-.007.009-.007.019v.066a.055.055,0,0,0,.008.028.053.053,0,0,0,.02.02l.1.058a.053.053,0,0,1,.02.02.055.055,0,0,1,.008.028v.072c0,.01,0,.016-.007.019a.02.02,0,0,1-.02,0l-.1-.058a.019.019,0,0,0-.02,0s-.007.009-.007.019v.093a.057.057,0,0,0,.028.048l.153.088a.057.057,0,0,1,.028.048v.068a.021.021,0,0,1-.007.019.02.02,0,0,1-.02,0l-.493-.283a.056.056,0,0,1-.02-.021.054.054,0,0,1-.008-.028" transform="translate(5503.201 -1251.245)" fill="#f5f5f5"/>
        <path id="Path_5471" data-name="Path 5471" d="M490.841,575.25l-.024.022-.012.01a.011.011,0,0,1-.014,0,.038.038,0,0,1-.013-.012l-.009-.013-.012-.018a.619.619,0,0,0-.046-.06c-.009-.012-.01-.02,0-.023a.3.3,0,0,0,.082-.084.016.016,0,0,1,.024,0,.061.061,0,0,1,.014.013l.049.057c.016.019.019.036.01.049a.335.335,0,0,1-.046.063m-.137-.64v-.037c0-.01,0-.016.007-.019a.019.019,0,0,1,.02,0l.156.09c.007,0,.009,0,.007-.009l-.01-.027a.038.038,0,0,0-.014-.018l-.082-.047a.055.055,0,0,1-.02-.02.056.056,0,0,1-.008-.028v-.04c0-.01,0-.016.007-.019a.019.019,0,0,1,.02,0l.208.119c.017.01.026,0,.026-.016s.008-.025.026-.015l.077.044a.049.049,0,0,1,.026.045.049.049,0,0,0,.026.045l.209.12a.053.053,0,0,1,.02.02.055.055,0,0,1,.008.028v.04q0,.015-.007.019s-.012,0-.02,0l-.09-.051c-.007,0-.011,0-.013,0l-.008.017c0,.007,0,.012.007.017l.159.091a.054.054,0,0,1,.02.02.057.057,0,0,1,.008.028v.037a.02.02,0,0,1-.007.019.02.02,0,0,1-.02,0l-.71-.407a.055.055,0,0,1-.02-.021.056.056,0,0,1-.008-.028m.305.8a.223.223,0,0,1-.059-.044.139.139,0,0,1-.024-.038.125.125,0,0,1-.007-.043v-.129q0-.015.007-.019a.019.019,0,0,1,.02,0l.056.032a.056.056,0,0,1,.028.048v.062a.033.033,0,0,0,.007.023.084.084,0,0,0,.019.014l.04.023q.017.01.007-.011c-.011-.023-.024-.049-.039-.078l-.013-.023c-.008-.015-.008-.023,0-.026s.014-.011,0-.019l-.193-.111a.053.053,0,0,1-.02-.02.054.054,0,0,1-.008-.028l0-.254a.021.021,0,0,1,.007-.019.02.02,0,0,1,.02,0l.457.263a.052.052,0,0,1,.02.02.055.055,0,0,1,.008.028l0,.254c0,.01,0,.016-.007.019a.02.02,0,0,1-.02,0l-.148-.085c-.013-.008-.015,0-.006.013l.025.045c.007.014.006.022,0,.024l-.052.014c-.006,0-.008,0-.007.007s0,.007.011.01l.022.013c.016.009.028.012.034.008a.035.035,0,0,0,.013-.026c0-.014.008-.015.018,0l.008.008.008.008.058.054a.037.037,0,0,1,.014.035q-.012.062-.035.075c-.017.01-.044,0-.082-.018Zm-.042-.472.244.14c.009.005.014,0,.014-.008a.027.027,0,0,0-.014-.025l-.244-.14c-.009-.005-.014,0-.014.009a.027.027,0,0,0,.014.025m0,.112.244.14c.009.005.014,0,.014-.009a.027.027,0,0,0-.014-.025l-.244-.14c-.009-.005-.014,0-.014.009a.027.027,0,0,0,.014.025m.068-.321.089.051c.007,0,.012,0,.016,0l.009-.017c0-.006,0-.01-.006-.014l-.125-.072c-.007,0-.009,0-.006.007l.005.014,0,.014a.034.034,0,0,0,.014.019m.409.875a.05.05,0,0,0-.02.006.018.018,0,0,1-.019,0,.038.038,0,0,1-.015-.018l-.01-.021-.012-.025q-.035-.075-.063-.123a.062.062,0,0,1-.01-.03.016.016,0,0,1,.012-.017l.039-.014a.027.027,0,0,1,.018,0,.082.082,0,0,1,.022.028q.037.064.055.1l.023.045.01.021a.037.037,0,0,1,0,.023.016.016,0,0,1-.012.013l-.022.007" transform="translate(5498.267 -1254.19)" fill="#f5f5f5"/>
        <path id="Path_5472" data-name="Path 5472" d="M472.375,578.4l.009,1.447c.006,1.009-.65,1.456-1.491,1.06l.059,1.44.96.551a.22.22,0,0,1,.1.172v.124c0,.064-.044.09-.1.059l-2.315-1.329a.22.22,0,0,1-.1-.172v-.124c0-.064.043-.09.1-.059l.96.551.043-1.382a3.768,3.768,0,0,1-1.508-2.611c0-.059-.007-.117-.007-.174l-.009-1.447Z" transform="translate(5516.741 -1255.959)" fill="#d74348"/>
        <path id="Path_5473" data-name="Path 5473" d="M483.651,590.888l0,.521-.067.165-.514-.609-.206.51-.594-.7.074-.125.432.514.206-.511.514.61Z" transform="translate(5505.467 -1268.037)" fill="#f5f5f5"/>
        <path id="Path_5474" data-name="Path 5474" d="M470.374,584.866l-.634-.12-.122-.731-.492-.092q-.007-.088-.007-.174l0-.457.074.444.548.1.122.731.463.087Z" transform="translate(5516.706 -1261.756)" fill="#f5f5f5"/>
        <path id="Path_5475" data-name="Path 5475" d="M492.639,508.279l-.513.3-1.381.8-5.1-2.959,1.446-.836.446-.258Z" transform="translate(5502.59 -1195.155)" fill="#f5f5ed" fill-rule="evenodd"/>
      </g>
      <g id="Group_1487" data-name="Group 1487" transform="translate(-4700.199 2533.144)">
        <path id="Path_5482" data-name="Path 5482" d="M375.991,109.2v18.762l-23.827-13.809V95.394Z" transform="translate(5616.605 -845.002)" fill="#a8835e" fill-rule="evenodd"/>
        <path id="Path_5483" data-name="Path 5483" d="M531.826,125.7v18.772l-6.72,3.874-3.082,1.777-6.453,3.73V135.086l6.412-3.709,3.082-1.778Z" transform="translate(5477.025 -870.884)" fill="#c7b299" fill-rule="evenodd"/>
        <path id="Path_5484" data-name="Path 5484" d="M392.246,44.8,385.5,48.694l-3.062,1.777-6.442,3.719L352.164,40.381l6.751-3.9,3.062-1.767,6.453-3.72Z" transform="translate(5616.605 -789.989)" fill="#e4c4ab" fill-rule="evenodd"/>
        <path id="Path_5485" data-name="Path 5485" d="M425.04,70.483l-3.062,1.777L398.458,58.266,401.52,56.5Z" transform="translate(5577.061 -811.778)" fill="#c7b299"/>
        <path id="Path_5486" data-name="Path 5486" d="M562.664,161.6l-3.082,1.778-.041-9.125,3.082-1.777Z" transform="translate(5439.467 -893.756)" fill="#d3ccba"/>
        <path id="Path_5487" data-name="Path 5487" d="M430.084,84.158l3.1,1.787,1.405.816,2.956,1.707,10.934-6.337-3.1-1.792-1.4-.811-2.961-1.707Z" transform="translate(5550.047 -829.992)" fill="#e6e5f2" fill-rule="evenodd"/>
        <path id="Path_5488" data-name="Path 5488" d="M446.965,97.478l1.636.944.742.431,1.562.9,5.776-3.348-1.637-.946-.742-.428-1.564-.9Z" transform="translate(5535.627 -843.922)" fill="#fff" fill-rule="evenodd"/>
        <path id="Path_5489" data-name="Path 5489" d="M486.526,103l-8.192,4.751-1.761-1.015,8.193-4.751Z" transform="translate(5510.337 -850.629)" fill="#fff" fill-rule="evenodd"/>
        <path id="Path_5490" data-name="Path 5490" d="M438.318,122.5l-.776.451-2.956-1.708-1.406-.815-3.1-1.786.779-.451,3.169,1.829,1.766,1.025Z" transform="translate(5550.047 -864.476)" fill="#1aa4a3" fill-rule="evenodd"/>
      </g>
      <g id="Group_1488" data-name="Group 1488" transform="translate(-4652.417 2469.681)">
        <path id="Path_5441" data-name="Path 5441" d="M0,439.782l23.828,13.809V434.83L0,421.02Z" transform="translate(5917.417 -1123.146)" fill="#a8835e"/>
        <path id="Path_5442" data-name="Path 5442" d="M179.662,451.321v18.772l-6.72,3.874-3.082,1.778-6.453,3.73V460.712L169.819,457l3.082-1.778Z" transform="translate(5777.837 -1149.028)" fill="#c7b299" fill-rule="evenodd"/>
        <path id="Path_5443" data-name="Path 5443" d="M9.812,360.335,6.75,362.1,0,366.007l23.828,13.81,6.442-3.72,3.062-1.778,6.751-3.894-23.817-13.81Z" transform="translate(5917.417 -1068.133)" fill="#e4c4ab"/>
        <path id="Path_5444" data-name="Path 5444" d="M126.207,464.928l-1.913,1.1-.867.5-1.825,1.054-6.751-3.912,1.913-1.106.867-.5,1.828-1.054Z" transform="translate(5819.313 -1157.31)" fill="#f5f5ed" fill-rule="evenodd"/>
        <path id="Path_5445" data-name="Path 5445" d="M72.876,396.109l-3.062,1.778L46.3,383.892l3.062-1.767Z" transform="translate(5877.873 -1089.922)" fill="#c7b299"/>
        <path id="Path_5446" data-name="Path 5446" d="M210.5,487.222,207.419,489l-.041-9.125,3.082-1.777Z" transform="translate(5740.279 -1171.9)" fill="#d3ccba"/>
      </g>
    </g>
    <g id="Group_1822" data-name="Group 1822" transform="translate(-1356.333 -1977.96)">
      <g id="Group_1498" data-name="Group 1498" transform="translate(-4639.405 2830.261)">
        <path id="Path_5565" data-name="Path 5565" d="M590.228,352.487v5.006L552.212,335.46v-5.006Z" transform="translate(5455.526 -1027.465)" fill="#a8835e" fill-rule="evenodd"/>
        <path id="Path_5566" data-name="Path 5566" d="M818.072,461.114v4.991l-5.15,2.979v-4.99Z" transform="translate(5232.833 -1139.073)" fill="#c7b299" fill-rule="evenodd"/>
        <path id="Path_5567" data-name="Path 5567" d="M595.378,332.079l-5.15,2.975-38.016-22.033,5.146-2.976Z" transform="translate(5455.527 -1010.031)" fill="#e4c4ab" fill-rule="evenodd"/>
        <path id="Path_5568" data-name="Path 5568" d="M600.3,336.169l-3.112,1.8-38.016-22.033,3.11-1.8Z" transform="translate(5449.577 -1013.526)" fill="#c7b299" fill-rule="evenodd"/>
        <path id="Path_5569" data-name="Path 5569" d="M823.152,467.945l-3.083,1.777-.012-2.639,3.083-1.777Z" transform="translate(5226.738 -1142.653)" fill="#d3ccba"/>
        <path id="Path_5570" data-name="Path 5570" d="M605.86,343.872l1.194.688.541.314,1.139.657,4.212-2.441-1.193-.69-.541-.312-1.141-.658Z" transform="translate(5409.701 -1036.841)" fill="#f5f5ed" fill-rule="evenodd"/>
      </g>
      <g id="Group_1499" data-name="Group 1499" transform="translate(-4651.405 2834.261)">
        <path id="Path_5565-2" data-name="Path 5565" d="M590.228,352.487v5.006L552.212,335.46v-5.006Z" transform="translate(5455.526 -1027.465)" fill="#a8835e" fill-rule="evenodd"/>
        <path id="Path_5566-2" data-name="Path 5566" d="M818.072,461.114v4.991l-5.15,2.979v-4.99Z" transform="translate(5232.833 -1139.073)" fill="#c7b299" fill-rule="evenodd"/>
        <path id="Path_5567-2" data-name="Path 5567" d="M595.378,332.079l-5.15,2.975-38.016-22.033,5.146-2.976Z" transform="translate(5455.527 -1010.031)" fill="#e4c4ab" fill-rule="evenodd"/>
        <path id="Path_5568-2" data-name="Path 5568" d="M600.3,336.169l-3.112,1.8-38.016-22.033,3.11-1.8Z" transform="translate(5449.577 -1013.526)" fill="#c7b299" fill-rule="evenodd"/>
        <path id="Path_5569-2" data-name="Path 5569" d="M823.152,467.945l-3.083,1.777-.012-2.639,3.083-1.777Z" transform="translate(5226.738 -1142.653)" fill="#d3ccba"/>
        <path id="Path_5570-2" data-name="Path 5570" d="M605.86,343.872l1.194.688.541.314,1.139.657,4.212-2.441-1.193-.69-.541-.312-1.141-.658Z" transform="translate(5409.701 -1036.841)" fill="#f5f5ed" fill-rule="evenodd"/>
      </g>
      <g id="Group_1500" data-name="Group 1500" transform="translate(-4723.167 2773.304)">
        <path id="Path_5607" data-name="Path 5607" d="M1266.822,709.428v8.446l-17.363-10.063v-8.446Z" transform="translate(4850.15 -1360.904)" fill="#a8835e" fill-rule="evenodd"/>
        <path id="Path_5608" data-name="Path 5608" d="M1380.38,721.446V729.9l-4.9,2.823-2.246,1.3-4.7,2.718v-8.446l4.672-2.7,2.246-1.3Z" transform="translate(4748.437 -1379.765)" fill="#c7b299" fill-rule="evenodd"/>
        <path id="Path_5609" data-name="Path 5609" d="M1234.886,709.452l-5.491,4.064-17.348-10.085,5.491-4.064Z" transform="translate(4882.106 -1360.906)" fill="#c7b299" fill-rule="evenodd"/>
        <path id="Path_5610" data-name="Path 5610" d="M1354.428,653.714l-5.914,1.331L1331.3,644.98l5.913-1.331Z" transform="translate(4780.239 -1313.312)" fill="#c7b299" fill-rule="evenodd"/>
        <path id="Path_5611" data-name="Path 5611" d="M1314.141,716.207l-.4.233-4.14,2.391L1299.537,713l.366-.211,4.183-2.412Z" transform="translate(4807.374 -1370.311)" fill="#a19385"/>
        <path id="Path_5612" data-name="Path 5612" d="M1261.3,652.4l-4.183,2.411-.519.3-2.232,1.288-.554.319-4.366,2.526,7.3,4.233.367-.212,4.183-2.411.082.048v-8.454Z" transform="translate(4850.156 -1320.791)" fill="#d3ccba"/>
        <path id="Path_5613" data-name="Path 5613" d="M1331.3,652.732v8.454l9.972,5.782.151-.087,2.232-1.294.521-.3,4.4-2.538Z" transform="translate(4780.238 -1321.071)" fill="#b0a192"/>
      </g>
    </g>
    <g id="Group_1832" data-name="Group 1832" transform="translate(159.166 9.707)">
      <g id="Group_1831" data-name="Group 1831" clip-path="url(#clip-path-2)">
        <g id="Group_1830" data-name="Group 1830">
          <g id="Group_1829" data-name="Group 1829" clip-path="url(#clip-path-2)">
            <path id="Path_8606" data-name="Path 8606" d="M60.05,4.466,64.127,11.3l7.45-1.374.8.8-2.3,2.23a20.864,20.864,0,0,1-7.02,3.648c-3.7.015-6.03-2.271-8.379-4.648Z" transform="translate(-36.504 -3.231)" fill="#fff"/>
            <path id="Path_8607" data-name="Path 8607" d="M94.475,132.215c-1.052,1.176-1.1,3.459-.81,4.55,1.3.778,2.458,1.1,3.375.705,2.676.34,4.092.963,5.525.838a4.391,4.391,0,0,0,3.6-1.653,1.559,1.559,0,0,0-.914-2.234,15.642,15.642,0,0,1-5.1-1.774l-1.25-3.712-3.9,2Z" transform="translate(-81.227 -93.272)" fill="#4e4e4e"/>
            <path id="Path_8608" data-name="Path 8608" d="M150.833,96.862l2.419,2.331s2.3.878,1.041,2.263a4.971,4.971,0,0,1-2.348.861c-1.675-.038-1.138.091-4.518-2.61l-2.145-.752a2.51,2.51,0,0,1-1.975-2.432l.16-.847c.432-1.517,1.257-2.448,2.165-2.637l1.651-.151,3.545.809Z" transform="translate(-143.308 -67.196)" fill="#4e4e4e"/>
            <path id="Path_8609" data-name="Path 8609" d="M93.715,72.119c.146,1.921,1.473,3.318,4.663,3.889a45.972,45.972,0,0,0,4.528,2.154,28.6,28.6,0,0,0,3.949,1.3c7.295,1.759,9.506-1.613,9.506-1.613.388-1.209-.315-2.782-1.539-4.442a27.521,27.521,0,0,0-2.673-3.02,62.523,62.523,0,0,0-5.543-4.821c-1.256-.984-2.118-1.595-2.118-1.595l-.5.638c-.2.266-1.706,1.767-3.386,3.427-.421.415-.863.847-1.295,1.27-.822.815-.942-.092-1.587.54a22.319,22.319,0,0,1-4.01,2.275" transform="translate(-91.39 -46.275)" fill="#466677"/>
            <path id="Path_8610" data-name="Path 8610" d="M113.489,66.48a6.156,6.156,0,0,1-1.909,2.867L106.1,75.854a5.388,5.388,0,0,1-5.442-.539,13.637,13.637,0,0,1,2.356-5.819c2.029-2.98,3.676-3.548,3.676-3.548a61.539,61.539,0,0,0-8.529-1.88,19.445,19.445,0,0,1-5.585-1.405c-3.392-1.533-2.952-5.826-2.086-8.948.007-.021.014-.043.021-.071a.713.713,0,0,1,.035-.113,23.737,23.737,0,0,1,1.228-3.335l3.889,1.93,2.618,1.3s.277.1.745.3a43.458,43.458,0,0,1,4.854,2.235,34.39,34.39,0,0,1,5.442,3.484,24.367,24.367,0,0,1,4.328,5.18,4.235,4.235,0,0,1-.163,1.859" transform="translate(-87.549 -36.311)" fill="#618598"/>
            <path id="Path_8611" data-name="Path 8611" d="M117.277,6.711a13.751,13.751,0,0,1-1.355,3.954,14.86,14.86,0,0,1-1.8,2.675,13.463,13.463,0,0,1-2.657,2.481l-1.008,1.909-1,1.915-.312.6a14.739,14.739,0,0,1-7.637,1.343,6.618,6.618,0,0,1-5.445-4.184,1.3,1.3,0,0,1-.053-.183c.813-7.972,6.111-10.406,6.111-10.406A16.25,16.25,0,0,1,107.979,1.5a21.916,21.916,0,0,1,3.07-1.108.4.4,0,0,1,.059-.012c3.736-.99,5.38.112,6.046,1.662a8.335,8.335,0,0,1,.124,4.673" transform="translate(-93.124 0)" fill="#618598"/>
            <path id="Path_8612" data-name="Path 8612" d="M103.556,2.038l-.112.248C101.835-.183,98.017.3,97.51.377c3.736-.99,5.38.112,6.046,1.662" transform="translate(-79.527 0)" fill="#fff"/>
            <path id="Path_8613" data-name="Path 8613" d="M96.724,11.888s3.56-.8,5.5.763c3.012,2.433,2.357,7,2.357,7,2.079-.48,3.347-2.211,4.881-3.939l1.819-4.323s-1.1-3.731-2.92-4.862c-2.092-1.3-6.438.55-6.438.55-3.192,1.768-3.129,3.479-5.2,4.813" transform="translate(-87.034 -4.385)" fill="#fff"/>
            <path id="Path_8614" data-name="Path 8614" d="M126.309,37.092c1.322,2.926,5.794,5.226,10.289,5.106,0,0,2.705-7.954-1.555-9.942-5.808-2.71-8.734,4.836-8.734,4.836" transform="translate(-121.381 -22.909)" fill="#fff"/>
            <g id="Group_1825" data-name="Group 1825" transform="translate(2.884 12.032)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
              <g id="Group_1824" data-name="Group 1824">
                <g id="Group_1823" data-name="Group 1823" clip-path="url(#clip-path-4)">
                  <path id="Path_8615" data-name="Path 8615" d="M112.929,61.637c-.5-.319-1.66-1.476-2.618-1.632-4.286-.667-9.189-1.121-11.957-2.462-.511-.241-2.342-4.123-2.81-4.385-.057-.036-.113-.064-.17-.1A18.541,18.541,0,0,1,89.953,48.8a.692.692,0,0,0-.078-.106c-.007-.014.035-.014.113-.007A8.519,8.519,0,0,0,95.1,47.282a5.881,5.881,0,0,0,2.15-2.987l3.009-.795s.937,5.017,4.059,5.7l-1,1.916a34.39,34.39,0,0,1,5.442,3.484,24.367,24.367,0,0,1,4.328,5.18,4.235,4.235,0,0,1-.163,1.859" transform="translate(-89.874 -43.5)" fill="#618598"/>
                </g>
              </g>
            </g>
            <path id="Path_8616" data-name="Path 8616" d="M100.572,15.825l-2.689.319s-1.525.3-1.077,3.193c.433,2.793,1.673,3.007,1.673,3.007l4.569-2.13Z" transform="translate(-78.802 -11.448)" fill="#f79e7c"/>
            <g id="Group_1828" data-name="Group 1828" transform="translate(19.856 8.073)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
              <g id="Group_1827" data-name="Group 1827">
                <g id="Group_1826" data-name="Group 1826" clip-path="url(#clip-path-5)">
                  <path id="Path_8617" data-name="Path 8617" d="M104.907,31.775a14.624,14.624,0,0,1-1.8,2.675c-1.611.4-1.051-2.164-1.051-2.164l1.043-3.1Z" transform="translate(-101.967 -29.185)" fill="#f28f85"/>
                </g>
              </g>
            </g>
            <path id="Path_8618" data-name="Path 8618" d="M77.262,11.305s-1.884-5.728,3.255-6.792a4.961,4.961,0,0,1,5.155,3.568c.415,1.7.951,3.625-2.1,5.437l-.154.779c-.028.411-.232.621-.559.542l-.378-.149a3.649,3.649,0,0,1-2.4.661,4.163,4.163,0,0,1-2.815-4.045" transform="translate(-56.272 -3.231)" fill="#f79e7c"/>
            <path id="Path_8619" data-name="Path 8619" d="M77.112,11.019c.023-.012.557.549.557.549,1.123-.189,1.9.227,2.93-.951A3.213,3.213,0,0,0,83.774,11.9a2.922,2.922,0,0,0,.774-.513c.769-.747,1.69-3.965-1.51-6.572A4.114,4.114,0,0,0,78.2,4.161a5.238,5.238,0,0,0-2.75,6.075,1.182,1.182,0,0,0,1.656.782" transform="translate(-55.113 -2.647)" fill="#4e4e4e"/>
            <path id="Path_8620" data-name="Path 8620" d="M103.5,27.623a.833.833,0,0,0-1.006-.461,1.147,1.147,0,0,0-.746.891.839.839,0,0,0,.085.608.774.774,0,0,0,.738.3,1.055,1.055,0,0,0,.929-1.342" transform="translate(-80.696 -19.624)" fill="#f79e7c"/>
            <path id="Path_8621" data-name="Path 8621" d="M34.843,8.366,8.027,34.406,0,29.424,26.816,3.384,34.843,8.04Z" transform="translate(16.157 -2.448)" fill="#543c2a"/>
            <path id="Path_8622" data-name="Path 8622" d="M34.843,7.189,8.027,33.23,0,28.247,26.816,2.207Z" transform="translate(16.157 -1.597)" fill="#9b9b9b"/>
            <path id="Path_8623" data-name="Path 8623" d="M76.094,90.746c.05-.032,1.525.03,1.525.03l2.849-.413,1.638.559,1.142.9c.266.277.149.953-.219.928a.676.676,0,0,1-.44.727.888.888,0,0,1-.667.667,1.045,1.045,0,0,1-.691.452l-1.225.3h-.469l-.115-.847-1.256-.463-.669-.513-1.8-1.119Z" transform="translate(-53.33 -65.369)" fill="#f79e7c"/>
            <path id="Path_8624" data-name="Path 8624" d="M93.564,41.2s1.294,12.14,4.694,12.989c3.607,1.45,9.779,2.063,10.931,2.089,0,0,2.271-1.654.839-2.651-1.029-.361-9.177-3.406-9.177-3.406l-1-5.943c.051-6.667-6.427-6-6.287-3.078" transform="translate(-85.38 -28.274)" fill="#fff"/>
          </g>
        </g>
      </g>
    </g>
    <g id="Group_1841" data-name="Group 1841" transform="translate(123.166 121.681)">
      <g id="Group_1840" data-name="Group 1840" transform="translate(0)" clip-path="url(#clip-path-6)">
        <g id="Group_1839" data-name="Group 1839">
          <g id="Group_1838" data-name="Group 1838" clip-path="url(#clip-path-6)">
            <path id="Path_8651" data-name="Path 8651" d="M97.691,52.275l.8.147a2.161,2.161,0,0,0,2.093.141l.807-.809L100,48.522l-1.209,1.349Z" transform="translate(-70.67 -35.101)" fill="#f4c6b4"/>
            <path id="Path_8652" data-name="Path 8652" d="M38.625,128.013a4.849,4.849,0,0,0-.689,3.872,3.277,3.277,0,0,0,2.872.6c2.277.289,3.482.819,4.7.713a3.736,3.736,0,0,0,3.061-1.407,1.326,1.326,0,0,0-.778-1.9,13.315,13.315,0,0,1-4.342-1.51l-1.063-3.159-3.32,1.7Z" transform="translate(-27.35 -90.587)" fill="#4e4e4e"/>
            <path id="Path_8653" data-name="Path 8653" d="M6.4,97.17l2.059,1.984s1.956.747.886,1.926a4.229,4.229,0,0,1-2,.732c-1.426-.032-.969.077-3.845-2.221l-1.826-.639A2.135,2.135,0,0,1,0,96.882l.136-.721L1.689,93.5l1.414.032,3.3.946Z" transform="translate(0 -67.639)" fill="#4e4e4e"/>
            <path id="Path_8654" data-name="Path 8654" d="M12.955,77.566l2.364,2.613a39.19,39.19,0,0,0,3.853,1.833,24.372,24.372,0,0,0,3.361,1.1c6.208,1.5,8.09-1.373,8.09-1.373.331-1.029-.268-2.368-1.31-3.78a23.372,23.372,0,0,0-2.275-2.57,53.175,53.175,0,0,0-4.717-4.1c-1.069-.837-1.8-1.357-1.8-1.357l-.422.543c-.172.226-1.452,1.5-2.881,2.917-.358.353-.735.721-1.1,1.081-.7.694-1.38,1.358-1.929,1.9-.731.715-1.23,1.2-1.23,1.2" transform="translate(-9.372 -50.59)" fill="#618598"/>
            <path id="Path_8655" data-name="Path 8655" d="M7.274,88.743a16.552,16.552,0,0,0,4.894-.295,37.321,37.321,0,0,0,6.49-1.913.71.71,0,0,1-.143.069,8.786,8.786,0,0,0-2.986,2.948,11.522,11.522,0,0,0-2,4.952,4.583,4.583,0,0,0,4.63.459l4.662-5.534A4.514,4.514,0,0,0,24.581,85.4a4.489,4.489,0,0,0-.792-1.22,9.926,9.926,0,0,0-3.755-2.352A35.459,35.459,0,0,0,11.079,79.9c-.339-.033-.633-.061-.867-.075-.431-.036-.68-.047-.68-.047l-6.11-.952s-1.313,9.3,3.852,9.913" transform="translate(-2.368 -57.026)" fill="#618598"/>
            <path id="Path_8656" data-name="Path 8656" d="M61.536,47.1l1.445,2.516a46.4,46.4,0,0,0,6.26-.006l.218,1.784c-2.94,2.022-7.911,1.925-7.911,1.925-1.842-.587-3.633-3.512-3.989-4.045A5.311,5.311,0,0,0,61.536,47.1" transform="translate(-41.639 -34.073)" fill="#f4c6b4"/>
            <path id="Path_8657" data-name="Path 8657" d="M54.554,35.362l1.25,3.262a4.926,4.926,0,0,1-3.709,2.391c-.805-1.205-1.7-2.7-2.616-4.276Z" transform="translate(-35.793 -25.581)" fill="#fff"/>
            <path id="Path_8658" data-name="Path 8658" d="M3.03,36.953a5.168,5.168,0,0,0,2.735.948c2.778.211,5.834-1.226,7.114-1.914.4-.206.622-.35.622-.35l3.726-6.316a5.328,5.328,0,0,0,.785-1c1.842-2.971.978-7.5.477-9.444-.151-.592-.272-.942-.272-.942-7.071-2.79-9.922,2.7-12.965,7.4S3.03,36.953,3.03,36.953" transform="translate(-2.119 -12.429)" fill="#618598"/>
            <path id="Path_8659" data-name="Path 8659" d="M26.7,26.911s2.869-2.875,5.737-1.612c2.18.966,2.663,3.376,2.772,4.474,1.842-2.971.978-7.5.477-9.444a5.9,5.9,0,0,0-5.259-.849A11.457,11.457,0,0,0,26.7,26.911" transform="translate(-19.314 -13.879)" fill="#fff"/>
            <path id="Path_8660" data-name="Path 8660" d="M31.573,51.148s1.055-5.281-1.889-6.38-5.511,1.313-5.888,4.391l-.378,3.078,7.9,1.094Z" transform="translate(-16.941 -32.19)" fill="#fff"/>
            <path id="Path_8661" data-name="Path 8661" d="M44.251,63.389l.628,1.893s-10.987,4.785-13.627,2.7c0,0-1.268-.883-1.406-5.395l-.667-8.021c-.347-5.353,6.224-5.1,5.757-.03L34.5,64.022Z" transform="translate(-21.098 -36.636)" fill="#f4c6b4"/>
            <path id="Path_8662" data-name="Path 8662" d="M58.412,19.859c-.073.109-3.195,3.917-3.195,3.917a7.213,7.213,0,0,1-2.313-5.7c.442-.823,1.617-1.339,2.751-2.5Z" transform="translate(-38.267 -11.269)" fill="#f4c6b4"/>
            <path id="Path_8663" data-name="Path 8663" d="M55.915,6.061S55.783,2,59.68,1.1c0,0,4.549-.222,5.2,3.72,0,0,.11,2.545-1.13,3.5l0,.9a.56.56,0,0,1-.333.515l-.414.183-.825,1.116a1.678,1.678,0,0,1-1.364.694,3.321,3.321,0,0,1-1.9-.67c-1.593-1.134-3.011-4.992-3.011-4.992" transform="translate(-40.449 -0.793)" fill="#f4c6b4"/>
            <path id="Path_8664" data-name="Path 8664" d="M63.866,5.708c-.888.916-3.434.038-4.354,1.65a2.292,2.292,0,0,1-3.085.385c-1.66-1.239-1.7-2.08-1.7-2.08s.047-4.238,2.6-5.246a5.113,5.113,0,0,1,5.376.844C64.037,2.3,65.23,4.3,63.866,5.708" transform="translate(-39.588 0)" fill="#4e4e4e"/>
            <path id="Path_8665" data-name="Path 8665" d="M67.746,23.708a.97.97,0,0,0-.493.174,1.506,1.506,0,0,0-.665,1.192.692.692,0,0,0,.249.613.561.561,0,0,0,.483.041,1.133,1.133,0,0,0,.414-.278,2.039,2.039,0,0,0,.612-1,.613.613,0,0,0-.6-.743" transform="translate(-48.17 -17.15)" fill="#f4c6b4"/>
            <g id="Group_1837" data-name="Group 1837" transform="translate(3.653 16.645)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
              <g id="Group_1836" data-name="Group 1836">
                <g id="Group_1835" data-name="Group 1835">
                  <path id="Path_8666" data-name="Path 8666" d="M17.7,60.178l2.42,2.435.123,2.782L22.5,64.233a53.084,53.084,0,0,1,4.717,4.1,9.919,9.919,0,0,1,3.755,2.352l-1.48.218-5.891.861-9.237-2.455L13.2,69c3.6-2.041,4.494-8.825,4.494-8.825" transform="translate(-13.205 -60.178)" fill="#618598"/>
                </g>
              </g>
            </g>
            <path id="Path_8667" data-name="Path 8667" d="M30.8,83.928a5.077,5.077,0,0,0,5.072.035l-.19,4.137,9.751-.634.628,1.893s-10.987,4.785-13.627,2.7c0,0-1.268-.883-1.406-5.395Z" transform="translate(-22.281 -60.714)" fill="#f4c6b4"/>
            <path id="Path_8668" data-name="Path 8668" d="M29.1,59.4l-.461-5.552c-.365-5.627,6.543-5.362,6.052-.031l-.258,5.621A5.337,5.337,0,0,1,29.1,59.4" transform="translate(-20.709 -35.968)" fill="#fff"/>
            <path id="Path_8669" data-name="Path 8669" d="M77.173,96.914l1.163-.493,1.9-.115,2.674.269,1.119.734.138.7.326.371.072.362-.421,1.421a.41.41,0,0,1-.313.285l-.147.029-.058.225a.244.244,0,0,1-.228.183l-.085,0a.147.147,0,0,1-.151-.166l.024-.189-.112-.083a.472.472,0,0,1-.154-.558l.158-.381-.3-.413-1.874,0-1.937-.774-2.682.175Z" transform="translate(-55.183 -69.669)" fill="#f4c6b4"/>
            <path id="Path_8670" data-name="Path 8670" d="M104.105,53.712,98.312,44.23a1.114,1.114,0,0,1,.2-1.43l.113-.077a.966.966,0,0,1,1.368.3l5.278,8.632.832.467a.938.938,0,0,1,.518.119l.425.247a.858.858,0,0,0-.218-.087.813.813,0,0,1,.5.366.993.993,0,0,1,.133.536.32.32,0,0,1-.145.236.124.124,0,0,1-.058.019l-.935.029a.188.188,0,0,0-.083.027.434.434,0,0,0-.175.219l-.319.866.53-.016.058.033.425.248a.226.226,0,0,1-.054.235,2.884,2.884,0,0,1-.754.643,1.1,1.1,0,0,1-1.221.092.623.623,0,0,0,.074.056l-.426-.247a.628.628,0,0,1-.22-.219.888.888,0,0,1-.109-.31,2.136,2.136,0,0,1,.067-.948.753.753,0,0,0-.013-.552" transform="translate(-70.998 -30.786)" fill="#333"/>
            <path id="Path_8671" data-name="Path 8671" d="M105.158,54.141l-6-9.819a1.018,1.018,0,0,1,.3-1.372.823.823,0,0,1,1.166.253l5.7,9.335a.3.3,0,0,0,.406.107.951.951,0,0,1,1.225.3,1,1,0,0,1,.133.536.321.321,0,0,1-.145.236.129.129,0,0,1-.059.019l-.935.029a.188.188,0,0,0-.083.027.431.431,0,0,0-.175.219l-.326.885a.232.232,0,0,0,0,.2l.081.042.884-.027.058.033a.227.227,0,0,1-.054.235,2.889,2.889,0,0,1-.754.643c-.555.321-1.116.344-1.368-.07a.888.888,0,0,1-.109-.31,2.14,2.14,0,0,1,.067-.948.753.753,0,0,0-.013-.552" transform="translate(-71.625 -30.968)" fill="#666"/>
            <path id="Path_8672" data-name="Path 8672" d="M107.227,50.157l.524.15.152.4.264.171.157.408.313.288-.092.369-.221.471-.539.143-.307-.269-.335-.126-.079-.33.012-.148-.2-.127-.116-.37.47-.647Z" transform="translate(-77.229 -36.284)" fill="#f4c6b4"/>
            <path id="Path_8673" data-name="Path 8673" d="M97.442,54.552l.583-.943.17-.556.333-.4.855-.309h1.106c.331-.03.4.517.045.518l-.771.192-.125.4a1.027,1.027,0,0,1-.356.509l-.962.736Z" transform="translate(-70.49 -37.864)" fill="#f4c6b4"/>
            <path id="Path_8674" data-name="Path 8674" d="M102.175,126.585a.117.117,0,0,1-.06-.06l-.279-.814a.153.153,0,0,0-.081-.083.413.413,0,0,0-.241-.031l-.977.144a.381.381,0,0,0-.114.036l.164.476a.066.066,0,0,1,0,.042c.009-.024.036.516.036.516,0,.074-.119.14-.247.123a2.2,2.2,0,0,1-.711-.218,1.347,1.347,0,0,1-.815-1.023l-.017-.327a.543.543,0,0,0-.251-.229l-7.592-3.853a1.376,1.376,0,0,0-.707-.11,2.923,2.923,0,0,1-1.514-.242,1.574,1.574,0,0,1-.239-.149A1.063,1.063,0,0,1,88.1,120l-.028-.54a1.021,1.021,0,0,1,.554-.942.313.313,0,0,1,.272-.008.125.125,0,0,1,.054.048l.443.831a.173.173,0,0,0,.075.066.428.428,0,0,0,.269.028l.955-.2a3.312,3.312,0,0,0-.214-.453.072.072,0,0,1-.009-.03l-.028-.54a.071.071,0,0,0,.009.03c-.045-.085.1-.174.247-.152a2.643,2.643,0,0,1,.79.249,1.236,1.236,0,0,1,.778.961c0-.016.022.4.022.4a.585.585,0,0,0,.241.21l7.586,3.849a1.357,1.357,0,0,0,.682.111,3.6,3.6,0,0,1,1.15.106,2.167,2.167,0,0,1,.424.159,1.043,1.043,0,0,1,.649.885c0-.023.028.517.028.517a1.151,1.151,0,0,1-.609,1,.3.3,0,0,1-.273.009" transform="translate(-63.714 -85.46)" fill="#333"/>
            <path id="Path_8675" data-name="Path 8675" d="M99.633,126.178a2.212,2.212,0,0,0,.711.218c.139.018.271-.061.243-.142l-.295-.857c-.028-.085.066-.173.217-.2l.977-.143a.413.413,0,0,1,.241.03.154.154,0,0,1,.081.083l.279.814a.117.117,0,0,0,.06.06.3.3,0,0,0,.273-.009,1,1,0,0,0-.041-1.858,2.167,2.167,0,0,0-.424-.159,3.6,3.6,0,0,0-1.15-.106,1.354,1.354,0,0,1-.682-.111l-7.586-3.849c-.2-.1-.322-.261-.281-.422.1-.433-.22-.87-.761-1.145a2.636,2.636,0,0,0-.79-.248c-.151-.023-.292.067-.247.152l.422.789c.045.082-.036.173-.18.2l-.955.2a.43.43,0,0,1-.269-.027.173.173,0,0,1-.075-.067l-.443-.831a.123.123,0,0,0-.054-.048.313.313,0,0,0-.272.008,1.011,1.011,0,0,0-.134,1.725,1.6,1.6,0,0,0,.239.148,2.921,2.921,0,0,0,1.514.242,1.376,1.376,0,0,1,.707.11L98.55,124.6c.192.1.3.242.277.394a1.236,1.236,0,0,0,.8,1.186" transform="translate(-63.715 -85.46)" fill="#666"/>
            <path id="Path_8676" data-name="Path 8676" d="M86.628,137.534a.1.1,0,0,1-.052-.052l-.242-.707a.133.133,0,0,0-.071-.072.358.358,0,0,0-.209-.027l-.848.124a.334.334,0,0,0-.1.031l.142.413a.057.057,0,0,1,0,.037c.007-.02.032.448.032.448,0,.064-.1.121-.214.107a1.915,1.915,0,0,1-.617-.189,1.17,1.17,0,0,1-.707-.888l-.015-.284a.47.47,0,0,0-.217-.2l-6.59-3.344a1.2,1.2,0,0,0-.613-.1,2.533,2.533,0,0,1-1.314-.21,1.348,1.348,0,0,1-.207-.129.924.924,0,0,1-.365-.679l-.024-.469a.886.886,0,0,1,.481-.818.271.271,0,0,1,.236-.007.105.105,0,0,1,.047.042l.384.721a.149.149,0,0,0,.065.058.375.375,0,0,0,.234.024l.828-.176a2.893,2.893,0,0,0-.185-.394c-.007-.026-.032-.494-.032-.494-.032-.048.09-.126.222-.106a2.29,2.29,0,0,1,.686.216,1.073,1.073,0,0,1,.675.834c0-.014.02.343.02.343a.506.506,0,0,0,.209.182l6.584,3.341a1.177,1.177,0,0,0,.591.1,3.122,3.122,0,0,1,1,.092,1.92,1.92,0,0,1,.368.138.906.906,0,0,1,.564.768c0-.02.025.449.025.449a1,1,0,0,1-.529.864.263.263,0,0,1-.237.008" transform="translate(-53.815 -94.188)" fill="#333"/>
            <path id="Path_8677" data-name="Path 8677" d="M84.423,137.181a1.923,1.923,0,0,0,.617.189c.12.016.235-.053.211-.123L85,136.5c-.025-.074.057-.15.188-.17l.848-.125a.36.36,0,0,1,.209.027.132.132,0,0,1,.07.072l.242.706a.1.1,0,0,0,.052.052.263.263,0,0,0,.237-.008.867.867,0,0,0-.036-1.612,1.892,1.892,0,0,0-.368-.138,3.116,3.116,0,0,0-1-.092,1.177,1.177,0,0,1-.591-.1l-6.584-3.341c-.176-.089-.28-.226-.244-.366.091-.376-.192-.756-.66-.993a2.293,2.293,0,0,0-.686-.215c-.132-.02-.254.058-.214.132l.366.685c.039.071-.032.15-.157.177l-.828.176a.375.375,0,0,1-.234-.024.151.151,0,0,1-.065-.058l-.384-.721a.105.105,0,0,0-.047-.041.271.271,0,0,0-.236.007.878.878,0,0,0-.116,1.5,1.4,1.4,0,0,0,.208.129,2.535,2.535,0,0,0,1.314.21,1.2,1.2,0,0,1,.613.1l6.59,3.344c.167.085.264.21.241.342a1.073,1.073,0,0,0,.7,1.029" transform="translate(-53.816 -94.188)" fill="#666"/>
          </g>
        </g>
      </g>
    </g>
    <g id="Group_2273" data-name="Group 2273" transform="translate(57.551 99.333)">
      <g id="Group_2272" data-name="Group 2272" transform="translate(0)" clip-path="url(#clip-path-9)">
        <path id="Path_8678" data-name="Path 8678" d="M295.643,263v2.587L258.43,244.1l2.2-1.314Z" transform="translate(-257.589 -183.076)" fill="#d4b77d"/>
        <path id="Path_8679" data-name="Path 8679" d="M250.632,321.586l-2.543,1.469v-2.587L250.632,319Z" transform="translate(-210.034 -240.543)" fill="#d4b77d"/>
        <path id="Path_8680" data-name="Path 8680" d="M250.592,236.728l35.051,20.237-.824.476-.63.365-1.09.627-35.007-20.214Z" transform="translate(-245.047 -178.505)" fill="#d4b77d"/>
        <path id="Path_8681" data-name="Path 8681" d="M295.644,263v2.587L258.43,244.1l2.2-1.314Z" transform="translate(-257.589 -183.076)" fill="#8a653e"/>
        <path id="Path_8682" data-name="Path 8682" d="M250.632,321.587l-2.543,1.469v-2.587L250.632,319Z" transform="translate(-210.034 -240.543)" fill="#bd8b55"/>
        <path id="Path_8683" data-name="Path 8683" d="M251.5,240.1l-37.214-21.485,2.2-1.314L251.5,237.515Z" transform="translate(-202.588 -163.858)" fill="#d4b77d"/>
        <path id="Path_8684" data-name="Path 8684" d="M206.487,296.1l-2.544,1.469v-2.587l2.544-1.469Z" transform="translate(-155.032 -221.324)" fill="#d4b77d"/>
        <path id="Path_8685" data-name="Path 8685" d="M206.448,211.241,241.5,231.478l-.824.476-.63.365-1.09.627-35.007-20.214Z" transform="translate(-190.045 -159.287)" fill="#d4b77d"/>
        <path id="Path_8686" data-name="Path 8686" d="M251.5,240.1l-37.214-21.485,2.2-1.314L251.5,237.515Z" transform="translate(-202.588 -163.858)" fill="#8a653e"/>
        <path id="Path_8687" data-name="Path 8687" d="M206.487,293.513V296.1l-2.544,1.468v-2.587Z" transform="translate(-155.032 -221.324)" fill="#bd8b55"/>
        <path id="Path_8688" data-name="Path 8688" d="M177.757,194.174l35.29,20.374v2.587l-37.494-21.647Z" transform="translate(-154.609 -146.418)" fill="#d4b77d"/>
        <path id="Path_8689" data-name="Path 8689" d="M167.754,273.63l-2.544,1.469v-2.587l2.544-1.469Z" transform="translate(-106.773 -204.381)" fill="#d4b77d"/>
        <path id="Path_8690" data-name="Path 8690" d="M167.715,188.113l35.332,20.4-.824.476-.631.365-1.09.627L165.215,189.6Z" transform="translate(-142.067 -141.847)" fill="#d4b77d"/>
        <path id="Path_8691" data-name="Path 8691" d="M177.757,194.174l35.29,20.374v2.587l-37.494-21.647Z" transform="translate(-154.609 -146.418)" fill="#8a653e"/>
        <path id="Path_8692" data-name="Path 8692" d="M167.754,271.043v2.587l-2.544,1.469v-2.587Z" transform="translate(-106.773 -204.381)" fill="#bd8b55"/>
        <path id="Path_8693" data-name="Path 8693" d="M158.747,280l27.3-15.764v-1.109l-27.3,15.764Z" transform="translate(-123.48 -198.409)" fill="#d4b77d"/>
        <path id="Path_8694" data-name="Path 8694" d="M305.029,264.792V265.9L269.762,245.54v-1.109Z" transform="translate(-269.762 -184.314)" fill="#d4b77d"/>
        <path id="Path_8695" data-name="Path 8695" d="M197.958,187.211l.631.365L221.325,200.7l-27.3,15.765L171.283,203.34l-.63-.364-11.9-6.868,27.305-15.765Z" transform="translate(-158.756 -135.988)" fill="#f5d5b3"/>
        <path id="Path_8696" data-name="Path 8696" d="M186.051,263.123v1.109L158.747,280v-1.109Z" transform="translate(-123.48 -198.409)" fill="#bd8b55"/>
        <path id="Path_8697" data-name="Path 8697" d="M305.029,264.792V265.9L269.762,245.54v-1.109Z" transform="translate(-269.762 -184.314)" fill="#bd8b55"/>
        <g id="Group_1870" data-name="Group 1870">
          <g id="Group_1869" data-name="Group 1869" clip-path="url(#clip-path-9)">
            <g id="Group_1868" data-name="Group 1868" transform="translate(22.042 44.204)">
              <g id="Group_1867" data-name="Group 1867">
                <g id="Group_1866" data-name="Group 1866" clip-path="url(#clip-path-11)">
                  <g id="Group_1865" data-name="Group 1865" style="isolation: isolate">
                    <g id="Group_1864" data-name="Group 1864">
                      <g id="Group_1863" data-name="Group 1863" clip-path="url(#clip-path-11)">
                        <g id="Group_1844" data-name="Group 1844" transform="translate(0.387)">
                          <g id="Group_1843" data-name="Group 1843">
                            <g id="Group_1842" data-name="Group 1842" clip-path="url(#clip-path-13)">
                              <path id="Path_8698" data-name="Path 8698" d="M290.537,179.9l-7.334,4.262a2.5,2.5,0,0,1,2.2.211l7.334-4.262a2.505,2.505,0,0,0-2.2-.211" transform="translate(-283.203 -179.729)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1847" data-name="Group 1847" transform="translate(2.586 0.383)">
                          <g id="Group_1846" data-name="Group 1846">
                            <g id="Group_1845" data-name="Group 1845" clip-path="url(#clip-path-14)">
                              <path id="Path_8699" data-name="Path 8699" d="M251.015,191.612l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-240.516 -181.288)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1850" data-name="Group 1850" transform="translate(3.97 1.185)">
                          <g id="Group_1849" data-name="Group 1849">
                            <g id="Group_1848" data-name="Group 1848" clip-path="url(#clip-path-15)">
                              <path id="Path_8700" data-name="Path 8700" d="M261.208,189.81l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-246.143 -184.549)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1853" data-name="Group 1853" transform="translate(2.586 0.383)">
                          <g id="Group_1852" data-name="Group 1852">
                            <g id="Group_1851" data-name="Group 1851" clip-path="url(#clip-path-14)">
                              <path id="Path_8701" data-name="Path 8701" d="M251.015,191.612l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-240.516 -181.288)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1856" data-name="Group 1856" transform="translate(3.97 1.185)">
                          <g id="Group_1855" data-name="Group 1855">
                            <g id="Group_1854" data-name="Group 1854" clip-path="url(#clip-path-15)">
                              <path id="Path_8702" data-name="Path 8702" d="M261.208,189.81l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-246.143 -184.549)" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1859" data-name="Group 1859" transform="translate(13.085 6.445)">
                          <g id="Group_1858" data-name="Group 1858">
                            <g id="Group_1857" data-name="Group 1857" clip-path="url(#clip-path-18)">
                              <path id="Path_8703" data-name="Path 8703" d="M231.8,214.382l7.334-4.262a.7.7,0,0,0,.364-.642c0-1.087-1.779-3-2.725-3.544l-7.334,4.262c.945.546,2.728,2.457,2.725,3.543a.7.7,0,0,1-.364.642" transform="translate(-229.436 -205.934)" fill="#ccc"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1862" data-name="Group 1862" transform="translate(0 4.262)">
                          <g id="Group_1861" data-name="Group 1861">
                            <g id="Group_1860" data-name="Group 1860" clip-path="url(#clip-path-19)">
                              <path id="Path_8704" data-name="Path 8704" d="M261.839,197.44c-.946-.546-2.582-.609-2.585.477s1.629,2.916,2.574,3.462l10.5,6.062c.946.546,2.733.693,2.736-.4s-1.779-3-2.725-3.544Z" transform="translate(-259.254 -197.057)" fill="#999"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
        <path id="Path_8705" data-name="Path 8705" d="M259.555,200.658l-4.783,2.78-2.619-1.512,4.823-2.756Z" transform="translate(-219.957 -150.184)" fill="#e34248"/>
        <path id="Path_8706" data-name="Path 8706" d="M267.473,188.027l4.039,2.332-1.973,1.144-4.023-2.339Z" transform="translate(-235.2 -141.782)" fill="#ccc"/>
        <path id="Path_8707" data-name="Path 8707" d="M275.508,195.161l2.339-1.359,4.025,2.337-2.33,1.351Z" transform="translate(-248.019 -146.137)" fill="#ccc"/>
        <g id="Group_1899" data-name="Group 1899">
          <g id="Group_1898" data-name="Group 1898" clip-path="url(#clip-path-9)">
            <g id="Group_1897" data-name="Group 1897" transform="translate(13.056 49.523)">
              <g id="Group_1896" data-name="Group 1896">
                <g id="Group_1895" data-name="Group 1895" clip-path="url(#clip-path-21)">
                  <g id="Group_1894" data-name="Group 1894" style="isolation: isolate">
                    <g id="Group_1893" data-name="Group 1893">
                      <g id="Group_1892" data-name="Group 1892" clip-path="url(#clip-path-21)">
                        <g id="Group_1873" data-name="Group 1873" transform="translate(0.387)">
                          <g id="Group_1872" data-name="Group 1872">
                            <g id="Group_1871" data-name="Group 1871" clip-path="url(#clip-path-13)">
                              <path id="Path_8708" data-name="Path 8708" d="M327.073,201.527l-7.334,4.262a2.5,2.5,0,0,1,2.2.211l7.334-4.262a2.505,2.505,0,0,0-2.2-.211" transform="translate(-319.739 -201.355)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1876" data-name="Group 1876" transform="translate(2.585 0.383)">
                          <g id="Group_1875" data-name="Group 1875">
                            <g id="Group_1874" data-name="Group 1874" clip-path="url(#clip-path-14)">
                              <path id="Path_8709" data-name="Path 8709" d="M287.551,213.237l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-277.052 -202.914)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1879" data-name="Group 1879" transform="translate(3.969 1.185)">
                          <g id="Group_1878" data-name="Group 1878">
                            <g id="Group_1877" data-name="Group 1877" clip-path="url(#clip-path-15)">
                              <path id="Path_8710" data-name="Path 8710" d="M297.744,211.436l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-282.68 -206.174)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1882" data-name="Group 1882" transform="translate(2.585 0.383)">
                          <g id="Group_1881" data-name="Group 1881">
                            <g id="Group_1880" data-name="Group 1880" clip-path="url(#clip-path-14)">
                              <path id="Path_8711" data-name="Path 8711" d="M287.551,213.237l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-277.052 -202.914)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1885" data-name="Group 1885" transform="translate(3.969 1.185)">
                          <g id="Group_1884" data-name="Group 1884">
                            <g id="Group_1883" data-name="Group 1883" clip-path="url(#clip-path-15)">
                              <path id="Path_8712" data-name="Path 8712" d="M297.744,211.436l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-282.68 -206.174)" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1888" data-name="Group 1888" transform="translate(13.085 6.445)">
                          <g id="Group_1887" data-name="Group 1887">
                            <g id="Group_1886" data-name="Group 1886" clip-path="url(#clip-path-18)">
                              <path id="Path_8713" data-name="Path 8713" d="M268.334,236.007l7.334-4.262a.7.7,0,0,0,.364-.642c0-1.087-1.779-3-2.725-3.544l-7.334,4.262c.945.546,2.728,2.457,2.725,3.543a.7.7,0,0,1-.364.642" transform="translate(-265.973 -227.559)" fill="#ccc"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1891" data-name="Group 1891" transform="translate(0 4.262)">
                          <g id="Group_1890" data-name="Group 1890">
                            <g id="Group_1889" data-name="Group 1889" clip-path="url(#clip-path-19)">
                              <path id="Path_8714" data-name="Path 8714" d="M298.376,219.066c-.946-.546-2.582-.609-2.585.478s1.629,2.915,2.574,3.461l10.5,6.062c.946.546,2.733.693,2.736-.4s-1.78-3-2.725-3.543Z" transform="translate(-295.791 -218.683)" fill="#999"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
        <path id="Path_8715" data-name="Path 8715" d="M296.092,222.283l-4.783,2.78-2.619-1.512,4.824-2.756Z" transform="translate(-265.48 -166.491)" fill="#e34248"/>
        <path id="Path_8716" data-name="Path 8716" d="M304.009,209.653l4.039,2.332-1.973,1.144-4.023-2.339Z" transform="translate(-280.723 -158.089)" fill="#ccc"/>
        <path id="Path_8717" data-name="Path 8717" d="M312.045,216.787l2.339-1.359,4.026,2.337-2.33,1.351Z" transform="translate(-293.542 -162.444)" fill="#ccc"/>
        <g id="Group_1928" data-name="Group 1928">
          <g id="Group_1927" data-name="Group 1927" clip-path="url(#clip-path-9)">
            <g id="Group_1926" data-name="Group 1926" transform="translate(3.838 54.529)">
              <g id="Group_1925" data-name="Group 1925">
                <g id="Group_1924" data-name="Group 1924" clip-path="url(#clip-path-21)">
                  <g id="Group_1923" data-name="Group 1923" style="isolation: isolate">
                    <g id="Group_1922" data-name="Group 1922">
                      <g id="Group_1921" data-name="Group 1921" clip-path="url(#clip-path-21)">
                        <g id="Group_1902" data-name="Group 1902" transform="translate(0.386)">
                          <g id="Group_1901" data-name="Group 1901">
                            <g id="Group_1900" data-name="Group 1900" clip-path="url(#clip-path-13)">
                              <path id="Path_8718" data-name="Path 8718" d="M364.551,221.883l-7.334,4.262a2.5,2.5,0,0,1,2.2.211l7.334-4.262a2.5,2.5,0,0,0-2.2-.211" transform="translate(-357.217 -221.71)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1905" data-name="Group 1905" transform="translate(2.585 0.384)">
                          <g id="Group_1904" data-name="Group 1904">
                            <g id="Group_1903" data-name="Group 1903" clip-path="url(#clip-path-14)">
                              <path id="Path_8719" data-name="Path 8719" d="M325.028,233.593l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-314.529 -223.27)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1908" data-name="Group 1908" transform="translate(3.969 1.185)">
                          <g id="Group_1907" data-name="Group 1907">
                            <g id="Group_1906" data-name="Group 1906" clip-path="url(#clip-path-15)">
                              <path id="Path_8720" data-name="Path 8720" d="M335.222,231.792l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-320.157 -226.53)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1911" data-name="Group 1911" transform="translate(2.585 0.384)">
                          <g id="Group_1910" data-name="Group 1910">
                            <g id="Group_1909" data-name="Group 1909" clip-path="url(#clip-path-14)">
                              <path id="Path_8721" data-name="Path 8721" d="M325.028,233.593l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-314.529 -223.27)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1914" data-name="Group 1914" transform="translate(3.969 1.185)">
                          <g id="Group_1913" data-name="Group 1913">
                            <g id="Group_1912" data-name="Group 1912" clip-path="url(#clip-path-15)">
                              <path id="Path_8722" data-name="Path 8722" d="M335.222,231.792l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-320.157 -226.53)" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1917" data-name="Group 1917" transform="translate(13.085 6.445)">
                          <g id="Group_1916" data-name="Group 1916">
                            <g id="Group_1915" data-name="Group 1915" clip-path="url(#clip-path-18)">
                              <path id="Path_8723" data-name="Path 8723" d="M305.811,256.363l7.334-4.262a.7.7,0,0,0,.364-.642c0-1.087-1.779-3-2.725-3.544l-7.334,4.262c.945.546,2.728,2.457,2.725,3.543a.7.7,0,0,1-.364.642" transform="translate(-303.45 -247.915)" fill="#ccc"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1920" data-name="Group 1920" transform="translate(0 4.262)">
                          <g id="Group_1919" data-name="Group 1919">
                            <g id="Group_1918" data-name="Group 1918" clip-path="url(#clip-path-39)">
                              <path id="Path_8724" data-name="Path 8724" d="M335.853,239.422c-.946-.546-2.583-.609-2.585.477s1.629,2.916,2.574,3.462l10.5,6.062c.946.546,2.733.693,2.736-.4s-1.779-3-2.725-3.543Z" transform="translate(-333.268 -239.039)" fill="#999"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
        <path id="Path_8725" data-name="Path 8725" d="M333.569,242.64l-4.783,2.78-2.619-1.512,4.823-2.756Z" transform="translate(-312.175 -181.841)" fill="#e34248"/>
        <path id="Path_8726" data-name="Path 8726" d="M341.486,230.009l4.039,2.332-1.973,1.144-4.023-2.339Z" transform="translate(-327.418 -173.439)" fill="#ccc"/>
        <path id="Path_8727" data-name="Path 8727" d="M349.522,237.143l2.339-1.359,4.026,2.337-2.33,1.351Z" transform="translate(-340.236 -177.793)" fill="#ccc"/>
        <g id="Group_1957" data-name="Group 1957">
          <g id="Group_1956" data-name="Group 1956" clip-path="url(#clip-path-9)">
            <g id="Group_1955" data-name="Group 1955" transform="translate(22.042 39.998)">
              <g id="Group_1954" data-name="Group 1954">
                <g id="Group_1953" data-name="Group 1953" clip-path="url(#clip-path-11)">
                  <g id="Group_1952" data-name="Group 1952" style="isolation: isolate">
                    <g id="Group_1951" data-name="Group 1951">
                      <g id="Group_1950" data-name="Group 1950" clip-path="url(#clip-path-11)">
                        <g id="Group_1931" data-name="Group 1931" transform="translate(0.387)">
                          <g id="Group_1930" data-name="Group 1930">
                            <g id="Group_1929" data-name="Group 1929" clip-path="url(#clip-path-13)">
                              <path id="Path_8728" data-name="Path 8728" d="M290.537,162.8l-7.334,4.262a2.5,2.5,0,0,1,2.2.211l7.334-4.262a2.505,2.505,0,0,0-2.2-.211" transform="translate(-283.203 -162.63)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1934" data-name="Group 1934" transform="translate(2.586 0.383)">
                          <g id="Group_1933" data-name="Group 1933">
                            <g id="Group_1932" data-name="Group 1932" clip-path="url(#clip-path-44)">
                              <path id="Path_8729" data-name="Path 8729" d="M251.015,174.513l7.334-4.262-10.5-6.061-7.334,4.262Z" transform="translate(-240.516 -164.189)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1937" data-name="Group 1937" transform="translate(3.97 1.185)">
                          <g id="Group_1936" data-name="Group 1936">
                            <g id="Group_1935" data-name="Group 1935" clip-path="url(#clip-path-15)">
                              <path id="Path_8730" data-name="Path 8730" d="M261.208,172.711l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-246.143 -167.45)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1940" data-name="Group 1940" transform="translate(2.586 0.383)">
                          <g id="Group_1939" data-name="Group 1939">
                            <g id="Group_1938" data-name="Group 1938" clip-path="url(#clip-path-44)">
                              <path id="Path_8731" data-name="Path 8731" d="M251.015,174.513l7.334-4.262-10.5-6.061-7.334,4.262Z" transform="translate(-240.516 -164.189)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1943" data-name="Group 1943" transform="translate(3.97 1.185)">
                          <g id="Group_1942" data-name="Group 1942">
                            <g id="Group_1941" data-name="Group 1941" clip-path="url(#clip-path-15)">
                              <path id="Path_8732" data-name="Path 8732" d="M261.208,172.711l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-246.143 -167.45)" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1946" data-name="Group 1946" transform="translate(13.085 6.445)">
                          <g id="Group_1945" data-name="Group 1945">
                            <g id="Group_1944" data-name="Group 1944" clip-path="url(#clip-path-48)">
                              <path id="Path_8733" data-name="Path 8733" d="M231.8,197.283l7.334-4.262a.7.7,0,0,0,.364-.642c0-1.087-1.779-3-2.725-3.544l-7.334,4.262c.945.546,2.728,2.457,2.725,3.543a.7.7,0,0,1-.364.642" transform="translate(-229.436 -188.835)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1949" data-name="Group 1949" transform="translate(0 4.262)">
                          <g id="Group_1948" data-name="Group 1948">
                            <g id="Group_1947" data-name="Group 1947" clip-path="url(#clip-path-19)">
                              <path id="Path_8734" data-name="Path 8734" d="M261.839,180.342c-.946-.546-2.582-.609-2.585.478s1.629,2.915,2.574,3.461l10.5,6.062c.946.546,2.733.693,2.736-.4s-1.779-3-2.725-3.543Z" transform="translate(-259.254 -179.959)" fill="#999"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
        <path id="Path_8735" data-name="Path 8735" d="M259.555,183.559l-4.783,2.78-2.619-1.512,4.823-2.756Z" transform="translate(-219.957 -137.29)" fill="#e34248"/>
        <path id="Path_8736" data-name="Path 8736" d="M267.473,170.928l4.039,2.332-1.973,1.144-4.023-2.339Z" transform="translate(-235.2 -128.889)" fill="#ccc"/>
        <path id="Path_8737" data-name="Path 8737" d="M275.508,178.062l2.339-1.359,4.025,2.337-2.33,1.351Z" transform="translate(-248.019 -133.243)" fill="#ccc"/>
        <g id="Group_1986" data-name="Group 1986">
          <g id="Group_1985" data-name="Group 1985" clip-path="url(#clip-path-9)">
            <g id="Group_1984" data-name="Group 1984" transform="translate(13.056 45.317)">
              <g id="Group_1983" data-name="Group 1983">
                <g id="Group_1982" data-name="Group 1982" clip-path="url(#clip-path-21)">
                  <g id="Group_1981" data-name="Group 1981" style="isolation: isolate">
                    <g id="Group_1980" data-name="Group 1980">
                      <g id="Group_1979" data-name="Group 1979" clip-path="url(#clip-path-21)">
                        <g id="Group_1960" data-name="Group 1960" transform="translate(0.387)">
                          <g id="Group_1959" data-name="Group 1959">
                            <g id="Group_1958" data-name="Group 1958" clip-path="url(#clip-path-13)">
                              <path id="Path_8738" data-name="Path 8738" d="M327.073,184.428l-7.334,4.262a2.5,2.5,0,0,1,2.2.211l7.334-4.262a2.5,2.5,0,0,0-2.2-.211" transform="translate(-319.739 -184.256)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1963" data-name="Group 1963" transform="translate(2.585 0.383)">
                          <g id="Group_1962" data-name="Group 1962">
                            <g id="Group_1961" data-name="Group 1961" clip-path="url(#clip-path-14)">
                              <path id="Path_8739" data-name="Path 8739" d="M287.551,196.138l7.334-4.262-10.5-6.061-7.334,4.262Z" transform="translate(-277.052 -185.815)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1966" data-name="Group 1966" transform="translate(3.969 1.185)">
                          <g id="Group_1965" data-name="Group 1965">
                            <g id="Group_1964" data-name="Group 1964" clip-path="url(#clip-path-15)">
                              <path id="Path_8740" data-name="Path 8740" d="M297.744,194.337l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-282.68 -189.076)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1969" data-name="Group 1969" transform="translate(2.585 0.383)">
                          <g id="Group_1968" data-name="Group 1968">
                            <g id="Group_1967" data-name="Group 1967" clip-path="url(#clip-path-14)">
                              <path id="Path_8741" data-name="Path 8741" d="M287.551,196.138l7.334-4.262-10.5-6.061-7.334,4.262Z" transform="translate(-277.052 -185.815)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1972" data-name="Group 1972" transform="translate(3.969 1.185)">
                          <g id="Group_1971" data-name="Group 1971">
                            <g id="Group_1970" data-name="Group 1970" clip-path="url(#clip-path-15)">
                              <path id="Path_8742" data-name="Path 8742" d="M297.744,194.337l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-282.68 -189.076)" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1975" data-name="Group 1975" transform="translate(13.085 6.445)">
                          <g id="Group_1974" data-name="Group 1974">
                            <g id="Group_1973" data-name="Group 1973" clip-path="url(#clip-path-18)">
                              <path id="Path_8743" data-name="Path 8743" d="M268.334,218.909l7.334-4.262a.7.7,0,0,0,.364-.642c0-1.086-1.779-3-2.725-3.543l-7.334,4.262c.945.546,2.728,2.457,2.725,3.543a.7.7,0,0,1-.364.642" transform="translate(-265.973 -210.461)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1978" data-name="Group 1978" transform="translate(0 4.262)">
                          <g id="Group_1977" data-name="Group 1977">
                            <g id="Group_1976" data-name="Group 1976" clip-path="url(#clip-path-19)">
                              <path id="Path_8744" data-name="Path 8744" d="M298.376,201.967c-.946-.546-2.582-.609-2.585.478s1.629,2.915,2.574,3.461l10.5,6.062c.946.546,2.733.693,2.736-.4s-1.78-3-2.725-3.543Z" transform="translate(-295.791 -201.584)" fill="#999"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
        <path id="Path_8745" data-name="Path 8745" d="M296.092,205.184l-4.783,2.78-2.619-1.512,4.824-2.756Z" transform="translate(-265.48 -153.597)" fill="#e34248"/>
        <path id="Path_8746" data-name="Path 8746" d="M304.009,192.554l4.039,2.332-1.973,1.144-4.023-2.339Z" transform="translate(-280.723 -145.196)" fill="#ccc"/>
        <path id="Path_8747" data-name="Path 8747" d="M312.045,199.688l2.339-1.359,4.026,2.336-2.33,1.352Z" transform="translate(-293.542 -149.55)" fill="#ccc"/>
        <g id="Group_2015" data-name="Group 2015">
          <g id="Group_2014" data-name="Group 2014" clip-path="url(#clip-path-9)">
            <g id="Group_2013" data-name="Group 2013" transform="translate(3.838 50.324)">
              <g id="Group_2012" data-name="Group 2012">
                <g id="Group_2011" data-name="Group 2011" clip-path="url(#clip-path-21)">
                  <g id="Group_2010" data-name="Group 2010" style="isolation: isolate">
                    <g id="Group_2009" data-name="Group 2009">
                      <g id="Group_2008" data-name="Group 2008" clip-path="url(#clip-path-21)">
                        <g id="Group_1989" data-name="Group 1989" transform="translate(0.386)">
                          <g id="Group_1988" data-name="Group 1988">
                            <g id="Group_1987" data-name="Group 1987" clip-path="url(#clip-path-13)">
                              <path id="Path_8748" data-name="Path 8748" d="M364.551,204.784l-7.334,4.262a2.5,2.5,0,0,1,2.2.211l7.334-4.262a2.505,2.505,0,0,0-2.2-.211" transform="translate(-357.217 -204.612)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1992" data-name="Group 1992" transform="translate(2.585 0.383)">
                          <g id="Group_1991" data-name="Group 1991">
                            <g id="Group_1990" data-name="Group 1990" clip-path="url(#clip-path-14)">
                              <path id="Path_8749" data-name="Path 8749" d="M325.028,216.494l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-314.529 -206.171)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1995" data-name="Group 1995" transform="translate(3.969 1.185)">
                          <g id="Group_1994" data-name="Group 1994">
                            <g id="Group_1993" data-name="Group 1993" clip-path="url(#clip-path-15)">
                              <path id="Path_8750" data-name="Path 8750" d="M335.222,214.693l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-320.157 -209.431)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1998" data-name="Group 1998" transform="translate(2.585 0.383)">
                          <g id="Group_1997" data-name="Group 1997">
                            <g id="Group_1996" data-name="Group 1996" clip-path="url(#clip-path-14)">
                              <path id="Path_8751" data-name="Path 8751" d="M325.028,216.494l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-314.529 -206.171)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2001" data-name="Group 2001" transform="translate(3.969 1.185)">
                          <g id="Group_2000" data-name="Group 2000">
                            <g id="Group_1999" data-name="Group 1999" clip-path="url(#clip-path-15)">
                              <path id="Path_8752" data-name="Path 8752" d="M335.222,214.693l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-320.157 -209.431)" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2004" data-name="Group 2004" transform="translate(13.085 6.445)">
                          <g id="Group_2003" data-name="Group 2003">
                            <g id="Group_2002" data-name="Group 2002" clip-path="url(#clip-path-18)">
                              <path id="Path_8753" data-name="Path 8753" d="M305.811,239.264,313.144,235a.7.7,0,0,0,.364-.642c0-1.087-1.779-3-2.725-3.544l-7.334,4.262c.945.546,2.728,2.457,2.725,3.543a.7.7,0,0,1-.364.642" transform="translate(-303.45 -230.816)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2007" data-name="Group 2007" transform="translate(0 4.262)">
                          <g id="Group_2006" data-name="Group 2006">
                            <g id="Group_2005" data-name="Group 2005" clip-path="url(#clip-path-39)">
                              <path id="Path_8754" data-name="Path 8754" d="M335.853,222.323c-.946-.546-2.583-.609-2.585.477s1.629,2.916,2.574,3.462l10.5,6.062c.946.546,2.733.693,2.736-.4s-1.779-3-2.725-3.543Z" transform="translate(-333.268 -221.94)" fill="#999"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
        <path id="Path_8755" data-name="Path 8755" d="M333.569,225.541l-4.783,2.78-2.619-1.512,4.823-2.756Z" transform="translate(-312.175 -168.947)" fill="#e34248"/>
        <path id="Path_8756" data-name="Path 8756" d="M341.486,212.91l4.039,2.332-1.973,1.144-4.023-2.339Z" transform="translate(-327.418 -160.545)" fill="#ccc"/>
        <path id="Path_8757" data-name="Path 8757" d="M349.522,220.044l2.339-1.359,4.026,2.337-2.33,1.351Z" transform="translate(-340.236 -164.9)" fill="#ccc"/>
        <g id="Group_2044" data-name="Group 2044">
          <g id="Group_2043" data-name="Group 2043" clip-path="url(#clip-path-9)">
            <g id="Group_2042" data-name="Group 2042" transform="translate(22.042 35.793)">
              <g id="Group_2041" data-name="Group 2041">
                <g id="Group_2040" data-name="Group 2040" clip-path="url(#clip-path-11)">
                  <g id="Group_2039" data-name="Group 2039" style="isolation: isolate">
                    <g id="Group_2038" data-name="Group 2038">
                      <g id="Group_2037" data-name="Group 2037" clip-path="url(#clip-path-11)">
                        <g id="Group_2018" data-name="Group 2018" transform="translate(0.387)">
                          <g id="Group_2017" data-name="Group 2017">
                            <g id="Group_2016" data-name="Group 2016" clip-path="url(#clip-path-13)">
                              <path id="Path_8758" data-name="Path 8758" d="M290.537,145.7l-7.334,4.262a2.5,2.5,0,0,1,2.2.211l7.334-4.262a2.5,2.5,0,0,0-2.2-.211" transform="translate(-283.203 -145.531)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2021" data-name="Group 2021" transform="translate(2.586 0.383)">
                          <g id="Group_2020" data-name="Group 2020">
                            <g id="Group_2019" data-name="Group 2019" clip-path="url(#clip-path-44)">
                              <path id="Path_8759" data-name="Path 8759" d="M251.015,157.414l7.334-4.262-10.5-6.061-7.334,4.262Z" transform="translate(-240.516 -147.09)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2024" data-name="Group 2024" transform="translate(3.97 1.185)">
                          <g id="Group_2023" data-name="Group 2023">
                            <g id="Group_2022" data-name="Group 2022" clip-path="url(#clip-path-15)">
                              <path id="Path_8760" data-name="Path 8760" d="M261.208,155.613l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-246.143 -150.351)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2027" data-name="Group 2027" transform="translate(2.586 0.383)">
                          <g id="Group_2026" data-name="Group 2026">
                            <g id="Group_2025" data-name="Group 2025" clip-path="url(#clip-path-44)">
                              <path id="Path_8761" data-name="Path 8761" d="M251.015,157.414l7.334-4.262-10.5-6.061-7.334,4.262Z" transform="translate(-240.516 -147.09)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2030" data-name="Group 2030" transform="translate(3.97 1.185)">
                          <g id="Group_2029" data-name="Group 2029">
                            <g id="Group_2028" data-name="Group 2028" clip-path="url(#clip-path-15)">
                              <path id="Path_8762" data-name="Path 8762" d="M261.208,155.613l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-246.143 -150.351)" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2033" data-name="Group 2033" transform="translate(13.085 6.445)">
                          <g id="Group_2032" data-name="Group 2032">
                            <g id="Group_2031" data-name="Group 2031" clip-path="url(#clip-path-48)">
                              <path id="Path_8763" data-name="Path 8763" d="M231.8,180.184l7.334-4.262a.7.7,0,0,0,.364-.642c0-1.086-1.779-3-2.725-3.543L229.436,176c.945.546,2.728,2.457,2.725,3.543a.7.7,0,0,1-.364.642" transform="translate(-229.436 -171.736)" fill="#ccc"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2036" data-name="Group 2036" transform="translate(0 4.262)">
                          <g id="Group_2035" data-name="Group 2035">
                            <g id="Group_2034" data-name="Group 2034" clip-path="url(#clip-path-19)">
                              <path id="Path_8764" data-name="Path 8764" d="M261.839,163.243c-.946-.546-2.582-.609-2.585.477s1.629,2.916,2.574,3.462l10.5,6.062c.946.546,2.733.693,2.736-.4s-1.779-3-2.725-3.543Z" transform="translate(-259.254 -162.86)" fill="#999"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
        <path id="Path_8765" data-name="Path 8765" d="M259.555,166.46l-4.783,2.78-2.619-1.512,4.823-2.756Z" transform="translate(-219.957 -124.397)" fill="#e34248"/>
        <path id="Path_8766" data-name="Path 8766" d="M267.473,153.83l4.039,2.332-1.973,1.144-4.023-2.339Z" transform="translate(-235.2 -115.996)" fill="#ccc"/>
        <path id="Path_8767" data-name="Path 8767" d="M275.508,160.963l2.339-1.359,4.025,2.337-2.33,1.351Z" transform="translate(-248.019 -120.35)" fill="#ccc"/>
        <g id="Group_2073" data-name="Group 2073">
          <g id="Group_2072" data-name="Group 2072" clip-path="url(#clip-path-9)">
            <g id="Group_2071" data-name="Group 2071" transform="translate(13.056 41.112)">
              <g id="Group_2070" data-name="Group 2070">
                <g id="Group_2069" data-name="Group 2069" clip-path="url(#clip-path-21)">
                  <g id="Group_2068" data-name="Group 2068" style="isolation: isolate">
                    <g id="Group_2067" data-name="Group 2067">
                      <g id="Group_2066" data-name="Group 2066" clip-path="url(#clip-path-21)">
                        <g id="Group_2047" data-name="Group 2047" transform="translate(0.387)">
                          <g id="Group_2046" data-name="Group 2046">
                            <g id="Group_2045" data-name="Group 2045" clip-path="url(#clip-path-13)">
                              <path id="Path_8768" data-name="Path 8768" d="M327.073,167.329l-7.334,4.262a2.5,2.5,0,0,1,2.2.211l7.334-4.262a2.5,2.5,0,0,0-2.2-.211" transform="translate(-319.739 -167.157)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2050" data-name="Group 2050" transform="translate(2.585 0.383)">
                          <g id="Group_2049" data-name="Group 2049">
                            <g id="Group_2048" data-name="Group 2048" clip-path="url(#clip-path-14)">
                              <path id="Path_8769" data-name="Path 8769" d="M287.551,179.04l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-277.052 -168.716)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2053" data-name="Group 2053" transform="translate(3.969 1.185)">
                          <g id="Group_2052" data-name="Group 2052">
                            <g id="Group_2051" data-name="Group 2051" clip-path="url(#clip-path-15)">
                              <path id="Path_8770" data-name="Path 8770" d="M297.744,177.238l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-282.68 -171.976)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2056" data-name="Group 2056" transform="translate(2.585 0.383)">
                          <g id="Group_2055" data-name="Group 2055">
                            <g id="Group_2054" data-name="Group 2054" clip-path="url(#clip-path-14)">
                              <path id="Path_8771" data-name="Path 8771" d="M287.551,179.04l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-277.052 -168.716)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2059" data-name="Group 2059" transform="translate(3.969 1.185)">
                          <g id="Group_2058" data-name="Group 2058">
                            <g id="Group_2057" data-name="Group 2057" clip-path="url(#clip-path-15)">
                              <path id="Path_8772" data-name="Path 8772" d="M297.744,177.238l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-282.68 -171.976)" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2062" data-name="Group 2062" transform="translate(13.085 6.445)">
                          <g id="Group_2061" data-name="Group 2061">
                            <g id="Group_2060" data-name="Group 2060" clip-path="url(#clip-path-48)">
                              <path id="Path_8773" data-name="Path 8773" d="M268.334,201.81l7.334-4.262a.7.7,0,0,0,.364-.642c0-1.087-1.779-3-2.725-3.544l-7.334,4.262c.945.546,2.728,2.457,2.725,3.543a.7.7,0,0,1-.364.642" transform="translate(-265.973 -193.362)" fill="#ccc"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2065" data-name="Group 2065" transform="translate(0 4.262)">
                          <g id="Group_2064" data-name="Group 2064">
                            <g id="Group_2063" data-name="Group 2063" clip-path="url(#clip-path-19)">
                              <path id="Path_8774" data-name="Path 8774" d="M298.376,184.868c-.946-.546-2.582-.609-2.585.477s1.629,2.916,2.574,3.462l10.5,6.062c.946.546,2.733.693,2.736-.4s-1.78-3-2.725-3.543Z" transform="translate(-295.791 -184.485)" fill="#999"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
        <path id="Path_8775" data-name="Path 8775" d="M296.092,188.086l-4.783,2.78-2.619-1.512,4.824-2.756Z" transform="translate(-265.48 -140.704)" fill="#e34248"/>
        <path id="Path_8776" data-name="Path 8776" d="M304.009,175.455l4.039,2.332-1.973,1.144-4.023-2.339Z" transform="translate(-280.723 -132.303)" fill="#ccc"/>
        <path id="Path_8777" data-name="Path 8777" d="M312.045,182.589l2.339-1.359,4.026,2.337-2.33,1.351Z" transform="translate(-293.542 -136.657)" fill="#ccc"/>
        <g id="Group_2102" data-name="Group 2102">
          <g id="Group_2101" data-name="Group 2101" clip-path="url(#clip-path-9)">
            <g id="Group_2100" data-name="Group 2100" transform="translate(3.838 46.118)">
              <g id="Group_2099" data-name="Group 2099">
                <g id="Group_2098" data-name="Group 2098" clip-path="url(#clip-path-21)">
                  <g id="Group_2097" data-name="Group 2097" style="isolation: isolate">
                    <g id="Group_2096" data-name="Group 2096">
                      <g id="Group_2095" data-name="Group 2095" clip-path="url(#clip-path-21)">
                        <g id="Group_2076" data-name="Group 2076" transform="translate(0.386)">
                          <g id="Group_2075" data-name="Group 2075">
                            <g id="Group_2074" data-name="Group 2074" clip-path="url(#clip-path-13)">
                              <path id="Path_8778" data-name="Path 8778" d="M364.551,187.685l-7.334,4.262a2.5,2.5,0,0,1,2.2.211l7.334-4.262a2.5,2.5,0,0,0-2.2-.211" transform="translate(-357.217 -187.513)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2079" data-name="Group 2079" transform="translate(2.585 0.383)">
                          <g id="Group_2078" data-name="Group 2078">
                            <g id="Group_2077" data-name="Group 2077" clip-path="url(#clip-path-14)">
                              <path id="Path_8779" data-name="Path 8779" d="M325.028,199.4l7.334-4.262-10.5-6.061-7.334,4.262Z" transform="translate(-314.529 -189.072)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2082" data-name="Group 2082" transform="translate(3.969 1.185)">
                          <g id="Group_2081" data-name="Group 2081">
                            <g id="Group_2080" data-name="Group 2080" clip-path="url(#clip-path-15)">
                              <path id="Path_8780" data-name="Path 8780" d="M335.222,197.594l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-320.157 -192.332)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2085" data-name="Group 2085" transform="translate(2.585 0.383)">
                          <g id="Group_2084" data-name="Group 2084">
                            <g id="Group_2083" data-name="Group 2083" clip-path="url(#clip-path-14)">
                              <path id="Path_8781" data-name="Path 8781" d="M325.028,199.4l7.334-4.262-10.5-6.061-7.334,4.262Z" transform="translate(-314.529 -189.072)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2088" data-name="Group 2088" transform="translate(3.969 1.185)">
                          <g id="Group_2087" data-name="Group 2087">
                            <g id="Group_2086" data-name="Group 2086" clip-path="url(#clip-path-15)">
                              <path id="Path_8782" data-name="Path 8782" d="M335.222,197.594l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-320.157 -192.332)" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2091" data-name="Group 2091" transform="translate(13.085 6.445)">
                          <g id="Group_2090" data-name="Group 2090">
                            <g id="Group_2089" data-name="Group 2089" clip-path="url(#clip-path-18)">
                              <path id="Path_8783" data-name="Path 8783" d="M305.811,222.166l7.334-4.262a.7.7,0,0,0,.364-.642c0-1.087-1.779-3-2.725-3.544l-7.334,4.262c.945.546,2.728,2.457,2.725,3.543a.7.7,0,0,1-.364.642" transform="translate(-303.45 -213.718)" fill="#ccc"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2094" data-name="Group 2094" transform="translate(0 4.262)">
                          <g id="Group_2093" data-name="Group 2093">
                            <g id="Group_2092" data-name="Group 2092" clip-path="url(#clip-path-39)">
                              <path id="Path_8784" data-name="Path 8784" d="M335.853,205.224c-.946-.546-2.583-.609-2.585.478s1.629,2.915,2.574,3.461l10.5,6.062c.946.546,2.733.693,2.736-.4s-1.779-3-2.725-3.543Z" transform="translate(-333.268 -204.841)" fill="#999"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
        <path id="Path_8785" data-name="Path 8785" d="M333.569,208.441l-4.783,2.78-2.619-1.512,4.823-2.756Z" transform="translate(-312.175 -156.053)" fill="#e34248"/>
        <path id="Path_8786" data-name="Path 8786" d="M341.486,195.811l4.039,2.332-1.973,1.144-4.023-2.339Z" transform="translate(-327.418 -147.652)" fill="#ccc"/>
        <path id="Path_8787" data-name="Path 8787" d="M349.522,202.945l2.339-1.359,4.026,2.337-2.33,1.351Z" transform="translate(-340.236 -152.006)" fill="#ccc"/>
        <g id="Group_2131" data-name="Group 2131">
          <g id="Group_2130" data-name="Group 2130" clip-path="url(#clip-path-9)">
            <g id="Group_2129" data-name="Group 2129" transform="translate(22.042 31.587)">
              <g id="Group_2128" data-name="Group 2128">
                <g id="Group_2127" data-name="Group 2127" clip-path="url(#clip-path-11)">
                  <g id="Group_2126" data-name="Group 2126" style="isolation: isolate">
                    <g id="Group_2125" data-name="Group 2125">
                      <g id="Group_2124" data-name="Group 2124" clip-path="url(#clip-path-11)">
                        <g id="Group_2105" data-name="Group 2105" transform="translate(0.387)">
                          <g id="Group_2104" data-name="Group 2104">
                            <g id="Group_2103" data-name="Group 2103" clip-path="url(#clip-path-13)">
                              <path id="Path_8788" data-name="Path 8788" d="M290.537,128.6l-7.334,4.262a2.5,2.5,0,0,1,2.2.211l7.334-4.262a2.5,2.5,0,0,0-2.2-.211" transform="translate(-283.203 -128.432)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2108" data-name="Group 2108" transform="translate(2.586 0.384)">
                          <g id="Group_2107" data-name="Group 2107">
                            <g id="Group_2106" data-name="Group 2106" clip-path="url(#clip-path-14)">
                              <path id="Path_8789" data-name="Path 8789" d="M251.015,140.315l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-240.516 -129.992)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2111" data-name="Group 2111" transform="translate(3.97 1.185)">
                          <g id="Group_2110" data-name="Group 2110">
                            <g id="Group_2109" data-name="Group 2109" clip-path="url(#clip-path-15)">
                              <path id="Path_8790" data-name="Path 8790" d="M261.208,138.513l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-246.143 -133.252)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2114" data-name="Group 2114" transform="translate(2.586 0.384)">
                          <g id="Group_2113" data-name="Group 2113">
                            <g id="Group_2112" data-name="Group 2112" clip-path="url(#clip-path-14)">
                              <path id="Path_8791" data-name="Path 8791" d="M251.015,140.315l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-240.516 -129.992)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2117" data-name="Group 2117" transform="translate(3.97 1.185)">
                          <g id="Group_2116" data-name="Group 2116">
                            <g id="Group_2115" data-name="Group 2115" clip-path="url(#clip-path-15)">
                              <path id="Path_8792" data-name="Path 8792" d="M261.208,138.513l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-246.143 -133.252)" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2120" data-name="Group 2120" transform="translate(13.085 6.445)">
                          <g id="Group_2119" data-name="Group 2119">
                            <g id="Group_2118" data-name="Group 2118" clip-path="url(#clip-path-18)">
                              <path id="Path_8793" data-name="Path 8793" d="M231.8,163.085l7.334-4.262a.7.7,0,0,0,.364-.642c0-1.087-1.779-3-2.725-3.544l-7.334,4.262c.945.546,2.728,2.457,2.725,3.543a.7.7,0,0,1-.364.642" transform="translate(-229.436 -154.637)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2123" data-name="Group 2123" transform="translate(0 4.262)">
                          <g id="Group_2122" data-name="Group 2122">
                            <g id="Group_2121" data-name="Group 2121" clip-path="url(#clip-path-19)">
                              <path id="Path_8794" data-name="Path 8794" d="M261.839,146.144c-.946-.546-2.582-.609-2.585.478s1.629,2.915,2.574,3.461l10.5,6.062c.946.546,2.733.693,2.736-.4s-1.779-3-2.725-3.543Z" transform="translate(-259.254 -145.761)" fill="#999"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
        <path id="Path_8795" data-name="Path 8795" d="M259.555,149.362l-4.783,2.78-2.619-1.512,4.823-2.756Z" transform="translate(-219.957 -111.504)" fill="#e34248"/>
        <path id="Path_8796" data-name="Path 8796" d="M267.473,136.731l4.039,2.332-1.973,1.144-4.023-2.339Z" transform="translate(-235.2 -103.102)" fill="#ccc"/>
        <path id="Path_8797" data-name="Path 8797" d="M275.508,143.865l2.339-1.359,4.025,2.337-2.33,1.351Z" transform="translate(-248.019 -107.457)" fill="#ccc"/>
        <g id="Group_2160" data-name="Group 2160">
          <g id="Group_2159" data-name="Group 2159" clip-path="url(#clip-path-9)">
            <g id="Group_2158" data-name="Group 2158" transform="translate(13.056 36.906)">
              <g id="Group_2157" data-name="Group 2157">
                <g id="Group_2156" data-name="Group 2156" clip-path="url(#clip-path-21)">
                  <g id="Group_2155" data-name="Group 2155" style="isolation: isolate">
                    <g id="Group_2154" data-name="Group 2154">
                      <g id="Group_2153" data-name="Group 2153" clip-path="url(#clip-path-21)">
                        <g id="Group_2134" data-name="Group 2134" transform="translate(0.387)">
                          <g id="Group_2133" data-name="Group 2133">
                            <g id="Group_2132" data-name="Group 2132" clip-path="url(#clip-path-13)">
                              <path id="Path_8798" data-name="Path 8798" d="M327.073,150.231l-7.334,4.262a2.5,2.5,0,0,1,2.2.211l7.334-4.262a2.505,2.505,0,0,0-2.2-.211" transform="translate(-319.739 -150.058)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2137" data-name="Group 2137" transform="translate(2.585 0.383)">
                          <g id="Group_2136" data-name="Group 2136">
                            <g id="Group_2135" data-name="Group 2135" clip-path="url(#clip-path-14)">
                              <path id="Path_8799" data-name="Path 8799" d="M287.551,161.941l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-277.052 -151.617)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2140" data-name="Group 2140" transform="translate(3.969 1.185)">
                          <g id="Group_2139" data-name="Group 2139">
                            <g id="Group_2138" data-name="Group 2138" clip-path="url(#clip-path-15)">
                              <path id="Path_8800" data-name="Path 8800" d="M297.744,160.14l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-282.68 -154.878)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2143" data-name="Group 2143" transform="translate(2.585 0.383)">
                          <g id="Group_2142" data-name="Group 2142">
                            <g id="Group_2141" data-name="Group 2141" clip-path="url(#clip-path-14)">
                              <path id="Path_8801" data-name="Path 8801" d="M287.551,161.941l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-277.052 -151.617)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2146" data-name="Group 2146" transform="translate(3.969 1.185)">
                          <g id="Group_2145" data-name="Group 2145">
                            <g id="Group_2144" data-name="Group 2144" clip-path="url(#clip-path-15)">
                              <path id="Path_8802" data-name="Path 8802" d="M297.744,160.14l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-282.68 -154.878)" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2149" data-name="Group 2149" transform="translate(13.085 6.445)">
                          <g id="Group_2148" data-name="Group 2148">
                            <g id="Group_2147" data-name="Group 2147" clip-path="url(#clip-path-48)">
                              <path id="Path_8803" data-name="Path 8803" d="M268.334,184.711l7.334-4.262a.7.7,0,0,0,.364-.642c0-1.087-1.779-3-2.725-3.544l-7.334,4.262c.945.546,2.728,2.457,2.725,3.543a.7.7,0,0,1-.364.642" transform="translate(-265.973 -176.263)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2152" data-name="Group 2152" transform="translate(0 4.262)">
                          <g id="Group_2151" data-name="Group 2151">
                            <g id="Group_2150" data-name="Group 2150" clip-path="url(#clip-path-19)">
                              <path id="Path_8804" data-name="Path 8804" d="M298.376,167.77c-.946-.546-2.582-.609-2.585.477s1.629,2.916,2.574,3.462l10.5,6.062c.946.546,2.733.693,2.736-.4s-1.78-3-2.725-3.543Z" transform="translate(-295.791 -167.386)" fill="#999"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
        <path id="Path_8805" data-name="Path 8805" d="M296.092,170.987l-4.783,2.78-2.619-1.512,4.824-2.756Z" transform="translate(-265.48 -127.811)" fill="#e34248"/>
        <path id="Path_8806" data-name="Path 8806" d="M304.009,158.356l4.039,2.332-1.973,1.144-4.023-2.339Z" transform="translate(-280.723 -119.409)" fill="#ccc"/>
        <path id="Path_8807" data-name="Path 8807" d="M312.045,165.49l2.339-1.359,4.026,2.337-2.33,1.351Z" transform="translate(-293.542 -123.764)" fill="#ccc"/>
        <g id="Group_2189" data-name="Group 2189">
          <g id="Group_2188" data-name="Group 2188" clip-path="url(#clip-path-9)">
            <g id="Group_2187" data-name="Group 2187" transform="translate(3.838 41.913)">
              <g id="Group_2186" data-name="Group 2186">
                <g id="Group_2185" data-name="Group 2185" clip-path="url(#clip-path-21)">
                  <g id="Group_2184" data-name="Group 2184" style="isolation: isolate">
                    <g id="Group_2183" data-name="Group 2183">
                      <g id="Group_2182" data-name="Group 2182" clip-path="url(#clip-path-21)">
                        <g id="Group_2163" data-name="Group 2163" transform="translate(0.386)">
                          <g id="Group_2162" data-name="Group 2162">
                            <g id="Group_2161" data-name="Group 2161" clip-path="url(#clip-path-13)">
                              <path id="Path_8808" data-name="Path 8808" d="M364.551,170.586l-7.334,4.262a2.505,2.505,0,0,1,2.2.211l7.334-4.262a2.5,2.5,0,0,0-2.2-.211" transform="translate(-357.217 -170.414)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2166" data-name="Group 2166" transform="translate(2.585 0.383)">
                          <g id="Group_2165" data-name="Group 2165">
                            <g id="Group_2164" data-name="Group 2164" clip-path="url(#clip-path-14)">
                              <path id="Path_8809" data-name="Path 8809" d="M325.028,182.3l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-314.529 -171.973)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2169" data-name="Group 2169" transform="translate(3.969 1.185)">
                          <g id="Group_2168" data-name="Group 2168">
                            <g id="Group_2167" data-name="Group 2167" clip-path="url(#clip-path-15)">
                              <path id="Path_8810" data-name="Path 8810" d="M335.222,180.5l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-320.157 -175.234)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2172" data-name="Group 2172" transform="translate(2.585 0.383)">
                          <g id="Group_2171" data-name="Group 2171">
                            <g id="Group_2170" data-name="Group 2170" clip-path="url(#clip-path-14)">
                              <path id="Path_8811" data-name="Path 8811" d="M325.028,182.3l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-314.529 -171.973)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2175" data-name="Group 2175" transform="translate(3.969 1.185)">
                          <g id="Group_2174" data-name="Group 2174">
                            <g id="Group_2173" data-name="Group 2173" clip-path="url(#clip-path-15)">
                              <path id="Path_8812" data-name="Path 8812" d="M335.222,180.5l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-320.157 -175.234)" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2178" data-name="Group 2178" transform="translate(13.085 6.445)">
                          <g id="Group_2177" data-name="Group 2177">
                            <g id="Group_2176" data-name="Group 2176" clip-path="url(#clip-path-48)">
                              <path id="Path_8813" data-name="Path 8813" d="M305.811,205.067l7.334-4.262a.7.7,0,0,0,.364-.642c0-1.087-1.779-3-2.725-3.544l-7.334,4.262c.945.546,2.728,2.457,2.725,3.543a.7.7,0,0,1-.364.642" transform="translate(-303.45 -196.619)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2181" data-name="Group 2181" transform="translate(0 4.262)">
                          <g id="Group_2180" data-name="Group 2180">
                            <g id="Group_2179" data-name="Group 2179" clip-path="url(#clip-path-39)">
                              <path id="Path_8814" data-name="Path 8814" d="M335.853,188.125c-.946-.546-2.583-.609-2.585.478s1.629,2.915,2.574,3.461l10.5,6.062c.946.546,2.733.693,2.736-.4s-1.779-3-2.725-3.543Z" transform="translate(-333.268 -187.742)" fill="#999"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
        <path id="Path_8815" data-name="Path 8815" d="M333.569,191.342l-4.783,2.78-2.619-1.512,4.823-2.756Z" transform="translate(-312.175 -143.16)" fill="#e34248"/>
        <path id="Path_8816" data-name="Path 8816" d="M341.486,178.712l4.039,2.332-1.973,1.144-4.023-2.339Z" transform="translate(-327.418 -134.759)" fill="#ccc"/>
        <path id="Path_8817" data-name="Path 8817" d="M349.522,185.846l2.339-1.359,4.026,2.336-2.33,1.351Z" transform="translate(-340.236 -139.113)" fill="#ccc"/>
        <g id="Group_2218" data-name="Group 2218">
          <g id="Group_2217" data-name="Group 2217" clip-path="url(#clip-path-9)">
            <g id="Group_2216" data-name="Group 2216" transform="translate(22.042 27.382)">
              <g id="Group_2215" data-name="Group 2215">
                <g id="Group_2214" data-name="Group 2214" clip-path="url(#clip-path-11)">
                  <g id="Group_2213" data-name="Group 2213" style="isolation: isolate">
                    <g id="Group_2212" data-name="Group 2212">
                      <g id="Group_2211" data-name="Group 2211" clip-path="url(#clip-path-11)">
                        <g id="Group_2192" data-name="Group 2192" transform="translate(0.387)">
                          <g id="Group_2191" data-name="Group 2191">
                            <g id="Group_2190" data-name="Group 2190" clip-path="url(#clip-path-13)">
                              <path id="Path_8818" data-name="Path 8818" d="M290.537,111.506l-7.334,4.262a2.5,2.5,0,0,1,2.2.211l7.334-4.262a2.505,2.505,0,0,0-2.2-.211" transform="translate(-283.203 -111.334)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2195" data-name="Group 2195" transform="translate(2.586 0.383)">
                          <g id="Group_2194" data-name="Group 2194">
                            <g id="Group_2193" data-name="Group 2193" clip-path="url(#clip-path-14)">
                              <path id="Path_8819" data-name="Path 8819" d="M251.015,123.216l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-240.516 -112.893)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2198" data-name="Group 2198" transform="translate(3.97 1.185)">
                          <g id="Group_2197" data-name="Group 2197">
                            <g id="Group_2196" data-name="Group 2196" clip-path="url(#clip-path-15)">
                              <path id="Path_8820" data-name="Path 8820" d="M261.208,121.415l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-246.143 -116.153)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2201" data-name="Group 2201" transform="translate(2.586 0.383)">
                          <g id="Group_2200" data-name="Group 2200">
                            <g id="Group_2199" data-name="Group 2199" clip-path="url(#clip-path-14)">
                              <path id="Path_8821" data-name="Path 8821" d="M251.015,123.216l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-240.516 -112.893)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2204" data-name="Group 2204" transform="translate(3.97 1.185)">
                          <g id="Group_2203" data-name="Group 2203">
                            <g id="Group_2202" data-name="Group 2202" clip-path="url(#clip-path-15)">
                              <path id="Path_8822" data-name="Path 8822" d="M261.208,121.415l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-246.143 -116.153)" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2207" data-name="Group 2207" transform="translate(13.085 6.445)">
                          <g id="Group_2206" data-name="Group 2206">
                            <g id="Group_2205" data-name="Group 2205" clip-path="url(#clip-path-18)">
                              <path id="Path_8823" data-name="Path 8823" d="M231.8,145.986l7.334-4.262a.7.7,0,0,0,.364-.642c0-1.087-1.779-3-2.725-3.544l-7.334,4.262c.945.546,2.728,2.457,2.725,3.543a.7.7,0,0,1-.364.642" transform="translate(-229.436 -137.538)" fill="#ccc"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2210" data-name="Group 2210" transform="translate(0 4.262)">
                          <g id="Group_2209" data-name="Group 2209">
                            <g id="Group_2208" data-name="Group 2208" clip-path="url(#clip-path-19)">
                              <path id="Path_8824" data-name="Path 8824" d="M261.839,129.045c-.946-.546-2.582-.609-2.585.477s1.629,2.916,2.574,3.462l10.5,6.062c.946.546,2.733.693,2.736-.4s-1.779-3-2.725-3.543Z" transform="translate(-259.254 -128.662)" fill="#999"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
        <path id="Path_8825" data-name="Path 8825" d="M259.555,132.263l-4.783,2.78-2.619-1.512,4.823-2.756Z" transform="translate(-219.957 -98.611)" fill="#e34248"/>
        <path id="Path_8826" data-name="Path 8826" d="M267.473,119.632l4.039,2.332-1.973,1.144-4.023-2.339Z" transform="translate(-235.2 -90.209)" fill="#ccc"/>
        <path id="Path_8827" data-name="Path 8827" d="M275.508,126.766l2.339-1.359,4.025,2.337-2.33,1.351Z" transform="translate(-248.019 -94.563)" fill="#ccc"/>
        <g id="Group_2247" data-name="Group 2247">
          <g id="Group_2246" data-name="Group 2246" clip-path="url(#clip-path-9)">
            <g id="Group_2245" data-name="Group 2245" transform="translate(13.056 32.701)">
              <g id="Group_2244" data-name="Group 2244">
                <g id="Group_2243" data-name="Group 2243" clip-path="url(#clip-path-21)">
                  <g id="Group_2242" data-name="Group 2242" style="isolation: isolate">
                    <g id="Group_2241" data-name="Group 2241">
                      <g id="Group_2240" data-name="Group 2240" clip-path="url(#clip-path-21)">
                        <g id="Group_2221" data-name="Group 2221" transform="translate(0.387)">
                          <g id="Group_2220" data-name="Group 2220">
                            <g id="Group_2219" data-name="Group 2219" clip-path="url(#clip-path-13)">
                              <path id="Path_8828" data-name="Path 8828" d="M327.073,133.132l-7.334,4.262a2.5,2.5,0,0,1,2.2.211l7.334-4.262a2.505,2.505,0,0,0-2.2-.211" transform="translate(-319.739 -132.959)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2224" data-name="Group 2224" transform="translate(2.585 0.383)">
                          <g id="Group_2223" data-name="Group 2223">
                            <g id="Group_2222" data-name="Group 2222" clip-path="url(#clip-path-44)">
                              <path id="Path_8829" data-name="Path 8829" d="M287.551,144.842l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-277.052 -134.518)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2227" data-name="Group 2227" transform="translate(3.969 1.185)">
                          <g id="Group_2226" data-name="Group 2226">
                            <g id="Group_2225" data-name="Group 2225" clip-path="url(#clip-path-15)">
                              <path id="Path_8830" data-name="Path 8830" d="M297.744,143.041l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-282.68 -137.779)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2230" data-name="Group 2230" transform="translate(2.585 0.383)">
                          <g id="Group_2229" data-name="Group 2229">
                            <g id="Group_2228" data-name="Group 2228" clip-path="url(#clip-path-44)">
                              <path id="Path_8831" data-name="Path 8831" d="M287.551,144.842l7.334-4.262-10.5-6.062-7.334,4.262Z" transform="translate(-277.052 -134.518)" fill="#e6e6e6"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2233" data-name="Group 2233" transform="translate(3.969 1.185)">
                          <g id="Group_2232" data-name="Group 2232">
                            <g id="Group_2231" data-name="Group 2231" clip-path="url(#clip-path-15)">
                              <path id="Path_8832" data-name="Path 8832" d="M297.744,143.041l-9.114-5.262-5.951,3.458,9.114,5.262Z" transform="translate(-282.68 -137.779)" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2236" data-name="Group 2236" transform="translate(13.085 6.445)">
                          <g id="Group_2235" data-name="Group 2235">
                            <g id="Group_2234" data-name="Group 2234" clip-path="url(#clip-path-48)">
                              <path id="Path_8833" data-name="Path 8833" d="M268.334,167.612l7.334-4.262a.7.7,0,0,0,.364-.642c0-1.087-1.779-3-2.725-3.544l-7.334,4.262c.945.546,2.728,2.457,2.725,3.543a.7.7,0,0,1-.364.642" transform="translate(-265.973 -159.164)" fill="#ccc"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_2239" data-name="Group 2239" transform="translate(0 4.262)">
                          <g id="Group_2238" data-name="Group 2238">
                            <g id="Group_2237" data-name="Group 2237" clip-path="url(#clip-path-19)">
                              <path id="Path_8834" data-name="Path 8834" d="M298.376,150.671c-.946-.546-2.582-.609-2.585.477s1.629,2.916,2.574,3.462l10.5,6.062c.946.546,2.733.693,2.736-.4s-1.78-3-2.725-3.543Z" transform="translate(-295.791 -150.288)" fill="#999"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
        <path id="Path_8835" data-name="Path 8835" d="M296.092,153.888l-4.783,2.78-2.619-1.512,4.824-2.756Z" transform="translate(-265.48 -114.917)" fill="#e34248"/>
        <path id="Path_8836" data-name="Path 8836" d="M304.009,141.257l4.039,2.332-1.973,1.144-4.023-2.339Z" transform="translate(-280.723 -106.516)" fill="#ccc"/>
        <path id="Path_8837" data-name="Path 8837" d="M312.045,148.391l2.339-1.359,4.026,2.337-2.33,1.351Z" transform="translate(-293.542 -110.87)" fill="#ccc"/>
        <path id="Path_8838" data-name="Path 8838" d="M235.839,235.1l0,1.244L212.82,249.805l0-1.244Z" transform="translate(-186.567 -177.282)" fill="#f5d5b3"/>
        <path id="Path_8839" data-name="Path 8839" d="M311.092,281.509l0,1.244-4.692-2.709,0-1.244Z" transform="translate(-284.835 -210.23)" fill="#e6ba8a"/>
        <path id="Path_8840" data-name="Path 8840" d="M240.528,226.8l-23.015,13.456-4.693-2.709,23.015-13.456Z" transform="translate(-191.256 -168.975)" fill="#bd8b55"/>
        <path id="Path_8841" data-name="Path 8841" d="M235.84,228.709l0,1.244-23.015,13.456,0-1.244Z" transform="translate(-186.568 -172.459)" fill="#f5d5b3"/>
        <path id="Path_8842" data-name="Path 8842" d="M311.094,275.114l0,1.244-4.693-2.709,0-1.245Z" transform="translate(-284.837 -205.407)" fill="#e6ba8a"/>
        <path id="Path_8843" data-name="Path 8843" d="M240.529,220.4l-23.015,13.456-4.693-2.709,23.015-13.456Z" transform="translate(-191.258 -164.152)" fill="#bd8b55"/>
        <path id="Path_8844" data-name="Path 8844" d="M215.374,246.92l0,1.244L192.355,261.62l0-1.244Z" transform="translate(-161.068 -186.191)" fill="#f5d5b3"/>
        <path id="Path_8845" data-name="Path 8845" d="M290.627,293.325l0,1.244-4.693-2.709,0-1.244Z" transform="translate(-259.337 -219.139)" fill="#e6ba8a"/>
        <path id="Path_8846" data-name="Path 8846" d="M220.063,238.613l-23.015,13.456-4.693-2.709L215.37,235.9Z" transform="translate(-165.758 -177.884)" fill="#bd8b55"/>
        <path id="Path_8847" data-name="Path 8847" d="M215.375,240.524l0,1.244-23.015,13.456,0-1.244Z" transform="translate(-161.07 -181.368)" fill="#f5d5b3"/>
        <path id="Path_8848" data-name="Path 8848" d="M290.629,286.929l0,1.244-4.693-2.709,0-1.245Z" transform="translate(-259.339 -214.317)" fill="#e6ba8a"/>
        <path id="Path_8849" data-name="Path 8849" d="M220.064,232.218l-23.015,13.456-4.693-2.709,23.015-13.456Z" transform="translate(-165.759 -173.062)" fill="#bd8b55"/>
        <path id="Path_8850" data-name="Path 8850" d="M235.839,222.13l0,1.244L212.82,236.83l0-1.244Z" transform="translate(-186.567 -167.497)" fill="#f5d5b3"/>
        <path id="Path_8851" data-name="Path 8851" d="M311.092,268.534l0,1.244-4.692-2.709,0-1.244Z" transform="translate(-284.835 -200.446)" fill="#e6ba8a"/>
        <path id="Path_8852" data-name="Path 8852" d="M240.528,213.823l-23.015,13.456-4.693-2.709,23.015-13.456Z" transform="translate(-191.256 -159.191)" fill="#bd8b55"/>
        <path id="Path_8853" data-name="Path 8853" d="M235.84,215.734l0,1.244-23.015,13.456,0-1.244Z" transform="translate(-186.568 -162.675)" fill="#f5d5b3"/>
        <path id="Path_8854" data-name="Path 8854" d="M311.094,262.138l0,1.244-4.693-2.709,0-1.244Z" transform="translate(-284.837 -195.623)" fill="#e6ba8a"/>
        <path id="Path_8855" data-name="Path 8855" d="M240.529,207.427l-23.015,13.456-4.693-2.709,23.015-13.456Z" transform="translate(-191.258 -154.368)" fill="#bd8b55"/>
        <path id="Path_8856" data-name="Path 8856" d="M215.374,233.945l0,1.244-23.015,13.456,0-1.244Z" transform="translate(-161.068 -176.407)" fill="#f5d5b3"/>
        <path id="Path_8857" data-name="Path 8857" d="M290.627,280.349l0,1.244-4.693-2.709,0-1.245Z" transform="translate(-259.337 -209.355)" fill="#e6ba8a"/>
        <path id="Path_8858" data-name="Path 8858" d="M220.063,225.638l-23.015,13.456-4.693-2.709,23.015-13.456Z" transform="translate(-165.758 -168.1)" fill="#bd8b55"/>
        <path id="Path_8859" data-name="Path 8859" d="M215.375,227.549l0,1.244L192.356,242.25l0-1.244Z" transform="translate(-161.07 -171.584)" fill="#f5d5b3"/>
        <path id="Path_8860" data-name="Path 8860" d="M290.629,273.954l0,1.244-4.693-2.709,0-1.244Z" transform="translate(-259.339 -204.533)" fill="#e6ba8a"/>
        <path id="Path_8861" data-name="Path 8861" d="M220.064,219.243,197.049,232.7l-4.693-2.709,23.015-13.456Z" transform="translate(-165.759 -163.278)" fill="#bd8b55"/>
        <path id="Path_8862" data-name="Path 8862" d="M235.839,209.154l0,1.244L212.82,223.854l0-1.244Z" transform="translate(-186.567 -157.713)" fill="#f5d5b3"/>
        <path id="Path_8863" data-name="Path 8863" d="M311.092,255.559l0,1.244-4.692-2.709,0-1.245Z" transform="translate(-284.835 -190.662)" fill="#e6ba8a"/>
        <path id="Path_8864" data-name="Path 8864" d="M240.528,200.848,217.513,214.3l-4.693-2.709,23.015-13.456Z" transform="translate(-191.256 -149.407)" fill="#bd8b55"/>
        <path id="Path_8865" data-name="Path 8865" d="M235.84,202.759l0,1.244-23.015,13.456,0-1.244Z" transform="translate(-186.568 -152.891)" fill="#f5d5b3"/>
        <path id="Path_8866" data-name="Path 8866" d="M311.094,249.163l0,1.244L306.4,247.7l0-1.245Z" transform="translate(-284.837 -185.839)" fill="#e6ba8a"/>
        <path id="Path_8867" data-name="Path 8867" d="M240.529,194.452l-23.015,13.456-4.693-2.709,23.015-13.456Z" transform="translate(-191.258 -144.584)" fill="#bd8b55"/>
        <path id="Path_8868" data-name="Path 8868" d="M215.374,220.97l0,1.244L192.355,235.67l0-1.245Z" transform="translate(-161.068 -166.623)" fill="#f5d5b3"/>
        <path id="Path_8869" data-name="Path 8869" d="M290.627,267.374l0,1.244-4.693-2.709,0-1.244Z" transform="translate(-259.337 -199.571)" fill="#e6ba8a"/>
        <path id="Path_8870" data-name="Path 8870" d="M220.063,212.663l-23.015,13.456-4.693-2.709,23.015-13.456Z" transform="translate(-165.758 -158.316)" fill="#bd8b55"/>
        <path id="Path_8871" data-name="Path 8871" d="M215.375,214.574l0,1.244-23.015,13.456,0-1.244Z" transform="translate(-161.07 -161.8)" fill="#f5d5b3"/>
        <path id="Path_8872" data-name="Path 8872" d="M290.629,260.979l0,1.244-4.693-2.709,0-1.244Z" transform="translate(-259.339 -194.749)" fill="#e6ba8a"/>
        <path id="Path_8873" data-name="Path 8873" d="M220.064,206.267l-23.015,13.456-4.693-2.709,23.015-13.456Z" transform="translate(-165.759 -153.494)" fill="#bd8b55"/>
        <path id="Path_8874" data-name="Path 8874" d="M235.839,196.179l0,1.244L212.82,210.879l0-1.244Z" transform="translate(-186.567 -147.929)" fill="#f5d5b3"/>
        <path id="Path_8875" data-name="Path 8875" d="M311.092,242.583l0,1.244-4.692-2.709,0-1.244Z" transform="translate(-284.835 -180.878)" fill="#e6ba8a"/>
        <path id="Path_8876" data-name="Path 8876" d="M240.528,187.872l-23.015,13.456-4.693-2.709,23.015-13.456Z" transform="translate(-191.256 -139.623)" fill="#bd8b55"/>
        <path id="Path_8877" data-name="Path 8877" d="M235.84,189.783l0,1.244-23.015,13.456,0-1.244Z" transform="translate(-186.568 -143.107)" fill="#f5d5b3"/>
        <path id="Path_8878" data-name="Path 8878" d="M311.094,236.188l0,1.244-4.693-2.709,0-1.244Z" transform="translate(-284.837 -176.055)" fill="#e6ba8a"/>
        <path id="Path_8879" data-name="Path 8879" d="M240.529,181.477l-23.015,13.456-4.693-2.709,23.015-13.456Z" transform="translate(-191.258 -134.8)" fill="#cf985d"/>
        <path id="Path_8880" data-name="Path 8880" d="M215.374,207.995l0,1.244-23.015,13.456,0-1.244Z" transform="translate(-161.068 -156.839)" fill="#f5d5b3"/>
        <path id="Path_8881" data-name="Path 8881" d="M290.627,254.4l0,1.244-4.693-2.709,0-1.244Z" transform="translate(-259.337 -189.787)" fill="#e6ba8a"/>
        <path id="Path_8882" data-name="Path 8882" d="M220.063,199.688l-23.015,13.456-4.693-2.709,23.015-13.456Z" transform="translate(-165.758 -148.532)" fill="#bd8b55"/>
        <path id="Path_8883" data-name="Path 8883" d="M215.375,201.6l0,1.244L192.356,216.3l0-1.244Z" transform="translate(-161.07 -152.016)" fill="#f5d5b3"/>
        <path id="Path_8884" data-name="Path 8884" d="M290.629,248l0,1.244-4.693-2.709,0-1.244Z" transform="translate(-259.339 -184.965)" fill="#e6ba8a"/>
        <path id="Path_8885" data-name="Path 8885" d="M220.064,193.292l-23.015,13.456-4.693-2.709,23.015-13.456Z" transform="translate(-165.759 -143.71)" fill="#bd8b55"/>
        <g id="Group_2252" data-name="Group 2252">
          <g id="Group_2251" data-name="Group 2251" clip-path="url(#clip-path-9)">
            <path id="Path_8886" data-name="Path 8886" d="M268.985,310.378l-3.262-1.9a.4.4,0,0,1-.169-.371l3.262,1.9a.4.4,0,0,0,.169.371" transform="translate(-232.683 -232.333)" fill="#007694"/>
            <path id="Path_8887" data-name="Path 8887" d="M238.036,246.4l3.262,1.9a.353.353,0,0,0-.356.035l-3.262-1.9a.352.352,0,0,1,.356-.035" transform="translate(-198.141 -185.773)" fill="#00a9d4"/>
            <path id="Path_8888" data-name="Path 8888" d="M242.389,249.037l-3.262-1.9.861-.5,3.263,1.9Z" transform="translate(-200.448 -185.983)" fill="#00a9d4"/>
            <path id="Path_8889" data-name="Path 8889" d="M247.353,253.511l-3.262-1.9.789-1.395,3.263,1.9Z" transform="translate(-206.562 -188.68)" fill="#00a9d4"/>
            <path id="Path_8890" data-name="Path 8890" d="M245.89,250.944l-3.262-1.9a1.032,1.032,0,0,1,.36-.382l3.262,1.9a1.035,1.035,0,0,0-.36.382" transform="translate(-204.31 -187.507)" fill="#00a9d4"/>
            <path id="Path_8891" data-name="Path 8891" d="M250.563,258.579l-3.262-1.9a2.14,2.14,0,0,0,.746-.793l3.262,1.9a2.138,2.138,0,0,1-.746.793" transform="translate(-210.518 -192.955)" fill="#00a9d4"/>
            <path id="Path_8892" data-name="Path 8892" d="M253.6,262.222l-3.262-1.9,2.1-1.21,3.262,1.9Z" transform="translate(-215.646 -195.387)" fill="#007694"/>
            <path id="Path_8893" data-name="Path 8893" d="M269.525,286.416l-3.262-1.9-.022-7.695,3.262,1.9Z" transform="translate(-233.392 -208.741)" fill="#007694"/>
            <path id="Path_8894" data-name="Path 8894" d="M262.118,266.305l-3.262-1.9a1.159,1.159,0,0,1,.374-.372l3.262,1.9a1.162,1.162,0,0,0-.374.372" transform="translate(-224.543 -199.098)" fill="#00a9d4"/>
            <path id="Path_8895" data-name="Path 8895" d="M263.638,269.208l-3.262-1.9,1.136-1.762,3.263,1.9Z" transform="translate(-227.198 -200.239)" fill="#00a9d4"/>
            <path id="Path_8896" data-name="Path 8896" d="M243.654,254.143c.276-.159.5-.031.5.286l.03,10.674a1.275,1.275,0,0,1-.577,1l-6.041,3.488c-.321.185-.582.037-.583-.33l-.022-7.695a1.947,1.947,0,0,1,.329-1.011l1.136-1.762a1.162,1.162,0,0,1,.374-.372l2.1-1.21a2.135,2.135,0,0,0,.746-.793l.789-1.395a1.039,1.039,0,0,1,.36-.382Z" transform="translate(-200.852 -191.585)" fill="#004759"/>
            <path id="Path_8897" data-name="Path 8897" d="M268.256,275.622l-3.262-1.9a1.945,1.945,0,0,1,.329-1.011l3.262,1.9a1.947,1.947,0,0,0-.329,1.011" transform="translate(-232.145 -205.642)" fill="#00a9d4"/>
            <path id="Path_8898" data-name="Path 8898" d="M267.655,265.471l.835.669a1.041,1.041,0,0,1,.1,1.384,1.137,1.137,0,0,1-1.456.5.8.8,0,0,1-.1-.067l-.835-.669a.8.8,0,0,0,.1.067,1.137,1.137,0,0,0,1.456-.5,1.041,1.041,0,0,0-.1-1.384" transform="translate(-232.657 -200.179)" fill="#004759"/>
            <path id="Path_8899" data-name="Path 8899" d="M271.264,264.861a1.01,1.01,0,0,1,.2,1.452,1.137,1.137,0,0,1-1.456.5,1.01,1.01,0,0,1-.2-1.452,1.141,1.141,0,0,1,1.456-.5" transform="translate(-236.365 -199.636)" fill="#fa646a"/>
            <path id="Path_8900" data-name="Path 8900" d="M269.487,263.932l.5.4a1.246,1.246,0,0,1,.118,1.658,1.365,1.365,0,0,1-1.745.6.925.925,0,0,1-.117-.08l-.5-.4a.934.934,0,0,0,.117.08,1.365,1.365,0,0,0,1.745-.595,1.246,1.246,0,0,0-.118-1.658" transform="translate(-234.596 -199.019)" fill="#3a4852"/>
            <path id="Path_8901" data-name="Path 8901" d="M271.774,263.2a1.209,1.209,0,0,1,.236,1.739,1.365,1.365,0,0,1-1.745.6,1.211,1.211,0,0,1-.234-1.738,1.363,1.363,0,0,1,1.743-.6" transform="translate(-237.002 -198.365)" fill="#62798a"/>
            <g id="Group_2250" data-name="Group 2250" transform="translate(35.877 62.339)" opacity="0.4" style="mix-blend-mode: multiply;isolation: isolate">
              <g id="Group_2249" data-name="Group 2249">
                <g id="Group_2248" data-name="Group 2248" clip-path="url(#clip-path-151)">
                  <path id="Path_8902" data-name="Path 8902" d="M252.194,255.682l-2.435,1.406-.66-.381,2.4-1.384a1.388,1.388,0,0,0,.578-.646l.2-.461,1.3-.748-.833,1.641a1.388,1.388,0,0,1-.544.574" transform="translate(-249.098 -253.467)" fill="#963438"/>
                </g>
              </g>
            </g>
            <path id="Path_8903" data-name="Path 8903" d="M252.909,251.985l-2.814,1.624a1.867,1.867,0,0,0-.807,1.155l-.189.84.627.365.44-.254.152-.676a.94.94,0,0,1,.407-.581l2.407-1.39.406-.718Z" transform="translate(-213.187 -190.01)" fill="#00a9d4"/>
            <path id="Path_8904" data-name="Path 8904" d="M252.909,253.467l-.406.719-2.407,1.389a.94.94,0,0,0-.406.581l-.152.677-.44.254.189-.84a1.866,1.866,0,0,1,.807-1.155Z" transform="translate(-212.559 -191.128)" fill="#004759"/>
            <path id="Path_8905" data-name="Path 8905" d="M241.641,285.892l4.921-2.841v-4.426l-4.921,2.841Z" transform="translate(-204.379 -210.097)" fill="#fff"/>
          </g>
        </g>
        <g id="Group_2254" data-name="Group 2254" transform="translate(40.938 43.374)">
          <g id="Group_2253" data-name="Group 2253" clip-path="url(#clip-path-152)">
            <path id="Path_8906" data-name="Path 8906" d="M246.128,177.381l0,1.548c-.019-.017-.024-1.565-.024-1.565Z" transform="translate(-245.987 -177.116)" fill="#006983"/>
            <path id="Path_8907" data-name="Path 8907" d="M246.209,177.3l0,1.548-.022-.021,0-1.548.022.021" transform="translate(-246.086 -177.051)" fill="#00657f"/>
            <path id="Path_8908" data-name="Path 8908" d="M246.3,177.2l0,1.548-.021-.024,0-1.548.022.024" transform="translate(-246.195 -176.977)" fill="#00627b"/>
            <path id="Path_8909" data-name="Path 8909" d="M246.384,177.091l0,1.548-.022-.029,0-1.548.022.029" transform="translate(-246.304 -176.889)" fill="#005f77"/>
            <path id="Path_8910" data-name="Path 8910" d="M246.473,176.943l0,1.548a.375.375,0,0,1-.023-.039l0-1.548a.355.355,0,0,0,.023.039" transform="translate(-246.416 -176.769)" fill="#005b72"/>
            <path id="Path_8911" data-name="Path 8911" d="M246.579,176.492l0,1.548a.289.289,0,0,1-.034-.135l0-1.548a.29.29,0,0,0,.034.135" transform="translate(-246.545 -176.357)" fill="#00586e"/>
          </g>
        </g>
        <g id="Group_2271" data-name="Group 2271">
          <g id="Group_2270" data-name="Group 2270" clip-path="url(#clip-path-9)">
            <path id="Path_8913" data-name="Path 8913" d="M235.418,180.352l0,1.548-3.487-2.92,0-1.548Z" transform="translate(-190.85 -133.793)" fill="#007391"/>
            <path id="Path_8914" data-name="Path 8914" d="M224.585,183.679l0,1.548-2.4,1.383,0-1.548Z" transform="translate(-177.622 -138.504)" fill="#0092b7"/>
            <path id="Path_8915" data-name="Path 8915" d="M228.232,174.536l-2.4,1.383L222.349,173c-.22-.186-.181-.438.1-.6l1.232-.711a1.217,1.217,0,0,1,1.234.065Z" transform="translate(-181.268 -129.36)" fill="#004759"/>
            <path id="Path_8916" data-name="Path 8916" d="M240.073,188.356v.221l-1.362-.791v-.221Z" transform="translate(-197.17 -141.434)" fill="#9e2d31"/>
            <path id="Path_8917" data-name="Path 8917" d="M235.568,188.374v.221l-1.026.592v-.221Z" transform="translate(-191.639 -142.044)" fill="#9e2d31"/>
            <path id="Path_8918" data-name="Path 8918" d="M235.906,186.105l-1.361-.791,1.272-.734,1.115.933Z" transform="translate(-193.003 -139.183)" fill="#b83338"/>
            <path id="Path_8919" data-name="Path 8919" d="M214.734,188.6l6.63-3.828a.592.592,0,0,0,.348-.486l-.01-3.318a.441.441,0,0,0-.081-.247l-1.243-1.382a1.65,1.65,0,0,0-1.919-.23l-7.2,4.158a.545.545,0,0,0-.335.557.394.394,0,0,1-.012-.073l.01,3.318a.584.584,0,0,0,.342.478l1.811,1.052a1.832,1.832,0,0,0,1.661,0" transform="translate(-171.97 -134.909)" fill="#00a9d4"/>
            <path id="Path_8920" data-name="Path 8920" d="M214.763,185.283a1.832,1.832,0,0,1-1.661,0l-1.811-1.052a.508.508,0,0,1,.005-.962l7.2-4.158a1.65,1.65,0,0,1,1.919.23l1.242,1.382c.171.252.066.54-.267.732Z" transform="translate(-172.009 -134.909)" fill="#005b72"/>
            <path id="Path_8921" data-name="Path 8921" d="M256.666,200.567c.013.017.488.766.493.773-.078-.1-.219-.124-.382-.033a1,1,0,0,0-.46.778c0,.193.085.312.218.328-.356-.045-.559,0-.915-.046-.222-.028-.369-.227-.365-.551a1.669,1.669,0,0,1,.771-1.3c.272-.152.509-.119.64.056" transform="translate(-218.324 -151.123)" fill="#b3b3b3"/>
            <path id="Path_8922" data-name="Path 8922" d="M255.451,203.864a1,1,0,0,0-.46.778c0,.29.2.412.447.273a1,1,0,0,0,.459-.778c0-.29-.2-.412-.447-.273" transform="translate(-216.997 -153.681)" fill="#e6e6e6"/>
            <path id="Path_8923" data-name="Path 8923" d="M259.015,189.675l4.589,2.654a.528.528,0,0,0-.527.046,1.668,1.668,0,0,0-.771,1.3.539.539,0,0,0,.222.5l-4.589-2.654a.538.538,0,0,1-.222-.5,1.669,1.669,0,0,1,.771-1.3.528.528,0,0,1,.527-.045" transform="translate(-225.375 -142.986)" fill="#1a1a1a"/>
            <path id="Path_8924" data-name="Path 8924" d="M250.017,205.023l1.528.883a.177.177,0,0,0-.176.015.556.556,0,0,0-.257.434.18.18,0,0,0,.074.167l-1.528-.883a.18.18,0,0,1-.074-.167.555.555,0,0,1,.257-.434.176.176,0,0,1,.176-.015" transform="translate(-211.315 -154.586)" fill="#1a1a1a"/>
            <path id="Path_8925" data-name="Path 8925" d="M250.193,208.042l-1.968,1.132a.484.484,0,0,0,.205-.439,1.527,1.527,0,0,0-.681-1.207.493.493,0,0,0-.5-.054l1.967-1.132a.493.493,0,0,1,.5.054,1.526,1.526,0,0,1,.681,1.207.484.484,0,0,1-.205.439" transform="translate(-209.595 -155.558)" fill="#333"/>
            <path id="Path_8926" data-name="Path 8926" d="M263.584,215.858l-1.631.2c.2-.024.331-.2.335-.479a1.518,1.518,0,0,0-.677-1.2c-.253-.15-.476-.125-.6.037l.994-1.308c.207-.272.581-.315,1.006-.063a2.546,2.546,0,0,1,1.135,2.012c-.007.475-.231.763-.562.8" transform="translate(-226.727 -160.52)" fill="#fff"/>
            <path id="Path_8927" data-name="Path 8927" d="M269.945,219.872a1.519,1.519,0,0,0-.677-1.2c-.38-.226-.694-.055-.7.382a1.518,1.518,0,0,0,.677,1.2c.38.226.694.055.7-.382m-.7.106a.989.989,0,0,1-.441-.782c0-.285.209-.4.457-.249a.989.989,0,0,1,.441.782c0,.285-.209.4-.457.249" transform="translate(-234.384 -164.815)" fill="#e6e6e6"/>
            <path id="Path_8928" data-name="Path 8928" d="M257.2,211.65l-1.773,1.017a.807.807,0,0,0,.342-.731,2.546,2.546,0,0,0-1.135-2.012.823.823,0,0,0-.833-.091l1.773-1.017a.823.823,0,0,1,.833.091,2.546,2.546,0,0,1,1.135,2.012.806.806,0,0,1-.342.731" transform="translate(-218.35 -157.4)" fill="gray"/>
            <path id="Path_8929" data-name="Path 8929" d="M270.035,221.11c.087-.023.145-.108.147-.241a.78.78,0,0,0-.348-.617.23.23,0,0,0-.291,0c.364-.362.442-.534.733-.361a.989.989,0,0,1,.441.782c0,.325-.159.3-.682.437" transform="translate(-235.396 -165.758)" fill="gray"/>
            <path id="Path_8930" data-name="Path 8930" d="M270.035,221.11c.087-.023.145-.108.147-.241a.78.78,0,0,0-.348-.617.23.23,0,0,0-.291,0c.364-.362.442-.534.733-.361a.989.989,0,0,1,.441.782c0,.325-.159.3-.682.437" transform="translate(-235.396 -165.758)" fill="gray"/>
            <path id="Path_8931" data-name="Path 8931" d="M272.066,222.225a.78.78,0,0,1-.348-.617c0-.225.165-.312.36-.2a.78.78,0,0,1,.348.617c0,.225-.165.312-.36.2" transform="translate(-237.641 -166.918)" fill="#ccc"/>
            <path id="Path_8932" data-name="Path 8932" d="M214.538,185.044c-.064.037-.071.093-.016.126l.9.517a.242.242,0,0,0,.218-.009c.064-.037.071-.093.015-.126l-.9-.518a.242.242,0,0,0-.218.009" transform="translate(-166.827 -139.509)" fill="#1a1a1a"/>
            <path id="Path_8933" data-name="Path 8933" d="M215.967,185.869c-.064.037-.071.093-.016.126l.9.517a.241.241,0,0,0,.218-.009c.064-.037.071-.093.016-.126l-.9-.518a.242.242,0,0,0-.218.009" transform="translate(-168.608 -140.132)" fill="#1a1a1a"/>
            <path id="Path_8934" data-name="Path 8934" d="M217.395,186.693c-.064.037-.071.093-.016.126l.9.518a.243.243,0,0,0,.218-.009c.064-.037.071-.093.015-.126l-.9-.518a.242.242,0,0,0-.218.009" transform="translate(-170.387 -140.753)" fill="#1a1a1a"/>
            <path id="Path_8935" data-name="Path 8935" d="M218.823,187.518c-.064.037-.071.093-.016.126l.9.517a.242.242,0,0,0,.218-.009c.064-.037.071-.093.015-.126l-.9-.518a.242.242,0,0,0-.218.009" transform="translate(-172.166 -141.375)" fill="#1a1a1a"/>
            <path id="Path_8936" data-name="Path 8936" d="M220.251,188.342c-.064.037-.071.093-.016.126l.9.517a.242.242,0,0,0,.218-.009c.064-.037.071-.093.016-.126l-.9-.518a.243.243,0,0,0-.218.009" transform="translate(-173.945 -141.997)" fill="#1a1a1a"/>
            <path id="Path_8937" data-name="Path 8937" d="M221.679,189.167c-.064.037-.071.093-.016.126l.9.518a.242.242,0,0,0,.218-.009c.064-.037.071-.093.015-.126l-.9-.518a.242.242,0,0,0-.218.009" transform="translate(-175.725 -142.618)" fill="#1a1a1a"/>
            <path id="Path_8938" data-name="Path 8938" d="M223.108,189.991c-.064.037-.071.093-.016.126l.9.518a.243.243,0,0,0,.218-.009c.064-.037.071-.093.016-.126l-.9-.518a.243.243,0,0,0-.218.009" transform="translate(-177.505 -143.24)" fill="#1a1a1a"/>
            <path id="Path_8939" data-name="Path 8939" d="M224.536,190.816c-.064.037-.071.093-.016.126l.9.518a.243.243,0,0,0,.218-.009c.064-.037.071-.093.016-.126l-.9-.517a.241.241,0,0,0-.218.009" transform="translate(-179.284 -143.862)" fill="#1a1a1a"/>
            <path id="Path_8940" data-name="Path 8940" d="M285.558,169.678,309.5,182.62v.88l-2.355,1.359L283.2,171.037v-.879Z" transform="translate(-277.537 -127.946)" fill="#b3b3b3"/>
            <path id="Path_8941" data-name="Path 8941" d="M285.558,166.1l23.94,13.822-2.355,1.36L283.2,167.462Z" transform="translate(-277.537 -125.25)" fill="gray"/>
            <path id="Path_8942" data-name="Path 8942" d="M290.656,220.085a1.235,1.235,0,0,1,1.117,0,.34.34,0,0,1,0,.645,1.234,1.234,0,0,1-1.117,0,.34.34,0,0,1,0-.645" transform="translate(-261.82 -165.855)" fill="#00a9d4"/>
            <path id="Path_8943" data-name="Path 8943" d="M376.7,170.406a1.235,1.235,0,0,1,1.117,0,.34.34,0,0,1,0,.645,1.234,1.234,0,0,1-1.117,0,.341.341,0,0,1,0-.645" transform="translate(-369.027 -128.394)" fill="#00a9d4"/>
            <path id="Path_8944" data-name="Path 8944" d="M333.126,195.757l2,1.156a.341.341,0,0,1,0,.645l-.278.16-3.12-1.8.278-.16a1.235,1.235,0,0,1,1.117,0" transform="translate(-315.334 -147.51)" fill="#005b72"/>
            <path id="Path_8945" data-name="Path 8945" d="M336.921,199.5l-3.12-1.8v-.879l3.12,1.8Z" transform="translate(-317.405 -148.411)" fill="#00a9d4"/>
            <path id="Path_8946" data-name="Path 8946" d="M164.577,246.809l-2.8-2.427a.434.434,0,0,1-.169-.323s0-.587,0-.564a.492.492,0,0,1,.295-.438l2.456-1.418a1.488,1.488,0,0,1,1.585.12l2.557,2.569a.408.408,0,0,1,.135.29l0,.587a.507.507,0,0,1-.3.416l-2.211,1.276a1.513,1.513,0,0,1-1.549-.088m.867-1.087,1.571-.907-1.987-2-1.762,1.017Z" transform="translate(-106.766 -182.079)" fill="#004759"/>
            <path id="Path_8947" data-name="Path 8947" d="M162.4,276.46l-.187-.364Z" transform="translate(-100.684 -208.191)" fill="#b3b3b3"/>
            <path id="Path_8948" data-name="Path 8948" d="M168.343,245.033c.325-.187.392-.477.163-.706l-2.557-2.569a1.487,1.487,0,0,0-1.584-.12l-2.456,1.418c-.342.2-.4.507-.128.739l2.8,2.427a1.513,1.513,0,0,0,1.55.088Zm-5.477-1.55,2.168-1.252,2.358,2.37-1.941,1.121Z" transform="translate(-106.774 -182.079)" fill="#0087a9"/>
            <path id="Path_8949" data-name="Path 8949" d="M180.276,260.82l-2.215-1.287-.277-.441.585.036-.187-.322.585.036-.191-.322.585.036-.189-.321.585.036-.188-.322.583.035-.189-.321.583.037-.187-.322.583.037-.189-.321.583.037-.189-.323.583.037-.187-.322.585.036-.188-.322.582.036-.187-.322.583.037-.188-.322.585.036-.189-.323.583.037-.188-.322.585.036-.189-.323.585.036-.188-.322.585.036-.187-.322.583.035-.188-.322.583.037-.186-.323.582.036-.188-.322.585.036-.186-.323.583.035-.188-.322.585.036-.186-.323.585.034.174.059,2.761,2.356Z" transform="translate(-132.52 -190.415)" fill="#999"/>
            <path id="Path_8950" data-name="Path 8950" d="M181.987,263.488l9.3-5.371-1.549-1.322L181.152,263Z" transform="translate(-134.23 -193.637)" fill="#ccc"/>
            <path id="Path_8951" data-name="Path 8951" d="M269.843,122.75a1,1,0,0,1,.455-.787l.426-.246a.322.322,0,0,1,.324-.032l-11.56-6.711a.322.322,0,0,0-.324.032l-.426.246a1,1,0,0,0-.455.787.319.319,0,0,0,.133.292l11.561,6.711a.318.318,0,0,1-.133-.292" transform="translate(-232.957 -86.674)" fill="#bd8b55"/>
            <path id="Path_8952" data-name="Path 8952" d="M282.974,119.668a1.1,1.1,0,0,1,.5-.868l.469-.271a.289.289,0,0,1,.329.035c.019-.041-.016-.1-.08-.133l-7.46-4.347a.355.355,0,0,0-.358.035l-.469.271a1.1,1.1,0,0,0-.5.868.352.352,0,0,0,.147.323l7.338,4.277a.162.162,0,0,0,.2,0,.918.918,0,0,0-.1-.059c-.023-.032-.015-.055-.015-.129" transform="translate(-250.4 -86)" fill="#e34248"/>
            <path id="Path_8953" data-name="Path 8953" d="M262.8,150.066l-1.652-.119-.925-.537,0-1.686.927.538,1.652.113Z" transform="translate(-225.189 -111.392)" fill="#4f4f4f"/>
            <path id="Path_8954" data-name="Path 8954" d="M244.311,143.459l3.908-2.255.006,1.687-3.913,2.259Z" transform="translate(-206.699 -106.475)" fill="#585858"/>
            <path id="Path_8955" data-name="Path 8955" d="M245.261,139.964l-.927-.539,4.687-2.706,1.8,1.1-3.909,2.255Z" transform="translate(-209.3 -103.093)" fill="#373737"/>
            <path id="Path_8956" data-name="Path 8956" d="M250.572,147.988c-.252.145-.457.029-.457-.261a1,1,0,0,1,.455-.787l.425-.246c.252-.145.457-.029.457.261a1,1,0,0,1-.454.787Z" transform="translate(-211.353 -110.568)" fill="#bd8b55"/>
          </g>
        </g>
      </g>
    </g>
    <g id="Group_2274" data-name="Group 2274" transform="translate(-5844.871 842.685)">
      <path id="Path_5509" data-name="Path 5509" d="M653.511,991.851v7.172l-23.827-13.809v-7.172Z" transform="translate(5379.552 -1598.944)" fill="#a8835e" fill-rule="evenodd"/>
      <path id="Path_5510" data-name="Path 5510" d="M809.345,1008.341v7.182l-6.72,3.874-3.083,1.777-6.453,3.73v-7.172l6.412-3.709,3.082-1.778Z" transform="translate(5239.973 -1624.826)" fill="#c7b299" fill-rule="evenodd"/>
      <path id="Path_5511" data-name="Path 5511" d="M669.766,927.446l-6.751,3.894-3.062,1.777-6.442,3.72-23.827-13.809,6.751-3.9,3.062-1.767,6.453-3.719Z" transform="translate(5379.552 -1543.931)" fill="#e4c4ab" fill-rule="evenodd"/>
      <path id="Path_5512" data-name="Path 5512" d="M702.56,953.129l-3.062,1.777-23.519-13.994,3.062-1.767Z" transform="translate(5340.008 -1565.72)" fill="#c7b299"/>
      <path id="Path_5513" data-name="Path 5513" d="M840.259,1037.744l-3.083,1.778-.012-2.639,3.083-1.778Z" transform="translate(5202.325 -1647.687)" fill="#d3ccba"/>
      <path id="Path_5514" data-name="Path 5514" d="M771.1,954.494l-1.99,1.148-.9.524-1.9,1.1-7.023-4.07,1.99-1.151.9-.521,1.9-1.1Z" transform="translate(5268.847 -1575.354)" fill="#6d94ee" fill-rule="evenodd"/>
      <path id="Path_5515" data-name="Path 5515" d="M767.95,1033.361l-3.587-2.225,4.766-2.962,3.587,2.225Z" transform="translate(5264.511 -1641.767)" fill="#d74348" fill-rule="evenodd"/>
      <path id="Path_5516" data-name="Path 5516" d="M770.895,1037.633l-3.115-1.932,3.481-2.164,3.115,1.932Z" transform="translate(5261.592 -1646.348)" fill="#f5f5f5" fill-rule="evenodd"/>
      <path id="Path_5517" data-name="Path 5517" d="M796.213,1031.957l.038.025.019.011q.056.035.106.062l.056.031.009,0,.006,0a.01.01,0,0,1,0,.005l.011.022c0,.006,0,.011-.006.016h0a.79.79,0,0,1-.486.092.031.031,0,0,1-.013,0,.009.009,0,0,1,0-.012l0-.015a.1.1,0,0,0,0-.018.015.015,0,0,1,.007-.012.034.034,0,0,1,.023,0,.626.626,0,0,0,.171,0,.579.579,0,0,0,.166-.044l0,0a.005.005,0,0,0,0,0s0,0,0-.006l-.122-.07-.01,0-.009,0-.076.052-.01.007a.02.02,0,0,1-.013,0l-.01,0-.044-.025a.012.012,0,0,1-.007-.008s0-.007.009-.011l.012-.008.041-.026.044-.03.04-.027.014-.01a.025.025,0,0,1,.014,0l.01,0" transform="translate(5237.53 -1644.996)" fill="#f5f5f5"/>
      <path id="Path_5518" data-name="Path 5518" d="M798.969,1034.008q.06-.037.1-.065h0a.035.035,0,0,1,.018-.005.031.031,0,0,1,.018,0l.034.021c.006,0,.008.008.008.012a.019.019,0,0,1-.01.011l-.029.017-.073.044-.073.046s-.006,0-.006.006a0,0,0,0,0,0,0l.006,0a2.044,2.044,0,0,0,.228.036c.026,0,.052,0,.077,0a.026.026,0,0,1,.012,0s0,0,0,.005l-.005.005-.007,0-.008.006-.023.019h0l-.011.01-.005,0a.036.036,0,0,1-.02,0,1.9,1.9,0,0,1-.314-.045c-.023,0-.045-.01-.064-.016l-.006,0a.011.011,0,0,1-.006-.009l0-.023a.014.014,0,0,1,.008-.015l.007,0,.034-.02.036-.022Z" transform="translate(5235.084 -1646.689)" fill="#f5f5f5"/>
      <path id="Path_5519" data-name="Path 5519" d="M802.375,1035.875l-.01-.005a.01.01,0,0,1-.005-.01s0-.008.01-.012l.032-.02a.039.039,0,0,1,.019-.006.03.03,0,0,1,.016,0l0,0c.009.007.027.019.053.035l.064.04.1.058h0a.009.009,0,0,1,.005.009.015.015,0,0,1-.008.01l-.044.027-.01,0a.018.018,0,0,1-.012,0l-.026-.018-.012-.008-.047-.029a.015.015,0,0,0-.009,0l-.01,0-.02.012s-.005,0-.006.006,0,0,0,.006c.048.03.09.055.125.075h0a.012.012,0,0,1,.007.011.016.016,0,0,1-.009.012l-.033.02a.038.038,0,0,1-.019.006.031.031,0,0,1-.016,0l-.018-.012-.045-.029-.027-.017-.033-.021a.014.014,0,0,0-.009,0l-.01,0-.036.022c-.006,0-.008.006-.007.009s.006.008.017.015.05.03.086.049h0s0,0,0,.006a.012.012,0,0,1-.005.006l0,0-.027.013-.016.009-.005,0a.035.035,0,0,1-.014,0,.028.028,0,0,1-.015,0l-.007,0-.038-.02-.031-.018-.026-.015a.1.1,0,0,1-.037-.033.028.028,0,0,1,0-.024.06.06,0,0,1,.024-.023l.066-.041a.01.01,0,0,0,.005-.006.007.007,0,0,0,0-.006l-.091-.054h0a.012.012,0,0,1-.007-.011s0-.008.009-.012l.033-.02a.039.039,0,0,1,.019-.006.03.03,0,0,1,.017,0h0l.087.057a.017.017,0,0,0,.009,0l.01,0,.02-.012s.005,0,.005-.006,0,0,0-.006l-.031-.019-.009,0" transform="translate(5232.186 -1648.3)" fill="#f5f5f5"/>
      <path id="Path_5520" data-name="Path 5520" d="M804.731,1038.594s0-.008,0-.017l0-.007a.143.143,0,0,0,0-.016.063.063,0,0,1,0-.01.012.012,0,0,0,0-.005.012.012,0,0,1,.006-.009.024.024,0,0,1,.019,0,.827.827,0,0,0,.214.017.806.806,0,0,0,.217-.041.042.042,0,0,1,.021,0l.009,0,.005.005.021.031c0,.007,0,.013-.005.017l-.009,0a.986.986,0,0,1-.375.049,1.089,1.089,0,0,1-.122-.013l-.011,0" transform="translate(5230.032 -1650.589)" fill="#f5f5f5"/>
      <path id="Path_5521" data-name="Path 5521" d="M807.188,1039.243a.175.175,0,0,0-.006-.033c0-.015-.008-.026-.01-.031s0-.015.017-.018l.053-.011a.027.027,0,0,1,.02,0,.018.018,0,0,1,.007.01l.005.012.011.031,0,.01,0,.009a.008.008,0,0,1,0,.008.02.02,0,0,1-.011,0l-.016,0-.02,0-.02,0-.015,0a.015.015,0,0,1-.012,0,.011.011,0,0,1,0-.006m-.242.125-.005-.038a.012.012,0,0,1,.005-.011.032.032,0,0,1,.016-.006,1.156,1.156,0,0,0,.188-.042.022.022,0,0,1,.018,0,.011.011,0,0,1,.006.01.08.08,0,0,0,0,.013l0,.012s0,.006,0,.01,0,.012-.014.015a1.447,1.447,0,0,1-.193.047.024.024,0,0,1-.017,0,.014.014,0,0,1-.007-.009m.4-.174a.02.02,0,0,1-.012,0,.009.009,0,0,1,0-.007.078.078,0,0,0,0-.014.307.307,0,0,0-.014-.047c0-.01,0-.016.016-.018l.054-.01a.024.024,0,0,1,.016,0l.007.006a.361.361,0,0,1,.022.068.007.007,0,0,1,0,.007.018.018,0,0,1-.009,0H807.4l-.04.007-.015,0m-.31.2.035-.021a.032.032,0,0,1,.016-.005.026.026,0,0,1,.015,0l.081.051a.026.026,0,0,0,.015,0,.032.032,0,0,0,.016,0l.048-.03c.005,0,.008-.006.008-.01s0-.007-.006-.009l-.056-.035s-.006-.006-.006-.009,0-.007.008-.01l.037-.023a.033.033,0,0,1,.016-.005.025.025,0,0,1,.015,0l.056.035a.027.027,0,0,0,.015,0,.034.034,0,0,0,.016-.005l.034-.021a.015.015,0,0,0,.008-.01.01.01,0,0,0-.006-.009l-.071-.044s-.006-.006-.006-.009a.014.014,0,0,1,.008-.01l.033-.021a.033.033,0,0,1,.016,0,.026.026,0,0,1,.015,0l.075.047a.018.018,0,0,0,.013,0,.007.007,0,0,0,.006-.008.121.121,0,0,1,0-.019s0-.005,0-.008a.048.048,0,0,0,0-.007q0-.014.022-.016l.056,0a.025.025,0,0,1,.013,0,.012.012,0,0,1,.006.007.259.259,0,0,1,0,.076c0,.005,0,.008-.014.008h-.028c-.01,0-.011,0-.005.006l.09.056s.006.006.006.009,0,.007-.008.01l-.033.021a.035.035,0,0,1-.016.005.026.026,0,0,1-.015,0l-.069-.043a.027.027,0,0,0-.015,0,.033.033,0,0,0-.016.005l-.034.021a.015.015,0,0,0-.008.01s0,.007.006.01l.053.033a.01.01,0,0,1,.006.009.015.015,0,0,1-.008.01l-.037.023a.031.031,0,0,1-.016,0,.026.026,0,0,1-.015,0l-.053-.033a.025.025,0,0,0-.015,0,.031.031,0,0,0-.016.005l-.048.03a.015.015,0,0,0-.008.01s0,.007.006.009l.08.05a.01.01,0,0,1,.006.01.015.015,0,0,1-.008.01l-.035.021a.032.032,0,0,1-.016.005.028.028,0,0,1-.015,0l-.258-.16a.01.01,0,0,1-.006-.009.015.015,0,0,1,.008-.01" transform="translate(5228.142 -1651.096)" fill="#f5f5f5"/>
      <path id="Path_5522" data-name="Path 5522" d="M809.927,1041.25l-.031,0h-.015a.017.017,0,0,1-.011,0,.007.007,0,0,1,0-.006.03.03,0,0,0,0-.005v-.007a.084.084,0,0,0-.007-.026c0-.005,0-.008.009-.008a.778.778,0,0,0,.111-.015.029.029,0,0,1,.022,0,.011.011,0,0,1,0,.006l.01.025c0,.008,0,.014-.017.017-.032.007-.056.012-.071.014m.218-.223.019-.012a.033.033,0,0,1,.016-.005.026.026,0,0,1,.015,0l.082.051a.007.007,0,0,0,.01,0l.006-.01a.006.006,0,0,0,0-.008l-.043-.027s-.006-.006-.006-.009a.014.014,0,0,1,.008-.01l.021-.013a.033.033,0,0,1,.016-.005.025.025,0,0,1,.015,0l.109.067a.026.026,0,0,0,.029,0,.026.026,0,0,1,.029,0l.04.025c.009.005.008.012,0,.018s-.011.012,0,.018l.11.068s.006.006.006.009,0,.007-.008.01l-.021.013a.034.034,0,0,1-.016,0,.026.026,0,0,1-.015,0l-.047-.029a.013.013,0,0,0-.012,0l-.015,0c-.006,0-.007,0,0,.006l.083.052a.01.01,0,0,1,.006.009.015.015,0,0,1-.008.01l-.019.012a.033.033,0,0,1-.016.005.026.026,0,0,1-.015,0l-.372-.231s-.006-.006-.006-.009a.015.015,0,0,1,.008-.01m-.165.3a.064.064,0,0,1-.026-.022.018.018,0,0,1,0-.016.047.047,0,0,1,.016-.015l.066-.041a.032.032,0,0,1,.016,0,.024.024,0,0,1,.015,0l.029.018s.006.006.006.01,0,.007-.008.01l-.032.02c-.005,0-.007.006-.006.009a.023.023,0,0,0,.008.007l.021.013c.006,0,.01,0,.012,0a.235.235,0,0,0,.008-.03v-.009c0-.006.006-.009.014-.008s.017,0,.009-.006l-.1-.063s-.006-.006-.006-.009,0-.007.008-.01l.13-.081a.032.032,0,0,1,.016-.005.028.028,0,0,1,.015,0l.24.149s.006.006.006.01a.015.015,0,0,1-.008.01l-.13.081a.032.032,0,0,1-.016.005.026.026,0,0,1-.015,0l-.078-.048c-.007,0-.011,0-.012,0l0,.018c0,.005-.007.008-.015.007l-.05,0c-.005,0-.008,0-.009,0s0,0,0,0l.011.007a.042.042,0,0,0,.023.008.07.07,0,0,0,.024-.007c.009,0,.015,0,.018,0l0,0,0,0,.02.025c0,.006,0,.01-.006.013a.205.205,0,0,1-.068.019.1.1,0,0,1-.058-.017Zm.21-.156.128.079a.015.015,0,0,0,.016,0c.006,0,.006-.007,0-.01l-.128-.079a.014.014,0,0,0-.016,0c-.006,0-.006.007,0,.01m-.057.036.128.079a.015.015,0,0,0,.016,0c.006,0,.006-.007,0-.01l-.128-.079a.015.015,0,0,0-.016,0c-.006,0-.006.007,0,.01m.222-.093.047.029a.019.019,0,0,0,.014,0l.017,0c.005,0,.006,0,0-.005l-.065-.041a.006.006,0,0,0-.009,0l0,.005,0,0a.005.005,0,0,0,0,.008m-.117.337h-.019a.028.028,0,0,1-.015,0,.006.006,0,0,1,0-.008l0-.008,0-.01a.249.249,0,0,0,.012-.048.015.015,0,0,1,.007-.011.033.033,0,0,1,.018,0h.039a.029.029,0,0,1,.013,0s0,.006,0,.012a.293.293,0,0,1-.006.04l0,.018,0,.008a.014.014,0,0,1-.009.008.037.037,0,0,1-.017,0h-.022" transform="translate(5225.651 -1652.706)" fill="#f5f5f5"/>
      <path id="Path_5523" data-name="Path 5523" d="M781.324,1039.561l-.742.461a1.973,1.973,0,0,1-1.774.124l-.7.466.5.312c.029.018.026.048-.007.069l-.063.039a.116.116,0,0,1-.111,0l-1.213-.753c-.029-.018-.025-.048.008-.069l.064-.039a.114.114,0,0,1,.11,0l.5.312.751-.433c-.374-.285-.326-.726.114-1.045.027-.019.055-.038.084-.056l.742-.461Z" transform="translate(5253.546 -1650.577)" fill="#d74348"/>
      <path id="Path_5524" data-name="Path 5524" d="M797.768,1045.2l-.267.166-.14.043-.106-.267-.434.133-.123-.309.126-.029.089.225.434-.133.106.267Z" transform="translate(5236.891 -1656.087)" fill="#f5f5f5"/>
      <path id="Path_5525" data-name="Path 5525" d="M788.495,1041.331l-.459-.129.278-.25-.356-.1c.027-.019.054-.038.084-.057l.235-.146-.169.152.4.111-.279.25.335.094Z" transform="translate(5244.356 -1652.425)" fill="#f5f5f5"/>
      <path id="Path_5526" data-name="Path 5526" d="M777.433,962.99l-.528.3-.69.4-1.452.839-5.37-3.112,1.521-.881.69-.4.459-.264Z" transform="translate(5260.215 -1583.43)" fill="#f5f5ed" fill-rule="evenodd"/>
    </g>
    <g id="Group_2641" data-name="Group 2641" transform="translate(243.483 145.115)">
      <g id="Group_2641-2" data-name="Group 2641" clip-path="url(#clip-path-154)">
        <path id="Path_10256" data-name="Path 10256" d="M67.114,85.341l7.059.407L71.636,75.116c-.313-1.035.385-1.738,1.448-1.873.844-.107,1.388.087,1.615.411,1.646,2.354,2.137,6.842,2.42,10.115.086.993.147,2.342.14,3.477a1.749,1.749,0,0,1-1.688,1.746,22.309,22.309,0,0,1-8.21-1.723Z" transform="translate(-54.907 -59.897)" fill="#2a424b"/>
        <path id="Path_10257" data-name="Path 10257" d="M64.249,61.58s-2.619-1-4.323.6l-.282,1.2a5.079,5.079,0,0,0,5.084-.139c-.11-.443-.479-1.658-.479-1.658" transform="translate(-48.795 -50.129)" fill="#91b1b3"/>
        <path id="Path_10258" data-name="Path 10258" d="M50.051,14.222c.334-.783,1.332-1.836,3.9-1.627s3.111,2.106,2.976,4.348a4.166,4.166,0,0,1-1.42,3.019.775.775,0,0,0-.249.785c.193.788.535,2.2.535,2.2-.006.462-.855.9-1.9.985s-1.88-.226-1.874-.688l.035-2.536a2.2,2.2,0,0,1-2.386-2.021,8.68,8.68,0,0,1,.378-4.465" transform="translate(-40.518 -10.282)" fill="#f9c3c0"/>
        <path id="Path_10259" data-name="Path 10259" d="M57.977,360.643a3.838,3.838,0,0,1,.23,2.211s-.164.99-2.081.674a3.909,3.909,0,0,1-1.225-.375c-.294-.164-.437-.358-.795-.414-.525-.083-1.061-.077-1.584-.162a4.3,4.3,0,0,1-1.413-.483,2.443,2.443,0,0,1-.363-.247c-1.212-1.011-1.391-1.474-1.013-2.023.242-.35.8-.573,2.923-.233a14.142,14.142,0,0,0,2.031.435,1.7,1.7,0,0,0,.794-.139A2.067,2.067,0,0,1,56.7,359.8a1.648,1.648,0,0,1,1.28.844" transform="translate(-40.543 -294.049)" fill="#2a424b"/>
        <path id="Path_10260" data-name="Path 10260" d="M82.8,362.371c.088-.448-.493-.939-1.3-1.1s-1.529.076-1.617.524.493.939,1.3,1.1,1.529-.076,1.617-.524" transform="translate(-65.347 -295.524)" fill="#2a424b"/>
        <path id="Path_10261" data-name="Path 10261" d="M17.929,383.263a3.838,3.838,0,0,1,.324,2.2s-.121,1-2.05.763a3.915,3.915,0,0,1-1.24-.322c-.3-.151-.452-.338-.812-.379-.529-.06-1.063-.031-1.589-.094a4.29,4.29,0,0,1-1.432-.422,2.446,2.446,0,0,1-.373-.231c-1.254-.958-1.454-1.413-1.1-1.977.226-.361.772-.607,2.91-.359a14.128,14.128,0,0,0,2.048.348,1.7,1.7,0,0,0,.788-.173,2.067,2.067,0,0,1,1.209-.14,1.648,1.648,0,0,1,1.316.788" transform="translate(-7.774 -312.799)" fill="#2a424b"/>
        <path id="Path_10262" data-name="Path 10262" d="M42.759,383.985c.069-.451-.533-.917-1.344-1.04s-1.524.142-1.593.593.533.917,1.344,1.04,1.524-.142,1.593-.593" transform="translate(-32.575 -313.269)" fill="#2a424b"/>
        <path id="Path_10263" data-name="Path 10263" d="M28.816,186.572l-.244,7.049-.28,11.358.586,17.267s1.521.987,5.069.052c0-1.706-.2-15.342-.2-15.342l1.619-13.56.426,12.925.428,11.825a6.087,6.087,0,0,0,4.9.122c0-.722-.158-11.762-.158-11.762l.44-16.822-.344-3.506a12.341,12.341,0,0,1-5.219,1.443c-4.917.331-7.021-1.048-7.021-1.048" transform="translate(-23.146 -152.314)" fill="#475c64"/>
        <path id="Path_10264" data-name="Path 10264" d="M42.33,90.558a29.646,29.646,0,0,1-5.717.948c-4.917.331-7.373-.91-7.373-.91l.226-2.037s.5-5.4.637-7.971c.1-1.968.3-7.576,1.178-9.232,1.314-2.48,6.557-2.964,9.981-2.506,3.836.513,3.176,3.507,2.939,4.92-1.468,8.741-1.91,13.243-1.91,13.243Z" transform="translate(-23.922 -56.2)" fill="#2a424b"/>
        <path id="Path_10265" data-name="Path 10265" d="M64.249,62.958s-1.106,1.524-4.323.6l-.282,1.2s2.855,1.57,5.022-.374c-.112-.543-.416-1.423-.416-1.423" transform="translate(-48.795 -51.507)" fill="#ebf1f1"/>
        <path id="Path_10266" data-name="Path 10266" d="M52.589,12.19c-.085-.418-.172-.836-.254-1.255-.15-.764-.65-.788-1.129-1.362a1.379,1.379,0,0,1-.322-1.264,1.34,1.34,0,0,1,.275-.463,2.718,2.718,0,0,1,1.5-.794c.552-.122,1.057-.328,1.608-.439a2.941,2.941,0,0,1,3.074.917c.151.206.717.354.938.579a3,3,0,0,1,.679,1.146,12.832,12.832,0,0,1,.256,3.279c-.085-.078-.233-.009-.282.1a.853.853,0,0,0-.037.342,2.2,2.2,0,0,1-.707,1.314.52.52,0,0,0-.53-.027c-.452.21-.654.8-1.2.864a3.912,3.912,0,0,1-1-.115.308.308,0,0,0-.2.014c-.058.033-.085.125-.032.166a2.229,2.229,0,0,1-1.218-.878,1.317,1.317,0,0,1-.177-1.32c.122-.6.079-1.289-.424-1.5-.479-.2-.69.291-.822.706" transform="translate(-41.588 -5.336)" fill="#7b502c"/>
        <path id="Path_10267" data-name="Path 10267" d="M45.094,34.558l-1.775-1.7a.224.224,0,0,1-.007-.316l3.374-3.529A.224.224,0,0,1,47,29.008l1.776,1.7a.224.224,0,0,1,.007.316L45.41,34.551a.224.224,0,0,1-.316.007" transform="translate(-35.383 -23.681)" fill="#2a424b"/>
        <path id="Path_10268" data-name="Path 10268" d="M54.218,27.552a.259.259,0,0,1-.183-.221,7.286,7.286,0,0,1,.214-2.909.259.259,0,0,1,.489.169,6.7,6.7,0,0,0-.215,2.372c1.2-.375,2.22-.777,2.231-.781a.259.259,0,1,1,.191.481c-.012,0-1.229.485-2.578.889a.261.261,0,0,1-.149,0" transform="translate(-44.167 -19.837)" fill="#2a424b"/>
        <path id="Path_10269" data-name="Path 10269" d="M27.789,43.255l1.507-2.24.192-1.2a7.472,7.472,0,0,1,.759-1.691c.319-.486.551-.852.633-.968.123-.173.292-.344.416-.249.093.071.009.322.009.322s.316-.64.372-.726.183-.235.309-.164.1.321.1.321c.131-.263.272-.312.384-.264.141.061.1.445.1.445s.284-.076.181.49a11.284,11.284,0,0,1-.829,1.878,1.678,1.678,0,0,0-.04.834.37.37,0,0,0,.356.224,4.554,4.554,0,0,0,.464-.185c.236-.064,1.061-.185,1.107.21a.1.1,0,0,1-.009.064.127.127,0,0,1-.057.045,3.267,3.267,0,0,1-.469.169c-.33.1-.655.221-.983.329l-.024.008a1.374,1.374,0,0,0-.661.453,2.672,2.672,0,0,1-1.159.722l-.876,2.1Z" transform="translate(-22.735 -29.712)" fill="#617f88"/>
        <path id="Path_10270" data-name="Path 10270" d="M.935,83.294c-1.015-.58-1.44-2.508-.046-4.97S3.908,74.7,4.7,73.493c.836,0,2.137.186,2.416,1.161-.372.929-4.227,9.755-6.178,8.64" transform="translate(0 -60.126)" fill="#2a424b"/>
        <path id="Path_10271" data-name="Path 10271" d="M3.774,83.641a3.5,3.5,0,0,0,3.219-.891,32.055,32.055,0,0,0,4.393-4.084,5.692,5.692,0,0,0,1.776-2.959c.211-1.262-.462-2.013-1.209-1.731a7.232,7.232,0,0,0-3.819,2.181c-1.415,1.44-2.591,2.056-3.647,3.708-.381.6-1.571,3.24-.713,3.776" transform="translate(-2.838 -60.473)" fill="#2a424b"/>
        <path id="Path_10272" data-name="Path 10272" d="M55.054,8.967c-.656,1.2-3.111,1.126-5.484-.169s-3.765-3.319-3.109-4.521,3.111-1.126,5.484.169,3.764,3.319,3.109,4.521" transform="translate(-37.878 -2.8)" fill="#d2dadc"/>
        <path id="Path_10273" data-name="Path 10273" d="M58.8,6.784c1.136-2.081.133-4.818-2.24-6.113S51.344.013,50.208,2.094l-.178.327c-.656,1.2.736,3.226,3.109,4.521s4.828,1.37,5.484.169l.178-.326" transform="translate(-40.798 0)" fill="#b0bec3"/>
      </g>
    </g>
    <g id="Group_3201" data-name="Group 3201" transform="translate(280.098 103.862)">
      <path id="Path_12771" data-name="Path 12771" d="M15.3,84.6c-.508-.036-.647-.968-.58-2.4l1.879.265c.4,1.07-.308,1.663-1.3,2.134" transform="translate(-11.086 -61.987)" fill="#d4eeff"/>
      <path id="Path_12772" data-name="Path 12772" d="M.375,69.856l.731,1.279.523.922a4.174,4.174,0,0,0,2.217-.241l1.113.083c.016,0,.2.016.2.016l1.461.042-.357-2.026-1.785-.756a4.781,4.781,0,0,0-.457-1.163A2.547,2.547,0,0,1,3.5,66.426c0-.953.077-1.3-.133-1.3-1.145,0-.671,2.788-.671,2.788-.855-.067-2.06-.191-2.169.254Z" transform="translate(-0.283 -49.111)" fill="#f4c6b4"/>
      <g id="Group_3196" data-name="Group 3196" transform="translate(0.673 19.302)" opacity="0.4" style="mix-blend-mode: multiply;isolation: isolate">
        <g id="Group_2256" data-name="Group 2256" transform="translate(0)">
          <g id="Group_2255" data-name="Group 2255" clip-path="url(#clip-path-155)">
            <path id="Path_8959" data-name="Path 8959" d="M2.738,78.476l.15,2.723.523.922a4.177,4.177,0,0,0,2.217-.241l1.113.083a.2.2,0,0,0-.058-.025,2.407,2.407,0,0,1-1.37-2.151c-.023-1.882-1.836-1.069-2.574-1.312" transform="translate(-2.738 -78.476)" fill="#ffb294"/>
          </g>
        </g>
      </g>
      <path id="Path_12773" data-name="Path 12773" d="M.241,77.5A3.18,3.18,0,0,0,2,78.027c1.021.011.9.836.511.921.336.117.612.207.562.558s-.371.461-.741.439c.389.125.365.9-.55.81,0,0,.483.2.137.568-.143.151-.561.179-1.152-.059l-.332-.111c-.853-.905-.2-3.654-.2-3.654" transform="translate(0 -58.437)" fill="#f4c6b4"/>
      <path id="Path_12774" data-name="Path 12774" d="M16.473,39.981l8.711-1.047a55.867,55.867,0,0,1,2.723-8.77c1.521-3.519,3.68-4.408,6.321-3.31l-2.093,8.571c-1.285,2.714-2.651,6.158-4.792,7.786-1.3.806-10.182-.173-11.083-.557a1.921,1.921,0,0,0,.213-2.673" transform="translate(-12.261 -19.915)" fill="#fff"/>
      <path id="Path_12775" data-name="Path 12775" d="M106.005,260.792a4.188,4.188,0,0,1,.3,2.469,13.194,13.194,0,0,0-.56,1.35c-.233.814-.2,2.173-1.408,2.986-1.443,1.14-4.232,1.192-5.11-.023a6.384,6.384,0,0,1,1.124-2.96l1.416-2.633-.091-2.467,4.068-.893Z" transform="translate(-74.82 -195.012)" fill="#4e4e4e"/>
      <path id="Path_12776" data-name="Path 12776" d="M59.639,234.335a5.454,5.454,0,0,1,.243,3.033c-.385,1.343-1.663,1.216-2.757,1.367-2.112.292-3.188,1.858-5.991,1.8-1.666-.032-2.771-.408-3.1-1.47a1.8,1.8,0,0,1,.849-1.467c3.859-1.649,3.857-1.65,3.948-1.709a19.847,19.847,0,0,0,1.868-1.416c.035-.131.712-3.049.712-3.049l4.114.072Z" transform="translate(-36.216 -174.51)" fill="#4e4e4e"/>
      <path id="Path_12777" data-name="Path 12777" d="M72.507,112.188l-2.961,16.234c.446,4.945,2.155,9.822,1.7,14.6-.361,1.981-4.454,1.683-5.237.225.266-3.714-1.912-9.218-2.731-15.31-.18-6.026-.108-12.228,1.121-17.009Z" transform="translate(-47.658 -83.645)" fill="#466677"/>
      <path id="Path_12778" data-name="Path 12778" d="M65.459,110.284a15.121,15.121,0,0,0,.5,1.628c.018.053.04.1.057.144a5.487,5.487,0,0,0,2.658,3.1c.285.154.6.3.937.445a13.424,13.424,0,0,0,6.295.777l.083-.006q.438-.034.857-.085c.674-.081,1.314-.178,1.915-.288.069-.239.125-.468.17-.69a12.652,12.652,0,0,0-.075-5.153c-.03-.2-.059-.405-.089-.62l.03-.136c-4.4,1.583-10.411.324-13.166-3.628a36.464,36.464,0,0,1-.174,4.513" transform="translate(-49.359 -79.756)" fill="#618598"/>
      <path id="Path_12779" data-name="Path 12779" d="M67.581,127.126c1.118,4.756,4.211,4.906,4.256,6.076a114.6,114.6,0,0,0,1.381,12.142c1.9,5.847,3.628,11.447,4.033,15.144.7.881,2.8,1.207,4.082.7a2.091,2.091,0,0,0,.486-.261,1.273,1.273,0,0,0,.543-1.053,54.833,54.833,0,0,0-2.217-14.241l.354-15.252c0-.01.051-2.148.051-2.148l-4.414-.858-8.291-1.614c-.046.624-.449.569-.263,1.369" transform="translate(-50.923 -94.827)" fill="#618598"/>
      <g id="Group_3197" data-name="Group 3197" transform="translate(24.854 30.397)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
        <g id="Group_2259" data-name="Group 2259" transform="translate(0)">
          <g id="Group_2258" data-name="Group 2258" clip-path="url(#clip-path-156)">
            <path id="Path_8967" data-name="Path 8967" d="M101.054,124.988a2.9,2.9,0,0,1,.358.751c.241,1.313-.945,4.124.314,5.442,2.917,3.054,1.952,7.542,1.468,12.685,2.9,4.1,3.816,9.39,3.416,15.687a2.079,2.079,0,0,0,.486-.261,1.273,1.273,0,0,0,.543-1.053A54.842,54.842,0,0,0,105.421,144l.354-15.252a12.682,12.682,0,0,0-.077-5.153Z" transform="translate(-101.054 -123.593)" fill="#618598"/>
          </g>
        </g>
      </g>
      <path id="Path_12780" data-name="Path 12780" d="M65.134,38.49s.256,7.04.253,12.036c.217,4.067,4.768,6.035,8.583,5.779a5.909,5.909,0,0,0,4.585-2.151l.728-3.168.181-.788L80,47.877l.084-.794.063-.58.033-.3.812-7.446q-.505-.587-1.047-1.149c-.108-.114-.22-.228-.331-.34-.274-.283-.557-.562-.845-.836-.108-.105-.22-.208-.331-.31a35.655,35.655,0,0,0-4.594-3.616H67.721c-1.4,1.32-2.175,3.426-2.587,5.983" transform="translate(-49.114 -24.512)" fill="#618598"/>
      <path id="Path_12781" data-name="Path 12781" d="M71.4,38.77c1.342,1.709,3.932,2.864,7.166,3.733.415-3.487,2.036-6.245,4.6-6.381a35.694,35.694,0,0,0-4.594-3.616H73.709A11.412,11.412,0,0,0,71.4,38.77" transform="translate(-53.836 -24.512)" fill="#fff"/>
      <path id="Path_12782" data-name="Path 12782" d="M105.386,64.752a7.187,7.187,0,0,0,4.269.048l.535-2.322.084-.794.063-.581.033-.3.812-7.446q-.505-.587-1.047-1.149c-.108-.114-.22-.229-.331-.34a4.089,4.089,0,0,0-3.637,3.15,23.547,23.547,0,0,0-.782,9.732" transform="translate(-79.306 -39.112)" fill="#fff"/>
      <g id="Group_3198" data-name="Group 3198" transform="translate(24.849 19.325)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
        <g id="Group_2262" data-name="Group 2262" transform="translate(0)">
          <g id="Group_2261" data-name="Group 2261" clip-path="url(#clip-path-157)">
            <path id="Path_8971" data-name="Path 8971" d="M101.037,91.038a5.9,5.9,0,0,0,4.59-2.148l.729-3.167.715-3.11.085-.8-.263-1.454-3.357-1.792c.391,5.211-.172,9.6-2.5,12.466" transform="translate(-101.037 -78.572)" fill="#618598"/>
          </g>
        </g>
      </g>
      <path id="Path_12783" data-name="Path 12783" d="M107.583,116.741l3.846-5.813a4.843,4.843,0,0,1,3.015,3.192c-1.876,1.627-3.627,3-5.406,4.606-1.251-.733-1.569-1.464-1.454-1.985" transform="translate(-81.107 -83.645)" fill="#f4c6b4"/>
      <path id="Path_12784" data-name="Path 12784" d="M104.731,130.951a15.625,15.625,0,0,0,2.422,3.809l-.759.962a40.744,40.744,0,0,1-2.607-4.075Z" transform="translate(-78.261 -98.744)" fill="#618598"/>
      <path id="Path_12785" data-name="Path 12785" d="M85.838,33.679c2.5.738,4.507-2.468,4.221-4.149-.234-1.73-.369-2.671-.369-2.671l-4.838,1.193s-.052.454-.081,1.095c-.108,2.435.442,4.348,1.067,4.532" transform="translate(-63.912 -20.253)" fill="#f4c6b4"/>
      <g id="Group_3199" data-name="Group 3199" transform="translate(20.024 8.447)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
        <g id="Group_2265" data-name="Group 2265" transform="translate(0)">
          <g id="Group_2264" data-name="Group 2264" clip-path="url(#clip-path-158)">
            <path id="Path_8975" data-name="Path 8975" d="M82.435,40.966c2.269.281,4.039-6.623,4.039-6.623l-4.858.517c-.123,2.78-.666,5.922.819,6.106" transform="translate(-81.417 -34.343)" fill="#ffb294"/>
          </g>
        </g>
      </g>
      <path id="Path_12786" data-name="Path 12786" d="M83.523,8.924a7.783,7.783,0,0,1-1.462,3,5.662,5.662,0,0,1-3,1.386,1.507,1.507,0,0,1-1.386-.454c-.37-.433-.6-4.418-.6-4.418a11.928,11.928,0,0,1,.22-2.861c.269-1.262,1.183-4.06,4.862-3.556a3.546,3.546,0,0,1,3.1,3.1,8.6,8.6,0,0,1-.811,3.453Z" transform="translate(-58.123 -1.477)" fill="#f4c6b4"/>
      <path id="Path_12787" data-name="Path 12787" d="M84.2,8.827l-1.747.932-.132-1.045c.007-.5-.309-.67-.807-.633a3.875,3.875,0,0,1-3.907-3.1c-.513.2-.6.767-.661.88-1.223-2.463,2.129-3.974,4.382-3.9,2.736.092,3.843,1.928,3.847,3.549A8.723,8.723,0,0,1,84.2,8.827" transform="translate(-57.821 -1.475)" fill="#4e4e4e"/>
      <path id="Path_12788" data-name="Path 12788" d="M108.579,76.426l5.173-7.747L109.223,63l4.528-5.078s5.19,8.788,5.189,10.758c0,1.787-1.288,4.26-9.018,9.97a9.011,9.011,0,0,1-1.344-2.224" transform="translate(-81.874 -43.675)" fill="#fff"/>
      <path id="Path_12789" data-name="Path 12789" d="M103.049,23.915a.6.6,0,0,1,.738.112.579.579,0,0,1,.091.433,1.5,1.5,0,0,1-.153.426,7.465,7.465,0,0,1-.385.689.84.84,0,0,1-.463.42c-.213.051-.47.2-.585.011a1.792,1.792,0,0,1,.757-2.093" transform="translate(-77.065 -17.977)" fill="#f4c6b4"/>
      <g id="Group_3200" data-name="Group 3200" transform="translate(18.903 5.659)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
        <g id="Group_2268" data-name="Group 2268" transform="translate(0)">
          <g id="Group_2267" data-name="Group 2267" clip-path="url(#clip-path-159)">
            <path id="Path_8980" data-name="Path 8980" d="M78.279,27.928c2.3,0,4.707-4.464,4.707-4.464l-6.051-.455c-.146,3.278-.249,4.919,1.344,4.919" transform="translate(-76.859 -23.009)" fill="#ffb294"/>
          </g>
        </g>
      </g>
      <path id="Path_12790" data-name="Path 12790" d="M80.762,6.961a5.361,5.361,0,0,0,3.347-1.232S85.357,1.776,81.967.485c-5.541-2.11-6.4,3.344-6.4,3.344.389,1.712,2.519,2.557,5.191,3.131" transform="translate(-56.985 0)" fill="#618598"/>
      <path id="Path_12791" data-name="Path 12791" d="M69.3,17.462a10.413,10.413,0,0,0,3.231,1.178c-.033.02-.062.041-.1.06-1.85,1.069-4.24,2.182-6.665.782-2.656-1.533-.5-2.78,1.353-3.848.039-.023.081-.043.121-.064A5.345,5.345,0,0,0,69.3,17.462" transform="translate(-48.661 -11.739)" fill="#466677"/>
    </g>
  </g>
  </a>
</svg>

                     </div>
                  </div>
                  <div class="form_email email_1" id="email_1">
                     <div class="c-firework"></div>
                     <p class="info_email">
                        <a href="<?php echo home_url(); ?>/form/" aria-label="お問い合わせ" ><span class="ic">お問い合わせ</span></a>
                     </p>
                     <svg id="email_1" class="email_f email" data-name="Group 3184" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="126.967" viewBox="0 0 160 126.967">
                        <defs>
                           <clipPath id="clip-path">
                              <path id="Path_2039" data-name="Path 2039" d="M30.648,112.288c0,1.152.8,2.341,2.39,3.258a11.451,11.451,0,0,0,5.572,1.374h.049a9.739,9.739,0,0,0,4.774-1.126,3.318,3.318,0,0,0,1.928-2.76l.144-50.787a3.316,3.316,0,0,1-1.928,2.76c-2.742,1.593-7.4,1.484-10.4-.247-1.589-.917-2.394-2.106-2.391-3.258Z" transform="translate(-30.648 -61.502)" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-2">
                              <rect id="Rectangle_158" data-name="Rectangle 158" width="53.235" height="89.24" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-3">
                              <path id="Path_2060" data-name="Path 2060" d="M1.607,71.725l30.22,17.448c.045-15.713.091-32.442.136-48.156L1.743,23.57C1.7,39.284,1.652,56.012,1.607,71.725" transform="translate(-1.607 -23.57)" fill="#e34640"/>
                           </clipPath>
                        </defs>
                        <a xmlns:xlink="<?php echo home_url(); ?>/form/" class="email_click email" data-id="1">
                           <path id="Path_2414" data-name="Path 2414" d="M80,0,0,49.5,80,99l80-49.5Z" transform="translate(0 27.967)" fill="#d7cec1"/>
                           <g id="Group_623" data-name="Group 623" transform="translate(53.301)">
                              <g id="Group_537" data-name="Group 537" transform="translate(16.855 33.823)">
                                 <g id="Group_536" data-name="Group 536" transform="translate(0)">
                                    <path id="Path_2021" data-name="Path 2021" d="M57.545,62.858,57.4,113.644c0,.02,0,.042,0,.063l.144-50.786c0-.021,0-.042,0-.063" transform="translate(-42.688 -62.112)" fill="#1a1a1a"/>
                                    <path id="Path_2022" data-name="Path 2022" d="M57.506,62.973l-.144,50.786a2.423,2.423,0,0,1-.047.411l.144-50.786a2.423,2.423,0,0,0,.047-.412" transform="translate(-42.65 -62.164)" fill="#1a1a1a"/>
                                    <path id="Path_2023" data-name="Path 2023" d="M57.367,63.722l-.144,50.786a2.563,2.563,0,0,1-.113.394l.144-50.786a2.522,2.522,0,0,0,.113-.394" transform="translate(-42.557 -62.501)" fill="#1a1a1a"/>
                                    <path id="Path_2024" data-name="Path 2024" d="M57.1,64.439l-.144,50.786a2.813,2.813,0,0,1-.183.391l.144-50.786a2.753,2.753,0,0,0,.183-.39" transform="translate(-42.408 -62.824)" fill="#1a1a1a"/>
                                    <path id="Path_2025" data-name="Path 2025" d="M56.7,65.149l-.144,50.786a3.081,3.081,0,0,1-.268.4l.144-50.786a3.185,3.185,0,0,0,.268-.4" transform="translate(-42.188 -63.143)" fill="#1a1a1a"/>
                                    <path id="Path_2026" data-name="Path 2026" d="M56.094,65.874,55.95,116.66a3.791,3.791,0,0,1-.414.445l.145-50.786a3.883,3.883,0,0,0,.414-.446" transform="translate(-41.849 -63.47)" fill="#1a1a1a"/>
                                    <path id="Path_2027" data-name="Path 2027" d="M55.007,66.684l-.144,50.786a5.055,5.055,0,0,1-.824.609l.144-50.786a4.974,4.974,0,0,0,.824-.609" transform="translate(-41.175 -63.834)" fill="#1a1a1a"/>
                                    <path id="Path_2028" data-name="Path 2028" d="M52.939,67.792,52.8,118.578l-.078.046a7.4,7.4,0,0,1-1.441.631l.144-50.786a7.371,7.371,0,0,0,1.441-.631l.078-.046" transform="translate(-39.932 -64.333)" fill="#1a1a1a"/>
                                    <path id="Path_2029" data-name="Path 2029" d="M50.4,69.024l-.144,50.786a9.772,9.772,0,0,1-1.252.311l.144-50.786a9.614,9.614,0,0,0,1.252-.311" transform="translate(-38.908 -64.887)" fill="#1a1a1a"/>
                                    <path id="Path_2030" data-name="Path 2030" d="M48.417,69.59l-.144,50.786q-.436.078-.889.123l.144-50.785c.3-.03.6-.071.89-.124" transform="translate(-38.18 -65.142)" fill="#1a1a1a"/>
                                    <path id="Path_2031" data-name="Path 2031" d="M46.883,69.816,46.739,120.6c-.26.026-.522.044-.787.052L46.1,69.868c.265-.009.528-.026.788-.052" transform="translate(-37.536 -65.244)" fill="#1a1a1a"/>
                                    <path id="Path_2032" data-name="Path 2032" d="M45.482,69.911,45.338,120.7q-.373.012-.749,0l.144-50.786c.25.007.5.006.749,0" transform="translate(-36.922 -65.287)" fill="#1a1a1a"/>
                                    <path id="Path_2033" data-name="Path 2033" d="M44.13,69.885l-.144,50.786q-.368-.008-.736-.04l.144-50.785q.368.03.736.039" transform="translate(-36.32 -65.257)" fill="#1a1a1a"/>
                                    <path id="Path_2034" data-name="Path 2034" d="M42.784,69.777l-.144,50.786q-.374-.031-.745-.083l.144-50.786c.247.035.5.062.745.083" transform="translate(-35.71 -65.189)" fill="#1a1a1a"/>
                                    <path id="Path_2035" data-name="Path 2035" d="M41.407,69.584l-.144,50.786c-.26-.038-.517-.082-.773-.134l.144-50.787q.383.08.773.135" transform="translate(-35.077 -65.079)" fill="#1a1a1a"/>
                                    <path id="Path_2036" data-name="Path 2036" d="M39.943,69.28,39.8,120.067c-.285-.059-.567-.129-.844-.207L39.1,69.073c.276.079.558.148.844.207" transform="translate(-34.387 -64.909)" fill="#1a1a1a"/>
                                    <path id="Path_2037" data-name="Path 2037" d="M38.292,68.8l-.144,50.786a10.383,10.383,0,0,1-.986-.334l.144-50.786c.318.126.648.237.986.334" transform="translate(-33.58 -64.636)" fill="#1a1a1a"/>
                                    <path id="Path_2038" data-name="Path 2038" d="M34.374,65.332l-.144,50.786a8.924,8.924,0,0,1-1.192-.571c-1.589-.917-2.393-2.106-2.39-3.258L30.792,61.5c0,1.152.8,2.341,2.391,3.258a9,9,0,0,0,1.192.572" transform="translate(-30.648 -61.502)" fill="#1a1a1a"/>
                                 </g>
                              </g>
                              <g id="Group_539" data-name="Group 539">
                                 <g id="Group_538" data-name="Group 538">
                                    <path id="Path_2040" data-name="Path 2040" d="M43.231,55.807c3,1.731,3.207,4.425.465,6.019s-7.4,1.484-10.4-.247-3.2-4.428-.461-6.021,7.393-1.482,10.392.25" transform="translate(-13.911 -24.497)" fill="#1a1a1a"/>
                                    <path id="Path_2041" data-name="Path 2041" d="M31.912,128.7,1.532,111.157l.041-.024,30.22,17.448a.318.318,0,0,0,.12.115" transform="translate(-0.689 -50.016)" fill="#e34640"/>
                                    <path id="Path_2042" data-name="Path 2042" d="M1.533,71.615q.027-9.647.055-19.293L1.6,47.444q.034-12.086.068-24.171a.322.322,0,0,0,.04.163L1.574,71.591l-.041.024" transform="translate(-0.69 -10.474)" fill="#e34640"/>
                                    <path id="Union_27" data-name="Union 27" d="M.04,12.962c-.487-.842,3.488-4.065,8.876-7.2l2.439-1.417,11.708,6.759L11.357,4.348C16.447,1.389,20.979-.43,21.876.088l6,3.463L33.99,7.082l3.076,1.776,3.076,1.777,3.067,1.77c.53,0,1.069.617,1.527.881q3.76,2.171,7.52,4.341s-3.822,2.231-8.913,5.189h0L40.9,24.233h0c-5.389,3.132-10.155,5.9-10.644,6.175Z" transform="translate(0.98 0.001)" fill="#f45d57"/>
                                    <path id="Union_26" data-name="Union 26" d="M0,60.936.137,12.781C.627,12.5,5.392,9.737,10.78,6.606h0l2.439-1.418C18.306,2.231,22.131,0,22.131,0q-.012,4.79-.026,9.579l-.015,4.845c0,1.461-.01,3.407-.014,4.867q-.02,7.313-.041,14.625l-.015,4.844q-.012,4.792-.026,9.581c0,1.039-3.831,4.077-8.917,7.033L10.64,56.791h0C6.129,59.412,2.058,61.139.564,61.139.272,61.14.08,61.074,0,60.936Z" transform="translate(31.104 17.628)" fill="#d6322c"/>
                                    <path id="Path_2047" data-name="Path 2047" d="M31.963,41.017c-.045,15.714-.092,32.443-.136,48.156L1.607,71.725c.045-15.713.092-32.442.136-48.155l30.22,17.447" transform="translate(-0.723 -10.608)" fill="#e34640"/>
                                 </g>
                              </g>
                              <g id="Group_541" data-name="Group 541" transform="translate(0.884 12.962)">
                                 <g id="Group_540" data-name="Group 540">
                                    <path id="Path_2048" data-name="Path 2048" d="M11.672,63.455l0-1.307,8.719,5.034,0,1.307L16.6,66.3l-.019,6.6-1.13-.652.019-6.6Zm.008-2.761,0-1.307L20.4,64.422l0,1.307L11.68,60.695M1.761,48.44l.051-18.119L15.29,38.1,15.238,56.22,1.761,48.44m14.328,8.271.052-18.118,13.476,7.781-.051,18.118L16.089,56.711M5.013,31.464l.009-3.392L12.1,32.156l-.01,3.392L5.013,31.464m14.328,8.272.009-3.391,7.073,4.083-.01,3.392-7.072-4.083m12.783-.467L.142,20.805,0,70.991,31.982,89.456l.142-50.187" transform="translate(-0.884 -22.326)" fill="#e34640"/>
                                    <path id="Path_2049" data-name="Path 2049" d="M4.759,44.252l.009-2.971,10.437,6.026L15.2,50.278ZM16.731,45.89,3.254,38.109,3.2,56.227l13.476,7.781.052-18.119" transform="translate(-2.325 -30.113)" fill="#dbdcdc"/>
                                    <path id="Path_2050" data-name="Path 2050" d="M30.812,59.293l.009-2.971L41.25,62.343l-.008,2.971Zm11.972,1.638L29.307,53.15l-.051,18.118,13.477,7.781.051-18.118" transform="translate(-14.051 -36.883)" fill="#dbdcdc"/>
                                    <path id="Path_2051" data-name="Path 2051" d="M16.2,38.1,9.125,34.019l-.01,3.391,7.072,4.083Z" transform="translate(-4.986 -28.273)" fill="#fff"/>
                                    <path id="Path_2052" data-name="Path 2052" d="M42.251,53.145l-7.072-4.083-.01,3.392,7.072,4.083Z" transform="translate(-16.711 -35.043)" fill="#fff"/>
                                    <path id="Path_2053" data-name="Path 2053" d="M29.96,96l-8.719-5.034,0,1.307L29.956,97.3Z" transform="translate(-10.442 -53.9)" fill="#fff"/>
                                    <path id="Path_2054" data-name="Path 2054" d="M29.946,101.016l-8.719-5.034,0,1.307,3.795,2.191,1.13.652,3.795,2.191Z" transform="translate(-10.435 -56.159)" fill="#fff"/>
                                    <path id="Path_2055" data-name="Path 2055" d="M29.237,102.994l-1.13-.652-.019,6.6,1.13.652Z" transform="translate(-13.525 -59.022)" fill="#fff"/>
                                    <path id="Path_2056" data-name="Path 2056" d="M42.482,65.465l-9.9-5.714-.007,2.368,9.9,5.714Z" transform="translate(-15.546 -39.853)" fill="#b4b4b5"/>
                                    <path id="Path_2057" data-name="Path 2057" d="M32.356,61.744l.007-2.368,9.9,5.714-.007,2.368Zm10.167,3.2L32.094,58.919l-.009,2.971,10.43,6.021.008-2.971" transform="translate(-15.324 -39.479)" fill="#888"/>
                                    <path id="Path_2058" data-name="Path 2058" d="M16.429,50.423l-9.9-5.714-.007,2.368,9.9,5.714Z" transform="translate(-3.821 -33.084)" fill="#b4b4b5"/>
                                    <path id="Path_2059" data-name="Path 2059" d="M6.3,46.7l.007-2.368,9.9,5.714L16.2,52.416Zm10.175,3.2L6.04,43.877l-.008,2.971,10.437,6.026.008-2.971" transform="translate(-3.598 -32.709)" fill="#888"/>
                                 </g>
                              </g>
                           </g>
                        </a>
                     </svg>
                     <svg id="email_1_h" class="email_f email_hover" data-name="Component 1 – 12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="126.968" viewBox="0 0 160 126.968">
                        <defs>
                           <clipPath id="clip-path">
                              <path id="Path_2039" data-name="Path 2039" d="M30.648,112.288c0,1.152.8,2.341,2.39,3.258a11.451,11.451,0,0,0,5.572,1.374h.049a9.739,9.739,0,0,0,4.774-1.126,3.318,3.318,0,0,0,1.928-2.76l.144-50.787a3.316,3.316,0,0,1-1.928,2.76c-2.742,1.593-7.4,1.484-10.4-.247-1.589-.917-2.394-2.106-2.391-3.258Z" transform="translate(-30.648 -61.502)" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-2">
                              <rect id="Rectangle_158" data-name="Rectangle 158" width="53.235" height="89.24" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-3">
                              <path id="Path_2060" data-name="Path 2060" d="M1.607,71.725l30.22,17.448c.045-15.713.091-32.442.136-48.156L1.743,23.57C1.7,39.284,1.652,56.012,1.607,71.725" transform="translate(-1.607 -23.57)" fill="#e34640"/>
                           </clipPath>
                        </defs>
                        <a xmlns:xlink="<?php echo home_url(); ?>/form/" class="email_click email_hover" data-id="1">
                           <path id="Path_2414" data-name="Path 2414" d="M80,0,0,49.5,80,99l80-49.5Z" transform="translate(0 27.967)" fill="#d7cec1"/>
                           <g id="Group_831" data-name="Group 831" transform="translate(53.3)">
                              <g id="Group_537" data-name="Group 537" transform="translate(16.855 33.823)">
                                 <g id="Group_536" data-name="Group 536" transform="translate(0)">
                                    <path id="Path_2021" data-name="Path 2021" d="M57.545,62.858,57.4,113.644c0,.02,0,.042,0,.063l.144-50.786c0-.021,0-.042,0-.063" transform="translate(-42.688 -62.112)" fill="#1a1a1a"/>
                                    <path id="Path_2022" data-name="Path 2022" d="M57.506,62.973l-.144,50.786a2.423,2.423,0,0,1-.047.411l.144-50.786a2.423,2.423,0,0,0,.047-.412" transform="translate(-42.65 -62.164)" fill="#1a1a1a"/>
                                    <path id="Path_2023" data-name="Path 2023" d="M57.367,63.722l-.144,50.786a2.563,2.563,0,0,1-.113.394l.144-50.786a2.522,2.522,0,0,0,.113-.394" transform="translate(-42.557 -62.501)" fill="#1a1a1a"/>
                                    <path id="Path_2024" data-name="Path 2024" d="M57.1,64.439l-.144,50.786a2.813,2.813,0,0,1-.183.391l.144-50.786a2.753,2.753,0,0,0,.183-.39" transform="translate(-42.408 -62.824)" fill="#1a1a1a"/>
                                    <path id="Path_2025" data-name="Path 2025" d="M56.7,65.149l-.144,50.786a3.081,3.081,0,0,1-.268.4l.144-50.786a3.185,3.185,0,0,0,.268-.4" transform="translate(-42.188 -63.143)" fill="#1a1a1a"/>
                                    <path id="Path_2026" data-name="Path 2026" d="M56.094,65.874,55.95,116.66a3.791,3.791,0,0,1-.414.445l.145-50.786a3.883,3.883,0,0,0,.414-.446" transform="translate(-41.849 -63.47)" fill="#1a1a1a"/>
                                    <path id="Path_2027" data-name="Path 2027" d="M55.007,66.684l-.144,50.786a5.055,5.055,0,0,1-.824.609l.144-50.786a4.974,4.974,0,0,0,.824-.609" transform="translate(-41.175 -63.834)" fill="#1a1a1a"/>
                                    <path id="Path_2028" data-name="Path 2028" d="M52.939,67.792,52.8,118.578l-.078.046a7.4,7.4,0,0,1-1.441.631l.144-50.786a7.371,7.371,0,0,0,1.441-.631l.078-.046" transform="translate(-39.932 -64.333)" fill="#1a1a1a"/>
                                    <path id="Path_2029" data-name="Path 2029" d="M50.4,69.024l-.144,50.786a9.772,9.772,0,0,1-1.252.311l.144-50.786a9.614,9.614,0,0,0,1.252-.311" transform="translate(-38.908 -64.887)" fill="#1a1a1a"/>
                                    <path id="Path_2030" data-name="Path 2030" d="M48.417,69.59l-.144,50.786q-.436.078-.889.123l.144-50.785c.3-.03.6-.071.89-.124" transform="translate(-38.18 -65.142)" fill="#1a1a1a"/>
                                    <path id="Path_2031" data-name="Path 2031" d="M46.883,69.816,46.739,120.6c-.26.026-.522.044-.787.052L46.1,69.868c.265-.009.528-.026.788-.052" transform="translate(-37.536 -65.244)" fill="#1a1a1a"/>
                                    <path id="Path_2032" data-name="Path 2032" d="M45.482,69.911,45.338,120.7q-.373.012-.749,0l.144-50.786c.25.007.5.006.749,0" transform="translate(-36.922 -65.287)" fill="#1a1a1a"/>
                                    <path id="Path_2033" data-name="Path 2033" d="M44.13,69.885l-.144,50.786q-.368-.008-.736-.04l.144-50.785q.368.03.736.039" transform="translate(-36.32 -65.257)" fill="#1a1a1a"/>
                                    <path id="Path_2034" data-name="Path 2034" d="M42.784,69.777l-.144,50.786q-.374-.031-.745-.083l.144-50.786c.247.035.5.062.745.083" transform="translate(-35.71 -65.189)" fill="#1a1a1a"/>
                                    <path id="Path_2035" data-name="Path 2035" d="M41.407,69.584l-.144,50.786c-.26-.038-.517-.082-.773-.134l.144-50.787q.383.08.773.135" transform="translate(-35.077 -65.079)" fill="#1a1a1a"/>
                                    <path id="Path_2036" data-name="Path 2036" d="M39.943,69.28,39.8,120.067c-.285-.059-.567-.129-.844-.207L39.1,69.073c.276.079.558.148.844.207" transform="translate(-34.387 -64.909)" fill="#1a1a1a"/>
                                    <path id="Path_2037" data-name="Path 2037" d="M38.292,68.8l-.144,50.786a10.383,10.383,0,0,1-.986-.334l.144-50.786c.318.126.648.237.986.334" transform="translate(-33.58 -64.636)" fill="#1a1a1a"/>
                                    <path id="Path_2038" data-name="Path 2038" d="M34.374,65.332l-.144,50.786a8.924,8.924,0,0,1-1.192-.571c-1.589-.917-2.393-2.106-2.39-3.258L30.792,61.5c0,1.152.8,2.341,2.391,3.258a9,9,0,0,0,1.192.572" transform="translate(-30.648 -61.502)" fill="#1a1a1a"/>
                                 </g>
                              </g>
                              <g id="Group_539" data-name="Group 539">
                                 <g id="Group_538" data-name="Group 538">
                                    <path id="Path_2040" data-name="Path 2040" d="M43.231,55.807c3,1.731,3.207,4.425.465,6.019s-7.4,1.484-10.4-.247-3.2-4.428-.461-6.021,7.393-1.482,10.392.25" transform="translate(-13.911 -24.497)" fill="#1a1a1a"/>
                                    <path id="Path_2041" data-name="Path 2041" d="M31.912,128.7,1.532,111.157l.041-.024,30.22,17.448a.318.318,0,0,0,.12.115" transform="translate(-0.689 -50.016)" fill="#e34640"/>
                                    <path id="Path_2042" data-name="Path 2042" d="M1.533,71.615q.027-9.647.055-19.293L1.6,47.444q.034-12.086.068-24.171a.322.322,0,0,0,.04.163L1.574,71.591l-.041.024" transform="translate(-0.69 -10.474)" fill="#e34640"/>
                                    <path id="Union_27" data-name="Union 27" d="M.04,12.962c-.487-.842,3.488-4.065,8.876-7.2l2.439-1.417,11.708,6.759L11.357,4.348C16.447,1.389,20.979-.43,21.876.088l6,3.463L33.99,7.082l3.076,1.776,3.076,1.777,3.067,1.77c.53,0,1.069.617,1.527.881q3.76,2.171,7.52,4.341s-3.822,2.231-8.913,5.189h0L40.9,24.233h0c-5.389,3.132-10.155,5.9-10.644,6.175Z" transform="translate(0.98 0.001)" fill="#f45d57"/>
                                    <path id="Union_26" data-name="Union 26" d="M0,60.936.137,12.781C.627,12.5,5.392,9.737,10.78,6.606h0l2.439-1.418C18.306,2.231,22.131,0,22.131,0q-.012,4.79-.026,9.579l-.015,4.845c0,1.461-.01,3.407-.014,4.867q-.02,7.313-.041,14.625l-.015,4.844q-.012,4.792-.026,9.581c0,1.039-3.831,4.077-8.917,7.033L10.64,56.791h0C6.129,59.412,2.058,61.139.564,61.139.272,61.14.08,61.074,0,60.936Z" transform="translate(31.104 17.628)" fill="#d6322c"/>
                                    <path id="Path_2047" data-name="Path 2047" d="M31.963,41.017c-.045,15.714-.092,32.443-.136,48.156L1.607,71.725c.045-15.713.092-32.442.136-48.155l30.22,17.447" transform="translate(-0.723 -10.608)" fill="#e34640"/>
                                 </g>
                              </g>
                              <g id="Group_541" data-name="Group 541" transform="translate(0.884 12.962)">
                                 <g id="Group_540" data-name="Group 540">
                                    <path id="Path_2048" data-name="Path 2048" d="M11.672,63.455l0-1.307,8.719,5.034,0,1.307L16.6,66.3l-.019,6.6-1.13-.652.019-6.6Zm.008-2.761,0-1.307L20.4,64.422l0,1.307L11.68,60.695M1.761,48.44l.051-18.119L15.29,38.1,15.238,56.22,1.761,48.44m14.328,8.271.052-18.118,13.476,7.781-.051,18.118L16.089,56.711M5.013,31.464l.009-3.392L12.1,32.156l-.01,3.392L5.013,31.464m14.328,8.272.009-3.391,7.073,4.083-.01,3.392-7.072-4.083m12.783-.467L.142,20.805,0,70.991,31.982,89.456l.142-50.187" transform="translate(-0.884 -22.326)" fill="#e34640"/>
                                    <path id="Path_2049" data-name="Path 2049" d="M4.759,44.252l.009-2.971,10.437,6.026L15.2,50.278ZM16.731,45.89,3.254,38.109,3.2,56.227l13.476,7.781.052-18.119" transform="translate(-2.325 -30.113)" fill="#dbdcdc"/>
                                    <path id="Path_2050" data-name="Path 2050" d="M30.812,59.293l.009-2.971L41.25,62.343l-.008,2.971Zm11.972,1.638L29.307,53.15l-.051,18.118,13.477,7.781.051-18.118" transform="translate(-14.051 -36.883)" fill="#dbdcdc"/>
                                    <path id="Path_2051" data-name="Path 2051" d="M16.2,38.1,9.125,34.019l-.01,3.391,7.072,4.083Z" transform="translate(-4.986 -28.273)" fill="#fff"/>
                                    <path id="Path_2052" data-name="Path 2052" d="M42.251,53.145l-7.072-4.083-.01,3.392,7.072,4.083Z" transform="translate(-16.711 -35.043)" fill="#fff"/>
                                    <path id="Path_2053" data-name="Path 2053" d="M29.96,96l-8.719-5.034,0,1.307L29.956,97.3Z" transform="translate(-10.442 -53.9)" fill="#fff"/>
                                    <path id="Path_2054" data-name="Path 2054" d="M29.946,101.016l-8.719-5.034,0,1.307,3.795,2.191,1.13.652,3.795,2.191Z" transform="translate(-10.435 -56.159)" fill="#fff"/>
                                    <path id="Path_2055" data-name="Path 2055" d="M29.237,102.994l-1.13-.652-.019,6.6,1.13.652Z" transform="translate(-13.525 -59.022)" fill="#fff"/>
                                    <path id="Path_2056" data-name="Path 2056" d="M42.482,65.465l-9.9-5.714-.007,2.368,9.9,5.714Z" transform="translate(-15.546 -39.853)" fill="#b4b4b5"/>
                                    <path id="Path_2057" data-name="Path 2057" d="M32.356,61.744l.007-2.368,9.9,5.714-.007,2.368Zm10.167,3.2L32.094,58.919l-.009,2.971,10.43,6.021.008-2.971" transform="translate(-15.324 -39.479)" fill="#888"/>
                                    <path id="Path_2058" data-name="Path 2058" d="M16.429,50.423l-9.9-5.714-.007,2.368,9.9,5.714Z" transform="translate(-3.821 -33.084)" fill="#b4b4b5"/>
                                    <path id="Path_2059" data-name="Path 2059" d="M6.3,46.7l.007-2.368,9.9,5.714L16.2,52.416Zm10.175,3.2L6.04,43.877l-.008,2.971,10.437,6.026.008-2.971" transform="translate(-3.598 -32.709)" fill="#888"/>
                                 </g>
                              </g>
                           </g>
                           <g id="Group_829" data-name="Group 829" transform="translate(25 4.967)">
                              <path id="Path_4745" data-name="Path 4745" d="M0,72.728,16.946,83l11.92-7.486-17-10.026Z" fill="#fff"/>
                              <path id="Path_4746" data-name="Path 4746" d="M10.43,66.365l1.564,8.973.039.223.367.021,15.022.84.908-.571-15.379-.858-1.616-9.18Z" fill="#afafaf"/>
                              <path id="Path_4747" data-name="Path 4747" d="M87.092,67.489l17,10.026L92.172,85,75.227,74.728Z" fill="#fff"/>
                              <path id="Path_4748" data-name="Path 4748" d="M85.658,68.365l1.564,8.971.039.224.368.021,15.022.84.909-.571-15.381-.858-1.616-9.179Z" fill="#afafaf"/>
                              <path id="Path_4749" data-name="Path 4749" d="M89.393,79.541l15.7,3.939L112.177,67.3,96.793,63.5Z" fill="#fff"/>
                              <path id="Path_4750" data-name="Path 4750" d="M102.74,73.825,90.1,79.719l1.2.3,12.333-5.759.3-.139-.128-.247-5.141-9.914-1.181-.291Z" fill="#afafaf"/>
                              <path id="Path_4751" data-name="Path 4751" d="M35.7,85l24.1,3.335-3.755,11.3-24.41-3.455Z" fill="#fff"/>
                              <path id="Path_4752" data-name="Path 4752" d="M35.212,86.349l9.553,7.9.237.2.346-.114,14-4.635.286-.858L45.3,93.581,35.521,85.5Z" fill="#afafaf"/>
                              <path id="Path_4753" data-name="Path 4753" d="M43.7,0,39.638,11.174,64.047,14.63,67.8,3.335Z" fill="#fff"/>
                              <path id="Path_4754" data-name="Path 4754" d="M43.213,1.349l9.553,7.9.237.2.345-.114,14-4.636.285-.858L53.3,8.58,43.522.5Z" fill="#afafaf"/>
                              <path id="Path_4755" data-name="Path 4755" d="M50.721,96.5,55,107.859l24.134-6.482-4.582-11.23Z" fill="#fff"/>
                              <path id="Path_4756" data-name="Path 4756" d="M50.722,96.5l23.827-6.353,4.584,11.23L55,107.859Zm23.549-7.035-23.81,6.344-.958.256.259.691,4.264,11.364.267.711.973-.261,24.153-6.491.965-.259-.288-.7L75.5,89.893l-.279-.682Z" fill="#d7cec1"/>
                              <path id="Path_4757" data-name="Path 4757" d="M65.384,100.273,50.912,97.006l.325.864,14.14,3.2.349.079.227-.233L75.1,91.5l-.349-.855Z" fill="#afafaf"/>
                           </g>
                        </a>
                     </svg>
                     <svg id="email_1_active" class="email_f email_active"  data-name="Component 1 – 12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="126.968" viewBox="0 0 160 126.968">
                        <defs>
                           <clipPath id="clip-path">
                              <path id="Path_2039" data-name="Path 2039" d="M45.505,112.288c0,1.152-.8,2.341-2.39,3.258a11.451,11.451,0,0,1-5.572,1.374h-.049a9.739,9.739,0,0,1-4.774-1.126,3.318,3.318,0,0,1-1.928-2.76l-.144-50.787a3.316,3.316,0,0,0,1.928,2.76c2.742,1.593,7.4,1.484,10.4-.247,1.589-.917,2.394-2.106,2.391-3.258Z" transform="translate(-30.648 -61.502)" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-2">
                              <rect id="Rectangle_158" data-name="Rectangle 158" width="53.235" height="89.24" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-3">
                              <path id="Path_2060" data-name="Path 2060" d="M31.962,71.725,1.743,89.173C1.7,73.46,1.652,56.731,1.607,41.017L31.826,23.57c.044,15.714.092,32.442.136,48.155" transform="translate(-1.607 -23.57)" fill="#e34640"/>
                           </clipPath>
                        </defs>
                        <a xmlns:xlink="<?php echo home_url(); ?>/form/" class="email_click email_active" data-id="1">
                           <path id="Path_2414" data-name="Path 2414" d="M80,0,0,49.5,80,99l80-49.5Z" transform="translate(0 27.967)" fill="#d7cec1"/>
                           <g id="Group_623" data-name="Group 623" transform="translate(53.3)">
                              <g id="Group_537" data-name="Group 537" transform="translate(21.523 33.823)">
                                 <g id="Group_536" data-name="Group 536" transform="translate(0)">
                                    <path id="Path_2021" data-name="Path 2021" d="M57.4,62.858l.144,50.786c0,.02,0,.042,0,.063L57.4,62.921c0-.021,0-.042,0-.063" transform="translate(-57.4 -62.112)" fill="#1a1a1a"/>
                                    <path id="Path_2022" data-name="Path 2022" d="M57.315,62.973l.144,50.786a2.423,2.423,0,0,0,.047.411l-.144-50.786a2.423,2.423,0,0,1-.047-.412" transform="translate(-57.314 -62.164)" fill="#1a1a1a"/>
                                    <path id="Path_2023" data-name="Path 2023" d="M57.11,63.722l.144,50.786a2.563,2.563,0,0,0,.113.394l-.144-50.786a2.522,2.522,0,0,1-.113-.394" transform="translate(-57.062 -62.501)" fill="#1a1a1a"/>
                                    <path id="Path_2024" data-name="Path 2024" d="M56.778,64.439l.144,50.786a2.813,2.813,0,0,0,.183.391l-.144-50.786a2.753,2.753,0,0,1-.183-.39" transform="translate(-56.617 -62.824)" fill="#1a1a1a"/>
                                    <path id="Path_2025" data-name="Path 2025" d="M56.289,65.149l.144,50.786a3.081,3.081,0,0,0,.268.4l-.144-50.786a3.185,3.185,0,0,1-.268-.4" transform="translate(-55.945 -63.143)" fill="#1a1a1a"/>
                                    <path id="Path_2026" data-name="Path 2026" d="M55.536,65.874l.144,50.786a3.791,3.791,0,0,0,.414.445L55.95,66.32a3.883,3.883,0,0,1-.414-.446" transform="translate(-54.924 -63.47)" fill="#1a1a1a"/>
                                    <path id="Path_2027" data-name="Path 2027" d="M54.039,66.684l.144,50.786a5.055,5.055,0,0,0,.824.609l-.144-50.786a4.974,4.974,0,0,1-.824-.609" transform="translate(-53.013 -63.834)" fill="#1a1a1a"/>
                                    <path id="Path_2028" data-name="Path 2028" d="M51.277,67.792l.144,50.786.078.046a7.4,7.4,0,0,0,1.441.631L52.8,68.47a7.371,7.371,0,0,1-1.441-.631l-.078-.046" transform="translate(-49.427 -64.333)" fill="#1a1a1a"/>
                                    <path id="Path_2029" data-name="Path 2029" d="M49,69.024l.144,50.786a9.772,9.772,0,0,0,1.252.311l-.144-50.786A9.614,9.614,0,0,1,49,69.024" transform="translate(-45.633 -64.887)" fill="#1a1a1a"/>
                                    <path id="Path_2030" data-name="Path 2030" d="M47.384,69.59l.144,50.786q.436.078.889.123l-.144-50.785c-.3-.03-.6-.071-.89-.124" transform="translate(-42.764 -65.142)" fill="#1a1a1a"/>
                                    <path id="Path_2031" data-name="Path 2031" d="M45.952,69.816,46.1,120.6c.26.026.522.044.787.052L46.74,69.868c-.265-.009-.528-.026-.788-.052" transform="translate(-40.442 -65.244)" fill="#1a1a1a"/>
                                    <path id="Path_2032" data-name="Path 2032" d="M44.589,69.911l.144,50.786q.373.012.749,0l-.144-50.786c-.25.007-.5.006-.749,0" transform="translate(-38.292 -65.287)" fill="#1a1a1a"/>
                                    <path id="Path_2033" data-name="Path 2033" d="M43.25,69.885l.144,50.786q.368-.008.736-.04l-.144-50.785q-.368.03-.736.039" transform="translate(-36.204 -65.257)" fill="#1a1a1a"/>
                                    <path id="Path_2034" data-name="Path 2034" d="M41.9,69.777l.144,50.786q.374-.031.745-.083L42.64,69.694c-.247.035-.5.062-.745.083" transform="translate(-34.112 -65.189)" fill="#1a1a1a"/>
                                    <path id="Path_2035" data-name="Path 2035" d="M40.49,69.584l.144,50.786c.26-.038.517-.082.773-.134l-.144-50.787q-.383.08-.773.135" transform="translate(-31.962 -65.079)" fill="#1a1a1a"/>
                                    <path id="Path_2036" data-name="Path 2036" d="M38.955,69.28l.144,50.787c.285-.059.567-.129.844-.207L39.8,69.073c-.276.079-.558.148-.844.207" transform="translate(-29.654 -64.909)" fill="#1a1a1a"/>
                                    <path id="Path_2037" data-name="Path 2037" d="M37.162,68.8l.144,50.786a10.383,10.383,0,0,0,.986-.334l-.144-50.786c-.318.126-.648.237-.986.334" transform="translate(-27.017 -64.636)" fill="#1a1a1a"/>
                                    <path id="Path_2038" data-name="Path 2038" d="M30.648,65.332l.144,50.786a8.924,8.924,0,0,0,1.192-.571c1.589-.917,2.393-2.106,2.39-3.258L34.231,61.5c0,1.152-.8,2.341-2.391,3.258a9,9,0,0,1-1.192.572" transform="translate(-19.517 -61.502)" fill="#1a1a1a"/>
                                 </g>
                              </g>
                              <g id="Group_539" data-name="Group 539">
                                 <g id="Group_538" data-name="Group 538">
                                    <path id="Path_2040" data-name="Path 2040" d="M33.3,55.807c-3,1.731-3.207,4.425-.465,6.019s7.4,1.484,10.4-.247,3.2-4.428.461-6.021-7.393-1.482-10.392.25" transform="translate(-9.386 -24.497)" fill="#1a1a1a"/>
                                    <path id="Path_2041" data-name="Path 2041" d="M1.532,128.7l30.38-17.539-.041-.024L1.652,128.581a.318.318,0,0,1-.12.115" transform="translate(20.481 -50.016)" fill="#e34640"/>
                                    <path id="Path_2042" data-name="Path 2042" d="M1.71,71.615q-.027-9.647-.055-19.293l-.014-4.878q-.034-12.086-.068-24.171a.322.322,0,0,1-.04.163l.136,48.155.041.024" transform="translate(50.682 -10.474)" fill="#e34640"/>
                                    <path id="Union_27" data-name="Union 27" d="M.04,17.447c-.487.842,3.488,4.065,8.876,7.2l2.439,1.417L23.064,19.3,11.357,26.06c5.089,2.959,9.622,4.778,10.519,4.26l6-3.463,6.115-3.531,3.076-1.776,3.076-1.777L43.209,18c.53,0,1.069-.617,1.527-.881q3.76-2.171,7.52-4.341s-3.822-2.231-8.913-5.189h0L40.9,6.175h0C35.515,3.043,30.748.279,30.26,0Z" transform="translate(52.255 30.409) rotate(180)" fill="#f45d57"/>
                                    <path id="Union_26" data-name="Union 26" d="M0,.2.137,48.358c.49.279,5.255,3.044,10.643,6.175h0l2.439,1.418c5.087,2.957,8.912,5.183,8.912,5.188q-.012-4.79-.026-9.579l-.015-4.845c0-1.461-.01-3.407-.014-4.867q-.02-7.313-.041-14.625l-.015-4.844Q22.009,17.586,22,12.8c0-1.039-3.831-4.077-8.917-7.033L10.64,4.348h0C6.129,1.727,2.058,0,.564,0,.272,0,.08.066,0,.2Z" transform="translate(22.131 78.768) rotate(180)" fill="#e34640"/>
                                    <path id="Path_2047" data-name="Path 2047" d="M1.607,41.017c.045,15.714.092,32.443.136,48.156l30.22-17.448c-.045-15.713-.092-32.442-.136-48.155L1.607,41.017" transform="translate(20.389 -10.608)" fill="#e34640"/>
                                 </g>
                              </g>
                              <g id="Group_541" data-name="Group 541" transform="translate(21.996 12.962)">
                                 <g id="Group_540" data-name="Group 540">
                                    <path id="Path_2048" data-name="Path 2048" d="M20.452,63.455l0-1.307-8.719,5.034,0,1.307L15.528,66.3l.019,6.6,1.13-.652-.019-6.6Zm-.008-2.761,0-1.307-8.719,5.034,0,1.307,8.719-5.034M30.363,48.44l-.051-18.119L16.834,38.1l.051,18.118,13.477-7.78M16.035,56.711l-.052-18.118L2.507,46.374l.051,18.118,13.477-7.781M27.111,31.464,27.1,28.073l-7.073,4.083.01,3.392,7.072-4.083M12.783,39.736l-.009-3.391L5.7,40.428l.01,3.392,7.072-4.083M0,39.269,31.982,20.805l.142,50.186L.142,89.456,0,39.269" transform="translate(-0.885 -22.326)" fill="#d6322c"/>
                                    <path id="Path_2049" data-name="Path 2049" d="M15.175,44.252l-.009-2.971L4.729,47.307l.009,2.971ZM3.2,45.89,16.68,38.109l.051,18.118L3.255,64.009,3.2,45.89" transform="translate(12.747 -30.113)" fill="#dbdcdc"/>
                                    <path id="Path_2050" data-name="Path 2050" d="M41.228,59.293l-.009-2.971L30.79,62.343l.008,2.971ZM29.256,60.931,42.733,53.15l.051,18.118L29.307,79.049l-.051-18.118" transform="translate(-27.634 -36.883)" fill="#dbdcdc"/>
                                    <path id="Path_2051" data-name="Path 2051" d="M9.115,38.1l7.072-4.083.01,3.391L9.125,41.494Z" transform="translate(10.029 -28.273)" fill="#fff"/>
                                    <path id="Path_2052" data-name="Path 2052" d="M35.168,53.145l7.072-4.083.01,3.392-7.072,4.083Z" transform="translate(-30.352 -35.043)" fill="#fff"/>
                                    <path id="Path_2053" data-name="Path 2053" d="M21.238,96l8.719-5.034,0,1.307L21.241,97.3Z" transform="translate(-10.401 -53.9)" fill="#fff"/>
                                    <path id="Path_2054" data-name="Path 2054" d="M21.224,101.016l8.719-5.034,0,1.307L26.152,99.48l-1.13.652-3.795,2.191Z" transform="translate(-10.379 -56.159)" fill="#fff"/>
                                    <path id="Path_2055" data-name="Path 2055" d="M28.089,102.994l1.13-.652.019,6.6-1.13.652Z" transform="translate(-13.446 -59.022)" fill="#fff"/>
                                    <path id="Path_2056" data-name="Path 2056" d="M32.579,65.465l9.9-5.714.007,2.368-9.9,5.714Z" transform="translate(-29.16 -39.853)" fill="#b4b4b5"/>
                                    <path id="Path_2057" data-name="Path 2057" d="M42.252,61.744l-.007-2.368-9.9,5.714.007,2.368Zm-10.167,3.2,10.429-6.021.009,2.971-10.43,6.021-.008-2.971" transform="translate(-28.929 -39.479)" fill="#888"/>
                                    <path id="Path_2058" data-name="Path 2058" d="M6.526,50.423l9.9-5.714.007,2.368-9.9,5.714Z" transform="translate(11.221 -33.084)" fill="#b4b4b5"/>
                                    <path id="Path_2059" data-name="Path 2059" d="M16.207,46.7,16.2,44.334,6.3,50.048l.007,2.368ZM6.032,49.9l10.437-6.026.008,2.971L6.04,52.874,6.032,49.9" transform="translate(11.444 -32.709)" fill="#888"/>
                                 </g>
                              </g>
                           </g>
                           <g id="Group_829" data-name="Group 829" transform="translate(25 4.967)">
                              <path id="Path_4745" data-name="Path 4745" d="M0,72.728,16.946,83l11.92-7.486-17-10.026Z" fill="#fff"/>
                              <path id="Path_4746" data-name="Path 4746" d="M10.43,66.365l1.564,8.973.039.223.367.021,15.022.84.908-.571-15.379-.858-1.616-9.18Z" fill="#afafaf"/>
                              <path id="Path_4747" data-name="Path 4747" d="M87.092,67.489l17,10.026L92.172,85,75.227,74.728Z" fill="#fff"/>
                              <path id="Path_4748" data-name="Path 4748" d="M85.658,68.365l1.564,8.971.039.224.368.021,15.022.84.909-.571-15.381-.858-1.616-9.179Z" fill="#afafaf"/>
                              <path id="Path_4749" data-name="Path 4749" d="M89.393,79.541l15.7,3.939L112.177,67.3,96.793,63.5Z" fill="#fff"/>
                              <path id="Path_4750" data-name="Path 4750" d="M102.74,73.825,90.1,79.719l1.2.3,12.333-5.759.3-.139-.128-.247-5.141-9.914-1.181-.291Z" fill="#afafaf"/>
                              <path id="Path_4751" data-name="Path 4751" d="M35.7,85l24.1,3.335-3.755,11.3-24.41-3.455Z" fill="#fff"/>
                              <path id="Path_4752" data-name="Path 4752" d="M35.212,86.349l9.553,7.9.237.2.346-.114,14-4.635.286-.858L45.3,93.581,35.521,85.5Z" fill="#afafaf"/>
                              <path id="Path_4753" data-name="Path 4753" d="M43.7,0,39.638,11.174,64.047,14.63,67.8,3.335Z" fill="#fff"/>
                              <path id="Path_4754" data-name="Path 4754" d="M43.213,1.349l9.553,7.9.237.2.345-.114,14-4.636.285-.858L53.3,8.58,43.522.5Z" fill="#afafaf"/>
                              <path id="Path_4755" data-name="Path 4755" d="M50.721,96.5,55,107.859l24.134-6.482-4.582-11.23Z" fill="#fff"/>
                              <path id="Path_4756" data-name="Path 4756" d="M50.722,96.5l23.827-6.353,4.584,11.23L55,107.859Zm23.549-7.035-23.81,6.344-.958.256.259.691,4.264,11.364.267.711.973-.261,24.153-6.491.965-.259-.288-.7L75.5,89.893l-.279-.682Z" fill="#d7cec1"/>
                              <path id="Path_4757" data-name="Path 4757" d="M65.384,100.273,50.912,97.006l.325.864,14.14,3.2.349.079.227-.233L75.1,91.5l-.349-.855Z" fill="#afafaf"/>
                           </g>
                        </a>
                     </svg>
                  </div>
                  <div class="form_email email_2" id="email_2">
                     <div class="c-firework"></div>
                     <p class="info_email">
                        <a href="<?php echo home_url(); ?>/form/" aria-label="お問い合わせ" ><span class="ic">お問い合わせ</span></a>
                     </p>
                     <svg id="email_2" class="email_f email" data-name="Component 1 – 18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="126.967" viewBox="0 0 160 126.967">
                        <defs>
                           <clipPath id="clip-path">
                              <path id="Path_2039" data-name="Path 2039" d="M45.505,112.288c0,1.152-.8,2.341-2.39,3.258a11.451,11.451,0,0,1-5.572,1.374h-.049a9.739,9.739,0,0,1-4.774-1.126,3.318,3.318,0,0,1-1.928-2.76l-.144-50.787a3.316,3.316,0,0,0,1.928,2.76c2.742,1.593,7.4,1.484,10.4-.247,1.589-.917,2.394-2.106,2.391-3.258Z" transform="translate(-30.648 -61.502)" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-2">
                              <rect id="Rectangle_158" data-name="Rectangle 158" width="53.235" height="89.24" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-3">
                              <path id="Path_2060" data-name="Path 2060" d="M31.962,71.725,1.743,89.173C1.7,73.46,1.652,56.731,1.607,41.017L31.826,23.57c.044,15.714.092,32.442.136,48.155" transform="translate(-1.607 -23.57)" fill="#e34640"/>
                           </clipPath>
                        </defs>
                        <a  xmlns:xlink="<?php echo home_url(); ?>/form/" class="email_click email" data-id="2">
                           <g id="Group_3184" data-name="Group 3184" transform="translate(0 -65.033)">
                              <path id="Path_2414" data-name="Path 2414" d="M80,0,0,49.5,80,99l80-49.5Z" transform="translate(0 93)" fill="#d7cec1"/>
                              <g id="Group_623" data-name="Group 623" transform="translate(53.301 65.033)">
                                 <g id="Group_537" data-name="Group 537" transform="translate(21.523 33.823)">
                                    <g id="Group_536" data-name="Group 536" transform="translate(0)">
                                       <path id="Path_2021" data-name="Path 2021" d="M57.4,62.858l.144,50.786c0,.02,0,.042,0,.063L57.4,62.921c0-.021,0-.042,0-.063" transform="translate(-57.4 -62.112)" fill="#1a1a1a"/>
                                       <path id="Path_2022" data-name="Path 2022" d="M57.315,62.973l.144,50.786a2.423,2.423,0,0,0,.047.411l-.144-50.786a2.423,2.423,0,0,1-.047-.412" transform="translate(-57.314 -62.164)" fill="#1a1a1a"/>
                                       <path id="Path_2023" data-name="Path 2023" d="M57.11,63.722l.144,50.786a2.563,2.563,0,0,0,.113.394l-.144-50.786a2.522,2.522,0,0,1-.113-.394" transform="translate(-57.062 -62.501)" fill="#1a1a1a"/>
                                       <path id="Path_2024" data-name="Path 2024" d="M56.778,64.439l.144,50.786a2.813,2.813,0,0,0,.183.391l-.144-50.786a2.753,2.753,0,0,1-.183-.39" transform="translate(-56.617 -62.824)" fill="#1a1a1a"/>
                                       <path id="Path_2025" data-name="Path 2025" d="M56.289,65.149l.144,50.786a3.081,3.081,0,0,0,.268.4l-.144-50.786a3.185,3.185,0,0,1-.268-.4" transform="translate(-55.945 -63.143)" fill="#1a1a1a"/>
                                       <path id="Path_2026" data-name="Path 2026" d="M55.536,65.874l.144,50.786a3.791,3.791,0,0,0,.414.445L55.95,66.32a3.883,3.883,0,0,1-.414-.446" transform="translate(-54.924 -63.47)" fill="#1a1a1a"/>
                                       <path id="Path_2027" data-name="Path 2027" d="M54.039,66.684l.144,50.786a5.055,5.055,0,0,0,.824.609l-.144-50.786a4.974,4.974,0,0,1-.824-.609" transform="translate(-53.013 -63.834)" fill="#1a1a1a"/>
                                       <path id="Path_2028" data-name="Path 2028" d="M51.277,67.792l.144,50.786.078.046a7.4,7.4,0,0,0,1.441.631L52.8,68.47a7.371,7.371,0,0,1-1.441-.631l-.078-.046" transform="translate(-49.427 -64.333)" fill="#1a1a1a"/>
                                       <path id="Path_2029" data-name="Path 2029" d="M49,69.024l.144,50.786a9.772,9.772,0,0,0,1.252.311l-.144-50.786A9.614,9.614,0,0,1,49,69.024" transform="translate(-45.633 -64.887)" fill="#1a1a1a"/>
                                       <path id="Path_2030" data-name="Path 2030" d="M47.384,69.59l.144,50.786q.436.078.889.123l-.144-50.785c-.3-.03-.6-.071-.89-.124" transform="translate(-42.764 -65.142)" fill="#1a1a1a"/>
                                       <path id="Path_2031" data-name="Path 2031" d="M45.952,69.816,46.1,120.6c.26.026.522.044.787.052L46.74,69.868c-.265-.009-.528-.026-.788-.052" transform="translate(-40.442 -65.244)" fill="#1a1a1a"/>
                                       <path id="Path_2032" data-name="Path 2032" d="M44.589,69.911l.144,50.786q.373.012.749,0l-.144-50.786c-.25.007-.5.006-.749,0" transform="translate(-38.292 -65.287)" fill="#1a1a1a"/>
                                       <path id="Path_2033" data-name="Path 2033" d="M43.25,69.885l.144,50.786q.368-.008.736-.04l-.144-50.785q-.368.03-.736.039" transform="translate(-36.204 -65.257)" fill="#1a1a1a"/>
                                       <path id="Path_2034" data-name="Path 2034" d="M41.9,69.777l.144,50.786q.374-.031.745-.083L42.64,69.694c-.247.035-.5.062-.745.083" transform="translate(-34.112 -65.189)" fill="#1a1a1a"/>
                                       <path id="Path_2035" data-name="Path 2035" d="M40.49,69.584l.144,50.786c.26-.038.517-.082.773-.134l-.144-50.787q-.383.08-.773.135" transform="translate(-31.962 -65.079)" fill="#1a1a1a"/>
                                       <path id="Path_2036" data-name="Path 2036" d="M38.955,69.28l.144,50.787c.285-.059.567-.129.844-.207L39.8,69.073c-.276.079-.558.148-.844.207" transform="translate(-29.654 -64.909)" fill="#1a1a1a"/>
                                       <path id="Path_2037" data-name="Path 2037" d="M37.162,68.8l.144,50.786a10.383,10.383,0,0,0,.986-.334l-.144-50.786c-.318.126-.648.237-.986.334" transform="translate(-27.017 -64.636)" fill="#1a1a1a"/>
                                       <path id="Path_2038" data-name="Path 2038" d="M30.648,65.332l.144,50.786a8.924,8.924,0,0,0,1.192-.571c1.589-.917,2.393-2.106,2.39-3.258L34.231,61.5c0,1.152-.8,2.341-2.391,3.258a9,9,0,0,1-1.192.572" transform="translate(-19.517 -61.502)" fill="#1a1a1a"/>
                                    </g>
                                 </g>
                                 <g id="Group_539" data-name="Group 539">
                                    <g id="Group_538" data-name="Group 538">
                                       <path id="Path_2040" data-name="Path 2040" d="M33.3,55.807c-3,1.731-3.207,4.425-.465,6.019s7.4,1.484,10.4-.247,3.2-4.428.461-6.021-7.393-1.482-10.392.25" transform="translate(-9.386 -24.497)" fill="#1a1a1a"/>
                                       <path id="Path_2041" data-name="Path 2041" d="M1.532,128.7l30.38-17.539-.041-.024L1.652,128.581a.318.318,0,0,1-.12.115" transform="translate(20.481 -50.016)" fill="#e34640"/>
                                       <path id="Path_2042" data-name="Path 2042" d="M1.71,71.615q-.027-9.647-.055-19.293l-.014-4.878q-.034-12.086-.068-24.171a.322.322,0,0,1-.04.163l.136,48.155.041.024" transform="translate(50.682 -10.474)" fill="#e34640"/>
                                       <path id="Union_27" data-name="Union 27" d="M.041,17.447c-.487.842,3.488,4.065,8.876,7.2l2.439,1.417L23.065,19.3,11.358,26.06c5.089,2.959,9.622,4.778,10.519,4.26l6-3.463,6.115-3.531,3.076-1.776,3.076-1.777L43.209,18c.53,0,1.069-.617,1.527-.881q3.76-2.171,7.52-4.341s-3.822-2.231-8.913-5.189h0L40.905,6.175h0C35.516,3.043,30.749.279,30.261,0Z" transform="translate(52.256 30.409) rotate(180)" fill="#f45d57"/>
                                       <path id="Union_26" data-name="Union 26" d="M0,.2.138,48.358c.49.279,5.255,3.044,10.643,6.175h0l2.439,1.418c5.087,2.957,8.912,5.183,8.912,5.188q-.012-4.79-.026-9.579l-.015-4.845c0-1.461-.01-3.407-.014-4.867q-.02-7.313-.041-14.625l-.015-4.844Q22.009,17.586,22,12.8c0-1.039-3.831-4.077-8.917-7.033L10.641,4.348h0C6.13,1.727,2.059,0,.564,0,.273,0,.08.066,0,.2Z" transform="translate(22.132 78.768) rotate(180)" fill="#e34640"/>
                                       <path id="Path_2047" data-name="Path 2047" d="M1.607,41.017c.045,15.714.092,32.443.136,48.156l30.22-17.448c-.045-15.713-.092-32.442-.136-48.155L1.607,41.017" transform="translate(20.389 -10.608)" fill="#e34640"/>
                                    </g>
                                 </g>
                                 <g id="Group_541" data-name="Group 541" transform="translate(21.996 12.962)">
                                    <g id="Group_540" data-name="Group 540">
                                       <path id="Path_2048" data-name="Path 2048" d="M20.452,63.455l0-1.307-8.719,5.034,0,1.307L15.528,66.3l.019,6.6,1.13-.652-.019-6.6Zm-.008-2.761,0-1.307-8.719,5.034,0,1.307,8.719-5.034M30.363,48.44l-.051-18.119L16.834,38.1l.051,18.118,13.477-7.78M16.035,56.711l-.052-18.118L2.507,46.374l.051,18.118,13.477-7.781M27.111,31.464,27.1,28.073l-7.073,4.083.01,3.392,7.072-4.083M12.783,39.736l-.009-3.391L5.7,40.428l.01,3.392,7.072-4.083M0,39.269,31.982,20.805l.142,50.186L.142,89.456,0,39.269" transform="translate(-0.885 -22.326)" fill="#d6322c"/>
                                       <path id="Path_2049" data-name="Path 2049" d="M15.175,44.252l-.009-2.971L4.729,47.307l.009,2.971ZM3.2,45.89,16.68,38.109l.051,18.118L3.255,64.009,3.2,45.89" transform="translate(12.747 -30.113)" fill="#dbdcdc"/>
                                       <path id="Path_2050" data-name="Path 2050" d="M41.228,59.293l-.009-2.971L30.79,62.343l.008,2.971ZM29.256,60.931,42.733,53.15l.051,18.118L29.307,79.049l-.051-18.118" transform="translate(-27.634 -36.883)" fill="#dbdcdc"/>
                                       <path id="Path_2051" data-name="Path 2051" d="M9.115,38.1l7.072-4.083.01,3.391L9.125,41.494Z" transform="translate(10.029 -28.273)" fill="#fff"/>
                                       <path id="Path_2052" data-name="Path 2052" d="M35.168,53.145l7.072-4.083.01,3.392-7.072,4.083Z" transform="translate(-30.352 -35.043)" fill="#fff"/>
                                       <path id="Path_2053" data-name="Path 2053" d="M21.238,96l8.719-5.034,0,1.307L21.241,97.3Z" transform="translate(-10.401 -53.9)" fill="#fff"/>
                                       <path id="Path_2054" data-name="Path 2054" d="M21.224,101.016l8.719-5.034,0,1.307L26.152,99.48l-1.13.652-3.795,2.191Z" transform="translate(-10.379 -56.159)" fill="#fff"/>
                                       <path id="Path_2055" data-name="Path 2055" d="M28.089,102.994l1.13-.652.019,6.6-1.13.652Z" transform="translate(-13.446 -59.022)" fill="#fff"/>
                                       <path id="Path_2056" data-name="Path 2056" d="M32.579,65.465l9.9-5.714.007,2.368-9.9,5.714Z" transform="translate(-29.16 -39.853)" fill="#b4b4b5"/>
                                       <path id="Path_2057" data-name="Path 2057" d="M42.252,61.744l-.007-2.368-9.9,5.714.007,2.368Zm-10.167,3.2,10.429-6.021.009,2.971-10.43,6.021-.008-2.971" transform="translate(-28.929 -39.479)" fill="#888"/>
                                       <path id="Path_2058" data-name="Path 2058" d="M6.526,50.423l9.9-5.714.007,2.368-9.9,5.714Z" transform="translate(11.221 -33.084)" fill="#b4b4b5"/>
                                       <path id="Path_2059" data-name="Path 2059" d="M16.207,46.7,16.2,44.334,6.3,50.048l.007,2.368ZM6.032,49.9l10.437-6.026.008,2.971L6.04,52.874,6.032,49.9" transform="translate(11.444 -32.709)" fill="#888"/>
                                    </g>
                                 </g>
                              </g>
                           </g>
                        </a>
                     </svg>
                     <svg id="email_2_hover" class="email_f email_hover"  data-name="Component 1 – 12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="126.968" viewBox="0 0 160 126.968">
                        <defs>
                           <clipPath id="clip-path">
                              <path id="Path_2039" data-name="Path 2039" d="M45.505,112.288c0,1.152-.8,2.341-2.39,3.258a11.451,11.451,0,0,1-5.572,1.374h-.049a9.739,9.739,0,0,1-4.774-1.126,3.318,3.318,0,0,1-1.928-2.76l-.144-50.787a3.316,3.316,0,0,0,1.928,2.76c2.742,1.593,7.4,1.484,10.4-.247,1.589-.917,2.394-2.106,2.391-3.258Z" transform="translate(-30.648 -61.502)" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-2">
                              <rect id="Rectangle_158" data-name="Rectangle 158" width="53.235" height="89.24" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-3">
                              <path id="Path_2060" data-name="Path 2060" d="M31.962,71.725,1.743,89.173C1.7,73.46,1.652,56.731,1.607,41.017L31.826,23.57c.044,15.714.092,32.442.136,48.155" transform="translate(-1.607 -23.57)" fill="#e34640"/>
                           </clipPath>
                        </defs>
                        <a  xmlns:xlink="<?php echo home_url(); ?>/form/" class="email_click email_hover" data-id="2">
                           <path id="Path_2414" data-name="Path 2414" d="M80,0,0,49.5,80,99l80-49.5Z" transform="translate(0 27.967)" fill="#d7cec1"/>
                           <g id="Group_623" data-name="Group 623" transform="translate(53.3)">
                              <g id="Group_537" data-name="Group 537" transform="translate(21.523 33.823)">
                                 <g id="Group_536" data-name="Group 536" transform="translate(0)">
                                    <path id="Path_2021" data-name="Path 2021" d="M57.4,62.858l.144,50.786c0,.02,0,.042,0,.063L57.4,62.921c0-.021,0-.042,0-.063" transform="translate(-57.4 -62.112)" fill="#1a1a1a"/>
                                    <path id="Path_2022" data-name="Path 2022" d="M57.315,62.973l.144,50.786a2.423,2.423,0,0,0,.047.411l-.144-50.786a2.423,2.423,0,0,1-.047-.412" transform="translate(-57.314 -62.164)" fill="#1a1a1a"/>
                                    <path id="Path_2023" data-name="Path 2023" d="M57.11,63.722l.144,50.786a2.563,2.563,0,0,0,.113.394l-.144-50.786a2.522,2.522,0,0,1-.113-.394" transform="translate(-57.062 -62.501)" fill="#1a1a1a"/>
                                    <path id="Path_2024" data-name="Path 2024" d="M56.778,64.439l.144,50.786a2.813,2.813,0,0,0,.183.391l-.144-50.786a2.753,2.753,0,0,1-.183-.39" transform="translate(-56.617 -62.824)" fill="#1a1a1a"/>
                                    <path id="Path_2025" data-name="Path 2025" d="M56.289,65.149l.144,50.786a3.081,3.081,0,0,0,.268.4l-.144-50.786a3.185,3.185,0,0,1-.268-.4" transform="translate(-55.945 -63.143)" fill="#1a1a1a"/>
                                    <path id="Path_2026" data-name="Path 2026" d="M55.536,65.874l.144,50.786a3.791,3.791,0,0,0,.414.445L55.95,66.32a3.883,3.883,0,0,1-.414-.446" transform="translate(-54.924 -63.47)" fill="#1a1a1a"/>
                                    <path id="Path_2027" data-name="Path 2027" d="M54.039,66.684l.144,50.786a5.055,5.055,0,0,0,.824.609l-.144-50.786a4.974,4.974,0,0,1-.824-.609" transform="translate(-53.013 -63.834)" fill="#1a1a1a"/>
                                    <path id="Path_2028" data-name="Path 2028" d="M51.277,67.792l.144,50.786.078.046a7.4,7.4,0,0,0,1.441.631L52.8,68.47a7.371,7.371,0,0,1-1.441-.631l-.078-.046" transform="translate(-49.427 -64.333)" fill="#1a1a1a"/>
                                    <path id="Path_2029" data-name="Path 2029" d="M49,69.024l.144,50.786a9.772,9.772,0,0,0,1.252.311l-.144-50.786A9.614,9.614,0,0,1,49,69.024" transform="translate(-45.633 -64.887)" fill="#1a1a1a"/>
                                    <path id="Path_2030" data-name="Path 2030" d="M47.384,69.59l.144,50.786q.436.078.889.123l-.144-50.785c-.3-.03-.6-.071-.89-.124" transform="translate(-42.764 -65.142)" fill="#1a1a1a"/>
                                    <path id="Path_2031" data-name="Path 2031" d="M45.952,69.816,46.1,120.6c.26.026.522.044.787.052L46.74,69.868c-.265-.009-.528-.026-.788-.052" transform="translate(-40.442 -65.244)" fill="#1a1a1a"/>
                                    <path id="Path_2032" data-name="Path 2032" d="M44.589,69.911l.144,50.786q.373.012.749,0l-.144-50.786c-.25.007-.5.006-.749,0" transform="translate(-38.292 -65.287)" fill="#1a1a1a"/>
                                    <path id="Path_2033" data-name="Path 2033" d="M43.25,69.885l.144,50.786q.368-.008.736-.04l-.144-50.785q-.368.03-.736.039" transform="translate(-36.204 -65.257)" fill="#1a1a1a"/>
                                    <path id="Path_2034" data-name="Path 2034" d="M41.9,69.777l.144,50.786q.374-.031.745-.083L42.64,69.694c-.247.035-.5.062-.745.083" transform="translate(-34.112 -65.189)" fill="#1a1a1a"/>
                                    <path id="Path_2035" data-name="Path 2035" d="M40.49,69.584l.144,50.786c.26-.038.517-.082.773-.134l-.144-50.787q-.383.08-.773.135" transform="translate(-31.962 -65.079)" fill="#1a1a1a"/>
                                    <path id="Path_2036" data-name="Path 2036" d="M38.955,69.28l.144,50.787c.285-.059.567-.129.844-.207L39.8,69.073c-.276.079-.558.148-.844.207" transform="translate(-29.654 -64.909)" fill="#1a1a1a"/>
                                    <path id="Path_2037" data-name="Path 2037" d="M37.162,68.8l.144,50.786a10.383,10.383,0,0,0,.986-.334l-.144-50.786c-.318.126-.648.237-.986.334" transform="translate(-27.017 -64.636)" fill="#1a1a1a"/>
                                    <path id="Path_2038" data-name="Path 2038" d="M30.648,65.332l.144,50.786a8.924,8.924,0,0,0,1.192-.571c1.589-.917,2.393-2.106,2.39-3.258L34.231,61.5c0,1.152-.8,2.341-2.391,3.258a9,9,0,0,1-1.192.572" transform="translate(-19.517 -61.502)" fill="#1a1a1a"/>
                                 </g>
                              </g>
                              <g id="Group_539" data-name="Group 539">
                                 <g id="Group_538" data-name="Group 538">
                                    <path id="Path_2040" data-name="Path 2040" d="M33.3,55.807c-3,1.731-3.207,4.425-.465,6.019s7.4,1.484,10.4-.247,3.2-4.428.461-6.021-7.393-1.482-10.392.25" transform="translate(-9.386 -24.497)" fill="#1a1a1a"/>
                                    <path id="Path_2041" data-name="Path 2041" d="M1.532,128.7l30.38-17.539-.041-.024L1.652,128.581a.318.318,0,0,1-.12.115" transform="translate(20.481 -50.016)" fill="#e34640"/>
                                    <path id="Path_2042" data-name="Path 2042" d="M1.71,71.615q-.027-9.647-.055-19.293l-.014-4.878q-.034-12.086-.068-24.171a.322.322,0,0,1-.04.163l.136,48.155.041.024" transform="translate(50.682 -10.474)" fill="#e34640"/>
                                    <path id="Union_27" data-name="Union 27" d="M.04,17.447c-.487.842,3.488,4.065,8.876,7.2l2.439,1.417L23.064,19.3,11.357,26.06c5.089,2.959,9.622,4.778,10.519,4.26l6-3.463,6.115-3.531,3.076-1.776,3.076-1.777L43.209,18c.53,0,1.069-.617,1.527-.881q3.76-2.171,7.52-4.341s-3.822-2.231-8.913-5.189h0L40.9,6.175h0C35.515,3.043,30.748.279,30.26,0Z" transform="translate(52.255 30.409) rotate(180)" fill="#f45d57"/>
                                    <path id="Union_26" data-name="Union 26" d="M0,.2.137,48.358c.49.279,5.255,3.044,10.643,6.175h0l2.439,1.418c5.087,2.957,8.912,5.183,8.912,5.188q-.012-4.79-.026-9.579l-.015-4.845c0-1.461-.01-3.407-.014-4.867q-.02-7.313-.041-14.625l-.015-4.844Q22.009,17.586,22,12.8c0-1.039-3.831-4.077-8.917-7.033L10.64,4.348h0C6.129,1.727,2.058,0,.564,0,.272,0,.08.066,0,.2Z" transform="translate(22.131 78.768) rotate(180)" fill="#e34640"/>
                                    <path id="Path_2047" data-name="Path 2047" d="M1.607,41.017c.045,15.714.092,32.443.136,48.156l30.22-17.448c-.045-15.713-.092-32.442-.136-48.155L1.607,41.017" transform="translate(20.389 -10.608)" fill="#e34640"/>
                                 </g>
                              </g>
                              <g id="Group_541" data-name="Group 541" transform="translate(21.996 12.962)">
                                 <g id="Group_540" data-name="Group 540">
                                    <path id="Path_2048" data-name="Path 2048" d="M20.452,63.455l0-1.307-8.719,5.034,0,1.307L15.528,66.3l.019,6.6,1.13-.652-.019-6.6Zm-.008-2.761,0-1.307-8.719,5.034,0,1.307,8.719-5.034M30.363,48.44l-.051-18.119L16.834,38.1l.051,18.118,13.477-7.78M16.035,56.711l-.052-18.118L2.507,46.374l.051,18.118,13.477-7.781M27.111,31.464,27.1,28.073l-7.073,4.083.01,3.392,7.072-4.083M12.783,39.736l-.009-3.391L5.7,40.428l.01,3.392,7.072-4.083M0,39.269,31.982,20.805l.142,50.186L.142,89.456,0,39.269" transform="translate(-0.885 -22.326)" fill="#d6322c"/>
                                    <path id="Path_2049" data-name="Path 2049" d="M15.175,44.252l-.009-2.971L4.729,47.307l.009,2.971ZM3.2,45.89,16.68,38.109l.051,18.118L3.255,64.009,3.2,45.89" transform="translate(12.747 -30.113)" fill="#dbdcdc"/>
                                    <path id="Path_2050" data-name="Path 2050" d="M41.228,59.293l-.009-2.971L30.79,62.343l.008,2.971ZM29.256,60.931,42.733,53.15l.051,18.118L29.307,79.049l-.051-18.118" transform="translate(-27.634 -36.883)" fill="#dbdcdc"/>
                                    <path id="Path_2051" data-name="Path 2051" d="M9.115,38.1l7.072-4.083.01,3.391L9.125,41.494Z" transform="translate(10.029 -28.273)" fill="#fff"/>
                                    <path id="Path_2052" data-name="Path 2052" d="M35.168,53.145l7.072-4.083.01,3.392-7.072,4.083Z" transform="translate(-30.352 -35.043)" fill="#fff"/>
                                    <path id="Path_2053" data-name="Path 2053" d="M21.238,96l8.719-5.034,0,1.307L21.241,97.3Z" transform="translate(-10.401 -53.9)" fill="#fff"/>
                                    <path id="Path_2054" data-name="Path 2054" d="M21.224,101.016l8.719-5.034,0,1.307L26.152,99.48l-1.13.652-3.795,2.191Z" transform="translate(-10.379 -56.159)" fill="#fff"/>
                                    <path id="Path_2055" data-name="Path 2055" d="M28.089,102.994l1.13-.652.019,6.6-1.13.652Z" transform="translate(-13.446 -59.022)" fill="#fff"/>
                                    <path id="Path_2056" data-name="Path 2056" d="M32.579,65.465l9.9-5.714.007,2.368-9.9,5.714Z" transform="translate(-29.16 -39.853)" fill="#b4b4b5"/>
                                    <path id="Path_2057" data-name="Path 2057" d="M42.252,61.744l-.007-2.368-9.9,5.714.007,2.368Zm-10.167,3.2,10.429-6.021.009,2.971-10.43,6.021-.008-2.971" transform="translate(-28.929 -39.479)" fill="#888"/>
                                    <path id="Path_2058" data-name="Path 2058" d="M6.526,50.423l9.9-5.714.007,2.368-9.9,5.714Z" transform="translate(11.221 -33.084)" fill="#b4b4b5"/>
                                    <path id="Path_2059" data-name="Path 2059" d="M16.207,46.7,16.2,44.334,6.3,50.048l.007,2.368ZM6.032,49.9l10.437-6.026.008,2.971L6.04,52.874,6.032,49.9" transform="translate(11.444 -32.709)" fill="#888"/>
                                 </g>
                              </g>
                           </g>
                           <g id="Group_829" data-name="Group 829" transform="translate(25 4.967)">
                              <path id="Path_4745" data-name="Path 4745" d="M0,72.728,16.946,83l11.92-7.486-17-10.026Z" fill="#fff"/>
                              <path id="Path_4746" data-name="Path 4746" d="M10.43,66.365l1.564,8.973.039.223.367.021,15.022.84.908-.571-15.379-.858-1.616-9.18Z" fill="#afafaf"/>
                              <path id="Path_4747" data-name="Path 4747" d="M87.092,67.489l17,10.026L92.172,85,75.227,74.728Z" fill="#fff"/>
                              <path id="Path_4748" data-name="Path 4748" d="M85.658,68.365l1.564,8.971.039.224.368.021,15.022.84.909-.571-15.381-.858-1.616-9.179Z" fill="#afafaf"/>
                              <path id="Path_4749" data-name="Path 4749" d="M89.393,79.541l15.7,3.939L112.177,67.3,96.793,63.5Z" fill="#fff"/>
                              <path id="Path_4750" data-name="Path 4750" d="M102.74,73.825,90.1,79.719l1.2.3,12.333-5.759.3-.139-.128-.247-5.141-9.914-1.181-.291Z" fill="#afafaf"/>
                              <path id="Path_4751" data-name="Path 4751" d="M35.7,85l24.1,3.335-3.755,11.3-24.41-3.455Z" fill="#fff"/>
                              <path id="Path_4752" data-name="Path 4752" d="M35.212,86.349l9.553,7.9.237.2.346-.114,14-4.635.286-.858L45.3,93.581,35.521,85.5Z" fill="#afafaf"/>
                              <path id="Path_4753" data-name="Path 4753" d="M43.7,0,39.638,11.174,64.047,14.63,67.8,3.335Z" fill="#fff"/>
                              <path id="Path_4754" data-name="Path 4754" d="M43.213,1.349l9.553,7.9.237.2.345-.114,14-4.636.285-.858L53.3,8.58,43.522.5Z" fill="#afafaf"/>
                              <path id="Path_4755" data-name="Path 4755" d="M50.721,96.5,55,107.859l24.134-6.482-4.582-11.23Z" fill="#fff"/>
                              <path id="Path_4756" data-name="Path 4756" d="M50.722,96.5l23.827-6.353,4.584,11.23L55,107.859Zm23.549-7.035-23.81,6.344-.958.256.259.691,4.264,11.364.267.711.973-.261,24.153-6.491.965-.259-.288-.7L75.5,89.893l-.279-.682Z" fill="#d7cec1"/>
                              <path id="Path_4757" data-name="Path 4757" d="M65.384,100.273,50.912,97.006l.325.864,14.14,3.2.349.079.227-.233L75.1,91.5l-.349-.855Z" fill="#afafaf"/>
                           </g>
                        </a>
                     </svg>
                     <svg id="email_2_active" class="email_f email_active"  data-name="Component 1 – 12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="126.968" viewBox="0 0 160 126.968">
                        <defs>
                           <clipPath id="clip-path">
                              <path id="Path_2039" data-name="Path 2039" d="M45.505,112.288c0,1.152-.8,2.341-2.39,3.258a11.451,11.451,0,0,1-5.572,1.374h-.049a9.739,9.739,0,0,1-4.774-1.126,3.318,3.318,0,0,1-1.928-2.76l-.144-50.787a3.316,3.316,0,0,0,1.928,2.76c2.742,1.593,7.4,1.484,10.4-.247,1.589-.917,2.394-2.106,2.391-3.258Z" transform="translate(-30.648 -61.502)" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-2">
                              <rect id="Rectangle_158" data-name="Rectangle 158" width="53.235" height="89.24" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-3">
                              <path id="Path_2060" data-name="Path 2060" d="M31.962,71.725,1.743,89.173C1.7,73.46,1.652,56.731,1.607,41.017L31.826,23.57c.044,15.714.092,32.442.136,48.155" transform="translate(-1.607 -23.57)" fill="#e34640"/>
                           </clipPath>
                        </defs>
                        <a xmlns:xlink="<?php echo home_url(); ?>/form/" class="email_click email_active" data-id="2">
                           <path id="Path_2414" data-name="Path 2414" d="M80,0,0,49.5,80,99l80-49.5Z" transform="translate(0 27.967)" fill="#d7cec1"/>
                           <g id="Group_623" data-name="Group 623" transform="translate(53.3)">
                              <g id="Group_537" data-name="Group 537" transform="translate(21.523 33.823)">
                                 <g id="Group_536" data-name="Group 536" transform="translate(0)">
                                    <path id="Path_2021" data-name="Path 2021" d="M57.4,62.858l.144,50.786c0,.02,0,.042,0,.063L57.4,62.921c0-.021,0-.042,0-.063" transform="translate(-57.4 -62.112)" fill="#1a1a1a"/>
                                    <path id="Path_2022" data-name="Path 2022" d="M57.315,62.973l.144,50.786a2.423,2.423,0,0,0,.047.411l-.144-50.786a2.423,2.423,0,0,1-.047-.412" transform="translate(-57.314 -62.164)" fill="#1a1a1a"/>
                                    <path id="Path_2023" data-name="Path 2023" d="M57.11,63.722l.144,50.786a2.563,2.563,0,0,0,.113.394l-.144-50.786a2.522,2.522,0,0,1-.113-.394" transform="translate(-57.062 -62.501)" fill="#1a1a1a"/>
                                    <path id="Path_2024" data-name="Path 2024" d="M56.778,64.439l.144,50.786a2.813,2.813,0,0,0,.183.391l-.144-50.786a2.753,2.753,0,0,1-.183-.39" transform="translate(-56.617 -62.824)" fill="#1a1a1a"/>
                                    <path id="Path_2025" data-name="Path 2025" d="M56.289,65.149l.144,50.786a3.081,3.081,0,0,0,.268.4l-.144-50.786a3.185,3.185,0,0,1-.268-.4" transform="translate(-55.945 -63.143)" fill="#1a1a1a"/>
                                    <path id="Path_2026" data-name="Path 2026" d="M55.536,65.874l.144,50.786a3.791,3.791,0,0,0,.414.445L55.95,66.32a3.883,3.883,0,0,1-.414-.446" transform="translate(-54.924 -63.47)" fill="#1a1a1a"/>
                                    <path id="Path_2027" data-name="Path 2027" d="M54.039,66.684l.144,50.786a5.055,5.055,0,0,0,.824.609l-.144-50.786a4.974,4.974,0,0,1-.824-.609" transform="translate(-53.013 -63.834)" fill="#1a1a1a"/>
                                    <path id="Path_2028" data-name="Path 2028" d="M51.277,67.792l.144,50.786.078.046a7.4,7.4,0,0,0,1.441.631L52.8,68.47a7.371,7.371,0,0,1-1.441-.631l-.078-.046" transform="translate(-49.427 -64.333)" fill="#1a1a1a"/>
                                    <path id="Path_2029" data-name="Path 2029" d="M49,69.024l.144,50.786a9.772,9.772,0,0,0,1.252.311l-.144-50.786A9.614,9.614,0,0,1,49,69.024" transform="translate(-45.633 -64.887)" fill="#1a1a1a"/>
                                    <path id="Path_2030" data-name="Path 2030" d="M47.384,69.59l.144,50.786q.436.078.889.123l-.144-50.785c-.3-.03-.6-.071-.89-.124" transform="translate(-42.764 -65.142)" fill="#1a1a1a"/>
                                    <path id="Path_2031" data-name="Path 2031" d="M45.952,69.816,46.1,120.6c.26.026.522.044.787.052L46.74,69.868c-.265-.009-.528-.026-.788-.052" transform="translate(-40.442 -65.244)" fill="#1a1a1a"/>
                                    <path id="Path_2032" data-name="Path 2032" d="M44.589,69.911l.144,50.786q.373.012.749,0l-.144-50.786c-.25.007-.5.006-.749,0" transform="translate(-38.292 -65.287)" fill="#1a1a1a"/>
                                    <path id="Path_2033" data-name="Path 2033" d="M43.25,69.885l.144,50.786q.368-.008.736-.04l-.144-50.785q-.368.03-.736.039" transform="translate(-36.204 -65.257)" fill="#1a1a1a"/>
                                    <path id="Path_2034" data-name="Path 2034" d="M41.9,69.777l.144,50.786q.374-.031.745-.083L42.64,69.694c-.247.035-.5.062-.745.083" transform="translate(-34.112 -65.189)" fill="#1a1a1a"/>
                                    <path id="Path_2035" data-name="Path 2035" d="M40.49,69.584l.144,50.786c.26-.038.517-.082.773-.134l-.144-50.787q-.383.08-.773.135" transform="translate(-31.962 -65.079)" fill="#1a1a1a"/>
                                    <path id="Path_2036" data-name="Path 2036" d="M38.955,69.28l.144,50.787c.285-.059.567-.129.844-.207L39.8,69.073c-.276.079-.558.148-.844.207" transform="translate(-29.654 -64.909)" fill="#1a1a1a"/>
                                    <path id="Path_2037" data-name="Path 2037" d="M37.162,68.8l.144,50.786a10.383,10.383,0,0,0,.986-.334l-.144-50.786c-.318.126-.648.237-.986.334" transform="translate(-27.017 -64.636)" fill="#1a1a1a"/>
                                    <path id="Path_2038" data-name="Path 2038" d="M30.648,65.332l.144,50.786a8.924,8.924,0,0,0,1.192-.571c1.589-.917,2.393-2.106,2.39-3.258L34.231,61.5c0,1.152-.8,2.341-2.391,3.258a9,9,0,0,1-1.192.572" transform="translate(-19.517 -61.502)" fill="#1a1a1a"/>
                                 </g>
                              </g>
                              <g id="Group_539" data-name="Group 539">
                                 <g id="Group_538" data-name="Group 538">
                                    <path id="Path_2040" data-name="Path 2040" d="M33.3,55.807c-3,1.731-3.207,4.425-.465,6.019s7.4,1.484,10.4-.247,3.2-4.428.461-6.021-7.393-1.482-10.392.25" transform="translate(-9.386 -24.497)" fill="#1a1a1a"/>
                                    <path id="Path_2041" data-name="Path 2041" d="M1.532,128.7l30.38-17.539-.041-.024L1.652,128.581a.318.318,0,0,1-.12.115" transform="translate(20.481 -50.016)" fill="#e34640"/>
                                    <path id="Path_2042" data-name="Path 2042" d="M1.71,71.615q-.027-9.647-.055-19.293l-.014-4.878q-.034-12.086-.068-24.171a.322.322,0,0,1-.04.163l.136,48.155.041.024" transform="translate(50.682 -10.474)" fill="#e34640"/>
                                    <path id="Union_27" data-name="Union 27" d="M.04,17.447c-.487.842,3.488,4.065,8.876,7.2l2.439,1.417L23.064,19.3,11.357,26.06c5.089,2.959,9.622,4.778,10.519,4.26l6-3.463,6.115-3.531,3.076-1.776,3.076-1.777L43.209,18c.53,0,1.069-.617,1.527-.881q3.76-2.171,7.52-4.341s-3.822-2.231-8.913-5.189h0L40.9,6.175h0C35.515,3.043,30.748.279,30.26,0Z" transform="translate(52.255 30.409) rotate(180)" fill="#f45d57"/>
                                    <path id="Union_26" data-name="Union 26" d="M0,.2.137,48.358c.49.279,5.255,3.044,10.643,6.175h0l2.439,1.418c5.087,2.957,8.912,5.183,8.912,5.188q-.012-4.79-.026-9.579l-.015-4.845c0-1.461-.01-3.407-.014-4.867q-.02-7.313-.041-14.625l-.015-4.844Q22.009,17.586,22,12.8c0-1.039-3.831-4.077-8.917-7.033L10.64,4.348h0C6.129,1.727,2.058,0,.564,0,.272,0,.08.066,0,.2Z" transform="translate(22.131 78.768) rotate(180)" fill="#e34640"/>
                                    <path id="Path_2047" data-name="Path 2047" d="M1.607,41.017c.045,15.714.092,32.443.136,48.156l30.22-17.448c-.045-15.713-.092-32.442-.136-48.155L1.607,41.017" transform="translate(20.389 -10.608)" fill="#e34640"/>
                                 </g>
                              </g>
                              <g id="Group_541" data-name="Group 541" transform="translate(21.996 12.962)">
                                 <g id="Group_540" data-name="Group 540">
                                    <path id="Path_2048" data-name="Path 2048" d="M20.452,63.455l0-1.307-8.719,5.034,0,1.307L15.528,66.3l.019,6.6,1.13-.652-.019-6.6Zm-.008-2.761,0-1.307-8.719,5.034,0,1.307,8.719-5.034M30.363,48.44l-.051-18.119L16.834,38.1l.051,18.118,13.477-7.78M16.035,56.711l-.052-18.118L2.507,46.374l.051,18.118,13.477-7.781M27.111,31.464,27.1,28.073l-7.073,4.083.01,3.392,7.072-4.083M12.783,39.736l-.009-3.391L5.7,40.428l.01,3.392,7.072-4.083M0,39.269,31.982,20.805l.142,50.186L.142,89.456,0,39.269" transform="translate(-0.885 -22.326)" fill="#d6322c"/>
                                    <path id="Path_2049" data-name="Path 2049" d="M15.175,44.252l-.009-2.971L4.729,47.307l.009,2.971ZM3.2,45.89,16.68,38.109l.051,18.118L3.255,64.009,3.2,45.89" transform="translate(12.747 -30.113)" fill="#dbdcdc"/>
                                    <path id="Path_2050" data-name="Path 2050" d="M41.228,59.293l-.009-2.971L30.79,62.343l.008,2.971ZM29.256,60.931,42.733,53.15l.051,18.118L29.307,79.049l-.051-18.118" transform="translate(-27.634 -36.883)" fill="#dbdcdc"/>
                                    <path id="Path_2051" data-name="Path 2051" d="M9.115,38.1l7.072-4.083.01,3.391L9.125,41.494Z" transform="translate(10.029 -28.273)" fill="#fff"/>
                                    <path id="Path_2052" data-name="Path 2052" d="M35.168,53.145l7.072-4.083.01,3.392-7.072,4.083Z" transform="translate(-30.352 -35.043)" fill="#fff"/>
                                    <path id="Path_2053" data-name="Path 2053" d="M21.238,96l8.719-5.034,0,1.307L21.241,97.3Z" transform="translate(-10.401 -53.9)" fill="#fff"/>
                                    <path id="Path_2054" data-name="Path 2054" d="M21.224,101.016l8.719-5.034,0,1.307L26.152,99.48l-1.13.652-3.795,2.191Z" transform="translate(-10.379 -56.159)" fill="#fff"/>
                                    <path id="Path_2055" data-name="Path 2055" d="M28.089,102.994l1.13-.652.019,6.6-1.13.652Z" transform="translate(-13.446 -59.022)" fill="#fff"/>
                                    <path id="Path_2056" data-name="Path 2056" d="M32.579,65.465l9.9-5.714.007,2.368-9.9,5.714Z" transform="translate(-29.16 -39.853)" fill="#b4b4b5"/>
                                    <path id="Path_2057" data-name="Path 2057" d="M42.252,61.744l-.007-2.368-9.9,5.714.007,2.368Zm-10.167,3.2,10.429-6.021.009,2.971-10.43,6.021-.008-2.971" transform="translate(-28.929 -39.479)" fill="#888"/>
                                    <path id="Path_2058" data-name="Path 2058" d="M6.526,50.423l9.9-5.714.007,2.368-9.9,5.714Z" transform="translate(11.221 -33.084)" fill="#b4b4b5"/>
                                    <path id="Path_2059" data-name="Path 2059" d="M16.207,46.7,16.2,44.334,6.3,50.048l.007,2.368ZM6.032,49.9l10.437-6.026.008,2.971L6.04,52.874,6.032,49.9" transform="translate(11.444 -32.709)" fill="#888"/>
                                 </g>
                              </g>
                           </g>
                           <g id="Group_829" data-name="Group 829" transform="translate(25 4.967)">
                              <path id="Path_4745" data-name="Path 4745" d="M0,72.728,16.946,83l11.92-7.486-17-10.026Z" fill="#fff"/>
                              <path id="Path_4746" data-name="Path 4746" d="M10.43,66.365l1.564,8.973.039.223.367.021,15.022.84.908-.571-15.379-.858-1.616-9.18Z" fill="#afafaf"/>
                              <path id="Path_4747" data-name="Path 4747" d="M87.092,67.489l17,10.026L92.172,85,75.227,74.728Z" fill="#fff"/>
                              <path id="Path_4748" data-name="Path 4748" d="M85.658,68.365l1.564,8.971.039.224.368.021,15.022.84.909-.571-15.381-.858-1.616-9.179Z" fill="#afafaf"/>
                              <path id="Path_4749" data-name="Path 4749" d="M89.393,79.541l15.7,3.939L112.177,67.3,96.793,63.5Z" fill="#fff"/>
                              <path id="Path_4750" data-name="Path 4750" d="M102.74,73.825,90.1,79.719l1.2.3,12.333-5.759.3-.139-.128-.247-5.141-9.914-1.181-.291Z" fill="#afafaf"/>
                              <path id="Path_4751" data-name="Path 4751" d="M35.7,85l24.1,3.335-3.755,11.3-24.41-3.455Z" fill="#fff"/>
                              <path id="Path_4752" data-name="Path 4752" d="M35.212,86.349l9.553,7.9.237.2.346-.114,14-4.635.286-.858L45.3,93.581,35.521,85.5Z" fill="#afafaf"/>
                              <path id="Path_4753" data-name="Path 4753" d="M43.7,0,39.638,11.174,64.047,14.63,67.8,3.335Z" fill="#fff"/>
                              <path id="Path_4754" data-name="Path 4754" d="M43.213,1.349l9.553,7.9.237.2.345-.114,14-4.636.285-.858L53.3,8.58,43.522.5Z" fill="#afafaf"/>
                              <path id="Path_4755" data-name="Path 4755" d="M50.721,96.5,55,107.859l24.134-6.482-4.582-11.23Z" fill="#fff"/>
                              <path id="Path_4756" data-name="Path 4756" d="M50.722,96.5l23.827-6.353,4.584,11.23L55,107.859Zm23.549-7.035-23.81,6.344-.958.256.259.691,4.264,11.364.267.711.973-.261,24.153-6.491.965-.259-.288-.7L75.5,89.893l-.279-.682Z" fill="#d7cec1"/>
                              <path id="Path_4757" data-name="Path 4757" d="M65.384,100.273,50.912,97.006l.325.864,14.14,3.2.349.079.227-.233L75.1,91.5l-.349-.855Z" fill="#afafaf"/>
                           </g>
                        </a>
                     </svg>
                  </div>
                  <div class="form_email email_3" id="email_3">
                     <div class="c-firework"></div>
                     <p class="info_email">
                        <a href="<?php echo home_url(); ?>/form/" aria-label="お問い合わせ" ><span class="ic">お問い合わせ</span></a>
                     </p>
                     <svg id="email_1" class="email_f email" data-name="Group 3184" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="126.967" viewBox="0 0 160 126.967">
                        <defs>
                           <clipPath id="clip-path">
                              <path id="Path_2039" data-name="Path 2039" d="M30.648,112.288c0,1.152.8,2.341,2.39,3.258a11.451,11.451,0,0,0,5.572,1.374h.049a9.739,9.739,0,0,0,4.774-1.126,3.318,3.318,0,0,0,1.928-2.76l.144-50.787a3.316,3.316,0,0,1-1.928,2.76c-2.742,1.593-7.4,1.484-10.4-.247-1.589-.917-2.394-2.106-2.391-3.258Z" transform="translate(-30.648 -61.502)" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-2">
                              <rect id="Rectangle_158" data-name="Rectangle 158" width="53.235" height="89.24" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-3">
                              <path id="Path_2060" data-name="Path 2060" d="M1.607,71.725l30.22,17.448c.045-15.713.091-32.442.136-48.156L1.743,23.57C1.7,39.284,1.652,56.012,1.607,71.725" transform="translate(-1.607 -23.57)" fill="#e34640"/>
                           </clipPath>
                        </defs>
                        <a xmlns:xlink="<?php echo home_url(); ?>/form/" class="email_click email" data-id="3">
                           <path id="Path_2414" data-name="Path 2414" d="M80,0,0,49.5,80,99l80-49.5Z" transform="translate(0 27.967)" fill="#d7cec1"/>
                           <g id="Group_623" data-name="Group 623" transform="translate(53.301)">
                              <g id="Group_537" data-name="Group 537" transform="translate(16.855 33.823)">
                                 <g id="Group_536" data-name="Group 536" transform="translate(0)">
                                    <path id="Path_2021" data-name="Path 2021" d="M57.545,62.858,57.4,113.644c0,.02,0,.042,0,.063l.144-50.786c0-.021,0-.042,0-.063" transform="translate(-42.688 -62.112)" fill="#1a1a1a"/>
                                    <path id="Path_2022" data-name="Path 2022" d="M57.506,62.973l-.144,50.786a2.423,2.423,0,0,1-.047.411l.144-50.786a2.423,2.423,0,0,0,.047-.412" transform="translate(-42.65 -62.164)" fill="#1a1a1a"/>
                                    <path id="Path_2023" data-name="Path 2023" d="M57.367,63.722l-.144,50.786a2.563,2.563,0,0,1-.113.394l.144-50.786a2.522,2.522,0,0,0,.113-.394" transform="translate(-42.557 -62.501)" fill="#1a1a1a"/>
                                    <path id="Path_2024" data-name="Path 2024" d="M57.1,64.439l-.144,50.786a2.813,2.813,0,0,1-.183.391l.144-50.786a2.753,2.753,0,0,0,.183-.39" transform="translate(-42.408 -62.824)" fill="#1a1a1a"/>
                                    <path id="Path_2025" data-name="Path 2025" d="M56.7,65.149l-.144,50.786a3.081,3.081,0,0,1-.268.4l.144-50.786a3.185,3.185,0,0,0,.268-.4" transform="translate(-42.188 -63.143)" fill="#1a1a1a"/>
                                    <path id="Path_2026" data-name="Path 2026" d="M56.094,65.874,55.95,116.66a3.791,3.791,0,0,1-.414.445l.145-50.786a3.883,3.883,0,0,0,.414-.446" transform="translate(-41.849 -63.47)" fill="#1a1a1a"/>
                                    <path id="Path_2027" data-name="Path 2027" d="M55.007,66.684l-.144,50.786a5.055,5.055,0,0,1-.824.609l.144-50.786a4.974,4.974,0,0,0,.824-.609" transform="translate(-41.175 -63.834)" fill="#1a1a1a"/>
                                    <path id="Path_2028" data-name="Path 2028" d="M52.939,67.792,52.8,118.578l-.078.046a7.4,7.4,0,0,1-1.441.631l.144-50.786a7.371,7.371,0,0,0,1.441-.631l.078-.046" transform="translate(-39.932 -64.333)" fill="#1a1a1a"/>
                                    <path id="Path_2029" data-name="Path 2029" d="M50.4,69.024l-.144,50.786a9.772,9.772,0,0,1-1.252.311l.144-50.786a9.614,9.614,0,0,0,1.252-.311" transform="translate(-38.908 -64.887)" fill="#1a1a1a"/>
                                    <path id="Path_2030" data-name="Path 2030" d="M48.417,69.59l-.144,50.786q-.436.078-.889.123l.144-50.785c.3-.03.6-.071.89-.124" transform="translate(-38.18 -65.142)" fill="#1a1a1a"/>
                                    <path id="Path_2031" data-name="Path 2031" d="M46.883,69.816,46.739,120.6c-.26.026-.522.044-.787.052L46.1,69.868c.265-.009.528-.026.788-.052" transform="translate(-37.536 -65.244)" fill="#1a1a1a"/>
                                    <path id="Path_2032" data-name="Path 2032" d="M45.482,69.911,45.338,120.7q-.373.012-.749,0l.144-50.786c.25.007.5.006.749,0" transform="translate(-36.922 -65.287)" fill="#1a1a1a"/>
                                    <path id="Path_2033" data-name="Path 2033" d="M44.13,69.885l-.144,50.786q-.368-.008-.736-.04l.144-50.785q.368.03.736.039" transform="translate(-36.32 -65.257)" fill="#1a1a1a"/>
                                    <path id="Path_2034" data-name="Path 2034" d="M42.784,69.777l-.144,50.786q-.374-.031-.745-.083l.144-50.786c.247.035.5.062.745.083" transform="translate(-35.71 -65.189)" fill="#1a1a1a"/>
                                    <path id="Path_2035" data-name="Path 2035" d="M41.407,69.584l-.144,50.786c-.26-.038-.517-.082-.773-.134l.144-50.787q.383.08.773.135" transform="translate(-35.077 -65.079)" fill="#1a1a1a"/>
                                    <path id="Path_2036" data-name="Path 2036" d="M39.943,69.28,39.8,120.067c-.285-.059-.567-.129-.844-.207L39.1,69.073c.276.079.558.148.844.207" transform="translate(-34.387 -64.909)" fill="#1a1a1a"/>
                                    <path id="Path_2037" data-name="Path 2037" d="M38.292,68.8l-.144,50.786a10.383,10.383,0,0,1-.986-.334l.144-50.786c.318.126.648.237.986.334" transform="translate(-33.58 -64.636)" fill="#1a1a1a"/>
                                    <path id="Path_2038" data-name="Path 2038" d="M34.374,65.332l-.144,50.786a8.924,8.924,0,0,1-1.192-.571c-1.589-.917-2.393-2.106-2.39-3.258L30.792,61.5c0,1.152.8,2.341,2.391,3.258a9,9,0,0,0,1.192.572" transform="translate(-30.648 -61.502)" fill="#1a1a1a"/>
                                 </g>
                              </g>
                              <g id="Group_539" data-name="Group 539">
                                 <g id="Group_538" data-name="Group 538">
                                    <path id="Path_2040" data-name="Path 2040" d="M43.231,55.807c3,1.731,3.207,4.425.465,6.019s-7.4,1.484-10.4-.247-3.2-4.428-.461-6.021,7.393-1.482,10.392.25" transform="translate(-13.911 -24.497)" fill="#1a1a1a"/>
                                    <path id="Path_2041" data-name="Path 2041" d="M31.912,128.7,1.532,111.157l.041-.024,30.22,17.448a.318.318,0,0,0,.12.115" transform="translate(-0.689 -50.016)" fill="#e34640"/>
                                    <path id="Path_2042" data-name="Path 2042" d="M1.533,71.615q.027-9.647.055-19.293L1.6,47.444q.034-12.086.068-24.171a.322.322,0,0,0,.04.163L1.574,71.591l-.041.024" transform="translate(-0.69 -10.474)" fill="#e34640"/>
                                    <path id="Union_27" data-name="Union 27" d="M.04,12.962c-.487-.842,3.488-4.065,8.876-7.2l2.439-1.417,11.708,6.759L11.357,4.348C16.447,1.389,20.979-.43,21.876.088l6,3.463L33.99,7.082l3.076,1.776,3.076,1.777,3.067,1.77c.53,0,1.069.617,1.527.881q3.76,2.171,7.52,4.341s-3.822,2.231-8.913,5.189h0L40.9,24.233h0c-5.389,3.132-10.155,5.9-10.644,6.175Z" transform="translate(0.98 0.001)" fill="#f45d57"/>
                                    <path id="Union_26" data-name="Union 26" d="M0,60.936.137,12.781C.627,12.5,5.392,9.737,10.78,6.606h0l2.439-1.418C18.306,2.231,22.131,0,22.131,0q-.012,4.79-.026,9.579l-.015,4.845c0,1.461-.01,3.407-.014,4.867q-.02,7.313-.041,14.625l-.015,4.844q-.012,4.792-.026,9.581c0,1.039-3.831,4.077-8.917,7.033L10.64,56.791h0C6.129,59.412,2.058,61.139.564,61.139.272,61.14.08,61.074,0,60.936Z" transform="translate(31.104 17.628)" fill="#d6322c"/>
                                    <path id="Path_2047" data-name="Path 2047" d="M31.963,41.017c-.045,15.714-.092,32.443-.136,48.156L1.607,71.725c.045-15.713.092-32.442.136-48.155l30.22,17.447" transform="translate(-0.723 -10.608)" fill="#e34640"/>
                                 </g>
                              </g>
                              <g id="Group_541" data-name="Group 541" transform="translate(0.884 12.962)">
                                 <g id="Group_540" data-name="Group 540">
                                    <path id="Path_2048" data-name="Path 2048" d="M11.672,63.455l0-1.307,8.719,5.034,0,1.307L16.6,66.3l-.019,6.6-1.13-.652.019-6.6Zm.008-2.761,0-1.307L20.4,64.422l0,1.307L11.68,60.695M1.761,48.44l.051-18.119L15.29,38.1,15.238,56.22,1.761,48.44m14.328,8.271.052-18.118,13.476,7.781-.051,18.118L16.089,56.711M5.013,31.464l.009-3.392L12.1,32.156l-.01,3.392L5.013,31.464m14.328,8.272.009-3.391,7.073,4.083-.01,3.392-7.072-4.083m12.783-.467L.142,20.805,0,70.991,31.982,89.456l.142-50.187" transform="translate(-0.884 -22.326)" fill="#e34640"/>
                                    <path id="Path_2049" data-name="Path 2049" d="M4.759,44.252l.009-2.971,10.437,6.026L15.2,50.278ZM16.731,45.89,3.254,38.109,3.2,56.227l13.476,7.781.052-18.119" transform="translate(-2.325 -30.113)" fill="#dbdcdc"/>
                                    <path id="Path_2050" data-name="Path 2050" d="M30.812,59.293l.009-2.971L41.25,62.343l-.008,2.971Zm11.972,1.638L29.307,53.15l-.051,18.118,13.477,7.781.051-18.118" transform="translate(-14.051 -36.883)" fill="#dbdcdc"/>
                                    <path id="Path_2051" data-name="Path 2051" d="M16.2,38.1,9.125,34.019l-.01,3.391,7.072,4.083Z" transform="translate(-4.986 -28.273)" fill="#fff"/>
                                    <path id="Path_2052" data-name="Path 2052" d="M42.251,53.145l-7.072-4.083-.01,3.392,7.072,4.083Z" transform="translate(-16.711 -35.043)" fill="#fff"/>
                                    <path id="Path_2053" data-name="Path 2053" d="M29.96,96l-8.719-5.034,0,1.307L29.956,97.3Z" transform="translate(-10.442 -53.9)" fill="#fff"/>
                                    <path id="Path_2054" data-name="Path 2054" d="M29.946,101.016l-8.719-5.034,0,1.307,3.795,2.191,1.13.652,3.795,2.191Z" transform="translate(-10.435 -56.159)" fill="#fff"/>
                                    <path id="Path_2055" data-name="Path 2055" d="M29.237,102.994l-1.13-.652-.019,6.6,1.13.652Z" transform="translate(-13.525 -59.022)" fill="#fff"/>
                                    <path id="Path_2056" data-name="Path 2056" d="M42.482,65.465l-9.9-5.714-.007,2.368,9.9,5.714Z" transform="translate(-15.546 -39.853)" fill="#b4b4b5"/>
                                    <path id="Path_2057" data-name="Path 2057" d="M32.356,61.744l.007-2.368,9.9,5.714-.007,2.368Zm10.167,3.2L32.094,58.919l-.009,2.971,10.43,6.021.008-2.971" transform="translate(-15.324 -39.479)" fill="#888"/>
                                    <path id="Path_2058" data-name="Path 2058" d="M16.429,50.423l-9.9-5.714-.007,2.368,9.9,5.714Z" transform="translate(-3.821 -33.084)" fill="#b4b4b5"/>
                                    <path id="Path_2059" data-name="Path 2059" d="M6.3,46.7l.007-2.368,9.9,5.714L16.2,52.416Zm10.175,3.2L6.04,43.877l-.008,2.971,10.437,6.026.008-2.971" transform="translate(-3.598 -32.709)" fill="#888"/>
                                 </g>
                              </g>
                           </g>
                        </a>
                     </svg>
                     <svg id="email_1_h" class="email_f email_hover" data-name="Component 1 – 12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="126.968" viewBox="0 0 160 126.968">
                        <defs>
                           <clipPath id="clip-path">
                              <path id="Path_2039" data-name="Path 2039" d="M30.648,112.288c0,1.152.8,2.341,2.39,3.258a11.451,11.451,0,0,0,5.572,1.374h.049a9.739,9.739,0,0,0,4.774-1.126,3.318,3.318,0,0,0,1.928-2.76l.144-50.787a3.316,3.316,0,0,1-1.928,2.76c-2.742,1.593-7.4,1.484-10.4-.247-1.589-.917-2.394-2.106-2.391-3.258Z" transform="translate(-30.648 -61.502)" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-2">
                              <rect id="Rectangle_158" data-name="Rectangle 158" width="53.235" height="89.24" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-3">
                              <path id="Path_2060" data-name="Path 2060" d="M1.607,71.725l30.22,17.448c.045-15.713.091-32.442.136-48.156L1.743,23.57C1.7,39.284,1.652,56.012,1.607,71.725" transform="translate(-1.607 -23.57)" fill="#e34640"/>
                           </clipPath>
                        </defs>
                        <a xmlns:xlink="<?php echo home_url(); ?>/form/" class="email_click email_hover" data-id="3">
                           <path id="Path_2414" data-name="Path 2414" d="M80,0,0,49.5,80,99l80-49.5Z" transform="translate(0 27.967)" fill="#d7cec1"/>
                           <g id="Group_831" data-name="Group 831" transform="translate(53.3)">
                              <g id="Group_537" data-name="Group 537" transform="translate(16.855 33.823)">
                                 <g id="Group_536" data-name="Group 536" transform="translate(0)">
                                    <path id="Path_2021" data-name="Path 2021" d="M57.545,62.858,57.4,113.644c0,.02,0,.042,0,.063l.144-50.786c0-.021,0-.042,0-.063" transform="translate(-42.688 -62.112)" fill="#1a1a1a"/>
                                    <path id="Path_2022" data-name="Path 2022" d="M57.506,62.973l-.144,50.786a2.423,2.423,0,0,1-.047.411l.144-50.786a2.423,2.423,0,0,0,.047-.412" transform="translate(-42.65 -62.164)" fill="#1a1a1a"/>
                                    <path id="Path_2023" data-name="Path 2023" d="M57.367,63.722l-.144,50.786a2.563,2.563,0,0,1-.113.394l.144-50.786a2.522,2.522,0,0,0,.113-.394" transform="translate(-42.557 -62.501)" fill="#1a1a1a"/>
                                    <path id="Path_2024" data-name="Path 2024" d="M57.1,64.439l-.144,50.786a2.813,2.813,0,0,1-.183.391l.144-50.786a2.753,2.753,0,0,0,.183-.39" transform="translate(-42.408 -62.824)" fill="#1a1a1a"/>
                                    <path id="Path_2025" data-name="Path 2025" d="M56.7,65.149l-.144,50.786a3.081,3.081,0,0,1-.268.4l.144-50.786a3.185,3.185,0,0,0,.268-.4" transform="translate(-42.188 -63.143)" fill="#1a1a1a"/>
                                    <path id="Path_2026" data-name="Path 2026" d="M56.094,65.874,55.95,116.66a3.791,3.791,0,0,1-.414.445l.145-50.786a3.883,3.883,0,0,0,.414-.446" transform="translate(-41.849 -63.47)" fill="#1a1a1a"/>
                                    <path id="Path_2027" data-name="Path 2027" d="M55.007,66.684l-.144,50.786a5.055,5.055,0,0,1-.824.609l.144-50.786a4.974,4.974,0,0,0,.824-.609" transform="translate(-41.175 -63.834)" fill="#1a1a1a"/>
                                    <path id="Path_2028" data-name="Path 2028" d="M52.939,67.792,52.8,118.578l-.078.046a7.4,7.4,0,0,1-1.441.631l.144-50.786a7.371,7.371,0,0,0,1.441-.631l.078-.046" transform="translate(-39.932 -64.333)" fill="#1a1a1a"/>
                                    <path id="Path_2029" data-name="Path 2029" d="M50.4,69.024l-.144,50.786a9.772,9.772,0,0,1-1.252.311l.144-50.786a9.614,9.614,0,0,0,1.252-.311" transform="translate(-38.908 -64.887)" fill="#1a1a1a"/>
                                    <path id="Path_2030" data-name="Path 2030" d="M48.417,69.59l-.144,50.786q-.436.078-.889.123l.144-50.785c.3-.03.6-.071.89-.124" transform="translate(-38.18 -65.142)" fill="#1a1a1a"/>
                                    <path id="Path_2031" data-name="Path 2031" d="M46.883,69.816,46.739,120.6c-.26.026-.522.044-.787.052L46.1,69.868c.265-.009.528-.026.788-.052" transform="translate(-37.536 -65.244)" fill="#1a1a1a"/>
                                    <path id="Path_2032" data-name="Path 2032" d="M45.482,69.911,45.338,120.7q-.373.012-.749,0l.144-50.786c.25.007.5.006.749,0" transform="translate(-36.922 -65.287)" fill="#1a1a1a"/>
                                    <path id="Path_2033" data-name="Path 2033" d="M44.13,69.885l-.144,50.786q-.368-.008-.736-.04l.144-50.785q.368.03.736.039" transform="translate(-36.32 -65.257)" fill="#1a1a1a"/>
                                    <path id="Path_2034" data-name="Path 2034" d="M42.784,69.777l-.144,50.786q-.374-.031-.745-.083l.144-50.786c.247.035.5.062.745.083" transform="translate(-35.71 -65.189)" fill="#1a1a1a"/>
                                    <path id="Path_2035" data-name="Path 2035" d="M41.407,69.584l-.144,50.786c-.26-.038-.517-.082-.773-.134l.144-50.787q.383.08.773.135" transform="translate(-35.077 -65.079)" fill="#1a1a1a"/>
                                    <path id="Path_2036" data-name="Path 2036" d="M39.943,69.28,39.8,120.067c-.285-.059-.567-.129-.844-.207L39.1,69.073c.276.079.558.148.844.207" transform="translate(-34.387 -64.909)" fill="#1a1a1a"/>
                                    <path id="Path_2037" data-name="Path 2037" d="M38.292,68.8l-.144,50.786a10.383,10.383,0,0,1-.986-.334l.144-50.786c.318.126.648.237.986.334" transform="translate(-33.58 -64.636)" fill="#1a1a1a"/>
                                    <path id="Path_2038" data-name="Path 2038" d="M34.374,65.332l-.144,50.786a8.924,8.924,0,0,1-1.192-.571c-1.589-.917-2.393-2.106-2.39-3.258L30.792,61.5c0,1.152.8,2.341,2.391,3.258a9,9,0,0,0,1.192.572" transform="translate(-30.648 -61.502)" fill="#1a1a1a"/>
                                 </g>
                              </g>
                              <g id="Group_539" data-name="Group 539">
                                 <g id="Group_538" data-name="Group 538">
                                    <path id="Path_2040" data-name="Path 2040" d="M43.231,55.807c3,1.731,3.207,4.425.465,6.019s-7.4,1.484-10.4-.247-3.2-4.428-.461-6.021,7.393-1.482,10.392.25" transform="translate(-13.911 -24.497)" fill="#1a1a1a"/>
                                    <path id="Path_2041" data-name="Path 2041" d="M31.912,128.7,1.532,111.157l.041-.024,30.22,17.448a.318.318,0,0,0,.12.115" transform="translate(-0.689 -50.016)" fill="#e34640"/>
                                    <path id="Path_2042" data-name="Path 2042" d="M1.533,71.615q.027-9.647.055-19.293L1.6,47.444q.034-12.086.068-24.171a.322.322,0,0,0,.04.163L1.574,71.591l-.041.024" transform="translate(-0.69 -10.474)" fill="#e34640"/>
                                    <path id="Union_27" data-name="Union 27" d="M.04,12.962c-.487-.842,3.488-4.065,8.876-7.2l2.439-1.417,11.708,6.759L11.357,4.348C16.447,1.389,20.979-.43,21.876.088l6,3.463L33.99,7.082l3.076,1.776,3.076,1.777,3.067,1.77c.53,0,1.069.617,1.527.881q3.76,2.171,7.52,4.341s-3.822,2.231-8.913,5.189h0L40.9,24.233h0c-5.389,3.132-10.155,5.9-10.644,6.175Z" transform="translate(0.98 0.001)" fill="#f45d57"/>
                                    <path id="Union_26" data-name="Union 26" d="M0,60.936.137,12.781C.627,12.5,5.392,9.737,10.78,6.606h0l2.439-1.418C18.306,2.231,22.131,0,22.131,0q-.012,4.79-.026,9.579l-.015,4.845c0,1.461-.01,3.407-.014,4.867q-.02,7.313-.041,14.625l-.015,4.844q-.012,4.792-.026,9.581c0,1.039-3.831,4.077-8.917,7.033L10.64,56.791h0C6.129,59.412,2.058,61.139.564,61.139.272,61.14.08,61.074,0,60.936Z" transform="translate(31.104 17.628)" fill="#d6322c"/>
                                    <path id="Path_2047" data-name="Path 2047" d="M31.963,41.017c-.045,15.714-.092,32.443-.136,48.156L1.607,71.725c.045-15.713.092-32.442.136-48.155l30.22,17.447" transform="translate(-0.723 -10.608)" fill="#e34640"/>
                                 </g>
                              </g>
                              <g id="Group_541" data-name="Group 541" transform="translate(0.884 12.962)">
                                 <g id="Group_540" data-name="Group 540">
                                    <path id="Path_2048" data-name="Path 2048" d="M11.672,63.455l0-1.307,8.719,5.034,0,1.307L16.6,66.3l-.019,6.6-1.13-.652.019-6.6Zm.008-2.761,0-1.307L20.4,64.422l0,1.307L11.68,60.695M1.761,48.44l.051-18.119L15.29,38.1,15.238,56.22,1.761,48.44m14.328,8.271.052-18.118,13.476,7.781-.051,18.118L16.089,56.711M5.013,31.464l.009-3.392L12.1,32.156l-.01,3.392L5.013,31.464m14.328,8.272.009-3.391,7.073,4.083-.01,3.392-7.072-4.083m12.783-.467L.142,20.805,0,70.991,31.982,89.456l.142-50.187" transform="translate(-0.884 -22.326)" fill="#e34640"/>
                                    <path id="Path_2049" data-name="Path 2049" d="M4.759,44.252l.009-2.971,10.437,6.026L15.2,50.278ZM16.731,45.89,3.254,38.109,3.2,56.227l13.476,7.781.052-18.119" transform="translate(-2.325 -30.113)" fill="#dbdcdc"/>
                                    <path id="Path_2050" data-name="Path 2050" d="M30.812,59.293l.009-2.971L41.25,62.343l-.008,2.971Zm11.972,1.638L29.307,53.15l-.051,18.118,13.477,7.781.051-18.118" transform="translate(-14.051 -36.883)" fill="#dbdcdc"/>
                                    <path id="Path_2051" data-name="Path 2051" d="M16.2,38.1,9.125,34.019l-.01,3.391,7.072,4.083Z" transform="translate(-4.986 -28.273)" fill="#fff"/>
                                    <path id="Path_2052" data-name="Path 2052" d="M42.251,53.145l-7.072-4.083-.01,3.392,7.072,4.083Z" transform="translate(-16.711 -35.043)" fill="#fff"/>
                                    <path id="Path_2053" data-name="Path 2053" d="M29.96,96l-8.719-5.034,0,1.307L29.956,97.3Z" transform="translate(-10.442 -53.9)" fill="#fff"/>
                                    <path id="Path_2054" data-name="Path 2054" d="M29.946,101.016l-8.719-5.034,0,1.307,3.795,2.191,1.13.652,3.795,2.191Z" transform="translate(-10.435 -56.159)" fill="#fff"/>
                                    <path id="Path_2055" data-name="Path 2055" d="M29.237,102.994l-1.13-.652-.019,6.6,1.13.652Z" transform="translate(-13.525 -59.022)" fill="#fff"/>
                                    <path id="Path_2056" data-name="Path 2056" d="M42.482,65.465l-9.9-5.714-.007,2.368,9.9,5.714Z" transform="translate(-15.546 -39.853)" fill="#b4b4b5"/>
                                    <path id="Path_2057" data-name="Path 2057" d="M32.356,61.744l.007-2.368,9.9,5.714-.007,2.368Zm10.167,3.2L32.094,58.919l-.009,2.971,10.43,6.021.008-2.971" transform="translate(-15.324 -39.479)" fill="#888"/>
                                    <path id="Path_2058" data-name="Path 2058" d="M16.429,50.423l-9.9-5.714-.007,2.368,9.9,5.714Z" transform="translate(-3.821 -33.084)" fill="#b4b4b5"/>
                                    <path id="Path_2059" data-name="Path 2059" d="M6.3,46.7l.007-2.368,9.9,5.714L16.2,52.416Zm10.175,3.2L6.04,43.877l-.008,2.971,10.437,6.026.008-2.971" transform="translate(-3.598 -32.709)" fill="#888"/>
                                 </g>
                              </g>
                           </g>
                           <g id="Group_829" data-name="Group 829" transform="translate(25 4.967)">
                              <path id="Path_4745" data-name="Path 4745" d="M0,72.728,16.946,83l11.92-7.486-17-10.026Z" fill="#fff"/>
                              <path id="Path_4746" data-name="Path 4746" d="M10.43,66.365l1.564,8.973.039.223.367.021,15.022.84.908-.571-15.379-.858-1.616-9.18Z" fill="#afafaf"/>
                              <path id="Path_4747" data-name="Path 4747" d="M87.092,67.489l17,10.026L92.172,85,75.227,74.728Z" fill="#fff"/>
                              <path id="Path_4748" data-name="Path 4748" d="M85.658,68.365l1.564,8.971.039.224.368.021,15.022.84.909-.571-15.381-.858-1.616-9.179Z" fill="#afafaf"/>
                              <path id="Path_4749" data-name="Path 4749" d="M89.393,79.541l15.7,3.939L112.177,67.3,96.793,63.5Z" fill="#fff"/>
                              <path id="Path_4750" data-name="Path 4750" d="M102.74,73.825,90.1,79.719l1.2.3,12.333-5.759.3-.139-.128-.247-5.141-9.914-1.181-.291Z" fill="#afafaf"/>
                              <path id="Path_4751" data-name="Path 4751" d="M35.7,85l24.1,3.335-3.755,11.3-24.41-3.455Z" fill="#fff"/>
                              <path id="Path_4752" data-name="Path 4752" d="M35.212,86.349l9.553,7.9.237.2.346-.114,14-4.635.286-.858L45.3,93.581,35.521,85.5Z" fill="#afafaf"/>
                              <path id="Path_4753" data-name="Path 4753" d="M43.7,0,39.638,11.174,64.047,14.63,67.8,3.335Z" fill="#fff"/>
                              <path id="Path_4754" data-name="Path 4754" d="M43.213,1.349l9.553,7.9.237.2.345-.114,14-4.636.285-.858L53.3,8.58,43.522.5Z" fill="#afafaf"/>
                              <path id="Path_4755" data-name="Path 4755" d="M50.721,96.5,55,107.859l24.134-6.482-4.582-11.23Z" fill="#fff"/>
                              <path id="Path_4756" data-name="Path 4756" d="M50.722,96.5l23.827-6.353,4.584,11.23L55,107.859Zm23.549-7.035-23.81,6.344-.958.256.259.691,4.264,11.364.267.711.973-.261,24.153-6.491.965-.259-.288-.7L75.5,89.893l-.279-.682Z" fill="#d7cec1"/>
                              <path id="Path_4757" data-name="Path 4757" d="M65.384,100.273,50.912,97.006l.325.864,14.14,3.2.349.079.227-.233L75.1,91.5l-.349-.855Z" fill="#afafaf"/>
                           </g>
                        </a>
                     </svg>
                     <svg id="email_1_active" class="email_f email_active"  data-name="Component 1 – 12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="126.968" viewBox="0 0 160 126.968">
                        <defs>
                           <clipPath id="clip-path">
                              <path id="Path_2039" data-name="Path 2039" d="M45.505,112.288c0,1.152-.8,2.341-2.39,3.258a11.451,11.451,0,0,1-5.572,1.374h-.049a9.739,9.739,0,0,1-4.774-1.126,3.318,3.318,0,0,1-1.928-2.76l-.144-50.787a3.316,3.316,0,0,0,1.928,2.76c2.742,1.593,7.4,1.484,10.4-.247,1.589-.917,2.394-2.106,2.391-3.258Z" transform="translate(-30.648 -61.502)" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-2">
                              <rect id="Rectangle_158" data-name="Rectangle 158" width="53.235" height="89.24" fill="none"/>
                           </clipPath>
                           <clipPath id="clip-path-3">
                              <path id="Path_2060" data-name="Path 2060" d="M31.962,71.725,1.743,89.173C1.7,73.46,1.652,56.731,1.607,41.017L31.826,23.57c.044,15.714.092,32.442.136,48.155" transform="translate(-1.607 -23.57)" fill="#e34640"/>
                           </clipPath>
                        </defs>
                        <a xmlns:xlink="<?php echo home_url(); ?>/form/" class="email_click email_active" data-id="3">
                           <path id="Path_2414" data-name="Path 2414" d="M80,0,0,49.5,80,99l80-49.5Z" transform="translate(0 27.967)" fill="#d7cec1"/>
                           <g id="Group_623" data-name="Group 623" transform="translate(53.3)">
                              <g id="Group_537" data-name="Group 537" transform="translate(21.523 33.823)">
                                 <g id="Group_536" data-name="Group 536" transform="translate(0)">
                                    <path id="Path_2021" data-name="Path 2021" d="M57.4,62.858l.144,50.786c0,.02,0,.042,0,.063L57.4,62.921c0-.021,0-.042,0-.063" transform="translate(-57.4 -62.112)" fill="#1a1a1a"/>
                                    <path id="Path_2022" data-name="Path 2022" d="M57.315,62.973l.144,50.786a2.423,2.423,0,0,0,.047.411l-.144-50.786a2.423,2.423,0,0,1-.047-.412" transform="translate(-57.314 -62.164)" fill="#1a1a1a"/>
                                    <path id="Path_2023" data-name="Path 2023" d="M57.11,63.722l.144,50.786a2.563,2.563,0,0,0,.113.394l-.144-50.786a2.522,2.522,0,0,1-.113-.394" transform="translate(-57.062 -62.501)" fill="#1a1a1a"/>
                                    <path id="Path_2024" data-name="Path 2024" d="M56.778,64.439l.144,50.786a2.813,2.813,0,0,0,.183.391l-.144-50.786a2.753,2.753,0,0,1-.183-.39" transform="translate(-56.617 -62.824)" fill="#1a1a1a"/>
                                    <path id="Path_2025" data-name="Path 2025" d="M56.289,65.149l.144,50.786a3.081,3.081,0,0,0,.268.4l-.144-50.786a3.185,3.185,0,0,1-.268-.4" transform="translate(-55.945 -63.143)" fill="#1a1a1a"/>
                                    <path id="Path_2026" data-name="Path 2026" d="M55.536,65.874l.144,50.786a3.791,3.791,0,0,0,.414.445L55.95,66.32a3.883,3.883,0,0,1-.414-.446" transform="translate(-54.924 -63.47)" fill="#1a1a1a"/>
                                    <path id="Path_2027" data-name="Path 2027" d="M54.039,66.684l.144,50.786a5.055,5.055,0,0,0,.824.609l-.144-50.786a4.974,4.974,0,0,1-.824-.609" transform="translate(-53.013 -63.834)" fill="#1a1a1a"/>
                                    <path id="Path_2028" data-name="Path 2028" d="M51.277,67.792l.144,50.786.078.046a7.4,7.4,0,0,0,1.441.631L52.8,68.47a7.371,7.371,0,0,1-1.441-.631l-.078-.046" transform="translate(-49.427 -64.333)" fill="#1a1a1a"/>
                                    <path id="Path_2029" data-name="Path 2029" d="M49,69.024l.144,50.786a9.772,9.772,0,0,0,1.252.311l-.144-50.786A9.614,9.614,0,0,1,49,69.024" transform="translate(-45.633 -64.887)" fill="#1a1a1a"/>
                                    <path id="Path_2030" data-name="Path 2030" d="M47.384,69.59l.144,50.786q.436.078.889.123l-.144-50.785c-.3-.03-.6-.071-.89-.124" transform="translate(-42.764 -65.142)" fill="#1a1a1a"/>
                                    <path id="Path_2031" data-name="Path 2031" d="M45.952,69.816,46.1,120.6c.26.026.522.044.787.052L46.74,69.868c-.265-.009-.528-.026-.788-.052" transform="translate(-40.442 -65.244)" fill="#1a1a1a"/>
                                    <path id="Path_2032" data-name="Path 2032" d="M44.589,69.911l.144,50.786q.373.012.749,0l-.144-50.786c-.25.007-.5.006-.749,0" transform="translate(-38.292 -65.287)" fill="#1a1a1a"/>
                                    <path id="Path_2033" data-name="Path 2033" d="M43.25,69.885l.144,50.786q.368-.008.736-.04l-.144-50.785q-.368.03-.736.039" transform="translate(-36.204 -65.257)" fill="#1a1a1a"/>
                                    <path id="Path_2034" data-name="Path 2034" d="M41.9,69.777l.144,50.786q.374-.031.745-.083L42.64,69.694c-.247.035-.5.062-.745.083" transform="translate(-34.112 -65.189)" fill="#1a1a1a"/>
                                    <path id="Path_2035" data-name="Path 2035" d="M40.49,69.584l.144,50.786c.26-.038.517-.082.773-.134l-.144-50.787q-.383.08-.773.135" transform="translate(-31.962 -65.079)" fill="#1a1a1a"/>
                                    <path id="Path_2036" data-name="Path 2036" d="M38.955,69.28l.144,50.787c.285-.059.567-.129.844-.207L39.8,69.073c-.276.079-.558.148-.844.207" transform="translate(-29.654 -64.909)" fill="#1a1a1a"/>
                                    <path id="Path_2037" data-name="Path 2037" d="M37.162,68.8l.144,50.786a10.383,10.383,0,0,0,.986-.334l-.144-50.786c-.318.126-.648.237-.986.334" transform="translate(-27.017 -64.636)" fill="#1a1a1a"/>
                                    <path id="Path_2038" data-name="Path 2038" d="M30.648,65.332l.144,50.786a8.924,8.924,0,0,0,1.192-.571c1.589-.917,2.393-2.106,2.39-3.258L34.231,61.5c0,1.152-.8,2.341-2.391,3.258a9,9,0,0,1-1.192.572" transform="translate(-19.517 -61.502)" fill="#1a1a1a"/>
                                 </g>
                              </g>
                              <g id="Group_539" data-name="Group 539">
                                 <g id="Group_538" data-name="Group 538">
                                    <path id="Path_2040" data-name="Path 2040" d="M33.3,55.807c-3,1.731-3.207,4.425-.465,6.019s7.4,1.484,10.4-.247,3.2-4.428.461-6.021-7.393-1.482-10.392.25" transform="translate(-9.386 -24.497)" fill="#1a1a1a"/>
                                    <path id="Path_2041" data-name="Path 2041" d="M1.532,128.7l30.38-17.539-.041-.024L1.652,128.581a.318.318,0,0,1-.12.115" transform="translate(20.481 -50.016)" fill="#e34640"/>
                                    <path id="Path_2042" data-name="Path 2042" d="M1.71,71.615q-.027-9.647-.055-19.293l-.014-4.878q-.034-12.086-.068-24.171a.322.322,0,0,1-.04.163l.136,48.155.041.024" transform="translate(50.682 -10.474)" fill="#e34640"/>
                                    <path id="Union_27" data-name="Union 27" d="M.04,17.447c-.487.842,3.488,4.065,8.876,7.2l2.439,1.417L23.064,19.3,11.357,26.06c5.089,2.959,9.622,4.778,10.519,4.26l6-3.463,6.115-3.531,3.076-1.776,3.076-1.777L43.209,18c.53,0,1.069-.617,1.527-.881q3.76-2.171,7.52-4.341s-3.822-2.231-8.913-5.189h0L40.9,6.175h0C35.515,3.043,30.748.279,30.26,0Z" transform="translate(52.255 30.409) rotate(180)" fill="#f45d57"/>
                                    <path id="Union_26" data-name="Union 26" d="M0,.2.137,48.358c.49.279,5.255,3.044,10.643,6.175h0l2.439,1.418c5.087,2.957,8.912,5.183,8.912,5.188q-.012-4.79-.026-9.579l-.015-4.845c0-1.461-.01-3.407-.014-4.867q-.02-7.313-.041-14.625l-.015-4.844Q22.009,17.586,22,12.8c0-1.039-3.831-4.077-8.917-7.033L10.64,4.348h0C6.129,1.727,2.058,0,.564,0,.272,0,.08.066,0,.2Z" transform="translate(22.131 78.768) rotate(180)" fill="#e34640"/>
                                    <path id="Path_2047" data-name="Path 2047" d="M1.607,41.017c.045,15.714.092,32.443.136,48.156l30.22-17.448c-.045-15.713-.092-32.442-.136-48.155L1.607,41.017" transform="translate(20.389 -10.608)" fill="#e34640"/>
                                 </g>
                              </g>
                              <g id="Group_541" data-name="Group 541" transform="translate(21.996 12.962)">
                                 <g id="Group_540" data-name="Group 540">
                                    <path id="Path_2048" data-name="Path 2048" d="M20.452,63.455l0-1.307-8.719,5.034,0,1.307L15.528,66.3l.019,6.6,1.13-.652-.019-6.6Zm-.008-2.761,0-1.307-8.719,5.034,0,1.307,8.719-5.034M30.363,48.44l-.051-18.119L16.834,38.1l.051,18.118,13.477-7.78M16.035,56.711l-.052-18.118L2.507,46.374l.051,18.118,13.477-7.781M27.111,31.464,27.1,28.073l-7.073,4.083.01,3.392,7.072-4.083M12.783,39.736l-.009-3.391L5.7,40.428l.01,3.392,7.072-4.083M0,39.269,31.982,20.805l.142,50.186L.142,89.456,0,39.269" transform="translate(-0.885 -22.326)" fill="#d6322c"/>
                                    <path id="Path_2049" data-name="Path 2049" d="M15.175,44.252l-.009-2.971L4.729,47.307l.009,2.971ZM3.2,45.89,16.68,38.109l.051,18.118L3.255,64.009,3.2,45.89" transform="translate(12.747 -30.113)" fill="#dbdcdc"/>
                                    <path id="Path_2050" data-name="Path 2050" d="M41.228,59.293l-.009-2.971L30.79,62.343l.008,2.971ZM29.256,60.931,42.733,53.15l.051,18.118L29.307,79.049l-.051-18.118" transform="translate(-27.634 -36.883)" fill="#dbdcdc"/>
                                    <path id="Path_2051" data-name="Path 2051" d="M9.115,38.1l7.072-4.083.01,3.391L9.125,41.494Z" transform="translate(10.029 -28.273)" fill="#fff"/>
                                    <path id="Path_2052" data-name="Path 2052" d="M35.168,53.145l7.072-4.083.01,3.392-7.072,4.083Z" transform="translate(-30.352 -35.043)" fill="#fff"/>
                                    <path id="Path_2053" data-name="Path 2053" d="M21.238,96l8.719-5.034,0,1.307L21.241,97.3Z" transform="translate(-10.401 -53.9)" fill="#fff"/>
                                    <path id="Path_2054" data-name="Path 2054" d="M21.224,101.016l8.719-5.034,0,1.307L26.152,99.48l-1.13.652-3.795,2.191Z" transform="translate(-10.379 -56.159)" fill="#fff"/>
                                    <path id="Path_2055" data-name="Path 2055" d="M28.089,102.994l1.13-.652.019,6.6-1.13.652Z" transform="translate(-13.446 -59.022)" fill="#fff"/>
                                    <path id="Path_2056" data-name="Path 2056" d="M32.579,65.465l9.9-5.714.007,2.368-9.9,5.714Z" transform="translate(-29.16 -39.853)" fill="#b4b4b5"/>
                                    <path id="Path_2057" data-name="Path 2057" d="M42.252,61.744l-.007-2.368-9.9,5.714.007,2.368Zm-10.167,3.2,10.429-6.021.009,2.971-10.43,6.021-.008-2.971" transform="translate(-28.929 -39.479)" fill="#888"/>
                                    <path id="Path_2058" data-name="Path 2058" d="M6.526,50.423l9.9-5.714.007,2.368-9.9,5.714Z" transform="translate(11.221 -33.084)" fill="#b4b4b5"/>
                                    <path id="Path_2059" data-name="Path 2059" d="M16.207,46.7,16.2,44.334,6.3,50.048l.007,2.368ZM6.032,49.9l10.437-6.026.008,2.971L6.04,52.874,6.032,49.9" transform="translate(11.444 -32.709)" fill="#888"/>
                                 </g>
                              </g>
                           </g>
                           <g id="Group_829" data-name="Group 829" transform="translate(25 4.967)">
                              <path id="Path_4745" data-name="Path 4745" d="M0,72.728,16.946,83l11.92-7.486-17-10.026Z" fill="#fff"/>
                              <path id="Path_4746" data-name="Path 4746" d="M10.43,66.365l1.564,8.973.039.223.367.021,15.022.84.908-.571-15.379-.858-1.616-9.18Z" fill="#afafaf"/>
                              <path id="Path_4747" data-name="Path 4747" d="M87.092,67.489l17,10.026L92.172,85,75.227,74.728Z" fill="#fff"/>
                              <path id="Path_4748" data-name="Path 4748" d="M85.658,68.365l1.564,8.971.039.224.368.021,15.022.84.909-.571-15.381-.858-1.616-9.179Z" fill="#afafaf"/>
                              <path id="Path_4749" data-name="Path 4749" d="M89.393,79.541l15.7,3.939L112.177,67.3,96.793,63.5Z" fill="#fff"/>
                              <path id="Path_4750" data-name="Path 4750" d="M102.74,73.825,90.1,79.719l1.2.3,12.333-5.759.3-.139-.128-.247-5.141-9.914-1.181-.291Z" fill="#afafaf"/>
                              <path id="Path_4751" data-name="Path 4751" d="M35.7,85l24.1,3.335-3.755,11.3-24.41-3.455Z" fill="#fff"/>
                              <path id="Path_4752" data-name="Path 4752" d="M35.212,86.349l9.553,7.9.237.2.346-.114,14-4.635.286-.858L45.3,93.581,35.521,85.5Z" fill="#afafaf"/>
                              <path id="Path_4753" data-name="Path 4753" d="M43.7,0,39.638,11.174,64.047,14.63,67.8,3.335Z" fill="#fff"/>
                              <path id="Path_4754" data-name="Path 4754" d="M43.213,1.349l9.553,7.9.237.2.345-.114,14-4.636.285-.858L53.3,8.58,43.522.5Z" fill="#afafaf"/>
                              <path id="Path_4755" data-name="Path 4755" d="M50.721,96.5,55,107.859l24.134-6.482-4.582-11.23Z" fill="#fff"/>
                              <path id="Path_4756" data-name="Path 4756" d="M50.722,96.5l23.827-6.353,4.584,11.23L55,107.859Zm23.549-7.035-23.81,6.344-.958.256.259.691,4.264,11.364.267.711.973-.261,24.153-6.491.965-.259-.288-.7L75.5,89.893l-.279-.682Z" fill="#d7cec1"/>
                              <path id="Path_4757" data-name="Path 4757" d="M65.384,100.273,50.912,97.006l.325.864,14.14,3.2.349.079.227-.233L75.1,91.5l-.349-.855Z" fill="#afafaf"/>
                           </g>
                        </a>
                     </svg>
                  </div>
                  <?php include("includes/title_post_small.php"); ?>


                  <?php include("includes/popup_post_medium.php"); ?>
                  
                 
                 
                  <!-- popup medium 6 -->
                  <div class="popup_small_6 popup_medium" id="popup_small_6">
                     <div class="header_video">
                        <p class="tt_video">230501 南足柄の家</p>
                        <p class="close_video"></p>
                     </div>
                     <div class="wrap_popup_video">
                        <iframe width="1059" id="popup_video"  height="559" data-src="https://www.youtube.com/embed/kAsv49odkJI?si=ViljJ-nw__TQTSAm&amp;controls=1" title="230501 南足柄の家" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                     </div>
                  </div>
                  
                  
                  
               </div>
            </div>
            <?php include("includes/popup_post_big.php"); ?>
            
</div>

         </main>
       <!-- end #main-->
<?php get_footer(); ?>