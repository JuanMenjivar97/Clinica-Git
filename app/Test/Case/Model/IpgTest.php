<?php
App::uses('Ipg', 'Model');

/**
 * Ipg Test Case
 */
class IpgTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ipg',
		'app.exam_number',
		'app.patient',
		'app.booking',
		'app.user',
		'app.ppg'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ipg = ClassRegistry::init('Ipg');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ipg);

		parent::tearDown();
	}

}
