<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectmessagepost
 * 
 * @property int $projectmessagepostId
 * @property int|null $installationId
 * @property int $projectmessageId
 * @property int $userId
 * @property Carbon $projectmessagepostDateTime
 * @property string|null $projectmessagepostBody
 * @property string $projectmessagepostStatus
 * @property string $projectmessagepostsource
 * @property string|null $projectmessagepostdetails
 * @property Carbon $projectmessagepostDateLastUpdated
 * @property string $projectmessagepostContentType
 * @property int|null $deletedByUser
 * @property Carbon|null $deletedAt
 * 
 * @property Projectmessage $projectmessage
 * @property Collection|Projectmessage[] $projectmessages
 *
 * @package App\Models
 */
class Projectmessagepost extends Model
{
	protected $table = 'projectmessageposts';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectmessageId' => 'int',
		'userId' => 'int',
		'projectmessagepostDateTime' => 'datetime',
		'projectmessagepostDateLastUpdated' => 'datetime',
		'deletedByUser' => 'int',
		'deletedAt' => 'datetime'
	];

	protected $fillable = [
		'installationId',
		'userId',
		'projectmessagepostDateTime',
		'projectmessagepostBody',
		'projectmessagepostStatus',
		'projectmessagepostsource',
		'projectmessagepostdetails',
		'projectmessagepostDateLastUpdated',
		'projectmessagepostContentType',
		'deletedByUser',
		'deletedAt'
	];

	public function projectmessage()
	{
		return $this->belongsTo(Projectmessage::class, 'projectmessageId');
	}

	public function projectmessages()
	{
		return $this->hasMany(Projectmessage::class, 'projectmessagepostId');
	}
}
