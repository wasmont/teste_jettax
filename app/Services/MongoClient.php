<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class MongoClient
{
    protected static $mongoClient;


    /**
     * @param null $database
     * @param false $newClient
     * @return mixed
     */
    public static function getClient($database = null, $newClient = false)
    {
        if (empty($database)) {
            $database = env('DB_DATABASE');
        }

        if (
            self::$mongoClient &&
            !$newClient
        ) {
            self::$mongoClient;

        }

        return DB::connection(env('DB_CONNECTION'))->getMongoClient()->$database;
    }
}
