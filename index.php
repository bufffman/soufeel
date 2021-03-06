<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
	<title>Soufeel</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/nouislider.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="body">
	<!-- Content here -->
	<div class="wrapper">
		<div class="row justify-content-start">
			<div class="col">
				<div class="dom_link">
					<a href="#">
						<span class="dom_link_dop">Главная</span>
					</a>
						<span class="dom_link_dop">
							<svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.25 0.499999L4.75 4L1.25 7.5" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</span>
					<a href="#">
						<span class="dom_link_main">Каталог</span>
					</a>
				</div>
			</div>
		</div>
		<div class="row justify-content-end">
			<div class="col-3 d-none d-md-block">
				<div class="block_sort">
					<form class="d-flex justify-content-end">
						<select class="element_sort">
							<option>
								По популярности
							</option>
							<option>
								Самое новое
							</option>
							<option>
								Цена: высокая-низкая
							</option>
							<option>
								Цена: низкая-высокая
							</option>
						</select>
					</form>
				</div>
			</div>
		</div>
		<div class="row d-md-none">
			<div class="col title-catalog">Каталог</div>
		</div>
		<div class="row d-md-none" style="align-items: center; margin-bottom: 40px; margin-top: 4px;">
			<div class="col-3 btn-filter">
				<button id="myBtn" style="display: flex; flex-wrap: wrap; flex-direction: column; border: none; background: none; gap: 3px;">
					<span style="display:flex; gap: 3px; justify-content: space-between; align-items: center;">
						<svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
					       <path fill-rule="evenodd" clip-rule="evenodd" d="M0.882812 4.26281C0.882812 5.85458 2.17222 7.14281 3.76281 7.14281C5.3534 7.14281 6.64281 5.85458 6.64281 4.26281C6.64281 2.67222 5.3534 1.38281 3.76281 1.38281C2.17222 1.38281 0.882812 2.67222 0.882812 4.26281Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
		                </svg>

						<svg width="9" height="3" viewBox="0 0 9 3" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.882812 1.26304H8.11811" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</span>

					<span style="display: flex; gap: 3px; justify-content: space-between; align-items: center;">
						<svg width="9" height="3" viewBox="0 0 9 3" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.882812 1.26304H8.11811" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>

						<svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
					       <path fill-rule="evenodd" clip-rule="evenodd" d="M0.882812 4.26281C0.882812 5.85458 2.17222 7.14281 3.76281 7.14281C5.3534 7.14281 6.64281 5.85458 6.64281 4.26281C6.64281 2.67222 5.3534 1.38281 3.76281 1.38281C2.17222 1.38281 0.882812 2.67222 0.882812 4.26281Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
			            </svg>
			        </span>
		        </button>
			</div>

			<div class="col-9 d-flex" style="justify-content: flex-end; align-items: center; gap: 10px">
				<button style="width: 23px; height: 23px; background-color: #E0E0E0; border: none">
				</button>

				<div style="width: 1px; height: 34px; background-color: #E0E0E0"></div>

				<button style="width: 25px; border: none; display: flex; flex-direction: row; flex-wrap: wrap; gap: 2px; background: none;">
					<div style="width: 10px; height: 10px; background-color: black;"></div>
					<div style="width: 10px; height: 10px; background-color: black;"></div>
					<div style="width: 10px; height: 10px; background-color: black;"></div>
					<div style="width: 10px; height: 10px; background-color: black;"></div>
				</button>
			</div>
		</div>
	  	<div class="row justify-content-between">
	  		<div class="col-md-3 d-none d-md-block">
	  			<div class="row">
	  				<div class="col" id="block_switch_gender">
	  					<button class="col-lg-5 col-md-12 btn_switch_gender">Женщинам</button>
						<button class="col-lg-5 col-md-12 btn_switch_gender">Мужчинам</button>
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col">
	  					<p class="category_title" style="margin-bottom: 20px; margin-top: 30px;">Категории</p>
	  					<div class="element_category">
		  					<button>Спортивные костюмы</button>
		  					<button>Худи</button>
		  					<button>Лонгсливы</button>
		  					<button>Свитшоты</button>
		  				</div>
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col">
	  					<hr class="line_filter" style="margin-top: 30px">
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col">
	  					<p class="category_title" style="margin-bottom: 12px; margin-top: 28px;">Размер</p>
	  					<div class="block_switch_size">
	  						<button class="element_switch_size" >XXS</button>
	  						<button class="element_switch_size">XS</button>
	  						<button class="element_switch_size">S</button>
	  						<button class="element_switch_size">M</button>
	  						<button class="element_switch_size">L</button>
	  						<button class="element_switch_size">XL</button>
	  						<button class="element_switch_size">XXL</button>
	  						<button class="element_switch_size">XXXL</button>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col">
	  					<hr class="line_filter" style="margin-top: 21px">
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col">
	  					<p class="category_title" style="margin-bottom: 25px; margin-top: 30px;">Цена</p>

	  					<div class="wrapper_slider_scroll">
	  						<div id="slider_scroll"></div>
	  					</div>

	  					<div class="d-flex justify-content-lg-start justify-content-md-between block_input_price">
	  						<input type="text" placeholder="от" class="element_input_price">
	  						<input type="text" placeholder="до" class="element_input_price">
	  					</div>
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col">
	  					<hr class="line_filter" style="margin-top: 30px">
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col">
	  					<p class="category_title" style="margin-bottom: 13px; margin-top: 32px;">Цвет</p>
	  					<div class="block_switch_color">
		  					<button class="element_switch_color" style="background-color: #ffffff;"></button>
	  						<button class="element_switch_color" style="background-color: #000000;"></button>
	  						<button class="element_switch_color" style="background-color: #33455D;"></button>
	  						<button class="element_switch_color" style="background-color: #B37992;"></button>
	  						<button class="element_switch_color" style="background-color: #D6B098;"></button>
	  						<button class="element_switch_color" style="background-color: #88A7BC;"></button>
  						</div>
	  				</div>
	  			</div>

			</div>

			<div id="myModal">
				<div class="modal-content">
					<div class="modal-content-head">
						<span class="name-filter">Фильтр</span>
						<span class="close-modal"><i class="fa fa-times" aria-hidden="true"></i>
						</span> <!-- &times; -->
					</div>
					<form>
						<div class="name-title-filter">Сортировать по</div>
						<div class="group-atribut">
							<input type="radio" name="sort" class="check-radio" id="radio-1"><label for="radio-1">По популярности</label>
							<input type="radio" name="sort" class="check-radio" id="radio-2"><label for="radio-2">Самое новое</label>
							<input type="radio" name="sort" class="check-radio" id="radio-3"><label for="radio-3">Цена: высокая-низкая</label>
							<input type="radio" name="sort" class="check-radio" id="radio-4"><label for="radio-4">Цена: низкая-высокая</label>
						</div>
						<hr>
						<div class="name-title-filter">Пол</div>
						<div class="group-atribut">
							<input type="checkbox" name="gender" class="check-checkbox" id="gend-1"><label for="gend-1">Женщины</label>
							<input type="checkbox" name="gender" class="check-checkbox" id="gend-2"><label for="gend-2">Мужчины</label>
						</div>
						<hr>
						<div class="name-title-filter">Категории</div>
						<div class="group-atribut">
							<input type="checkbox" name="categor" class="check-checkbox" id="categ-1"><label for="categ-1">Спортивные костюмы</label>
							<input type="checkbox" name="categor" class="check-checkbox" id="categ-2"><label for="categ-2">Худи</label>
							<input type="checkbox" name="categor" class="check-checkbox" id="categ-3"><label for="categ-3">Лонгсливы</label>
							<input type="checkbox" name="categor" class="check-checkbox" id="categ-4"><label for="categ-4">Свитшоты</label>
						</div>
						<hr>
						<div class="name-title-filter">Размер</div>
							<div class="block_switch_size">
								<button class="element_switch_size">XXS</button>
								<button class="element_switch_size">XS</button>
								<button class="element_switch_size">S</button>
								<button class="element_switch_size">M</button>
								<button class="element_switch_size">L</button>
								<button class="element_switch_size">XL</button>
								<button class="element_switch_size">XXL</button>
								<button class="element_switch_size">XXXL</button>
							</div>
						<hr>
						<div class="name-title-filter">Цена</div>
							<div class="row">
								<div class="col">
									<div class="wrapper_slider_scroll">
										<div id="slider_scroll"></div>
									</div>
								</div>
							</div>
						<hr>
						<div class="name-title-filter">Цвет</div>
							<div class="block_switch_color">
								<button class="element_switch_color" style="background-color: #ffffff;"></button>
								<button class="element_switch_color" style="background-color: #000000;"></button>
								<button class="element_switch_color" style="background-color: #33455D;"></button>
								<button class="element_switch_color" style="background-color: #B37992;"></button>
								<button class="element_switch_color" style="background-color: #D6B098;"></button>
								<button class="element_switch_color" style="background-color: #88A7BC;"></button>
							</div>
						<input type="submit" class="btn-push-filter" value="Применить">

						<center><div style="max-width: 134px; height: 5px; background-color: black; margin-top: 41px; margin-bottom: 7px;"></div></center>

					</form>
				</div>
			</div>  

	  		<div class="col-md-9 col-12">
	  			<div class="row" id="block_each_goods">

	  				<div class="col-md-4 col-sm-4 col-6 block-card-good">
	  					<i class="fa fa-heart-o" id="fa-icon-heart" aria-hidden="true"></i>
	  					<div class="con_sale">
		  					-50%
						</div>
	  					<!--<div class="card_goods_photo" style="background:url(source/img/img1.png) no-repeat center top; background-size: cover;"></div> -->
	  					<img class="card_goods_photo" src="source/img/img1.png">
	  					<div class="card_goods_description">
	  						<div class="card_goods_name">
	  							Костюм на флисе с капюшоном
	  						</div>
	  						<div class="card_goods_price">
	  							<span class="card_goods_price_new">3 655 ₽</span>
	  							<sup class="card_goods_price_old">5 890 ₽</sup>
	  						</div>
	  					</div>
	  				</div>

	  				<div class="col-md-4 col-sm-4 col-6 block-card-good">
	  					<i class="fa fa-heart-o" id="fa-icon-heart" aria-hidden="true"></i>
	  					<div class="con_sale">
		  					-50%
						</div>
	  					<!--<div class="card_goods_photo" style="background:url(source/img/img1.png) no-repeat center top; background-size: cover;"></div> -->
	  					<img class="card_goods_photo" src="source/img/img1.png">
	  					<div class="card_goods_description">
	  						<div class="card_goods_name">
	  							Костюм на флисе с капюшоном
	  						</div>
	  						<div class="card_goods_price">
	  							<span class="card_goods_price_new">3 655 ₽</span>
	  							<sup class="card_goods_price_old">5 890 ₽</sup>
	  						</div>
	  					</div>
	  				</div>

	  				<div class="col-md-4 col-sm-4 col-6 block-card-good">
	  					<i class="fa fa-heart-o" id="fa-icon-heart" aria-hidden="true"></i>
	  					<div class="con_sale">
		  					-50%
						</div>
	  					<!--<div class="card_goods_photo" style="background:url(source/img/img1.png) no-repeat center top; background-size: cover;"></div> -->
	  					<img class="card_goods_photo" src="source/img/img1.png">
	  					<div class="card_goods_description">
	  						<div class="card_goods_name">
	  							Костюм на флисе с капюшоном
	  						</div>
	  						<div class="card_goods_price">
	  							<span class="card_goods_price_new">3 655 ₽</span>
	  							<sup class="card_goods_price_old">5 890 ₽</sup>
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	</div>
	<script src="js/nouislider.min.js"></script>
	<script src="js/nouislider.main.js"></script>
	<script src="https://kit.fontawesome.com/985aaebe90.js" crossorigin="anonymous"></script>
	<script src="js/animation.filter.main.js"></script>
</body>
</html>
