<?php
namespace App\classes;
class User
{

        protected $user = [];

        public function getAllUser () {


            $this->user = [
                0 => [
                    'name'  =>   'Hasan',
                    'mobile' =>'123456',
                    'location' => 'Panthapath',

                    ],
                1 => [
                    'name'  =>   'Alal',
                    'mobile' =>'123456',
                    'location' => 'Panthapath',

                ],
                ];
        }
}