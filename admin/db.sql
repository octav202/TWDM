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
