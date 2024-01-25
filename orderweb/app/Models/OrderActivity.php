<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderActivity extends Model
{
    use HasFactory;
    protected $table = 'order_activity';
    protected $fillable = ['order_id', 'activity_id'];

    public function order()
    {return $this->belongsTo(Order::class);}

    public function activity()
    {return $this->belongsTo(Activity::class);}

}
