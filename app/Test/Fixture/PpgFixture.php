<?php
/**
 * Ppg Fixture
 */
class PpgFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ppg';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'tetrad' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'unsigned' => false),
		'A' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'B' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'C' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'D' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'ascendancy' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'responsibility' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'emotional' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'sociability' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'self_esteem' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
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
			'A' => 'Lorem ipsum dolor ',
			'B' => 'Lorem ipsum dolor ',
			'C' => 'Lorem ipsum dolor ',
			'D' => 'Lorem ipsum dolor ',
			'ascendancy' => 1,
			'responsibility' => 1,
			'emotional' => 1,
			'sociability' => 1,
			'self_esteem' => 1,
			'exam_number_id' => 1
		),
	);

}
