<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tasklist
 * 
 * @property int $tasklistId
 * @property int|null $installationId
 * @property int $projectId
 * @property string $tasklistName
 * @property string $tasklistDescription
 * @property int|null $taskListCreatedByUserId
 * @property Carbon|null $taskListCreatedDate
 * @property int|null $taskListUpdatedByUserId
 * @property Carbon|null $taskListDateUpdated
 * @property int $tasklistDisplayOrder
 * @property int|null $milestoneId
 * @property string $tasklistStatus
 * @property int|null $tasklistDeletedByUserId
 * @property Carbon|null $tasklistDateDeleted
 * @property int $tasklistIsPrivate
 * @property bool $tasklistIsPinned
 * @property int|null $lockdownId
 * @property bool|null $tasklistIsBillable
 * @property string|null $tasklistIcon
 * 
 * @property Project $project
 * @property Milestone|null $milestone
 * @property Collection|Task[] $tasks
 *
 * @package App\Models
 */
class Tasklist extends Model
{
	protected $table = 'tasklists';
	protected $primaryKey = 'tasklistId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectId' => 'int',
		'taskListCreatedByUserId' => 'int',
		'taskListCreatedDate' => 'datetime',
		'taskListUpdatedByUserId' => 'int',
		'taskListDateUpdated' => 'datetime',
		'tasklistDisplayOrder' => 'int',
		'milestoneId' => 'int',
		'tasklistDeletedByUserId' => 'int',
		'tasklistDateDeleted' => 'datetime',
		'tasklistIsPrivate' => 'int',
		'tasklistIsPinned' => 'bool',
		'lockdownId' => 'int',
		'tasklistIsBillable' => 'bool'
	];

	protected $fillable = [
		'installationId',
		'projectId',
		'tasklistName',
		'tasklistDescription',
		'taskListCreatedByUserId',
		'taskListCreatedDate',
		'taskListUpdatedByUserId',
		'taskListDateUpdated',
		'tasklistDisplayOrder',
		'milestoneId',
		'tasklistStatus',
		'tasklistDeletedByUserId',
		'tasklistDateDeleted',
		'tasklistIsPrivate',
		'tasklistIsPinned',
		'lockdownId',
		'tasklistIsBillable',
		'tasklistIcon'
	];

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function milestone()
	{
		return $this->belongsTo(Milestone::class, 'milestoneId');
	}

	public function tasks()
	{
		return $this->hasMany(Task::class, 'tasklistId');
	}
}
