<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EventUsers2
 * 
 * @property int|null $eventId
 * @property int|null $installationId
 * @property int|null $eventsequenceId
 * @property int $userId
 * @property string $userEventAssociationType
 * @property int $eventDeleted
 * @property int $id
 * 
 * @property Event|null $event
 * @property User $user
 *
 * @package App\Models
 */
class EventUsers2 extends Model
{
	protected $table = 'event_users2';
	public $timestamps = false;

	protected $casts = [
		'eventId' => 'int',
		'installationId' => 'int',
		'eventsequenceId' => 'int',
		'userId' => 'int',
		'eventDeleted' => 'int'
	];

	protected $fillable = [
		'eventId',
		'installationId',
		'eventsequenceId',
		'userId',
		'userEventAssociationType',
		'eventDeleted'
	];

	public function event()
	{
		return $this->belongsTo(Event::class, 'eventId');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'userId');
	}
}
