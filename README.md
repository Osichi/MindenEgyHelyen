# FONTOS, AMIKOR LEHÚZOD:

[php](https://www.php.net/downloads.php)

[Composer](https://getcomposer.org/download/)

[Node.js](https://nodejs.org/en/)

Ha ezek lent vannak akkor nyisd meg a projektet és egy terminal -ba (CTRL-Ö) írd be a következőket:

```
npm install
```

```
composer install
```

Mivel sok php extension kell hozzá, ezért inkább berakom az **_[enyém](https://anotepad.com/notes/jt4peybd)_**, ezt a php-(verziószám)/php.ini -fileba kell berakni

# Changelog

**2023.10.11**: regisztrálás logika létrehozva

**2023.10.13**: regisztrálás logika kibővítve

**2023.10.15**: index.php átnevezve mainPage.php -ra, mainPage -n Belépés gomb hozzáadva, login.php létrehozva, login logika hozzáadva

**2023.10.17**: login, register logika átdolgozva, működőképesek már

**2023.10.18**: backend rész elválasztva a többitől

**2023.10.20**: backend mappa létrehozva

**2023.10.22**: frontend mappa létrehozva átláthatóság miatt, dokumentáció elkezdve, backendhez http válasz kódok hozzáadva, általános debugolás

**2023.10.25**: dokumentáció korai frontend része elkezdve, pár frontendes dolog hozzáadva a kódokhoz, profil oldal létrehozva, .gitignore létrehozva

**2023.11.05**: projektelőrehaladás hf feltöltve

**2023.11.07**: laravel keretrendszeres projekt elkezdve

**2023.11.08**: npm install

**2023.11.19**: regisztráció létrehozva

**2023.11.26**: bejelentkezés létrehozva

**2024.01.16**: kijelentkezés létrehozva, design elkezdve

**2024.01.17**: admin panel elkezdve, admin panelnek és profil oldal file létrehozva

**2024.01.24**: főoldal designolva

**2024.02.01**: hozzáférések + alert hozzáadva

**2024.02.02**: admin panel kész, profil oldal elkezve

**2024.02.06**: profil oldalon látszanak a bejelentkezett felhasználó adatai, jelszó megjelenítése gomb hozzáadva a formokhoz

**2024.02.14**: profil oldal frissítve, adatok módosíthatók, profilkép hozzáadva, éttermek fül hozzáadva, kezdetleges posztolás létrehozva

**2024.02.16**: admin felület frissítve, helyszínek törlése hozzáadva admin felületen és a helyszínek közt, helszínek posztolása megjelenik bootstrap cardként

**2024.02.20**: git issuek kezelve, id alapján lehet törölni a helyszíneket

**2024.02.26**: cardok fixelve

## Ha kell helyszín teszteléshez (igen, ugyan azok):

```
INSERT INTO posts VALUES(8, 2, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(9, 3, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(10, 2, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(11, 3, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(12, 2, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(13, 3, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(14, 2, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(15, 3, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(16, 2, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(17, 3, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(18, 2, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(19, 3, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(20, 2, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(21, 3, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(22, 2, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(23, 3, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(24, 2, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(25, 3, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(26, 2, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(27, 3, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
```
