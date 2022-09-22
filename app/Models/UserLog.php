<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    use HasFactory;
    protected $table = "itrnal_usr_activity_log";
    protected $fillable =[
        "access_url",
        "action",
        "created_at",
        "email",
        "internal_user_id",
        "is_user_active",
        "name",
        "user_id",
        "username",
        "data"
    ];
}
