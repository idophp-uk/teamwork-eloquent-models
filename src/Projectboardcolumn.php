<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectboardcolumn
 * 
 * @property int $columnId
 * @property string $columnName
 * @property string|null $columnColor
 * @property int $columnDisplayOrder
 * @property bool $columnShowCompletedCards
 * @property Carbon $columnDateCreated
 * @property int $columnCreatedByUserId
 * @property Carbon $columnDateUpdated
 * @property string|null $columnStatus
 * @property string $columnSort
 * @property string $columnSortOrder
 * @property string $columnSettings
 * @property int $columnTasklistId
 * @property int|null $columnDeletedByUserId
 * @property Carbon|null $columnDateDeleted
 * @property int $installationId
 * @property int $projectId
 * 
 * @property Installation $installation
 * @property Project $project
 * @property Collection|Projectboardcard[] $projectboardcards
 *
 * @package App\Models
 */
class Projectboardcolumn extends Model
{
	protected $table = 'projectboardcolumns';
	protected $primaryKey = 'columnId';
	public $timestamps = false;

	protected $casts = [
		'columnDisplayOrder' => 'int',
		'columnShowCompletedCards' => 'bool',
		'columnDateCreated' => 'datetime',
		'columnCreatedByUserId' => 'int',
		'columnDateUpdated' => 'datetime',
		'columnTasklistId' => 'int',
		'columnDeletedByUserId' => 'int',
		'columnDateDeleted' => 'datetime',
		'installationId' => 'int',
		'projectId' => 'int'
	];

	protected $fillable = [
		'columnName',
		'columnColor',
		'columnDisplayOrder',
		'columnShowCompletedCards',
		'columnDateCreated',
		'columnCreatedByUserId',
		'columnDateUpdated',
		'columnStatus',
		'columnSort',
		'columnSortOrder',
		'columnSettings',
		'columnTasklistId',
		'columnDeletedByUserId',
		'columnDateDeleted',
		'installationId',
		'projectId'
	];

	public function installation()
	{
		return $this->belongsTo(Installation::class, 'installationId');
	}

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function projectboardcards()
	{
		return $this->hasMany(Projectboardcard::class, 'columnId');
	}
}
