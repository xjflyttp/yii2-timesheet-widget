# yii2-timesheet-widget
```
https://github.com/sbstjn/timesheet.js
```

composer.json
---------
```json
"require": {
    "xj/yii2-timesheet-widget": "*"
},
```
In View
---------
```php
use xj\timesheet\TimesheetAsset;
TimesheetAsset::register($this);
```

In Assets depends
-----------
```php
public $depends = [
    'xj\timesheet\TimesheetAsset',
];
```
