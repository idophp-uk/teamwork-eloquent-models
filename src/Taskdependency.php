<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Taskdependency
 * 
 * @property int $dependentTaskId
 * @property int|null $installationId
 * @property int $predecessorTaskId
 * @property string $predecessorTaskMust
 * @property string $dependentTaskCant
 * @property string $dependancyHardness
 * 
 * @property Task $task
 *
 * @package App\Models
 */
class Taskdependency extends Model
{
	protected $table = 'taskdependencies';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dependentTaskId' => 'int',
		'installationId' => 'int',
		'predecessorTaskId' => 'int'
	];

	protected $fillable = [
		'installationId',
		'predecessorTaskMust',
		'dependentTaskCant',
		'dependancyHardness'
	];

	public function task()
	{
		return $this->belongsTo(Task::class, 'predecessorTaskId');
	}
}
