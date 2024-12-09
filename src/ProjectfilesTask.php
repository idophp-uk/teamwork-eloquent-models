<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectfilesTask
 * 
 * @property int $projectfileId
 * @property int $taskId
 * @property int|null $installationId
 * 
 * @property Projectfile $projectfile
 * @property Task $task
 *
 * @package App\Models
 */
class ProjectfilesTask extends Model
{
	protected $table = 'projectfiles_tasks';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'projectfileId' => 'int',
		'taskId' => 'int',
		'installationId' => 'int'
	];

	protected $fillable = [
		'installationId'
	];

	public function projectfile()
	{
		return $this->belongsTo(Projectfile::class, 'projectfileId');
	}

	public function task()
	{
		return $this->belongsTo(Task::class, 'taskId');
	}
}
