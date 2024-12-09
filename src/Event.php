<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 * 
 * @property int $eventId
 * @property int $installationId
 * @property int|null $projectId
 * @property string $eventTitle
 * @property string $eventWhere
 * @property string|null $eventDescription
 * @property Carbon $eventStartDateTime
 * @property Carbon $eventEndDateTime
 * @property bool $eventIsAllDay
 * @property int $eventOwnerUserId
 * @property int|null $eventTypeId
 * @property string $eventPrivacyType
 * @property int|null $eventSequenceId
 * @property int|null $eventShowAsBusy
 * @property int|null $eventAttendeesCanEdit
 * @property int $eventProjectUsersCanEdit
 * @property string $eventMonthlyRepeatType
 * @property int $eventDeleted
 * @property int|null $eventDeletedByUserId
 * @property Carbon|null $eventDateDeleted
 * @property int|null $eventDateLastUpdatedByUserId
 * @property int|null $eventCreatedByUserId
 * @property Carbon|null $eventCreatedDateTime
 * @property string|null $eventAdditionalProperties
 * @property Carbon|null $eventDateLastUpdated
 * @property int|null $defaultEventTypeId
 * 
 * @property Installation $installation
 * @property Project|null $project
 * @property Eventtype|null $eventtype
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Event extends Model
{
	protected $table = 'events';
	protected $primaryKey = 'eventId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectId' => 'int',
		'eventStartDateTime' => 'datetime',
		'eventEndDateTime' => 'datetime',
		'eventIsAllDay' => 'bool',
		'eventOwnerUserId' => 'int',
		'eventTypeId' => 'int',
		'eventSequenceId' => 'int',
		'eventShowAsBusy' => 'int',
		'eventAttendeesCanEdit' => 'int',
		'eventProjectUsersCanEdit' => 'int',
		'eventDeleted' => 'int',
		'eventDeletedByUserId' => 'int',
		'eventDateDeleted' => 'datetime',
		'eventDateLastUpdatedByUserId' => 'int',
		'eventCreatedByUserId' => 'int',
		'eventCreatedDateTime' => 'datetime',
		'eventDateLastUpdated' => 'datetime',
		'defaultEventTypeId' => 'int'
	];

	protected $fillable = [
		'installationId',
		'projectId',
		'eventTitle',
		'eventWhere',
		'eventDescription',
		'eventStartDateTime',
		'eventEndDateTime',
		'eventIsAllDay',
		'eventOwnerUserId',
		'eventTypeId',
		'eventPrivacyType',
		'eventSequenceId',
		'eventShowAsBusy',
		'eventAttendeesCanEdit',
		'eventProjectUsersCanEdit',
		'eventMonthlyRepeatType',
		'eventDeleted',
		'eventDeletedByUserId',
		'eventDateDeleted',
		'eventDateLastUpdatedByUserId',
		'eventCreatedByUserId',
		'eventCreatedDateTime',
		'eventAdditionalProperties',
		'eventDateLastUpdated',
		'defaultEventTypeId'
	];

	public function installation()
	{
		return $this->belongsTo(Installation::class, 'installationId');
	}

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function eventtype()
	{
		return $this->belongsTo(Eventtype::class, 'eventTypeId');
	}

	public function users()
	{
		return $this->belongsToMany(User::class, 'event_users2', 'eventId', 'userId')
					->withPivot('installationId', 'eventsequenceId', 'userEventAssociationType', 'eventDeleted', 'id');
	}
}
