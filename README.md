install: 

composer require  jandanielewicz/calculator:dev-master



API routes:

GET /api/add/{a}/{b}

GET /api/substract/{a}/{b}

GET /api/multiply/{a}/{b}

GET /api/divide/{a}/{b}


where {a}, {b} are int/float numbers




Tests: 
run  vendor/bin/phpunit vendor/jandanielewicz/calculator/tests/ after running composer

