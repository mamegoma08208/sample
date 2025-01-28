   <!-- footer.php ここから -->
   <footer class="footer">
                  <p class="footer_logo_container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/  " alt="" />
                    <a href="">
                      Sample
                    </a>
                  </p>
                  <div class="footer_contact_info">
                    <p>〒150-0043</p>
                    <p>東京都渋谷区道玄坂2丁目11-1 Gスクエア渋谷道玄坂4F</p>
                    <ul>
                      <li><span>TEL: </span>03-2222-11</li>
                      <li><span>MAIL: </span>: sample@sejuku.net</li>
                    </ul>
                  </div>
                  <div class="footer_social">
                  <ul class="serect">
                      <li><a href="<?php echo home_url();?>/category/news">NEWS</a></li>
                      <li><a href="<?php echo home_url();?>/servise">SERVICE</a></li>
                      <li><a href="<?php echo home_url();?>/contact">CONTACT</a></li>
                    </ul>
                  </div>

            <small>
              Copyright &copy; Sample All Rights Reserved.
            </small>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>
<!-- footer.php ここまで -->