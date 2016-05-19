# yii2-extensions
##个人yii2扩展
[![Latest Stable Version](https://poser.pugx.org/zyj/yii2-extensions/v/stable)](https://packagist.org/packages/zyj/yii2-extensions) [![Total Downloads](https://poser.pugx.org/zyj/yii2-extensions/downloads)](https://packagist.org/packages/zyj/yii2-extensions) [![Latest Unstable Version](https://poser.pugx.org/zyj/yii2-extensions/v/unstable)](https://packagist.org/packages/zyj/yii2-extensions) [![License](https://poser.pugx.org/zyj/yii2-extensions/license)](https://packagist.org/packages/zyj/yii2-extensions)
# 短信配置
在组件中配置：
```php
	#网信通
	'smser'=>[
		'class'=>'zyj\smser\Wxtsms',
		'username'=>'username',
		'password'=>'password',
	]
	#云片
	'smser'=>[
		'class'=>'zyj\smser\Ypsms',
		'apikey'=>'your apikey',
	]
```
## 短信使用
```php
    Yii::$app->smser->sendMsg($phone,$conetent);
```
#composer 安装
composer require zyj/yii2-extensions