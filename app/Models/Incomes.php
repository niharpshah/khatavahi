<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incomes extends Model
{
    use HasFactory;
    protected $table = "incomes"; // DECLARE THE TABLE FIRST WITH PROTECTED DATATYPE
    protected $primaryKey = "income_id"; // DECLARE THE PRIMARY KEY SECOND WITH PROTECTED DATATYPE
}
