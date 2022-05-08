# Check Challenge
Carry out development using as much functionality as possible of the Laravel framework in its latest version.

## Requirements
Docker and Docker Compose

## Setup
- Clone this repository

`git clone git@github.com:wr2net/check-challenge.git`

- Access Directory Project

`cd check-challenge/`

- Execute Setup

`sh scripts/steps.sh`

## Others
- For Stop Project

`sh scripts/stop.sh`

- For Start Project without build Docker again

`sh scripts/start.sh`

## Tests
- For Tests

`sh scripts/tests.sh`

- For Cake Tests

`sh scripts/testCake.sh`

- For Email Tests

`sh scripts/testEmail.sh`

### Tests on Postman
[Postman Files](postman/README.md)

### Tests on Insomnia
[Insomnia Files](insomnia/README.md)

## Routes

### Cakes
| TYPE   | ENDPOINT                    | CONTROLLER                                                           |
|--------|-----------------------------|----------------------------------------------------------------------|
| GET    | api/cakes                   | api.cakes.index › App\Cakes\Controllers\Api\CakeController@index     |
| POST   | api/cakes                   | api.cakes.store › App\Cakes\Controllers\Api\CakeController@store     |
| GET    | api/cakes/{cake_id}         | api.cakes.show › App\Cakes\Controllers\Api\CakeController@show       |
| PUT    | api/cakes/{cake_id}         | api.cakes.update › App\Cakes\Controllers\Api\CakeController@update   |
| PATCH  | api/cakes/{cake_id}/disable | api.cakes.disable › App\Cakes\Controllers\Api\CakeController@disable |
| PATCH  | api/cakes/{cake_id}/enable  | api.cakes.enable › App\Cakes\Controllers\Api\CakeController@enable   |
| DELETE | api/cakes/{cake_id}         | api.cakes.delete › App\Cakes\Controllers\Api\CakeController@destroy  |

### Emails
| TYPE   | ENDPOINT                      | CONTROLLER                                       |
|--------|-------------------------------|--------------------------------------------------|
| GET    | api/emails                    | api.emails.index › Api\EmailController@index     |
| POST   | api/emails                    | api.emails.store › Api\EmailController@store     |
| GET    | api/emails/{email}            | api.emails.show › Api\EmailController@show       |
| PUT    | api/emails/{email_id}         | api.emails.update › Api\EmailController@update   |
| PATCH  | api/emails/{email_id}/disable | api.emails.disable › Api\EmailController@disable |
| PATCH  | api/emails/{email_id}/enable  | api.emails.enable › Api\EmailController@enable   |
| DELETE | api/emails/{email_id}         | api.emails.delete › Api\EmailController@destroy  |

## Delete Instance and Clear

`sh scripts/clear.sh`