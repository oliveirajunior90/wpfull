
    <footer>
    <!--
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="box facebook">
                        <a href="https://www.facebook.com/"><h4>FACEBOOK</h4></a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="box instagram">
                        <a href="https://instagram.com/"><h4>INSTAGRAM</h4></a>
                        <div class="insta">
                            <a href="https://instagram.com/">
                                <?php echo do_shortcode('[instagram-feed]'); ?>
                                <img class="text-center" src="<?php echo get_template_directory_uri(); ?>/assets/img/" alt="Instagram " />
                                <span class="instablock">@novoselementos</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="box endereco">
                        <a href="https://www.google.com.br/maps/place/R.+C%C3%A2ndido+do+Nascimento,+50+-+Jardim+Paulista,+S%C3%A3o+Paulo+-+SP/@-23.5842556,-46.6681562,17z/data=!3m1!4b1!4m2!3m1!1s0x94ce59e22d57c009:0x88536c194ca90b96!6m1!1e1">
                            <h4>LOCALIZAÇÃO</h4>
                        </a>
                        <div class="infos">
                            <p>
                                Av. das Américas, 8445/715<br />
                                Rio de Janeiro - RJ<br />
                                <span class="tele"><a href="tel:30523558">(21)2484-2000</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
        <div class="container">
            <div class="row">
                <div class="bottom">
                    <div class="col-md-8 col-sm-7 col-xs-12">
                        <div class="sign">
                            Cliente - 2015
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="logo-ne xs-center">
                            <a href="http://www.novoselementos.com.br" target="_blank" title="Agência Novos Elementos">
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ne-p.png" alt="Agência Novos Elementos"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- FACEBOOK -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=524413861011685";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<?php wp_footer(); ?>
</body>
</html>