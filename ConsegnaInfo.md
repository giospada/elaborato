# Elaborato 

## 1





## 2

```sql
mysql> show tables;
+---------------------+
| Tables_in_elaborato |
+---------------------+
| channels            |
| contacts            |
| failed_jobs         |
| game_images         |
| games               |
| migrations          |
| password_resets     |
| users               |
+---------------------+
8 rows in set (0,00 sec)

mysql> describe games;
+-------------+---------------------+------+-----+---------+----------------+
| Field       | Type                | Null | Key | Default | Extra          |
+-------------+---------------------+------+-----+---------+----------------+
| id          | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
| user_id     | int(11)             | NO   |     | NULL    |                |
| titolo      | varchar(255)        | NO   |     | NULL    |                |
| descrizione | text                | NO   |     | NULL    |                |
| logo        | text                | NO   |     | NULL    |                |
| prezzo      | double(8,2)         | NO   |     | NULL    |                |
| created_at  | timestamp           | YES  |     | NULL    |                |
| updated_at  | timestamp           | YES  |     | NULL    |                |
+-------------+---------------------+------+-----+---------+----------------+
8 rows in set (0,00 sec)

mysql> describe game_images;
+------------+---------------------+------+-----+---------+----------------+
| Field      | Type                | Null | Key | Default | Extra          |
+------------+---------------------+------+-----+---------+----------------+
| id         | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
| game_id    | int(11)             | NO   |     | NULL    |                |
| path       | varchar(255)        | NO   |     | NULL    |                |
| created_at | timestamp           | YES  |     | NULL    |                |
| updated_at | timestamp           | YES  |     | NULL    |                |
+------------+---------------------+------+-----+---------+----------------+
5 rows in set (0,00 sec)

mysql> describe users;
+-------------------+---------------------+------+-----+-----------------+----------------+
| Field             | Type                | Null | Key | Default         | Extra          |
+-------------------+---------------------+------+-----+-----------------+----------------+
| id                | bigint(20) unsigned | NO   | PRI | NULL            | auto_increment |
| name              | varchar(255)        | NO   |     | NULL            |                |
| email             | varchar(255)        | NO   | UNI | NULL            |                |
| email_verified_at | timestamp           | YES  |     | NULL            |                |
| logo              | varchar(255)        | NO   |     | Placeholder.svg |                |
| password          | varchar(255)        | NO   |     | NULL            |                |
| remember_token    | varchar(100)        | YES  |     | NULL            |                |
| created_at        | timestamp           | YES  |     | NULL            |                |
| updated_at        | timestamp           | YES  |     | NULL            |                |
+-------------------+---------------------+------+-----+-----------------+----------------+
9 rows in set (0,00 sec)

```


## 3

> in questa farò una spece di lista di file da seguire come ordine, non tratterò tutti i file ma ne tratterò una parte così che possa essere facile capire il resto

Partiamo `routes/web.php` è un file che ad ogni endpoint assegna una pagina view(una pagina html con con php e blade)
come nei primi due casi o un metodo di una classe come nell'ultimo caso.

[più informazioni sulla documentazione sulle route](https://laravel.com/docs/8.x/routing)

passiamo poi a file incluso in web.php `routes/auth.php` qui troveremo le route di autenticazione che usano dei middlewere,
servono per reindirizzare l'utente in certe situazioni per esempio il middleware guest reindirizza l'utente se è loggato in un altra pagina
(usata in login non serve, uno loggato non può riaccedere a login)

[più informazioni sulla documentazione di middleware](https://laravel.com/docs/8.x/middleware)

passiamo a `routes/user.php` qui sono definite le route che hanno a che fare con gli utenti,
viene usato il middleware auth che reindirizza se non si è loggati,
e usa la funzione name per dare un nome alle route.

[più informazioni sulla documentazione sulle named route](https://laravel.com/docs/8.x/routing#named-routes)

infine abbiamo il file `routes/games.php` qui definiamo le route che hanno a che fare con i giochi


[più informazioni sulla documentazione di route](https://laravel.com/docs/8.x/routing)



come precedente detto questa route gestisce tutte le richieste post che arrivano a '/' rispondendogli con una view
```php
Route::get('/', function () {
    return view('welcome');
})->name("welcome");

```
questa view è definita in `resources/views/welcome.blade.php`, questa è scritta in blade, lo noteremo subito per lo strano tag.
infatti il primo tag che non capiremo è il x-app-layout,
questo è un tag particloare dice che la pagina dovrà essere inserita dentro un layout
questo layout include semplicemente dei componeti che sappiamo riutilizzeremo 
in più pagine quindi li definiamo solo una volta in questo layout,
questo si trova su `resources/views/layout/app.blade.php`,
nella prima riga troveremo 

```html 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
```

le `{{}}` in mezzo al codice html indicano che manderemo in esecuzione una striga php 
e inseriremo nell'html il suo  risultato 
(in questo chiama app che ritorna un service controller è un po' complicato rispetto a quello
che vogliamo spiegare quindi salitamo)
più avanti possiamo trovarne una altro esempio
```html
    <meta name="csrf-token" content="{{ csrf_token() }}">
```
che aggiunge un token [csrf](https://en.wikipedia.org/wiki/Cross-site_request_forgery) 

più avanti troveremo delle altre direttive in blade `@include('layouts.navigation')` che include il file con la nav bar
e `{{$slot}}` che aggiunge tutto quello contenuto nel tag `<x-app-layout>` 
(consiglo di andare a vedere dentro `resources/views/layout/navigation.blade.php` per vedere altri esempi di blade)

[più informazioni sulla documentazione di blade](https://laravel.com/docs/8.x/blade)

TODO: aggiungere la spegazione del form in welcome


dopo aver visto una route che ritorna una view,
ne guardiamo una che chiama un metodo di una classe;
in fatti questa route che gestisce le richieste fatte con il metodo post nell'endpoint `/contacts`,
chiamando la classe ContactControllr e in particolare il metodo store 
```php
Route::post('/contacts',[ContactController::class, 'store']);
```
la classe si trova in `App/Http/Controllers/ContactController.php`,
nella prima riga creiamo un oggetto Contact che si trova in `App/Model/Contact.php`,
questo oggetto è collegato al database tramite delle name convention, 
per cui non c'è bisogno di specificare il nome della tabella che è definita in
`database/migrations/2021_05_08_111036_create_contacts_table.php`
questo file serve per specificare i campi della tabella del database,
e così facendo il framework è in grado di generare le tabelle e conoscere i campi,
attraverso questa classe contact possiamo interagire con il database
[di più](https://laravel.com/docs/8.x/eloquent)

continuando chiamando il metodo validate sulla request possiamo validare i dati,
e in caso di errore tornare indietro alla pagina precedente.
una volta validati i dati gli inseriamo nell'oggetto Contact precedentemente creato,
lo salviamo nel database, e restituiamo la view `resources/views/contacts.blade.php`
