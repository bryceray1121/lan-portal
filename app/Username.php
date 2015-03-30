<?php
/**
 * Created by PhpStorm.
 * User: bryce
 * Date: 3/25/15
 * Time: 8:28 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Username extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usernames';

    public function type()
    {
        return $this->hasOne('App\UsernameType', 'id', 'type_id');
    }

}