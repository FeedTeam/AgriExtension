<?php
use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;
/**
 * Created by PhpStorm.
 * User: Phuc
 * Date: 10/09/2015
 * Time: 14:19
 */

//initialise hooks
$hooks = Hooks::get();

//hook for plugging in code into the footer
$hooks->run('footer');
?>

</body>
</html>