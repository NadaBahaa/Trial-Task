<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'status',
        'created_by',
    ];
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
