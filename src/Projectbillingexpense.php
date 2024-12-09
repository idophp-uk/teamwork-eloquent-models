<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectbillingexpense
 * 
 * @property int $projectBillingExpenseId
 * @property int|null $installationId
 * @property int $projectId
 * @property string $projectBillingExpenseName
 * @property string|null $projectBillingExpenseDescription
 * @property float $projectBillingExpenseCost
 * @property Carbon $projectBillingExpenseDateTime
 * @property int $userId
 * @property int|null $projectbillinginvoiceId
 * @property int $projectBillingExpenseDeleted
 * @property int|null $projectBillingExpenseDeletedByUserId
 * @property Carbon|null $projectBillingExpenseDeletedDatetime
 * @property Carbon|null $projectBillingExpenseUpdatedDatetime
 * 
 * @property Project $project
 * @property User $user
 *
 * @package App\Models
 */
class Projectbillingexpense extends Model
{
	protected $table = 'projectbillingexpenses';
	protected $primaryKey = 'projectBillingExpenseId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectId' => 'int',
		'projectBillingExpenseCost' => 'float',
		'projectBillingExpenseDateTime' => 'datetime',
		'userId' => 'int',
		'projectbillinginvoiceId' => 'int',
		'projectBillingExpenseDeleted' => 'int',
		'projectBillingExpenseDeletedByUserId' => 'int',
		'projectBillingExpenseDeletedDatetime' => 'datetime',
		'projectBillingExpenseUpdatedDatetime' => 'datetime'
	];

	protected $fillable = [
		'installationId',
		'projectId',
		'projectBillingExpenseName',
		'projectBillingExpenseDescription',
		'projectBillingExpenseCost',
		'projectBillingExpenseDateTime',
		'userId',
		'projectbillinginvoiceId',
		'projectBillingExpenseDeleted',
		'projectBillingExpenseDeletedByUserId',
		'projectBillingExpenseDeletedDatetime',
		'projectBillingExpenseUpdatedDatetime'
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
