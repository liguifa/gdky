<?php
require_once '../../../../../Admin/Controller/Lib/Common/lib/PHPMailer/test/vendor/autoload.php';
spl_autoload_register(function ($class) {
    require_once strtr($class, '\\_', '//').'.php';
});
