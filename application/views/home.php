<?php include('header.php'); ?>   

<div class="admin">
    <div class="head">
        <span>Admin Portal</span>
        <a href="<?php echo base_url(); ?>blog/logout" class="btn btn-light">LOGOUT</a>
    </div>
    <div class="add">
        <div class="btn btn-apply" id="add">ADD BLOG</div>
        <div class="new-blog">
            <?php echo validation_errors(); ?>
            <form action="../Upload/do_upload" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div id="profile">
                            <div class="dashes"></div>
                            <label>Click to browse image here</label>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Title for Blog</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" name="category" id="category">
                                <option value="" disebled>Category</option>
                                <option value="Content Marketing">Content Marketing</option>
                                <option value="Entrepreneurship">Entrepreneurship</option>
                                <option value="Google Analytics">Google Analytics</option>
                                <option value="Google Tag Manager">Google Tag Manager</option>
                                <option value="Mobile App Marketing">Mobile App Marketing</option>
                                <option value="SEO">SEO</option>
                                <option value="Social Media Marketing">Social Media Marketing</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <textarea name="content" id="editor">
                            &lt;p&gt;Here goes the initial content of the editor.&lt;/p&gt;
                        </textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>
                </div>  
                <input type="submit" class="btn btn-apply" value="Save">
                <input type="file" name="upload" id="file">
            </form>
            <div class="close">
            <img src="<?php echo base_url('images/close.svg'); ?>">
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#add").click(function(){
            $(".new-blog").css("display","block");
            $("#add").css("display","none");
        });
        $(".close").click(function(){
            $(".new-blog").css("display","none");
            $("#add").css("display","inline-block");
        });
    });
</script>



    <script>
        $(function() {

        $('#profile').addClass('dragging').removeClass('dragging');
        });

        $('#profile').on('dragover', function() {
        $('#profile').addClass('dragging')
        }).on('dragleave', function() {
        $('#profile').removeClass('dragging')
        }).on('drop', function(e) {
        $('#profile').removeClass('dragging hasImage');
        
        if (e.originalEvent) {
          var file = e.originalEvent.dataTransfer.files[0];
          console.log(file);
        
          var reader = new FileReader();
        
          //attach event handlers here...
        
          reader.readAsDataURL(file);
          reader.onload = function(e) {
            console.log(reader.result);
            $('#profile').css('background-image', 'url(' + reader.result + ')').addClass('hasImage');
        
          }
      
        }
        })
        $('#profile').on('click', function(e) {
            console.log('clicked')
            $('#file').click();
        });
        window.addEventListener("dragover", function(e) {
        e = e || event;
        e.preventDefault();
        }, false);
        window.addEventListener("drop", function(e) {
        e = e || event;
        e.preventDefault();
        }, false);
        $('#file').change(function(e) {
        
        var input = e.target;
        if (input.files && input.files[0]) {
          var file = input.files[0];
        
          var reader = new FileReader();
        
          reader.readAsDataURL(file);
          reader.onload = function(e) {
            console.log(reader.result);
            $('#profile').css('background-image', 'url(' + reader.result + ')').addClass('hasImage');
          }
        }
        })
    </script>


<?php include('footer.php'); ?>   