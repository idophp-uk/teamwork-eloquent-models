<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectmessagecategory
 * 
 * @property int $projectmessagecategoryId
 * @property int|null $installationId
 * @property int|null $projectmessageCategoryParentId
 * @property int $projectId
 * @property string $projectmessageCategory
 * @property string|null $categoryColor
 * 
 * @property Projectmessagecategory|null $projectmessagecategory
 * @property Project $project
 * @property Collection|Projectmessagecategory[] $projectmessagecategories
 * @property Collection|Projectmessage[] $projectmessages
 *
 * @package App\Models
 */
class Projectmessagecategory extends Model
{
	protected $table = 'projectmessagecategories';
	protected $primaryKey = 'projectmessagecategoryId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectmessageCategoryParentId' => 'int',
		'projectId' => 'int'
	];

	protected $fillable = [
		'installationId',
		'projectmessageCategoryParentId',
		'projectId',
		'projectmessageCategory',
		'categoryColor'
	];

	public function projectmessagecategory()
	{
		return $this->belongsTo(Projectmessagecategory::class, 'projectmessageCategoryParentId');
	}

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function projectmessagecategories()
	{
		return $this->hasMany(Projectmessagecategory::class, 'projectmessageCategoryParentId');
	}

	public function projectmessages()
	{
		return $this->hasMany(Projectmessage::class, 'projectmessagecategoryId');
	}
}
