<?php

/**
 * Created by PhpStorm.
 * User: Inderjeet Singh
 * Date: 12/02/17
 * Time: 12:44 PM
 */

namespace App\Models;

//use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Encryption\Encrypter;
use Exception;

class User extends Model {
    protected $table = 'users';
    protected $dates = array();
    protected $fillable = array();
     

    public static function getData($input) {
        try {
            return self::select(\DB::raw('name AS name,TIME_TO_SEC(TIMEDIFF(updated_at,created_at)) as diff'))
                    ->groupBy('updated_by')
                    ->get()->toArray();
        } catch (Exception $ex) {
            print_r($ex->getMessage());die;
            return \Log::info($ex);
        }
    }
    
}
