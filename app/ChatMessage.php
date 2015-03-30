<?php
/**
 * Created by PhpStorm.
 * User: bryce
 * Date: 3/26/15
 * Time: 2:15 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'chat_messages';
}