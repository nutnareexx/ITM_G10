<?php

use LDAP\Result;

class ResultsController
{
    public function index()
    {
        $resultsList = Results::getAll();
        require_once('views/Results/index_results.php');
    }
}
?>