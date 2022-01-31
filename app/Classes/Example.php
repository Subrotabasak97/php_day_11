<?php


namespace App\Classes;


class Example
{
    public $student = [];
    public function index()
    {
        $this->student = [
            0 => [
            'name' => 'jahed',
            'email'=> 'jahed@gmail.com',
            'mobile'=> [
                ' mobile1' => '0186727111',
                ' mobile2' => '01867271374'
                ],
    ],
        1 => [
        'name' => 'fahim',
        'email'=> 'fahim@gmail.com',
        'mobile'=>  [
            ' mobile1' => '04545111',
            ' mobile2' => '016451374'
        ],
        ],
            2 => 'BITM',
        3 => [
        'name' => 'woner',
        'email'=> 'woner@gmail.com',
        'mobile'=>  [
            ' mobile1' => '065456727111',
            ' mobile2' => '046541374'
        ],
    ],
        ];
//        echo '<pre>';
//        print_r($this->student);
//            var_dump($this->student);



//        foreach ($this->student as $key => $item) {
//            if (is_array($item))
//            {
//                foreach ($item as $value)
//                {
//                    if (is_array($value))
//                    {
//                        foreach ($value as $v_value)
//                        {
//                            echo $v_value.' ';
//                        }
//                    }
//                    else
//                    {
//                    echo $value . ' ';
//                    }
//                }
//        }
//        else
//        {
//            echo $item;
//        }
//            echo '<br/>';
////            if ($key == 0)
////            {
////                echo $item['name'].' '.$item['email'].' '.$item['mobile'].'<br/>';
////                break;
////            }
//
//        }
////        echo $this->student[1]['email'];
//
////        $this->student = [10,20, 'Bitm',10,20,true,false];
//////        echo $this->student[6];
////        foreach ($this->student as $key => $student)
////        {
////            echo 'index no - '. $key . 'value - ' . $student.'<br/>';
////        }
    }

}