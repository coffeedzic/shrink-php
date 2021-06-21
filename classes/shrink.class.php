<?php

    class Shrink extends DbObject {

        protected static $db_table = 'codes';
        protected static $db_table_fields = array('code', 'url', 'redirects');

        public $id;
        public $code;
        public $url;
        public $redirects;

        public function __construct($args) {
            if(isset($args['id'])) { $this->id = $args['id']; }
            $this->code = $args['code'];
            $this->url = $args['url'];
            $this->redirects = $args['redirects'];
        }

    }

?>