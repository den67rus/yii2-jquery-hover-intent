yii2-jquery-hover-intent
================================================================================

This is widget wrapper of hoverIntent jQuery Plug-in https://github.com/briancherne/jquery-hoverIntent for Yii2.

##Installation
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run
```
$ php composer.phar require den67rus/yii2-jquery-hover-intent "~1.0.0"
```

or add
```
"den67rus/yii2-jquery-hover-intent": "~1.0.0"
```

to the **require** section of your **composer.json** file.

##How use

Added following code to your view:

```php
...

use den67rus\jqueryHoverIntent\HoverIntent;

HoverIntent::widget([
    'selector' => '#hoverIntent',
    'options' => [
        'over' => 'makeTall',
        'out' => 'makeShort',
        'timeout' => 100,
    ],
]);

...
```

##Options of widget

| **Name**       | **Description**                                                                              |
|----------------|----------------------------------------------------------------------------------------------|
| $selector      | jQuery selector                                                                              |
| $options       | hoverIntent options: http://cherne.net/brian/resources/jquery.hoverIntent.html               |

##License

yii2-jquery-hoverIntent is released under the Apache 2.0 License.
