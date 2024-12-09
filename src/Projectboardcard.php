<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectboardcard
 * 
 * @property int $cardId
 * @property int $columnId
 * @property int $taskId
 * @property int $projectId
 * @property int $installationId
 * @property int $cardDisplayOrder
 * @property bool $cardArchived
 * @property Carbon|null $cardDateArchived
 * @property int|null $cardArchivedByUserId
 * @property Carbon $cardDateCreated
 * @property int $cardCreatedByUserId
 * @property Carbon $cardDateUpdated
 * @property bool $cardVisible
 * @property string $cardStatus
 * @property int|null $cardDeletedByUserId
 * @property Carbon|null $cardDateDeleted
 * 
 * @property Projectboardcolumn $projectboardcolumn
 * @property Task $task
 * @property Project $project
 * @property Installation $installation
 *
 * @package App\Models
 */
class Projectboardcard extends Model
{
	protected $table = 'projectboardcards';
	protected $primaryKey = 'cardId';
	public $timestamps = false;

	protected $casts = [
		'columnId' => 'int',
		'taskId' => 'int',
		'projectId' => 'int',
		'installationId' => 'int',
		'cardDisplayOrder' => 'int',
		'cardArchived' => 'bool',
		'cardDateArchived' => 'datetime',
		'cardArchivedByUserId' => 'int',
		'cardDateCreated' => 'datetime',
		'cardCreatedByUserId' => 'int',
		'cardDateUpdated' => 'datetime',
		'cardVisible' => 'bool',
		'cardDeletedByUserId' => 'int',
		'cardDateDeleted' => 'datetime'
	];

	protected $fillable = [
		'columnId',
		'taskId',
		'projectId',
		'installationId',
		'cardDisplayOrder',
		'cardArchived',
		'cardDateArchived',
		'cardArchivedByUserId',
		'cardDateCreated',
		'cardCreatedByUserId',
		'cardDateUpdated',
		'cardVisible',
		'cardStatus',
		'cardDeletedByUserId',
		'cardDateDeleted'
	];

	public function projectboardcolumn()
	{
		return $this->belongsTo(Projectboardcolumn::class, 'columnId');
	}

	public function task()
	{
		return $this->belongsTo(Task::class, 'taskId');
	}

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function installation()
	{
		return $this->belongsTo(Installation::class, 'installationId');
	}
}
