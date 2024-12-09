<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectrolesUser
 * 
 * @property int $userProjectRoleId
 * @property int|null $installationId
 * @property int|null $projectRoleId
 * @property int|null $projectId
 * @property int|null $userId
 * @property int|null $projectRoleAssignedByUserId
 * @property Carbon|null $projectRoleDateAssigned
 * 
 * @property Project|null $project
 * @property User|null $user
 *
 * @package App\Models
 */
class ProjectrolesUser extends Model
{
	protected $table = 'projectroles_users';
	protected $primaryKey = 'userProjectRoleId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectRoleId' => 'int',
		'projectId' => 'int',
		'userId' => 'int',
		'projectRoleAssignedByUserId' => 'int',
		'projectRoleDateAssigned' => 'datetime'
	];

	protected $fillable = [
		'installationId',
		'projectRoleId',
		'projectId',
		'userId',
		'projectRoleAssignedByUserId',
		'projectRoleDateAssigned'
	];

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'userId');
	}
}
