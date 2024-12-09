<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Eventtype
 * 
 * @property int $eventTypeId
 * @property string $eventTypeName
 * @property int $installationId
 * @property string $eventTypeColor
 * @property bool $eventTypeUnavailable
 * 
 * @property Installation $installation
 * @property Collection|Event[] $events
 *
 * @package App\Models
 */
class Eventtype extends Model
{
	protected $table = 'eventtypes';
	protected $primaryKey = 'eventTypeId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'eventTypeUnavailable' => 'bool'
	];

	protected $fillable = [
		'eventTypeName',
		'installationId',
		'eventTypeColor',
		'eventTypeUnavailable'
	];

	public function installation()
	{
		return $this->belongsTo(Installation::class, 'installationId');
	}

	public function events()
	{
		return $this->hasMany(Event::class, 'eventTypeId');
	}
}
