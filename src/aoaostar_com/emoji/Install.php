<?php

namespace plugin\aoaostar_com\emoji;


use app\model\Plugin;

class Install implements \plugin\Install
{

    public function Install(Plugin $model)
    {
        $model->title = "emoji表情";
        $model->class = plugin_current_class_get(__NAMESPACE__);
        $model->alias = base_space_name(__NAMESPACE__);
        $model->desc = '各种各样的emoji表情';
        $model->version = 'v1.1';
    }

    public function UnInstall(Plugin $model)
    {

    }
}
