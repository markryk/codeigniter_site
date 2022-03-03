<?php $this->load->view('header'); ?>


<div class="container">
    <h2 class="text-center"> Entre em contato </h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">
			<div style="border: solid 1px #B6ED3B;" class="card rounded-0 p-2">
			<?php
				if ($formerror): 
					echo '<p>'.$formerror.'</p>';
				endif;
				echo form_open('pagina/contato'); //form_open('action do formulário');
				echo form_label('Seu nome: ', 'name');
				echo form_input('nome', set_value('nome'), array('id' => 'name', 'class' => 'form-control'));
				echo "<br>";
				echo form_label('Seu email: ', 'email');
				echo form_input('email', set_value('email'), array('id' => 'email', 'class' => 'form-control'));
				echo "<br>";
				echo form_label('Assunto: ', 'assunto');
				echo form_input('assunto', set_value('assunto'), array('id' => 'assunto', 'class' => 'form-control'));
				echo "<br>";
				echo form_label('Mensagem: ', 'mensagem');
				echo form_textarea('mensagem', set_value('mensagem'), array('id' => 'mensagem', 'class' => 'form-control'));
				echo "<br>";
				echo form_submit('enviar', 'Enviar mensagem', array('class' => 'btn, btn-primary'));
				echo form_close();
			?>
			</div>

            <!--Form with header-->
            <!--<form action="mail.php" method="post">
                <div style="border: solid 1px #B6ED3B;" class="card rounded-0">
                    <div class="card-header p-0">
                        <div style="background-color: #B6ED3B;" class="text-white text-center py-2">
                            <h3><i class="fa fa-envelope"></i> Contactanos</h3>
                            <p class="m-0">Con gusto te ayudaremos</p>
                        </div>
                    </div>
                    <div class="card-body p-3">

                        
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                </div>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nome" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                </div>
                                <input type="email" class="form-control" id="nombre" name="email" placeholder="email@email.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                </div>
                                <textarea class="form-control" placeholder="Digite sua mensagem" required></textarea>
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit" value="Enviar" class="btn btn-success btn-block rounded-0 py-2">
                        </div>
                    </div>

                </div>
            </form> -->


        </div>
	</div>
</div>

<?php $this->load->view('footer'); ?>