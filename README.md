## Laravel JWT Scaffolding

Laravel (7.0+) with JWT out of the box. Just install and start to code your API.

After cloning this repo, just enter:

```
php artisan key:generate
```
```
php artisan jwt:secret
```
```
php artisan migrate
```

Now you ready to go! 

# Default Routes

|Method    |URI           |Action                   |Middleware    |
|----------|--------------|-------------------------|--------------|
|POST      | api/login    | AuthController@login    | api          |
|POST      | api/logout   | AuthController@logout   | api,auth:api |
|GET       | api/me       | AuthController@me       | api,auth:api |
|POST      | api/refresh  | AuthController@refresh  | api,auth:api |
|POST      | api/register | AuthController@register | api          |



