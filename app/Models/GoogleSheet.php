<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleSheet extends Model
{
    use HasFactory;
    protected $table = null;
    public function setTable($tableName)
    {
        $this->table = $tableName;
    }

    public function scopeTable($query, $tableName)
    {
        $query->getQuery()->from = $tableName;
        return $query;
    }
}
