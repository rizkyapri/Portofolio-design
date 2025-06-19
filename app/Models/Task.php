<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tasks';
    protected $fillable = ['title', 'description', 'status', 'order_column', 'sort_order', 'deleted_at', 'due_date', 'assignee_id'];

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assignee_id');
    }
}
