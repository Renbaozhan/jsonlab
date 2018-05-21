# jsonew
json new static project
接下来我们需要进行composer install来解决dependencies：

$ composer install
1
完成后，我们需要建立.env文件，因为.env默认是github所忽略的文件：

$ cp .env.example .env

因为env.example中默认没有app key，所以我们在.env中生成新的app key：

$ php artisan key:generate

接下来打开我们刚复制的.env文件，将数据库信息填入相应的位置：

APP_ENV=local
APP_KEY=base64:H6RIhyLBY-SOME-KEY-HERE-FkzCvGdS8WOU=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=my_dbname
DB_USERNAME=homestead
DB_PASSWORD=secret

保存后，运行

$ php artisan migrate

进行数据库迁移，如果有seeder的话，运行

$ php artisan db:seed

进行seeding即可。

需要注意的是，原始项目数据库里的数据仍然需要自行拷贝。
nginx添加如下配置后重启：
location / {  
    try_files $uri $uri/ /index.php?$query_string;  
} 

新建表命令 
$ php artisan make:migration create_table_tablename
