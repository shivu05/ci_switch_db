# ci_switch_db
Switch DB module
This module helps us to dynamically switch to different databases for getting data.

    First we will create model file with the name custom_db.php and save it at application/models/ folder.
    Paste the below code into the newly created custom_db.php file.

    <?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

       class Custom_db extends CI_Model {

        /**
         * Function to get database connection 
         * @param: dbname
         * @returns: database object
         */
        public function getdatabase($db_name) {

            $config['hostname'] = "localhost";
            $config['username'] = "root";
            $config['password'] = "";
            $config['database'] = $db_name;
            $config['dbdriver'] = "mysql";
            $config['dbprefix'] = "";
            $config['pconnect'] = FALSE;
            $config['db_debug'] = TRUE;
            $config['cache_on'] = FALSE;
            $config['cachedir'] = "";
            $config['char_set'] = "utf8";
            $config['dbcollat'] = "utf8_general_ci";
            $cust_db = $this->load->database($config, TRUE);
            return $cust_db;
        }
    }

Note: Appropriate database credentials and access permissions are needed to establish connection

    Once the model file is created with appropriate code as mentioned above you can load model file in where ever its required and query the database as below:

    class Test_model extends CI_Model {

        public function __construct() {
            parent::__construct();
            $this->load->model('custom_db');
        }

        function get_archived_student_data(){
           $db = $this->custom_db->getdatabase($db_name);
           return $db->get('student_info')->result_array();
        }

    }//end of class

    We need to pass the database name as parameter to the getdatabase() function to which we wish to establish db connection. This function will return database object which we can use for any db transactions within the application.

The above code helps to connect to a given database (Which is expected to reside in the server to which connection is established). Like shown in the sample get_archived_student_data() any DB transactions can be done on the connected database.
