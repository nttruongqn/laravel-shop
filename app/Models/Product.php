<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = [''];

    const STATIC_PUBLIC = 1;
    const STATIC_PRIVATE = 0;

    protected $status = [
        1 => [
            'name' => "Public",
            "class" => 'badge bg-success'
        ],
        0 => [
            'name' => "Private",
            "class" => 'badge bg-danger'
        ]
    ];

     protected $hot = [
        1 => [
            'name' => "Có",
            "class" => 'badge bg-success'
        ],
        0 => [
            'name' => "Không",
            "class" => 'badge bg-danger'
        ]
    ];


    public function getStatus()
    {
        return array_get($this->status, $this->pro_active, '[N\A]');
    }

     public function getHot()
    {
        return array_get($this->hot, $this->pro_hot, '[N\A]');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'pro_category_id');
    }
}
