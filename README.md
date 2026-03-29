# PHP MVC CRUD Aplikacija

**Učenik:** Affan Tahmaz  
**Razred:** 4. razred  
**Škola:** Treća gimnazija Sarajevo  
**Predmet:** Softver inženjering  
**Školska godina:** 2025/2026  

---

## O projektu

Web aplikacija razvijena u PHP-u koristeći MVC arhitekturu sa CRUD funkcionalnostima za upravljanje korisnicima i ulogama.

## Tehnologije

- PHP
- MySQL
- Bootstrap 5
- JavaScript

## Struktura projekta

```
php-mvc-app/
├── config/
│   └── database.php
├── models/
│   └── User.php
├── controllers/
│   └── UserController.php
├── views/
│   └── users/
│       ├── index.php
│       └── edit.php
├── public/
│   └── index.php
├── baza.sql
└── README.md
```

## Baza podataka

Importuj `baza.sql` u phpMyAdmin.

Tabele:
- `roles` - uloge korisnika (Admin, User)
- `users` - korisnici povezani sa ulogama

## Funkcionalnosti

- Dodavanje korisnika
- Pregled svih korisnika
- Izmjena korisnika
- Brisanje korisnika
- Pretraga korisnika (JavaScript)
- Potvrda brisanja (JavaScript)

## Pokretanje

```
http://localhost/php-mvc-app/public/
```
