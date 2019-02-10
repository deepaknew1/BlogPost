<?php

$config=[

		'add_article_rules'=>[
						[
						'field'=>'article_title',
						'lable'=>'Article title',
						'rules'=>'required'

							],
						[

						'field'=>'article_body',
						'label'=>'Article body',
						'rules'=>'required'

						]
						
					],
		'login_validation'=>[
						[
						'field'=>'username',
						'lable'=>'Username',
						'rules'=>'required'

							],
						[

						'field'=>'password',
						'label'=>'Password',
						'rules'=>'required'

						]
						
					],
		'registera'=>[
					[

						'field'=>'username',
						'label'=>'Username',
						'rules'=>'required'

						],
						[

						'field'=>'email',
						'label'=>'Email',
						'rules'=>'required|trim|is_unique[users.email]'

						],
						[

						'field'=>'password',
						'label'=>'Password',
						'rules'=>'required'

						],
						[

						'field'=>'firstname',
						'label'=>'Firstname',
						'rules'=>'required'

						],
						[

						'field'=>'lastname',
						'label'=>'Lastname',
						'rules'=>'required'

						]
					],			

];


?>