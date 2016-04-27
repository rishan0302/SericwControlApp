<?php
App::uses('AppModel', 'Model');
/**
 * Chemical Model
 *
 * @property Document $Document
 * @property Client $Client
 */
class Chemical extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	public $actsAs = array( 'AuditLog.Auditable' );

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'document_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Client' => array(
			'className' => 'Client',
			'joinTable' => 'chemicals_clients',
			'foreignKey' => 'chemical_id',
			'associationForeignKey' => 'client_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
