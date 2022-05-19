create table gift(
zoekterm varchar(255) not null,
gift_id int not null unique auto_increment,
seller varchar(255) not null,
title varchar(255) not null,
price decimal(15, 2) not null, 
delivery varchar (50) not null,
button varchar(255) not null,
imgLink varchar(1000),
primary key(gift_id));

create table calendar(
id int not null unique auto_increment,
username varchar(255) not null,
title varchar(255) COLLATE utf8_bin not null,
start datetime not null,
end datetime DEFAULT NULL
);

ALTER TABLE calendar
    ADD PRIMARY KEY (id);

ALTER TABLE calendar
    MODIFY id int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;

create table user(
user_id int not null unique auto_increment,
firstname varchar(255) not null,
lastname varchar(255) not null,
username varchar(255) not null unique,
birthdate date not null,
gender varchar (50) not null,
email varchar (255) not null,
password varchar (255) not null,
UserAdmin varchar (50) default 'user',
giftcheck int,
calendarcheck int,
primary key(user_id),
foreign key(calendarcheck) references calendar(id),
foreign key(giftcheck) references gift(gift_id)
);