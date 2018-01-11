CREATE TABLE IF NOT EXISTS USERS(
    user_id INT NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(32),
    lastName VARCHAR(32),
    email VARCHAR(32),
    pass VARCHAR(64),
    role VARCHAR(10),
    PRIMARY KEY (user_id)
);

CREATE TABLE IF NOT EXISTS TOPIC(
    topic_id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(100),
    topic_date VARCHAR(50),
    user_id INT,
    PRIMARY KEY (topic_id),
    FOREIGN KEY (user_id ) references USERS(user_id)
);


CREATE TABLE IF NOT EXISTS POST(
    post_id INT NOT NULL AUTO_INCREMENT,
    post_description VARCHAR(100),
    post_date VARCHAR(32),
    user_id INT,
	topic_id INT,
	PRIMARY KEY (post_id),
    FOREIGN KEY (user_id ) references USERS(user_id),
	FOREIGN KEY (topic_id ) references TOPIC(topic_id)
);

CREATE TABLE IF NOT EXISTS PLAYER(
    player_id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(32),
    last_name VARCHAR(32),
	country VARCHAR(32),
    birthplace VARCHAR(32),
	age VARCHAR(32), 
	ranking VARCHAR(33),
    weight VARCHAR(64),
    height VARCHAR(10),
	coach VARCHAR(30),
	about VARCHAR(1000),
	img VARCHAR(1000),
    PRIMARY KEY (user_id)
);

CREATE TABLE IF NOT EXISTS RANKING(
    rank_id INT NOT NULL AUTO_INCREMENT,
    player_id INT NOT NULL,
    points INT NOT NULL,
    PRIMARY KEY (rank_id)
);

INSERT INTO RANKING (player_id,points) VALUES(1,12750);
INSERT INTO RANKING (player_id,points) VALUES(2,12325);
INSERT INTO RANKING (player_id,points) VALUES(3,10500);
INSERT INTO RANKING (player_id,points) VALUES(4,9275);
INSERT INTO RANKING (player_id,points) VALUES(5,8200);
INSERT INTO RANKING (player_id,points) VALUES(6,7950);
INSERT INTO RANKING (player_id,points) VALUES(7,6100);
INSERT INTO RANKING (player_id,points) VALUES(8,5635);
INSERT INTO RANKING (player_id,points) VALUES(9,5500);
INSERT INTO RANKING (player_id,points) VALUES(10,5215);


CREATE TABLE IF NOT EXISTS TOURNAMENT(
    tournament_id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(64),
    type VARCHAR(64),
    surface VARCHAR(64),
    place VARCHAR(64),
    month VARCHAR(64), 
    finance VARCHAR(64),
    PRIMARY KEY (tournament_id)
);

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Australian Open','Grand Slam 2000', 'Outdoor Hard', 'Melbourne, Australia','January', '€20,190,930');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('ABN AMRO World Tennis','ATP 500', 'Indoor Hard', 'Rotterdam, Netherlands','February', '€1,996,245');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Rio Open','ATP 500', 'Outdoor Clay', 'Rio de Janeiro, Brazil','February', '$1,842,475');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Dubai Duty Free','ATP 500', 'Outdoor Hard', 'Dubai, U.A.E','February', '$3,057,135');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('BNP Paribas Open','ATP 1000', 'Outdoor Hard', 'Indian Wells, U.S.A','March', '$8,909,960');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Miami Open','ATP 1000', 'Outdoor Hard', 'Miami, Florida , U.S.A','March', '$8,909,960');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Rolex Monte-Carlo Masters','ATP 1000', 'Outdoor Clay', 'Monte Carlo, Monaco','April', '€5,238,735');


INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Barcelona Open','ATP 500', 'Outdoor Clay', 'Barcelona, Spain','April', '€2,794,220');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Mutua Madrid Open','ATP 1000', 'Outdoor Clay', 'Madrid, Spain','May', '€7,190,930');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Internazionali BNL ','ATP 1000', 'Outdoor Clay', 'Rome, Spain','May', '€5,444,985');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Roland Garros','Grand Slam 2000', 'Outdoor Clay', 'Paris, France','April', '€20,190,930');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Gerry Weber Open','ATP 500', 'Outdoor Grass', 'Halle, Germany','June', '€2,116,915');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Wimbledon','Grand Slam 2000', 'Outdoor Grass', 'London, U.K','July', '€20,190,930');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Rogers Cup','ATP 1000', 'Outdoor Hard', 'Toronto, Canada','August', '$5,939,970');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Western & Southern Open','ATP 1000', 'Outdoor Hard', 'Cincinnati, U.S.A','August', '$6,335,970');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('US Open','Grand Slam 2000', 'Outdoor Hard', 'New York, U.S.A','August', '€20,190,930');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('China Open','ATP 500', 'Outdoor Hard', 'Beijing, China','October', '$4,658,510');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Rakuten Japan Open','ATP 500', 'Indoor Hard', 'Tokyo, Japan','October', '$1,928,580');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Rolex Shanghai Masters','ATP 1000', 'Outdoor Hard', 'Shanghai, China','October', '$9,219,970');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Swiss Indoors Basel','ATP 500', 'Indoor Hard', 'Basel, Switzerland','October', '€2,442,740');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Rolex Paris Masters','ATP 1000', 'Indoor Hard', 'Paris, France','October', '€5,444,985');

INSERT INTO TOURNAMENT (title,type, surface, place, month, finance) 
VALUES('Nitto ATP Finals','ATP Final', 'Indoor Hard', 'London, U.K.','November', '€20,190,930');
