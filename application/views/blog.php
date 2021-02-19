<?php include('header.php'); ?>

<section class="blog">
    <div class="head">
        <span class="type">Blog</span>
    </div>
</section>
<section class="blog-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">

                <?php foreach($data as $row) { ?>
                <?php $cat = $row->category;
                    $arr = explode(' ',trim($cat));
                ?>
                <div class="card <?php echo $arr[0]; ?>">
                    <div class="title">
                        <?php echo $row->title; ?>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 align-self-center">
                            <span><img src="<?php echo base_url('images/list.svg'); ?>"  class="svg"></span>
                            <span class="text"><?php echo $row->category; ?></span>
                        </div>
                        <div class="col-sm-6 align-self-center">
                            <span><img src="<?php echo base_url('images/calendar.svg'); ?>"  class="svg"></span>
                            <span class="text"><?php echo $row->create_on; ?></span>
                        </div>
                    </div>
                    <img src="<?php echo base_url().'uploads/'.$row->pic; ?>" class="cover-pic">
                    <div class="content">
                    <?php echo $row->content; ?>
                    </div>
                    <div class="btnn">
                        <a href="<?php echo base_url(); ?>blog/blog_post/<?php echo $row->title; ?>/<?php echo $row->id; ?>" class="btn btn-apply">Read More</a>
                    </div>
                </div>

                <?php  } ?>


            </div>
            <div class="col-lg-3">
                <aside>
                    <div class="sidebar-widget">
                        <h3 class="section-title">
                            <span>About The Social Mantra</span>
                        </h3>
                        <div class="textwidget">
                            <p>Our rich experience in digital marketing helps us find you solutions that generate ROI (return on investment) and prove to be revenue generating for your business.</p>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h3 class="section-title">
                            <span>Categories</span>
                        </h3>
                        <ul>
                            <li class="cat-item cat-item-84">
                                <a id="content" title="Content Marketing">Content Marketing</a>
                            </li>
                            <li class="cat-item cat-item-84">
                                <a id="entrepreneurship" title="Entrepreneurship">Entrepreneurship</a>
                            </li>
                            <li class="cat-item cat-item-84">
                                <a id="google" title="Google Analytics">Google Analytics</a>
                            </li><br>
                            <li class="cat-item cat-item-84">
                                <a id="tag" title="Google Tag Manager">Tag Manager of Google</a>
                            </li><br>
                            <li class="cat-item cat-item-84">
                                <a id="mobile" title="Mobile App Marketing">Mobile App Marketing</a>
                            </li><br>
                            <li class="cat-item cat-item-84">
                                <a id="seo" title="SEO">SEO</a>
                            </li><br>
                            <li class="cat-item cat-item-84">
                                <a id="social" title="Social Media Marketing">Social Media Marketing</a>
                            </li><br>
                            <li class="cat-item cat-item-84">
                                <a id="all" title="Social Media Marketing">ALL</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget">
                        <h3 class="section-title">
                            <span>Recent Posts</span>
                        </h3>
                        <div class="textwidget">
                            <?php foreach($data as $row) { ?>
                                <div class="recent">
                                    <a href="<?php echo base_url(); ?>blog/blog_post/<?php echo $row->title; ?>/<?php echo $row->id; ?>"><?php echo $row->title; ?></a>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        $("#content").click(function(){
            $(".Montent").css("display","block");
            $(".Entrepreneurship").css("display","none");
            $(".Google").css("display","none");
            $(".Tag").css("display","none");
            $(".Mobile").css("display","none");
            $(".SEO").css("display","none");
            $(".Social").css("display","none");
        });
        $("#entrepreneurship").click(function(){
            $(".Montent").css("display","none");
            $(".Entrepreneurship").css("display","block");
            $(".Google").css("display","none");
            $(".Tag").css("display","none");
            $(".Mobile").css("display","none");
            $(".SEO").css("display","none");
            $(".Social").css("display","none");
        });
        $("#google").click(function(){
            $(".Montent").css("display","none");
            $(".Entrepreneurship").css("display","none");
            $(".Google").css("display","block");
            $(".Tag").css("display","none");
            $(".Mobile").css("display","none");
            $(".SEO").css("display","none");
            $(".Social").css("display","none");
        });
        $("#tag").click(function(){
            $(".Montent").css("display","none");
            $(".Entrepreneurship").css("display","none");
            $(".Google").css("display","none");
            $(".Tag").css("display","block");
            $(".Mobile").css("display","none");
            $(".SEO").css("display","none");
            $(".Social").css("display","none");
        });
        $("#mobile").click(function(){
            $(".Montent").css("display","none");
            $(".Entrepreneurship").css("display","none");
            $(".Google").css("display","none");
            $(".Tag").css("display","none");
            $(".Mobile").css("display","block");
            $(".SEO").css("display","none");
            $(".Social").css("display","none");
        });
        $("#seo").click(function(){
            $(".Montent").css("display","none");
            $(".Entrepreneurship").css("display","none");
            $(".Google").css("display","none");
            $(".Tag").css("display","none");
            $(".Mobile").css("display","none");
            $(".SEO").css("display","block");
            $(".Social").css("display","none");
        });
        $("#social").click(function(){
            $(".Montent").css("display","none");
            $(".Entrepreneurship").css("display","none");
            $(".Google").css("display","none");
            $(".Tag").css("display","none");
            $(".Mobile").css("display","none");
            $(".SEO").css("display","none");
            $(".Social").css("display","block");
        });
        $("#all").click(function(){
            $(".Montent").css("display","block");
            $(".Entrepreneurship").css("display","block");
            $(".Google").css("display","block");
            $(".Tag").css("display","block");
            $(".Mobile").css("display","block");
            $(".SEO").css("display","block");
            $(".Social").css("display","block");
        });
    });
</script>

<?php include('footer.php'); ?>