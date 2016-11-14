<?php
date_default_timezone_set("Asia/Shanghai");

?>

<body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="http://124.219.73.151/CI/index.php/news/index">Blog</a>
          <a class="blog-nav-item" href="http://124.219.73.151/CI/index.php/news/create">Create</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="//localhost/CI_blog/index.php/login">Login</a>
      <form class="navbar-form navbar-right" method="get">
            <div class="form-group">
              <input type="text" name="key" placeholder="sreach" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Srecch</button>
          </form>

    
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
        <br>
      
          <?php foreach ($blogs as $blogs_item): ?>

        <h2 class="blog-post-title"><?php echo $blogs_item['title']; ?></h2>
        
        <p class="blog-post-meta">
          <?php echo $blogs_item['dates']; ?>
          Reading:<?php echo $blogs_item['hits']; ?></a>
        </p>
        
        <div class="main">
          <?php echo iconv_substr($blogs_item['contents'],0,100); ?>...
        </div>
        <p><a href="<?php echo site_url('news/view/'.$blogs_item['id']); ?>">View article</a></p>
        <p><a href="<?php echo site_url('news/del/'.$blogs_item['id']); ?>">Delete</a></p>
      
        <?php endforeach; ?>
        <!--翻页链接-->
        <br><br><?php echo $this->pagination->create_links();?>
            
          </div><!-- /.blog-post -->
    
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
      <div class="sidebar-module sidebar-module-inset">
            <?php echo $this->calendar->generate(); ?>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->