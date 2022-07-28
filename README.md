To use this package, after installing from composer, we need to add our new Service Provider in our config/app.php inside of the providers[] array:
                                                     
     'providers' => [
     
         /*
          * Laravel Framework Service Providers...
          */
         Illuminate\Auth\AuthServiceProvider::class,
         //.. Other providers
         yoosuf\Calculator\CalculatorServiceProvider::class,
     
     ],
