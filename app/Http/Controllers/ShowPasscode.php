<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compartment;
use App\Item;
use App\Record;
use Illuminate\Support\Facades\Auth;
class ShowPasscode extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }    
    
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
     
    public function __invoke(Request $request)
    {
        $compartments = Compartment::where('emptied',0)->get();

        $itemCount = $compartments->groupBy(function ($entry, $key) {return Item::find($entry['item_id'])->name;})
                                  ->map(function ($item_id) {return $item_id->count();});

        $inBorrowingState = Record::where('user_id', Auth::id())->orderBy('created_at', 'desc')->first();
        if (!$inBorrowingState) {
            $borrowCode = 'N/A';
            $returnCode = 'N/A';     
        } else {
            if ($inBorrowingState->status === 'borrow') {
                if ($inBorrowingState->compartment->emptied === 1) {
                    $borrowCode = $inBorrowingState->passcode;
                    $returnCode = 'N/A11';
                } else {
                    $borrowCode = 'N/A22';
                    $returnCode = 'N/A22';
                }
            }  elseif ($inBorrowingState->status === 'return') {
                $borrowCode = 'N/A';
                $returnCode = 'N/A';
            }
            else {
                $borrowCode = 'N/A';
                $returnCode = 'N/A';
            }
        }

        return view('passcodes.index')->with(['borrowCode' => $borrowCode, 'returnCode'=>$returnCode]);
    }
}
