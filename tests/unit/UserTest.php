<?php
class UserTest extends \PHPUnit\Framework\TestCase{
    
    //These 2 are successfull in unit testing
    public function testReturnUserName(){
        $user = new \App\Model\User;
        $user->setUserName('Ashik');
        $this->assertEquals($user->getUserName(), 'Ashik');
    }
   
    public function testReturnEmailAddress(){
		$user = new \App\Model\User;
		$user->setEmail('ashik123@gmail.com');
        $this->assertEquals($user->getEmail(), 'ashik123@gmail.com');
    }


    //This 1 is failed in unit testing
    
    public function testUserNameIsEmptyByDefault(){
        $user = new \App\Model\User;
        $user->setUserName('Ashik');
        $this->assertEquals($user->getUserName(), '');
    } 
    
}
