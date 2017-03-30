<?php
/**
 * User: bigdrop
 * Date: 04.12.15
 * Time: 12:46
 */

namespace bigdropinc\filters;


use yii\filters\AccessRule;

class AjaxRule extends AccessRule
{
    public function allows($action,$user,$request){
        $result = parent::allows($action,$user,$request);
        if($result){
            $result = $this->allow? $request->isAjax: !$request->isAjax;
        }
        return $result;
    }
}