<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $commentId
 * @property int|null $installationId
 * @property string|null $commentBody
 * @property int|null $commentPostedByUserId
 * @property Carbon|null $commentPostedDateTime
 * @property int|null $commentDeleted
 * @property int|null $commentIsPrivate
 * @property int $projectId
 * @property int|null $objectId
 * @property string|null $objectType
 * @property int|null $commentDeletedByUserId
 * @property Carbon|null $commentDateDeleted
 * @property int|null $commentLastEditedByUserId
 * @property Carbon|null $commentDateLastEdited
 * @property string|null $commentHTMLBody
 * @property int|null $lockdownId
 * @property string $contentType
 * 
 * @property Project $project
 * @property Collection|Projectfile[] $projectfiles
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comments';
	protected $primaryKey = 'commentId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'commentPostedByUserId' => 'int',
		'commentPostedDateTime' => 'datetime',
		'commentDeleted' => 'int',
		'commentIsPrivate' => 'int',
		'projectId' => 'int',
		'objectId' => 'int',
		'commentDeletedByUserId' => 'int',
		'commentDateDeleted' => 'datetime',
		'commentLastEditedByUserId' => 'int',
		'commentDateLastEdited' => 'datetime',
		'lockdownId' => 'int'
	];

	protected $fillable = [
		'installationId',
		'commentBody',
		'commentPostedByUserId',
		'commentPostedDateTime',
		'commentDeleted',
		'commentIsPrivate',
		'projectId',
		'objectId',
		'objectType',
		'commentDeletedByUserId',
		'commentDateDeleted',
		'commentLastEditedByUserId',
		'commentDateLastEdited',
		'commentHTMLBody',
		'lockdownId',
		'contentType'
	];

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function projectfiles()
	{
		return $this->belongsToMany(Projectfile::class, 'comments_projectfiles', 'commentId', 'projectfileId')
					->withPivot('installationId');
	}
}
