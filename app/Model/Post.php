<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */

class Post extends AppModel {
	public $displayField = 'title';

	public $validate = [
		'title' => [
			'notEmpty' => [
				'rule' => ['notEmpty'],
				'message' => 'タイトルは必須入力です',
			],
			'maxLength' => [
				'rule' => ['maxLength', '255'],
				'message' => 'タイトルは255文字以内で入力してください',
			],
		],
	];
}
