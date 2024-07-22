<?php 
// app/Logging/PrependIpAddress.php

namespace App\Logging;

use Illuminate\Support\Facades\Request;

class PrependIpAddress
{
    public function __invoke(array $record)
    {
        $ipAddress = Request::ip(); // Assuming you are using Laravel's Request facade
        $record['message'] = "[$ipAddress] " . $record['message'];

        return $record;
    }
}
