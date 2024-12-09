<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * 
 * @property int $tagId
 * @property string $tagName
 * @property string|null $tagColour
 * @property int $projectId
 * @property int $installationId
 * @property Carbon $dateLastUsed
 * @property Carbon|null $tagDateCreated
 * @property int|null $tagCreatedByUserId
 * @property Carbon|null $tagDateUpdated
 * @property int|null $tagUpdatedByUserId
 * 
 * @property Collection|TagsItem[] $tags_items
 *
 * @package App\Models
 */
class Tag extends Model
{
	protected $table = 'tags';
	protected $primaryKey = 'tagId';
	public $timestamps = false;

	protected $casts = [
		'projectId' => 'int',
		'installationId' => 'int',
		'dateLastUsed' => 'datetime',
		'tagDateCreated' => 'datetime',
		'tagCreatedByUserId' => 'int',
		'tagDateUpdated' => 'datetime',
		'tagUpdatedByUserId' => 'int'
	];

	protected $fillable = [
		'tagName',
		'tagColour',
		'projectId',
		'installationId',
		'dateLastUsed',
		'tagDateCreated',
		'tagCreatedByUserId',
		'tagDateUpdated',
		'tagUpdatedByUserId'
	];

	public function tags_items()
	{
		return $this->hasMany(TagsItem::class, 'tagId');
	}
}
