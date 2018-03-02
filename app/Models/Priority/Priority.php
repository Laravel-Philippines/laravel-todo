<?php

namespace App\Models\Priority;

use Illuminate\Database\Eloquent\Model;
use App\Models\Priority\Traits\Scope\PriorityScope;
use App\Models\Priority\Traits\Attribute\PriorityAttribute;
use App\Models\Priority\Traits\Relationship\PriorityRelationship;

class Priority extends Model
{
    use PriorityScope,
        PriorityAttribute,
        PriorityRelationship;

    protected $table;

    protected $fillable = ['task_id', 'priority', 'description'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = 'priorities';
    }
}
