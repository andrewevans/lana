<?php

Admin::model(Person::class)->title('People')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('alias', 'Alias');
	Column::string('favorite_color', 'Favorite_color');
	Column::string('meta_title', 'Meta_title');
	Column::string('year_begin', 'Year_begin');
	Column::string('year_end', 'Year_end');
})->form(function ()
{
	FormItem::text('slug', 'Slug');
	FormItem::text('alias', 'Alias');
	FormItem::text('first_name', 'First Name');
	FormItem::text('last_name', 'Last Name');
	FormItem::text('url_slug', 'Url Slug');
	FormItem::text('favorite_color', 'Favorite Color');
	FormItem::text('meta_title', 'Meta Title');
	FormItem::text('meta_description', 'Meta Description');
	FormItem::text('year_begin', 'Year Begin');
	FormItem::text('year_end', 'Year End');
});