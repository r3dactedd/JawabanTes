<?php

namespace Database\Seeders;

use App\Models\Data;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Data::create([
            'id'=> '1372',
            'productID'=> '10001',
            'productName'=> 'Test 1',
            'amount'=> '1000',
            'customerName' => 'abc',
            'status'=> '0',
            'transactionDate'=> '2022-07-10 11:14:52',
            'createBy' => 'abc',
            'createOn' => '2022-07-10 11:14:52'
        ]);

        Data::create([
            'id'=> '1373',
         'productID'=> '10002',
         'productName'=> 'Test 2',
         'amount'=> '2000',
         'customerName' => 'abc',
         'status'=> '0',
         'transactionDate'=> '2022-07-11 13:14:52',
         'createBy' => 'abc',
         'createOn' => '2022-07-10 13:14:52'
        ]);

        Data::create([
            'id'=> '1374',
         'productID'=> '10001',
         'productName'=> 'Test 1',
         'amount'=> '1000',
         'customerName' => 'abc',
         'status'=> '0',
         'transactionDate'=> '2022-08-10 12:14:52',
         'createBy' => 'abc',
         'createOn' => '2022-07-10 12:14:52'
        ]);
        Data::create([
            'id'=> '1375',
            'productID'=> '10002',
            'productName'=> 'Test 2',
            'amount'=> '1000',
            'customerName' => 'abc',
            'status'=> '1',
            'transactionDate'=> '2022-08-10 13:10:52',
            'createBy' => 'abc',
            'createOn' => '2022-07-10 13:10:52'
        ]);
        Data::create([
            'id'=> '1376',
            'productID'=> '10001',
            'productName'=> 'Test 1',
            'amount'=> '1000',
            'customerName' => 'abc',
            'status'=> '0',
            'transactionDate'=> '2022-08-10 13:11:52',
            'createBy' => 'abc',
            'createOn' => '2022-07-10 13:11:52'
        ]);
        Data::create([
            'id'=> '1377',
         'productID'=> '10002',
         'productName'=> 'Test 2',
         'amount'=> '2000',
         'customerName' => 'abc',
         'status'=> '0',
         'transactionDate'=> '2022-08-12 13:14:52',
         'createBy' => 'abc',
         'createOn' => '2022-07-10 13:14:52'
        ]);
        Data::create([
            'id'=> '1378',
         'productID'=> '10001',
         'productName'=> 'Test 1',
         'amount'=> '1000',
         'customerName' => 'abc',
         'status'=> '0',
         'transactionDate'=> '2022-08-12 14:11:52',
         'createBy' => 'abc',
         'createOn' => '2022-07-10 14:11:52'
        ]);
        Data::create([
            'id'=> '1379',
            'productID'=> '10002',
            'productName'=> 'Test 2',
            'amount'=> '1000',
            'customerName' => 'abc',
            'status'=> '1',
            'transactionDate'=> '2022-09-13 11:14:52',
            'createBy' => 'abc',
            'createOn' => '2022-07-10 11:14:52'
        ]);
        Data::create([
            'id'=> '1380',
            'productID'=> '10001',
            'productName'=> 'Test 1',
            'amount'=> '1000',
            'customerName' => 'abc',
            'status'=> '0',
            'transactionDate'=> '2022-09-13 13:14:52',
            'createBy' => 'abc',
            'createOn' => '2022-07-10 13:14:52'
        ]);
        Data::create([
            'id'=> '1381',
         'productID'=> '10002',
         'productName'=> 'Test 2',
         'amount'=> '2000',
         'customerName' => 'abc',
         'status'=> '0',
         'transactionDate'=> '2022-09-14 09:11:52',
         'createBy' => 'abc',
         'createOn' => '2022-07-10 09:11:52'
        ]);
        Data::create([
            'id'=> '1382',
         'productID'=> '10001',
         'productName'=> 'Test 1',
         'amount'=> '1000',
         'customerName' => 'abc',
         'status'=> '0',
         'transactionDate'=> '2022-09-14 10:14:52',
         'createBy' => 'abc',
         'createOn' => '2022-07-10 10:14:52'
        ]);
        Data::create([
          'id'=> '1383',
         'productID'=> '10002',
         'productName'=> 'Test 2',
         'amount'=> '1000',
         'customerName' => 'abc',
         'status'=> 1,
         'transactionDate'=> '2022-08-15 13:14:52',
         'createBy' => 'abc',
         'createOn' => '2022-07-10 13:14:52'
        ]);


    }
}
