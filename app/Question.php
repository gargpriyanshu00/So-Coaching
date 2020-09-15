<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Question extends Model
{
    protected $fillable = ['body'];
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
