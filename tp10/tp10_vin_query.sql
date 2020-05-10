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
31. SELECT producteur.id as id1, producteur.nom as nom1, producteur.id as id2, producteur.nom as nom2, producteur.region as region FROM producteur WHERE region='Alsace'
