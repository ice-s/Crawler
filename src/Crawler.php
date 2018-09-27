<?php

namespace Ices\Crawler;

class Crawler
{
    public function __construct()
    {
        include(__DIR__."/libs/simplehtmldom_1_5/simple_html_dom.php");
    }
}