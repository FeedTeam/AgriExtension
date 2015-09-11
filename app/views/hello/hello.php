<?php

use Core\Language;

?>

<div class="page-header">
    <h1><?php echo $data['title'] ?></h1>
</div>

<p>This is a Hello page</p>

<a class="btn btn-md btn-success" href="<?php echo DIR;?>subpage">
    <?php echo Language::show('open_subpage', 'Welcome'); ?>
</a>
