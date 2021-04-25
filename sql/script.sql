CREATE TABLE "authors" (
    "id" INTEGER,
    "name" TEXT,
    "nationality" TEXT,
    "birth_year" INTEGER,
    "fields" TEXT,
    PRIMARY KEY("id")
)

INSERT INTO authors (id, name, nationality, birth_year, fields) VALUES (1, "Abraham Silberschatz", "Israelis / American", 1952,"Database Systems, Operating Systems");
INSERT INTO authors (id, name, nationality, birth_year, fields) VALUES (2, "Andrew S. Tanenbaum", "Dutch / American", 1944, "Distributed computing, Operating Systems");
SELECT * FROM authors;

CREATE TABLE "publishers" (
    "id" INTEGER,
    "name" TEXT,
    "country" TEXT,
    "founded" INTEGER,
    "genere" TEXT,
    PRIMARY KEY("id")
)

INSERT INTO publishers (id, name, country, founded, genere) VALUES (1, "John Wiley & Sons", "United States", 1807,"Academic");
INSERT INTO publishers (id, name, country, founded, genere) VALUES (2, "Pearson Education", "United Kingdom", 1844, "Education");
SELECT * FROM publishers;

CREATE TABLE "books" (
    "id" INTEGER,
    "title" TEXT,
    "edition" TEXT,
    "copyright" INTEGER,
    "language" TEXT,
    "pages" INTEGER,
    "author_id" INTEGER,
    "publisher_id" INTEGER,
    PRIMARY KEY(id),
    FOREIGN KEY (author_id) REFERENCES authors(id),
    FOREIGN KEY (publisher_id) REFERENCES publishers(id)
)

INSERT INTO books (id, title, "edition", copyright, "language", "pages", "author_id", publisher_id) VALUES (1, "Operating System Concepts", "9th", 2012, "English", 976, 1, 1);
INSERT INTO books (id, title, "edition", copyright, "language", "pages", "author_id", publisher_id) VALUES (2, "Database System Concepts", "6th", 2010, "English", 1376, 1, 1);
INSERT INTO books (id, title, "edition", copyright, "language", "pages", "author_id", publisher_id) VALUES (3, "Computer Networks", "5th", 2010, "English", 960, 2, 2);
INSERT INTO books (id, title, "edition", copyright, "language", "pages", "author_id", publisher_id) VALUES (4, "Modern Operating Systems", "4th", 2014, "English", 1136, 2, 2);
SELECT * FROM books;
