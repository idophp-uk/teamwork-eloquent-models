<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TasksUser
 * 
 * @property int $taskId
 * @property int $userId
 * @property int|null $installationId
 * 
 * @property Task $task
 * @property User $user
 *
 * @package App\Models
 */
class TasksUser extends Model
{
	protected $table = 'tasks_users';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'taskId' => 'int',
		'userId' => 'int',
		'installationId' => 'int'
	];

	protected $fillable = [
		'installationId'
	];

	public function task()
	{
		return $this->belongsTo(Task::class, 'taskId');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'userId');
	}
}
