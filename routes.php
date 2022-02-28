<?php 
$controllers = array('pages'=>['home','error'],
                    'maxperday'=>['index','search','newMaxperday','addMaxperday','updateForm','update','deleteConfirm','delete'],
                    'hospital'=>['index','search'],
                    'results'=>['indexNurse','newResultsNurse','addResultsNurse','updateFormNurse','updateNurse',
                                'deleteConfirmNurse','deleteNurse','uploadNurse','searchNurse','indexUser',
                                'Submit'],
                    'user'=>['index','signin','adduser','indexlogin','login','addpassword'],
                    'login'=>[],
                    'prename'=>['index'],
                    'booking'=>['index','search','bookdate','checkbook']);

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
                        require_once("models/hospitalModel.php");
                        require_once("upload2/upload_file.php");
                        $controller = new ResultsController();

        break;

        case"hospital": require_once("models/hospitalModel.php");
                        $controller = new hospital();
        break;

        case"user": require_once("models/userModel.php");
                    require_once("models/prenameModel.php");
                    require_once("models/loginModel.php");
                    $controller = new userController();
        break;

        case"login": require_once("models/loginModel.php");
                    $controller = new loginController();
        break;

        case"prename": require_once("models/prenameModel.php");
        break;

        case"booking": require_once("models/maxperdayModel.php");
                       require_once("models/hospitalModel.php");
                    $controller = new bookingController();
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