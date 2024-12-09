<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * 
 * @property int $companyId
 * @property int $installationId
 * @property string $companyName
 * @property string|null $companyLogoImage
 * @property string $companyLoginBackgroundColor
 * @property Carbon|null $companyCreatedDateTime
 * @property Carbon|null $companyUpdatedDateTime
 * @property string|null $companyAddressLine1
 * @property string|null $companyAddressLine2
 * @property string|null $companyAddressCity
 * @property string|null $companyAddressState
 * @property string|null $companyAddressZip
 * @property string|null $countrycode
 * @property string|null $companyEmail1
 * @property string|null $companyEmail2
 * @property string|null $companyEmail3
 * @property string|null $companyWebsite
 * @property string|null $companyCid
 * @property string|null $companyPhone
 * @property string|null $companyFax
 * @property string $companyLanguage
 * @property string $companyStatus
 * @property int|null $companyDeletedByUserId
 * @property string|null $companyLogoUploadedToServer
 * @property int|null $companyIndustryCategoryId
 * @property string|null $companyProfile
 * @property string|null $companyPrivateNotes
 * @property int|null $hubId
 * @property int|null $clientManagerUserId
 * 
 * @property Installation $installation
 * @property Collection|Milestone[] $milestones
 * @property Collection|Project[] $projects
 * @property Collection|Task[] $tasks
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Company extends Model
{
	protected $table = 'companies';
	protected $primaryKey = 'companyId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'companyCreatedDateTime' => 'datetime',
		'companyUpdatedDateTime' => 'datetime',
		'companyDeletedByUserId' => 'int',
		'companyIndustryCategoryId' => 'int',
		'hubId' => 'int',
		'clientManagerUserId' => 'int'
	];

	protected $fillable = [
		'installationId',
		'companyName',
		'companyLogoImage',
		'companyLoginBackgroundColor',
		'companyCreatedDateTime',
		'companyUpdatedDateTime',
		'companyAddressLine1',
		'companyAddressLine2',
		'companyAddressCity',
		'companyAddressState',
		'companyAddressZip',
		'countrycode',
		'companyEmail1',
		'companyEmail2',
		'companyEmail3',
		'companyWebsite',
		'companyCid',
		'companyPhone',
		'companyFax',
		'companyLanguage',
		'companyStatus',
		'companyDeletedByUserId',
		'companyLogoUploadedToServer',
		'companyIndustryCategoryId',
		'companyProfile',
		'companyPrivateNotes',
		'hubId',
		'clientManagerUserId'
	];

	public function installation()
	{
		return $this->belongsTo(Installation::class, 'installationId');
	}

	public function milestones()
	{
		return $this->hasMany(Milestone::class, 'milestoneAssignedToCompanyId');
	}

	public function projects()
	{
		return $this->hasMany(Project::class, 'companyId');
	}

	public function tasks()
	{
		return $this->hasMany(Task::class, 'taskAssignedToCompanyId');
	}

	public function users()
	{
		return $this->hasMany(User::class, 'companyId');
	}
}
