# laravel new-app
alias laravel="git clone -o laravel -b develop https://github.com/laravel/laravel.git"
alias eva360="git clone -o Eva360 -b master https://github.com/Shinseiki86/Eva360.git"

alias art="php artisan"
alias art:mig="php artisan migrate"
alias art:reset="php artisan migrate:reset && php artisan migrate --seed"
alias art:ref="php artisan migrate:refresh --seed"
alias art:roll="php artisan migrate:rollback"
alias art:dump="php artisan dumpautoload"
alias art:cls="art clear-compiled && art cache:clear && art view:clear && art route:clear && art optimize"
alias t="vendor/bin/phpunit"
alias art:seed:encu="php artisan db:seed --class=EncuestasTableSeeder"
alias art:seed:doc="php artisan db:seed --class=EncuestaDocenteSeeder"
alias art:seed:cal="php artisan db:seed --class=EncuestaCalidadUniajcSeeder"

alias art:sch="php artisan schedule:run"
alias encuestas:close="php artisan encuestas:close"


# Generators Package
alias g:c="php artisan generate:controller"
alias g:m="php artisan generate:model"
alias g:v="php artisan generate:view"
alias g:mig="php artisan generate:migration"
alias g:t="php artisan generate:test"
alias g:r="php artisan generate:resource"
alias g:s="php artisan generate:scaffold"
alias g:f="php artisan generate:form"

# Git
alias ga="git add"
alias gaa="git add ."
alias gc="git commit -m"
alias gps="git push"
alias gp="git pull"
alias gs="git status"
alias gl="git log"
alias gdiscard="git clean -df && git checkout -- ."

#Console
alias cls="clear"

#Composer
alias comp:up="C:/ProgramData/ComposerSetup/bin/composer.phar self-update"
