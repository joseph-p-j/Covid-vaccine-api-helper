# covid-api-helper-india

This is a helper repository for programmers who use php-mysql to access and analyse covid vaccine statistics.
The above files help in populating all district and state values to your mysql database.


How it works?

API is called automatically every 1 second and the response is saved to DB. Advantage is, the host server will not close connection or throw 403 error.



Configrations

Change the config file with the correct username, password and db name.

'states.php' requires a parameter in URL to execute. Always initialise from 1. Below is the format.
 
states.php?state=1

'district.php' required two parameters in below format.

district.php?state=1&district=1


Im also attaching an SQL database. Please feel free to download and use.
