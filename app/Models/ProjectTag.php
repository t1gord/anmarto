<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Models\ProjectTag
 *
 * @property int $project_id
 * @property int $tag_id
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTag whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTag whereTagId($value)
 * @mixin \Eloquent
 */
class ProjectTag extends Pivot
{
    //
}
