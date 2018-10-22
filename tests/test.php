<?php 

require_once dirname(__FILE__) . '/../src/Wrapper.php';

use PHPUnit\Framework\TestCase;

class WrapperTest extends TestCase {
 
    function testDoesNotWrapAShorterThanMaxCharsWord() {
        $wrapper = new Wrapper();
        $this->assertEquals('word', $wrapper->wrap('word', 5));
    }

    function testReturnFunction(){
    	$wrapper=new Wrapper();
    	$this->assertEquals('test',$wrapper->returnTest('test'));
    }
 
}

 ?>
