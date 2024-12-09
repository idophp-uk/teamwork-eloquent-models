<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectbillinginvoice
 * 
 * @property int $projectbillinginvoiceId
 * @property int|null $installationId
 * @property int $projectId
 * @property string $projectbillinginvoiceNumber
 * @property string $projectbillinginvoicePONumber
 * @property string $projectbillinginvoiceDescription
 * @property int $projectbillinginvoiceCreatedByUserId
 * @property Carbon $projectbillinginvoiceDateCreated
 * @property Carbon|null $projectbillinginvoiceDisplayDate
 * @property int $projectbillinginvoiceUpdatedByUserId
 * @property Carbon $projectbillinginvoiceDateUpdated
 * @property string $projectbillinginvoiceStatus
 * @property Carbon|null $projectbillinginvoiceExportedDate
 * @property int|null $projectbillinginvoiceLastExportedByUserId
 * @property string|null $projectbillinginvoiceCurrencyCode
 * @property float|null $projectbillinginvoiceTotalCost
 * @property string|null $projectbillinginvoiceHistory
 * @property string|null $projectbillinginvoiceExportedTo
 * @property float|null $projectbillinginvoiceCompletedCost
 * @property Carbon|null $projectbillinginvoiceDueDate
 * 
 * @property Project $project
 * @property Collection|Projectbillinginvoicerate[] $projectbillinginvoicerates
 * @property Collection|Timelog[] $timelogs
 *
 * @package App\Models
 */
class Projectbillinginvoice extends Model
{
	protected $table = 'projectbillinginvoices';
	protected $primaryKey = 'projectbillinginvoiceId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectId' => 'int',
		'projectbillinginvoiceCreatedByUserId' => 'int',
		'projectbillinginvoiceDateCreated' => 'datetime',
		'projectbillinginvoiceDisplayDate' => 'datetime',
		'projectbillinginvoiceUpdatedByUserId' => 'int',
		'projectbillinginvoiceDateUpdated' => 'datetime',
		'projectbillinginvoiceExportedDate' => 'datetime',
		'projectbillinginvoiceLastExportedByUserId' => 'int',
		'projectbillinginvoiceTotalCost' => 'float',
		'projectbillinginvoiceCompletedCost' => 'float',
		'projectbillinginvoiceDueDate' => 'datetime'
	];

	protected $fillable = [
		'installationId',
		'projectId',
		'projectbillinginvoiceNumber',
		'projectbillinginvoicePONumber',
		'projectbillinginvoiceDescription',
		'projectbillinginvoiceCreatedByUserId',
		'projectbillinginvoiceDateCreated',
		'projectbillinginvoiceDisplayDate',
		'projectbillinginvoiceUpdatedByUserId',
		'projectbillinginvoiceDateUpdated',
		'projectbillinginvoiceStatus',
		'projectbillinginvoiceExportedDate',
		'projectbillinginvoiceLastExportedByUserId',
		'projectbillinginvoiceCurrencyCode',
		'projectbillinginvoiceTotalCost',
		'projectbillinginvoiceHistory',
		'projectbillinginvoiceExportedTo',
		'projectbillinginvoiceCompletedCost',
		'projectbillinginvoiceDueDate'
	];

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}

	public function projectbillinginvoicerates()
	{
		return $this->hasMany(Projectbillinginvoicerate::class, 'projectbillinginvoiceId');
	}

	public function timelogs()
	{
		return $this->hasMany(Timelog::class, 'projectbillinginvoiceId');
	}
}
