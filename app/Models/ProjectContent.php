<?php

namespace App\Models;

use App\Enums\ProjectContentType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProjectContent
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $text
 * @property mixed|null $list
 * @property string|null $image
 * @property string $type
 * @property int $project_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectContent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectContent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectContent query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectContent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectContent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectContent whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectContent whereList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectContent whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectContent whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectContent whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectContent whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectContent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectContent extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'type' => ProjectContentType::class,
    ];

    protected $hidden = [
        'project_id',
        'created_at',
        'updated_at',
    ];
}
