<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notebookcategory
 * 
 * @property int $notebookCategoryId
 * @property int|null $installationId
 * @property string|null $notebookCategoryName
 * @property string|null $notebookCategoryDescription
 * @property int|null $projectId
 * @property int|null $createdByUserId
 * @property Carbon|null $createdDateTime
 * @property int|null $updatedByUserId
 * @property Carbon|null $updatedDateTime
 * @property int|null $notebookCategoryParentId
 * @property string|null $categoryColor
 * 
 * @property Notebookcategory|null $notebookcategory
 * @property User|null $user
 * @property Project|null $project
 * @property Collection|Notebookcategory[] $notebookcategories
 *
 * @package App\Models
 */
class Notebookcategory extends Model
{
	protected $table = 'notebookcategories';
	protected $primaryKey = 'notebookCategoryId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectId' => 'int',
		'createdByUserId' => 'int',
		'createdDateTime' => 'datetime',
		'updatedByUserId' => 'int',
		'updatedDateTime' => 'datetime',
		'notebookCategoryParentId' => 'int'
	];

	protected $fillable = [
		'installationId',
		'notebookCategoryName',
		'notebookCategoryDescription',
		'projectId',
		'createdByUserId',
		'createdDateTime',
		'updatedByUserId',
		'updatedDateTime',
		'notebookCategoryParentId',
		'categoryColor'
	];

	public function notebookcategory()
	{
		return $this->belongsTo(Notebookcategory::class, 'notebookCategoryParentId');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'createdByUserId');
	}

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function notebookcategories()
	{
		return $this->hasMany(Notebookcategory::class, 'notebookCategoryParentId');
	}
}
