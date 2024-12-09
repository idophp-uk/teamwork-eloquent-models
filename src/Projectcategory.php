<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectcategory
 * 
 * @property int $projectCategoryId
 * @property string $projectCategoryName
 * @property int $installationId
 * @property int|null $projectCategoryParentId
 * @property string|null $categoryColor
 * 
 * @property Installation $installation
 * @property Projectcategory|null $projectcategory
 * @property Collection|Projectcategory[] $projectcategories
 * @property Collection|Project[] $projects
 *
 * @package App\Models
 */
class Projectcategory extends Model
{
	protected $table = 'projectcategories';
	protected $primaryKey = 'projectCategoryId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectCategoryParentId' => 'int'
	];

	protected $fillable = [
		'projectCategoryName',
		'installationId',
		'projectCategoryParentId',
		'categoryColor'
	];

	public function installation()
	{
		return $this->belongsTo(Installation::class, 'installationId');
	}

	public function projectcategory()
	{
		return $this->belongsTo(Projectcategory::class, 'projectCategoryParentId');
	}

	public function projectcategories()
	{
		return $this->hasMany(Projectcategory::class, 'projectCategoryParentId');
	}

	public function projects()
	{
		return $this->hasMany(Project::class, 'projectCategoryId');
	}
}
