<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use src\ServletFactory;

class ServletFactoryTest extends TestCase
{
    
    public function testServletPrintsMessage()
    {
        ob_start();
        
        $servletFactory = new ServletFactory();
        $databaseServlet = $servletFactory->createServer(ServletFactory::DATABASE_MODE);
        $databaseServlet->printMessage();
        
        $outputBufferContents = ob_get_contents();
        $outputBufferContents = preg_replace("/\r|\n/", "", $outputBufferContents);
        
        ob_end_flush();
       
        $this->assertEquals('Cohesion Digital', $outputBufferContents, 'The output buffer doesn\'t contain the contents we expected. Please compare the actual and expected values below:');
    }
}
?>
