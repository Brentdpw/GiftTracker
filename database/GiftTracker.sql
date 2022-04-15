create table prefrences(
prefrences_id int not null unique auto_increment,
preferences_Name int not null,
primary key(prefrences_id));

create table gift(
gift_id int not null unique auto_increment,
gift_Name int not null,
primary key(gift_id));

create table calendar(
id int not null unique auto_increment,
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
username varchar(255) not null,
birthdate date not null,
gender varchar (50) not null,
email varchar (255) not null,
password varchar (255) not null,
UserAdmin varchar (50) default 'user',
prefrencescheck int,
giftcheck int,
calendarcheck int,
primary key(user_id),
foreign key(calendarcheck) references calendar(id),
foreign key(prefrencescheck) references prefrences(prefrences_id),
foreign key(giftcheck) references gift(gift_id)
);