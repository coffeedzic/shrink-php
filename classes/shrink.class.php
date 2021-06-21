<?php
    /**
     * Shrink PHP
     * Shrink class
     *
     * @author    Edin Kahvedžić <edin@coffeedzic.com>
     * @version   1.0.0
     */

    class Shrink extends DbObject {
        /**
         * Database table name variable
         * 
         * @var string
         */

        protected static $db_table = 'codes';

        /**
         * Database table fields array
         * 
         * @var array
         */

        protected static $db_table_fields = array('code', 'url', 'redirects');

        /**
         * Unique ID variable for our table rows
         * 
         * @var int
         */

        public $id;

        /**
         * Variable that contains randomly generated code
         * 
         * @var string
         */

        public $code;

        /**
         * Variable that contains entered url
         * 
         * @var string
         */

        public $url;

        /**
         * Variable that contains # of redirects
         * 
         * @var int
         */

        public $redirects;

        /**
         * Constructor which assign our values to our variables
         * @param array $args
         */

        public function __construct($args) {
            if(isset($args['id'])) { $this->id = $args['id']; }
            $this->code = $args['code'];
            $this->url = $args['url'];
            $this->redirects = $args['redirects'];
        }
        
    }

?>