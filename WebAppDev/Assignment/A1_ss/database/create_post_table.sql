drop table if exists post;
create table post (    
    id integer not null primary key autoincrement,    
    username varchar(80) not null,    
    title_post text default '',
    message text default ''
); 

create table if not exists comment (
    id integer not null primary key autoincrement,
    postId integer not null references post(id),
    username text default '',
    message text default ''
);

insert into post values (null, "Caila",  "Testing", "Hoping this works");
insert into post values (null, "Cleo", "I love food", "Yay it works");

insert into comment values (null, 1, "Caila",  "Please work?");
insert into comment values (null, 2, "Memphis", "I love food too bby");
insert into comment values (null, 2, "Cleo", "thanks bby:)");
