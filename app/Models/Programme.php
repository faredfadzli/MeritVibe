<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prog_name',
        'prog_date',
        'prog_time',
        'prog_place',
        'prog_poster',
        'prog_managed_by',
        'prog_pic_name',
        'prog_pic_email',
        'prog_pic_tel',
        'createdBy',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'participations')
                ->withPivot('proof_image', 'is_approve', 'point_awarded', 'comment')
                ->withTimestamps();
    }
}
