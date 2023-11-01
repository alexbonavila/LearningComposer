<?php

namespace Alexbonavila\LearningComposer\Controller;

use Alexbonavila\LearningComposer\Model\SillyModel;
use Alexbonavila\LearningComposer\View\SillyView;

class SillyController
{
    public function getMessage()
    {
        $model = new SillyModel();
        $message = $model->getSillyMessage();
        $view = new SillyView();
        return $view->sillyView($message);
    }
}
