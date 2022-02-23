<?php 
$controllers = array('pages'=>['home','error'],
                    'maxperday'=>['index','search','newMaxperday'],
                    'hospital'=>['index','search'],
                    'results'=>['index','newResults','addResults','updateForm'],
                    'user'=>['index'],
                    'login'=>['index'],
                    'prename'=>['index']);

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case"pages": 
            $controller = new PagesController();
        break;    
        case"maxperday": require_once("models/maxperdayModel.php");
                         require_once("models/hospitalModel.php");
                        $controller = new maxperdayController();
        break;

        case"results":  require_once("models/resultsModel.php");
                        $controller = new ResultsController();
        break;

        case"hospital": require_once("models/hospitalModel.php");
                        $controller = new hospital();
        break;

        case"user": require_once("models/userModel.php");
        break;

        case"login": require_once("models/loginModel.php");
        break;

        case"prename": require_once("models/prenameModel.php");
        break;

    }
    $controller->{$action}();
}

if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
        call($controller,$action);
    }
    else{
        call('pages','error');
    }
}
else{
    call('pages','error');
}
?>