<?php

namespace App\Models\Task;

use Illuminate\Database\Eloquent\Model;
use App\Models\Task\Traits\Scope\TaskScope;
use App\Models\Task\Traits\Attribute\TaskAttribute;
use App\Models\Task\Traits\Relationship\TaskRelationship;

class Task extends Model
{
    use TaskScope,
        TaskAttribute,
        TaskRelationship;

    protected $table;

    protected $fillable = [
        'task',
        'priority',
        'project',
        'context',
        'status',
        'user_id'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = 'tasks';
    }
}
