<?php

/**
 * TimesheetAsset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\timesheet;

use yii\web\AssetBundle;

class TimesheetAsset extends AssetBundle {

    public $sourcePath = '@bower/timesheet.js/dist';
    public $basePath = '@webroot/assets';
    public $css = ['timesheet.css'];
    public $js = ['timesheet.js'];

}
