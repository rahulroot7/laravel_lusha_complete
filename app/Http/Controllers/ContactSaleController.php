<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\ContactSale;

class ContactSaleController extends Controller
{
    public function contact_sales_store(Request $request)
    {
        $contact = new ContactSale;
        $contact->user_id = $request->input('user_id');
        $contact->user_name = $request->input('user_name');
        $contact->phone_number = $request->input('phone_number');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect()->back()->with('status','Message send successfully');
    }

    public function all_contact_sale(){
    	$contact_sale = ContactSale::get();
    	return view('admin.contactSale.all_contact_sale',compact('contact_sale'));
    }

    public function contact_activate(Request $request,$id)
    {
    	$contact_sale = ContactSale::find($id);
            if($contact_sale)
            {
                $contact_sale->status = $request->input('status');
                $contact_sale->update();
                return redirect()->back()->with('success','Message send successfully');
            }
            else
            {
                return redirect()->back()->with('unsuccess','Message send successfully');
            }
    }
}
