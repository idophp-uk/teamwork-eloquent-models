<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Milestone
 * 
 * @property int $milestoneId
 * @property int|null $installationId
 * @property string $milestoneName
 * @property int|null $milestoneCompletedByUserId
 * @property Carbon $milestoneDueDate
 * @property int $milestoneUseEmailNotification
 * @property int $projectId
 * @property Carbon $milestoneDateUpdated
 * @property int|null $milestoneUpdatedByUserId
 * @property string|null $milestoneStatus
 * @property int|null $milestoneIsPrivate
 * @property int|null $milestoneDeletedByUserId
 * @property Carbon|null $milestoneDateDeleted
 * @property int|null $milestoneAssignedToCompanyId
 * @property Carbon|null $milestoneCompletedDateTime
 * @property Carbon|null $milestoneDateCreated
 * @property int|null $milestoneCreatedByUserId
 * @property string|null $milestoneDescription
 * @property int|null $lockdownId
 * @property bool $milestoneIsDeleted
 * @property Carbon|null $originalDueDate
 * 
 * @property Company|null $company
 * @property Project $project
 * @property Collection|User[] $users
 * @property Collection|Tasklist[] $tasklists
 *
 * @package App\Models
 */
class Milestone extends Model
{
	protected $table = 'milestones';
	protected $primaryKey = 'milestoneId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'milestoneCompletedByUserId' => 'int',
		'milestoneDueDate' => 'datetime',
		'milestoneUseEmailNotification' => 'int',
		'projectId' => 'int',
		'milestoneDateUpdated' => 'datetime',
		'milestoneUpdatedByUserId' => 'int',
		'milestoneIsPrivate' => 'int',
		'milestoneDeletedByUserId' => 'int',
		'milestoneDateDeleted' => 'datetime',
		'milestoneAssignedToCompanyId' => 'int',
		'milestoneCompletedDateTime' => 'datetime',
		'milestoneDateCreated' => 'datetime',
		'milestoneCreatedByUserId' => 'int',
		'lockdownId' => 'int',
		'milestoneIsDeleted' => 'bool',
		'originalDueDate' => 'datetime'
	];

	protected $fillable = [
		'installationId',
		'milestoneName',
		'milestoneCompletedByUserId',
		'milestoneDueDate',
		'milestoneUseEmailNotification',
		'projectId',
		'milestoneDateUpdated',
		'milestoneUpdatedByUserId',
		'milestoneStatus',
		'milestoneIsPrivate',
		'milestoneDeletedByUserId',
		'milestoneDateDeleted',
		'milestoneAssignedToCompanyId',
		'milestoneCompletedDateTime',
		'milestoneDateCreated',
		'milestoneCreatedByUserId',
		'milestoneDescription',
		'lockdownId',
		'milestoneIsDeleted',
		'originalDueDate'
	];

	public function company()
	{
		return $this->belongsTo(Company::class, 'milestoneAssignedToCompanyId');
	}

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function users()
	{
		return $this->belongsToMany(User::class, 'milestones_users', 'milestoneId', 'userId')
					->withPivot('installationId');
	}

	public function tasklists()
	{
		return $this->hasMany(Tasklist::class, 'milestoneId');
	}
}
