# php-oop-2
esercizio di oggi: PHP OOP 2
nome repo: php-oop-2
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
BONUS (Opzionale):
Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta.

1. il comando di installazione composer create-project --prefer-dist laravel/laravel:^9.0 .  in una cartella vuota.

2. il comando git init  per inizializzare la repo (avvisiamo solo che questa cartella contiene un progetto Git, senza specificare altro)

3. andiamo sul nostro profilo Github e creiamo la repo pubblica. Una volta creata vedremo una sezione intitolata …or push an existing repository from the command line

4. il primo comando suggerito è SIMILE a git remote add origin https://github.com/nomeutente/nomerepo.git . Lanciamolo: collegherà la nostra cartella locale alla repo online.

5. da qui facciamo normalmente l'add dei files dal simbolo +  come abbiamo sempre fatto dalla schermata di Git dove si fa il push

6. scriviamo il messaggio di commit First commit e diamo invio

7. eseguiamo gli altri due comandi suggeriti, cioè git branch -M main  e git push -u origin main