<?php

namespace TerangaMobile;

class Client extends \Core\BaseClient {

    const API_BASE_PATH = 'http://teranga-mobile.pasteur.sn/api/v1/';

    function getSearchFieldUid(){
        $input = $this->getJSONInputStream();
        return $input["field_uid"] ?? FALSE;
    }

    function getSearchFieldQuery(){
        $input = $this->getJSONInputStream();
        return $input["query"] ?? FALSE;
    }
}