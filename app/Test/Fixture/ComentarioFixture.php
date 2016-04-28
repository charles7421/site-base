<?php
/**
 * Comentario Fixture
 */
class ComentarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'comentario' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 265, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'noticia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'comentario' => 'Lorem ipsum dolor sit amet',
			'noticia_id' => 1,
			'usuario_id' => 1,
			'created' => '2015-09-16 01:28:32',
			'modified' => '2015-09-16 01:28:32'
		),
	);

}
