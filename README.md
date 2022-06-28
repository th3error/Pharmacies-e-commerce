<div align="center">
<img src="https://rishavanand.github.io/static/images/greetings.gif" align="center" style="width: 100%" />
</div>


### <div align="center">This repository is for a Pharmacies e-commerece platform with scoped functionality</div>


I used PHP 8.1.7, Laravel 9, and postgres 14 for the database.


#### There are two main APIs to interact with:


- #### api/search-products


POST - returns matching products based on entered name


- #### api/products-details


GET - returns all products associated with the available pharmacies and price for each pharmacy


#### CRUD APIs(without Interfaces) available for Products
/api/update-product -- /api/create-product -- /api/delete-product

#### Postman Collection available for testing: postman_collection.json

#### CLI command available to retrieve cheapest 5 pharmacies for a given product
php artisan search:cheapest {product_id}


#### Steps to start the project locally:
- Clone project
- adjust your .env file and add database connection details
- run `composer install` (I'm using v2.3.7) to download all dependencies
- run `php artisan migrate` to create the tables and foreign keys
- run `php artisan db:seed` This should run all seeders in order (can take a while)
- run `php artisan serve` to start testing the APIs





<br/>
<table><tr><td valign="top" width="33%">



</td><td valign="top" width="33%">



### Technologies used
<div align="center">
<img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/php-original.svg" alt="PHP" height="50" />
<img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/laravel-plain-wordmark.svg" alt="Laravel" height="50" />
</div>

</td><td valign="top" width="33%">



</td></tr></table>

----
<div align="center">Generated using <a href="https://profilinator.rishav.dev/" target="_blank">Github Profilinator</a></div>