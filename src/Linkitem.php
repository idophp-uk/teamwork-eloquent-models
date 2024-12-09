<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Linkitem
 * 
 * @property int $linkItemId
 * @property int|null $installationId
 * @property string|null $linkItemTitle
 * @property string|null $linkItemDescription
 * @property int|null $linkCategoryId
 * @property string|null $linkItemCode
 * @property int|null $linkItemWidth
 * @property int|null $linkItemHeight
 * @property int|null $linkItemIsPrivate
 * @property string|null $linkItemProvider
 * @property int $projectId
 * @property int $linkItemCreatedByUserId
 * @property Carbon|null $linkItemCreatedDate
 * @property int|null $lockdownId
 * @property int $linkItemForceNewWindow
 * @property int $linkDeleted
 * @property int|null $linkDeletedByUserId
 * @property Carbon|null $linkDeletedDate
 * @property Carbon|null $linkItemUpdatedDate
 * @property int|null $linkItemUpdatedByUserId
 * 
 * @property Linkcategory|null $linkcategory
 * @property Project $project
 *
 * @package App\Models
 */
class Linkitem extends Model
{
	protected $table = 'linkitems';
	protected $primaryKey = 'linkItemId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'linkCategoryId' => 'int',
		'linkItemWidth' => 'int',
		'linkItemHeight' => 'int',
		'linkItemIsPrivate' => 'int',
		'projectId' => 'int',
		'linkItemCreatedByUserId' => 'int',
		'linkItemCreatedDate' => 'datetime',
		'lockdownId' => 'int',
		'linkItemForceNewWindow' => 'int',
		'linkDeleted' => 'int',
		'linkDeletedByUserId' => 'int',
		'linkDeletedDate' => 'datetime',
		'linkItemUpdatedDate' => 'datetime',
		'linkItemUpdatedByUserId' => 'int'
	];

	protected $fillable = [
		'installationId',
		'linkItemTitle',
		'linkItemDescription',
		'linkCategoryId',
		'linkItemCode',
		'linkItemWidth',
		'linkItemHeight',
		'linkItemIsPrivate',
		'linkItemProvider',
		'projectId',
		'linkItemCreatedByUserId',
		'linkItemCreatedDate',
		'lockdownId',
		'linkItemForceNewWindow',
		'linkDeleted',
		'linkDeletedByUserId',
		'linkDeletedDate',
		'linkItemUpdatedDate',
		'linkItemUpdatedByUserId'
	];

	public function linkcategory()
	{
		return $this->belongsTo(Linkcategory::class, 'linkCategoryId');
	}

	public function project()
	{
		return $this->belongsTo(Project::class, 'projectId');
	}
}
