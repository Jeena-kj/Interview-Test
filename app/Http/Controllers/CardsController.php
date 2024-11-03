<?php
/*
namespace App\Controllers;
use Illuminate\Http\Request;

use App\Models\UserCard;

class CardsController {
    /*
    Author:Jeena
    Funtion Desc: shuffle and distribute cards
    Param: null
    */
  /*  public function distribute() {echo "lll";exit;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $input = json_decode(file_get_contents("php://input"), true);
            if (!isset($input['players']) || !is_numeric($input['players']) || $input['players'] <= 0) {
                echo json_encode(["error" => "Input value does not exist or value is invalid"]);
                exit;
            }

            $n = intval($input['players']);
            $deck = new UserCard();
            $resData = $deck->distributeCards($n);

            if ($resData === null) {
                echo json_encode(["error" => "Failed to distribute cards"]);
                exit;
            }

            foreach ($resData as &$cards) {
                $cards = implode(',', $cards);
            }

            echo json_encode(["resData" => implode("\n", $resData)]);
        }
    }
}*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardShuffleController extends Controller
{
    public function distribute()
    {
        // Your card shuffle logic here
        return response()->json(['message' => 'Cards shuffled successfully!']);
    }
}