<?php

namespace Idophp\TeamworkEloquentModels;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CommentsProjectfile
 * 
 * @property int $projectfileId
 * @property int $commentId
 * @property int|null $installationId
 * 
 * @property Projectfile $projectfile
 * @property Comment $comment
 *
 * @package App\Models
 */
class CommentsProjectfile extends Model
{
	protected $table = 'comments_projectfiles';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'projectfileId' => 'int',
		'commentId' => 'int',
		'installationId' => 'int'
	];

	protected $fillable = [
		'installationId'
	];

	public function projectfile()
	{
		return $this->belongsTo(Projectfile::class, 'projectfileId');
	}

	public function comment()
	{
		return $this->belongsTo(Comment::class, 'commentId');
	}
}
