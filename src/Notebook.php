<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notebook
 * 
 * @property int $notebookId
 * @property int|null $installationId
 * @property string|null $notebookName
 * @property string|null $notebookDescription
 * @property string|null $notebookContents
 * @property string $notebookType
 * @property int|null $notebookCreatedByUserId
 * @property int|null $notebookUpdatedByUserId
 * @property Carbon|null $notebookDateUpdated
 * @property Carbon|null $notebookDateCreated
 * @property int|null $projectId
 * @property int|null $notebookCategoryId
 * @property int|null $notebookIsPrivate
 * @property int|null $notebookDeletedByUserId
 * @property Carbon|null $notebookDateDeleted
 * @property bool|null $notebookDeleted
 * @property int $notebookSecureContent
 * @property int|null $notebookLockedByUserId
 * @property Carbon|null $notebookLockedDatetime
 * @property int|null $notebookLocked
 * @property int|null $lockdownId
 * @property bool $isFullWidth
 * 
 * @property Project|null $project
 * @property Collection|Notebookversion[] $notebookversions
 *
 * @package App\Models
 */
class Notebook extends Model
{
	protected $table = 'notebooks';
	protected $primaryKey = 'notebookId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'notebookCreatedByUserId' => 'int',
		'notebookUpdatedByUserId' => 'int',
		'notebookDateUpdated' => 'datetime',
		'notebookDateCreated' => 'datetime',
		'projectId' => 'int',
		'notebookCategoryId' => 'int',
		'notebookIsPrivate' => 'int',
		'notebookDeletedByUserId' => 'int',
		'notebookDateDeleted' => 'datetime',
		'notebookDeleted' => 'bool',
		'notebookSecureContent' => 'int',
		'notebookLockedByUserId' => 'int',
		'notebookLockedDatetime' => 'datetime',
		'notebookLocked' => 'int',
		'lockdownId' => 'int',
		'isFullWidth' => 'bool'
	];

	protected $fillable = [
		'installationId',
		'notebookName',
		'notebookDescription',
		'notebookContents',
		'notebookType',
		'notebookCreatedByUserId',
		'notebookUpdatedByUserId',
		'notebookDateUpdated',
		'notebookDateCreated',
		'projectId',
		'notebookCategoryId',
		'notebookIsPrivate',
		'notebookDeletedByUserId',
		'notebookDateDeleted',
		'notebookDeleted',
		'notebookSecureContent',
		'notebookLockedByUserId',
		'notebookLockedDatetime',
		'notebookLocked',
		'lockdownId',
		'isFullWidth'
	];

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function notebookversions()
	{
		return $this->hasMany(Notebookversion::class, 'notebookId');
	}
}
