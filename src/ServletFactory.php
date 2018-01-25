<?php
declare(strict_types=1);

namespace src;

use Exception;

class ServletFactory
{
    public const DATABASE_MODE = 0;

    public function createServer(int $mode) : Servlet {
        switch ($mode) {
            case (self::DATABASE_MODE):
                $messageProvider = new Database();
                return new Servlet($messageProvider);
        }
        
        throw new Exception('Invalid servlet mode.');
    }
}
?>