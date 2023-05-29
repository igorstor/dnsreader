1. add following code to your composer.json file
   <br> 
`"repositories": [
   {
   "type": "vcs",
   "url": "https://github.com/igorstor/dnsreader.git"
   }
   ]`
2. run command `composer require igorstor/dnsreader`
3. if you want run tests spin up package as development, navigate to package folder , install dev dependencies using: `composer install` 
4. run tests using 
<br>
`vendor/bin/phpunit tests`
