1. DESCRIBE vin;
2. SELECT * FROM vin;
3. SELECT vin.cru, vin.annee FROM vin;
4. SELECT vin.cru, vin.annee FROM vin WHERE vin.annee=1976;
5. SELECT vin.cru FROM vin ORDER BY vin.cru;
6. 101
7. SELECT DISTINCT vin.cru FROM vin ORDER BY vin.cru;
8. 62
9. SELECT vin.cru FROM vin WHERE vin.cru LIKE 'C%' AND vin.annee=1980 ORDER BY vin.degre;
10. SELECT vin.cru FROM vin WHERE vin.degre BETWEEN 11 AND 12;
11. SELECT COUNT(vin.cru) FROM vin; 101
12. SELECT COUNT(DISTINCT vin.cru) FROM vin; 62
13. SELECT AVG(vin.degre) FROM vin; (11.35)
14. SELECT MAX(vin.degre) FROM vin; (12.6)
15. SELECT vin.cru FROM vin WHERE vin.degre > (SELECT AVG(vin.degre) FROM vin) ORDER BY vin.degre, vin.annee;
16. SELECT * FROM producteur;
17. SELECT * FROM producteur WHERE prenom="";
18. SELECT producteur.region FROM producteur;
19. SELECT DISTINCT producteur.region FROM producteur ORDER BY producteur.region;
20. SELECT producteur.nom, producteur.prenom FROM producteur ORDER BY producteur.nom, producteur.prenom;
21. SELECT COUNT(*) FROM producteur;
22. SELECT producteur.region, COUNT(*) FROM producteur GROUP BY producteur.region;
23. SELECT COUNT(*) FROM recolte, vin; (67165)
24. SELECT SUM(quantite) FROM recolte, vin WHERE vin.id = recolte.vin_id AND vin.degre > 12;
25. SELECT producteur.nom, producteur.region, recolte.quantite FROM producteur, vin, recolte WHERE vin.id = recolte.vin_id AND producteur.id = recolte.producteur_id AND vin.cru='Etoile';
26. SELECT vin.cru FROM producteur, vin, recolte WHERE vin.id = recolte.vin_id AND producteur.id = recolte.producteur_id AND vin.annee=1979 ORDER BY producteur.id;
27. SELECT vin.cru, SUM(recolte.quantite) FROM vin, recolte WHERE vin.id = recolte.vin_id GROUP BY vin.cru ORDER BY vin.cru, SUM(recolte.quantite);
28. SELECT SUM(recolte.quantite), producteur.region FROM producteur, recolte WHERE producteur.id = recolte.producteur_id GROUP BY producteur.region;
29. SELECT producteur.nom, producteur.prenom FROM producteur, vin, recolte WHERE vin.id = recolte.vin_id AND producteur.id = recolte.producteur_id GROUP BY producteur.nom, producteur.prenom HAVING COUNT(vin.cru) >= 3;
30. SELECT COUNT(producteur.id), producteur.region FROM producteur WHERE producteur.region='Savoie' OR producteur.region='Jura' GROUP BY producteur.region;
31. SELECT p1.id, p1.nom, p2.id, p2.nom, p1.region, p2.region FROM producteur as p1 CROSS JOIN producteur as p2 WHERE p1.id <> p2.id AND p1.region = 'Alsace' AND p2.region = 'Alsace' AND p1.id < p2.id GROUP BY p1.id, p2.id;
32.
33. ALTER TABLE `vin` ADD `bio` BOOLEAN NOT NULL DEFAULT FALSE AFTER `degre`;
34. SELECT * FROM bio;
35. UPDATE vin SET bio = TRUE WHERE vin.annee=1980;
36. SELECT vin.bio, vin.annee FROM vin GROUP BY vin.bio, vin.annee;
37. INSERT INTO `vin` (`id`, `cru`, `annee`, `degre`, `bio`) VALUES ('1000', 'Champagne', '2020', '7.0', '0');
38. SELECT 1 FROM vin WHERE vin.id=1000;
39. /*On ne peut pas insérer des tuples qui ont la meme valeur de ou des attributs clés primaires. Sinon on rompt une contrainte.*/
40. /*On ne peut pas supprimer une table qui contient des attributs faisant office de référence à des attributs d'autres tables de la base de donnnées.
    Ici, la table recolte contient un attribut vin_id qui est une référence à l'attribut id de la table vin.
    Supprimer la table vin rendrait la valeur de vin_id dans recolte pointant sur rien, ce qui est impossible à gérer pour MySQL.
    On rompt alors une contrainte de clé étrangère.
    Une solution serait de supprimer la contrainte de clé étrangère à tous les attributs qui pointent vers l'attribut id de la table vin.
    Ainsi on pourra supprimer la table vin sans problème.*/