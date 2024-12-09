Project Overview
The Gilded Rose project is a refactoring exercise that simulates the management of items in an inventory. The main objective of the GildedRose class is to update the quality and sell-in value of different types of items in an inventory. The items behave differently depending on their name, and the quality and sell-in values are updated daily based on certain business rules.

Key Features
Regular Items: Decrease in quality by 1 each day until they reach zero.
Aged Brie: Increases in quality as it ages.
Sulfuras, Hand of Ragnaros: A legendary item that does not change in quality or sell-in value.
Backstage Passes: Quality increases as the event date approaches, but drops to 0 after the event.
Conjured Items: Quality decreases twice as fast as regular items.
How to Run the Project
Prerequisites
PHP (version 7.4 or higher)
Composer (for installing dependencies)
Steps to Run
Clone the Repository

bash
Copy code
git clone https://github.com/shosh214/gilded-rose-refactor.git
Navigate to the Project Directory

bash
Copy code
cd gilded-rose-refactor
Install Dependencies If you have a composer.json file and dependencies to install, run:

bash
Copy code
composer install
Run the Project Run the main PHP script to simulate the inventory updates for a given number of days:

bash
Copy code
php run.php <number_of_days>
Replace <number_of_days> with the number of days you want to simulate.

Example
To run the simulation for 5 days, use:

bash
Copy code
php run.php 5
Running Tests
Prerequisites for Testing
PHPUnit should be installed as a global tool or as a local project dependency.
Run Unit Tests
To execute the tests and verify the correct functioning of the code, run:

bash
Copy code
php vendor/bin/phpunit tests/
This command runs all test cases in the tests directory