<?php

include_once("Shared/SharedFunctions.php");


class Db
{

    public static $list = [
        '1' => [
            'id' => 1, 'name' => 'Iphone XS', 'price' => 8.999,00 , 'currency' => 'TRY', 'status' => 1,
            'cpu' => 'X', 'ram' => 128, 'screenSize' => '1920x1080', 'category' => 'cellphone', 'image' => 'view/xs.jpg'
        ],
        '2' => [
            'id' => 2, 'name' => 'Samsung Galaxy S21', 'price' => 9.999,00 , 'currency' => 'TRY', 'status' => 1,
            'cpu' => 'Y', 'ram' => 256, 'screenSize' => '1920x1080', 'category' => 'cellphone', 'image' => 'view/s21.jpg'

        ],
        '3' => [
            'id' => 3, 'name' => 'Wiskas Cat Feed', 'price' => 50.5, 'currency' => 'TRY', 'status' => 1,
            'foodType' => 'dry', 'weight' => 2500, 'packageType' => 'A',
            'category' => 'animalFood', 'subCategory' => 'cat', 'image' => 'view/kedimama.jpg'

        ],
        '4' => [
            'id' => 4, 'name' => 'Pro Plan Dog Dry Feed', 'price' => 357.75, 'currency' => 'TRY', 'status' => 1,
            'foodType' => 'dry', 'weight' => 5000, 'packageType' => 'B',
            'category' => 'animalFood', 'subCategory' => 'dog', 'raceType' => 'small', 'image' => 'view/dryfeed.jpg'

        ],
        '5' => [
            'id' => 5, 'name' => 'Reflex Dog Dry Feed Premium', 'price' => 425.75, 'currency' => 'TRY', 'status' => 1,
            'foodType' => 'dry', 'weight' => 5000, 'packageType' => 'B',
            'category' => 'animalFood', 'subCategory' => 'dog', 'raceType' => 'big', 'image' => 'view/premium.jpg'

        ],

    ];

    public function get($id)
    {
        // foreach ile dön
        // id kolonu gelen ile aynı ise o satırı dön

    }

    public function all()
    {
        // tüm arrayi dön

    }

    public function login($user)
    {
        $f = fopen("DB/users.json", "r");
        $f_contents = json_decode(fgets($f));
        if (!multidim_array_exist($f_contents, "username", $user->username) &&
            !multidim_array_exist($f_contents, "password", $user->password)) {
            $this->save_redirect($f_contents, "index.php", "users");
        }
    }

    public function signup($user)
    {
        $f = fopen("DB/users.json", "r");
        $f_contents = json_decode(fgets($f));
        if (!multidim_array_exist($f_contents, "username", $user->username)) {
            fclose($f);
            return array("status" => "error", "error_description" => "User already exist.");
        } else {
            fclose($f);
            $this->save_redirect($user, "index.php", "users");
        }
        return array("status" => "error", "error_description" => "System Error.");
    }

    public function save_redirect($data, $location, $table)
    {
        $f = fopen("DB/" . $table . ".json", "r");
        $f_contents = fgets($f);
        fclose($f);
        $f_contents = json_decode($f_contents);
        $f_contents[] = $data;
        $f = fopen("DB/" . $table . ".json", "w");
        $f_contents = json_encode($f_contents);
        fputs($f, $f_contents, strlen($f_contents));
        header("location : " . $location);
    }
}