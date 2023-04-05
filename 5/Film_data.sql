INSERT INTO Film (ID, Nazev, Popis, Delka, Datum_vydani) VALUES
(1, 'The Shawshank Redemption', 'Drama', 142, '1994-10-14'),
(2, 'The Godfather', 'Drama', 175, '1972-03-24'),
(3, 'The Dark Knight', 'Action/Drama', 152, '2008-07-18'),
(4, 'The Lord of the Rings: The Fellowship of the Ring', 'Fantasy/Adventure', 178, '2001-12-19'),
(5, 'Pulp Fiction', 'Crime', 154, '1994-10-14'),
(6, 'Forrest Gump', 'Drama', 142, '1994-07-06'),
(7, 'Star Wars: Episode IV – A New Hope', 'Sci-fi/Action', 121, '1977-05-25'),
(8, 'Jurassic Park', 'Sci-fi/Adventure', 127, '1993-06-09'),
(9, 'The Lion King', 'Animation/Musical', 89, '1994-06-15');

INSERT INTO Kategorie (ID, Nazev) VALUES
(1, 'Drama'),
(2, 'Action'),
(3, 'Fantasy'),
(4, 'Adventure'),
(5, 'Crime'),
(6, 'Sci-fi'),
(7, 'Animation'),
(8, 'Musical');

INSERT INTO Herec (ID, Jmeno, Prijmeni) VALUES
(1, 'Tom', 'Hanks'),
(2, 'Morgan', 'Freeman'),
(3, 'Marlon', 'Brando'),
(4, 'Robert', 'De Niro'),
(5, 'Al', 'Pacino'),
(6, 'Denzel', 'Washington'),
(7, 'Jack', 'Nicholson'),
(8, 'Leonardo', 'DiCaprio'),
(9, 'Anthony', 'Hopkins');

INSERT INTO Oceneni (ID, Nazev, Popis, Datum, Misto) VALUES
(1, 'Oscar', 'Best Picture', '2020-02-09', 'Los Angeles'),
(2, 'Golden Globe', 'Best Actor', '2020-01-06', 'Beverly Hills'),
(3, 'BAFTA', 'Best Director', '2020-02-02', 'London'),
(4, 'Cannes', 'Palme d''Or', '2019-05-25', 'Cannes');

INSERT INTO Film_Kategorie (Film_ID, Kategorie_ID) VALUES
(1, 1), (1, 5),
(2, 1), (2, 5),
(3, 2), (3, 1),
(4, 3), (4, 4),
(5, 5),
(6, 1),
(7, 2), (7, 6),
(8, 2), (8, 4), (8, 6),
(9, 7), (9, 8);

INSERT INTO Film_Herec (Film_ID, Herec_ID) VALUES
(1, 2), (1, 6), (1, 8),
(2, 3), (2, 5), (2, 7),
(3, 3), (3, 5), (3, 9),
(4, 4), (4, 6), (4, 8),
(5, 4), (5, 6), (5, 7),
(6, 1), (6, 2), (6, 6),
(7, 7), (7, 8),
(8, 8),
(9, 1), (9, 6), (9, 9);

INSERT INTO Film_Oceneni (Film_ID, Oceneni_ID) VALUES
(1, 1), (1, 2), (1, 3),
(2, 1), (2, 2), (2, 3),
(3, 1), (3, 3),
(4, 1), (4, 3),
(5, 1), (5, 3), (5, 4),
(6, 1), (6, 2),
(7, 1), (7, 3),
(8, 4),
(9, 1), (9, 4);