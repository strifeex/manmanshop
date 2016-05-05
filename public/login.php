<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "html_header.php") ?>

<!-- Content
  ============================================= -->
  <section id="content">

    <div class="content-wrap">

      <div class="container clearfix">

        <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">

          <h1 class="text-center">Login</h1>
          <h2 class="text-center bg-warning"><?php display_message(); ?></h2>

                      <div class="tab-container">

                          <div class="tab-content clearfix" id="tab-login">
                              <div class="panel panel-default nobottommargin">
                                <div class="panel-body" style="padding: 40px;">
                                  <form id="login-form" name="login-form" class="nobottommargin" action="" method="post" enctype="multipart/form-data">
                                    <?php login_user(); ?>
                                    <h3>Login to your Admin</h3>

                                    <div class="col_full">
                                        <label for="login-form-username">Username:</label>
                                        <input type="text" id="login-form-username" name="username" value="" class="form-control" />
                                    </div>

                                    <div class="col_full">
                                        <label for="login-form-password">Password:</label>
                                        <input type="password" id="login-form-password" name="password" value="" class="form-control" />
                                    </div>

                                    <div class="col_full nobottommargin">
                                        <input type="submit" name="submit" class="btn btn-primary" >
                                    </div>

                                </form>
                                </div>
                              </div>
                          </div>

                      </div>

                  </div>

      </div>

    </div>

  </section><!-- #content end -->

   <?php include(TEMPLATE_FRONT . DS . "html_footer.php") ?>
