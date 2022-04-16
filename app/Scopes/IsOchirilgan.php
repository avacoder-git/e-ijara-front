<?php

namespace App\Scopes;

use App\Models\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class IsOchirilgan implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $builder->whereNotIn('status_id', [25]);

    }
}
