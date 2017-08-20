drop table if exists post;
create table post (    
    id integer not null primary key autoincrement, 
    username varchar(80) not null,    
    title_post text default '',
    message text default ''
); 

drop table if exists comment;
create table comment (
    id integer not null primary key autoincrement,
    postId integer not null references post(id),
    username text default '',
    message text default ''
);

insert into post values (null, "Caila",  "Testing", "It works!");
insert into post values (null, "Cleo", "Meow", "Meow");

insert into comment values (null, 2, "Caila",  "Comments work!");
insert into comment values (null, 2, "Memphis", "Meow");
insert into comment values (null, 2, "Cleo", "Meow");
