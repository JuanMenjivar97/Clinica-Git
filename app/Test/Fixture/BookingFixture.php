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
		'status_room' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'comment' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'unique'),
		'patient_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'unique'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'patient_id' => array('column' => 'patient_id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 1),
			'patient_id_2' => array('column' => 'patient_id', 'unique' => 0),
			'user_id_2' => array('column' => 'user_id', 'unique' => 0)
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
			'booking_date' => '2023-07-24',
			'start_time' => '07:37:29',
			'finish_time' => '07:37:29',
			'status_room' => 'Lorem ipsum dolor ',
			'comment' => 'Lorem ipsum dolor sit amet',
			'created' => '2023-07-24 07:37:29',
			'modified' => '2023-07-24 07:37:29',
			'user_id' => 1,
			'patient_id' => 1
		),
	);

}
