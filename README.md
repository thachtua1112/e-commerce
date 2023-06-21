
**Setup local server:**

```JS
Run: cd e-commerce
Run: cp .env.example .env
Run: docker-compose build
Run: docker-compose up -d
Run: cd src -> cp .env.example .env
```
**Migrate database:**
```JS
Run: docker exec -it e-commerce_web bash
Run: composer install
Run: php artisan migrate
Run: php artisan db:seed --class=CategorySeeder
Run: php artisan db:seed --class=ProductSeeder
```

**Test 1**
```PHP
Run: php test1.py
```

**Test 2**
```PHP
Run: php test2.py
```

**Test 3**
```PHP
Run: php test3.py
```

**Setup website:**
- Run: npm install --global yarn
- Run: ```cd src```
- Run: yarn install
- Run: yarn watch (Build SCSS run on develop)
- Run: yarn build (Build SCSS deploy to production)

**Access website at local - Test4:**

```PHP
Run: yarn watch
Frontend: https://localhost:3000/products
```
