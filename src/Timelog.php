<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Timelog
 * 
 * @property int $timelogId
 * @property int|null $installationId
 * @property int $userId
 * @property int|null $taskId
 * @property int $projectId
 * @property Carbon $timelogdatetime
 * @property int $timelogminutes
 * @property string $timelogdescription
 * @property int $timeloggedLoggedByUserId
 * @property Carbon $timeloggedTimeLogged
 * @property int $timelogIsBillable
 * @property int $timelogDeleted
 * @property Carbon|null $timelogDateDeleted
 * @property int|null $timelogDeletedByUserId
 * @property int $timelogHasStartTime
 * @property int|null $taskIdPreMove
 * @property int|null $timelogEditedByUserId
 * @property Carbon|null $timelogEditedDateTime
 * @property int|null $deskTicketId
 * @property string|null $timelogInvoiceNumber
 * @property int|null $projectbillinginvoiceId
 * @property float|null $timelogFinalCost
 * @property int|null $invoiceRate
 * 
 * @property Projectbillinginvoice|null $projectbillinginvoice
 * @property Task|null $task
 * @property Project $project
 * @property User $user
 *
 * @package App\Models
 */
class Timelog extends Model
{
	protected $table = 'timelogs';
	protected $primaryKey = 'timelogId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'userId' => 'int',
		'taskId' => 'int',
		'projectId' => 'int',
		'timelogdatetime' => 'datetime',
		'timelogminutes' => 'int',
		'timeloggedLoggedByUserId' => 'int',
		'timeloggedTimeLogged' => 'datetime',
		'timelogIsBillable' => 'int',
		'timelogDeleted' => 'int',
		'timelogDateDeleted' => 'datetime',
		'timelogDeletedByUserId' => 'int',
		'timelogHasStartTime' => 'int',
		'taskIdPreMove' => 'int',
		'timelogEditedByUserId' => 'int',
		'timelogEditedDateTime' => 'datetime',
		'deskTicketId' => 'int',
		'projectbillinginvoiceId' => 'int',
		'timelogFinalCost' => 'float',
		'invoiceRate' => 'int'
	];

	protected $fillable = [
		'installationId',
		'userId',
		'taskId',
		'projectId',
		'timelogdatetime',
		'timelogminutes',
		'timelogdescription',
		'timeloggedLoggedByUserId',
		'timeloggedTimeLogged',
		'timelogIsBillable',
		'timelogDeleted',
		'timelogDateDeleted',
		'timelogDeletedByUserId',
		'timelogHasStartTime',
		'taskIdPreMove',
		'timelogEditedByUserId',
		'timelogEditedDateTime',
		'deskTicketId',
		'timelogInvoiceNumber',
		'projectbillinginvoiceId',
		'timelogFinalCost',
		'invoiceRate'
	];

	public function projectbillinginvoice()
	{
		return $this->belongsTo(Projectbillinginvoice::class, 'projectbillinginvoiceId');
	}

	public function task()
	{
		return $this->belongsTo(Task::class, 'taskId');
	}

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'userId');
	}
}
