CREATE TABLE expense (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  category text,
  name text,
  nickname text,
  source text,
  amount text,
  date date,
  recurrantInterval text,
  currentInstallment int,
  totalInstallments int,
  status text,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE income (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  category text,
  name text,
  nickname text,
  amount text,
  payday int,
  status text,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE categories (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  name text,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE sources (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  name text,
  nickname text,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;