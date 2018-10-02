CREATE DATABASE aptech_php_14;
CREATE DATABASE aptech_php_14_phongdvh;
USE aptech_php_14_phongdvh;
CREATE TABLE users (
id int auto_increment primary key,
name varchar(50),
email varchar(100),
password varchar(50),
created_date timestamp
);
select * from aptech_php_14_phongdvh.users;
insert into users (name, email, password, created_date)
value ('tony vu', 'tonyvu@gmail.com', '12345678', now());
select * from aptech_php_14_phongdvh.users;
delete from users
where email='huanvhn@gmail.com';
update users
set email='huanvhn@gmail.com'
where id=3;
create table roles (
id int auto_increment primary key
);
select * from roles;
alter table roles
add name varchar(50);
insert into roles (name) value ('Phongdvh');
update roles set name='admin' where id=1;
insert into users (id, name, email, password, created_date)
value (1, 'nguyen van phong', 'phongnv@gmail.com','1234565',now());
create table role_user (
id int auto_increment primary key,
user_id int,
role_id int
);
select * from role_user;
truncate table roles;
select * from users;
insert into users (name, email, password, created_date) value 
('phongdvh','phongdvh@gmail.com','234565678',now()),
('namnh','namnh@gmail.com','234565678',now());
select * from role_user;
insert into roles (name) value
('admin'),
('copywriter'),
('manager'),
('directior');
insert into role_user (user_id,role_id) value 
(2,1);
select * from users
join (select * from roles) as A
join (select * from role_user) as B
on A.id = B.role_id and users.id = B.user_id
where users.name = 'namnh';
select name from users
where name NOT like 'phongdvh';
select * from role_user where user_id = (select id from users where name = 'namnh');
select id from users where name = 'namnh';
select * from roles;
select * from users where id= (select user_id from role_user where role_id = 1);
select * from roles;
select name from users where id in (select user_id from role_user where role_id = (select id from roles where name = 'admin'));