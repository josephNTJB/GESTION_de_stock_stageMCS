<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $subject
 * @property string $action
 * @property string $description
 * @property int $user_id
 * @property string $created_at
 * @property string $updated_at
 */
class log_activities extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['subject', 'action', 'description', 'user_id', 'created_at', 'updated_at'];

}
