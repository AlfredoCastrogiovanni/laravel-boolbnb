# BoolBnb
Un sito di **prenotazione di appartamenti** che permette ad un utente guest, interessato all'affitto, di contattare gli utenti registrati che dispongono di appartamenti visibili.

Per quanto riguarda l'aspetto grafico ci siamo ispirati profondamente nel frontend a **Airbnb** e per il backoffice abbiamo creato dei mockup personali.

l'utente guest dispone di diverse **feature** tra le quali:
- Ricerca di appartamenti tramite indirizzo con un autocompletamento e possibilita' di modificare il range di ricerca
- Ricerva avanzata con la possibilita' di filtrare tramite numero di bagni, stanze e diversi servizi
- Visualizzare i dettagli di ogni appartamento in una pagina dedicata con mappa della posizione dell'appartamento
- Possibilita' di contattare l'host attraverso l'invio di un messaggio tramite form proprietario

Anche per quanto riguarda l'utente registrato abbiamo diverse **feature**:
- Possibilita' di accedere ad un area privata per la gestione dei propri appartamenti
- Possibilita' di creare, modificare, eliminare diversi appartamenti
- Una pagina dedicata per ogni appartamento per la gestione dei messaggi mandati da utenti interessati
-Possibilita' di sponsorizzare uno o piu' appartamenti contemporaneamente permettendo di metterli in risalto nelle ricerche

Angolo tecnico:
Il progetto e' stato implementato sul frontend con il framework **Vue.js** e **Bootstrap** e nel backend con **Laravel**, abbiamo utilizzato anche la libreria **TomTom** per la gestione delle posizioni , della ricerca e della mappa per gli appartamenti e **Braintree** per la gestione dei pagamenti
