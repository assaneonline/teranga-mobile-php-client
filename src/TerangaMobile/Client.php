<?php

namespace TerangaMobile;

class Client extends \Core\BaseClient {

    const API_BASE_PATH = 'http://teranga-mobile.pasteur.sn/api/v1/';

    function getSearchFieldUid(){
        return $this->get_post_field("field_uid");
    }

    function getSearchFieldQuery(){
        return $this->get_post_field("query");
    }
}