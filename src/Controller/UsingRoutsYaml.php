<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class UsingRoutsYaml
{
    public function string(): Response
    {
        $randomString = bin2hex(random_bytes(10));

        return new Response(
            '<html><body>Random String : '.$randomString.'</body></html>'
        );
    }
}
