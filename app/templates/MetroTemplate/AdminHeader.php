<?php
/**
 * Created by PhpStorm.
 * User: Phuc
 * Date: 10/09/2015
 * Time: 14:20
 */
use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;

//initialise hooks
$hooks = Hooks::get();
$template_name = 'MetroTemplate';
?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />

    <title>Template :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style</title>

    <link href="<?php echo Url::templatePath($template_name)?>css/metro.css" rel="stylesheet">
    <link href="<?php echo Url::templatePath($template_name)?>css/metro-icons.css" rel="stylesheet">
    <link href="<?php echo Url::templatePath($template_name)?>css/metro-responsive.css" rel="stylesheet">

    <script src="<?php echo Url::templatePath($template_name)?>js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo Url::templatePath($template_name)?>js/jquery.dataTables.min.js"></script>

    <script src="<?php echo Url::templatePath($template_name)?>js/metro.js"></script>

    <style>
        html, body {
            height: 100%;
        }
        body {
        }
        .page-content {
            padding-top: 3.125rem;
            min-height: 100%;
            height: 100%;
        }
        .table .input-control.checkbox {
            line-height: 1;
            min-height: 0;
            height: auto;
        }

        @media screen and (max-width: 800px){
            #cell-sidebar {
                flex-basis: 52px;
            }
            #cell-content {
                flex-basis: calc(100% - 52px);
            }
        }
    </style>

    <script>
        function pushMessage(t){
            var mes = 'Info|Implement independently';
            $.Notify({
                caption: mes.split("|")[0],
                content: mes.split("|")[1],
                type: t
            });
        }

        $(function(){
            $('.sidebar').on('click', 'li', function(){
                if (!$(this).hasClass('active')) {
                    $('.sidebar li').removeClass('active');
                    $(this).addClass('active');
                }
            })
        })
    </script>
</head>
<?php
$hooks->run('css');
$hooks->run('afterBody');
?>
<body class="bg-steel">