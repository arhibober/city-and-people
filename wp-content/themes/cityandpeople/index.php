<?php get_header();?>
<!-- Page Content -->
<div class="container">

    <h1 class="my-4">Welcome to Modern Business</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">Card Title</h4>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                        necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">Card Title</h4>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam
                        eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque
                        exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <?php get_sidebar();?>
    </div>

</div>
<!-- /.container -->

<?php get_sidebar('second') /* sidebar-second.php */?>

<?php get_footer();