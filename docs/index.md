# Frontend Programozás pótvizsga (15 pont)

A vizsga megoldása során a kapott csomag beállításait nem kell módosítania!

## Útvonalak

Készítse el a következő útvonalakat:

| Útvonal neve   | Komponens          | Url             | Paraméterek             |
| -------------- | ------------------ | --------------- | ----------------------- |
| `home`         | `index.vue`        | `/`             |                         |
| `eurocup`      | `eurocup/[id].vue` | `/eurocups/:id` | `id`: Az EB azonosítója |
| `create-teams` | `teams/create.vue` | `/teams/create` |                         |

## Tárolók

### EurocupStore

Bővítse ki a `stores/EurocupStore.js` fájlban található tárolót egy `eurocups` állapottal. Készítse el az alábbi függvényeket:

- `getEurocups()`: Kérje le az össze kapitányt a Backendben elkészült végpontról és tárolja el az előbbi állapotban.
- `getEurocup(id)`: Azonosító alapján kérjen le egy kapitányt és adja vissza.
- `updateEurocup(id,data)`: Azonosító alapján frissíti a bajnokságot a megadott adatokkal

### TeamStore

Készítsen tárolót `TeamStore` néven, amely tartalmaz egy `teams` állapotot. Készítse el az alábbi függvényeket:

- `getTeams()`: Kérje le az összes bajnokságot a Backendben elkészült végpontról és tárolja el az előbbi
  állapotban
- `createTeam(data)`: Töltse fel a Backend megadott végpontjára a paraméterként kapott adatot.

## Komponensek

### BaseTable

Készítsen csíkozott táblázatot, amely a következő oszlopokat tartalmazza rendre:

Év, Helyszín, Szervező

A EurocupStore tároló alapján generálja a sorokat a táblázat. A helyszín legyen egy sikeres típusú típusú badge elem. Az év pedig legyen egy olyan hivatkozás, amely a bajnokság azonosítója alapján átvisz annak az oldalára!

### BaseCard

Készítsen kártyát, amely tartalmaz egy sikeres típusú fejlécet is. A kártya vegyen át a szülőtől egy `title` és egy `content` tulajdonságot, amelyek szöveges típusúak. Ezeket helyezze el
a kártyán a megfelelő helyre.

### Gyökérkomponens

Állítsa be, hogy az oldal betöltésére, hogy az előbb két tároló kérje le az adatokat.

## Oldalak

### Főoldal

Csak és kizárólag a főcímet, valamint BaseTable-t tartalmazza a BaseLayouton belül!

### Részletek oldal

Vegyen fel belső állapotot, amelyben eltárolja a bajnokságot, amelyet az oldal betöltésére és az útvonal figyelése során is a EurocupStore segítségével kér le! Ezen kívül egy töltést jelző állapotot, amelyet az adatok betöltődését követően
állít!

Készítsen számított állapotot, amely visszaadja, hogy hány csapat játszott az adott kupán a rendszer szerint (pl: *"5 csapat vett részt"*). Amennyiben a csapatokat jelző tömb üres, úgy a következő szöveg jelenjen meg *"Nem található felvett csapat"*

Tartalmazzon egy sötét típusú spinnert, amely középre van igazítva, felső margója 10 egység legyen.

Valamint tartalmazzon egy rácsrendszert is, amelyben egy sorban 5 oszlop található meg. Az első oszlop minden nézeten töltse ki a teljes
sort. A második és harmadik oszlop kis nézeten teljes sort töltse ki, közepes nézettől felfelé azonban a két oszlop egymás mellett foglaljon helyet.

Az első oszlop egy főcímet tartalmazzon az *"Euro"* szöveggel és a bajokság évével (Pl.: *"Euro2024"*). A második és harmadik oszlop pedig egy-egy BaseCard-ot
tartalmazzon. Az előbbi címe legyen "Szervező", az utóbbié "Csapatok száma". Értéknek a szerzevő országot valamint a számított állapotot adja át!

Amennyiben van csapat az adott bajnokságon, jelenítsd meg egy következő sorban táblázat segítségével. Fejlécei legyenek *"Ország"* és *"Helyezés"*. A táblázatot külön komponensbe szervezve valósítsd meg `ScoreTable` néven a tanultak alapján.

### Csapat létrehozása oldal

Készíts űrlapot a következők alapján! Az űrlapon tiltsa le a beépített műveleteket és adja meg a típusát.
A feladat során az űrlap formázását a keretrendszer elvégzi!

Állítsa be a mezők típusát és validációját úgy, hogy az megfeleljen a Backendes validációknak (Request-ek)!

Adja meg a legördülő lista számára, hogy az opciókat a EurocupStore-ban található eurocupOptions-ből töltse be.

Készítsen függvényt, amely lekezeli az űrlap elküldését, végrehajtja a `TeamsStore` segítségével az adatok
továbbítását, ezt követően átirányít a Bajnokságok oldalra.
