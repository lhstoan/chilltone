   <?php if ( !is_front_page() && !is_home() ) { ?>
    <footer>
            <div class="ft_content">
                <div class="inner">
                    <div class="ft_info">
                        <p class="ft_logo"><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_theme_file_uri('') ?>/images/logo_ft.svg" width="382" height="71" alt="暮らしをデザインする株式会社サオビ｜一級建築士事務所" loading="lazy"></a></p
                        >
                        <p class="big bold">株式会社サオビ　一級建築士事務所　<br class="sp">（SAoBi Architects）</p>
                        <p class="big"><span class="en bold"><img src="<?php echo get_theme_file_uri('') ?>/images/ic_ft_location.svg" alt="Icon">Minamiashigara Branch</span><br>〒250-0105　神奈川県南足柄市関本373</p>
                        <p class="big"><span class="en bold"><img src="<?php echo get_theme_file_uri('') ?>/images/ic_ft_location.svg" alt="Icon">Tokyo Office</span><br>〒151-0051　東京都渋谷区千駄ヶ谷3-60-6　第一宮庭マンション702</p>
                        <p class="big"><span class="en bold"><img src="<?php echo get_theme_file_uri('') ?>/images/ic_ft_tel.svg" alt="Icon">03-5770-7272</span><br>（受付時間 10:00～18:00 / 月～土）</p>
                    </div>
                    <div class="ft_link">
                        <ul>
                            <li><a href="<?php echo home_url(); ?>/">TOP</a></li>
                            <li><a href="<?php echo home_url(); ?>/renovation/">自然の中で、空き家リノベーション</a></li>
                            <li><a href="<?php echo home_url(); ?>/tree/">木の家を建てる</a></li>
                            <li><a href="<?php echo home_url(); ?>/blog/">ブログ</a></li>
                            <li><a href="<?php echo home_url(); ?>/event/">イベント</a></li>
                            <li><a href="<?php echo home_url(); ?>/community/">コミュニティ</a></li>
                            <li><a href="<?php echo home_url(); ?>/form/">お問い合わせ</a></li>
                        </ul>
                    </div>
                    <address>&copy;2025 SAoBi architects</address>
                </div>
            </div>
        </footer>

        
    <?php } ?>
    
         <!-- end #main-->
         <div class="tool_sroll sp">
               <div class="info_scroll">
                  <div class="item_scroll scroll_1">
                     <div class="info_it"></div>
                     <a href="<?php echo home_url(); ?>/blog/"><span class="ic">日記をこっそりのぞく</span></a>
                  </div>
                  <div class="item_scroll scroll_2">
                     <div class="info_it"></div>
                     <a href="<?php echo home_url(); ?>/event/"><span class="ic">イベントをチェックする</span></a>
                  </div>
                  <div class="item_scroll scroll_3">
                     <div class="info_it"></div>
                     <a href="<?php echo home_url(); ?>/community/"><span class="ic">回覧板を見る</span></a>
                  </div>
               </div>
         </div>
         <p class="to_top"><img src="<?php echo get_theme_file_uri('') ?>/images/btn_top.png" width="80" height="80" loading="lazy" alt="トップに戻る"></p>
         <!-- end #footer -->
    </div>
       <?php if ( !is_front_page() && !is_home() ) { ?>
<!-- ANIMATION CHANGE PAGE -->
        <div class="transition_firts"></div>
        <div class="transition">
            <div class="transition_slits">
                <div class="slits" data-transition="slits">
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                    <div class="slit" data-transition="slit"></div>
                </div>
            </div>
        </div>

       <?php } ?>
<?php wp_footer(); ?>
<script type="text/javascript">
   const URL="<?php echo home_url(); ?>/";
</script>
</body>
</html>