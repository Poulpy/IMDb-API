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
- query
- authentification

- script for downloading those fat tsv files (and moving them to database/seeders)

## Run server

```
php -S localhost:8000 -t public
```

## Lost ?

Check `.history.txt` file for last commands run.

