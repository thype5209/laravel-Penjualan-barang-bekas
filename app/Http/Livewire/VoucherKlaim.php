<?php

namespace App\Http\Livewire;

use App\Models\UserVoucher;
use App\Models\Voucher;
use Auth;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class VoucherKlaim extends Component
{
    public $item;
    public function mount($item){
        $this->item = $item;
    }
    public function render()
    {
        $voucher = [];
        for ($i=0; $i < count($this->item); $i++) {
            $voucher[]= Voucher::where('barang_id', $this->item[$i])->first();
        }
        // dd($voucher);
        return view('livewire.voucher-klaim', [
            'voucher'=> $voucher,
        ]);
    }
    public function KlaimVoucher($id){
        $voucher = Voucher::where('id', $id)->first();
        UserVoucher::create([
            'user_id'=> Auth::user()->id,
            'voucher_id'=>$voucher->barang_id,
            'status'=> '3
            ',
        ]);
        Alert::info('Info',"Selamat Menikmati Diskonnya");
        return redirect()->route('Kirim-Pembayaran');
    }
}
