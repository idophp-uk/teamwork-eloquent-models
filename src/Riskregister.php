<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Riskregister
 * 
 * @property int $riskRegisterId
 * @property int|null $installationId
 * @property int $projectId
 * @property string|null $riskSource
 * @property string|null $probability
 * @property string|null $impact
 * @property int|null $probabilityValue
 * @property int|null $impactValue
 * @property int|null $impactCost
 * @property int|null $impactSchedule
 * @property int|null $riskResult
 * @property int|null $impactPerformance
 * @property Carbon|null $riskCreatedDateTime
 * @property int|null $riskCreatedByUserId
 * @property Carbon|null $riskUpdatedDateTime
 * @property int|null $riskUpdatedByUserId
 * @property string|null $riskMitigationPlan
 * @property string $riskStatus
 * @property bool $riskDeleted
 * @property Carbon|null $riskDateDeleted
 * @property int|null $riskDeletedByUserId
 * 
 * @property Project $project
 *
 * @package App\Models
 */
class Riskregister extends Model
{
	protected $table = 'riskregister';
	protected $primaryKey = 'riskRegisterId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectId' => 'int',
		'probabilityValue' => 'int',
		'impactValue' => 'int',
		'impactCost' => 'int',
		'impactSchedule' => 'int',
		'riskResult' => 'int',
		'impactPerformance' => 'int',
		'riskCreatedDateTime' => 'datetime',
		'riskCreatedByUserId' => 'int',
		'riskUpdatedDateTime' => 'datetime',
		'riskUpdatedByUserId' => 'int',
		'riskDeleted' => 'bool',
		'riskDateDeleted' => 'datetime',
		'riskDeletedByUserId' => 'int'
	];

	protected $fillable = [
		'installationId',
		'projectId',
		'riskSource',
		'probability',
		'impact',
		'probabilityValue',
		'impactValue',
		'impactCost',
		'impactSchedule',
		'riskResult',
		'impactPerformance',
		'riskCreatedDateTime',
		'riskCreatedByUserId',
		'riskUpdatedDateTime',
		'riskUpdatedByUserId',
		'riskMitigationPlan',
		'riskStatus',
		'riskDeleted',
		'riskDateDeleted',
		'riskDeletedByUserId'
	];

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}
}
