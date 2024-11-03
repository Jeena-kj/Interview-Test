Card Distribution Application
Total Time Taken for this task: 5 hrs (Created laravel setup,documentation and test cases)

Description:
This application randomly distributes a standard deck of playing cards among a specified number of players. It is built using PHP for the backend.

Features:
- Distributes a total of 52 playing cards (A to K) across four suits: Spades (S), Hearts (H), Diamonds (D), and Clubs (C).
- Handles user input to determine the number of players.
- Validates input to ensure it falls within acceptable ranges (1-52).
- Provides clear error messages for invalid inputs.
- Displays the distributed cards in a user-friendly format.

Tech Stack:
- PHP v8.2.25
- Laravel v11.30.0

Requirements:
- PHP 7.x or higher
- Laravel 8.x or higher
- Laravel built-in server
- Browser (for testing)

Installation:
1. Clone the repository:
   git clone https://github.com/Jeena-kj/card-shuffle-api.git
   cd card-shuffle-api

2. Install dependencies:
   Ensure you have Composer installed, then run:
   composer install

3. Start the development server:
   You can use Laravel built-in server with:
   php artisan serve

Usage:
1. copy .env.localhost file into .env
2. Open your postman
   http://127.0.0.1:8000/shuffle/{number_of_players}

3. Enter the desired number of players (between 1 and 52) and click "Distribute Cards".

4. The distributed cards will be displayed in a comma-separated format, with each player's cards on a new line.

Error Handling:
- If the input value is invalid (less than 1 or greater than 52), an error message will be displayed.
- If the card distribution fails for any reason, an appropriate error message will be returned.



Author:
Jeena K J
