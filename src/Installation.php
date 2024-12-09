<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Installation
 * 
 * @property int $installationId
 * @property string $installationName
 * @property int|null $companyId
 * @property int|null $installationDisplayTWLogoInFooter
 * @property int|null $installationDisplay3rdPartyTWAdvert
 * @property string|null $installationWelcomeTextTemplate
 * @property int $presetcolorSchemeId
 * @property int $emailFormatStringId
 * @property string|null $emailFormatStringCustomText
 * @property bool $installationPasswordPolicyIsOn
 * @property bool $installationPasswordPolicyAllowRememberMe
 * @property string|null $installationDashboardMessage
 * @property string|null $installationPrefs
 * @property int $installationCredits
 * @property string|null $installationLogo
 * @property string|null $installationFavIcon
 * @property string|null $installationAppleTouchIcon
 * @property bool $installationPACreateUserPolicyIsOn
 * @property bool $installationMarkdownPolicyIsOn
 * @property string|null $installationReceiptEmails
 * @property int $installationShowSiteNameOnLoginScreen
 * @property int|null $installationOwnerAccountUserId
 * @property int|null $installationDefaultEmailPosterUserId
 * @property string $installationDashboardProjectListingType
 * @property int|null $installationShowLogoInEmail
 * @property int|null $installationSSOEnabled
 * @property string|null $installationSSOCert
 * @property string|null $installationSSOConnectorURL
 * @property int|null $installationSSOAllowDualLogin
 * @property int|null $installationSSODefaultUserCompanyId
 * @property string|null $installationLogoUploadedToServer
 * @property string|null $installationFaviconUploadedToServer
 * @property string|null $installationTouchIconUploadedToServer
 * @property int $installationEmailProcessForwardIfNoUser
 * @property int $installationEmailProcessForwards
 * @property int $installationEmailStrictCommentReplies
 * @property string $installationEmailFromFormat
 * @property string $installationEmailSubjectFormat
 * @property int $installationHarvestTimersEnabled
 * @property int $installationTaskByEmailSaveHTMLToFile
 * @property int $installationNotifyIncludeCompleter
 * @property int $installationNotifyIncludeCommentators
 * @property int $installationNotifyIncludeAssigned
 * @property int $installationNotifyIncludeCreator
 * @property int $installationWebHooksActive
 * @property int $installationGroupMessagesByEmailTogether
 * @property string|null $installationWebHooksURI
 * @property int $installationNotebooksCleanHTML
 * @property int $installationNotebooksNewlinesMode
 * @property int $installationAllowShareableLinks
 * @property int $installationAllowFilePreview
 * @property int $installationAllowLikes
 * @property int $installationAllowTags
 * @property int $installationTagsLockedToAdmins
 * @property int $installationAllowTeamworkBranding
 * @property int $installationCustomCSSEnabled
 * @property string|null $installationCustomCSS
 * @property int|null $installationOnlyAcceptRepliesFromUsers
 * @property int $installationClockInOutEnabled
 * @property int $installationXeroEnabled
 * @property string $installationDefaultUserType
 * 
 * @property User|null $user
 * @property Collection|Company[] $companies
 * @property Collection|Event[] $events
 * @property Collection|Eventtype[] $eventtypes
 * @property Collection|Portfoliocard[] $portfoliocards
 * @property Collection|Portfoliocolumn[] $portfoliocolumns
 * @property Collection|Projectboardcard[] $projectboardcards
 * @property Collection|Projectboardcolumn[] $projectboardcolumns
 * @property Collection|Projectcategory[] $projectcategories
 * @property Collection|Projectupdate[] $projectupdates
 *
 * @package App\Models
 */
class Installation extends Model
{
	protected $table = 'installations';
	protected $primaryKey = 'installationId';
	public $timestamps = false;

	protected $casts = [
		'companyId' => 'int',
		'installationDisplayTWLogoInFooter' => 'int',
		'installationDisplay3rdPartyTWAdvert' => 'int',
		'presetcolorSchemeId' => 'int',
		'emailFormatStringId' => 'int',
		'installationPasswordPolicyIsOn' => 'bool',
		'installationPasswordPolicyAllowRememberMe' => 'bool',
		'installationCredits' => 'int',
		'installationPACreateUserPolicyIsOn' => 'bool',
		'installationMarkdownPolicyIsOn' => 'bool',
		'installationShowSiteNameOnLoginScreen' => 'int',
		'installationOwnerAccountUserId' => 'int',
		'installationDefaultEmailPosterUserId' => 'int',
		'installationShowLogoInEmail' => 'int',
		'installationSSOEnabled' => 'int',
		'installationSSOAllowDualLogin' => 'int',
		'installationSSODefaultUserCompanyId' => 'int',
		'installationEmailProcessForwardIfNoUser' => 'int',
		'installationEmailProcessForwards' => 'int',
		'installationEmailStrictCommentReplies' => 'int',
		'installationHarvestTimersEnabled' => 'int',
		'installationTaskByEmailSaveHTMLToFile' => 'int',
		'installationNotifyIncludeCompleter' => 'int',
		'installationNotifyIncludeCommentators' => 'int',
		'installationNotifyIncludeAssigned' => 'int',
		'installationNotifyIncludeCreator' => 'int',
		'installationWebHooksActive' => 'int',
		'installationGroupMessagesByEmailTogether' => 'int',
		'installationNotebooksCleanHTML' => 'int',
		'installationNotebooksNewlinesMode' => 'int',
		'installationAllowShareableLinks' => 'int',
		'installationAllowFilePreview' => 'int',
		'installationAllowLikes' => 'int',
		'installationAllowTags' => 'int',
		'installationTagsLockedToAdmins' => 'int',
		'installationAllowTeamworkBranding' => 'int',
		'installationCustomCSSEnabled' => 'int',
		'installationOnlyAcceptRepliesFromUsers' => 'int',
		'installationClockInOutEnabled' => 'int',
		'installationXeroEnabled' => 'int'
	];

	protected $fillable = [
		'installationName',
		'companyId',
		'installationDisplayTWLogoInFooter',
		'installationDisplay3rdPartyTWAdvert',
		'installationWelcomeTextTemplate',
		'presetcolorSchemeId',
		'emailFormatStringId',
		'emailFormatStringCustomText',
		'installationPasswordPolicyIsOn',
		'installationPasswordPolicyAllowRememberMe',
		'installationDashboardMessage',
		'installationPrefs',
		'installationCredits',
		'installationLogo',
		'installationFavIcon',
		'installationAppleTouchIcon',
		'installationPACreateUserPolicyIsOn',
		'installationMarkdownPolicyIsOn',
		'installationReceiptEmails',
		'installationShowSiteNameOnLoginScreen',
		'installationOwnerAccountUserId',
		'installationDefaultEmailPosterUserId',
		'installationDashboardProjectListingType',
		'installationShowLogoInEmail',
		'installationSSOEnabled',
		'installationSSOCert',
		'installationSSOConnectorURL',
		'installationSSOAllowDualLogin',
		'installationSSODefaultUserCompanyId',
		'installationLogoUploadedToServer',
		'installationFaviconUploadedToServer',
		'installationTouchIconUploadedToServer',
		'installationEmailProcessForwardIfNoUser',
		'installationEmailProcessForwards',
		'installationEmailStrictCommentReplies',
		'installationEmailFromFormat',
		'installationEmailSubjectFormat',
		'installationHarvestTimersEnabled',
		'installationTaskByEmailSaveHTMLToFile',
		'installationNotifyIncludeCompleter',
		'installationNotifyIncludeCommentators',
		'installationNotifyIncludeAssigned',
		'installationNotifyIncludeCreator',
		'installationWebHooksActive',
		'installationGroupMessagesByEmailTogether',
		'installationWebHooksURI',
		'installationNotebooksCleanHTML',
		'installationNotebooksNewlinesMode',
		'installationAllowShareableLinks',
		'installationAllowFilePreview',
		'installationAllowLikes',
		'installationAllowTags',
		'installationTagsLockedToAdmins',
		'installationAllowTeamworkBranding',
		'installationCustomCSSEnabled',
		'installationCustomCSS',
		'installationOnlyAcceptRepliesFromUsers',
		'installationClockInOutEnabled',
		'installationXeroEnabled',
		'installationDefaultUserType'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'installationOwnerAccountUserId');
	}

	public function companies()
	{
		return $this->hasMany(Company::class, 'installationId');
	}

	public function events()
	{
		return $this->hasMany(Event::class, 'installationId');
	}

	public function eventtypes()
	{
		return $this->hasMany(Eventtype::class, 'installationId');
	}

	public function portfoliocards()
	{
		return $this->hasMany(Portfoliocard::class, 'installationId');
	}

	public function portfoliocolumns()
	{
		return $this->hasMany(Portfoliocolumn::class, 'installationId');
	}

	public function projectboardcards()
	{
		return $this->hasMany(Projectboardcard::class, 'installationId');
	}

	public function projectboardcolumns()
	{
		return $this->hasMany(Projectboardcolumn::class, 'installationId');
	}

	public function projectcategories()
	{
		return $this->hasMany(Projectcategory::class, 'installationId');
	}

	public function projectupdates()
	{
		return $this->hasMany(Projectupdate::class, 'installationId');
	}
}
