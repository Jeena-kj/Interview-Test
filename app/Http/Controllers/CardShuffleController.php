<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserCard; // Include the model here

class CardShuffleController extends Controller {
    /*
     * Author:Jeena
     * Distribute cards to a specified number of players.
     * @param int $players The number of players to distribute cards to.
     * @return JsonResponse
    */
    public function distribute($players) {
        // Validate the input
        if (!is_numeric($players) || $players <= 0) {
            return response()->json([
                "error" => "Input value does not exist or is invalid"
            ], 400); // Return a 400 Bad Request
        }

        // Convert players to an integer
        $n = intval($players);

        // Create a new instance of UserCard
        $deck = new UserCard();
        $resData = $deck->distributeCards($n);

        // If distribution fails
        if ($resData === null) {
            return response()->json([
                "error" => "Failed to distribute cards"
            ], 500); // Return a 500 Internal Server Error
        }

        // Format the response data
        $formattedData = [];
        foreach ($resData as $index => $cards) {
            $formattedData[] = "Player " . ($index + 1) . ": " . (!empty($cards) ? implode(',', $cards) : '-');
        }

        // Join the formatted data with new line
        $responseData = implode("\n", $formattedData);

        // Return the distributed cards as a JSON response
        return response()->json(["resData" => $responseData]);
    }
}