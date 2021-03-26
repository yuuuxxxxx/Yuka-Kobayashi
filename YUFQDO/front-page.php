<!-- header取得 -->
<?php get_header(); ?>
 <section id="about"> 
            <div class="ContentWrapper mb-5 pt-4"> 
                <div class="mb-4 pt-5 w-100"> 
                    <div class="text-center font-s30 ls02">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/img/about-icon.svg" class="IconResize">ABOUT
                    </div> 
                </div> 
                <div class="col-sm-12 row ml-0"> 
                    <div class="col-sm-5 col-xs-12 IconBlock">
                        <img class="container" src="<?php echo get_template_directory_uri(); ?>/common/img/icon-circle.png"> 
                    </div> 
                    <div class="col-sm-7 col-xs-12 text-center AboutText">
                        <p class="font-weight-bold">小林優香(こばやし ゆうか)<br>
                           1991年長野県出身</p>
                        <p class="mt-2 font-s16">2018年の秋頃に未経験から<br>スタートアップのベンチャー企業に入社しました。<br>
                        フロントエンドエンジニアとして<br>1年半程自社開発に携わってきました。<br>
                        特にマークアップに関しては<br>単独で担当することも多くありました。<br>
                        新しいものを作り上げること、<br>目にすることがとても楽しく<br>
                        達成感を感じながら制作を行っています。
                        </p>
                    </div>
                </div> 
            </div> 
        </section> 
        <section id="skill"> 
            <div class="ContentWrapper pt-4"> 
                <div class="text-center pb-5 pt-5 w-100"> 
                    <div class="text-center font-s30 ls02">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/img/skill-icon.svg" class="IconResize">SKILL
                    </div>
                    <div class="col-sm-12 row mt-5 container ml-0 ls02">
                        <div class="col-sm-6 col-xs-12">
                            <div class="SkillCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/img/html5.svg" class="SkillIcon">
                            <h3 class="mt-2">HTML</h3>
                            <p>Experience：2years</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="SkillCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/img/css3.svg" class="SkillIcon">
                            <h3 class="mt-2">CSS</h3>
                            <p>Experience：2years</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="SkillCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/img/bootstrap.svg" class="SkillIcon">
                            <h3 class="mt-2">Bootstrap</h3>
                            <p>Experience：2years</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="SkillCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/img/javascript.svg" class="SkillIcon">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/img/jquery.svg" class="JqueryIcon">
                            <h3 class="mt-2">JavaScript & jQuery</h3>
                            <p>Experience：1.5years</p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </section> 
        <section id="works"> 
            <div class="ContentWrapper pt-4 pb-5"> 
                <div class="text-center mb-4 pt-5 w-100"> 
                    <div class="text-center font-s30 ls02">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/img/work-icon.svg" class="IconResize">WORKS
                    </div>
                    <div class="col-sm-12 row mt-4 ml-0"> 
                        <div class="col-sm-6 col-xs-12">
                        <a class="ResultLink" href="https://yukimifuu.com/">
                            <img class="WorkImage container" src="https://yukimifuu.com/wp-content/uploads/2020/03/portfolio.png">
                            <p>自分自身のポートフォリオです。<br>
                            HTML/CSS/Sass/BootStrap/jQuery使用</p> 
                         </a>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <img class="WorkImage container" src="https://yukimifuu.com/wp-content/uploads/2020/03/holmes.png">
                            <p>株式会社Holmes様でのフロントエンドの開発<br>
                                HTML/CSS/Sass/BootStrap/<br>JavaScript/jQuery/Thymeleaf使用
                            </p>
                        </div>
                         <div class="col-sm-6 col-xs-12">
                          <a class="ResultLink" href="http://kanbiihin.com/">
                            <img class="WorkImage container" src="<?php echo get_template_directory_uri(); ?>/common/img/kanbiihin.png">
                            <p>環美商事様のホームページ 制作<br>
                                HTML/CSS/Sass/BootStrap/jQuery使用
                            </p>
                        </a>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <a class="ResultLink" href="http://ktetsu.com/">
                            <img class="WorkImage container" src="<?php echo get_template_directory_uri(); ?>/common/img/ktetsu.png">
                            <p>株式会社小林鉄筋様のホームページ 制作<br>
                                HTML/CSS/Sass/jQuery使用
                            </p>
                            </a>
                        </div>
                    </div> 
                    <p class="WorkComment">この他、コーディングのオンライン講師も行っております。</p>
                </div> 
            </div> 
        </section> 

        <section id="contact" class="pb65"> 
            <div class="ContentWrapper pt-4"> 
                <div class="text-center pb-4 pt-5 w-100"> 
                    <div class="text-center font-s30 ls02">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/img/contact-icon.svg" class="IconResize">CONTACT
                    </div> 
                </div> 
                <p class="text-center">何かありましたらフォーム、SNSから<br>お気軽にお問い合わせください。 </p> 
                <div class="ContactForm">
                <?php echo do_shortcode('[contact-form-7 id="12" title="コンタクトフォーム 1"]') ?>
                </div>
            </div> 
        </section>
<?php wp_footer(); ?>
<?php get_footer(); ?>
