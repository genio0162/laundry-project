<!DOCTYPE html>
<html>
<head>
    <title>Laundry Invoice</title>
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;
    }
    .w-85{
        width:85%;
    }
    .w-15{
        width:15%;
    }
    .logo img{
        width:45px;
        height:45px;
        padding-top:30px;
    }
    .logo span{
        margin-left:8px;
        top:19px;
        position: absolute;
        font-weight: bold;
        font-size:25px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
</style>
<body>
<div class="head-title">
    <h1 class="text-center m-0 p-0">Invoice</h1>
</div>
<div class="add-detail mt-10">
    <div class="w-50 float-left mt-10">
        <p class="m-0 pt-5 text-bold w-100">Laundry Id - <span class="gray-color">{{ $laundry->code }}</span></p>
        <?php $time = strtotime($laundry->tanggal_masuk) ?>
        <?php $time2 = strtotime($laundry->tanggal_selesai) ?>
        <p class="m-0 pt-5 text-bold w-100">Order Date - <span class="gray-color">{{ date('d-m-Y', $time) }}</span></p>
        <p class="m-0 pt-5 text-bold w-100">Pickup Date - <span class="gray-color">{{ date('d-m-Y', $time2) }}</span></p>
    </div>
    <div class="w-50 float-left logo mt-10">
        <img src="assets/img/logo/laundry.png">
    </div>
    <div style="clear: both;"></div>
</div>
<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-100">Detail Customer</th>
        </tr>
        <tr>
            <td>
                <div class="box-text">
                    <p>Name : {{ $laundry->user->name }}</p>
                    <p>Alamat : {{ $laundry->user->alamat }}</p>
                    <p>No.HP : {{ $laundry->user->telepon }}</p>
                    <p>Email : {{ $laundry->user->email }}</p>
                </div>
            </td>
        </tr>
    </table>
</div>
<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">Payment Method</th>
            <th class="w-50">Shipping Method</th>
        </tr>
        <tr>
            <td>Cash On Delivery</td>
            <td>Free Shipping - Free Shipping</td>
        </tr>
    </table>
</div>
<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">No.</th>
            <th class="w-50">Satuan/Kiloan</th>
            <th class="w-50">Jenis Pakain/Berat</th>
            <th class="w-50">Harga</th>
            <th class="w-50">Perfume</th>
            <th class="w-50">Harga</th>
        </tr>
        <tr align="center">
            <td>1</td>
            <td>{{ $laundry->item->name }}</td>
            @if ($laundry->satuan_id)
        <td>{{ $laundry->satuan->name }}</td>
        <td>Rp. {{ $laundry->satuan->harga }}</td>
        @elseif ($laundry->kiloan_id)
        <td>{{ $laundry->kiloan->berat." Kg" }}</td>
        <td>Rp. {{ $laundry->kiloan->harga }}</td>
        @endif
            <td>{{ $laundry->perfume->name}}</td>
            <td>{{ $laundry->perfume->harga}}</td>
        </tr>
        <tr>
            <td colspan="7">
                <div class="total-part">
                    <div class="total-left w-85 float-left" align="right">
                        <p>Total Pembayaran</p>
                        <p>Di Bayarkan</p>
                        <p>Kembalian</p>
                    </div>
                    <div class="total-right w-15 float-left text-bold" align="right">
                        <p>Rp. {{ $laundry->total_pembayaran }}</p>
                        <p>Rp. {{ $laundry->bayar }}</p>
                        <p>Rp. {{ $laundry->kembalian }}</p>
                        <h5>{{ $laundry->payment->status }}</h5>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </td>
        </tr>
    </table>
</div>
</html>