The POS Vending Machine>

How to run the project
-clone or unzip the project
-Do composer update if cloning but not neccessary if unzipping files
-Run the migrations -php artisan migrate
-Run seeder ,there is a seeder for products: use php artisan db:seed --class=ProductSeeder

There are five views: 
Mimicking what a maintainer wil see
-View all Products
-Create Product
-Add Category
-Add/update each  Coin type
-Sales-View all sold products and change given 


Mimicking User Interaction Interface is:
-POS-
Start by creating category before posting product
Used maria db for DB, Laravel for backend and blade



What to do:
-Maintainer should be able to:
-Post,Delete and Update product -CRUD
-Add Categories and coins first and you can update each type of coin
-Then create products
-Buy the product on the POS part as a user
-View summation of each coin type as well as each product category type

-You can now View items in stock after adding (Their summation too)

-The system automaticaly updates the products and coins when purchase is done by buyer
-Buyer or user will be able to purchase product by keying in slot,amount and choosing coin type
-User will see JSON response either to get a change or invalid slot or invalid coin type
