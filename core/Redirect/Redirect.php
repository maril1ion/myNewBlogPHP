<?php

namespace core\Redirect;

class Redirect implements RedirectInterface
{
    public function to($url)
    {
        header("Location: $url");
        exit;
    }
}
