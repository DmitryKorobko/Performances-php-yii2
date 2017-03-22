Yii 2 Advanced Project Template
===============================

Dump the database is stored in the root of the project file "dump_db.sql"
To start the project:
1. It is necessary to initialize the project (execute "php init" on the command line);
2. Run the "composer update" command;
3. Specify the data for accessing the database in the settings of the file "common / config / main-local.php";
4. Apply the migration (execute "php yii migrate" on the command line);
5. After these actions, the table "user" appears in the database, in which there will already be an administrator with the login "admin" and the password "adminadmin";

Access control is implemented through RBAC.

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
