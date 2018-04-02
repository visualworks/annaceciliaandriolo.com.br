    <footer>
        <div class="container">
            <div class="row">
                <div class="bottom">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p class="assinatura xs-center">Dra. Anna Cecília Andriolo - Todos os direitos reservados (2015)</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="imgs xs-center">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
                                </div>
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="">
                                </div>
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg" alt="">
                                </div>
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="">
                                </div>
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 xs-center">
                        <div class="logo-ne xs-center">
                            <a href="http://novoselementos.com.br" target="_blank" title="Agência Novos Elementos">
                                <div class="img"><img src="https://www.annaceciliaandriolo.com.br/wp-content/uploads/2015/10/logo-ne.png" alt="Agência Novos Elementos"></div>
                            </a>
                        </div>
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