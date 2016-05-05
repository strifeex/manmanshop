<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "html_header.php") ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header>
            <h1>Shop</h1>
        </header>

        <hr>

        <!-- /.row -->

        <!-- Page Features -->
        <div class="row">
          <div class="col-md-2">
              <p class="lead">categories</p>
              <div class="list-group">

              	<?php

              		get_categories();

              	 ?>

              </div>
          </div>
          <div class="col-md-10">

            <?php get_products_in_shop_page(); ?>

        </div>
        <!-- /.row -->

    </div>
  </div>
    <!-- /.container -->


<?php include(TEMPLATE_FRONT . DS . "html_footer.php") ?>
