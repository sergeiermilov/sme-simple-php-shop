<?php require_once('./layouts/header.php'); ?>
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<!-- Left aside -->
				<?php require_once('./layouts/sidebar.php'); ?>	
				<!-- // Left aside -->
				<!-- Center Part -->
				<div class="col-md-9">

					<div class="title-1">Сделать заказ</div>

					<div class="order-item">
						<div class="order-img">
							<img class="order-img" src="./assets/img/products/iphone.jpg">
						</div>
						<div class="order-desc">
							<h4 class="order-title">Apple iPhone X 256 ГБ «серый космос»</h4>
							<div class="order-price">75 990 ₽</div>
						</div>
					</div>

					<form>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Имя и Фамилия">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Телефон">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Адрес">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary">Оформить заказ</button>
						</div>
					</form>

				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
<?php require_once('./layouts/footer.php'); ?>
