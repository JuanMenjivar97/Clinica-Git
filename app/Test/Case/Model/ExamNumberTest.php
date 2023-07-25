<?php
App::uses('ExamNumber', 'Model');

/**
 * ExamNumber Test Case
 */
class ExamNumberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.exam_number',
		'app.patient',
		'app.booking',
		'app.user',
		'app.ipg',
		'app.ppg'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ExamNumber = ClassRegistry::init('ExamNumber');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExamNumber);

		parent::tearDown();
	}

}
