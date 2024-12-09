<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * 
 * @property int $projectId
 * @property int|null $installationId
 * @property string $projectname
 * @property string|null $projectDescription
 * @property string|null $projectLogo
 * @property int $companyId
 * @property int $departmentId
 * @property string $projectStatus
 * @property Carbon|null $projectLastActivityDate
 * @property int|null $projectCreatedByUserId
 * @property Carbon|null $projectCreatedDate
 * @property Carbon|null $projectDateDeleted
 * @property int|null $projectDeletedByUserId
 * @property string $projectStartPage
 * @property string $projectOverviewStartPage
 * @property string $projectTasksStartPage
 * @property string|null $projectAnnouncement
 * @property bool $projectAnnouncementIsOn
 * @property float|null $projectBudget
 * @property Carbon|null $projectStartDate
 * @property Carbon|null $projectEndDate
 * @property int|null $projectPrivacyEnabled
 * @property bool $projectShowPageTasks
 * @property bool $projectShowPageMilestones
 * @property int $projectShowPageComments
 * @property bool $projectShowPageMessages
 * @property bool $projectShowPageFiles
 * @property bool $projectShowPageTime
 * @property bool $projectShowPageNotebook
 * @property bool $projectShowPageRiskRegister
 * @property bool $projectShowPageWebLinks
 * @property bool $projectShowPageLinks
 * @property bool $projectNotifyEveryone
 * @property bool $projectEmailNotificationsEnabled
 * @property bool $projectReplyByEmailEnabled
 * @property int $projectAllowNotifyAnyone
 * @property bool $projectEmailAttachmentsEnabled
 * @property int $projectDirectFileUploadsEnabled
 * @property bool $projectShowPageBilling
 * @property bool $projectSkipWeekends
 * @property string|null $projectDropboxName
 * @property string|null $projectPrefs
 * @property int|null $projectCategoryId
 * @property string|null $projectLogoUploadedToServer
 * @property int $projectHarvestEnabled
 * @property int $projectNotifyByEmailCommentIncludeCompleter
 * @property int $projectNotifyByEmailCommentIncludeCommentators
 * @property int $projectNotifyByEmailCommentIncludeAssigned
 * @property int $projectNotifyByEmailCommentIncludeCreator
 * @property int $projectNotifyByEmailMessageEveryone
 * @property int $projectNotifyByEmailTaskEveryone
 * @property int $projectNotifyPrivateItemEveryone
 * @property int $projectNotifyLinkEveryone
 * @property int $projectNotifyNotebookEveryone
 * @property int $projectNotifyFileEveryone
 * @property int $projectNotifyMessageEveryone
 * @property int $projectNotifyMilestoneAssignee
 * @property int $projectNotifyTaskAssignee
 * @property int $projectNotifyCommentIncludeCompleter
 * @property int $projectNotifyCommentIncludeCommentators
 * @property int $projectNotifyCommentIncludeAssigned
 * @property int $projectNotifyCommentIncludeCreator
 * @property string|null $projectType
 * @property Carbon|null $projectAutoArchivedDateTime
 * @property bool $projectHasArchivedActivity
 * @property int|null $projectUpdatedByUserId
 * @property int $projectCompleted
 * @property int|null $projectCompletedByUserId
 * @property Carbon|null $projectCompletedDateTime
 * @property int $projectAutoArchived
 * @property string $projectDefaultPrivacy
 * @property int $projectXeroEnabled
 * @property int|null $projectOwnerId
 * @property bool $projectIsOnBoardingProject
 * @property bool $projectIsSampleProject
 * @property int $projectShowPageForms
 * @property bool $projectShowPageList
 * @property bool $projectShowPageBoard
 * @property bool $projectShowPageGantt
 * @property bool $projectShowPageTable
 * @property bool $projectShowPageDashboard
 * @property bool $projectIsBillable
 * @property bool $projectShowPageFinance
 * @property bool $projectShowPageProofs
 * @property bool $projectShowPageTickets
 * @property string|null $projectLogoIcon
 * @property string|null $projectLogoColor
 * @property bool|null $projectQuickbooksAdvancedEnabled
 * 
 * @property Projectcategory|null $projectcategory
 * @property User|null $user
 * @property Company $company
 * @property Collection|Comment[] $comments
 * @property Collection|Event[] $events
 * @property Collection|Linkcategory[] $linkcategories
 * @property Collection|Linkitem[] $linkitems
 * @property Collection|Milestone[] $milestones
 * @property Collection|Notebookcategory[] $notebookcategories
 * @property Collection|Notebook[] $notebooks
 * @property Collection|Portfoliocard[] $portfoliocards
 * @property Collection|Projectbillingexpense[] $projectbillingexpenses
 * @property Collection|Projectbillinginvoice[] $projectbillinginvoices
 * @property Collection|Projectboardcard[] $projectboardcards
 * @property Collection|Projectboardcolumn[] $projectboardcolumns
 * @property Collection|Projectfilecategory[] $projectfilecategories
 * @property Collection|Projectfile[] $projectfiles
 * @property Collection|Projectmessagecategory[] $projectmessagecategories
 * @property Collection|Projectmessage[] $projectmessages
 * @property Collection|Projectrole[] $projectroles
 * @property Collection|User[] $users
 * @property Collection|Riskregister[] $riskregisters
 * @property Collection|Tasklist[] $tasklists
 * @property Collection|Timelog[] $timelogs
 *
 * @package App\Models
 */
class Project extends Model
{
	protected $table = 'projects';
	protected $primaryKey = 'projectId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'companyId' => 'int',
		'departmentId' => 'int',
		'projectLastActivityDate' => 'datetime',
		'projectCreatedByUserId' => 'int',
		'projectCreatedDate' => 'datetime',
		'projectDateDeleted' => 'datetime',
		'projectDeletedByUserId' => 'int',
		'projectAnnouncementIsOn' => 'bool',
		'projectBudget' => 'float',
		'projectStartDate' => 'datetime',
		'projectEndDate' => 'datetime',
		'projectPrivacyEnabled' => 'int',
		'projectShowPageTasks' => 'bool',
		'projectShowPageMilestones' => 'bool',
		'projectShowPageComments' => 'int',
		'projectShowPageMessages' => 'bool',
		'projectShowPageFiles' => 'bool',
		'projectShowPageTime' => 'bool',
		'projectShowPageNotebook' => 'bool',
		'projectShowPageRiskRegister' => 'bool',
		'projectShowPageWebLinks' => 'bool',
		'projectShowPageLinks' => 'bool',
		'projectNotifyEveryone' => 'bool',
		'projectEmailNotificationsEnabled' => 'bool',
		'projectReplyByEmailEnabled' => 'bool',
		'projectAllowNotifyAnyone' => 'int',
		'projectEmailAttachmentsEnabled' => 'bool',
		'projectDirectFileUploadsEnabled' => 'int',
		'projectShowPageBilling' => 'bool',
		'projectSkipWeekends' => 'bool',
		'projectCategoryId' => 'int',
		'projectHarvestEnabled' => 'int',
		'projectNotifyByEmailCommentIncludeCompleter' => 'int',
		'projectNotifyByEmailCommentIncludeCommentators' => 'int',
		'projectNotifyByEmailCommentIncludeAssigned' => 'int',
		'projectNotifyByEmailCommentIncludeCreator' => 'int',
		'projectNotifyByEmailMessageEveryone' => 'int',
		'projectNotifyByEmailTaskEveryone' => 'int',
		'projectNotifyPrivateItemEveryone' => 'int',
		'projectNotifyLinkEveryone' => 'int',
		'projectNotifyNotebookEveryone' => 'int',
		'projectNotifyFileEveryone' => 'int',
		'projectNotifyMessageEveryone' => 'int',
		'projectNotifyMilestoneAssignee' => 'int',
		'projectNotifyTaskAssignee' => 'int',
		'projectNotifyCommentIncludeCompleter' => 'int',
		'projectNotifyCommentIncludeCommentators' => 'int',
		'projectNotifyCommentIncludeAssigned' => 'int',
		'projectNotifyCommentIncludeCreator' => 'int',
		'projectAutoArchivedDateTime' => 'datetime',
		'projectHasArchivedActivity' => 'bool',
		'projectUpdatedByUserId' => 'int',
		'projectCompleted' => 'int',
		'projectCompletedByUserId' => 'int',
		'projectCompletedDateTime' => 'datetime',
		'projectAutoArchived' => 'int',
		'projectXeroEnabled' => 'int',
		'projectOwnerId' => 'int',
		'projectIsOnBoardingProject' => 'bool',
		'projectIsSampleProject' => 'bool',
		'projectShowPageForms' => 'int',
		'projectShowPageList' => 'bool',
		'projectShowPageBoard' => 'bool',
		'projectShowPageGantt' => 'bool',
		'projectShowPageTable' => 'bool',
		'projectShowPageDashboard' => 'bool',
		'projectIsBillable' => 'bool',
		'projectShowPageFinance' => 'bool',
		'projectShowPageProofs' => 'bool',
		'projectShowPageTickets' => 'bool',
		'projectQuickbooksAdvancedEnabled' => 'bool'
	];

	protected $fillable = [
		'installationId',
		'projectname',
		'projectDescription',
		'projectLogo',
		'companyId',
		'departmentId',
		'projectStatus',
		'projectLastActivityDate',
		'projectCreatedByUserId',
		'projectCreatedDate',
		'projectDateDeleted',
		'projectDeletedByUserId',
		'projectStartPage',
		'projectOverviewStartPage',
		'projectTasksStartPage',
		'projectAnnouncement',
		'projectAnnouncementIsOn',
		'projectBudget',
		'projectStartDate',
		'projectEndDate',
		'projectPrivacyEnabled',
		'projectShowPageTasks',
		'projectShowPageMilestones',
		'projectShowPageComments',
		'projectShowPageMessages',
		'projectShowPageFiles',
		'projectShowPageTime',
		'projectShowPageNotebook',
		'projectShowPageRiskRegister',
		'projectShowPageWebLinks',
		'projectShowPageLinks',
		'projectNotifyEveryone',
		'projectEmailNotificationsEnabled',
		'projectReplyByEmailEnabled',
		'projectAllowNotifyAnyone',
		'projectEmailAttachmentsEnabled',
		'projectDirectFileUploadsEnabled',
		'projectShowPageBilling',
		'projectSkipWeekends',
		'projectDropboxName',
		'projectPrefs',
		'projectCategoryId',
		'projectLogoUploadedToServer',
		'projectHarvestEnabled',
		'projectNotifyByEmailCommentIncludeCompleter',
		'projectNotifyByEmailCommentIncludeCommentators',
		'projectNotifyByEmailCommentIncludeAssigned',
		'projectNotifyByEmailCommentIncludeCreator',
		'projectNotifyByEmailMessageEveryone',
		'projectNotifyByEmailTaskEveryone',
		'projectNotifyPrivateItemEveryone',
		'projectNotifyLinkEveryone',
		'projectNotifyNotebookEveryone',
		'projectNotifyFileEveryone',
		'projectNotifyMessageEveryone',
		'projectNotifyMilestoneAssignee',
		'projectNotifyTaskAssignee',
		'projectNotifyCommentIncludeCompleter',
		'projectNotifyCommentIncludeCommentators',
		'projectNotifyCommentIncludeAssigned',
		'projectNotifyCommentIncludeCreator',
		'projectType',
		'projectAutoArchivedDateTime',
		'projectHasArchivedActivity',
		'projectUpdatedByUserId',
		'projectCompleted',
		'projectCompletedByUserId',
		'projectCompletedDateTime',
		'projectAutoArchived',
		'projectDefaultPrivacy',
		'projectXeroEnabled',
		'projectOwnerId',
		'projectIsOnBoardingProject',
		'projectIsSampleProject',
		'projectShowPageForms',
		'projectShowPageList',
		'projectShowPageBoard',
		'projectShowPageGantt',
		'projectShowPageTable',
		'projectShowPageDashboard',
		'projectIsBillable',
		'projectShowPageFinance',
		'projectShowPageProofs',
		'projectShowPageTickets',
		'projectLogoIcon',
		'projectLogoColor',
		'projectQuickbooksAdvancedEnabled'
	];

	public function projectcategory()
	{
		return $this->belongsTo(Projectcategory::class, 'projectCategoryId');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'projectCreatedByUserId');
	}

	public function company()
	{
		return $this->belongsTo(Company::class, 'companyId');
	}

	public function comments()
	{
		return $this->hasMany(Comment::class, 'projectId');
	}

	public function events()
	{
		return $this->hasMany(Event::class, 'projectId');
	}

	public function linkcategories()
	{
		return $this->hasMany(Linkcategory::class, 'projectId');
	}

	public function linkitems()
	{
		return $this->hasMany(Linkitem::class, 'projectId');
	}

	public function milestones()
	{
		return $this->hasMany(Milestone::class, 'projectId');
	}

	public function notebookcategories()
	{
		return $this->hasMany(Notebookcategory::class, 'projectId');
	}

	public function notebooks()
	{
		return $this->hasMany(Notebook::class, 'projectId');
	}

	public function portfoliocards()
	{
		return $this->hasMany(Portfoliocard::class, 'projectId');
	}

	public function projectbillingexpenses()
	{
		return $this->hasMany(Projectbillingexpense::class, 'projectId');
	}

	public function projectbillinginvoices()
	{
		return $this->hasMany(Projectbillinginvoice::class, 'projectId');
	}

	public function projectboardcards()
	{
		return $this->hasMany(Projectboardcard::class, 'projectId');
	}

	public function projectboardcolumns()
	{
		return $this->hasMany(Projectboardcolumn::class, 'projectId');
	}

	public function projectfilecategories()
	{
		return $this->hasMany(Projectfilecategory::class, 'projectId');
	}

	public function projectfiles()
	{
		return $this->hasMany(Projectfile::class, 'projectId');
	}

	public function projectmessagecategories()
	{
		return $this->hasMany(Projectmessagecategory::class, 'projectId');
	}

	public function projectmessages()
	{
		return $this->hasMany(Projectmessage::class, 'projectId');
	}

	public function projectroles()
	{
		return $this->hasMany(Projectrole::class, 'projectId');
	}

	public function users()
	{
		return $this->belongsToMany(User::class, 'projects_users', 'projectId', 'userId')
					->withPivot('installationId', 'isStarred', 'isObserving', 'receiveEmailNotifications', 'p_viewMessagesAndFiles', 'p_viewTasksAndMilestones', 'p_viewTimeLog', 'p_viewNotebook', 'p_viewRiskRegister', 'p_canAccessInvoiceTracking', 'p_canAddTasks', 'p_canEditAllTasks', 'p_canAddMilestones', 'p_canAddTaskLists', 'p_canAddMessages', 'p_canAddFiles', 'p_canLogTime', 'p_canAddNotebooks', 'p_viewLinks', 'p_canAddLinks', 'p_projectAdministrator', 'p_viewAllTimeLogs', 'p_canSetPrivacy', 'p_canViewProjectUpdate', 'p_canAddProjectUpdate', 'p_viewEstimatedTime', 'p_canViewProjectMembers', 'lastActivityDatetime', 'p_canViewProjectBudget', 'p_canManageProjectBudget', 'p_canViewRates', 'p_canManageRates', 'p_canAddRisks', 'p_canManageCustomFields', 'p_canViewSchedule', 'p_canManageSchedule', 'p_canViewForms', 'p_canAddForms', 'p_canViewWorkflows', 'p_canEditWorkflows', 'p_canViewProfitability');
	}

	public function riskregisters()
	{
		return $this->hasMany(Riskregister::class, 'projectId');
	}

	public function tasklists()
	{
		return $this->hasMany(Tasklist::class, 'projectId');
	}

	public function timelogs()
	{
		return $this->hasMany(Timelog::class, 'projectId');
	}
}
