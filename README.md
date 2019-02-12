Create a database names 'blog' and a table named 'blog_post'.
Commands:
1. CREATE DATABASE blog;
2. USE blog;
3. CREATE TABLE blog_post (
			id integer(11) PRIMARY KEY auto_increment,
			post_title varchar(255),
			post_content text,
			author varchar(255),
			posted_on date
			);	
