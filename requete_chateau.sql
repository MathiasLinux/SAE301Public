-- Requête pour la page d'affichage des biens
SELECT id, adresse, prix, chambres, sdb, superficie, pieces FROM biens

-- Requête pour le filtre

-- Régions

SELECT id, adresse, prix, chambres, sdb, superficie, pieces FROM biens WHERE region = ""

-- Prix

SELECT id, adresse, prix, chambres, sdb, superficie, pieces FROM biens WHERE prix =

-- Epoque

SELECT id, adresse, prix, chambres, sdb, superficie, pieces FROM biens WHERE epoque = ""

-- Statut

SELECT id, adresse, prix, chambres, sdb, superficie, pieces FROM biens WHERE statut = ""

-- Etat

SELECT id, adresse, prix, chambres, sdb, superficie, pieces FROM biens WHERE etat = ""

-- Requête pour la page d'un bien

SELECT nom, prix, adresse, chambres, sdb, superficie, pieces, description FROM biens WHERE id =

-- Requête pour la visite virtuelle d'un bien

SELECT urlVisite WHERE id =

-- Requête pour la carte d'un bien

SELECT x, y WHERE id =
