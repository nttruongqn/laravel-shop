<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::limit(10)->get();

        $viewData = [
            "contacts" => $contacts
        ];
        return view('admin::contact.index', $viewData);
    }

    public function action(Request $request, $action, $id)
    {
        if ($action) {
            $contact = Contact::find($id);
            switch ($action) {
                case 'delete':
                    $contact->delete();
                    break;
                case 'handle';
                    $contact->ct_status = !$contact->ct_status;
                    $contact->save();
                    break;
            }
        }
        return redirect()->back();
    }
}
