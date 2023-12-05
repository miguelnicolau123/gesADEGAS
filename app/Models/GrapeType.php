<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrapeType extends Model
{
    use HasFactory;

    protected $table = 'grape_types';

    protected $fillable = [
        'name',
        'yeld_percentage',
    ];


    public function getReadableYeldPercentageAttribute(){
        return $this->yeld_percentage*100 .'%';
    }
}
