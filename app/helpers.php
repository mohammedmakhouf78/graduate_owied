<?php

use Illuminate\Support\Facades\Request;

if(!function_exists('currentRequest'))
{
    function currentRequest($name)
    {
        return Request::is("$name","$name/*");
    }
}
