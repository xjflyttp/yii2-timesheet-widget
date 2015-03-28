<?php
/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */
namespace xj\timesheet;

use Yii;
use yii\base\Widget;
use yii\web\View;

class Timesheet extends Widget {

    public $renderId;
    public $start;
    public $end;
    public $items;
    public $position = View::POS_READY;

    public function run() {
        if (empty($this->renderId) || empty($this->start) || empty($this->end) || empty($this->items)) {
            return;
        }

        //register asset
        TimesheetAsset::register($this->view);
        $itemsJsArray = \yii\helpers\Json::encode($this->items);

        $this->view->registerJs(<<<EOF
new Timesheet('{$this->renderId}', {$this->start}, {$this->end}, {$itemsJsArray});
EOF
                , $this->position);
    }

}
