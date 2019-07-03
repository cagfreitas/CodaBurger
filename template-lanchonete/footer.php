<footer id="contato"> 
    <div class="background_footer">
        <div class="container content_footer">
            <div class= "logo_footer">
                <img src="<?php echo get_template_directory_uri()?>/img/codalogo.png" alt="">
            </div>
            <div class="contato_footer">
                <div class="info">
                    <i class="material-icons small">local_phone</i>
                    <div class="contato_dados">
                        <h6>Telefone e Whatsapp</h6>
                        <p><?php the_field('telefone'); ?></p>
                    </div>
                </div>
                <div class="info">
                <i class="material-icons small">access_time</i>
                    <div class="contato_dados">
                        <h6>Horário de funcionamento</h6>
                        <p><?php the_field('horario'); ?></p>   
                    </div>
                </div>
                <div class="info" style="justify-content: center; align-self: center;">
                    <div class="contato_dados">
                        <p>SOMENTE DELIVERY.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container center">
            <p> Desenvolvido por </p>
            <a href="http://byronsolutions.com" target="_blank" title="Site da byron.solutions">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo da byron.solutions" title="Logo da byron.solutions">
            </a>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>
</html>