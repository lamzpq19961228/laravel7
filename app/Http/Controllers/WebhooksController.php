<?php

namespace App\Http\Controllers;

class WebhooksController extends Controller
{
    public function webhooks()
    {
        $local = '/www/wwwroot/laravel7'; //项目路径
        $result = shell_exec("cd {$local} && git pull 2>&1");
        echo '<pre>';
        var_dump($result);
    }
}
