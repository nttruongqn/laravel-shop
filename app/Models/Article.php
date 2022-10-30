<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';

    protected $status = [
        1 => [
            'name' => 'Public',
            'class' => 'badge bg-success'
        ],
        0 => [
            'name' => 'Private',
            'class' => 'badge bg-danger'
        ]
        ];

    public function getStatus(){
        return array_get($this->status,$this->a_active, '[]');
    }
}
