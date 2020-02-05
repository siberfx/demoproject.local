<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\SiteConfig
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $address
 * @property string $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|SiteConfig newModelQuery()
 * @method static Builder|SiteConfig newQuery()
 * @method static Builder|SiteConfig query()
 * @method static Builder|SiteConfig whereAddress($value)
 * @method static Builder|SiteConfig whereContent($value)
 * @method static Builder|SiteConfig whereCreatedAt($value)
 * @method static Builder|SiteConfig whereId($value)
 * @method static Builder|SiteConfig whereName($value)
 * @method static Builder|SiteConfig wherePhone($value)
 * @method static Builder|SiteConfig whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SiteConfig extends Model
{
    protected $guarded = [];
}
