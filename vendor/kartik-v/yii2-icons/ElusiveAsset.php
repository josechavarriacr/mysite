<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2017
 * @package yii2-icons
 * @version 1.4.2
 */

namespace kartik\icons;

use kartik\base\BaseAssetBundle;

/**
 * Asset bundle for Elusive icon set. Uses client assets (CSS, images, and fonts) from Elusive Icons repository.
 * 
 * @see http://shoestrap.org/downloads/elusive-icons-webfont/
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class ElusiveAsset extends BaseAssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/lib/elusive');
        $this->setupAssets('css', ['css/elusive-webfont']);
        parent::init();
    }
}