<?php
/**
 * @link http://hiqdev.com/yii2-hi3a-authclient
 * @copyright Copyright (c) 2015 HiQDev
 * @license http://hiqdev.com/yii2-hi3a-authclient/license
 */

namespace hi3a\authclient;

class Collection extends \yii\authclient\Collection
{
    public function getClient ($id = null) {
        if ($id === null) {
            list($id,$dummy) = each($this->getClients());
        };
        return parent::getClient($id);
    }
}
