<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Linkcategory
 * 
 * @property int $linkCategoryId
 * @property int|null $installationId
 * @property string|null $linkCategoryName
 * @property int $projectId
 * @property int|null $linkCategoryParentId
 * @property string|null $categoryColor
 * 
 * @property Project $project
 * @property Linkcategory|null $linkcategory
 * @property Collection|Linkcategory[] $linkcategories
 * @property Collection|Linkitem[] $linkitems
 *
 * @package App\Models
 */
class Linkcategory extends Model
{
	protected $table = 'linkcategories';
	protected $primaryKey = 'linkCategoryId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectId' => 'int',
		'linkCategoryParentId' => 'int'
	];

	protected $fillable = [
		'installationId',
		'linkCategoryName',
		'projectId',
		'linkCategoryParentId',
		'categoryColor'
	];

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function linkcategory()
	{
		return $this->belongsTo(Linkcategory::class, 'linkCategoryParentId');
	}

	public function linkcategories()
	{
		return $this->hasMany(Linkcategory::class, 'linkCategoryParentId');
	}

	public function linkitems()
	{
		return $this->hasMany(Linkitem::class, 'linkCategoryId');
	}
}
