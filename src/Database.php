<?php
declare(strict_types=1);

namespace src;

class Database implements MessageProvider
{
    public function getMessage(): string
    {
        return "Cohesion Digital";
    }
}
?>

