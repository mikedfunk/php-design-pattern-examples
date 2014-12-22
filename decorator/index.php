<?php

// get the composer autoloader
require __DIR__ . '/vendor/autoload.php';

use SiteTitle\HomepageTitleDecorator;
use SiteTitle\BaseTitle;
use SiteTitle\NewLineTitleDecorator;

// wrap the base title with as many decorators as you like
echo (new NewLineTitleDecorator(new HomepageTitleDecorator(new BaseTitle())))->getTitle();
