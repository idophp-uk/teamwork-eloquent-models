<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectfilecategory
 * 
 * @property int $projectfilecategoryId
 * @property int|null $installationId
 * @property int|null $projectfileCategoryParentId
 * @property int $projectId
 * @property string $projectfileCategory
 * @property string|null $categoryColor
 * 
 * @property Projectfilecategory|null $projectfilecategory
 * @property Project $project
 * @property Collection|Projectfilecategory[] $projectfilecategories
 * @property Collection|Projectfile[] $projectfiles
 *
 * @package App\Models
 */
class Projectfilecategory extends Model
{
	protected $table = 'projectfilecategories';
	protected $primaryKey = 'projectfilecategoryId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectfileCategoryParentId' => 'int',
		'projectId' => 'int'
	];

	protected $fillable = [
		'installationId',
		'projectfileCategoryParentId',
		'projectId',
		'projectfileCategory',
		'categoryColor'
	];

	public function projectfilecategory()
	{
		return $this->belongsTo(Projectfilecategory::class, 'projectfileCategoryParentId');
	}

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function projectfilecategories()
	{
		return $this->hasMany(Projectfilecategory::class, 'projectfileCategoryParentId');
	}

	public function projectfiles()
	{
		return $this->hasMany(Projectfile::class, 'projectfilecategoryId');
	}
}
