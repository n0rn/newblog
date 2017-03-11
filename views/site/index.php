<?php include ROOT. '/views/layouts/header.php';?>

    <hr />
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                <?php foreach ($blogList as $post): ?>
                    <div class="blog-main">
                        <h1><a href="/site/<?php  echo $post['id'];?>"><?php echo $post['title'];?></a></h1>
                         <a href="singlepost.html">
                        <img src="/template/img/1.jpg" class="img-responsive img-rounded" />
                             </a>
                        <div class="blog-info">
                            <span class="label label-primary btn">Posted on 26th November 2014</span>
                            <span class="label label-success btn">In Technology</span>
                            <span class="label label-danger btn"><?php echo $post['author'];?></span>
                        </div>
                        <div class="blog-txt">
                            <?php echo $post['text'];?>
                        </div>
                    </div>
                    <?php endforeach;?>
                     <!--BLOG THREE END -->
                    <nav>
                        <ul class="pagination">
                            <li class="disabled"><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2 <span class="sr-only"></span></a></li>
                            <li><a href="#">3 <span class="sr-only"></span></a></li>
                            <li><a href="#">4 <span class="sr-only"></span></a></li>
                            <li><a href="#">5 <span class="sr-only"></span></a></li>
                            <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
                        </ul>
                    </nav>
                     <!--PAGING  END -->
                </div>
                <?php include ROOT. '/views/layouts/sidebar.php';?>



            </div>
        </div>
    </section>

    <?php include ROOT. '/views/layouts/footer.php';?>

</body>
</html>
