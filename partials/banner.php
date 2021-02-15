<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<div class="container-fluid header-container" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">        
    <div class="blue-overlay"></div>    
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-md-6">
                <h1></h1>
            </div>
        </div>
    </div>
</div> 