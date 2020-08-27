<?php

namespace TerangaMobile;

class Client extends \Core\BaseClient {

    const API_BASE_PATH = 'http://teranga-mobile.pasteur.sn/api/v1/';

    function getSearchFieldUid(){
        return $_REQUEST["field_uid"] ?? FALSE;
    }

    function getSearchFieldQuery(){
        return $_REQUEST["query"] ?? FALSE;
    }
}