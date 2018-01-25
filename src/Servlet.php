<?php
declare(strict_types=1);

namespace src;

class Servlet 
{
    private $messageProvider;
    
    
    public function __construct(MessageProvider $messageProvider) 
    {
        $this->messageProvider = $messageProvider;
    }
    
    public function printMessage()
    {
       echo $this->messageProvider->getMessage(); 
    }
}
?>