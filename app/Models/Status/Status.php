<?php

namespace App\Models\Status;

use Illuminate\Database\Eloquent\Model;
use App\Models\Status\Traits\Scope\StatusScope;
use App\Models\Status\Traits\Attribute\StatusAttribute;
use App\Models\Status\Traits\Relationship\StatusRelationship;

class Status extends Model
{
    use StatusScope,
        StatusAttribute,
        StatusRelationship;

    protected $table;

    protected $fillable = ['task_id', 'status'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = 'status';
    }
}
