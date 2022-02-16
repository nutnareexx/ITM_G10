<?php

use LDAP\Result;

class ResultsController
{
    public function index()
    {
        $results_list = Results::getAll();
        require_once('views/Results/index_results.php');
    }
}
?>