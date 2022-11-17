<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Modificar Cuenta</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Modificar Cuenta <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container-fluid px-0">
		<div class="row d-flex no-gutters">
			<div class="col-md-12 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
				<div class="py-md-5">
					<div class="heading-section ftco-animate mb-5">
						<span class="subheading">Primer paso</span>
						<h2 class="mb-4">Modifica tus datos</h2>
					</div>
					<form method="POST" action="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("modificar") ?>">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Usuario <span class="text-danger">(*)</span></label>
									<input type="text" class="form-control" placeholder="Usuario único" name="txtUsuario" value="<?php echo isset($resultados["usuario"]) ? $resultados["usuario"] : "" ?>" disabled>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Email <span class="text-danger">(*)</span></label>
									<input type="email" class="form-control" placeholder="Su Email" name="txtCorreo" value="<?php echo isset($resultados["correo"]) ? $resultados["correo"] : "" ?>">
									<span class="text-danger"><?php echo isset($error[1]) ? $error[1] : "" ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Nombre Contacto</label>
									<input type="text" class="form-control" placeholder="Nombre de Contacto" name="txtNombre" value="<?php echo isset($resultados["nombre_contacto"]) ? $resultados["nombre_contacto"] : "" ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Nombre Restaurante</label>
									<input type="text" class="form-control" placeholder="Nombre Empresa" name="txtNombreEmpresa" value="<?php echo isset($resultados["nombre_restaurante"]) ? $resultados["nombre_restaurante"] : "" ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Cuenta Paypal <span class="text-danger">(*)</span></label>
									<input type="email" class="form-control" placeholder="Su Email" name="txtCuentaPaypal" value="<?php echo isset($resultados["cuenta_paypal"]) ? $resultados["cuenta_paypal"] : "" ?>">
									<span class="text-danger"><?php echo isset($error[4]) ? $error[1] : "" ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Logo de Restaurante <span class="text-danger"></span></label>
									<input type="url" class="form-control" placeholder="URL de Logo de restaurnate (200x200 px)" name="imgLogo" value="<?php echo isset($resultados["logo_empresa"]) ? $resultados["logo_empresa"] : "" ?>">
									<span class="text-danger"><?php echo isset($error[4]) ? $error[1] : "" ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Imagen de Fondo <span class="text-danger"></span></label>
									<input type="url" class="form-control" placeholder="URL de Logo de iamgen de fondo  (800x800 px)" name="imgFondo" value="<?php echo isset($resultados["imagen_fondo"]) ? $resultados["imagen_fondo"] : "" ?>">
									<span class="text-danger"><?php echo isset($error[4]) ? $error[1] : "" ?></span>
								</div>
							</div>
							<div class="col-md-12 mt-12">
								<input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
								<div class="form-group">
									<div class="row">
										<div class="col-md-6"><span class="text-danger">(*) Obligatorio</span></div>
										<br><br>
									</div>
									<input type="submit" value="Actualizar >" class="btn btn-success py-3 px-5">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>