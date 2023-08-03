## Setup di un progetto

- Installazione di MySQL e relativa interfaccia grafica di gestione
- Creazione di un database vuoto
- Connessione del database in Laravel tramite file .env (lasciare di default i valori DB_CONNECTION, DB_HOST e DB_PORT)
- Creazione di modelli, migrazioni e controller dei relativi dati (es. Prodotti, Ordini e Clienti) con comandi make:migration, make:model e make:controller, oppure utilizzando l'opzione -mcr insieme al comando make:model per creare tutti i relativi file attraverso un unico comando, avendo cura di seguire il metodo convenzionale per nominare ogni tipologia di file in lingua inglese
- Configurazione delle tabelle nelle varie migrazioni inserendo le varie colonne
- Avvio delle migrazioni tramite comando migrate per popolare il database di tabelle

## Creazione delle viste

- Aggiunta dei componenti Blade come layout, stili, codici js e menu di navigazione principale
- Organizzazione e creazione delle viste riguardanti i relativi dati secondo metodo convenzionale, creando una cartella con lo stesso nome del dato (es. products, orders, clients) e inserendo all'interno le relative viste (es. index, create, edit)
- Assegnazione delle relative viste all'interno di ogni controller, passando dove necessario i record ottenuti dal database tramite il metodo scelto dai modelli (es. all o find)
- Aggiunta del ciclo foreach nelle relative viste per mandare in output i dati ottenuti dal modello

## Creazione delle rotte

- Aggiunta delle rotte per le relative viste e metodi CRUD (create, read, update, delete)
- Utilizzare rotte di tipo get per inviare viste in output sul browser attraverso il relativo metodo del controller
- Utilizzare rotte di tipo post per creare (create) record all'interno di una tabella attraverso il relativo metodo del controller (store)
- Utilizzare rotte di tipo put per aggiornare (update) record all'interno di una tabella attraverso il relativo metodo del controller (update)
- Utilizzare rotte di tipo delete per eliminare (delete) record all'interno di una tabella attraverso il relativo metodo del controller (destroy)
- Definizione di altre eventuali rotte come la home page

## Setup dei metodi CRUD nei controller

- Aggiunta delle relative funzione all'interno dei controller (index, store, update,  destroy)
- Inserimento dei relativi metodi tramite i modelli per effettuare le varie operazioni all'interno del database