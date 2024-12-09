<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MilestonesUser
 * 
 * @property int $milestoneId
 * @property int $userId
 * @property int|null $installationId
 * 
 * @property User $user
 * @property Milestone $milestone
 *
 * @package App\Models
 */
class MilestonesUser extends Model
{
	protected $table = 'milestones_users';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'milestoneId' => 'int',
		'userId' => 'int',
		'installationId' => 'int'
	];

	protected $fillable = [
		'installationId'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'userId');
	}

	public function milestone()
	{
		return $this->belongsTo(Milestone::class, 'milestoneId');
	}
}
