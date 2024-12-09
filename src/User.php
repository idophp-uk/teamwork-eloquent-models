<?php

namespace Idophp\TeamworkEloquentModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $userId
 * @property int|null $installationId
 * @property string $userEmail
 * @property string $userFirstName
 * @property string $userLastName
 * @property string $userLogin
 * @property int|null $userPasswordSalt
 * @property string $userPassword
 * @property string $userPasswordHashAlgorithm
 * @property string $userTwoFactorAuthCode
 * @property bool $userHasTempName
 * @property int $userVisitCount
 * @property int $userIsActive
 * @property string|null $userAutoLoginCode
 * @property string $userLanguage
 * @property string $userS3ImagePath
 * @property string|null $userImage
 * @property Carbon|null $userlastlogindate
 * @property int|null $companyId
 * @property string|null $userTitle
 * @property string|null $userColor
 * @property string|null $userOfficePhone
 * @property string|null $userOfficeExtension
 * @property string|null $userMobilePhone
 * @property string|null $userFax
 * @property string|null $userHomePhone
 * @property string|null $userIMName
 * @property string|null $userIMService
 * @property string|null $userTwitterName
 * @property string|null $userAddressLine1
 * @property string|null $userAddressLine2
 * @property string|null $userAddressZip
 * @property string|null $userAddressCity
 * @property string|null $userAddressState
 * @property string|null $countrycode
 * @property string|null $userWebsite
 * @property string|null $userFacebook
 * @property string|null $userLinkedin
 * @property string|null $userGoogleplus
 * @property string|null $userPid
 * @property int $userIsAdmin
 * @property int $userAutoGiveProjectAccess
 * @property int $userIsServerAdmin
 * @property int|null $userCanAccessPortfolio
 * @property int|null $userCanManagePortfolio
 * @property int|null $userReceiveDailyReports
 * @property int $userReceiveDailyReportsAtWeekend
 * @property int $userReceiveDailyReportsAtTime
 * @property int $userDailyReportDaysFilter
 * @property string|null $userDailyReportSort
 * @property int|null $userLateUpcomingDisplayAll
 * @property int $userCalendarEventsDisplayAll
 * @property string|null $userDateFormat
 * @property int|null $userInvited
 * @property Carbon|null $userInvitedDateTime
 * @property Carbon|null $userInviteAcceptedDateTime
 * @property string|null $userInvitedStatus
 * @property int|null $userInvitedByUserId
 * @property string|null $userInviteUID
 * @property string|null $userChatInviteUID
 * @property string|null $userNickName
 * @property string|null $userOpenId
 * @property string|null $userOpenIdIdentity
 * @property string|null $userNotes
 * @property string|null $userProfile
 * @property string|null $userPrivateNotes
 * @property int|null $userCanAddProjects
 * @property string|null $userAPIKey
 * @property string|null $userChatAuthKey
 * @property int|null $userAgreedToAPITerms
 * @property Carbon $userCreatedAtDate
 * @property Carbon|null $userUpdatedAtDate
 * @property int|null $userUpdatedByUserId
 * @property string|null $userUUID
 * @property int|null $userStartSunday
 * @property int|null $userDateFormatId
 * @property int|null $userTimeFormatId
 * @property Carbon|null $userReportStartDate
 * @property Carbon|null $userReportEndDate
 * @property int $timezoneId
 * @property string|null $userType
 * @property string|null $userPrefs
 * @property float $userLengthOfDay
 * @property float|null $userDefaultChargeRate
 * @property int|null $userReceiveDailyReportsIfEmpty
 * @property int|null $userLinkedTWAccountRef
 * @property string|null $userEmailAlt1
 * @property string|null $userEmailAlt2
 * @property string|null $userEmailAlt3
 * @property int|null $userCanManagePeople
 * @property int|null $notifyOnTaskComplete
 * @property int|null $userCreatedByUserId
 * @property string|null $userCreatedBySource
 * @property int $userSoundAlertsEnabled
 * @property int|null $userReceiveNotifyWarnings
 * @property int|null $userReceiveMyNotificationsOnly
 * @property int $userReceiveStatusUpdateEmails
 * @property int $userReceiveAddedAsFollowerEmails
 * @property string|null $userImageUploadedToServer
 * @property Carbon|null $userWelcomeEmailDateTime
 * @property string|null $userGoogleProfileId
 * @property string|null $userGoogleAppsDomainIdentity
 * @property string|null $userTextFormat
 * @property bool|null $userEnableShorthandDurations
 * @property int $userQuickTaskEntryEnabled
 * @property int $userCanLogIn
 * @property string|null $userMobilePhoneCountryCode
 * @property string|null $userMobilePhonePrefix
 * @property string $userGender
 * @property int $userYoxelSyncEnabled
 * @property string|null $userHubspotRefreshToken
 * @property int|null $userDeletedByUserId
 * @property Carbon|null $userDeletedDatetime
 * @property int $userReceiveLateTaskReports
 * @property int $userReceiveLateTaskReportsAtWeekend
 * @property int $userReceiveLateTaskReportsAtTime
 * @property int $userReceiveSummaryReports
 * @property int $userReceiveSummaryReportsAtTime
 * @property int $userMarketoId
 * @property int|null $userCanAddProjectTemplates
 * @property int|null $userCanManageProjectTemplates
 * @property int|null $userCanViewProjectTemplates
 * @property int|null $hubId
 * @property int|null $workinghoursId
 * @property string|null $userDailyReportEventsType
 * @property int|null $userCanAccessCalendar
 * @property Carbon|null $churnzeroLastSyncDatetime
 * @property int|null $userCanManageCustomFields
 * @property int $userIsClient
 * @property int $userCanViewSchedule
 * @property int $userCanManageSchedule
 * @property int|null $userHasUsedTeamworkBefore
 * @property int|null $userDailyReportIncludeStartDate
 * @property int|null $userCanViewReports
 * @property int|null $userCanManageReports
 * @property int $userIsService
 * @property bool $companyroleId
 * @property int|null $userCanAddCustomReports
 * @property int|null $userEmailIncludeThread
 * @property int $userCanViewWorkflows
 * @property int $userCanEditWorkflows
 * @property int|null $userCanManageTimeReminders
 * @property int $userCanApproveTime
 * @property int $userReceiveTimeApprovalEmails
 * @property Carbon|null $userMarketingConsentAcceptedDateTime
 * @property string|null $userPersonaType
 * @property float $utilizationTarget
 * @property int $userCanManageFixedFeeBudgets
 * @property int $userIsPlaceholderResource
 * 
 * @property Company|null $company
 * @property Collection|Event[] $events
 * @property Collection|Installation[] $installations
 * @property Collection|Milestone[] $milestones
 * @property Collection|Notebookcategory[] $notebookcategories
 * @property Collection|Projectbillingexpense[] $projectbillingexpenses
 * @property Collection|Projectbillinginvoicerate[] $projectbillinginvoicerates
 * @property Collection|Projectfileversion[] $projectfileversions
 * @property Collection|Project[] $projects
 * @property Collection|Task[] $tasks
 * @property Collection|Timelog[] $timelogs
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'userId';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'userPasswordSalt' => 'int',
		'userHasTempName' => 'bool',
		'userVisitCount' => 'int',
		'userIsActive' => 'int',
		'userlastlogindate' => 'datetime',
		'companyId' => 'int',
		'userIsAdmin' => 'int',
		'userAutoGiveProjectAccess' => 'int',
		'userIsServerAdmin' => 'int',
		'userCanAccessPortfolio' => 'int',
		'userCanManagePortfolio' => 'int',
		'userReceiveDailyReports' => 'int',
		'userReceiveDailyReportsAtWeekend' => 'int',
		'userReceiveDailyReportsAtTime' => 'int',
		'userDailyReportDaysFilter' => 'int',
		'userLateUpcomingDisplayAll' => 'int',
		'userCalendarEventsDisplayAll' => 'int',
		'userInvited' => 'int',
		'userInvitedDateTime' => 'datetime',
		'userInviteAcceptedDateTime' => 'datetime',
		'userInvitedByUserId' => 'int',
		'userCanAddProjects' => 'int',
		'userAgreedToAPITerms' => 'int',
		'userCreatedAtDate' => 'datetime',
		'userUpdatedAtDate' => 'datetime',
		'userUpdatedByUserId' => 'int',
		'userStartSunday' => 'int',
		'userDateFormatId' => 'int',
		'userTimeFormatId' => 'int',
		'userReportStartDate' => 'datetime',
		'userReportEndDate' => 'datetime',
		'timezoneId' => 'int',
		'userLengthOfDay' => 'float',
		'userDefaultChargeRate' => 'float',
		'userReceiveDailyReportsIfEmpty' => 'int',
		'userLinkedTWAccountRef' => 'int',
		'userCanManagePeople' => 'int',
		'notifyOnTaskComplete' => 'int',
		'userCreatedByUserId' => 'int',
		'userSoundAlertsEnabled' => 'int',
		'userReceiveNotifyWarnings' => 'int',
		'userReceiveMyNotificationsOnly' => 'int',
		'userReceiveStatusUpdateEmails' => 'int',
		'userReceiveAddedAsFollowerEmails' => 'int',
		'userWelcomeEmailDateTime' => 'datetime',
		'userEnableShorthandDurations' => 'bool',
		'userQuickTaskEntryEnabled' => 'int',
		'userCanLogIn' => 'int',
		'userYoxelSyncEnabled' => 'int',
		'userDeletedByUserId' => 'int',
		'userDeletedDatetime' => 'datetime',
		'userReceiveLateTaskReports' => 'int',
		'userReceiveLateTaskReportsAtWeekend' => 'int',
		'userReceiveLateTaskReportsAtTime' => 'int',
		'userReceiveSummaryReports' => 'int',
		'userReceiveSummaryReportsAtTime' => 'int',
		'userMarketoId' => 'int',
		'userCanAddProjectTemplates' => 'int',
		'userCanManageProjectTemplates' => 'int',
		'userCanViewProjectTemplates' => 'int',
		'hubId' => 'int',
		'workinghoursId' => 'int',
		'userCanAccessCalendar' => 'int',
		'churnzeroLastSyncDatetime' => 'datetime',
		'userCanManageCustomFields' => 'int',
		'userIsClient' => 'int',
		'userCanViewSchedule' => 'int',
		'userCanManageSchedule' => 'int',
		'userHasUsedTeamworkBefore' => 'int',
		'userDailyReportIncludeStartDate' => 'int',
		'userCanViewReports' => 'int',
		'userCanManageReports' => 'int',
		'userIsService' => 'int',
		'companyroleId' => 'bool',
		'userCanAddCustomReports' => 'int',
		'userEmailIncludeThread' => 'int',
		'userCanViewWorkflows' => 'int',
		'userCanEditWorkflows' => 'int',
		'userCanManageTimeReminders' => 'int',
		'userCanApproveTime' => 'int',
		'userReceiveTimeApprovalEmails' => 'int',
		'userMarketingConsentAcceptedDateTime' => 'datetime',
		'utilizationTarget' => 'float',
		'userCanManageFixedFeeBudgets' => 'int',
		'userIsPlaceholderResource' => 'int'
	];

	protected $fillable = [
		'installationId',
		'userEmail',
		'userFirstName',
		'userLastName',
		'userLogin',
		'userPasswordSalt',
		'userPassword',
		'userPasswordHashAlgorithm',
		'userTwoFactorAuthCode',
		'userHasTempName',
		'userVisitCount',
		'userIsActive',
		'userAutoLoginCode',
		'userLanguage',
		'userS3ImagePath',
		'userImage',
		'userlastlogindate',
		'companyId',
		'userTitle',
		'userColor',
		'userOfficePhone',
		'userOfficeExtension',
		'userMobilePhone',
		'userFax',
		'userHomePhone',
		'userIMName',
		'userIMService',
		'userTwitterName',
		'userAddressLine1',
		'userAddressLine2',
		'userAddressZip',
		'userAddressCity',
		'userAddressState',
		'countrycode',
		'userWebsite',
		'userFacebook',
		'userLinkedin',
		'userGoogleplus',
		'userPid',
		'userIsAdmin',
		'userAutoGiveProjectAccess',
		'userIsServerAdmin',
		'userCanAccessPortfolio',
		'userCanManagePortfolio',
		'userReceiveDailyReports',
		'userReceiveDailyReportsAtWeekend',
		'userReceiveDailyReportsAtTime',
		'userDailyReportDaysFilter',
		'userDailyReportSort',
		'userLateUpcomingDisplayAll',
		'userCalendarEventsDisplayAll',
		'userDateFormat',
		'userInvited',
		'userInvitedDateTime',
		'userInviteAcceptedDateTime',
		'userInvitedStatus',
		'userInvitedByUserId',
		'userInviteUID',
		'userChatInviteUID',
		'userNickName',
		'userOpenId',
		'userOpenIdIdentity',
		'userNotes',
		'userProfile',
		'userPrivateNotes',
		'userCanAddProjects',
		'userAPIKey',
		'userChatAuthKey',
		'userAgreedToAPITerms',
		'userCreatedAtDate',
		'userUpdatedAtDate',
		'userUpdatedByUserId',
		'userUUID',
		'userStartSunday',
		'userDateFormatId',
		'userTimeFormatId',
		'userReportStartDate',
		'userReportEndDate',
		'timezoneId',
		'userType',
		'userPrefs',
		'userLengthOfDay',
		'userDefaultChargeRate',
		'userReceiveDailyReportsIfEmpty',
		'userLinkedTWAccountRef',
		'userEmailAlt1',
		'userEmailAlt2',
		'userEmailAlt3',
		'userCanManagePeople',
		'notifyOnTaskComplete',
		'userCreatedByUserId',
		'userCreatedBySource',
		'userSoundAlertsEnabled',
		'userReceiveNotifyWarnings',
		'userReceiveMyNotificationsOnly',
		'userReceiveStatusUpdateEmails',
		'userReceiveAddedAsFollowerEmails',
		'userImageUploadedToServer',
		'userWelcomeEmailDateTime',
		'userGoogleProfileId',
		'userGoogleAppsDomainIdentity',
		'userTextFormat',
		'userEnableShorthandDurations',
		'userQuickTaskEntryEnabled',
		'userCanLogIn',
		'userMobilePhoneCountryCode',
		'userMobilePhonePrefix',
		'userGender',
		'userYoxelSyncEnabled',
		'userHubspotRefreshToken',
		'userDeletedByUserId',
		'userDeletedDatetime',
		'userReceiveLateTaskReports',
		'userReceiveLateTaskReportsAtWeekend',
		'userReceiveLateTaskReportsAtTime',
		'userReceiveSummaryReports',
		'userReceiveSummaryReportsAtTime',
		'userMarketoId',
		'userCanAddProjectTemplates',
		'userCanManageProjectTemplates',
		'userCanViewProjectTemplates',
		'hubId',
		'workinghoursId',
		'userDailyReportEventsType',
		'userCanAccessCalendar',
		'churnzeroLastSyncDatetime',
		'userCanManageCustomFields',
		'userIsClient',
		'userCanViewSchedule',
		'userCanManageSchedule',
		'userHasUsedTeamworkBefore',
		'userDailyReportIncludeStartDate',
		'userCanViewReports',
		'userCanManageReports',
		'userIsService',
		'companyroleId',
		'userCanAddCustomReports',
		'userEmailIncludeThread',
		'userCanViewWorkflows',
		'userCanEditWorkflows',
		'userCanManageTimeReminders',
		'userCanApproveTime',
		'userReceiveTimeApprovalEmails',
		'userMarketingConsentAcceptedDateTime',
		'userPersonaType',
		'utilizationTarget',
		'userCanManageFixedFeeBudgets',
		'userIsPlaceholderResource'
	];

	public function company()
	{
		return $this->belongsTo(Company::class, 'companyId');
	}

	public function events()
	{
		return $this->belongsToMany(Event::class, 'event_users2', 'userId', 'eventId')
					->withPivot('installationId', 'eventsequenceId', 'userEventAssociationType', 'eventDeleted', 'id');
	}

	public function installations()
	{
		return $this->hasMany(Installation::class, 'installationOwnerAccountUserId');
	}

	public function milestones()
	{
		return $this->belongsToMany(Milestone::class, 'milestones_users', 'userId', 'milestoneId')
					->withPivot('installationId');
	}

	public function notebookcategories()
	{
		return $this->hasMany(Notebookcategory::class, 'createdByUserId');
	}

	public function projectbillingexpenses()
	{
		return $this->hasMany(Projectbillingexpense::class, 'userId');
	}

	public function projectbillinginvoicerates()
	{
		return $this->hasMany(Projectbillinginvoicerate::class, 'userId');
	}

	public function projectfileversions()
	{
		return $this->hasMany(Projectfileversion::class, 'projectfileversionDeletedByUserId');
	}

	public function projects()
	{
		return $this->belongsToMany(Project::class, 'projects_users', 'userId', 'projectId')
					->withPivot('installationId', 'isStarred', 'isObserving', 'receiveEmailNotifications', 'p_viewMessagesAndFiles', 'p_viewTasksAndMilestones', 'p_viewTimeLog', 'p_viewNotebook', 'p_viewRiskRegister', 'p_canAccessInvoiceTracking', 'p_canAddTasks', 'p_canEditAllTasks', 'p_canAddMilestones', 'p_canAddTaskLists', 'p_canAddMessages', 'p_canAddFiles', 'p_canLogTime', 'p_canAddNotebooks', 'p_viewLinks', 'p_canAddLinks', 'p_projectAdministrator', 'p_viewAllTimeLogs', 'p_canSetPrivacy', 'p_canViewProjectUpdate', 'p_canAddProjectUpdate', 'p_viewEstimatedTime', 'p_canViewProjectMembers', 'lastActivityDatetime', 'p_canViewProjectBudget', 'p_canManageProjectBudget', 'p_canViewRates', 'p_canManageRates', 'p_canAddRisks', 'p_canManageCustomFields', 'p_canViewSchedule', 'p_canManageSchedule', 'p_canViewForms', 'p_canAddForms', 'p_canViewWorkflows', 'p_canEditWorkflows', 'p_canViewProfitability');
	}

	public function tasks()
	{
		return $this->belongsToMany(Task::class, 'tasks_users', 'userId', 'taskId')
					->withPivot('installationId');
	}

	public function timelogs()
	{
		return $this->hasMany(Timelog::class, 'userId');
	}
}
