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
person_id int not null unique auto_increment,
firstname varchar(100) not null,
lastname varchar(100) not null,
age int not null,
gender varchar (50) not null,
paswoord varchar (50) not null,
IsAdmin boolean,
prefrencescheck int,
giftcheck int,
calendercheck int,
primary key(person_id),
foreign key(calendercheck) references calender(calender_id),
foreign key(prefrencescheck) references prefrences(prefrences_id),
foreign key(giftcheck) references gift(gift_id)
);



