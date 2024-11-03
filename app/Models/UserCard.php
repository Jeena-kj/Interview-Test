<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCard extends Model {
    // The deck of cards
    private array $deck;

    // Constructor initializes the deck
    public function __construct() {
        $this->deck = $this->getCardDeck();
    }

    private function getCardDeck() {
        $suits = ['S', 'H', 'D', 'C'];
        $values = ['A', '2', '3', '4', '5', '6', '7', '8', '9', 'X', 'J', 'Q', 'K'];
        $deck = [];

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $deck[] = $suit . '-' . $value;
            }
        }

        shuffle($deck);
        return $deck;
    }

    public function distributeCards($n) {
        if ($n <= 0) {
            return null; // Handle invalid input
        }

        $result = array_fill(0, $n, []);
        $cardIndex = 0; // pointing to the first card.

        while ($cardIndex < 52) {
            // no of players and checks there are still cards left to distribute
            for ($i = 0; $i < $n && $cardIndex < 52; $i++) {
                //Card Distribution and incrementing index
                $result[$i][] = $this->deck[$cardIndex++];
            }
        }
        return $result;
    }
}