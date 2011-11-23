<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url();?>/template/jquerymobile/jquery.mobile-1.0rc2.css">
        <script src="<?php echo base_url();?>/template/jquerymobile/jquery.js"></script>
        <script src="<?php echo base_url();?>/template/jquerymobile/jquery.mobile-1.0rc2.min.js"></script>


    </head>
    <body>

       <?php if(!empty ($content)):?>
        <?php $this->load->view($content);?>
        <?php endif;?>

    </body>
</html>