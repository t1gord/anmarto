<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Feedback
 *
 * @property int $id
 * @property string $theme
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereUpdatedAt($value)
 * @property string $name
 * @property string $contact
 * @property string $working_hours
 * @property string $budget
 * @property mixed $projects
 * @property string|null $comment
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereBudget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereProjects($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereWorkingHours($value)
 * @mixin \Eloquent
 */
class Feedback extends Model
{
    use HasFactory;

    protected $guarded = [];
}
