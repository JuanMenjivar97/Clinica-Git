<?php
/**
 * Booking Fixture
 */
class BookingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'room' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'faculty' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'booking_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'start_time' => array('type' => 'time', 'null' => false, 'default' => null),
		'finish_time' => array('type' => 'time', 'null' => false, 'default' => null),
		'status_room' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'comment' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'patient_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'room' => 'Lorem ipsum dolor sit amet',
			'faculty' => 'Lorem ipsum dolor sit amet',
			'booking_date' => '2023-06-26',
			'start_time' => '09:43:13',
			'finish_time' => '09:43:13',
			'status_room' => 'Lorem ipsum dolor sit a',
			'comment' => 'Lorem ipsum dolor sit amet',
			'created' => '2023-06-26 09:43:13',
			'modified' => '2023-06-26 09:43:13',
			'patient_id' => 1
		),
	);

}
