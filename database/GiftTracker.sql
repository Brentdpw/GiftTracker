create table prefrences(
prefrences_id int not null unique auto_increment,
preferences_Name int not null,
primary key(prefrences_id));

create table gift(
gift_id int not null unique auto_increment,
gift_Name int not null,
primary key(gift_id));

create table calender(
calender_id int not null unique auto_increment,
EvenementName varchar(100) not null,
Calender_Date date
);

create table user(
user_id int not null unique auto_increment,
firstname varchar(255) not null,
lastname varchar(255) not null,
username varchar(255) not null,
birthdate date not null,
gender varchar (255) not null,
email varchar (255) not null,
password varchar (255) not null,
IsAdmin boolean,
prefrencescheck int,
giftcheck int,
calendercheck int,
primary key(user_id),
foreign key(calendercheck) references calender(calender_id),
foreign key(prefrencescheck) references prefrences(prefrences_id),
foreign key(giftcheck) references gift(gift_id)
);