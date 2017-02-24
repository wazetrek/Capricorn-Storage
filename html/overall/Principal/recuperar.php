				<div class="login-wrap">
					<div>
						<label class="lindo">Recuperar Contraseña</label>
							<div class="login-form">
								<div class="sign-in-htm">
									<form method="post" action="../modelo/recuperar.php" onsubmit="return validacionUno()">
										<div class="group">
											<label for="user" class="label">Usuario</label>
											<input id="usuario" name="usuario" type="text" class="input">
										</div>
										<div class="group">
											<label for="preg" class="label">Seleccione su pregunta de seguridad</label>
												<select name="preg" class="op">
													<option>Como se llama su mascota</option>
													<option>Cual es tu comida favorita</option>
													<option>Como se llamaba su abuela</option>
													<option>Que deporte practicaba su padre</option>
												</select>
										</div>
										<div class="group">
											<label for="resp" class="label">Respuesta</label>
											<input id="resp" name="resp" type="text" class="input" data-type="text">
										</div>
										<div class="group">
											<input id="sesion" type="submit" class="button" value="Recuperar">
										</div>
										<div class="hr"></div>
									</form>
								</div>
							</div>
					</div>
				</div>
