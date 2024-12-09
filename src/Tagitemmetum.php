<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tagitemmetum
 * 
 * @property int $tagItemMetaId
 * @property int|null $installationId
 * @property int|null $tagItemId
 * @property string $tagItemMetaKey
 * @property string $tagItemMetaValue
 * 
 * @property TagsItem|null $tags_item
 *
 * @package App\Models
 */
class Tagitemmetum extends Model
{
	protected $table = 'tagitemmeta';
	protected $primaryKey = 'tagItemMetaId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'tagItemId' => 'int'
	];

	protected $fillable = [
		'installationId',
		'tagItemId',
		'tagItemMetaKey',
		'tagItemMetaValue'
	];

	public function tags_item()
	{
		return $this->belongsTo(TagsItem::class, 'tagItemId');
	}
}
