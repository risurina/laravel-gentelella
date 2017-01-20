<?php

Route::get('/',function () {
	return view('template_pages.index');
});

Route::group(['prefix' => 'template'], function() {
	Route::get('',function () {
		return view('template_pages.index');
	});

	Route::get('calendar',function(){
		return view('template_pages.calendar');
	})->name('template_pages.calendar');

	Route::get('chartjs',function(){
		return view('template_pages.chartjs');
	})->name('template_pages.chartjs');


	Route::get('chartjs2',function(){
		return view('template_pages.chartjs2');
	})->name('template_pages.chartjs2');

	Route::get('contacts',function(){
		return view('template_pages.contacts');
	})->name('template_pages.contacts');

	Route::get('e_commerce',function(){
		return view('template_pages.e_commerce');
	})->name('template_pages.e_commerce');

	Route::get('echarts',function(){
		return view('template_pages.echarts');
	})->name('template_pages.echarts');

	Route::get('fixed_footer',function(){
		return view('template_pages.fixed_footer');
	})->name('template_pages.fixed_footer');

	Route::get('fixed_sidebar',function(){
		return view('template_pages.fixed_sidebar');
	})->name('template_pages.fixed_sidebar');

	Route::get('form',function(){
		return view('template_pages.form');
	})->name('template_pages.form');

	Route::get('form_advanced',function(){
		return view('template_pages.form_advanced');
	})->name('template_pages.form_advanced');

	Route::get('form_buttons',function(){
		return view('template_pages.form_buttons');
	})->name('template_pages.form_buttons');

	Route::get('form_upload',function(){
		return view('template_pages.form_upload');
	})->name('template_pages.form_upload');

	Route::get('form_validation',function(){
		return view('template_pages.form_validation');
	})->name('template_pages.form_validation');

	Route::get('form_wizards',function(){
		return view('template_pages.form_wizards');
	})->name('template_pages.form_wizards');


	Route::get('general_elements',function(){
		return view('template_pages.general_elements');
	})->name('template_pages.general_elements');

	Route::get('glyphicons',function(){
		return view('template_pages.glyphicons');
	})->name('template_pages.glyphicons');

	Route::get('icons',function(){
		return view('template_pages.icons');
	})->name('template_pages.icons');

	Route::get('inbox',function(){
		return view('template_pages.inbox');
	})->name('template_pages.inbox');

	Route::get('index',function(){
		return view('template_pages.index');
	})->name('template_pages.index');

	Route::get('index2',function(){
		return view('template_pages.index2');
	})->name('template_pages.index2');

	Route::get('index3',function(){
		return view('template_pages.index3');
	})->name('template_pages.index3');

	Route::get('invoice',function(){
		return view('template_pages.invoice');
	})->name('template_pages.invoice');

	Route::get('level2',function(){
		return view('template_pages.level2');
	})->name('template_pages.level2');

	Route::get('login',function(){
		return view('template_pages.login');
	})->name('template_pages.login');

	Route::get('map',function(){
		return view('template_pages.map');
	})->name('template_pages.map');

	Route::get('media_gallery',function(){
		return view('template_pages.media_gallery');
	})->name('template_pages.media_gallery');

	Route::get('morisjs',function(){
		return view('template_pages.morisjs');
	})->name('template_pages.morisjs');

	Route::get('other_charts',function(){
		return view('template_pages.other_charts');
	})->name('template_pages.other_charts');

	Route::get('page_403',function(){
		return view('template_pages.page_403');
	})->name('template_pages.page_403');

	Route::get('page_404',function(){
		return view('template_pages.page_404');
	})->name('template_pages.page_404');

	Route::get('page_500',function(){
		return view('template_pages.page_500');
	})->name('template_pages.page_500');

	Route::get('plain_page',function(){
		return view('template_pages.plain_page');
	})->name('template_pages.plain_page');

	Route::get('pricing_tables',function(){
		return view('template_pages.pricing_tables');
	})->name('template_pages.pricing_tables');

	Route::get('profile',function(){
		return view('template_pages.profile');
	})->name('template_pages.profile');

	Route::get('project_detail',function(){
		return view('template_pages.project_detail');
	})->name('template_pages.project_detail');

	Route::get('projects',function(){
		return view('template_pages.projects');
	})->name('template_pages.projects');

	Route::get('tables',function(){
		return view('template_pages.tables');
	})->name('template_pages.tables');

	Route::get('tables_dynamic',function(){
		return view('template_pages.tables_dynamic');
	})->name('template_pages.tables_dynamic');

	Route::get('typography',function(){
		return view('template_pages.typography');
	})->name('template_pages.typography');

	Route::get('widgets',function(){
		return view('template_pages.widgets');
	})->name('template_pages.widgets');

	Route::get('xx',function(){
		return view('template_pages.xx');
	})->name('template_pages.xx');

});
