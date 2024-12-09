This package provides a set of Eloquent Models for use with a teamwork.com database backup.

`reliese/laravel` was used to generate the models from an imported database to a Laravel 11.x application.

This library might work with other versions of Laravel.

Usage:
```shell
composer require Idophp/teamwork-eloquent-models
```

```php
<?php

use Idophp\TeamworkEloquentModels\Comment;

$comment = Comment::find(1);
```

---

The following is how the models were created within a Laravel 11.x application:

* Installed the reliese/laravel package as a development requirement:
```shell
composer require reliese/laravel --dev
artisan vendor:publish --tag=reliese-models
artisan config:clear
```


* Created a new database to hold the teamwork.com database backup:
```shell
mysql -e "CREATE DATABASE teamwork; GRANT ALL ON teamwork.* TO 'db'@'%';"
mysql teamwork < ../1234567_TeamworkPM_Backup_YYYYMMDD.sql
```

* The `reliese/laravel` utility will fail when it tries to work with foreign key constraints to tables columns that are not part of the database backup. These FK constraints are removed here:
```shell
mysql -e "ALTER TABLE teamwork.comments DROP FOREIGN KEY comments_lockdown"
mysql -e "ALTER TABLE teamwork.events DROP FOREIGN KEY events_ibfk_7"
mysql -e "ALTER TABLE teamwork.event_users2 DROP FOREIGN KEY event_users2_ibfk_2"
mysql -e "ALTER TABLE teamwork.events DROP FOREIGN KEY FK_events_defaulteventtypeid"
mysql -e "ALTER TABLE teamwork.linkitems DROP FOREIGN KEY linkitems_lockdown"
mysql -e "ALTER TABLE teamwork.milestones DROP FOREIGN KEY milestones_lockdown"
mysql -e "ALTER TABLE teamwork.notebooks DROP FOREIGN KEY notebooks_lockdown"
mysql -e "ALTER TABLE teamwork.portfoliocards DROP FOREIGN KEY portfoliocards_ibfk_4"
mysql -e "ALTER TABLE teamwork.portfoliocolumns DROP FOREIGN KEY columnboard"
mysql -e "ALTER TABLE teamwork.projectfiles DROP FOREIGN KEY _projectfiles_lockdown"
mysql -e "ALTER TABLE teamwork.projectmessages DROP FOREIGN KEY _projectmessages_lockdown"
mysql -e "ALTER TABLE teamwork.tasks DROP FOREIGN KEY _tasks_ibfk_2"
mysql -e "ALTER TABLE teamwork.tasks DROP FOREIGN KEY _tasks_lockdown"
mysql -e "ALTER TABLE teamwork.users DROP FOREIGN KEY FK_users_workinghoursId"
```

* Ran the `reliese/laravel` utility to create the Model files:
```shell
artisan code:models --schema=teamwork
```

* Edited `.env` to switch the database back to the normally configured database
