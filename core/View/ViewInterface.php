<?php

namespace core\View;

interface ViewInterface
{
    public function page(string $namePage, string $nameTitle, string $nameLayouts);
}
