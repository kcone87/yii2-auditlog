Yii2 Audit Log
==============
Yii2 Audit Log. This extension logs all models actions; find/insert/update/delete.
This extension is a fork from Ozan Topoglu's original extension ozantopoglu/yii2-auditlog
Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist kcone87/yii2-auditlog "*"
```

or add

```
"kcone87/yii2-auditlog": "*"
```

to the require section of your `composer.json` file.

Go to yii app folder. and type:
```
./yii migrate --migrationPath=@vendor/kcone87/yii2-auditlog/migrations
```

add these lines in the "repositories" section
```
{
    "type": "vcs",
    "url": "https://github.com/kcone87/yii2-auditlog"
}
```

Usage
------------
```
<?php
namespace app\models;
use Yii;
use kcone87\auditlog\behaviors\LoggableBehavior;

class MyModel extends \yii\db\ActiveRecord
{
	public function behaviors() {
		return [
			[
				'class' => LoggableBehavior::className(),
				'ignoredAttributes' => ['created_at', 'updated_at', 'created_by', 'updated_by'], // default []
				'ignorePrimaryKey' => true, // default false
				'ignorePrimaryKeyForActions' => ['insert', 'update'], //default [] Note: (if ignorePrimaryKey set to true, ignorePrimaryKeyForActions is empty will apply for all)
			],
		];
	}
}
```
