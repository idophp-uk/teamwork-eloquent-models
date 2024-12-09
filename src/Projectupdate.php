<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectupdate
 * 
 * @property int $projectUpdateId
 * @property int $projectId
 * @property string $projectUpdateText
 * @property string|null $projectUpdateColor
 * @property int|null $projectUpdateIsActive
 * @property Carbon $projectUpdateDateCreated
 * @property int $projectUpdateCreatedByUserId
 * @property Carbon $projectUpdateDateUpdated
 * @property int|null $projectUpdateDeletedByUserId
 * @property Carbon|null $projectUpdateDateDeleted
 * @property int $installationId
 * @property int $projectUpdateHealth
 * 
 * @property Installation $installation
 *
 * @package App\Models
 */
class Projectupdate extends Model
{
	protected $table = 'projectupdates';
	protected $primaryKey = 'projectUpdateId';
	public $timestamps = false;

	protected $casts = [
		'projectId' => 'int',
		'projectUpdateIsActive' => 'int',
		'projectUpdateDateCreated' => 'datetime',
		'projectUpdateCreatedByUserId' => 'int',
		'projectUpdateDateUpdated' => 'datetime',
		'projectUpdateDeletedByUserId' => 'int',
		'projectUpdateDateDeleted' => 'datetime',
		'installationId' => 'int',
		'projectUpdateHealth' => 'int'
	];

	protected $fillable = [
		'projectId',
		'projectUpdateText',
		'projectUpdateColor',
		'projectUpdateIsActive',
		'projectUpdateDateCreated',
		'projectUpdateCreatedByUserId',
		'projectUpdateDateUpdated',
		'projectUpdateDeletedByUserId',
		'projectUpdateDateDeleted',
		'installationId',
		'projectUpdateHealth'
	];

	public function installation()
	{
		return $this->belongsTo(Installation::class, 'installationId');
	}
}
