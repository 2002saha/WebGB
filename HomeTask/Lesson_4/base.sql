CREATE TABLE students (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  age INT NOT NULL,
  address VARCHAR(100),
  PRIMARY KEY (id)
);

INSERT INTO students (name, age, address)
VALUES ('Иванов Иван', 20, 'Москва, ул. Пушкина, д.1'),
       ('Петров Петр', 21, 'Санкт-Петербург, ул. Ленина, д.2'),
       ('Сидоров Сидор', 19, 'Казань, ул. Гагарина, д.3');
``
