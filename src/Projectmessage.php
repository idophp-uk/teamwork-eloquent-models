<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectmessage
 * 
 * @property int $projectmessageId
 * @property int|null $installationId
 * @property int $projectId
 * @property string $projectmessageSubject
 * @property int|null $projectmessagecategoryId
 * @property int $projectmessageIsPrivate
 * @property int|null $projectmessagepostId
 * @property int|null $projectmessagelastpostId
 * @property int|null $projectMessageIsArchived
 * @property int|null $projectMessageArchivedByUserId
 * @property Carbon|null $projectMessageArchivedDateTime
 * @property string $projectMessageStatus
 * @property int|null $lockdownId
 * @property int|null $projectMessageDeletedByUserId
 * @property Carbon|null $projectMessageDateDeleted
 * 
 * @property Projectmessagecategory|null $projectmessagecategory
 * @property Project $project
 * @property Projectmessagepost|null $projectmessagepost
 * @property Collection|Projectmessagepost[] $projectmessageposts
 *
 * @package App\Models
 */
class Projectmessage extends Model
{
	protected $table = 'projectmessages';
	protected $primaryKey = 'projectmessageId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectId' => 'int',
		'projectmessagecategoryId' => 'int',
		'projectmessageIsPrivate' => 'int',
		'projectmessagepostId' => 'int',
		'projectmessagelastpostId' => 'int',
		'projectMessageIsArchived' => 'int',
		'projectMessageArchivedByUserId' => 'int',
		'projectMessageArchivedDateTime' => 'datetime',
		'lockdownId' => 'int',
		'projectMessageDeletedByUserId' => 'int',
		'projectMessageDateDeleted' => 'datetime'
	];

	protected $fillable = [
		'installationId',
		'projectId',
		'projectmessageSubject',
		'projectmessagecategoryId',
		'projectmessageIsPrivate',
		'projectmessagepostId',
		'projectmessagelastpostId',
		'projectMessageIsArchived',
		'projectMessageArchivedByUserId',
		'projectMessageArchivedDateTime',
		'projectMessageStatus',
		'lockdownId',
		'projectMessageDeletedByUserId',
		'projectMessageDateDeleted'
	];

	public function projectmessagecategory()
	{
		return $this->belongsTo(Projectmessagecategory::class, 'projectmessagecategoryId');
	}

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function projectmessagepost()
	{
		return $this->belongsTo(Projectmessagepost::class, 'projectmessagepostId');
	}

	public function projectmessageposts()
	{
		return $this->hasMany(Projectmessagepost::class, 'projectmessageId');
	}
}
