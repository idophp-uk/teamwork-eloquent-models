<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectbillinginvoicerate
 * 
 * @property int $projectbillinginvoiceId
 * @property int|null $installationId
 * @property int $userId
 * @property float|null $userRate
 * 
 * @property Projectbillinginvoice $projectbillinginvoice
 * @property User $user
 *
 * @package App\Models
 */
class Projectbillinginvoicerate extends Model
{
	protected $table = 'projectbillinginvoicerates';
	public $timestamps = false;

	protected $casts = [
		'installationId' => 'int',
		'userId' => 'int',
		'userRate' => 'float'
	];

	protected $fillable = [
		'installationId',
		'userRate'
	];

	public function projectbillinginvoice()
	{
		return $this->belongsTo(Projectbillinginvoice::class, 'projectbillinginvoiceId');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'userId');
	}
}
