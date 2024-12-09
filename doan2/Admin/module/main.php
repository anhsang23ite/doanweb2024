<?php
$tam = $_GET['action'] ?? '';
$query = $_GET['query'] ?? '';

switch ($tam) {
    case 'quanlysp':
        switch ($query) {
            case 'them':
                @include("danhmuc-sanpham/main-product.php");
                @include("sanpham/main-product-sp.php");
                break;
            case 'sua':
                @include("danhmuc-sanpham/suadanhmuc.php");
                break;
            case 'timkiem':
                @include("sanpham/timkiemsp.php");
                break;
        }
        break;

    case 'quanlyspsp':
        if ($query == 'sua') {
            @include("sanpham/suasanpham.php");
        }
        break;

    case 'quanlyuser':
        if ($query == 'them') {
            @include("user/main-user.php");
        }
        break;

    case 'suamkuser':
        if ($query == 'mk') {
            @include("user/suamkuser.php");
        }
        break;

    case 'taikhoan':
        switch ($query) {
            case 'them':
                @include("accountadmin/main-acc.php");
                break;
            case 'info':
                @include("accountadmin/info-ad.php");
                break;
        }
        break;

    default:
        @include("dashboard.php");
}
?>
