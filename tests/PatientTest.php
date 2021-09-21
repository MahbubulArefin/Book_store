<?php

class PatientTest extends \PHPUnit\Framework\TestCase
{
	
	public function testThatWeCanGetTheFirstName()
	{
		$user = new \App\Models\Patient;

		$user->setName('Nurul Amin');

		$this->assertEquals($user->getName(), 'Nurul Amin');
	}

    public function testGender()
	{
		$user = new \App\Models\Patient;

		$user->setGender('male');

		$this->assertEquals($user->getGender(), 'male');
	}

	public function testAge()
	{
		$user = new \App\Models\Patient;

		$user->setAge(50);

		$this->assertEquals($user->getAge(), 50);

		
	}

    public function testAppointment()
	{
		$user = new \App\Models\Patient;

		$user->setAppointment('7/4/2021');

		$this->assertEquals($user->getAppointment(), '7/4/2021');
    }

	public function testPatientBirthDate()
	{
		$user = new \App\Models\Patient;

		$user->setPatientBirthDate('9/5/1985');

		$this->assertEquals($user->getPatientBirthDate(), '9/5/1985');
    }
}



