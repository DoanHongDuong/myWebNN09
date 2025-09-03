<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  // Nếu cần phải sử dụng Request, nếu không có thì có thể bỏ dòng này.

class TestController extends Controller  // Cái "Controller" phải viết hoa
{
    public function index()
    {
        $duong = "Duong hehe";  // Chuỗi cần hiển thị
        $test = true;            // Biến test

        echo $duong;             // In ra $duong

        $tuoi = 20;              // Khai báo và gán giá trị cho biến $tuoi

        if ($tuoi > 18) {
            echo "Du dieu kien bau cu";  // Điều kiện nếu tuổi > 18
        } else {
            echo "Chua du dieu kien bau cu";  // Điều kiện nếu tuổi <= 18
        }
    }
}

