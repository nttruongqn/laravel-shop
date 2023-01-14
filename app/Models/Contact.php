<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    CONST HANDLE_ON=1;
    CONST HANDLE_OFF=0;

    protected $table = 'contacts';
    protected $guarded = ['*'];

    protected $handle = [
        1 => [
            "name" => "Đã xử lý",
            "class" => "badge bg-success"
        ],
        0 => [
            'name' => "Chưa xử lý",
            "class" => 'badge bg-danger'
        ]
        ];

        public function getHandle(){
            return array_get($this->handle, $this->ct_status, '[]');
        }
}
