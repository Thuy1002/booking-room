<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\booking;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Psy\Readline\Hoa\Console;
use Symfony\Component\Console\Event\ConsoleEvent;

class PaymentController extends Controller
{

    public function pay() // thanh toán
    {
        //lấy ra phòng đã đặt dựa vào id người dùng
        $user = Auth::user();
        $bookRoom = booking::with('room')->where('user_id', $user->id)->where('payment_status', 'calculating')->get();
        //  dd($bookRoom);
        $total = 0;
        // Đảm bảo rằng room được load thành công qua relationship 'room'
        foreach ($bookRoom as $ac) {
            $total += $ac->total_price;
        }

        return view('client.payment.pay', compact('user', 'bookRoom', 'total'));
    }
  

    public function payment()
    {
        $user = Auth::user();
        $cartRoom  = booking::with('room')->where('user_id', $user->id)->where('payment_status', 'calculating')->get();
        $total = 0;
        // $typr = type::where()
        foreach ($cartRoom as $ac) {
            $total += $ac->total_price;
        }
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html"; //url trang thanh toán
        $vnp_Returnurl = route('payment.vnpay_return');
        //    $vnp_Returnurl = "https://localhost/vnpay_php/vnpay_return.php"; //url thành công thì chả về 
        $vnp_TmnCode = "VS1QHD0G"; //Mã website tại VNPAY 
        $vnp_HashSecret = "TISNNO4N7YTVW059ILWZ25AP3I41BF1H"; //Chuỗi bí mật

        $vnp_TxnRef =  Str::random(7); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh Toán";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $total * 100;
        $vnp_Locale = 'vn'; // ngôn ngữ
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //start
        //Add Params of 2.0.1 Version
        // $vnp_ExpireDate = $_POST['txtexpire'];
        // //Billing
        // $vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
        // $vnp_Bill_Email = $_POST['txt_billing_email'];
        // $fullName = trim($_POST['txt_billing_fullname']);
        // if (isset($fullName) && trim($fullName) != '') {
        //     $name = explode(' ', $fullName);
        //     $vnp_Bill_FirstName = array_shift($name);
        //     $vnp_Bill_LastName = array_pop($name);
        // }
        // $vnp_Bill_Address = $_POST['txt_inv_addr1'];
        // $vnp_Bill_City = $_POST['txt_bill_city'];
        // $vnp_Bill_Country = $_POST['txt_bill_country'];
        // $vnp_Bill_State = $_POST['txt_bill_state'];
        // // Invoice
        // $vnp_Inv_Phone = $_POST['txt_inv_mobile'];
        // $vnp_Inv_Email = $_POST['txt_inv_email'];
        // $vnp_Inv_Customer = $_POST['txt_inv_customer'];
        // $vnp_Inv_Address = $_POST['txt_inv_addr1'];
        // $vnp_Inv_Company = $_POST['txt_inv_company'];
        // $vnp_Inv_Taxcode = $_POST['txt_inv_taxcode'];
        // $vnp_Inv_Type = $_POST['cbo_inv_type'];
        //    end
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
            // "vnp_ExpireDate" => $vnp_ExpireDate,
            // "vnp_Bill_Mobile" => $vnp_Bill_Mobile,
            // "vnp_Bill_Email" => $vnp_Bill_Email,
            // "vnp_Bill_FirstName" => $vnp_Bill_FirstName,
            // "vnp_Bill_LastName" => $vnp_Bill_LastName,
            // "vnp_Bill_Address" => $vnp_Bill_Address,
            // "vnp_Bill_City" => $vnp_Bill_City,
            // "vnp_Bill_Country" => $vnp_Bill_Country,
            // "vnp_Inv_Phone" => $vnp_Inv_Phone,
            // "vnp_Inv_Email" => $vnp_Inv_Email,
            // "vnp_Inv_Customer" => $vnp_Inv_Customer,
            // "vnp_Inv_Address" => $vnp_Inv_Address,
            // "vnp_Inv_Company" => $vnp_Inv_Company,
            // "vnp_Inv_Taxcode" => $vnp_Inv_Taxcode,
            // "vnp_Inv_Type" => $vnp_Inv_Type
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            //  dd("có ra đây không",1111);
            die();
        } else {
            echo json_encode($returnData);
        }
        // vui lòng tham khảo thêm tại code demo
    }

    // payRq


    //end 

    public function vnpayReturn(Request $request) // sử lý thanh toán thành công
    {
        $vnp_HashSecret = "TISNNO4N7YTVW059ILWZ25AP3I41BF1H"; // Chuỗi bí mật đã dùng để tạo chữ ký
        $inputData = array();
        foreach ($request->input() as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        $vnp_SecureHash = $inputData['vnp_SecureHash'];
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $hashData = "";
        foreach ($inputData as $key => $value) {
            $hashData .= urlencode($key) . '=' . urlencode($value) . '&';
        }
        $hashData = rtrim($hashData, '&');

        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        if ($secureHash == $vnp_SecureHash) {
            if ($inputData['vnp_ResponseCode'] == '00') {
                // Thanh toán thành công
                $user = Auth::user();
                $bookings = booking::where('user_id', $user->id)->where('payment_status', 'calculating')->get();
                foreach ($bookings as $booking) {
                    $booking->payment_status = 'paid';
                    $booking->save();

                    // Lưu thông tin thanh toán vào bảng payments
                    Payment::create([
                        'booking_id' => $booking->id,
                        'vnp_Amount' => $inputData['vnp_Amount'],
                        'vnp_BankCode' => $inputData['vnp_BankCode'],
                        'vnp_CardType' => $inputData['vnp_CardType'],
                        'vnp_OderInfo' => $inputData['vnp_OrderInfo'],
                        'vnp_PayDate' => $inputData['vnp_PayDate'],
                        'vnp_TmnCode' => $inputData['vnp_TmnCode'],
                        'vnp_ResponseCode' => $inputData['vnp_ResponseCode'],
                        'vnp_TransactionNo' => $inputData['vnp_TransactionNo'],
                        'vnp_TransactionStatus' => $inputData['vnp_TransactionStatus'],
                        'vnp_TxnRef' => $inputData['vnp_TxnRef'],
                        'vnp_SecureHash' => $secureHash,
                        'status' => 'done'
                    ]);
                }
                return redirect()->route('booking.list')->with('success', 'Thanh toán thành công !!!');
            }
        }
        return redirect()->route('booking.list')->with('error', 'Payment failed or invalid signature!');
    }
}
