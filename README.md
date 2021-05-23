# Imdb API

Little API for IMDb ([files are here](https://datasets.imdbws.com/)).

## Install

```
git clone https://github.com/Poulpy/IMDb-API.git

wget https://datasets.imdbws.com/name.basics.tsv.gz \
     https://datasets.imdbws.com/title.akas.tsv.gz \
     https://datasets.imdbws.com/title.basics.tsv.gz \
     https://datasets.imdbws.com/title.crew.tsv.gz \
     https://datasets.imdbws.com/title.episode.tsv.gz \
     https://datasets.imdbws.com/title.principals.tsv.gz \
     https://datasets.imdbws.com/title.ratings.tsv.gz
```

## TODO

- create database model according to Imdb model
- seed database with Imdb tsv files
- specific query; ?isOriginalTitle=0 => gives all titles with isOriginalTitle==0
- authentification

- script for downloading those fat tsv files (and moving them to database/seeders)
- run seeds all in one

## Run server

```
php -S localhost:8000 -t public
firefox Hhttp://localhost:8000/name_basics/index
firefox Hhttp://localhost:8000/title_akas/index

```


## Run seeds

```
php artisan db:seed --class=NameBasicsSeeder
php artisan db:seed --class=TitleAkasSeeder
```

## Run migration

```
php artisan migrate

php artisan migrate:refresh
```

## Lost ?

Check `.history.txt` file for last commands run.


