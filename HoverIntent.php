<?php
namespace den67rus\jqueryHoverIntent;

use yii\base\Widget;
use yii\helpers\Json;
use yii\web\View;

/**
 * This is widget wrapper of hoverIntent jQuery https://github.com/briancherne/jquery-hoverIntent
 *
 * GitHub repository JS library: https://github.com/briancherne/jquery-hoverIntent
 * GitHub repository this widget: https://github.com/den67rus/yii2-jquery-hover-intent
 *
 * For example:
 *
 * ```php
 * HoverIntent::widget([
 *      'selector' => '#hoverIntent',
 *      'options' => [
 *           'over' => 'makeTall',
 *           'out' => 'makeShort',
 *           'timeout' => 100,
 *      ],
 * ]);
 * ```
 * 
 * @author Sevostyanov Denis
 * @version 1.0.0
 */
class HoverIntent extends Widget
{
    /**
     * @var string widget selector.
     */
    public $selector;

    /**
     * @var array jquery-hoverIntent widget options.
     */
    public $options = [];
    
    public function init()
    {
        parent::init();

        HoverIntentAsset::register($this->view);

        $options = Json::encode($this->options);
        
        $js = '$("' . $this->selector . '").hoverIntent(' . $options . ');';
        $this->view->registerJs($js, View::POS_READY);
    }
    
    public function run()
    {

    }
}
