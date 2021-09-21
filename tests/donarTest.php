<?php

class donarTest extends BloodBank\donar
	
	public function testThatWeCanGetTheFirstName()
	{
		$name = new BloodBank\donar;

		$user->setName('Muhammad Ibrahim');

		$this->assertEquals($user->getName(), 'Muhammad Ibrahim');
	}

}
