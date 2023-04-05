-- 1. Vypište všechny filmy s počtem herců, kteří tam hrají
SELECT f.Nazev, COUNT(fh.Herec_ID) AS Pocet_hercu
FROM Film f
LEFT JOIN Film_Herec fh ON f.ID = fh.Film_ID
GROUP BY f.ID

-- 2. Vypište seznam herců – jméno a příjmení herce, název filmu ve kterém hraje
SELECT h.Jmeno, h.Prijmen, if.Nazev
FROM Herec h
LEFT JOIN Film_Herec fh ON h.ID = fh.Herec_ID
LEFT JOIN Film f ON fh.Film_ID = f.ID;

-- 3. Vypište nejdelší film z každé kategorie
SELECT k.Nazev, f.Nazev, f.Delka
FROM Kategorie k
JOIN Film_Kategorie fk ON k.ID = fk.Kategorie_ID
JOIN Film f ON fk.Film_ID = f.ID
WHERE f.Delka = (
  SELECT MAX(Delka)
  FROM Film f2
  JOIN Film_Kategorie fk2 ON f2.ID = fk2.Film_ID
  WHERE fk2.Kategorie_ID = k.ID;
)

-- 4. Vypište filmy seřazené podle počtu ocenění
SELECT f.Nazev, COUNT(fo.Oceneni_ID) AS Pocet_oceneni
FROM Film f
LEFT JOIN Film_Oceneni fo ON f.ID = fo.Film_ID
GROUP BY f.ID
ORDER BY Pocet_oceneni DESC;

-- 5. Vypište všechny herce, kteří hrají alespoň v jedné komedii 
SELECT h.Jmeno, h.Prijmeni
FROM Herec h
JOIN Film_Herec fh ON h.ID = fh.Herec_ID
JOIN Film_Kategorie fk ON fh.Film_ID = fk.Film_ID
WHERE fk.Kategorie_ID = 5;
