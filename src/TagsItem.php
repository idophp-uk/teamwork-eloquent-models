<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TagsItem
 * 
 * @property int $tagItemId
 * @property int|null $installationId
 * @property int $tagId
 * @property int $itemId
 * @property string $itemType
 * 
 * @property Tag $tag
 * @property Collection|Tagitemmetum[] $tagitemmeta
 *
 * @package App\Models
 */
class TagsItem extends Model
{
	protected $table = 'tags_items';
	protected $primaryKey = 'tagItemId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'tagId' => 'int',
		'itemId' => 'int'
	];

	protected $fillable = [
		'installationId',
		'tagId',
		'itemId',
		'itemType'
	];

	public function tag()
	{
		return $this->belongsTo(Tag::class, 'tagId');
	}

	public function tagitemmeta()
	{
		return $this->hasMany(Tagitemmetum::class, 'tagItemId');
	}
}
