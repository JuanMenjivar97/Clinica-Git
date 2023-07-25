<?php
App::uses('Ppg', 'Model');

/**
 * Ppg Test Case
 */
class PpgTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ppg',
		'app.exam_number',
		'app.patient',
		'app.booking',
		'app.user',
		'app.ipg'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ppg = ClassRegistry::init('Ppg');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ppg);

		parent::tearDown();
	}

}
