PRAGMA foreign_keys = ON;

DROP TABLE IF EXISTS lista;

CREATE TABLE lista (
  id INTEGER NOT NULL,
  nome TEXT NOT NULL,
  descricao TEXT NOT NULL,
  preco REAL NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO lista (nome, descricao, preco) VALUES
("melancia", "uma deliciosa melancia!", "90.99"),
("abacate", "mmmm mm acabate,,,", "10.11"),
("melão", "eu quero um melao", "64");
