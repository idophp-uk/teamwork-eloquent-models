<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notebookversion
 * 
 * @property int $notebookversionId
 * @property int|null $installationId
 * @property int|null $notebookId
 * @property string|null $notebookVersionContents
 * @property int|null $notebookVersionNumber
 * @property int|null $notebookVersionCreatedByUserId
 * @property Carbon|null $notebookVersionCreatedDateTime
 * @property Carbon|null $notebookVersionUpdatedDateTime
 * @property int|null $notebookVersionIsCurrent
 * @property int $notebookVersionDeleted
 * @property Carbon|null $notebookVersionDeletedDateTime
 * @property int|null $notebookVersionDeletedByUserId
 * 
 * @property Notebook|null $notebook
 *
 * @package App\Models
 */
class Notebookversion extends Model
{
	protected $table = 'notebookversions';
	protected $primaryKey = 'notebookversionId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'notebookId' => 'int',
		'notebookVersionNumber' => 'int',
		'notebookVersionCreatedByUserId' => 'int',
		'notebookVersionCreatedDateTime' => 'datetime',
		'notebookVersionUpdatedDateTime' => 'datetime',
		'notebookVersionIsCurrent' => 'int',
		'notebookVersionDeleted' => 'int',
		'notebookVersionDeletedDateTime' => 'datetime',
		'notebookVersionDeletedByUserId' => 'int'
	];

	protected $fillable = [
		'installationId',
		'notebookId',
		'notebookVersionContents',
		'notebookVersionNumber',
		'notebookVersionCreatedByUserId',
		'notebookVersionCreatedDateTime',
		'notebookVersionUpdatedDateTime',
		'notebookVersionIsCurrent',
		'notebookVersionDeleted',
		'notebookVersionDeletedDateTime',
		'notebookVersionDeletedByUserId'
	];

	public function notebook()
	{
		return $this->belongsTo(Notebook::class, 'notebookId');
	}
}
