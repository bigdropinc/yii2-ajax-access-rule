# yii2-ajax-access-rule
Ajax access rule for yii2 access filter

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist bigdropinc/yii2-ajax-access-rule "*"
```

or add

```
bigdropinc/yii2-ajax-access-rule
```

to the require section of your `composer.json` file.


Usage
-----

For AccessControl rules use AjaxRule::className()

```
'access' => [
	            'class' => AccessControl::className(),
	            'rules' => [
	            	[	
	                    'class' => AjaxRule::className(),
	                    'actions' => ['some-action'],
	                    'verbs' => ['POST'],
	                    'allow' => true #this will allow only ajax requests for specified action
	                ],
	            	[	
	                    'class' => AjaxRule::className(),
	                    'actions' => ['another-action'],
	                    'allow' => false #this will allow only non-ajax request for specified action
	                ],
	            ]
]
```
 