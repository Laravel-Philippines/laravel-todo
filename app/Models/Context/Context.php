<?php

namespace App\Models\Context;

use Illuminate\Database\Eloquent\Model;
use App\Models\Context\Traits\Scope\ContextScope;
use App\Models\Context\Traits\Attribute\ContextAttribute;
use App\Models\Context\Traits\Relationship\ContextRelationship;

class Context extends Model
{
    use ContextScope,
        ContextAttribute,
        ContextRelationship;

    protected $table;

    protected $fillable = ['name', 'description'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = 'contexts';
    }
}
