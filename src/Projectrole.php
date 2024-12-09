<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectrole
 * 
 * @property int $projectRoleId
 * @property int|null $installationId
 * @property string|null $projectRoleName
 * @property string|null $projectRoleDescription
 * @property int|null $projectId
 * 
 * @property Project|null $project
 *
 * @package App\Models
 */
class Projectrole extends Model
{
	protected $table = 'projectroles';
	protected $primaryKey = 'projectRoleId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectId' => 'int'
	];

	protected $fillable = [
		'installationId',
		'projectRoleName',
		'projectRoleDescription',
		'projectId'
	];

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}
}
