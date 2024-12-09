<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectsUser
 * 
 * @property int $projectId
 * @property int|null $installationId
 * @property int $userId
 * @property int $isStarred
 * @property int $isObserving
 * @property int $receiveEmailNotifications
 * @property int|null $p_viewMessagesAndFiles
 * @property int|null $p_viewTasksAndMilestones
 * @property int|null $p_viewTimeLog
 * @property int|null $p_viewNotebook
 * @property int|null $p_viewRiskRegister
 * @property int|null $p_canAccessInvoiceTracking
 * @property int|null $p_canAddTasks
 * @property int $p_canEditAllTasks
 * @property int|null $p_canAddMilestones
 * @property int|null $p_canAddTaskLists
 * @property int|null $p_canAddMessages
 * @property int|null $p_canAddFiles
 * @property int|null $p_canLogTime
 * @property int|null $p_canAddNotebooks
 * @property int|null $p_viewLinks
 * @property int|null $p_canAddLinks
 * @property int|null $p_projectAdministrator
 * @property int|null $p_viewAllTimeLogs
 * @property int $p_canSetPrivacy
 * @property int|null $p_canViewProjectUpdate
 * @property int|null $p_canAddProjectUpdate
 * @property int $p_viewEstimatedTime
 * @property int|null $p_canViewProjectMembers
 * @property Carbon|null $lastActivityDatetime
 * @property int $p_canViewProjectBudget
 * @property int $p_canManageProjectBudget
 * @property int $p_canViewRates
 * @property int $p_canManageRates
 * @property int $p_canAddRisks
 * @property int $p_canManageCustomFields
 * @property int $p_canViewSchedule
 * @property int $p_canManageSchedule
 * @property int $p_canViewForms
 * @property int $p_canAddForms
 * @property int $p_canViewWorkflows
 * @property int $p_canEditWorkflows
 * @property int $p_canViewProfitability
 * 
 * @property Project $project
 * @property User $user
 *
 * @package App\Models
 */
class ProjectsUser extends Model
{
	protected $table = 'projects_users';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'projectId' => 'int',
		'installationId' => 'int',
		'userId' => 'int',
		'isStarred' => 'int',
		'isObserving' => 'int',
		'receiveEmailNotifications' => 'int',
		'p_viewMessagesAndFiles' => 'int',
		'p_viewTasksAndMilestones' => 'int',
		'p_viewTimeLog' => 'int',
		'p_viewNotebook' => 'int',
		'p_viewRiskRegister' => 'int',
		'p_canAccessInvoiceTracking' => 'int',
		'p_canAddTasks' => 'int',
		'p_canEditAllTasks' => 'int',
		'p_canAddMilestones' => 'int',
		'p_canAddTaskLists' => 'int',
		'p_canAddMessages' => 'int',
		'p_canAddFiles' => 'int',
		'p_canLogTime' => 'int',
		'p_canAddNotebooks' => 'int',
		'p_viewLinks' => 'int',
		'p_canAddLinks' => 'int',
		'p_projectAdministrator' => 'int',
		'p_viewAllTimeLogs' => 'int',
		'p_canSetPrivacy' => 'int',
		'p_canViewProjectUpdate' => 'int',
		'p_canAddProjectUpdate' => 'int',
		'p_viewEstimatedTime' => 'int',
		'p_canViewProjectMembers' => 'int',
		'lastActivityDatetime' => 'datetime',
		'p_canViewProjectBudget' => 'int',
		'p_canManageProjectBudget' => 'int',
		'p_canViewRates' => 'int',
		'p_canManageRates' => 'int',
		'p_canAddRisks' => 'int',
		'p_canManageCustomFields' => 'int',
		'p_canViewSchedule' => 'int',
		'p_canManageSchedule' => 'int',
		'p_canViewForms' => 'int',
		'p_canAddForms' => 'int',
		'p_canViewWorkflows' => 'int',
		'p_canEditWorkflows' => 'int',
		'p_canViewProfitability' => 'int'
	];

	protected $fillable = [
		'installationId',
		'isStarred',
		'isObserving',
		'receiveEmailNotifications',
		'p_viewMessagesAndFiles',
		'p_viewTasksAndMilestones',
		'p_viewTimeLog',
		'p_viewNotebook',
		'p_viewRiskRegister',
		'p_canAccessInvoiceTracking',
		'p_canAddTasks',
		'p_canEditAllTasks',
		'p_canAddMilestones',
		'p_canAddTaskLists',
		'p_canAddMessages',
		'p_canAddFiles',
		'p_canLogTime',
		'p_canAddNotebooks',
		'p_viewLinks',
		'p_canAddLinks',
		'p_projectAdministrator',
		'p_viewAllTimeLogs',
		'p_canSetPrivacy',
		'p_canViewProjectUpdate',
		'p_canAddProjectUpdate',
		'p_viewEstimatedTime',
		'p_canViewProjectMembers',
		'lastActivityDatetime',
		'p_canViewProjectBudget',
		'p_canManageProjectBudget',
		'p_canViewRates',
		'p_canManageRates',
		'p_canAddRisks',
		'p_canManageCustomFields',
		'p_canViewSchedule',
		'p_canManageSchedule',
		'p_canViewForms',
		'p_canAddForms',
		'p_canViewWorkflows',
		'p_canEditWorkflows',
		'p_canViewProfitability'
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
