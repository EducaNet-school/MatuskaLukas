CREATE TABLE Film (
ID INT PRIMARY KEY,
Nazev varchar(100),
Popis varchar(100),
Delka INT,
Datum_vydani DATE
);

CREATE TABLE Kategorie (
ID INT PRIMARY KEY,
Nazev varchar(100)
);

CREATE TABLE Herec (
ID INT PRIMARY KEY,
Jmeno varchar(100),
Prijmeni varchar(100)
);

CREATE TABLE Oceneni (
ID INT PRIMARY KEY,
Nazev varchar(100),
Popis varchar(100),
Datum DATE,
Misto varchar(100)
);

CREATE TABLE Film_Kategorie (
Film_ID INT,
Kategorie_ID INT,
FOREIGN KEY (Film_ID) REFERENCES Film(ID),
FOREIGN KEY (Kategorie_ID) REFERENCES Kategorie(ID)
);

CREATE TABLE Film_Herec (
Film_ID INT,
Herec_ID INT,
FOREIGN KEY (Film_ID) REFERENCES Film(ID),
FOREIGN KEY (Herec_ID) REFERENCES Herec(ID)
);

CREATE TABLE Film_Oceneni (
Film_ID INT,
Oceneni_ID INT,
FOREIGN KEY (Film_ID) REFERENCES Film(ID),
FOREIGN KEY (Oceneni_ID) REFERENCES Oceneni(ID)
);