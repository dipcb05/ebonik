<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Borrow;
 
class BorrowController extends Controller
{
    public function index()
    {
        $borrows = Borrow::all();
 
        return view('borrows.index', ['borrows' => $borrows]);
    }
 
    public function create()
    {
        return view('borrows.create');
    }
 
    public function add()
    {
        request()->validate([
            'retailer' => 'required',
            'supplier' => 'required',
            'balance' => 'required'
        ]);
 
        Borrow::create([
            'retailer' => request('retailer'),
            'supplier' => request('supplier'),
            'balance' => request('balance')
        ]);
 
        return redirect('/borrows');
    }
 
    public function edit(Borrow $borrow)
    {
        return view('borrows.edit', ['borrow' => $borrow]);
    }
 
    public function update(Borrow $borrow)
    {
        request()->validate([
            'retailer' => 'required',
            'supplier' => 'required',
            'balance' => 'required'
        ]);
 
        $borrow->update([
            'retailer' => request('retailer'),
            'supplier' => request('supplier'),
            'balance' => request('balance')
        ]);
 
        return redirect('/borrows');
    }
 
    public function destroy(Borrow $borrow)
    {
        $borrow->delete();
 
        return redirect('/borrows');
    }
}
 


