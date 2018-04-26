<?php

class Custom_db extends CI_Model {

    public function getdatabase($db_name) {

        $config['hostname'] = "localhost";
        $config['username'] = "root";
        $config['password'] = "";
        $config['database'] = $db_name;
        $config['dbdriver'] = "mysqli";
        $config['dbprefix'] = "";
        $config['pconnect'] = FALSE;
        $config['db_debug'] = TRUE;
        $config['cache_on'] = FALSE;
        $config['cachedir'] = "";
        $config['char_set'] = "utf8";
        $config['dbcollat'] = "utf8_general_ci";

        //$db_config = $this->custom_db->getdatabase('dvs_dsu_2016');
        $cust_db = $this->load->database($config, TRUE);

        return $cust_db;
    }

}
