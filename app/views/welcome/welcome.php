<?php

use Core\Language;

?>

<div class="page-header">
	<h1><?php echo $data['title'] ?></h1>
</div>

<p><?php echo $data['welcome_message'] ?></p>

<a class="btn btn-md btn-success" href="<?php echo DIR;?>subpage">
	<?php echo Language::show('open_subpage', 'Welcome'); ?>
</a>
<a class="btn btn-md btn-success" href="<?php echo DIR;?>portal">
    portal
</a>
<a class="btn btn-md btn-success" href="<?php echo DIR;?>login">
    login
</a>

<a class="btn btn-md btn-success" href="<?php echo DIR;?>admin">
    admin
</a>

<p><?php var_dump($_SERVER[HTTP_USER_AGENT]) ?></p>