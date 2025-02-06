<!DOCTYPE html>

<head>
  <title>sample</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="sample" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/destyle.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
  <?php wp_head(); ?>
</head>

<body>
    <!-- ヘッダーここから -->
    <header class="header">
      <div class="header_container">
        <div>
          <nav>
            <div class="logo_container">
              <div class="logo_text">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sample.png"/>
                </a>
              </div>
            </div>
              <ul class="serect">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url();?>/category/news">
                  NEWS
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url();?>/service">
                    SERVICE
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url();?>/contact">
                    CONTACT
                    </a>
                </li>
                </ul>
          </nav>
        </div>
        </div>
    </header>