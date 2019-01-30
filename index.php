<!--1. Get list of users with all data connected to them-->
select * from user
left join user_data_first_name on user.id = user_data_first_name.user_id
left join user_data_phone on user.id = user_data_phone.user_id
left join article on user.id = article.author_id;
<!--2. Get list of users who has articles created after 2019-01-24T13:00:00+00:00-->
select user.id, username from user
left join article on user.id = article.author_id
where article.created_at > '2019-01-24T13:00:00+00:00';
<!--3. Get list of articles connected to not top level categories-->
select * from article
left join category on article.category_id = category.id
where category.parent_id != 0;
<!--4. Get list of users whose first name starts with the letter 'V'-->
select * from user
where username like 'V%';