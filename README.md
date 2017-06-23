# Bank API

Symfony project that handles request / responses for a made up BANK.
Basic requirements for project:

  - Symfony 3.3.2
  - PHP 7.1.6
  - MariaDB 10.1.24
  - Composer
  - Doctrine
  - Linux (Arch)

### Additional Bundles that uses in project

  - FOSRestBundle 2.2
  - FOSUserBundle 2.0
  - JMSSerializerBundle 2.0
  - LexikJWTAuthenticationBundle 2.4

## API

The API was tested using `POSTMAN` extension on Chrome. 
Users authenticated with `JSON Web Token authentication` (JWT) by `LexikJWTAuthenticationBundle`, which includes private and public keys in directory above:
```sh
bank/var/jwt/
```
URL for API user authentication: 
http://127.0.0.1:8000/api/login_check

Logging system was created using the standard tools of the framework:
```sh
bank/var/logs/
```

Caching system was created using `SensioBundle` Configuration annotation:
```sh
@Cache(public=true, maxage="3600", smaxage="3600")
```

Login system for GUI was created using `FOSUserBundle` and includes two active links
```sh
http://127.0.0.1:8000/login
http://127.0.0.1:8000/logout
```
## GUI

The mapping of all transactions was implemented using the `DateTables` js plug-in based on `jQuery` library:
https://datatables.net/
Implementation includes only one method of fetching data in TransactionRepository, other operations with the fetched data are performed on the client side.

## Cron

The script for calculating the amount of transactions from the previous day is in the root directory with the project:
```sh
bank/cron.sh
```
The script directly accesses the database and writes the result to the next file:
```sh
bank/cron_stats/amount_statistic.txt
```
Next command use to set up the cron job to run every 2 days at 23:47 with attached script `cron.sh`:
```sh
47 23 */2 * * /bin/bash /path/to/file/bank/cron.sh >/dev/null 2>&1
```