drop table if exists post;
create table post (    
    id integer not null primary key autoincrement,    
    username varchar(80) not null,    
    title_post text default '',
    message text default ''
); 