<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectfile
 * 
 * @property int $projectfileId
 * @property int|null $installationId
 * @property int $projectId
 * @property int|null $projectfilecategoryId
 * @property int $projectfileIsPrivate
 * @property int|null $projectlatestfileversionNo
 * @property string $projectfiledescription
 * @property string $projectfileStatus
 * @property int|null $lockdownId
 * @property Carbon|null $projectfileDateUpdated
 * @property int $fileLocked
 * @property Carbon|null $fileLockedDateTime
 * @property int|null $fileLockedByUserId
 * @property int|null $projectfileDeletedByUserId
 * @property Carbon|null $projectfileDateDeleted
 * 
 * @property Project $project
 * @property Projectfilecategory|null $projectfilecategory
 * @property Collection|Comment[] $comments
 * @property Collection|Task[] $tasks
 * @property Collection|Projectfileversion[] $projectfileversions
 *
 * @package App\Models
 */
class Projectfile extends Model
{
	protected $table = 'projectfiles';
	protected $primaryKey = 'projectfileId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectId' => 'int',
		'projectfilecategoryId' => 'int',
		'projectfileIsPrivate' => 'int',
		'projectlatestfileversionNo' => 'int',
		'lockdownId' => 'int',
		'projectfileDateUpdated' => 'datetime',
		'fileLocked' => 'int',
		'fileLockedDateTime' => 'datetime',
		'fileLockedByUserId' => 'int',
		'projectfileDeletedByUserId' => 'int',
		'projectfileDateDeleted' => 'datetime'
	];

	protected $fillable = [
		'installationId',
		'projectId',
		'projectfilecategoryId',
		'projectfileIsPrivate',
		'projectlatestfileversionNo',
		'projectfiledescription',
		'projectfileStatus',
		'lockdownId',
		'projectfileDateUpdated',
		'fileLocked',
		'fileLockedDateTime',
		'fileLockedByUserId',
		'projectfileDeletedByUserId',
		'projectfileDateDeleted'
	];

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function projectfilecategory()
	{
		return $this->belongsTo(Projectfilecategory::class, 'projectfilecategoryId');
	}

	public function comments()
	{
		return $this->belongsToMany(Comment::class, 'comments_projectfiles', 'projectfileId', 'commentId')
					->withPivot('installationId');
	}

	public function tasks()
	{
		return $this->belongsToMany(Task::class, 'projectfiles_tasks', 'projectfileId', 'taskId')
					->withPivot('installationId');
	}

	public function projectfileversions()
	{
		return $this->hasMany(Projectfileversion::class, 'projectfileId');
	}
}
