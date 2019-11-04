<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CompartmentCodeOrdered;
use Illuminate\Support\Facades\Auth;
use App\Compartment;
use App\Item;
use App\Record;
use DB;



class CompartmentsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     
     
    public function index()
    {
        $compartments = Compartment::where('emptied',0)->get();

        $itemCount = $compartments->groupBy(function ($entry, $key) {return Item::find($entry['item_id'])->name;})
                                  ->map(function ($item_id) {return $item_id->count();});
                       
        $itemCount = $itemCount->sortByDesc(function($value) {
            return $value;
        });
        
        $inBorrowingState = Record::where('user_id', Auth::id())->orderBy('created_at', 'desc')->first();
        if (!$inBorrowingState) {
            $inBorrowingState = False;
        } else {
            if ($inBorrowingState->status === 'borrow') {
                $inBorrowingState = True;
            } else {
                $inBorrowingState = False;
            }
        }
        
        return view('compartments.index')->with(['compartments' => $itemCount, 'canBorrow' => $inBorrowingState]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        # act = borrow generate return code; act = return generate borrow code
        if ($request->input('act') == 'borrow') {
            $compartment = Compartment::find($id);
            $compartment->emptied = 1;
            $compartment->passcode = $request->input('passcode');
            $compartment->save();            
            
            $email = Record::where('compartment_id', $id)->orderBy('updated_at', 'desc')->first()->user->email;
            
            Mail::to($email)->send(new CompartmentCodeOrdered($compartment));

            
        } elseif ($request->input('act') == 'return') {
            $compartment = Compartment::find($id);
            $compartment->emptied = 0;
            $compartment->passcode = $request->input('passcode');
            $compartment->save();

            
            $userId = Record::where('compartment_id', $id)->orderBy('updated_at', 'desc')->first()->user_id;
            $record = new Record;
            $record->compartment_id = $id;
            $record->user_id = $userId;
            $record->status = 'return';
            $record->passcode = $compartment->passcode;
            $record->save();    
            
                      
        
        } elseif ($request->input('act') == 'poweringUpLocker') {
            $compartment = Compartment::find($id);
            $compartment->emptied = 0;
            $compartment->passcode = $request->input('passcode');
            $compartment->save();            
            
        } else {
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Sent the code to the request user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function borrow(Request $request)
     {
        //dd($request->get('item'));
        $requestdItemId = Item::where('name', $request->get('item'))->first()->id;
        $compartment = Compartment::where('item_id', $requestdItemId)
                                  ->where('emptied', 0)
                                  ->first();
        
        $compartment->emptied = 1;
        $compartment->save();
        
        
        $record = new Record;
        $record->compartment_id = $compartment->id;
        $record->user_id = Auth::id();
        $record->status = 'borrow';
        $record->passcode = $compartment->passcode;
        $record->save();



        Mail::to(Auth::user()->email)->send(new CompartmentCodeOrdered($compartment));

        return \Redirect::route('compartments.index');
         
     }    
     
     
     public function return(Request $request)
     {
        //$compartment->passcode = '123456';
        //$compartment->emptied = 0;
        //echo $request;
        //echo $request->get('compartmentNumber');
        //echo $request->get('passcode');
        echo $request->input('passcode');
        //echo $request;
        
        
        
        //dd($request);
        //$requestdItemId = Item::where('name', $request->get('item'))->first()->id;
        //$compartment = Compartment::where('item_id', $requestdItemId)
                                  //->where('emptied', 0)
                                  //->first();
        
        //$compartment->emptied = 1;
        //$compartment->save();
        
        
        //$record = new Record;
        //$record->compartment_id = $compartment->id;
        //$record->user_id = \Auth::user()->id;
        //$record->status = 'borrow';
        //$record->save();

        //return \Redirect::route('compartments.borrow');
         
     }         

    
}
