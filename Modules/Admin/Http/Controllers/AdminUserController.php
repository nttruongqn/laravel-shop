<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminUserController extends Controller
{

    public function index()
    {
        $users = User::whereRaw(1);
        $users = $users->orderBy('id', 'DESC')->paginate(10);
        $viewData = [
            'users' => $users
        ];
        return view('admin::user.index', $viewData);
    }

}
