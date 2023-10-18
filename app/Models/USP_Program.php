<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class USP_Program extends Model
{
    use HasFactory;

    protected $table = "USP_Program";
    public $timestamps = true;
    protected $fillable = ['first_name','last_name','email_address','phone','province','city','address','tax_dispute','notes','program1','year1','amount1','program2','year2','amount2','program3','year3','amount3','program4','year4','amount4','program5','year5','amount5','program6','year6','amount6','program7','year7','amount7','program8','year8','amount8','Total_amount'];
    protected $guarded = [];
}
