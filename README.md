# linepup_com
The linepup.com repo

## Dev Workflow

Hostinger has a feature that allows me to deploy this repo directly to the linepup.com production environment. 

1. Make changes locally using VS Code
2. Commit changes using GitHub desktop
3. Merge changes into `main` branch
4. From the Hostinger dashboard, `advanced > GIT` click on "Deploy" to deploy the repo to the production environment

### To start a PHP server locally

1. `cd` into project folder and run `php -S localhost:8000`
2. Navigate to `localhost:8000/default.php`