<?php 
$controllers = array('pages'=>['home','error'],
'maxperday'=>['index'],
'hospital'=>['index','search'],
'results'=>['index','newResults','addResults']);

function call($controller,$action){
    switch($controller)
    {
        case"pages": 
            $controller = new PagesController();
        break;    
        case"max_per_day": require_once("models/maxperdayModel.php");
                           $controller = new maxperdayController();
        break;

        case"results":  require_once("models/resultsModel.php");
                        $controller = new ResultsController();
        break;

        case"hospital": require_once("models/hospitalModel.php");
                        $controller = new hospital();
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