<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Portfoliocolumn
 * 
 * @property int $columnId
 * @property string $columnName
 * @property string|null $columnColor
 * @property int $columnDisplayOrder
 * @property Carbon $columnDateCreated
 * @property int $columnCreatedByUserId
 * @property Carbon $columnDateUpdated
 * @property string|null $columnStatus
 * @property string $columnSort
 * @property string $columnSortOrder
 * @property string $columnSettings
 * @property int|null $columnDeletedByUserId
 * @property Carbon|null $columnDateDeleted
 * @property int $installationId
 * @property int $boardId
 * 
 * @property Installation $installation
 * @property Collection|Portfoliocard[] $portfoliocards
 *
 * @package App\Models
 */
class Portfoliocolumn extends Model
{
	protected $table = 'portfoliocolumns';
	protected $primaryKey = 'columnId';
	public $timestamps = false;

	protected $casts = [
		'columnDisplayOrder' => 'int',
		'columnDateCreated' => 'datetime',
		'columnCreatedByUserId' => 'int',
		'columnDateUpdated' => 'datetime',
		'columnDeletedByUserId' => 'int',
		'columnDateDeleted' => 'datetime',
		'installationId' => 'int',
		'boardId' => 'int'
	];

	protected $fillable = [
		'columnName',
		'columnColor',
		'columnDisplayOrder',
		'columnDateCreated',
		'columnCreatedByUserId',
		'columnDateUpdated',
		'columnStatus',
		'columnSort',
		'columnSortOrder',
		'columnSettings',
		'columnDeletedByUserId',
		'columnDateDeleted',
		'installationId',
		'boardId'
	];

	public function installation()
	{
		return $this->belongsTo(Installation::class, 'installationId');
	}

	public function portfoliocards()
	{
		return $this->hasMany(Portfoliocard::class, 'columnId');
	}
}
