<?php

namespace Alienigena\ViviendaBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AlienigenaViviendaBundle extends Bundle
{
	public function getParent(){
        return 'FOSUserBundle';
    }   
}
