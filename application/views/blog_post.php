<?php include('header.php'); ?>

<section class="blog1">
    <div class="head">
        <span class="type">Blog</span>
    </div>
</section>
<section class="blog-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php foreach($data as $row) { ?>

                <div class="card">
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
                    <div class="content1">
                        <?php echo $row->content; ?>
                    </div>
                </div>

                <?php  } ?>
                <div class="sharethis-inline-share-buttons"></div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box">
afjgiaefegawrg
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
afjgiaefegawrg
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
afjgiaefegawrg
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>