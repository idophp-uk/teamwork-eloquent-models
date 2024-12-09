<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * 
 * @property int $taskId
 * @property int|null $installationId
 * @property string $taskName
 * @property string|null $taskDescription
 * @property int $taskProgress
 * @property int $tasklistId
 * @property int|null $taskCreatedByUserId
 * @property Carbon $taskDateUpdated
 * @property int|null $taskUpdatedByUserId
 * @property int|null $taskCompletedByUserId
 * @property int $taskDisplayOrder
 * @property string|null $taskStatus
 * @property Carbon|null $taskStartDate
 * @property Carbon|null $taskDueDate
 * @property int|null $taskIsPrivate
 * @property int|null $taskDeletedByUserId
 * @property Carbon|null $taskDateDeleted
 * @property int|null $taskAssignedToCompanyId
 * @property int|null $taskPriority
 * @property Carbon|null $taskCompletedDate
 * @property Carbon|null $taskCreatedDate
 * @property int|null $taskSequenceId
 * @property int $taskEstimateMinutes
 * @property int|null $lockdownId
 * @property int|null $taskParentTaskId
 * @property int $taskHasDeskTickets
 * @property Carbon|null $taskUpdatedDateTime
 * @property int $taskArchived
 * @property string $taskDescriptionContentType
 * @property bool|null $taskOutOfSequence
 * @property Carbon|null $taskSequenceStartDate
 * @property Carbon|null $taskSequenceDueDate
 * @property int $taskNotify
 * @property Carbon|null $originalDueDate
 * 
 * @property Company|null $company
 * @property Task|null $task
 * @property Tasklist $tasklist
 * @property Collection|Projectboardcard[] $projectboardcards
 * @property Collection|Projectfile[] $projectfiles
 * @property Collection|Taskdependency[] $taskdependencies
 * @property Collection|Task[] $tasks
 * @property Collection|User[] $users
 * @property Collection|Timelog[] $timelogs
 *
 * @package App\Models
 */
class Task extends Model
{
	protected $table = 'tasks';
	protected $primaryKey = 'taskId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'taskProgress' => 'int',
		'tasklistId' => 'int',
		'taskCreatedByUserId' => 'int',
		'taskDateUpdated' => 'datetime',
		'taskUpdatedByUserId' => 'int',
		'taskCompletedByUserId' => 'int',
		'taskDisplayOrder' => 'int',
		'taskStartDate' => 'datetime',
		'taskDueDate' => 'datetime',
		'taskIsPrivate' => 'int',
		'taskDeletedByUserId' => 'int',
		'taskDateDeleted' => 'datetime',
		'taskAssignedToCompanyId' => 'int',
		'taskPriority' => 'int',
		'taskCompletedDate' => 'datetime',
		'taskCreatedDate' => 'datetime',
		'taskSequenceId' => 'int',
		'taskEstimateMinutes' => 'int',
		'lockdownId' => 'int',
		'taskParentTaskId' => 'int',
		'taskHasDeskTickets' => 'int',
		'taskUpdatedDateTime' => 'datetime',
		'taskArchived' => 'int',
		'taskOutOfSequence' => 'bool',
		'taskSequenceStartDate' => 'datetime',
		'taskSequenceDueDate' => 'datetime',
		'taskNotify' => 'int',
		'originalDueDate' => 'datetime'
	];

	protected $fillable = [
		'installationId',
		'taskName',
		'taskDescription',
		'taskProgress',
		'tasklistId',
		'taskCreatedByUserId',
		'taskDateUpdated',
		'taskUpdatedByUserId',
		'taskCompletedByUserId',
		'taskDisplayOrder',
		'taskStatus',
		'taskStartDate',
		'taskDueDate',
		'taskIsPrivate',
		'taskDeletedByUserId',
		'taskDateDeleted',
		'taskAssignedToCompanyId',
		'taskPriority',
		'taskCompletedDate',
		'taskCreatedDate',
		'taskSequenceId',
		'taskEstimateMinutes',
		'lockdownId',
		'taskParentTaskId',
		'taskHasDeskTickets',
		'taskUpdatedDateTime',
		'taskArchived',
		'taskDescriptionContentType',
		'taskOutOfSequence',
		'taskSequenceStartDate',
		'taskSequenceDueDate',
		'taskNotify',
		'originalDueDate'
	];

	public function company()
	{
		return $this->belongsTo(Company::class, 'taskAssignedToCompanyId');
	}

	public function task()
	{
		return $this->belongsTo(Task::class, 'taskParentTaskId');
	}

	public function tasklist()
	{
		return $this->belongsTo(Tasklist::class, 'tasklistId');
	}

	public function projectboardcards()
	{
		return $this->hasMany(Projectboardcard::class, 'taskId');
	}

	public function projectfiles()
	{
		return $this->belongsToMany(Projectfile::class, 'projectfiles_tasks', 'taskId', 'projectfileId')
					->withPivot('installationId');
	}

	public function taskdependencies()
	{
		return $this->hasMany(Taskdependency::class, 'predecessorTaskId');
	}

	public function tasks()
	{
		return $this->hasMany(Task::class, 'taskParentTaskId');
	}

	public function users()
	{
		return $this->belongsToMany(User::class, 'tasks_users', 'taskId', 'userId')
					->withPivot('installationId');
	}

	public function timelogs()
	{
		return $this->hasMany(Timelog::class, 'taskId');
	}
}
