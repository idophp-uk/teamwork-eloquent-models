<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Portfoliocard
 * 
 * @property int $cardId
 * @property int $columnId
 * @property int $boardId
 * @property int $projectId
 * @property int $installationId
 * @property int $cardDisplayOrder
 * @property bool $cardArchived
 * @property Carbon|null $cardDateArchived
 * @property int|null $cardArchivedByUserId
 * @property Carbon $cardDateCreated
 * @property int $cardCreatedByUserId
 * @property Carbon $cardDateUpdated
 * @property string $cardStatus
 * @property int|null $cardDeletedByUserId
 * @property Carbon|null $cardDateDeleted
 * 
 * @property Portfoliocolumn $portfoliocolumn
 * @property Project $project
 * @property Installation $installation
 *
 * @package App\Models
 */
class Portfoliocard extends Model
{
	protected $table = 'portfoliocards';
	protected $primaryKey = 'cardId';
	public $timestamps = false;

	protected $casts = [
		'columnId' => 'int',
		'boardId' => 'int',
		'projectId' => 'int',
		'installationId' => 'int',
		'cardDisplayOrder' => 'int',
		'cardArchived' => 'bool',
		'cardDateArchived' => 'datetime',
		'cardArchivedByUserId' => 'int',
		'cardDateCreated' => 'datetime',
		'cardCreatedByUserId' => 'int',
		'cardDateUpdated' => 'datetime',
		'cardDeletedByUserId' => 'int',
		'cardDateDeleted' => 'datetime'
	];

	protected $fillable = [
		'columnId',
		'boardId',
		'projectId',
		'installationId',
		'cardDisplayOrder',
		'cardArchived',
		'cardDateArchived',
		'cardArchivedByUserId',
		'cardDateCreated',
		'cardCreatedByUserId',
		'cardDateUpdated',
		'cardStatus',
		'cardDeletedByUserId',
		'cardDateDeleted'
	];

	public function portfoliocolumn()
	{
		return $this->belongsTo(Portfoliocolumn::class, 'columnId');
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
