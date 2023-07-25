<?php
/**
 * Ipg Fixture
 */
class IpgFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ipg';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'tetrad' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'unsigned' => false),
		'A' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'B' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'C' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'D' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'caution' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'originality' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'comprehension' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'vitality' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'exam_number_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'unique'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'exam_number_id' => array('column' => 'exam_number_id', 'unique' => 1),
			'exam_number_id_2' => array('column' => 'exam_number_id', 'unique' => 0)
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
			'tetrad' => 1,
			'A' => 'Lorem ips',
			'B' => 'Lorem ips',
			'C' => 'Lorem ips',
			'D' => 'Lorem ips',
			'caution' => 1,
			'originality' => 1,
			'comprehension' => 1,
			'vitality' => 1,
			'exam_number_id' => 1
		),
	);

}
