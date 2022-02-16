<?php

use LDAP\Result;

class ResultsController
{
    public function index()
    {
        $results_list = Result::getAll();
        require_once('views/Results/index_results.php');
    }
}
?>