Symfony Frontend App
=============

username: admin
password: test

CREATE DATABASE frontend;
GRANT ALL PRIVILEGES ON frontend.* TO frontend@localhost IDENTIFIED BY 'password';
FLUSH PRIVILEGES;

insert into user (username, password, first_name, last_name) values ("admin", "$2y$12$ggSFO4hjlTQ2mSw1G6YKku7LHzJ8CxE4o4MKdLCIw9Juq/s9dCRxK", "Admin", "User");