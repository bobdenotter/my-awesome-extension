<?php

namespace BobDenOtter\MyAwesomeExtension;

use Bolt\Extension\BaseExtension;

class Extension extends BaseExtension
{
    public function getName(): string
    {
        return 'My Awesome Extension';
    }
}