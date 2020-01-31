<?php

require_once (dirname(__FILE__) . '/ffxivDB.php');

class ffxivSchema
{
    const TABLE_CASE_OPTION = 'ffxiv_case'; // false is camel case, true is lower

    private static $_usingLowercase = null;

    private static $tables = [
        "ffxiv_datacenters" => "(
            `datacenter_id` int(10) NOT NULL AUTO_INCREMENT,
            `datacenter_name` varchar(255) NOT NULL,
            PRIMARY KEY (`datacenter_id`)
        ) AUTO_INCREMENT=9 DEFAULT CHARSET=utf8",
        "ffxiv_servers" => "(
            `server_id` int(10) NOT NULL AUTO_INCREMENT,
            `server_name` varchar(255) NOT NULL,
            `datacenter_id` int(10) NOT NULL,
            PRIMARY KEY (`server_id`),
            KEY `datacenter_id` (`datacenter_id`)
        ) AUTO_INCREMENT=70 DEFAULT CHARSET=utf8",
        "ffxiv_character" => "(
            `character_id` int(10) NOT NULL AUTO_INCREMENT,            
            `datacenter_id` int(10) NOT NULL,
            `server_id` int(10) NOT NULL,
            `character_title` varchar(255) DEFAULT NULL,
            `character_race` varchar(10) NOT NULL,
            `character_tribe` varchar(255) NOT NULL,
            `character_gardian` varchar(255) NOT NULL,
            `character_grand_company` varchar(255) DEFAULT NULL,
            `character_free_company` varchar(255) DEFAULT NULL,
            `character_minion_percent` int(3) NOT NULL,
            `character_mount_percent` int(3) NOT NULL,
            `character_ast_level` int(2) DEFAULT NULL,
            `character_whm_level` int(3) DEFAULT NULL,
            `character_sch_level` int(3) DEFAULT NULL,
            `character_gnb_level` int(3) DEFAULT NULL,
            `character_drk_level` int(3) DEFAULT NULL,
            `character_war_level` int(3) DEFAULT NULL,
            `character_pld_level` int(3) DEFAULT NULL,
            `character_blu_level` int(3) DEFAULT NULL,
            `character_rdm_level` int(3) DEFAULT NULL,
            `character_blm_level` int(3) DEFAULT NULL,
            `character_smn_level` int(3) DEFAULT NULL,
            `character_brd_level` int(3) DEFAULT NULL,
            `character_mch_level` int(3) DEFAULT NULL,
            `character_dnc_level` int(3) DEFAULT NULL,
            `character_sam_level` int(3) DEFAULT NULL,
            `character_nin_level` int(3) DEFAULT NULL,
            `character_drg_level` int(3) DEFAULT NULL,
            `character_mnk_level` int(3) DEFAULT NULL,
            `character_alc_level` int(3) DEFAULT NULL,
            `character_cul_level` int(3) DEFAULT NULL,
            `character_wvr_level` int(3) DEFAULT NULL,
            `character_ltw_level` int(3) DEFAULT NULL,
            `character_crp_level` int(3) DEFAULT NULL,
            `character_gsm_level` int(3) DEFAULT NULL,
            `character_arm_level` int(3) DEFAULT NULL,
            `character_bsm_level` int(3) DEFAULT NULL,
            `character_btn_level` int(3) DEFAULT NULL,
            `character_min_level` int(3) DEFAULT NULL,
            `character_fsh_level` int(3) DEFAULT NULL,
            PRIMARY KEY (`character_id`),
            KEY `datacenter_id` (`datacenter_id`),
            KEY `server_id` (`server_id`)
        ) DEFAULT CHARSET=utf8"
    ];

    private $db = false;

    public function __construct($dbhost = false, $dbuser = false, $dbpassword = false, $dbname = false) {
        $this->db = new ffxivDB();
    }

    // Drop all database tables for plugin
    public function dropAll() {
        foreach (self::$tables as $table => $def) {
            $originalTable = ffxivDB::networkPrefix() . $table;
            $convertedTable = ffxivDB::networkPrefix() . strtolower($table);

            $this->db->queryWrite("DROP TABLE IF EXISTS {$convertedTable}");
            $this->db->queryWrite("DROP TABLE IF EXISTS {$originalTable}");
        }
    }

    // Drop a specific table for plugin
    public function drop($table) {
        $originalTable = ffxivDB::networkTable($table, false);
        $convertedTable = ffxivDB::networkTable($table);

        $this->db->queryWrite("DROP TABLE IF EXISTS {$convertedTable}");

        if ($originalTable !== $convertedTable) {
            $this->db->queryWrite("DROP TABLE IF EXISTS {$originalTable}");
        }
    }

    // Create all needed database tables for plugin
    public function createAll() {
        foreach (self::$tables as $table => $def) {
            $this->db->queryWrite("CREATE TABLE IF NOT EXISTS " . ffxivDB::networkTable($table) . " " . $def);
        }
    }

    // Create a specific database table for plugin
    public function create($table) {
        $this->db->queryWrite("CREATE TABLE IF NOT EXISTS " . ffxivDB::networkTable($table) . " " . self::$tables[$table]);
    }

    // Lists tables for for plugin
    public function tableList() {
        return array_keys(self::$tables);
    }

    public static function usingLowercase() {
        if (self::$_usingLowercase === null) {
            if (is_multisite() && function_exists('update_network_option')) {
                self::$_usingLowercase = !!get_network_option(null, self::TABLE_CASE_OPTION);
            } else {
                self::$_usingLowercase = !!get_option(self::TABLE_CASE_OPTION);
            }
        }

        return self::$_usingLowercase;
    }

}