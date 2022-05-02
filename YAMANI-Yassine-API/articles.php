<?php
// Collect data from our API
$myfile = "./assets/sample.json";
$articles = json_decode(file_get_contents($myfile));


ob_start();
?>
<!-- using loop foreach to display all our articles -->
<?php foreach ($articles as $article) : ?>
  <div class="item">
    <div class="item-inner">
      <article>
        <div class="card">
          <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="<?= $article->Image ?>" alt="" /></a>
            <figcaption>
              <h5 class="from-top mb-0">Read More</h5>
            </figcaption>
          </figure>


          <div class="card-body">
            <div class="post-header">
              <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html"><?= $article->Title ?></a></h2>
            </div>
            <!-- /.post-header -->
            <div class="post-content">
              <p><?= $article->Introduction ?></p>
            </div>
            <!-- /.post-content -->
          </div>
          <!--/.card-body -->
          <div class="card-footer">
            <ul class="post-meta d-flex mb-0">
              <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?= $article->LastMod ?></span></li>
              <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i><?= $article->categorie ?></a></li>
            </ul>
            <!-- /.post-meta -->
          </div>

          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </article>
      <!-- /article -->
    </div>
    <!-- /.item-inner -->
  </div>
<?php endforeach; ?>