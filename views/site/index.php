<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Bootstrap Free Blog Template</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="/template/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="/template/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="/template/css/style.css" rel="stylesheet" />
</head>
<body>


    <section class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="/template/img/person.jpg" class="img-circle img-responsive" />
                </div>
                <div class="col-md-5 text-center">
                    <h1><strong>Jhon Alexan </strong></h1>
                    <h4>Blogger & Designer</h4>
                </div>
                <div class="col-md-5">
                    <h3>WHO M I :</h3>

                    I am a 26 years old guy who loves bloggging and designing .
                      I will provide all my works for free here with some good piece of information.
                     You can reach me at <i><strong>info@mydomain.com</strong></i>
                </div>
            </div>
        </div>
    </section>
    <!--HOME SECTION END-->

    <hr />
    <section>
        <div class="container">
            <div class="row">
                <?php foreach ($blogList as $post): ?>
                <div class="col-md-9">
                    <div class="blog-main">
                        <a class="heading-blog"><?php echo $post['title'];?></a>
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
                <div class="col-md-3">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Main Categories</strong>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">104</span>
                            Technology 
                        </li>
                        <li class="list-group-item">
                            <span class="badge">34</span>
                            Blogging 
                        </li>
                        <li class="list-group-item">
                            <span class="badge">10</span>
                            Information 
                        </li>
                        <li class="list-group-item">
                            <span class="badge">50</span>
                            Security 
                        </li>
                        <li class="list-group-item">
                            <strong>Other Categories</strong>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">104</span>
                            Technology 
                        </li>
                        <li class="list-group-item">
                            <span class="badge">34</span>
                            Blogging 
                        </li>
                        <li class="list-group-item">
                            <span class="badge">10</span>
                            Information 
                        </li>
                        <li class="list-group-item">
                            <span class="badge">50</span>
                            Security 
                        </li>
                    </ul>
                    <br />

                    <ul class="list-group">
                        <li class="list-group-item">Advrtisements
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <img src="/template/img/ad1.jpg" class="img-responsive" />
                            </a>
                            <br />
                            <a href="#">
                                <img src="/template/img/ad2.jpg" class="img-responsive" />
                            </a>
                        </li>
                    </ul>

                    <br />
                    <div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Subscribe For Updates</h3>
                            </div>
                            <div class="panel-body">
                                <input type="text" class="form-control" placeholder="Your Email" />
                                <hr />
                                <a href="#" class="btn btn-info btn-sm btn-block">subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <hr />
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center set-foot">
                &copy 2017 Norn | designed by <a href="#" target="_blank">test</a>
            </div>
        </div>
    </div>

</body>
</html>
