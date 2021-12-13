    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white"> <?php echo get_theme_mod('bootkit_footer_copyright_text'); ?><br></p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <?php wp_footer();?>
    <!-- Ajax button -->
    <button id="bootkit_button">Отправить</button>
    <script>
jQuery(function($) {
    $('#bootkit_button').click(function() {
        $.ajax({
            url: '<?php echo admin_url("admin-ajax.php") ?>',
            type: 'POST',
            data: 'action=bootkit&param1=2&param2=3', // можно также передать в виде массива или объекта
            beforeSend: function(xhr) {
                $('#bootkit_button').text('Загрузка, 5 сек...');
            },
            success: function(data) {
                $('#bootkit_button').text('Отправить');
                alert(data);
            }
        });
        // если элемент – ссылка, то не забываем:
        // return false;
    });
});
    </script>
    </body>

    </html>