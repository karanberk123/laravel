<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\blog;
class blog extends Model
{
    use HasFactory;
 /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'banner',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
