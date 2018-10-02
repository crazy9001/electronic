<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/2/2018
 * Time: 8:09 PM
 */
return [
    'super-admin' => [
        'Bảng điều khiển' => 'dashboard.index',
        'Quản lí sản phẩm' => [
            'Danh sách' =>  'products.index',
            'Thêm mới'  =>  'products.create',
        ],
        'Quản lí đơn hàng'  =>  [
            'Danh sách đơn hàng'    =>  'order.index'
        ],
        'Quản lí users' =>[
            'Danh sách' =>  'users.index',
            'Thêm mới'  =>  'users.create'
        ]
    ],

    /**
     * Icons for all
     *
     */

    'Icons' => [
        'Bảng điều khiển' => '<i class="fa fa-tachometer"></i>',
        'Quản lí users' =>  '<i class="fa fa-users"></i>',
        'Quản lí sản phẩm'  =>  '<i class="fa fa-laptop"></i>',
        'Quản lí đơn hàng'  =>  '<i class="fa fa-edit"></i>',

    ]
];