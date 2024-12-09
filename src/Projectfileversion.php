<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectfileversion
 * 
 * @property int $projectFileVersionId
 * @property int|null $installationId
 * @property int $projectfileId
 * @property int $projectfileversionno
 * @property int $userId
 * @property Carbon $projectfileversionUploadDateTime
 * @property string $projectfileversionFile
 * @property string $projectfileversionOriginalFile
 * @property string $projectfileversionDisplayName
 * @property int $projectfileversionFileSize
 * @property string $projectfileversionStatus
 * @property string $projectfileversionAmazonS3Status
 * @property Carbon|null $projectfileversionAmazonS3DateUploaded
 * @property string $projectfileversionAmazonS3Path
 * @property Carbon|null $projectfileversionDateDeleted
 * @property int|null $projectfileversionDeletedByUserId
 * @property string|null $projectfileversionUploadedToServer
 * @property string $projectfileversionFileType
 * @property string|null $projectfileversionExternalFileData
 * @property string $projectfileversionThumbnailStatus
 * @property string|null $projectfileversionHash
 * @property Carbon|null $projectfileversionDateLastUpdated
 * @property int $projectfileversionOneDriveCanEdit
 * @property string|null $projectfileVersionOriginalServer
 * @property int $externalLoginRequired
 * @property string|null $projectfileversionDisplayDescription
 * 
 * @property User|null $user
 * @property Projectfile $projectfile
 *
 * @package App\Models
 */
class Projectfileversion extends Model
{
	protected $table = 'projectfileversions';
	protected $primaryKey = 'projectFileVersionId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'projectfileId' => 'int',
		'projectfileversionno' => 'int',
		'userId' => 'int',
		'projectfileversionUploadDateTime' => 'datetime',
		'projectfileversionFileSize' => 'int',
		'projectfileversionAmazonS3DateUploaded' => 'datetime',
		'projectfileversionDateDeleted' => 'datetime',
		'projectfileversionDeletedByUserId' => 'int',
		'projectfileversionDateLastUpdated' => 'datetime',
		'projectfileversionOneDriveCanEdit' => 'int',
		'externalLoginRequired' => 'int'
	];

	protected $fillable = [
		'installationId',
		'projectfileId',
		'projectfileversionno',
		'userId',
		'projectfileversionUploadDateTime',
		'projectfileversionFile',
		'projectfileversionOriginalFile',
		'projectfileversionDisplayName',
		'projectfileversionFileSize',
		'projectfileversionStatus',
		'projectfileversionAmazonS3Status',
		'projectfileversionAmazonS3DateUploaded',
		'projectfileversionAmazonS3Path',
		'projectfileversionDateDeleted',
		'projectfileversionDeletedByUserId',
		'projectfileversionUploadedToServer',
		'projectfileversionFileType',
		'projectfileversionExternalFileData',
		'projectfileversionThumbnailStatus',
		'projectfileversionHash',
		'projectfileversionDateLastUpdated',
		'projectfileversionOneDriveCanEdit',
		'projectfileVersionOriginalServer',
		'externalLoginRequired',
		'projectfileversionDisplayDescription'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'projectfileversionDeletedByUserId');
	}

	public function projectfile()
	{
		return $this->belongsTo(Projectfile::class, 'projectfileId');
	}
}
