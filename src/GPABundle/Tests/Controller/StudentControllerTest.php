<?php

namespace GPABundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use GPABundle\Controller\StudentController;

//error_reporting(0);

class StudentControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testvalidateGPA()
    {
        $controller = new StudentController();
        $result = $controller->validateGPA(54,15);
        $result2 = $controller->validateGPA(54,19);
        $result3 = $controller->validateGPA(54,160);
        

        $this->assertEquals(3.6, $result);

        $this->assertEquals(3.8, $result3);
        
                $this->assertEquals(3.6, $result2);
    }
}
