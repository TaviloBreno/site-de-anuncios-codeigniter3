
	<div class="main-wrapper main-wrapper-1">

		<?php $this->load->view('restrita/layout/navbar'); ?>

		<?php $this->load->view('restrita/layout/sidebar'); ?>

		<!-- Main Content -->
		<div class="main-content">
			<section class="section">
				<div class="section-body">


					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h4><?php echo $titulo; ?></h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped data-table">
											<thead>
											<tr>
												<th class="nosort">
													Imagem
												</th>
												<th>Nome Completo</th>
												<th>Login</th>
												<th>Perfil de Acesso</th>
												<th>Ativo</th>
												<th class="nosort">Ações</th>
											</tr>
											</thead>
											<tbody>

											<?php foreach ($usuarios as $user): ?>
												<tr>
													<td>
														<img alt="image" src="<?php echo base_url('uploads/usuarios/'.$user->user_foto); ?>" width="35">
													</td>
													<td><?php echo $user->first_name . ' ' . $user->last_name; ?></td>
													<td><?php echo $user->email; ?></td>
													<td><?php echo ($this->ion_auth->is_admin($user->id) ? 'Administrador' : 'Anunciante'); ?></td>
													<td>
														<?php echo ($user->active == 1 ? '<div class="badge badge-success badge-shadow">Ativo</div>' : '<div class="badge badge-danger badge-shadow">Inativo</div>'); ?>
													</td>
													<td>
														<a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
														<a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
													</td>
												</tr>
											<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>

			<?php $this->load->view('restrita/layout/setting_sidebar'); ?>

		</div>
